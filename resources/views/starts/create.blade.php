<div class="modal fade" id="startCreate">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Registrar Formulario</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('starts.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body pt-0">
                        <div class="text-center">
                            <label>Información de Deudor</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre de Cliente</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Nombre  de Cliente" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="CI" name="ci" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="exp" required>
                                        <option value="LP">LP</option>
                                        <option value="OR">OR</option>
                                        <option value="PT">PT</option>
                                        <option value="CB">CB</option>
                                        <option value="CH">CH</option>
                                        <option value="TJ">TJ</option>
                                        <option value="PD">PD</option>
                                        <option value="BE">BE</option>
                                        <option value="SC">SC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre de CoDeudor</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Nombre de CoDeudor" name="coSigner">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="CI" name="ciCoS">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="expCoS">
                                        <option value=""></option>
                                        <option value="LP">LP</option>
                                        <option value="OR">OR</option>
                                        <option value="PT">PT</option>
                                        <option value="CB">CB</option>
                                        <option value="CH">CH</option>
                                        <option value="TJ">TJ</option>
                                        <option value="PD">PD</option>
                                        <option value="BE">BE</option>
                                        <option value="SC">SC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Dirección" name="direction" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="landline" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <label>Información de Garante y CoGarante</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre Garante </label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Nombre Garante" name="garanteOne">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="CI" name="ciGa">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="expGa">
                                        <option value=""></option>
                                        <option value="LP">LP</option>
                                        <option value="OR">OR</option>
                                        <option value="PT">PT</option>
                                        <option value="CB">CB</option>
                                        <option value="CH">CH</option>
                                        <option value="TJ">TJ</option>
                                        <option value="PD">PD</option>
                                        <option value="BE">BE</option>
                                        <option value="SC">SC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nombre de CoGarante</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Nombre de CoGarante" name="garanteTwo">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="CI" name="ciCoGa">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="expCoGa">
                                        <option value=""></option>
                                        <option value="LP">LP</option>
                                        <option value="OR">OR</option>
                                        <option value="PT">PT</option>
                                        <option value="CB">CB</option>
                                        <option value="CH">CH</option>
                                        <option value="TJ">TJ</option>
                                        <option value="PD">PD</option>
                                        <option value="BE">BE</option>
                                        <option value="SC">SC</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Dirección" name="directionGa">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="landlineGa">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <label>Información de la Deuda</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fecha de Firma de Contrato</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de Firma de Contrato" name="firmCont" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fecha de Desembolso</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de Desembolso" name="disbursement" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fecha de Ultimo Pago</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de Ultimo Pago" name="defaulter" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Monto de Desembolso</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto" name="disMoney" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Saldo a capital</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto" name="salCap" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Moneda</label>
                                    <select class="custom-select form-control-border" name="currency">
                                        <option value="Bs">Bs</option>
                                        <option value="$u$">$u$</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>N° de Operación</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="N° de Operación" name="numberOp" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Informe de la situación actual, causas por las que ingreso en mora</label>
                                    <textarea class="form-control" rows="3"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Informe de la situación actual, causas por las que ingreso en mora" name="descriptionDeOne" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Detalle de gestiones de cobranza realizada</label>
                                    <textarea class="form-control" rows="3"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Detalle de gestiones de cobranza realizada" name="descriptionDeTwo" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Actividad económica actual del cliente</label>
                                    <textarea class="form-control" rows="3"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Actividad económica actual del cliente" name="descriptionDeThree" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <label>Documentos</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckboxcreate1" name="contrato" value="1">
                                        <label for="customCheckboxcreate1" class="custom-control-label">Contrato</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckboxcreate2" name="bolDes" value="1">
                                        <label for="customCheckboxcreate2" class="custom-control-label">Reconocimiento de firmas</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckboxcreate9" name="ciDeu" value="1">
                                        <label for="customCheckboxcreate9" class="custom-control-label">Fot. CI Deudores</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckboxcreate3" name="preLiq" value="1">
                                        <label for="customCheckboxcreate3" class="custom-control-label">Boleta de Desembolso</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckboxcreate4" name="croquisDom" value="1">
                                        <label for="customCheckboxcreate4" class="custom-control-label">Plan de Pagos</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckboxcreate10" name="ciGar" value="1">
                                        <label for="customCheckboxcreate10" class="custom-control-label">Fot. CI Garantes</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckboxcreate5" name="recFirm" value="1">
                                        <label for="customCheckboxcreate5" class="custom-control-label">Documento de PreLiquidación</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckboxcreate6" name="planPag" value="1">
                                        <label for="customCheckboxcreate6" class="custom-control-label">Boletas de Pagos</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckboxcreate7" name="bolPag" value="1">
                                        <label for="customCheckboxcreate7" class="custom-control-label">Croquis de Domicilio Deudor</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="customCheckboxcreate8" name="croquisGar" value="1">
                                        <label for="customCheckboxcreate8" class="custom-control-label">Croquis de domicilio Garante</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Investigación de bienes</label>
                                    <textarea class="form-control" rows="3"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Investigación de bienes" name="investBien" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Analisis del caso</label>
                                    <textarea class="form-control" rows="3"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Analisis del caso" name="AnalisisCaso"></textarea>
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
