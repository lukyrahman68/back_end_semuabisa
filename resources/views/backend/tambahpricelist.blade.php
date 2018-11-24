
@extends('layouts.app_backend')
@section('content')

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Tambah pricelist</h3>
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
                  <form action="{{ route('pricelist.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                      <input type="text" class="form-control" name="kategori" placeholder="Kategori">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subkategori" placeholder="Sub Kategori">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="paket" placeholder="Paket">
                    </div>
                    <div>
                      <textarea class="textarea" placeholder="Deskripsi" name="deskripsi"
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="harga" placeholder="Harga">
                    </div>
                    
                    <div class="box-footer clearfix">
                  <button type="submit" class="pull-right btn btn-default" id="sendEmail">Simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
                  </form>
                </div>
                
              </div>
    
    @endsection