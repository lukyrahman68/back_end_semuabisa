
@extends('layouts.app_backend')
@section('content')

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Tambah project</h3>
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
                  <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div><Strong>File</Strong>
                      <input type="text" name="jumlahmedia" id="jumlahmedia" value="1" hidden>
                      <input type="file" class="form-control file-input" name="gambar1" placeholder="Masukkan gambar">
                      <div id="media"></div>
                    </div>
                    <button type="button" class="btn btn-default" onclick=tambahmedia()>+
                    </button>
                    <div><Strong>Link</Strong>
                      <input type="text" name="jumlahlink" id="jumlahlink" value="1" hidden>
                      <input type="text" class="form-control file-input" name="link1">
                      <div id="link"></div>
                    </div>
                    <button type="button" class="btn btn-default" onclick=tambahlink()>+
                    </button>
                    <div class="form-group">
                      <input type="text" class="form-control" name="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="kategori" placeholder="Kategori">
                    </div>
                    <div>
                      <textarea class="textarea" placeholder="Deskripsi" name="deskripsi"
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <div class="box-footer clearfix">
                  <button type="submit" class="pull-right btn btn-default" id="sendEmail">Simpan
                    <i class="fa fa-arrow-circle-right"></i></button>
                </div>
                  </form>
                </div>
              </div>
    <script>
    var a = 1;
    function tambahmedia(){
      a++;
      document.getElementById("media").innerHTML += "<input type='file' class='form-control file-input' name='gambar"+a+"' placeholder='Masukkan gambar'>";
      //document.getElementById("media").append("<input type='file' class='form-control file-input' name='gambar' placeholder='Masukkan gambar'>");
      document.getElementById("jumlahmedia").value = a;
    }
    var b = 1;
    function tambahlink(){
      b++;
      document.getElementById("link").innerHTML += "<input type='text' class='form-control file-input' name='link"+b+"'>";
      document.getElementById("jumlahlink").value = b;
    }
    </script>
    @endsection