<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@resume');

Route::get('/portfolio', 'HomeController@portfolio');

Route::get('/rolldice/{guess}', function($guess)
{
   $diceNum = mt_rand(1,6);
   $data = [
        'guess' => $guess,
        'diceNum' => $diceNum
   ];
   
   return View::make('roll_dice', $data);
});

Route::resource('posts', 'PostController');
