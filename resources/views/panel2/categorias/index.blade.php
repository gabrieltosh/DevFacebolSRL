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
                                    {{Form::open(['route'=>'catBuscar','method'=>'POST'])}}
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
                                                            <li><a href="{{route('catPaginar',5)}}">5</a></li>
                                                            <li><a href="{{route('catPaginar',10)}}">10</a></li>
                                                            <li><a href="{{route('catPaginar',20)}}">20</a></li>
                                                            <li><a href="{{route('catPaginar',30)}}">30</a></li>
                                                            <li><a href="{{route('catPaginar',50)}}">50</a></li>
                                                            <li><a href="{{route('catPaginar',50)}}">100</a></li>
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
                                                    <a href="{{route('categoria.index')}}" class="btn btn-info btn-sm"> <i class="fa fa-refresh" aria-hidden="true"></i></a> 
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
                                       <a href="{{route('categoria.create')}}" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Agregar</a>
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
                                <th class="text-center">Descripcion</th>
                                <th class="text-center">Imagen</th>                                
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categorias as $categoria)
                            <tr>
                                <td class="text-center">{{$categoria->nombre}}</td>
                                <td class="text-center">{{$categoria->descripcion}}</td>
                                @if($categoria->imagen==null)
                                <td class="text-center text-info">Sin Imagen</td>
                                @else
                                <td><img src="{{asset('imagen/'.$categoria->imagen)}}" width="80px" height="80px"></td>                                
                                @endif
                                <td class="text-center">
                                  <a href="{{route('categoria.edit',$categoria->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                  <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete-{{$categoria->id}}"><i class="fa fa-trash-o"></i></a>
                                </td> 
                            </tr>
                            @include('panel.categorias.delete')
                            @endforeach   
                                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Descripcion</th>
                                <th class="text-center">Imagen</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                    @if($_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]!==$_SERVER["HTTP_HOST"]."/panel/categoria/buscar")
                    <div class="text-center">
                        {{$categorias->render()}}  
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