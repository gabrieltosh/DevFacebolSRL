<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="myModal{{$empresa->id}}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title">Datos de {{$empresa->nombre}}</h4>
                    </div>
                    <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-4">Usuario Administrador :</dt>
                        <dd class="col-sm-6" disabled="">{{ucwords($empresa->usuario->nombre." ".$empresa->usuario->apellido)}}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Categoria :</dt>
                        <dd class="col-sm-6" disabled="">{{$empresa->categoria->nombre}}</dd>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Descripcion :</dt>
                        <textarea cols="50" rows="3" disabled="">{{$empresa->descripcion}}</textarea>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Horario :</dt>
                        <dd class="col-sm-6">{{$empresa->horario}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Descuento :</dt>
                        <dd class="col-sm-6">{{$empresa->descuento}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Promocion :</dt>
                        <dd class="col-sm-6">{{$empresa->promocion}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Facebook :</dt>
                        <dd class="col-sm-6">{{$empresa->facebook}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Pagina Web :</dt>
                        <dd class="col-sm-6">{{$empresa->web}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Direccion :</dt>
                        <dd class="col-sm-6">{{$empresa->direccion}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Video :</dt>
                        <dd class="col-sm-6" disabled="">{{$empresa->video}}</dd>
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