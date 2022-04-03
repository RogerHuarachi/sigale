<div class="modal fade" id="incomeCreate{{ $start->id }}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Ingreso de Demanda</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('incomes.store') }}" method="POST">
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
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label>NUREJ</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="NUREJ" name="nurej" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>WEB ID</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="WEB ID" name="webid" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Juzgado</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Juez" name="judged" required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Número</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{1,2}" placeholder="Número" name="number" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label>Juez</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Juez" name="judge">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Secretaria</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Secretaria" name="secretary">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="secPhone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Auxiliar</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Auxiliar" name="assistant">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="assPhone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="form-group">
                                    <label>Oficial de Dil.</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Oficial de Dil." name="diligence">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="dilPhone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Materia</label>
                            <select class="custom-select form-control-border" name="subject_id" required>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Fecha</label>
                            <input type="date" class="form-control form-control-border"
                            placeholder="Fecha" name="date" required>
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
