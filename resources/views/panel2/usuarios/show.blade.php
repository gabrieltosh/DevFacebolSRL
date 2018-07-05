<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-detalle-{{$usuario->id}}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title">Datos de {{ucwords($usuario->nombre)}}</h4>
                    </div>
                    <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-6">Carnet de Identidad :</dt>
                        <dd class="col-sm-6">{{$usuario->ci}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-6">Direccion :</dt>
                        <dd class="col-sm-6">{{ucwords($usuario->direccion)}}</dd>      
                    </dl>
                    
                     <dl class="row">
                        <dt class="col-sm-6">Email :</dt>
                        <dd class="col-sm-6">{{$usuario->email}}</dd>      
                    </dl>
                     <dl class="row">
                        <dt class="col-sm-6">Tipo :</dt>
                        <dd class="col-sm-6">{{ucfirst($usuario->tipo)}}</dd>      
                    </dl>
                     <dl class="row">
                        <dt class="col-sm-6">Ciudad :</dt>
                        <dd class="col-sm-6">{{ucwords($usuario->ciudad->nombre)}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-6">Codigo de Usuario :</dt>
                        <dd class="col-sm-6">{{$usuario->cod_face}}</dd>      
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