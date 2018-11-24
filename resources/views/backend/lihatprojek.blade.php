@extends('layouts.app_backend')
@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data project</h3>
            </div>
            <!-- /.box-header -->
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
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                @foreach ($projek as $projek)
                <tr>
                    <td>{{ $projek->id }}</td>
                    <td>{{ $projek->nama }}</td>
                    <td>{{ $projek->deskripsi }}</td>
                    <td>
                        <form action="{{ route('project.destroy',$projek->id) }}" method="POST">
        
                            <a class="btn btn-info" href="{{ route('project.show',$projek->id) }}">Show</a>
            
                            <a class="btn btn-primary" href="{{ route('project.edit',$projek->id) }}">Edit</a>
        
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