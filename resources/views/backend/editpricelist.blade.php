
@extends('layouts.app_backend')
@section('content')
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Edit pricelist</h3>
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
                  <form action="{{ route('pricelist.update',$pricelist->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <!--<input type="file" class="form-control file-input" name="gambar" placeholder="Masukkan gambar">-->
                    </div>
                    <div class="form-group"><strong>Kategori :</strong>
                      <input type="text" class="form-control" name="kategori" placeholder="Kategori" value="{{$pricelist->kategori}}">
                    </div>
                    <div class="form-group"><strong>Sub Kategori :</strong>
                      <input type="text" class="form-control" name="subkategori" placeholder="Sub Kategori" value="{{$pricelist->subkategori}}">
                    </div>
                    <div class="form-group"><strong>Paket :</strong>
                      <input type="text" class="form-control" name="paket" placeholder="paket" value="{{$pricelist->paket}}">
                    </div>
                    <div><strong>Deskripsi :</strong>
                      <textarea class="textarea" placeholder="Deskripsi" name="deskripsi" 
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                {{$pricelist->deskripsi}}
                                </textarea>
                    </div>
                    <div class="form-group"><strong>Harga :</strong>
                      <input type="text" class="form-control" name="harga" placeholder="Harga" value="{{$pricelist->harga}}">
                    </div>
                    <div class="box-footer clearfix">
                  <button type="submit" class="pull-right btn btn-default" id="sendEmail">Simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
                  </form>
                </div>
                
              </div>
    
    @endsection