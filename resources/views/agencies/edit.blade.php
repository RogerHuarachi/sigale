<div class="modal fade" id="agencyEdit{{ $agency->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Editar Agencia</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('agencies.update', $agency->id) }}" method="POST" class="text-center">
        {{ csrf_field() }}
        {{ @method_field('PUT') }}
        <div class="modal-body">
          <div class="card-body">
            <input class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" placeholder="Nombre de Agencia" name="name" value="{{ $agency->name }}" required>
            <br>
            <input class="form-control" type="number" placeholder="Autonomia" name="autonomy" value="{{ $agency->autonomy }}" required>
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
          <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>
