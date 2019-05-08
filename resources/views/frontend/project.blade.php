@extends('layouts.app_frontend')

@section('content')
    
    <!--================End Main Slider Area =================-->
    <section style="padding-top:5em;">
        <div class="container">
            <div class="work_content">
                <div class="main_c_title">
                    <h2> <span style="color:red">Our</span> <br class="title_br"><span style="color:black">Project</span></h2>
                    <h6><span style="color:black">Provide Your Art Solution</span></h6><br>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                      <label class="btn btn-primary
                        @if($sub_data=="pre-wedding")
                            active
                        @endif
                      " onclick="location.href='{{route("pre-wedding")}}'" style="padding-left: 4px;padding-right: 4px;">
                        <input type="radio" name="options" id="option1" autocomplete="off"
                        @if($sub_data=="pre-wedding")
                            checked
                        @endif
                        > Pre-Wedding
                      </label>
                      <label class="btn btn-primary
                        @if($sub_data=="wedding")
                            active
                        @endif
                      " onclick="location.href='{{route("wedding")}}'" style="padding-left: 4px;padding-right: 4px;">
                        <input type="radio" name="options" id="option2" autocomplete="off"
                        @if($sub_data=="wedding")
                            checked
                        @endif
                        > Wedding
                      </label>
                      <label class="btn btn-primary
                        @if($sub_data=="dokumentasi")
                            active
                        @endif
                      " onclick="location.href='{{route("dokumentasi")}}'" style="padding-left: 4px;padding-right: 4px;">
                        <input type="radio" name="options" id="option3" autocomplete="off"
                        @if($sub_data=="dokumentasi")
                            checked
                        @endif
                        > Dokumentasi
                      </label>
                      <label class="btn btn-primary
                        @if($sub_data=="branding")
                            active
                        @endif
                      " onclick="location.href='{{route("branding")}}'" style="padding-left: 4px;padding-right: 4px;">
                        <input type="radio" name="options" id="option3" autocomplete="off"
                        @if($sub_data=="branding")
                            checked
                        @endif
                        > Branding
                      </label><br><br>
                    </div>
                    
                    {{-- <ul class="nav nav-tabs our_project_filter">
                        <li class="active" data-filter="*"><a href="#">All</a></li>
                        @foreach ( $projeks->unique('kategori') as $projek)
                            <li data-filter=".{{$projek->kategori}}"><a href="#">{{$projek->kategori}}   </a></li>
                        @endforeach
                      </ul><br>
                    <div> --}}
<br><br><br>
                                <div class="row">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="col-md-9">
                                        <div class="our_project_details">
                                            @foreach ( $projeks->unique('id') as $projek)
                                            <div class="project_item {{$projek->kategori}} isolation tiling hitam_putih">
                                                <img src="{{asset('project/wedding-surabaya/foto-video-cinematic/'.$projek->id.'-'.$projek->idmedia.'.'.$projek->format)}}" alt="Wedding Foto Video Cinematic Surabaya" title="Wedding Foto Video Cinematic Surabaya" width="275" height="280" style="object-fit: cover; margin-bottom:0.5em;">
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
                                    <div class="col-md-1">

                                    </div>
                                </div>
<br><br><br>
                    </div>
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
                        <h6 style="color:#ffcd00">True Word</h6>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="testimonials_slider owl-carousel">
                        @foreach ($testimonis->unique('id') as $testimoni)
                        <div class="item">
                            <div class="testi_left">
                                <i class="fa fa-quote-right" aria-hidden="true"></i>
                                <p>{{$testimoni->testimoni}}</p>
                                <a href="#"><h4>{{$testimoni->nama}}</h4></a>
                            </div>
                            <div class="testi_right">
                                <img src="{{asset('testimoni/'.$testimoni->id.'.'.$testimoni->format)}}" alt="Wedding Foto Video Cinematic Surabaya" title="Wedding Foto Video Cinematic Surabaya" style="max-width:160px;max-height:240px">
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Testimonials Area =================-->
@endsection
