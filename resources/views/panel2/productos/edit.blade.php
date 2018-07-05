@extends('panel.template')
@section('contenido')
<div class="col-xs-12 col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Agregar nuevo Producto</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
       	{{Form::model($producto,['route'=> ['productos.update',$producto->id],'method'=>'PUT','files'=>true])}} 
        @include('panel.productos.form.form')

		<div class="box-footer col-md-12 text-center">
			{{Form::submit('Guardar',['class'=>'btn btn-primary'])}}
            <a href="{{route('productos.index')}}">
		      <button type="button" class="btn btn-danger"><i class="fa fa-close"></i> Cancelar</button>
		    </a>
        </div>
		{{Form::close()}}
    </div><!-- /.box -->
</div>
@stop