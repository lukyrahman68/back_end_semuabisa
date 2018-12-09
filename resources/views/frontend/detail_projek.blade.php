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
    <br><br>
    <!--================End Main Slider Area =================-->
    <div class="container">
        <div class="owl-carousel owl-theme">
            @foreach ($links as $link)
            <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" allowfullscreen="allowfullscreen"
                    mozallowfullscreen="mozallowfullscreen"
                    msallowfullscreen="msallowfullscreen"
                    oallowfullscreen="oallowfullscreen"
                    webkitallowfullscreen="webkitallowfullscreen" src="{{$link->isi}}" style="max-width: 1920px;max-height: 1080px;"></iframe>
                </div>
            @endforeach
            @foreach ($projek as $item)
                <img src="{{asset('project/'.$item->id.'-'.$item->idmedia.'.'.$item->format)}}" alt="" srcset="" style="max-width:300px;max-height: 250px;object-fit: contain">
            @endforeach

        </div>
        <div class="col-md-12">
            @foreach ($projek as $item)
                <b><h2>{{$item->nama}}</h2></b><br>
                {!!$item->deskripsi!!}
            @endforeach
        </div>
    </div>
    <br><br>

@endsection
@section('script')
<script>
        $(document).ready(function(){
         $('.owl-carousel').owlCarousel({
             loop:true,
             margin:10,
             responsiveClass:true,
             responsive:{
                 0:{
                     items:1,
                     nav:true
                 },
                 600:{
                     items:2,
                     nav:false
                 },
                 1000:{
                     items:3,
                     nav:true,
                     loop:false
                 }
             }
         })
         });
         </script>
@endsection
