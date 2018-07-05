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
        <div class="form-group col-md-6{{ $errors->has('precio') ? ' has-error' : '' }}">
        <label>Precio </label>
        {{Form::text('precio',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        @if ($errors->has('precio'))
        <span class="help-block">
            <strong>{{ $errors->first('precio') }}</strong>
        </span>
        @endif
</div>
        <div class="form-group col-md-6{{ $errors->has('plan') ? ' has-error' : '' }}">
        <label>Plan </label>
        {{Form::text('plan',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        @if ($errors->has('plan'))
        <span class="help-block">
            <strong>{{ $errors->first('plan') }}</strong>
        </span>
        @endif
</div>
        <div class="form-group col-md-6{{ $errors->has('moneda') ? ' has-error' : '' }}">
        <label>Moneda </label>
        {{Form::text('moneda',null,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre'])}}
        @if ($errors->has('moneda'))
        <span class="help-block">
            <strong>{{ $errors->first('moneda') }}</strong>
        </span>
        @endif
</div>

@foreach($planDetalle as $descripcion)

        <div class="form-group col-md-6{{ $errors->has('nombre-'.$descripcion->id) ? ' has-error' : '' }}">
        <label>Descripcion {{$descripcion->id}} </label>
        {{Form::textarea('nombre-'.$descripcion->id,$descripcion->descripcion,['class'=>'form-control','autofocus','requerid','placeholder'=>'Introduce un Nombre','rows'=>4])}}
        @if ($errors->has('nombre-',$descripcion->id))
        <span class="help-block">
            <strong>{{ $errors->first('nombre-'.$descripcion->id) }}</strong>
        </span>
        @endif
</div>

@endforeach
</div>
    