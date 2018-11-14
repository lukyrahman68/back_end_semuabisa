@extends('layouts.app_backend')
@section('content')

<div class="contianer">
        @if (Session::has('create_post_success'))

        <div class="alert alert-success">{{ Session('create_post_success') }}</div>
    
        @elseif (Session::has('create_post_fail'))
    
        <div class="alert alert-danger">{{ Session('create_post_fail') }}</div>
    
        @endif
    </div>

    <div class="box box info">

  
        <div class="box-header">
            <i class="fa fa-envelope"></i>
            <h3 class="box-title">Data Site</h3>
          </div>
          <a href="{{route('site.create')}}" class="btn btn-sm btn-info" style="margin:20px"> New Site </a>
          <hr>
      <div class="container">
          <table class="table">
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Nama Site</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($sites as $site)
                  <tr>
                  <td>{{$site->id}}</td>
                  <td>{{$site->nama}}</td>
                  <td><a href="{{route('site.edit',$site->id)}}"<input type="button" class="btn btn-primary">Edit</a></td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
      </div>

    </div>

@endsection