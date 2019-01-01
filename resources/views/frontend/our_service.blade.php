@extends('layouts.app_frontend')

@section('content')
    <!--================Main Slider Area =================-->
    <section class="main_slider_area">
        <div id="main_slider" class="rev_slider" data-version="5.3.1.6" style="max-height: 400px !important;">
            <ul>
                <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{asset('img/home_img.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('img/home_img.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                    <!-- LAYERS -->
                    <div class="slider_text_box">

                        <div class="tp-caption secand_text oke"
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
                        data-paddingleft="[0,0,0,0]"><span>OUR SERVICES</span></div>


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
    <section style="padding-top:5em;">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <img src="{{asset('img/service/our_services.png')}}" alt="" style="max-height: 100%;max-width:100%">
                </div>
                <div class="col-md-4"></div>
            </div>
            <br>
            <div class="row" style="margin-bottom: 3em;">

                <div class="col-md-5">
                    <img src="{{asset('img/service/PREWED.jpg')}}" alt="" style="max-height: 100%;max-width:100%">
                </div>
                <div class="col-md-7">
                        <span style="font-weight: bold;font-size: 30px">Pre-Wedding</span><br>
                        <p style="text-align: justify">Selama apapun sebuah hubungan, jangan pernah berhenti untuk membuat moment baik untuk dikenang.
                        Rasa bosan itu lumrah, akan ada kalanya rasa seperti itu muncul.
                        Karenanya, selalu mencarilah cara baru untuk menjalani hidup berdua dengan semangat yang sama seperti pertama kalinya.
                        Jadikanlah pasanganmu tempat untuk berlabuh dan membagi semua momen dalam hidup
                        dan</p><br>
                        <q style="font-weight: bold;font-size: 16px">Jadikanlah kami sebagai tempatmu untuk mengabadikan semua moment bahagia sebelum pernikahan.</q>
                </div>
            </div>
            <div class="row" style="margin-bottom: 3em;">
                <div class="col-md-7">
                    <span style="font-weight: bold;font-size: 30px">Wedding</span><br>
                    <p style="text-align: justify">Setiap moment, apalagi itu adalah sebuah pernikahan, rasanya tidaklah lengkap tanpa ada foto dan video didalamnya.
                    Semua orang pasti membutuhkannya untuk bisa mengingat kembali moment bahagia yang pernah dilalui.
                    Foto dan video adalah suatu hal paling sederhana dalam mengingat kenangan, karena ia bersifat abadi.
                    Meskipun waktu bisa merubah semua yang dilalui, adalah foto dan video yang akan selalu bisa bertahan melawan waktu
                    sekalipun ia telah usang, tetap saja ia menyimpan keabadian.</p><br>
                    <q style="font-weight: bold;font-size: 16px">Bersama kami, mari jadikan hari istimewa anda abadi sepanjang masa.</q>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('img/service/WEDDING.jpg')}}" alt="" style="max-height: 100%;max-width:100%">
                </div>
            </div>
            <div class="row" style="margin-bottom: 3em;">
                <div class="col-md-5">
                    <img src="{{asset('img/service/Dokumentasi.jpg')}}" alt="" style="max-height: 100%;max-width:100%">
                </div>
                <div class="col-md-7">
                    <span style="font-weight: bold;font-size: 30px">Dokumentasi</span><br>
                    <p style="text-align: justify">Sudah menjadi rahasia umum bahwa mendokumentasikan sebuah moment adalah sesuatu yang harus dilakukan, ini karena manusia diciptakan dengan ingatan yang maha terbatas
                    sehingga dokumen berupa foto dan video bisa membantu untuk mengingat moment. Kami hadir dengan salah satu layanan untuk mendokumentasikan secara spesifik moment anda.
                    </p><br>
                    <q style="font-weight: bold;font-size: 16px">Kami hadir dengan cinta, untuk membantu anda mencintai semua peristiwa bahagia</q>
                </div>
            </div>
            <div class="row" style="margin-bottom: 3em;">
                <div class="col-md-7">
                    <span style="font-weight: bold;font-size: 30px">Branding</span><br>
                    <p style="text-align: justify">Di masa ini, ada banyak sekali cara untuk memperkenalkan produk anda pada semua orang.
                            Dengan memanfaatkan teknologi yang ada, dunia harus mengetahui eksistensi brand anda dalam bentuk foto dan video branding paling baik dari yang anda sanggup bayangkan.
                            Untuk itulah kami hadir menjadi fasilitas dalam mewujudkan mimpi anda membawa brand pada dunia.
                            </p><br>
                    <q style="font-weight: bold;font-size: 16px">Kami akan memastikan semua strategi bisnis anda terkemas dengan benar melalui foto dan video</q>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('img/service/Branding.jpg')}}" alt="" style="max-height: 100%;max-width:100%;object-fit: cover">
                </div>
            </div>
        </div>
    </section>

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
