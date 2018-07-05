@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Instituciones</h2>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($institucion as $instituciones)
                            <tr>
                                <td><img src="{{asset('imagen')}}/{{$instituciones->imagen}}" width="50px" height="50px"></td>
                                <td>{{$instituciones->telefono}}</td>
                                <td>{{$instituciones->direccion}}</td>
                                <td>{{$instituciones->email}}</td>
                                <td>
                                 <a data-toggle="modal" href="#myModal{{$instituciones->id}}">
                                    <button class="btn btn-warning btn-sm"><i class="fa fa-eye"></i></button>
                                  </a>
                                  <a href="{{route('institucion.edit',$instituciones->id)}}">
                                    <button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button> 
                                  </a>
                                </td> 
                            </tr>
                            @include('panel.institucion.show')                  
                            @endforeach                   
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Imagen</th>
                                <th>Telefono</th>
                                <th>Direccion</th>
                                <th>Email</th>
                                <th>Opciones</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
</section><!-- /.content -->
@stop