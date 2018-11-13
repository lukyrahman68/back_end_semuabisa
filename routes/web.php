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
    $data = array(
        'hal' => 'dashboard',
        'sub' => '');
    return view('backend.dashboard')->with($data);
});
Route::resource('admin/project','ProjectController');
Auth::routes();

//-----------------/backend---------------------

//-----------------frontend---------------------
Route::get('/page/home', function () {
    $data="home";
    return view('frontend.dashboard',compact('data'));
});
Route::get('/page/project', function () {
    $data="project";
    return view('frontend.project',compact('data'));
});
Route::get('/page/blog', function () {
    $data="project";
    return view('frontend.blog',compact('data'));
});


Route::get('/home', 'HomeController@index')->name('home');
//-----------------/frontend---------------------