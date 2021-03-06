
@extends('layouts.app_backend')
@section('content')

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Detail artikel</h3>
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
                    <strong>Judul:</strong>
                        {{ $artikel->nama }}
                    </div>
                    <div class="form-group">
                    <strong>Kategori:</strong>
                        {{ $artikel->kategori }}
                    </div>
                    <div>
                    <strong>Deskripsi:</strong>
                        {{$artikel->deskripsi}}   
                    </div>
                    <div class="box-footer clearfix">
              </div>
    @endsection