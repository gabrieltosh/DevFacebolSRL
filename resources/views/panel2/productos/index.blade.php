@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Productos</h2>
                </div><!-- /.box-header -->
                <div class="col-xs-12 col-md-6" style="padding-left: 920px;">
                    <a href="{{route('productos.create')}}">
                        <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>  &nbsp;&nbsp;&nbsp;&nbsp; Agregar</button>
                    </a>
                </div><br><br><br>
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Empresa</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descuento</th>
                                <th>Comision</th>
                                <th>Tipo</th>
                                <th>Imagen</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($producto as $productos)
                            <tr>
                                <td>{{$productos->empresa_id}}</td>
                                <td>{{$productos->nombre}}</td>
                                <td>{{$productos->precio}}</td>
                                <td>{{$productos->descuento}}</td>
                                <td>{{$productos->comision}}</td>
                                <td>{{$productos->tipo}}</td>
                                <td><img src="{{asset('imagen')}}/{{$productos->imagen}}" width="50px" height="50px"></td>
                                <td>{{$productos->estado}}</td>
                                <td>
                                  {!!Form::open(['route'=>['productos.destroy', $productos->id], 'method' => 'DELETE'])!!}
                                  <a href="{{route('productos.edit',$productos->id)}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                  <button class="btn btn-success"><i class="fa fa-check"></i></button>
                                  {!!Form::close()!!}
                                </td> 
                            </tr>                        
                            @endforeach                   
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Empresa</th>
                                <th>Nombre</th>
                                <th>Precio</th>
                                <th>Descuento</th>
                                <th>Comision</th>
                                <th>Tipo</th>
                                <th>Imagen</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
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