<div class="modal fade" id="agencieshow{{ $agency->id }}">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Detalles de Agencia</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <table id="example2" class="table table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>Nombre de Agencia</th>
                        <td>{{ $agency->name }}</td>
                    </tr>
                    <tr>
                        <th>Departamento</th>
                        <td>{{ $agency->city->name }}</td>
                    </tr>
                    <tr>
                        <th>Autonomía</th>
                        <td>{{ $agency->autonomy }}</td>
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
