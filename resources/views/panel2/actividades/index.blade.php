@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Actividades</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-12" >
                    <div class="row">
                        <div class="col-xs-12 col-md-6" style="margin-bottom:15px">
                            <div class="row">
                                <div class="col-xs-6 col-md-6" style="margin-right:0px; padding-right:0px;">
                                    {{Form::open(['route'=>'actBuscar','method'=>'POST'])}}
                                    <div class="col-xs-12 col-md-5">
                                        <div class="row">
                                            <div class="col-xs-6 col-sm-6">
                                                <div class="pull-left">
                                                    <div class="dropdown">
                                                        <button class="btn btn-sm btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                            Paginacion
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                            <li><a href="{{route('actPaginar',5)}}">5</a></li>
                                                            <li><a href="{{route('actPaginar',10)}}">10</a></li>
                                                            <li><a href="{{route('actPaginar',20)}}">20</a></li>
                                                            <li><a href="{{route('actPaginar',30)}}">30</a></li>
                                                            <li><a href="{{route('actPaginar',50)}}">50</a></li>
                                                            <li><a href="{{route('actPaginar',50)}}">100</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xs-8 col-md-5 " style="margin-right:0px; padding-right:0px;">
                                        <div class="pull-right">
                                            <div class="form-group">
                                                <div class="input-group">   
                                                    <input class="form-control" type="text" name="search" id="buscar" placeholder="Buscar" style="height:30px;">
                                                </div>    
                                            </div> 
                                        </div> 
                                    </div>
                                    <div class="col-xs-2 col-md-2"style="margin-left:0px; padding-left:0px;">
                                            <div class="row">
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="pull-left">
                                                        <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-search"></i></button>  
                                                    </div>
                                                </div>
                                            </div>
                                    </div>   
                                </div>
                                   <div class="col-sm-6 col-xs-6">
                                        <div class="col-md-3 col-xs-6">
                                                <div class="pull-right">
                                                    <a href="{{route('actividades.index')}}" class="btn btn-info btn-sm"> <i class="fa fa-refresh" aria-hidden="true"></i></a> 
                                                </div>
                                        </div>
                                   </div>
                                    {{Form::close()}}
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6 " style="margin-bottom:15px"> 
                            <div class="row">
                                <div class="col-xs-4 col-md-4">
                                    <div class="pull-right">
                                        <!--<a href="" class="btn btn-success btn-sm"><i class="fas fa-reload"></i> Reset</a>-->
                                    </div> 
                                </div>
                                <div class="col-xs-4 col-md-4">
                                    <div class="pull-right">
                                       
                                    </div> 
                                </div>
                                <div class="col-xs-4 col-md-4">
                                    <div class="pull-right">
                                       <a href="{{route('actividades.create')}}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Agregar</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead >
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Imagen</th>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($actividades as $actividad)
                            <tr>
                                <td class="text-center">{{$actividad->nombre}}</td>
                                <td class="text-center"><img src="{{asset('imagen')}}/{{$actividad->imagen}}" width="50px" height="50px"></td>
                                <td class="text-center">{{$actividad->fecha}}</td>
                                <td class="text-center">
                                  <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-detalle-{{$actividad->id}}"><i class="fa fa-eye"></i></a>
                                  @if($actividad->activo==1)
                                  <a href="{{route('actividades.show',$actividad->id)}}" class="btn btn-info btn-sm"><i class="fa fa-check"></i></a>
                                  @else
                                  <a href="{{route('actividades.show',$actividad->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                  @endif
                                  <a href="{{route('actividades.edit',$actividad->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$actividad->id}}"><i class="fa fa-trash-o"></i></a>
                                </td> 
                            </tr>
                            @include('panel.actividades.show')   
                            @include('panel.actividades.delete')                      
                            @endforeach   
                                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Imagen</th>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                    @if($_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]!==$_SERVER["HTTP_HOST"]."/panel/actividades/buscar")
                    <div class="text-center">
                        {{$actividades->render()}}  
                    </div>  
                    @endif  
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop
@section('toast')
    @if(Session::has('message'))
    toastr.success('{{\Session::get('message')}}');
    @endif
@stop