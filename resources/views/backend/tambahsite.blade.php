
 @extends('layouts.app_backend')
 @section('content')
    @if($edit=true)
    <div class="box box-info">
        <div class="box-header">
          <i class="fa fa-envelope"></i>

          <h3 class="box-title">Ubah Site</h3>
          <!-- tools box -->
          <div class="pull-right box-tools">

          </div>
          <!-- /. tools -->
        </div>
        <div class="container-fluid">
      {!! Form::model($sites,['method'=>'PUT', 'action'=>['SiteController@update',$sites->id],'files'=>'true']) !!}
        <div class="form-group">
            {!! Form::label('nama','Nama Site') !!}
            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama Site'])!!}
        </div>
        <div class="form-group">
                {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
            </div>
        {!! Form::close() !!}
          </form>
        </div>
        </div>
      </div>

    @else
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
            {!! Form::text('nama',null,['class'=>'form-control','placeholder'=>'Nama Site'])!!}
        </div>
        <div class="form-group">
                {!! Form::submit('Simpan',['class'=>'btn btn-primary'])!!}
            </div>
        {!! Form::close() !!}
          </form>
        </div>
        </div>
      </div>


    @endif
    
      

@endsection
