@extends('layouts.app_frontend')

@section('content')
    
    <!--================End Main Slider Area =================-->
    <section style="padding-top:5em;background-color: #e64343">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12" style="text-align: center;color: #fff">
                <span style="font-weight: bold;font-size: 50px">CONTACT</span>
                <HR>
                <span style="font-size: 20px">We'd <i class="far fa-heart"></i> to help!</span><br>
                We like to create things with fun, open-minded people, feel free to ask!
            </div>
            <div class="row">
                <form action="{{route('mail')}}" method="get">
                    @csrf
                    <div class="col-md-6" style="border-right: 1px solid #fff">
                        <div style="padding: 1em;">
                            <input type="text" class="form-control" placeholder="Nama" name="nama">
                        </div>
                        <div style="padding: 1em;">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div style="padding: 1em;">
                            <textarea name="pesan" cols="30" rows="10" class="form-control" placeholder="Pesan" name="pesan"></textarea>
                        </div>
                        <div style="padding: 1em;">
                            <input type="submit" class="btn" value="Kirim">
                        </div>
                    </div>
                </form>
                <div class="col-md-6"><br><br><br>
                    <div class="row">
                        <div class="col-md-3 col-xs-3" style="padding-bottom: 5px;text-align: right">
                            <img src="{{asset('img/gm.png')}}" alt="" style="max-height: 70px;max-width: 70px">
                        </div>
                        <div class="col-md-9 col-xs-9" style="text-align: left;margin-top: 15px;">
                            <label style="font-size: 22px;color:white;">Surabaya</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-xs-3" style="padding-bottom: 5px;text-align: right">
                            <img src="{{asset('img/wa.png')}}" alt="" style="max-height: 70px;max-width: 70px">
                        </div>
                        <div class="col-md-9 col-xs-9" style="text-align: left;margin-top: 10px;">
                            <label style="font-size: 22px;color:white;">(085) 790741610</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-xs-3" style="padding-bottom: 5px;text-align: right">
                            <img src="{{asset('img/gmail.png')}}" alt="" style="max-height: 70px;max-width: 70px">
                        </div>
                        <div class="col-md-9 col-xs-9" style="text-align: left;margin-top: 17px;">
                            <label style="font-size: 22px;color:white;">semuabisa.art@gmail.com</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-xs-3" style="padding-bottom: 5px;text-align: right">
                            <img src="{{asset('img/ig.png')}}" alt="" style="max-height: 70px;max-width: 70px">
                        </div>
                        <div class="col-md-9 col-xs-9" style="text-align: left;margin-top: 17px;">
                            <label style="font-size: 22px;color:white;">semuabisa.cinema</label>
                        </div>
                    </div>

                </div>
            </div>
            <br><br>
        </div>
    </section>

@endsection
