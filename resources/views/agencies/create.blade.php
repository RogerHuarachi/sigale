<div class="modal fade" id="agencyCreate">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Crear Agencia</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('agencies.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="card-body">
              <input class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" placeholder="Nombre de Agencia" name="name" required>
              <br>
              <input class="form-control" type="number" placeholder="Autonomia" name="autonomy" required>
              <br>
              <div class="form-group">
                <label>Departamento</label>
                <select class="form-control" name="city_id" required>
                  @foreach ($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
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
