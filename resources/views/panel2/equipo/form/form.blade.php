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
    <div class="form-group col-md-6{{ $errors->has('cargo') ? ' has-error' : '' }}">
        <label>Cargo </label>
        {{Form::text('cargo',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        @if ($errors->has('cargo'))
        <span class="help-block">
            <strong>{{ $errors->first('cargo') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('facebook') ? ' has-error' : '' }}">
        <label>Facebook </label>
        {{Form::text('facebook',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        @if ($errors->has('facebook'))
        <span class="help-block">
            <strong>{{ $errors->first('facebook') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('twitter') ? ' has-error' : '' }}">
        <label>Twitter </label>
        {{Form::text('twitter',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        @if ($errors->has('twitter'))
        <span class="help-block">
            <strong>{{ $errors->first('twitter') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('instagram') ? ' has-error' : '' }}">
        <label>Instagram </label>
        {{Form::text('instagram',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        @if ($errors->has('instagram'))
        <span class="help-block">
            <strong>{{ $errors->first('instagram') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6{{ $errors->has('descripcion') ? ' has-error' : '' }}">
        <label>Descripcion</label>
        {{Form::textarea('descripcion',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introducir descripcion','rows'=>4])}}
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
