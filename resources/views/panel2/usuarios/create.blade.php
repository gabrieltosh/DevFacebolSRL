@extends('panel.template')
@section('contenido')
<div class="box box-primary col-xs-12 col-md-12">
    <!-- general form elements -->
        <div class="box-header">
            <h3 class="box-title">Agregar Nuevo Usuario</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
       	{{Form::open(['route'=>'usuarios.store','method'=>'POST','files'=>true])}} 
        @include('panel.usuarios.form.form')

		<div class="box-footer col-md-12 text-center">
			{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
		      <a href="{{route('usuarios.index')}}" class="btn btn-danger"><i class="fa fa-close"></i> Cancelar</a>
        </div>
		{{Form::close()}}
</div>
@stop