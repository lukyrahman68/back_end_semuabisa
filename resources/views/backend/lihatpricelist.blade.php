@extends('layouts.app_backend')
@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data pricelist</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>Kategori</th>
                  <th>Sub Kategori</th>
                  <th>Paket</th>
                  <th>Deskripsi</th>
                  <th>Harga</th>
                  <th>Aksi</th>
                
                </tr>
                </thead>
                <tbody>
                @foreach ($pricelist as $pricelist)
                <tr>
                    <td>{{ $pricelist->kategori }}</td>
                    <td>{{ $pricelist->subkategori }}</td>
                    <td>{{ $pricelist->paket }}</td>
                    <td>{{ $pricelist->deskripsi }}</td>
                    <td>{{ $pricelist->harga }}</td>
                    <td>
                        <form action="{{ route('pricelist.destroy',$pricelist->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('pricelist.show',$pricelist->id) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('pricelist.edit',$pricelist->id) }}">Edit</a>
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