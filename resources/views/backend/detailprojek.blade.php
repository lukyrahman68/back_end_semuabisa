
@extends('layouts.app_backend')
@section('content')

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Detail project</h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
                    
                  </div>
                  <!-- /. tools -->
                </div>
                <div class="box-body">
                @if (session('sukses'))
                  <div class="alert alert-success">
                      {{ session('sukses') }}
                  </div>
              @endif

              @if (session('gagal'))
                  <div class="alert alert-danger">
                      {{ session('gagal') }}
                  </div>
              @endif
                  
                    <div class="form-group">
                    Gambar<br>
                    @foreach($media as $media)
                    <img src="{{asset('project')}}/{{$media->idkonten}}-{{$media->idmedia}}.{{$media->format}}" height="400" weight="400">
                    @endforeach
                    <br>Link : <br>
                    @foreach($link as $link)
                    {{$link->isi}}<br>
                    @endforeach
                    <br>
                    <strong>Judul:</strong>
                        {{ $projek->nama }}
                    </div>
                    <div class="form-group">
                    <strong>Kategori:</strong>
                        {{ $projek->kategori }}
                    </div>
                    <div>
                    <strong>Deskripsi:</strong>
                        {{$projek->deskripsi}}   
                    </div>
                    <div class="box-footer clearfix">
              </div>
    @endsection