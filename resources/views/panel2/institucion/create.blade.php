@extends('panel.template')
@section('contenido')
<div class="box box-primary col-xs-12 col-md-12">
    <!-- general form elements -->
        <div class="box-header">
            <h3 class="box-title">Agregar nueva Usuario</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
       	{{Form::open(['route'=>'institucion.store','method'=>'POST','files'=>true])}} 
        @include('panel.institucion.form.form')

		<div class="box-footer col-md-12 text-center">
			{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
            <a href="{{route('institucion.index')}}">
		      <button type="button" class="btn btn-danger"><i class="fa fa-close"></i> Cancelar</button>
		    </a>
        </div>
		{{Form::close()}}
</div>
@stop