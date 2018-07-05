@extends('panel.template')
@section('contenido')
<section class="content">
        <div class="col-xs-12">                            
            <div class="box">
                <div class="box-header">
                    <h2 class="text-center">Lista de Planes</h2>
                </div><!-- /.box-header -->

                <div class="box-body table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Precio</th>
                                <th class="text-center">Plan</th>
                                <th class="text-center">Moneda</th>
                                <th class="text-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($planes as $plan)
                            <tr>
                                <td class="text-center">{{ucwords($plan->nombre)}}</td>
                                <td class="text-center">{{ucwords($plan->precio)}}</td>
                                <td class="text-center">{{$plan->plan}}</td>
                                <td class="text-center">{{$plan->moneda}}</td>
                                <td  class="text-center"> 
                                  <a class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-detalle-{{$plan->id}}"><i class="fa fa-eye"></i></a>
                                  <a href="{{route('planes.edit',$plan->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                                  {!!Form::close()!!}
                                </td> 
                            </tr>      
                            @include('panel.planes.show')          
                            @endforeach             
                            {{$planes->render()}}      
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Precio</th>
                                <th class="text-center">Plan</th>
                                <th class="text-center">Moneda</th>
                                <th class="text-center">Opciones</th>
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