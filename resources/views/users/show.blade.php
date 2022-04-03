<div class="modal fade" id="userShow{{ $user->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table id="example2" class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>Nombre de usuario</th>
                        <td>{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th>Rol</th>
                        <td>
                          @foreach ($user->roles as $role)
                            <span class="badge bg-primary">{{ $role->name }}</span>
                          @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Agencia</th>
                        <td>{{ $user->agency->name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
</div>
