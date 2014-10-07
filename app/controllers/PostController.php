<?php

class PostController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
        $posts = Post::all();
        $posts = Post::orderBy('id', 'DESC')->get();
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
        
        //When using a static you must use
        //the $ (dollar sign)
        $validator = Validator::make(Input::all(), Post::$rules);
        
        
        if ($validator->fails()) {
            //If validator fails we are going to send them back
            //with all their input and the errors received
            //from validator
            return Redirect::back()->withInput()->withErrors($validator);
        }
        else {
            $post = new Post();
        
            //Input::has('something') is good for setting
            //up checkbox and seeing if it has been 
            $post->title = Input::get('title');
            $post->content = Input::get('content');
            $post->save();
            
            $id = $post->id;
            
            //You can also use Input::get('title', 'Default Value');
            //So if nothing is typed in then a default value is set
            
            return Redirect::action('PostController@show', $id);
        }
        
        
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
        $post->title = "Let's get get get it postin'";
        $post->content = "I like rap puns";
        $post->save();
        
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
        var_dump($post);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $number
     * @return Response
     */
    public function destroy($number)
    {
        //
        $post = Post::findOrFail($number);
        $post->delete();
    }


}
