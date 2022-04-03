<div class="modal fade" id="folderEdit{{ $folder->id }}">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar Rol</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('folders.update', $folder->id) }}" method="POST" class="text-center">
          {{ csrf_field() }}
          {{ @method_field('PUT') }}
          <div class="modal-body">
                <div class="card-body">
                    <div class="text-center">
                        <label>Información de Cliente</label>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre Completo</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Nombre Completo" name="name" value="{{ $folder->name }}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>CI</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="CI" name="ci" value="{{ $folder->ci }}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Expedido</label>
                                <select class="custom-select form-control-border" name="exp" required>
                                    <option value="{{ $folder->exp }}">{{ $folder->exp }}</option>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Fecha de Nacimiento</label>
                                <input type="date" class="form-control form-control-border"
                                placeholder="Fecha de Nacimiento" name="birthday" value="{{ $folder->birthday }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Estado Civil</label>
                                <select class="custom-select form-control-border" name="stateCivil" required>
                                    <option value="{{ $folder->stateCivil }}">{{ $folder->stateCivil }}</option>
                                    <option value="SOLTER@">SOLTER@</option>
                                    <option value="CASAD@">CASAD@</option>
                                    <option value="VIUD@">VIUD@</option>
                                    <option value="DIVORCIAD@">DIVORCIAD@</option>
                                    <option value="SEPARAD@">SEPARAD@</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Género</label>
                                <select class="custom-select form-control-border" name="gender" required>
                                    <option value="{{ $folder->gender }}">{{ $folder->gender }}</option>
                                    <option value="M">M</option>
                                    <option value="F">F</option>
                                    <option value="O">O</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Dirección Domicilio</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Dirección Domicilio" name="direction" value="{{ $folder->direction }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ciudad</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Ciudad" name="city" value="{{ $folder->city }}" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Provincia</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Provincia" name="province" value="{{ $folder->province }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Teléfono Fijo</label>
                                <input type="text" class="form-control form-control-border"
                                pattern="[0-9]{7}" placeholder="Siete Digitos" name="landline" value="{{ $folder->landline }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Teléfono Celular</label>
                                <input type="text" class="form-control form-control-border"
                                pattern="[0-9]{8}" placeholder="Ocho Digitos" name="movilPhone" value="{{ $folder->movilPhone }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Profesión</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Profesión" name="profession" value="{{ $folder->profession }}" required>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Tipo de Empresa</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Tipo de Empresa" name="type" value="{{ $folder->type }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tipo de Garantía</label>
                                <select class="custom-select form-control-border" name="warranty" required>
                                    <option value="{{ $folder->warranty->id }}">{{ $folder->warranty->name }}</option>
                                    <option value="CONTRATO CON PRENDA DOCUMENTAL">CONTRATO CON PRENDA DOCUMENTAL</option>
                                    <option value="CON PRENDA DE MERCADERIA">CON PRENDA DE MERCADERIA</option>
                                    <option value="QUIROGRAFARIO">QUIROGRAFARIO</option>
                                    <option value="GARANTE PERSONAL Y PRENDA DE BIENES">GARANTE PERSONAL Y PRENDA DE BIENES</option>
                                    <option value="CON PRENDA EN CUSTODIA">CON PRENDA EN CUSTODIA</option>
                                    <option value="GARANTE PERSONAL Y PRENDARIA DE DOCUMENTACION">GARANTE PERSONAL Y PRENDARIA DE DOCUMENTACION</option>
                                    <option value="GARANTE PERSONAL">GARANTE PERSONAL</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <label>Referencia</label>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Nombre" name="nameRef" value="{{ $folder->nameRef }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>CI</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="CI" name="ciRef"  value="{{ $folder->ciRef }}">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Expedido</label>
                                <select class="custom-select form-control-border" name="expRef">
                                    <option value="{{ $folder->expRef }}">{{ $folder->expRef }}</option>
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
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control form-control-border"
                                pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="landlineRef" value="{{ $folder->landlineRef }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Dirección" name="directionRef" value="{{ $folder->directionRef }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tipo de Referencia</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Tipo de Referencia" name="tipyRef" value="{{ $folder->tipyRef }}">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <label>Co-Deudor</label>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Co-Deudor" name="coSigner" value="{{ $folder->coSigner }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>CI</label>
                                <input type="text" class="form-control form-control-border"
                                placeholder="CI" name="ciCoS" value="{{ $folder->ciCoS }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Expedido</label>
                                <select class="custom-select form-control-border" name="expCoS">
                                    <option value="{{ $folder->expCoS }}">{{ $folder->expCoS }}</option>
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
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control form-control-border"
                                pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="landlineCoS" value="{{ $folder->landlineCoS }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Tipo de Referencia</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Tipo de Referencia" name="directionCoS" value="{{ $folder->directionCoS }}">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <label>Garante</label>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Nombre" name="garanteOne" value="{{ $folder->garanteOne }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control form-control-border"
                                pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="movilPhoneGaOne" value="{{ $folder->movilPhoneGaOne }}">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Dirección" name="directionGaOne" value="{{ $folder->directionGaOne }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Nombre" name="garanteTwo" value="{{ $folder->garanteTwo }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control form-control-border"
                                pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="movilPhoneGaTwo" value="{{ $folder->movilPhoneGaTwo }}">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input type="text" class="form-control form-control-border"
                                onkeyup="javascript:this.value=this.value.toUpperCase();"
                                placeholder="Dirección" name="directionGaTwo" value="{{ $folder->directionGaTwo }}">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <label>Información del Préstamo</label>
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Fecha de Desembolso</label>
                                <input type="date" class="form-control form-control-border"
                                placeholder="Fecha de Desembolso" name="disburnsement" value="{{ $folder->disburnsement }}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Fecha de Ultimo Pago</label>
                                <input type="date" class="form-control form-control-border"
                                placeholder="Fecha de Ultimo Pago" name="pay" value="{{ $folder->pay }}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Monto</label>
                                <input type="number" class="form-control form-control-border"
                                placeholder="Monto" name="money" value="{{ $folder->money }}" required>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Estado</label>
                                <select class="custom-select form-control-border" name="state" required>
                                    <option value="{{ $folder->state }}">{{ $folder->state }}</option>
                                    <option value="VIG">VIG</option>
                                    <option value="VEN">VEN</option>
                                    <option value="EJE">EJE</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Observación</label>
                        <textarea class="form-control" rows="3" placeholder="Observación" name="observation" required>{{ $folder->observation }}</textarea>
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
