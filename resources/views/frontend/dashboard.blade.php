@extends('layouts.app_frontend')

@section('content')
    <!--================Main Slider Area =================-->
    <section class="main_slider_area">
        <div id="main_slider" class="rev_slider" data-version="5.3.1.6">
            <ul>
                <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{asset('img/home_img.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('img/home_img.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="slider_text_box">
                        <div class="tp-caption first_text respon1"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-38','-38','-38','-20','-20']"
                        data-fontsize="['28','28','28','28']"
                        data-lineheight="['38','38','38','38']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]">SELAMAT DATANG DI </div>

                        <div class="tp-caption secand_text"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['38','38','38','38','38']"
                        data-fontsize="['110','110','110','50','50']"
                        data-lineheight="['100','100','100','70','70']"
                        data-width="['none','none','none','none']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"><span>SEMUABISA</span> <span class="art">ART</span></div>

                        <div class="tp-caption secand_text respon2"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['110','110','110','-20','-20']"
                        data-fontsize="['28','28','28','28']"
                        data-lineheight="['38','38','38','38']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]">OFFICIAL WEBSITE</div>
                    </div>
                </li>
                <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{asset('img/home-slider/slider-1.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('img/home_img2.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="slider_text_box2">
                        <div class="tp-caption first_text"
                        data-x="['left','left','left','left','left']"
                        data-y="['middle','middle','middle','middle','middle']"
                        data-hoffset="['0','15','15','15','15']"
                        data-voffset="['-30','-30','-30','-30','-60']"
                        data-fontsize="['80','80','60','60','40']"
                        data-lineheight="['90','90','70','70','50']"
                        data-width="['none','none','none','none']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]">we build dream</div>

                        <div class="tp-caption secand_text"
                        data-x="['left','left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['0','15','15','15','15']"
                        data-voffset="['50','50','50','40','0']"
                        data-fontsize="['28','28','28','20','20']"
                        data-lineheight="['38','38','38','30','30']"
                        data-width="['760','760','760','550','400']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]">We made just most advance & user friendly constraction theme in the world</div>

                        <div class="tp-caption"
                        data-x="['left','left','left','left','left']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['0','15','15','15','15']"
                        data-voffset="['140','140','140','130','90']"
                        data-fontsize="['28','28','28','28']"
                        data-lineheight="['38','38','38','38']"
                        data-width="['730']"
                        data-height="none"
                        data-whitespace="normal"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]"><a class="slider_btn" href="#">browse services</a></div>
                    </div>
                </li>
                <li data-index="rs-2974" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{asset('img/home_img.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('img/home_img3.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="slider_text_box">
                        <div class="tp-caption first_text"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['-38','-38','-38','-20','-20']"
                        data-fontsize="['28','28','28','28']"
                        data-lineheight="['38','38','38','38']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]">SELAMAT DATANG DI </div>

                        <div class="tp-caption secand_text"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['38','38','38','38','38']"
                        data-fontsize="['110','110','110','50','50']"
                        data-lineheight="['100','100','100','70','70']"
                        data-width="['none','none','none','none']"
                        data-height="none"
                        data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1700,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:left(R);","ease":"Power3.easeIn"}]'
                        data-textAlign="['center','center','center','center']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[10,10,10,10]"
                        data-paddingleft="[0,0,0,0]"><span>SEMUABISA</span> <span class="art">ART</span></div>

                        <div class="tp-caption first_text"
                        data-x="['center','center','center','center']"
                        data-y="['middle','middle','middle','middle']"
                        data-hoffset="['0','0','0','0']"
                        data-voffset="['110','110','110','-20','-20']"
                        data-fontsize="['28','28','28','28']"
                        data-lineheight="['38','38','38','38']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-type="text"
                        data-responsive_offset="on"
                        data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1750,"ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'
                        data-textAlign="['left','left','left','left']"
                        data-paddingtop="[0,0,0,0]"
                        data-paddingright="[0,0,0,0]"
                        data-paddingbottom="[0,0,0,0]"
                        data-paddingleft="[0,0,0,0]">OFFICIAL WEBSITE</div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--================End Main Slider Area =================-->
    <!--================Get Quote Area =================-->
    {{-- <section class="get_quote_area">
        <div class="container">
            <div class="pull-left">
                <h4>Looking for a quality and affordable constructor for your next project?</h4>
            </div>
            <div class="pull-right">
                <a class="get_btn" href="#">GET A QUOTE</a>
            </div>
        </div>
    </section> --}}
    <!--================End Get Quote Area =================-->

    <!--================Who We Are Area =================-->
    <section class="who_we_are_area vh_content">
        <div class="container home_container">
            <div class="row who_we_inner">
                <div class="col-md-12 border_tu col-xs-12 col-sm-12">
                    <div class="title_trust_us">
                        <div class="garis">
                            Trust <span style="color:red">US</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container padding_vh">
            <div class="row" style="margin: 0;margin-bottom: 1em;">
                <div class="col-md-6 col-xs-12" style="text-align: justify">
                    <p style="text-indent: 40px;">Manusia diciptakan dengan ingatan yang serba terbatas, meskipun beberapa moment bahagia bisa saja melekat kuat diingatan
                    namun tetap saja dibutuhkan sebuah media yang bersifat seperti mesin waktu yang kapanpun bisa membawa kita kembali pada kenangan itu.
                    Karena itulah kami ada untuk membantu semuanya dalam mengingat kenangan terbaik melalui <b>FOTO</b> dan <b>VIDEO</b>
                    hingga pada saatnya nanti di waktu yang lain, ketika kita melihatnya kembali
                    dapat membawa kita kemasa itu, untuk merasakan kembali semua rasa bahagia yang pernah dirasakan.  </p>
                    <p style="text-indent: 40px;">
                    Kami juga menyadari, sebuah foto dan video selain bisa menjadi mesin waktu, juga bisa menjadi sesuatu yang menjual.
                    sudah bukan rahasia lagi bahwa strategi pemasaran yang paling optimal adalah dengan memanfaatkan media sebagai bahan promosi. </p>
                    <p style="text-indent: 40px;">Untuk itulah kami ada membantu mewujudkan impian anda.
                    Percayakan Seluruh dokumen anda kepada kami. Dengan seluruh <i> crew </i> yang berpengalaman dan ahli dibidangnya
                    kami menjamin semua moment anda dapat terbingkai sempurna, indah dan semestinya.
                    karena setiap moment bahagia sudah seharusnya mendapatkan tempat paling istimewa dalam kenangan kita.</p>
                </div>
                <div class="col-md-6 col-xs-12">
                    <img src="{{asset('img/Kolase.png')}}" alt="" style="max-width: 100%;max-height: 100%">
                </div>
            </div>
        </div>
    </section>

    <!--================End Who We Are Area =================-->

    <!--================Our Service Area =================-->
    <section class="our_service_area">
        <div class="left_service">
            <div class="left_service_inner">
                <div class="service_item">
                    <div class="service_item_inner">
                        <div class="service_icon">
                            <img src="{{asset('img/SB_movie.png')}}" height="50" width="50" alt="">
                            <img src="{{asset('img/SB_movie_black.png')}}" height="50" width="50" alt="">
                        </div>
                        <a href="#"><h4>Pre-Wedding</h4></a>
                        <p>Selama apapun sebuah hubungan, jangan pernah berhenti untuk membuat moment baik untuk dikenang
                            dan jadikanlah kami sebagai tempatmu untuk mengabadikan semua moment bahagia sebelum pernikahan.</p>
                        <a class="view_btn" href="#">Read Details</a>
                    </div>
                </div>
                <div class="service_item">
                    <div class="service_item_inner">
                        <div class="service_icon">
                            <img src="{{asset('img/SB_camera.png')}}" height="50" width="50" alt="">
                            <img src="{{asset('img/SB_camera_black.png')}}" height="50" width="50" alt="">
                        </div>
                        <a href="#"><h4>Wedding</h4></a>
                        <p>Sebuah pernikahan, rasanya tidaklah lengkap tanpa ada foto dan video didalamnya.
                            Karena cara paling baik untuk mengingat kenangan adalah menjadikannya abadi.
                        Bersama kami mari abadikan kenangan anda</p>
                        <a class="view_btn" href="#">Read Details</a>
                    </div>
                </div>
                <div class="service_item">
                    <div class="service_item_inner">
                        <div class="service_icon">
                            <img src="{{asset('img/SB_camera1.png')}}" height="50" width="50" alt="">
                            <img src="{{asset('img/SB_camera_black1.png')}}" height="50" width="50" alt="">
                        </div>
                        <a href="#"><h4>Dokumentasi</h4></a>
                        <p>Sudah menjadi rahasia umum bahwa mendokumentasikan sebuah moment adalah sesuatu yang harus dilakukan.
                            Bersama kami mari dokumentasikan semua peristiwa bahagia</p>
                        <a class="view_btn" href="#">Read Details</a>
                    </div>
                </div>
                <div class="service_item">
                    <div class="service_item_inner">
                        <div class="service_icon">
                            <img src="{{asset('img/SB_camera2.png')}}" height="50" width="50" alt="">
                            <img src="{{asset('img/SB_camera_black2 .png')}}" height="50" width="50" alt="">
                        </div>
                        <a href="#"><h4>Branding</h4></a>
                        <p>Banyak cara memperkenalkan produk anda pada semua orang dengan memanfaatkan teknologi.
                            Kami akan memastikan strategi bisnis anda terkemas dengan benar melalui foto dan video</p>
                        <a class="view_btn" href="#">Read Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right_service">
            <div class="right_service_text">
                <div class="main_b_title">
                    <h2>our <br class="title_br" /> <span style="color:red;">service</span></h2>
                    <h6 style="color:red;">Provide your art solution <br class="sub_br" /> Company</h6>
                </div>
                <p>Kami memiliki DNA kuat dalam membingkai semua moment istimewa anda menjadi luar biasa.
                    kami lahir dengan segenap cinta untuk menyediakan semua layanan terkait pengabadian kenangan.
                     Bagi kami, mesin waktu itu benar adanya. Melalui foto dan video, semua orang dapat menjadi <i> time traveller</i>
                    kita semua bisa merasakan kembali moment yang terbingkai didalamnya</p>
                    <p>
                    Kami terbentuk dengan seluruh profesionalitas dan kepercayaan. Kami pendengar yang baik
                    serta memberikan hasil akhir sesuai kebutuhan bahkan lebih dari yang sanggup dibayangkan.
                    Bersama dengan motto kami <b><i></i>creativity and reliability</i></b> kami menjanjikan
                    sebuah karya yang luar biasa.
                    </p>
                <div class="border_bar"></div>
            </div>
        </div>
    </section>
    <!--================End Our Service Area =================-->

    <!--================Our Project Area =================-->
    <section class="our_project_area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="project_left_side">
                        <div class="main_w_title">
                            <h2>OUR <br class="title_br" /> projects</h2>
                            <h6>Great & Awesome Works</h6>
                        </div>
                        <ul class="our_project_filter">
                            <li class="active" data-filter="*"><a href="#">All</a></li>
                            @foreach ( $projeks->unique('kategori') as $projek)
                            <li data-filter=".{{$projek->kategori}}"><a href="#">{{$projek->kategori}}   </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="our_project_details">

                        @foreach ( $projeks->unique('id') as $projek)
                        <div class="project_item {{$projek->kategori}} isolation tiling hitam_putih">
                            <img src="{{asset('project/'.$projek->id.'-'.$projek->idmedia.'.'.$projek->format)}}" alt="" width="275" height="280" style="object-fit: cover; margin-bottom:0.5em;">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>{{$projek->nama}}</h4></a>
                                        <p>{!!str_limit($projek->deskripsi,50)!!} </p>
                                        <a class="view_btn" href="{{route('detail_projek',$projek->id)}}">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Our Project Area =================-->

    <!--================Work Area =================-->
    <section class="work_area">
        <div class="container">
            <div class="work_content">
                <div class="main_c_title">
                    <h2>HOW <br class="title_br" />TO ORDER</h2>
                    <h6>Lets Get Offer</h6>
                </div>
            </div>
        </div>
    </section>
    <!--================End Work Area =================-->
    <!--================Counter Area =================-->
    <section>
        <div class="container">
           <img src="{{asset('img/Instruksi.png')}}" alt="" style="max-width: 100%">
        </div>
    </section>
    <!--================End Counter Area =================-->

    <!--================Testimonials Area =================-->
    <section class="testimonials_area">
        <div class="container">
            <div class="row testimonials_inner">
                <div class="col-md-4">
                    <div class="main_w_title">
                        <h2>Client <br class="title_br" />Says</h2>
                        <h6 style="color:red">True Word</h6>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="testimonials_slider owl-carousel">
                        <div class="item">
                            <div class="testi_left">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                <a href="#"><h4>Eng. Abul Kalam</h4></a>
                            </div>
                            <div class="testi_right">
                                <img src="{{asset('img/testimonials/test-1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_left">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                <a href="#"><h4>Eng. Abul Kalam</h4></a>
                            </div>
                            <div class="testi_right">
                                <img src="{{asset('img/testimonials/test-1.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="item">
                            <div class="testi_left">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
                                <a href="#"><h4>Eng. Abul Kalam</h4></a>
                            </div>
                            <div class="testi_right">
                                <img src="{{asset('img/testimonials/test-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->
@endsection
