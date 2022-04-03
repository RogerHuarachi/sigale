<div class="modal fade" id="startEdit{{ $start->id }}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Editar Formulario</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('starts.update', $start->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="modal-body">
                    <div class="card-body">
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
                                    placeholder="Nombre  de Cliente" name="name" value="{{ $start->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="CI" name="ci" value="{{ $start->ci }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="exp" required>
                                        <option value="{{ $start->exp }}">{{ $start->exp }}</option>
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
                                    placeholder="Nombre de CoDeudor" name="coSigner" value="{{ $start->coSigner }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="CI" name="ciCoS" value="{{ $start->ciCoS }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="expCoS" >
                                        <option value="{{ $start->expCoS}}">{{ $start->expCoS}}</option>
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
                                    placeholder="Dirección" name="direction" value="{{ $start->direction }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="landline" value="{{ $start->landline }}" required>
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
                                    placeholder="Nombre Garante" name="garanteOne" value="{{ $start->garanteOne }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="CI" name="ciGa" value="{{ $start->ciGa }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="expGa">
                                        <option value="{{ $start->expGa }}">{{ $start->expGa }}</option>
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
                                    placeholder="Nombre de CoGarante" name="garanteTwo" value="{{ $start->garanteTwo }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="CI" name="ciCoGa" value="{{ $start->ciCoGa }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="expCoGa">
                                        <option value="{{ $start->expCoGa }}">{{ $start->expCoGa }}</option>
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
                                    placeholder="Dirección" name="directionGa" value="{{ $start->directionGa }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="landlineGa" value="{{ $start->landlineGa }}">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <label>Información de la Deuda</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Fecha de Firma de Contrato</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de Firma de Contrato" name="firmCont" value="{{ $start->firmCont }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Fecha de Desembolso</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de Desembolso" name="disbursement" value="{{ $start->disbursement }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Fecha de Ultimo Pago</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de Ultimo Pago" name="defaulter" value="{{ $start->defaulter }}" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Saldo a capital</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Monto" name="salCap" value="{{ $start->salCap }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Informe de la situación actual, causas por las que ingreso en mora</label>
                                    <textarea class="form-control" rows="3"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Observación" name="descriptionDeOne" required>{{ $start->descriptionDeOne }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Detalle de gestiones de cobranza realizada</label>
                                    <textarea class="form-control" rows="3"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Observación" name="descriptionDeTwo" required>{{ $start->descriptionDeTwo }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Actividad económica actual del cliente</label>
                                    <textarea class="form-control" rows="3"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Observación" name="descriptionDeThree" required>{{ $start->descriptionDeThree }}</textarea>
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
                                        @if ($start->contrato)
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}1" name="contrato" value="1" checked>
                                        @else
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}1" name="contrato" value="1">
                                        @endif
                                        <label for="customCheckbox{{ $start->id }}1" class="custom-control-label">Contrato</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        @if ($start->bolDes)
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}2" name="bolDes" value="1" checked>
                                        @else
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}2" name="bolDes" value="1">
                                        @endif
                                        <label for="customCheckbox{{ $start->id }}2" class="custom-control-label">Reconocimiento de firma</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        @if ($start->preLiq)
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}3" name="preLiq" value="1" checked>
                                        @else
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}3" name="preLiq" value="1">
                                        @endif
                                        <label for="customCheckbox{{ $start->id }}3" class="custom-control-label">Boleta de Desembolso</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        @if ($start->croquisDom)
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}4" name="croquisDom" value="1" checked>
                                        @else
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}4" name="croquisDom" value="1">
                                        @endif
                                        <label for="customCheckbox{{ $start->id }}4" class="custom-control-label">Plan de Pagos</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        @if ($start->recFirm)
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}5" name="recFirm" value="1" checked>
                                        @else
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}5" name="recFirm" value="1">
                                        @endif
                                        <label for="customCheckbox{{ $start->id }}5" class="custom-control-label">Documento de PreLiquidación</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        @if ($start->planPag)
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}6" name="planPag" value="1" checked>
                                        @else
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}6" name="planPag" value="1">
                                        @endif
                                        <label for="customCheckbox{{ $start->id }}6" class="custom-control-label">Boleta de Pagos</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox">
                                        @if ($start->bolPag)
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}7" name="bolPag" value="1" checked>
                                        @else
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}7" name="bolPag" value="1">
                                        @endif
                                        <label for="customCheckbox{{ $start->id }}7" class="custom-control-label">Croquis de Domicilio Deudor</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        @if ($start->croquisGar)
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}8" name="croquisGar" value="1" checked>
                                        @else
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox{{ $start->id }}8" name="croquisGar" value="1">
                                        @endif
                                        <label for="customCheckbox{{ $start->id }}8" class="custom-control-label">Croquis de domicilio Garante</label>
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
                                    placeholder="Investigación de bienes" name="investBien" required>{{ $start->investBien }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Analisis del caso</label>
                                    <textarea class="form-control" rows="3"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Observación" name="AnalisisCaso">{{ $start->AnalisisCaso }}</textarea>
                                </div>
                            </div>
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
