@extends('panel.template')
@section('contenido')
<div class="col-xs-12 col-md-12 box box-primary">
    <!-- general form elements -->
        <div class="box-header">
            <h3 class="box-title">Editar pais</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
       	{{Form::model($ciudad,['route'=> ['ciudad.update',$ciudad->id],'method'=>'PUT','files'=>true])}} 
        @include('panel.ciudad.form.form')

		<div class="box-footer col-md-12 text-center">
			{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
		    <button type="submit" class="btn btn-danger"><i class="fa fa-close"></i> Cancelar</button>
        </div>
		{{Form::close()}}
</div>
@stop