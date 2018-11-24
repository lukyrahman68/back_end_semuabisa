@extends('layouts.app_backend')
@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data site</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Page</th>
                  <th>Deskripsi1</th>
                  <th>Deskripsi2</th>
                  <th>Deskripsi3</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                @foreach ($site as $site)
                <tr>
                    <td>{{ $site->page }}</td>
                    <td>{{ $site->deskripsi1 }}</td>
                    <td>{{ $site->deskripsi2 }}</td>
                    <td>{{ $site->deskripsi3 }}</td>
                    <td>
                        <form action="{{ route('site.destroy',$site->id) }}" method="POST">
        
                            <a class="btn btn-info" href="{{ route('site.show',$site->id) }}">Show</a>
            
                            <a class="btn btn-primary" href="{{ route('site.edit',$site->id) }}">Edit</a>
        
                            @csrf
                            @method('DELETE')
            
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          </div>
          
          @endsection