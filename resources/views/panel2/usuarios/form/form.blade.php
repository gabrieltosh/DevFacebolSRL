
    <div class="form-group col-md-6">
        <label>Nombre </label>
        {{Form::text('nombre',null,['class'=>'form-control input-sm ','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6 {{ $errors->has('apellido') ? ' has-error' : '' }}">
        <label>Apellido</label>
        {{Form::text('apellido',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('apellido'))
        <span class="help-block">
            <strong>{{ $errors->first('apellido') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6 {{ $errors->has('ci') ? ' has-error' : '' }}">
        <label>Carnet de identidad</label>
        {{Form::number('ci',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('ci'))
        <span class="help-block">
            <strong>{{ $errors->first('ci') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
        <label>Correo Electronico</label>
        {{Form::email('email',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6 {{ $errors->has('direccion') ? ' has-error' : '' }}">
        <label>Direccion</label>
        {{Form::text('direccion',null,['class'=>'form-control','requerid','autofocus'])}}
        @if ($errors->has('direccion'))
        <span class="help-block">
            <strong>{{ $errors->first('direccion') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6 {{ $errors->has('celular') ? ' has-error' : '' }}">
        <label>Celular</label>
        {{Form::number('celular',null,['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('celular'))
        <span class="help-block">
            <strong>{{ $errors->first('celular') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
        <label>Contraseña</label>
        {{Form::password('password',['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label>Confirmar Contraseña</label>
            {{Form::password('password_confirmation',['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12 {{ $errors->has('imagen') ? ' has-error' : '' }}">
        <label>Imagen</label>
        {{Form::file('imagen',['class'=>'form-control','autofocus','requerid'])}}
        @if ($errors->has('imagen'))
        <span class="help-block">
            <strong>{{ $errors->first('imagen') }}</strong>
        </span>
        @endif
    </div>
    <div class="form-group col-md-6">
        <label>Tipo</label><br>
        @if(Auth::user()->tipo=="Sadministrador")
        <label>Administrador
        {{Form::radio('tipo','Administrador',true)}}
        </label>
        <label>Usuario
        {{Form::radio('tipo','Usuario')}}
        </label>
        <label>Empresa
        {{Form::radio('tipo','Empresa')}}
        </label>
        @endif
        @if(Auth::user()->tipo=="Administrador")
        </label>
        <label>Usuario
        {{Form::radio('tipo','Usuario',true)}}
        </label>
        <label>Empresa
        {{Form::radio('tipo','Empresa')}}
        </label>
        @endif
    </div>
    <div class="form-group col-md-6">
            <label>Ciudad</label>
            {{Form::select('ciudad_id',$ciudades,null,['class'=>'form-control','autofocus','requerid'])}}
    </div>


    