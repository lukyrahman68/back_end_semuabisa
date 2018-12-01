
@extends('layouts.app_backend')
@section('content')

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Detail testimoni</h3>
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
                        {{ $testimoni->nama }}
                    </div>
                    <div class="form-group">
                    <strong>Kategori:</strong>
                        {{ $testimoni->testimoni }}
                    </div>
                    <div class="box-footer clearfix">
              </div>
    @endsection