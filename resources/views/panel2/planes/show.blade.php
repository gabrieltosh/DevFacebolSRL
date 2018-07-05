<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-detalle-{{$plan->id}}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title">Datos de {{ucwords($plan->nombre)}}</h4>
                    </div>
                    <div class="modal-body">
                    @foreach($planDetalle as $descripciones)
                    <dl class="row">
                        <dt class="col-sm-4">Descripcion del Plan :</dt>
                        <dd class="col-sm-8">{{ucfirst($descripciones->descripcion)}}</dd>      
                    </dl>
                    @endforeach
                    </div>
                <div class="modal-footer">
                     <div class="form-group"> 
                    <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
                     </div>
                </div>
            </div>
        </div>  
        </div>