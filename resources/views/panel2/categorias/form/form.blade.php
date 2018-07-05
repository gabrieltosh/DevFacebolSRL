<div class="box-body">
    <div class="form-group col-md-6{{ $errors->has('nombre') ? ' has-error' : '' }}">
        <label>Nombre </label>
        {{Form::text('nombre',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        @if ($errors->has('nombre'))
        <span class="help-block">
            <strong>{{ $errors->first('nombre') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('descripcion') ? ' has-error' : '' }}">
        <label>Descripcion</label>
        {{Form::textarea('descripcion',null,['class'=>'form-control','autofocus','requerid','rows'=>4])}}
        @if ($errors->has('descripcion'))
        <span class="help-block">
            <strong>{{ $errors->first('descripcion') }}</strong>
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
