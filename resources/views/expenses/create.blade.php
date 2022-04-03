<div class="modal fade" id="expenseCreate{{ $start->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Registrar Gasto</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('expenses.store') }}" method="POST">
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
                    <label>Fecha</label>
                    <input type="date" class="form-control form-control-border" placeholder="Fecha" name="date" required>
                </div>
                <div class="form-group">
                    <label>Número de documento</label>
                    <input type="number" class="form-control form-control-border" placeholder="(Factura/ Recibo)" name="invoice" required>
                </div>
                <div class="form-group">
                    <label>Monto</label>
                    <input type="number" step="any" class="form-control form-control-border" placeholder="Monto" name="amount" required>
                </div>
                <div class="form-group">
                    <label>Detalle</label>
                    <textarea class="form-control form-control-border" rows="3" placeholder="Detalle" name="detail" required></textarea>
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
