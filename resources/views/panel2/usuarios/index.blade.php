@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Usuarios</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-12" >
                    <div class="row">
                        <div class="col-xs-12 col-md-6" style="margin-bottom:15px">
                            <div class="row">
                                <div class="col-xs-6 col-md-6" style="margin-right:0px; padding-right:0px;">
                                    {{Form::open(['route'=>'usuBuscar','method'=>'POST'])}}
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
                                                            <li><a href="{{route('usuPaginar',5)}}">5</a></li>
                                                            <li><a href="{{route('usuPaginar',10)}}">10</a></li>
                                                            <li><a href="{{route('usuPaginar',20)}}">20</a></li>
                                                            <li><a href="{{route('usuPaginar',30)}}">30</a></li>
                                                            <li><a href="{{route('usuPaginar',50)}}">50</a></li>
                                                            <li><a href="{{route('usuPaginar',50)}}">100</a></li>
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
                                                    <a href="{{route('usuarios.index')}}" class="btn btn-info btn-sm"> <i class="fa fa-refresh" aria-hidden="true"></i></a> 
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
                                       <a href="{{route('usuarios.create')}}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Agregar</a>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellidos</th>
                                <th class="text-center">Imagen</th>
                                <th class="text-center">Correo</th>
                                <th class="text-center">Celular</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(Auth::user()->tipo=="Sadministrador")
                                @foreach($usuarios as $usuario)
                                    @if(Auth::user()->id != $usuario->id && $usuario->tipo !='Sadministrador')
                                        <tr>
                                            <td class="text-center">{{ucwords($usuario->nombre)}}</td>
                                            <td class="text-center">{{ucwords($usuario->apellido)}}</td>
                                            <td class="text-center"><img src="{{asset('imagen')}}/{{$usuario->imagen}}" alt="" width="50px" height="50px" class="img-responsive img-thumbnail"></td>
                                            <td class="text-center">{{$usuario->email}}</td>
                                            <td class="text-center">{{$usuario->celular}}</td>
                                            <td  class="text-center"    > 
                                            @if($usuario->activo==1)
                                                <a href="{{route('usuarios.show',$usuario->id)}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                            @else
                                                <a href="{{route('usuarios.show',$usuario->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                            @endif
                                                <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-detalle-{{$usuario->id}}"><i class="fa fa-eye"></i></a>
                                                <a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                            </td> 
                                        </tr>      
                                        @include('panel.usuarios.show')      
                                    @endif    
                                @endforeach     
                            @endif
                            @if(Auth::user()->tipo=="Administrador")
                                @foreach($usuarios as $usuario)
                                    @if($usuario->tipo == 'Empresa' || $usuario->tipo == 'Usuario')
                                        @if(Auth::user()->id != $usuario->id)
                                            <tr>
                                                <td class="text-center">{{ucwords($usuario->nombre)}}</td>
                                                <td class="text-center">{{ucwords($usuario->apellido)}}</td>
                                                <td class="text-center"><img src="{{asset('imagen')}}/{{$usuario->imagen}}" alt="" width="50px" height="50px" class="img-responsive img-thumbnail"></td>
                                                <td class="text-center">{{$usuario->email}}</td>
                                                <td class="text-center">{{$usuario->celular}}</td>
                                                <td  class="text-center"> 
                                                @if($usuario->activo==1)
                                                    <a href="{{route('usuarios.show',$usuario->id)}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                                @else
                                                    <a href="{{route('usuarios.show',$usuario->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                                @endif
                                                    <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-detalle-{{$usuario->id}}"><i class="fa fa-eye"></i></a>
                                                    <a href="{{route('usuarios.edit',$usuario->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                                </td> 
                                            </tr>      
                                        @endif
                                        @include('panel.usuarios.show')   
                                    @endif       
                                @endforeach    
                            @endif     
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellidos</th>
                                <th class="text-center">Imagen</th>
                                <th class="text-center">Correo</th>
                                <th class="text-center">Celular</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                    @if($_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]!==$_SERVER["HTTP_HOST"]."/panel/usuarios/buscar")
                    <div class="text-center">
                        {{$usuarios->render()}}  
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