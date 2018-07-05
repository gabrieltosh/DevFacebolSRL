<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-show-{{$preRegistro->id}}">
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
                        <dt class="col-sm-4">Celular :</dt>
                        <dd class="col-sm-8">{{$preRegistro->celular}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Imagen de Recibo :</dt>
                        @if($preRegistro->imagen!=null)
                        <dd class="col-sm-8"><img src="{{asset('imagen/'.$preRegistro->imagen)}}" alt="" width="50px" height="50px"></dd>      
                        @else
                        <dd class="col-sm-8"><strong class="text-danger">Sin imagen</strong></dd>      
                        @endif
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