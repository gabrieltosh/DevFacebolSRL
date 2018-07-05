<div class="modal fade" id="modal-delete-{{$categoria->id}}" style="display: none;">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Borrar Categoria</h4>
        </div>
        <div class="modal-body">
            <p>¿ Esta seguro en borrar la Categoria <strong>{{$categoria->nombre}}</strong> ?</p>
        </div>
        
        {!! Form::open(['route'=>['categorias.destroy',$categoria->id],'method'=>'DELETE']) !!}
        
        <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-danger">Borrar</button>
        </div>
        
        {!! Form::close() !!}
        
        </div>
        <!-- /.modal-content -->
    </div>
<!-- /.modal-dialog -->
</div>