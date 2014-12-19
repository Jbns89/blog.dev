<?php

class PostController extends BaseController {
    
    
    public function __construct()
    {
        // call base controller constructor where the csrf token is required
        parent::__construct();

        // run auth filter before all methods on this controller except index and show
        // if we run into a url and we aren't authenticated we will be rerouted to log in
        //redirect intended says oh you werent logged in so let me route you their first and then  
        //take you back to where you intended to go
        $this->beforeFilter('auth', array('except' => array('index', 'show')));
    }
    

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        
        
        $search = Input::get('search');

        //user is the name of the method
        $query = Post::with('user');
        
        $query->where('title', 'like', "%$search%");
        
        $query->orWhere('content', 'like', "%$search%");
        
        //This stands for dump and die.
        //dd(Auth::user()->id);
        
        //We use this so there is less querying that needs to be done
        //If you're not gonna display anything for the user then you dont 
        //need to do eager loading, also if you need to grab tons of data 
        //it would be better to do lazy loading
        $posts = $query->orderBy('id', 'DESC')->paginate(4);

        return View::make('posts.index')->with('posts', $posts);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return View::make('posts.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $post = new Post();
        return $this->savePost($post);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($number)
    {
        //
        $post = Post::find($number);
        
        if(!$post) {
            
            Log::info('User encountered 404 error', Input::all());
            //This is showing a 404 error page
            App::abort(404);
        }
        
        if(Auth::user() == $post->user_id){
            
        }

        return View::make('posts.show')->with('post', $post);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $number
     * @return Response
     */
    public function edit($number)
    {
        //
        $post = Post::find($number);
        return View::make('posts.update')->with('post', $post);
        
        
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int  $number
     * @return Response
     */
    public function update($number)
    {
        //
        $post = Post::find($number);
        return $this->savePost($post);

        
    }
    
    protected function savePost(Post $post)
    {
        
        //When using a static you must use
        //the $ (dollar sign)
        $validator = Validator::make(Input::all(), Post::$rules);
        
        
        if ($validator->fails()) {
            
            //FIGURE OUT HOW TO INCORPORATE THIS WITH 
            //Session::flash('errorMessage', 'All fields must be filled out');
            
            //If validator fails we are going to send them back
            //with all their input and the errors received
            //from validator
            Log::info('User did not fill out all fields of form', Input::all());
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else {
            
            $dest_path = '';
            $orig_name = '';
            
            //Input::has('something') is good for setting
            //up checkbox and seeing if it has been filled in
            $post->title = Input::get('title');
            $post->content = Input::get('content');
            //This gives you the id of the currently logged in user
            $post->user_id = Auth::id();
            
            if (Input::hasFile('image')) {
                $file = Input::file('image');
                $orig_name = $file->getClientOriginalName() . str_random(6);
                $dest_path = public_path() . '/img/';
                $upload = $file->move($dest_path, $orig_name);
                
                $post->img_path = '/img/' . $orig_name;
            }
            
            $post->save();
            
            $id = $post->id;
            
            Session::flash('successMessage','Post was saved!');
            
            //You can also use Input::get('title', 'Default Value');
            //So if nothing is typed in then a default value is set
            
            return Redirect::action('PostController@show', $id);
        }
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $number
     * @return Response
     */
    public function destroy($number)
    {
        //LOOK UP SOFT DELETING
        $post = Post::findOrFail($number);
        
        if(!$post) {
            
            App::abort(404);
        }
        
        $post->delete();
        
        Log::info("$post->title has been deleted");
        
        Session::flash('successMessage', 'Post deleted!');
        
        return Redirect::action('PostController@index');
        
    }


}
