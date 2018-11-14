
 @extends('layouts.app_backend')
 @section('content')
    @if (Session::has('create_post_success'))

    <div class="alert alert-success">{{ Session('create_post_success') }}</div>

    @elseif (Session::has('create_post_fail'))

    <div class="alert alert-danger">{{ Session('create_post_fail') }}</div>

    @endif

    <div class="box box-info">
        <div class="box-header">
          <i class="fa fa-envelope"></i>

          <h3 class="box-title">Tambah Site</h3>
          <!-- tools box -->
          <div class="pull-right box-tools">

          </div>
          <!-- /. tools -->
        </div>
        <div class="container-fluid">
      {!! Form::open(['method'=>'post', 'action'=>'SiteController@store','files'=>'true']) !!}
        <div class="form-group">
            {!! Form::label('nama','Nama Site') !!}
            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama Barang'])!!}
        </div>
        <div class="form-group">
                {!! Form::submit('Simpan',['class'=>'btn btn-danger'])!!}
            </div>
        {!! Form::close() !!}
          </form>
        </div>
        </div>

      </div>

@endsection
