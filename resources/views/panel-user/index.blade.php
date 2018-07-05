@extends('panel.template')
@section('contenido')
<div class="row">
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>
                    0
                </h3>
                <p>
                    Usuarios Registrados
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
                Mas Información <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3>
                    0
                </h3>
                <p>
                    Ventas Realizadas
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">
                Mas Información <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>
                    0<sup style="font-size: 20px"> Bs</sup>
                </h3>
                <p>
                    Dinero Disponible
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
                Mas Información <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
</div><!-- /.row -->
<div class="col-md-6">
    <div class="box box-info">
        <div class="box-header">
            <i class="fa fa-bullhorn"></i>
            <h3 class="box-title">Información Personal</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
            <div class="callout callout-info">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pull-left">
                        <p class="text-info">Nombre :</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pull-left">
                        <p>{{ucwords(Auth::user()->nombre)}}</p>
                        </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pull-left">
                        <p class="text-info">Apellido :</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pull-left">
                        <p>{{ucwords(Auth::user()->apellido)}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pull-left">
                        <p class="text-info">Correo Electronico :</p>
                    </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pull-left">
                        <p>{{Auth::user()->email}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pull-left">
                        <p class="text-info">Carnet de Identidad :</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pull-left">
                        <p>{{Auth::user()->ci}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pull-left">
                        <p class="text-info">Celular :</p>
                        </div>
                    </div>
                        <div class="col-md-6">
                        <div class="pull-left">
                        <p>{{Auth::user()->celular}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="pull-left">
                        <p class="text-info">Codigo Facebol : </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pull">
                        <p>{{Auth::user()->cod_face}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>
@stop