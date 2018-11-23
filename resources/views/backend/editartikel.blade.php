
@extends('layouts.app_backend')
@section('content')

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Edit Artikel</h3>
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
                  <form action="{{ route('artikel.update',$artikel->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                      <!--<input type="file" class="form-control file-input" name="gambar" placeholder="Masukkan gambar">-->
                    </div>
                    <div class="form-group"><strong>Judul : </strong>
                      <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{$artikel->nama}}">
                    </div>
                    <div class="form-group"><strong>Kategori :</strong>
                      <input type="text" class="form-control" name="kategori" placeholder="Kategori" value="{{$artikel->kategori}}">
                    </div>
                    <div><strong>Deskripsi :</strong>
                      <textarea class="textarea" placeholder="Deskripsi" name="deskripsi" 
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                {{$artikel->deskripsi}}
                                </textarea>
                    </div>
                    <div class="box-footer clearfix">
                  <button type="submit" class="pull-right btn btn-default" id="sendEmail">Simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
                  </form>
                </div>
                
              </div>
    
    @endsection