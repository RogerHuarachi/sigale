<div class="modal fade" id="cityShow{{ $city->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Departamento</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table id="example2" class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>Nombre de Departamento</th>
                        <td>{{ $city->name }}</td>
                    </tr>
                    <tr>
                      <th>Nombre de Agencias</th>
                      <td>
                        @foreach ($city->agencies as $agency)
                          <span class="badge bg-primary">{{ $agency->name }}</span>
                        @endforeach
                      </td>
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
