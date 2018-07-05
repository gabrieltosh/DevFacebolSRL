<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-detalle-{{$equipo->id}}">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <h4 class="modal-title">Datos de Usuario</h4>
                </div>
                <div class="modal-body">
                <dl class="row">
                    <dt class="col-sm-4">Cargo :</dt>
                    <dd class="col-sm-8">{{$equipo->cargo}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Facebook :</dt>
                    <dd class="col-sm-8">{{$equipo->facebook}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Twitter :</dt>
                    <dd class="col-sm-8">{{ucwords($equipo->twitter)}}</dd>      
                </dl>
                <dl class="row">
                    <dt class="col-sm-4">Instagram :</dt>
                    <dd class="col-sm-8">{{ucwords($equipo->instagram)}}</dd>      
                </dl>
                <dl class="row">
                        <dt class="col-sm-4">Descripcion :</dt>
                        <dd class="col-sm-8">{{$equipo->descripcion}}</dd>      
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