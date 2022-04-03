<div class="modal fade" id="userEdit{{ $user->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('users.update', $user->id) }}" method="POST" class="text-center">
          {{ csrf_field() }}
          {{ @method_field('PUT') }}
          <div class="modal-body">
              <div class="card-body">
                    <input class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" type="text" placeholder="Nombre de Usuario" name="name" value="{{ $user->name }}" required>
                    <br>
                    <input class="form-control" type="email" placeholder="Email" name="email" value="{{ $user->email }}" required>
                    <br>
                    <input class="form-control" type="password" placeholder="Contraseña" name="password">
                    <br>
                    <div class="form-group">
                        <label>Rol de Usuario</label>
                        <select class="form-control" name="role" required>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Agencias</label>
                        <select class="form-control" name="agency_id" required>
                            @foreach ($agencies as $agency)
                                <option value="{{ $agency->id }}">{{ $agency->name }}</option>
                            @endforeach
                        </select>
                    </div>
              </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal"  onclick="cerraModalEditUser()">Cerrar</button>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
          </div>
        </form>
      </div>
    </div>
</div>
