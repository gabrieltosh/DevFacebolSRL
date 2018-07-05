<div class="box-body">
    <div class="form-group col-md-6{{ $errors->has('cod_face') ? ' has-error' : '' }}">
        <label>Codigo de Usuario</label>
        {{Form::text('cod_face',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('cod_face'))
        <span class="help-block">
            <strong>{{ $errors->first('cod_face') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('nombre') ? ' has-error' : '' }}">
        <label>Nombre </label>
        {{Form::text('nombre',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        @if ($errors->has('nombre'))
        <span class="help-block">
            <strong>{{ $errors->first('nombre') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label>Ciudad</label>
        {{Form::select('ciudad_id',$ciudad,null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Categoria</label>
        {{Form::select('categoria_id',$categoria,null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6{{ $errors->has('descripcion') ? ' has-error' : '' }}">
        <label>Descripcion</label>
        {{Form::textarea('descripcion',null,['class'=>'form-control','cols'=>'50','rows'=>'4', 'autofocus','requerid'])}}
        @if ($errors->has('descripcion'))
        <span class="help-block">
            <strong>{{ $errors->first('descripcion') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('horario') ? ' has-error' : '' }}">
        <label>Horario</label>
        {{Form::text('horario',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('horario'))
        <span class="help-block">
            <strong>{{ $errors->first('horario') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('descuento') ? ' has-error' : '' }}">
        <label>Descuento</label>
        {{Form::text('descuento',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('descuento'))
        <span class="help-block">
            <strong>{{ $errors->first('descuento') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('promocion') ? ' has-error' : '' }}">
        <label>Promocion</label>
        {{Form::text('promocion',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('promocion'))
        <span class="help-block">
            <strong>{{ $errors->first('promocion') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('telefono') ? ' has-error' : '' }}">
        <label>Telefono</label>
        {{Form::text('telefono',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('telefono'))
        <span class="help-block">
            <strong>{{ $errors->first('telefono') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('email') ? ' has-error' : '' }}">
        <label>Email</label>
        {{Form::text('email',null,['class'=>'form-control','requerid','autofocus'])}}
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('facebook') ? ' has-error' : '' }}">
        <label>Facebook</label>
        {{Form::text('facebook',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('facebook'))
        <span class="help-block">
            <strong>{{ $errors->first('facebook') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('web') ? ' has-error' : '' }}">
        <label>Web</label>
        {{Form::text('web',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('web'))
        <span class="help-block">
            <strong>{{ $errors->first('web') }}</strong>
        </span>
        @endif
    </div>  
    <div class="form-group col-md-6{{ $errors->has('direccion') ? ' has-error' : '' }}">
        <label>Direccion</label>
        {{Form::text('direccion',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('direccion'))
        <span class="help-block">
            <strong>{{ $errors->first('direccion') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('video') ? ' has-error' : '' }}">
        <label>Video (url ID)</label>
        {{Form::text('video',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('video'))
        <span class="help-block">
            <strong>{{ $errors->first('video') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-12{{ $errors->has('imagen') ? ' has-error' : '' }}">
        <label>Imagen</label>
        {{Form::file('imagen',null,['class'=>'form-control','requerid'])}}
        @if ($errors->has('imagen'))
        <span class="help-block">
            <strong>{{ $errors->first('imagen') }}</strong>
        </span>
        @endif
    </div>  
</div><!-- /.box-body -->

    