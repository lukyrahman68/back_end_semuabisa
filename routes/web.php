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
//-----------------backend---------------------
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/home', function () {
    return view('backend.dashboard');
});
Route::resource('admin/project','ProjectController');
Auth::routes();

//-----------------/backend---------------------

//-----------------frontend---------------------
Route::get('/page/home', function () {
    $data="home";
    return view('frontend.index',compact('data'));
});
Route::get('/page/project', function () {
    $data="project";
    return view('frontend.project',compact('data'));
});


Route::get('/home', 'HomeController@index')->name('home');
//-----------------/frontend---------------------