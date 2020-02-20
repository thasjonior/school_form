<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'studentController@getStudents');

Route::get('/signup','studentController@openForm');
Route::post('/store','studentController@saveStudent');

// Route::get('/',function(){
//     return view('home');
// });
Route::get('/apply',function(){
    return view('wizardform');
});

