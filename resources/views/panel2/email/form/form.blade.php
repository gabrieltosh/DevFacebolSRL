<div class="box-body">
    <div class="form-group col-md-6{{ $errors->has('email') ? ' has-error' : '' }}">
        <label>Correo Electronico </label>
        {{Form::email('email',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
</div><!-- /.box-body -->

    