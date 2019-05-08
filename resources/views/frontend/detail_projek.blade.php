@extends('layouts.app_frontend')

@section('content')
    <!--================Main Slider Area =================-->
    <br>
    <!--================End Main Slider Area =================-->
    <div class="container pad">
        <div class="owl-carousel owl-theme">
            @foreach ($links as $link)
            <div class="embed-responsive embed-responsive-16by9">
                    <iframe frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen src="{{$link->isi}}" style="max-width: 1920px;max-height: 1080px;"></iframe>
                </div>
            @endforeach
            @foreach ($projek as $item)
                <img src="{{asset('project/wedding-surabaya/foto-video-cinematic/'.$item->id.'-'.$item->idmedia.'.'.$item->format)}}" alt="Wedding Foto Video Cinematic Surabaya" title="Wedding Foto Video Cinematic Surabaya" srcset="" style="max-width:300px;max-height: 250px;object-fit: contain">
            @endforeach

        </div>
        <div class="col-md-12">
            @foreach ($projek->unique('id') as $item)
                <b><h2 itemprop="nama">{{$item->nama}}</h2></b><br>
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
