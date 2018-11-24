
@extends('layouts.app_backend')
@section('content')

    
    <div class="box box-info">
                <div class="box-header">
                  <i class="fa fa-envelope"></i>
    
                  <h3 class="box-title">Edit site</h3>
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
                  <form action="{{ route('site.update',$site->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                    <strong>Page : </strong>
                      <input type="text" class="form-control" name="page" placeholder="Page" value="{{$site->page}}">
                    </div>
                    <div><strong>Deskripsi 1 :</strong>
                      <textarea class="textarea" placeholder="Deskripsi 1" name="deskripsi1"
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$site->deskripsi1}}</textarea>
                    </div>
                    <div><strong>Deskripsi 2 :</strong>
                      <textarea class="textarea" placeholder="Deskripsi 2" name="deskripsi2"
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$site->deskripsi2}}</textarea>
                    </div>
                    <div><strong>Deskripsi 3 :</strong>
                      <textarea class="textarea" placeholder="Deskripsi 3" name="deskripsi3"
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$site->deskripsi3}}</textarea>
                    </div>
                    <div><strong>Metadata Description : </strong>
                      <textarea class="textarea" placeholder="Metadata Description" name="metadatadescription"
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$site->metadatadescription}}</textarea>
                    </div>
                    <div><strong>Metadata Keywords : </strong>
                      <textarea class="textarea" placeholder="Metadata Keywords" name="metadatakeywords"
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$site->metadatakeywords}}</textarea>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="judul" placeholder="Judul" value="{{$site->nama}}">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="kategori" placeholder="Kategori" value="{{$site->kategori}}">
                    </div>
                    <div>
                      <textarea class="textarea" placeholder="Deskripsi" name="deskripsi" 
                                style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                {{$site->deskripsi}}
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