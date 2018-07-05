@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Empresas</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-12" >
                    <div class="row">
                        <div class="col-xs-12 col-md-6" style="margin-bottom:15px">
                            <div class="row">
                                <div class="col-xs-6 col-md-6" style="margin-right:0px; padding-right:0px;">
                                    {{Form::open(['route'=>'emBuscar','method'=>'POST'])}}
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
                                                            <li><a href="{{route('emPaginar',5)}}">5</a></li>
                                                            <li><a href="{{route('emPaginar',10)}}">10</a></li>
                                                            <li><a href="{{route('emPaginar',20)}}">20</a></li>
                                                            <li><a href="{{route('emPaginar',30)}}">30</a></li>
                                                            <li><a href="{{route('emPaginar',50)}}">50</a></li>
                                                            <li><a href="{{route('emPaginar',50)}}">100</a></li>
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
                                                    <a href="{{route('empresas.index')}}" class="btn btn-info btn-sm"> <i class="fa fa-refresh" aria-hidden="true"></i></a> 
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
                                       <a href="{{route('empresas.create')}}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Agregar</a>
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
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Ciudad</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($empresas as $empresa)
                            <tr>
                                <td><img src="{{asset('imagen')}}/{{$empresa->imagen}}" width="50px" height="50px"></td>
                                <td>{{$empresa->nombre}}</td>
                                <td>{{$empresa->telefono}}</td>
                                <td>{{$empresa->email}}</td>
                                <td>{{$empresa->ciudad->nombre}}</td>
                                <td>
                                    @if($empresa->activo==1)
                                    <a href="{{route('empresas.show',$empresa->id)}}" class="btn btn-success btn-sm"><i class="fa fa-check"></i></a>
                                    @else
                                    <a href="{{route('empresas.show',$empresa->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-remove"></i></a>
                                    @endif

                                  <a data-toggle="modal" href="#myModal{{$empresa->id}}">
                                    <button class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></button>
                                  </a>
                                  <a href="{{route('empresas.edit',$empresa->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                </td> 
                            </tr>  
                            @include('panel.empresas.show')                      
                            @endforeach                   
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Imagen</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Ciudad</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                    @if($_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]!==$_SERVER["HTTP_HOST"]."/panel/empresas/buscar")
                    <div class="text-center">
                        {{$empresas->render()}}  
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