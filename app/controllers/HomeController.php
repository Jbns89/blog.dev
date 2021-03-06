<?php

class HomeController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |   Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        return View::make('hello');
    }
    
    public function resume()
    {
        return View::make('resume');
    }
    
    public function portfolio()
    {
        return View::make('portfolio');
    }

    public function showLogin()
    {
        return View::make('login');
    }
    
    
    public function doLogin()
    {
        //Attempt to login the user
        //If login succeeds, redirect intended
        //if login fails, redirect back to login form
        
        $credentials = [
            'email' => Input::get('email'),
            'password' => Input::get('password')
        ];
        
        $valid = Auth::attempt($credentials);
        
        if ($valid) {
            
            return Redirect::intended('posts');
        }
        
        else {
            return Redirect::back()->withInput();
        }
    }
        
    
    
    public function doLogout()
    {
        //Logout the user
        //Redirect somewhere nice
        Auth::logout();
        return Redirect::action('PostController@index');
        
    }
    
    
    


}
