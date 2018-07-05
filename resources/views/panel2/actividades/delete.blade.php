<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-delete-{{$actividad->id}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <h4 class="modal-title">Eliminar Registro</h4>
                </div>
                {{Form::open(['route'=>['actividades.destroy',$actividad->id],'method'=>'DELETE'])}}
                <div class="modal-body">
                    <div class="col-sm-12">
                        <p>¿Eliminar el registro <strong>{{$actividad->nombre}}</strong>?</p>
                    </div>    
                </div>
            <div class="modal-footer">
                 <div class="form-group"> 
                <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Eliminar</button>
                 </div>
            </div>
            {{Form::close()}}
        </div>
    </div>  
    </div>