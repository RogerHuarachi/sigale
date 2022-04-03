<div class="modal fade" id="stepCreate">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Crear Etapa</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('steps.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="card-body">
              <input class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" placeholder="Nombre de Etapa" name="name" required>
              <br>
              <div class="form-group">
                <label>Materia</label>
                <select class="custom-select form-control-border" name="subject_id">
                    @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                </select>
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
