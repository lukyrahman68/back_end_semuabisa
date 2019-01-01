<?php
use App\projek;
use App\testimoni;
use App\pricelist;
use App\artikel;
use App\link;

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
    $sub_data="pre-wedding";
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Pre-Wedding')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data'));
})->name('pre-wedding');
Route::get('/page/project/wedding', function () {
    $data="project";
    $sub_data="wedding";
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Wedding')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data'));
})->name('wedding');
Route::get('/page/project/dokumentasi', function () {
    $data="project";
    $sub_data="dokumentasi";
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Dokumentasi')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data'));
})->name('dokumentasi');
Route::get('/page/project/branding', function () {
    $data="project";
    $sub_data="branding";
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Branding')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data'));
})->name('branding');

Route::get('/page/services', function () {
    $data="services";
    return view('frontend.our_service',compact('data'));
})->name('services');

Route::get('/page/price_list', function () {
    $data="price_list";
    $sub_data="pre-wedding";
    $pricelists = pricelist::where('kategori','Pre-Wedding')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('pl_pre-wedding');

Route::get('/page/price_list/wedding', function () {
    $data="price_list";
    $sub_data="wedding";
    $pricelists = pricelist::where('kategori','Wedding')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('pl_wedding');

Route::get('/page/price_list/dokumentasi', function () {
    $data="price_list";
    $sub_data="dokumentasi";
    $pricelists = pricelist::where('kategori','Dokumentasi')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('pl_dokumentasi');

Route::get('/page/price_list/branding', function () {
    $data="price_list";
    $sub_data="branding";
    $pricelists = pricelist::where('kategori','Branding')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('pl_branding');

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
    $data="project";
    $projek = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.id',$id)
                ->get();
    $links = link::where('idkonten',$id)->get();
    return view('frontend.detail_projek',compact('data','projek','links'));
})->name('detail_projek');
Route::get('/page/contact_us', function () {
    $data="contact_us";
    return view('frontend.contact_us',compact('data'));
})->name('contact_us');



Route::get('/home', 'HomeController@index')->name('home');
//-----------------/frontend---------------------
Route::get('/send/email', 'HomeController@mail')->name('mail');
