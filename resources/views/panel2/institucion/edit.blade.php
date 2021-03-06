@extends('panel.template')
@section('contenido')
<div class="box box-primary col-xs-12 col-md-12">
    <!-- general form elements -->
        <div class="box-header">
            <h3 class="box-title">Editar empresa</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
       	{{Form::model($institucion,['route'=> ['institucion.update',$institucion->id],'method'=>'PUT','files'=>true])}} 
        @include('panel.institucion.form.form')

		<div class="box-footer col-md-12 text-center">
			{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
		    <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Cancelar</button>
        </div>
		{{Form::close()}}
</div>
@stop