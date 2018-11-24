
@extends('layouts.app_backend')
@section('content')

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Detail pricelist</h3>
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
                    <strong>Kategori:</strong>
                        {{ $pricelist->kategori }}
                    </div>
                    <div class="form-group">
                    <strong>Sub Kategori:</strong>
                        {{ $pricelist->subkategori }}
                    </div>
                    <div class="form-group">
                    <strong>Paket:</strong>
                        {{ $pricelist->paket }}
                    </div>
                    <div>
                    <strong>Deskripsi:</strong>
                        {{$pricelist->deskripsi}}   
                    </div>
                    <div class="form-group">
                    <strong>Harga:</strong>
                        {{ $pricelist->harga }}
                    </div>
                    <div class="box-footer clearfix">
              </div>
    @endsection