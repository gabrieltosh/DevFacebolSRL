<div class="box-body">
    <div class="form-group col-md-6">
        <label>Nombre </label>
        {{Form::text('nombre',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Descripcion</label>
        {{Form::text('descripcion',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Precio</label>
        {{Form::text('precio',null,['class'=>'form-control','requerid','autofocus'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Descuento</label>
        {{Form::text('descuento',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Comision</label>
        {{Form::text('comision',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Tipo</label>
        {{Form::select('tipo',$tipo,null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Imagen</label>
        {{Form::file('imagen',null,['class'=>'form-control','requerid'])}}
    </div>
    <div class="form-group">
        <p class="help-block">Facebol</p>
    </div>
</div><!-- /.box-body -->

    