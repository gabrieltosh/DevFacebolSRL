<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-detalle-{{$actividad->id}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <h4 class="modal-title">Datos de Actividad {{ucwords($actividad->nombre)}}</h4>
                </div>
                <div class="modal-body">
                <dl class="row">
                    <dt class="col-sm-6">Descripcion de Actividad :</dt>
                    <dd class="col-sm-6">{{$actividad->descripcion}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-6">Tipo de Actividad :</dt>
                    <dd class="col-sm-6">{{ucfirst($actividad->tipo)}}</dd>      
                </dl>
                </div>
            <div class="modal-footer">
                 <div class="form-group"> 
                <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
                 </div>
            </div>
        </div>
    </div>  
    </div>