
@extends('layouts.app_backend')
@section('content')

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Edit project</h3>
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
                  <form action="{{ route('project.update',$projek->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <Strong>File</Strong><br>
                      
                      <!--<input type="file" class="form-control file-input" name="gambar" placeholder="Masukkan gambar">-->
                      @foreach($media as $media)
                    <img src="{{asset('project')}}/{{$media->idkonten}}-{{$media->idmedia}}.{{$media->format}}" height="400" weight="400">
                    <input type="text" name="hide-{{$jumlahgambar = $loop->iteration}}" value="{{$media->idkonten}}-{{$media->idmedia}}" hidden>
                    <input type="text" name="format-{{$jumlahgambar}}" value="{{$media->format}}" hidden>
                    <input type="file" class="form-control file-input" name="gambar{{$jumlahgambar}}" placeholder="Masukkan gambar">
                    @endforeach
                    <input type="text" name="jumlahmedia" id="jumlahmedia" value="{{$jumlahgambar}}" hidden>
                    <br><Strong>Link : </Strong><br>
                    @foreach($link as $link)
                    
                    <input type="text" class="form-control file-input" name="link{{$jumlahlink = $loop->iteration}}" value="{{$link->isi}}">
                    <br>
                    <input type="text" name="jumlahlink" id="jumlahlink" value="{{$jumlahlink}}" hidden>
                    
                    
                    @endforeach
                    
                    
                    
                      <div id="link"></div>
                    </div>
                    <div class="form-group">
                    <strong>Judul : </strong>
                      <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{$projek->nama}}">
                    </div>
                    <div class="form-group">
                    <strong>Kategori : </strong>
                      <input type="text" class="form-control" name="kategori" placeholder="Kategori" value="{{$projek->kategori}}">
                    </div>
                    <div>
                    <strong>Deskripsi :</strong>
                      <textarea class="textarea" placeholder="Deskripsi" name="deskripsi" 
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                {{$projek->deskripsi}}
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