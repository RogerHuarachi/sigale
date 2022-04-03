<div class="modal fade" id="warrantyCreate">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Crear Garantía</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('warranties.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="card-body">
              <input class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" placeholder="Garantía" name="name" required>
            </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
