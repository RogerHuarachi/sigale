<div class="modal fade" id="warrantyEdit{{ $warranty->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar Garantía</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('warranties.update', $warranty->id) }}" method="POST" class="text-center">
        {{ csrf_field() }}
        {{ @method_field('PUT') }}
        <div class="modal-body">
          <div class="card-body">
            <input class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" placeholder="Nombre de Rol" name="name" value="{{ $warranty->name }}" required>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>
