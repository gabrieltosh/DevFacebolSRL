<div class="modal fade modal-slide-in-right" aria-hiddeen="true" role="dialog" tabindex="-1" id="myModal{{$instituciones->id}}">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                    <h4 class="modal-title">Datos en detalle de la Institucion</h4>
                    </div>
                    <div class="modal-body">
                    <dl class="row">
                        <dt class="col-sm-4">Quienes Somos :</dt>
                        <textarea cols="50" rows="7" disabled="">{{$instituciones->qSomos}}</textarea>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Primera Frase :</dt>
                        <textarea cols="50" rows="5" disabled="">{{$instituciones->frase1}}</textarea>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Segunda Frase :</dt>
                        <textarea cols="50" rows="5" disabled="">{{$instituciones->frase2}}</textarea>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Tercera Frase :</dt>
                        <textarea cols="50" rows="5" disabled="">{{$instituciones->frase3}}</textarea>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Descripcion de Empresas:</dt>
                        <textarea cols="50" rows="7" disabled="">{{$instituciones->desEmpresa}}</textarea>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Trabaja con Nosotros :</dt>
                        <textarea cols="50" rows="7" disabled="">{{$instituciones->trabaja}}</textarea>
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Celular :</dt>
                        <dd class="col-sm-6">{{$instituciones->celular}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Telefono :</dt>
                        <dd class="col-sm-6">{{$instituciones->telefono}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Facebook :</dt>
                        <dd class="col-sm-6">{{$instituciones->facebook}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Twiter :</dt>
                        <dd class="col-sm-6">{{$instituciones->twitter}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Youtube :</dt>
                        <dd class="col-sm-6">{{$instituciones->youtube}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Instagram :</dt>
                        <dd class="col-sm-6">{{$instituciones->instagram}}</dd>      
                    </dl>
                     <dl class="row">
                        <dt class="col-sm-4">Google :</dt>
                        <dd class="col-sm-6">{{$instituciones->google}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Vision :</dt>
                        <dd class="col-sm-6">{{$instituciones->vision}}</dd>      
                    </dl>
                    <dl class="row">
                        <dt class="col-sm-4">Mision :</dt>
                        <dd class="col-sm-6">{{$instituciones->mision}}</dd>      
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