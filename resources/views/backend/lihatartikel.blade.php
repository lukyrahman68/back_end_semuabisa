@extends('layouts.app_backend')
@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data artikel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>ID</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Penulis</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                @foreach ($artikel as $artikel)
                <tr>
                    <td>{{ $artikel->id }}</td>
                    <td>{{ $artikel->nama }}</td>
                    <td>{{ $artikel->deskripsi }}</td>
                    <td>{{ $artikel->penulis }}</td>
                    <td>
                        <form action="{{ route('artikel.destroy',$artikel->id) }}" method="POST">
        
                            <a class="btn btn-info" href="{{ route('artikel.show',$artikel->id) }}">Show</a>
            
                            <a class="btn btn-primary" href="{{ route('artikel.edit',$artikel->id) }}">Edit</a>
        
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