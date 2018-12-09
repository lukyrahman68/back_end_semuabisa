@extends('layouts.app_frontend')

@section('content')
    <!--================Main Slider Area =================-->
    <section class="main_slider_area">
        <div id="main_slider" class="rev_slider" data-version="5.3.1.6" style="max-height: 400px !important;">
            <ul>
                <li data-index="rs-2972" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{asset('img/home_img.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('img/home_img.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina >
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
                        data-paddingbottom="[50,50,50,50]"
                        data-paddingleft="[0,0,0,0]"><span>PRICE LIST</span></div>


                    </div>
                </li>
                <li data-index="rs-2973" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="{{asset('img/home-slider/slider-1.jpg')}}"  data-rotate="0"  data-saveperformance="off"  data-title="Web Show" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                    <!-- MAIN IMAGE -->
                    <img src="{{asset('img/home-slider/slider-2.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
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
                    <img src="{{asset('img/home_img.jpg')}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
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
            <div class="work_content">
                <div class="main_c_title">
                    <h2> <span style="color:red">Our</span> <br class="title_br"><span style="color:black">Project</span></h2>
                    <h6><span style="color:black">Provide Your Art Solution</span></h6><br>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons" style="max-width:400px;">
                      <label class="btn btn-primary
                        @if($sub_data=="photo")
                            active
                        @endif
                      " onclick="location.href='{{route("price_list_photo")}}'">
                        <input type="radio" name="options" id="option1" autocomplete="off"
                        @if($sub_data=="photo")
                            checked
                        @endif
                        > Photo
                      </label>
                      <label class="btn btn-primary
                        @if($sub_data=="video")
                            active
                        @endif
                      " onclick="location.href='{{route("price_list_video")}}'">
                        <input type="radio" name="options" id="option2" autocomplete="off"
                        @if($sub_data=="video")
                            checked
                        @endif
                        > Video
                      </label>
                      <label class="btn btn-primary
                        @if($sub_data=="website")
                            active
                        @endif
                      " onclick="location.href='{{route("price_list_website")}}'">
                        <input type="radio" name="options" id="option3" autocomplete="off"
                        @if($sub_data=="website")
                            checked
                        @endif
                        > Website
                      </label>
                      <label class="btn btn-primary
                        @if($sub_data=="desain")
                            active
                        @endif
                      " onclick="location.href='{{route("price_list_desain")}}'">
                        <input type="radio" name="options" id="option3" autocomplete="off"
                        @if($sub_data=="desain")
                            checked
                        @endif
                        > Desain
                      </label><br><br>
                    </div>
                    {{-- <ul class="nav nav-tabs our_project_filter">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        @foreach ( $projeks->unique('kategori') as $projek)
                            <li data-filter=".{{$projek->kategori}}"><a href="#">{{$projek->kategori}}   </a></li>
                        @endforeach
                      </ul><br>
                    <div> --}}



                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================Our Project Area =================-->
    <section class="our_project_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="project_left_side">
                            <div class="main_w_title">
                                <h2>OUR <br class="title_br" /> PRICE LIST</h2>
                                <h6>Great & Awesome Works</h6>
                            </div>
                            <ul class="our_project_filter">
                                <li class="active" data-filter="*"><a href="#">All</a></li>
                                @foreach ( $pricelists->unique('subkategori') as $pricelist)
                                <li data-filter=".{{$pricelist->subkategori}}"><a href="#">{{$pricelist->subkategori}}   </a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="our_project_details">

                            @foreach ( $pricelists as $pricelist)
                            <div class="project_item {{$pricelist->subkategori}} isolation tiling hitam_putih" style="margin-bottom: 1em;">
                                <div style="border: 1px solid #eee;max-height: 350px;max-width: 250px">
                                    <div style="text-align: center">
                                        <a href="#"><h4 class="FreestyleScript" style="font-size: 50px">{{$pricelist->paket}}</h4></a>
                                        <div style="text-align: left;padding:1em;">
                                            <p>{!!str_limit($pricelist->deskripsi,50)!!} </p>
                                        </div>
                                        <div style="background-color: black; padding:1em;font-size: 20px;color: #fff">
                                            Rp. {{$pricelist->harga}}
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


@endsection
