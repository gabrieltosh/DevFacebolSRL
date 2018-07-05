<div class="box-body">
    <div class="form-group col-md-6">
        <label>Quienes Somos </label>
        {{Form::textarea('qSomos',null,['class'=>'form-control','cols'=>'50','rows'=>'7', 'autofocus','requerid','placeholder'=>'Introduce una Descripcion'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Primera Frase</label>
        {{Form::textarea('frase1',null,['class'=>'form-control','cols'=>'50','rows'=>'7','autofocus','requerid','placeholder'=>'Introduce una Descripcion'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Segunda Frase </label>
        {{Form::textarea('frase2',null,['class'=>'form-control','cols'=>'50','rows'=>'7','autofocus','requerid','placeholder'=>'Introduce una Descripcion'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Tercera Frase </label>
        {{Form::textarea('frase3',null,['class'=>'form-control','cols'=>'50','rows'=>'7','autofocus','requerid','placeholder'=>'Introduce una Descripcion'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Trabaja con Nosotros </label>
        {{Form::textarea('trabaja',null,['class'=>'form-control','cols'=>'50','rows'=>'7','autofocus','requerid','placeholder'=>'Introduce una Descripcion'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Descripcion de Empresas Afiliadas </label>
        {{Form::textarea('desEmpresa',null,['class'=>'form-control','cols'=>'50','rows'=>'7','autofocus','requerid','placeholder'=>'Introduce una Descripcion'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Direccion</label>
        {{Form::text('direccion',null,['class'=>'form-control','requerid','autofocus'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Celular</label>
        {{Form::text('celular',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Telefono</label>
        {{Form::text('telefono',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Email</label>
        {{Form::text('email',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Facebook</label>
        {{Form::text('facebook',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Twiter</label>
        {{Form::text('twitter',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Youtube</label>
        {{Form::text('youtube',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Instagram</label>
        {{Form::text('instagram',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Google</label>
        {{Form::text('google',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Vision</label>
        {{Form::text('vision',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-6">
        <label>Mision</label>
        {{Form::text('mision',null,['class'=>'form-control','autofocus','requerid'])}}
    </div>
    <div class="form-group col-md-12">
        <label>Imagen</label>
        {{Form::file('imagen',null,['class'=>'form-control','requerid'])}}
    </div>
</div><!-- /.box-body -->

    