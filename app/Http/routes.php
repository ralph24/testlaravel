<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use laraveltest\User;

Route::get('/', function () {

         return view('welcome');
});


Route::get('/create', function () {
   
    $attributes = array( 
        'name' => 'Italo Morales',
        'email' => 'rfernandez@gmail.com',
        'password' => bcrypt('123456'),
        'gender' => 'm',
        'biography' => 'Profesor de Programacion'
        );
    $user = User::create($attributes);
    
    return 'usuario guardado';
// return view('welcome');
});

Route::get('/update-user', function () {
   

    $user = User::find(28);
    $user->gender = 'f';
    $user->biography = 'Profesor de Programacion';
    $user->save();
    return 'usuario Actualizado';
// return view('welcome');
});