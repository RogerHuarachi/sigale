<div class="modal fade" id="admittedCreate{{ $start->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Aprobar</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="modal-body">
            <div class="card-body">
                <label for="">Aprobar el Formulario</label>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <a type="submit" class="btn btn-primary" href="{{ route('admitteds.store', $start->id) }}">Aprobar</a>
          </div>
    </div>
  </div>
</div>
