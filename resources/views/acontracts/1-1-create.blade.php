<div class="modal fade" id="contractCreate11">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Documento Privado</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('acontracts.unouno') }}" method="POST">
            {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body pt-0">
                        <div class="text-center">
                            <label>Información del Cliente</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Deudor</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Deudor" name="deudor" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="1234567 CB"  name="deudorci" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Estado Civil</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Estado Civil" name="deudorec" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Ocupación</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Ocupación" name="deudoro" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Dirección" name="domicilio" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Zona</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Zona" name="zona" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <label>Información de Credito</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Monto</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Monto" name="monto" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Monto Literal</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Monto Literal" name="montolit" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Plazo</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Plazo" name="plazo" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Cuotas</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Cuotas" name="cuotas" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Frecuencia</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Frecuencia" name="frecuencia" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <label>Documentos</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Documento Prenda 1</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Documento Prenda 1" name="prendauno" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Documento Prenda 2</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Documento Prenda 2" name="prendados">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Documento Prenda 3</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Documento Prenda 3" name="prendatres">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Documento Prenda 4</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Documento Prenda 4" name="prendacuatro">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Documento Prenda 5</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Documento Prenda 5" name="prendacinco">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Documento Prenda 6</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Documento Prenda 6" name="prendaseis">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <label>Importante</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Lugar</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Lugar" name="lugar" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Dia, Fecha</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="Lunes, 4" name="dia" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Mes</label>
                                    <select class="custom-select form-control-border" name="mes" required>
                                        <option value="ENERO">ENERO</option>
                                        <option value="FEBRERO">FEBRERO</option>
                                        <option value="MARZO">MARZO</option>
                                        <option value="ABRIL">ABRIL</option>
                                        <option value="MAYO">MAYO</option>
                                        <option value="JUNIO">JUNIO</option>
                                        <option value="JULIO">JULIO</option>
                                        <option value="AGOSTO">AGOSTO</option>
                                        <option value="SEPTIEMBRE">SEPTIEMBRE</option>
                                        <option value="OCTUBRE">OCTUBRE</option>
                                        <option value="NOVIENBRE">NOVIENBRE</option>
                                        <option value="DICIEMBRE">DICIEMBRE</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Encargado</label>
                                    <select class="custom-select form-control-border" name="encargado" required>
                                        <option value="GUALBERTO EDSSON COCA VARGAS">GUALBERTO EDSSON COCA VARGAS</option>
                                        <option value="VERONICA ANEIVA SALAZAR">VERONICA ANEIVA SALAZAR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
