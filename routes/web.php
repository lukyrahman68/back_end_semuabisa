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
Route::redirect('register', 'login', 301);
Route::match(['get', 'post'], 'password/login', function(){
    return redirect('/login');
});

Route::resource('admin/site','SiteController');
Route::resource('admin/testimoni','testimonicontroller');
Route::resource('admin/pricelist','pricelistcontroller');
//Auth::routes();

//-----------------/backend---------------------

//-----------------frontend---------------------
Route::get('/send/email', 'testimonicontroller@mail')->name('mail');
Route::get('/', function () {
    $data="home";
    // $projeks = projek::all();
    $projeks = projek::where('media.kategori','=','project')
                ->join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.nama','projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->groupBy('projeks.nama')
                ->orderBy('created_at','desc')
                ->limit(9)
                ->get();
    $testimonis = testimoni::where('media.kategori','=','testimoni')
        ->join('media','testimonis.id', '=', 'media.idkonten')
                ->select('testimonis.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->orderBy('created_at','desc')
                ->get();
    return view('frontend.dashboard',compact('data','projeks','testimonis'));
})->name('daboard_home');

Route::get('/page/wedding-surabaya-murah/foto-video/project', function () {
    $data="project";
    $sub_data="pre-wedding";
    $testimonis = testimoni::join('media','testimonis.id', '=', 'media.idkonten')
                ->select('testimonis.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->orderBy('created_at','desc')
                ->get();
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Pre-Wedding')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data','testimonis'));
})->name('pre-wedding');
Route::get('/page/wedding-surabaya-murah/jasa-foto-video/project/wedding-cinematic', function () {
    $data="project";
    $sub_data="wedding";
    $testimonis = testimoni::join('media','testimonis.id', '=', 'media.idkonten')
                ->select('testimonis.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->orderBy('created_at','desc')
                ->get();
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Wedding')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data','testimonis'));
})->name('wedding');
Route::get('/page/surabaya/jasa-foto-video-murah/project/dokumentasi-cinematic', function () {
    $data="project";
    $sub_data="dokumentasi";
    $testimonis = testimoni::join('media','testimonis.id', '=', 'media.idkonten')
                ->select('testimonis.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->orderBy('created_at','desc')
                ->get();
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Dokumentasi')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data','testimonis'));
})->name('dokumentasi');
Route::get('/page/surabaya/jasa-foto-video-murah/project/branding-cinematic', function () {
    $data="project";
    $sub_data="branding";
    $testimonis = testimoni::join('media','testimonis.id', '=', 'media.idkonten')
                ->select('testimonis.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->orderBy('created_at','desc')
                ->get();
    $projeks = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.kategori', 'Branding')
                ->get();
    return view('frontend.project',compact('data','projeks','sub_data','testimonis'));
})->name('branding');

Route::get('/page/jasa/jasa-foto-video-surabaya/services', function () {
    $data="services";
    return view('frontend.our_service',compact('data'));
})->name('services');

Route::get('/page/harga/jasa-foto-video-surabaya/wedding-prewedding-murah/price_list', function () {
    $data="price_list";
    $sub_data="pre-wedding";
    $pricelists = pricelist::where('kategori','Pre-Wedding')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('pl_pre-wedding');

Route::get('/page/harga/jasa-foto-video-surabaya/wedding-prewedding-murah/price_list/wedding-cinematic', function () {
    $data="price_list";
    $sub_data="wedding";
    $pricelists = pricelist::where('kategori','Wedding')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('pl_wedding');

Route::get('/page/harga/jasa-foto-video-surabaya/wedding-prewedding-murah/price_list/dokumentasi-cinematic', function () {
    $data="price_list";
    $sub_data="dokumentasi";
    $pricelists = pricelist::where('kategori','Dokumentasi')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('pl_dokumentasi');

Route::get('/page/harga/jasa-foto-video-surabaya/wedding-prewedding-murah/price_list/branding-cinematic', function () {
    $data="price_list";
    $sub_data="branding";
    $pricelists = pricelist::where('kategori','Branding')->get();
    return view('frontend.price_list',compact('data','pricelists','sub_data'));
})->name('pl_branding');

Route::get('/page/harga/jasa-foto-video-surabaya/wedding-prewedding-murah/blog-cinematic', function () {
    $data="blog";
    $artikels = artikel::all();
    return view('frontend.blog',compact('data','artikels'));
})->name('blog');
Route::get('/page/harga/jasa-foto-video-surabaya/wedding-prewedding-murah/about', function () {
    $data="about";
    return view('frontend.about_us',compact('data'));
})->name('about');
Route::get('/page/jasa-foto-video-surabaya/wedding-prewedding-murah/detail_projek/{id}', function ($id) {
    $data="project";
    $projek = projek::join('media','projeks.id', '=', 'media.idkonten')
                ->select('projeks.*','media.idmedia','media.format','media.kategori as kategoriM')
                ->where('projeks.id',$id)
                ->get();
    $links = link::where('idkonten',$id)->get();
    return view('frontend.detail_projek',compact('data','projek','links'));
})->name('detail_projek');
Route::get('/page/jasa-foto-video-surabaya/wedding-prewedding-murah/contact_us', function () {
    $data="contact_us";
    return view('frontend.contact_us',compact('data'));
})->name('contact_us');



Route::get('/home', 'HomeController@index')->name('home');
//-----------------/frontend---------------------
Route::get('tes', function () {
    return view('frontend.blog');
});
