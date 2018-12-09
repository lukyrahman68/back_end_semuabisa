<?php
use App\projek;
use App\testimoni;
use App\pricelist;
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
                ->orderBy('created_at','desc')
                ->limit(9)
                ->get();
    $testimonis = testimoni::all();
    return view('frontend.dashboard',compact('data','projeks','testimonis'));
})->name('daboard_home');
Route::get('/page/project', function () {
    $data="project";
    $sub_data="photo";
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Photo')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data'));
})->name('photo');
Route::get('/page/project/video', function () {
    $data="project";
    $sub_data="video";
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Video')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data'));
})->name('video');
Route::get('/page/project/website', function () {
    $data="project";
    $sub_data="website";
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Website')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data'));
})->name('website');
Route::get('/page/project/desain', function () {
    $data="project";
    $sub_data="desain";
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Desain')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data'));
})->name('desain');

Route::get('/page/services', function () {
    $data="services";
    return view('frontend.our_service',compact('data'));
})->name('services');

Route::get('/page/price_list', function () {
    $data="price_list";
    $sub_data="photo";
    $pricelists = pricelist::where('kategori','Photo')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('price_list_photo');

Route::get('/page/price_list/video', function () {
    $data="price_list";
    $sub_data="video";
    $pricelists = pricelist::where('kategori','Video')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('price_list_video');

Route::get('/page/price_list/website', function () {
    $data="price_list";
    $sub_data="website";
    $pricelists = pricelist::where('kategori','Website')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('price_list_website');

Route::get('/page/price_list/desain', function () {
    $data="price_list";
    $sub_data="desain";
    $pricelists = pricelist::where('kategori','desain')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('price_list_desain');

Route::get('/page/blog', function () {
    $data="blog";
    $artikels = artikel::all();
    return view('frontend.blog',compact('data','artikels'));
})->name('blog');
Route::get('/page/about', function () {
    $data="about";
    return view('frontend.about_us',compact('data'));
})->name('about');
Route::get('/page/detail_projek/{id}', function ($id) {
    $data="about";
    $projek = projek::findOrFail($id);
    return view('frontend.detail_projek',compact('data','projek'));
})->name('detail_projek');



Route::get('/home', 'HomeController@index')->name('home');
//-----------------/frontend---------------------
