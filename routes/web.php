<?php
use App\projek;
use App\artikel;

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
Route::get('/admin', function () {
    $data = array(
        'hal' => 'dashboard',
        'sub' => '');
    return view('backend.dashboard')->with($data);
});
Route::get('/admin/home', function () {
    $data = array(
        'hal' => 'dashboard',
        'sub' => '');
    return view('backend.dashboard')->with($data);
});
Route::resource('admin/project','ProjectController');
Route::resource('admin/artikel','artikelController');
Auth::routes();
Route::resource('admin/site','SiteController');
Route::resource('admin/testimoni','testimonicontroller');
Route::resource('admin/pricelist','pricelistcontroller');
//Auth::routes();

//-----------------/backend---------------------

//-----------------frontend---------------------
Route::get('/page/home', function () {
    $data="home";
    // $projeks = projek::all();
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->get();
                // return $projeks;
    return view('frontend.dashboard',compact('data','projeks'));
});
Route::get('/page/project', function () {
    $data="project";
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->get();
    return view('frontend.project',compact('data','projeks'));
});
Route::get('/page/services', function () {
    $data="services";
    return view('frontend.our_service',compact('data'));
});
Route::get('/page/blog', function () {
    $data="blog";
    $artikels = artikel::all();
    return view('frontend.blog',compact('data','artikels'));
});
Route::get('/page/about', function () {
    $data="about";
    return view('frontend.about_us',compact('data'));
});
Route::get('/page/detail_projek', function () {
    $data="about";
    return view('frontend.detail_projek',compact('data'));
});
Route::view('/grocery', 'grocery');
Route::post('/grocery/post', 'GroceryController@store');


Route::get('/home', 'HomeController@index')->name('home');
//-----------------/frontend---------------------
