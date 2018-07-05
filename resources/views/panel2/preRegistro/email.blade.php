<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="modal-email-{{$preRegistro->id}}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title">Enviar Email</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-sm-12">
                            <p>¿Esta seguro de enviar el correo electronico a <strong>{{ucwords($preRegistro->nombre." ".$preRegistro->apellido)}}</strong>?</p>
                        </div>    
                    </div>
                <div class="modal-footer">
                        <div class="form-group"> 
                       <button class="btn btn-primary btn-sm" type="button" data-dismiss="modal">Cerrar</button>
                       <a href="{{route('preregistro.show',$preRegistro->id)}}" class="btn btn-success btn-sm"><i class="fa fa-envelope"> Enviar</i></a>                       
                        </div>
                   </div>
            </div>
        </div>  
</div>
