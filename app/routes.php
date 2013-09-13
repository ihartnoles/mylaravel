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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('users', function()
{
    /* return View::make('users');*/

});

Route::get('user', function()
{
    
    $user = new User;
    $user->username = 'philipbrown';
    $user->email='phil@ipbrown.com';
    $user->password='deadgiveaway';
    $user->password_confirmation = 'deadgiveaway';
    var_dump($user->save());
});

Route::get('test', function()
{
	//create a new post
	$post = new Post(array('body' => 'Yada yada yada'));
	//grab user 1
	$user = User::find(1);
	//Save the post
	$user->posts()->save($post);

});