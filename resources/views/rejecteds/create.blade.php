<div class="modal fade" id="rejectedCreate{{ $start->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Rechazar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('rejecteds.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label>Cliente</label>
                    <select class="custom-select form-control-border" name="start_id">
                        <option value="{{ $start->id }}">{{ $start->name }}</option>
                    </select>
                </div>
                  <div class="form-group">
                      <label>Notas</label>
                      <textarea class="form-control form-control-border" rows="3" 
                      onkeyup="javascript:this.value=this.value.toUpperCase();"
                      placeholder="Notas" name="description" required></textarea>
                  </div>
              </div>
            </div>
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
