@extends('layouts.app_backend')
@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data testimoni</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Nama</th>
                  <th>Testimoni</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                @foreach ($testimoni as $testimoni)
                <tr>
                    <td>{{ $testimoni->nama }}</td>
                    <td>{{ $testimoni->testimoni }}</td>
                    <td>
                        <form action="{{ route('testimoni.destroy',$testimoni->id) }}" method="POST">
        
                            <a class="btn btn-info" href="{{ route('testimoni.show',$testimoni->id) }}">Show</a>
            
                            <a class="btn btn-primary" href="{{ route('testimoni.edit',$testimoni->id) }}">Edit</a>
        
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