<div class="modal fade" id="folderCreate">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Registrar Formulario</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('folders.store') }}" method="POST">
            {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body pt-0">
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
                                    placeholder="Nombre Completo" name="name" required>
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
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de Nacimiento" name="birthday" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Estado Civil</label>
                                    <select class="custom-select form-control-border" name="stateCivil" required>
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
                                        <option value="MASCULINO">MASCULINO</option>
                                        <option value="FEMENINO">FEMENINO</option>
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
                                    placeholder="Dirección Domicilio" name="direction" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Ciudad" name="city" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Provincia</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Provincia" name="province" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Teléfono Fijo</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{7}" placeholder="Siete Digitos" name="landline" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Teléfono Celular</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{8}" placeholder="Ocho Digitos" name="movilPhone" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Profesión</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Profesión" name="profession" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Tipo de Empresa</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Tipo de Empresa" name="type">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Garantía</label>
                                    <select class="custom-select form-control-border" name="warranty_id" required>
                                        @foreach ($warranties as $warranty)
                                            <option value="{{ $warranty->id }}">{{ $warranty->name }}</option>
                                        @endforeach
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
                                    placeholder="Nombre" name="nameRef">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="CI" name="ciRef" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="expRef">
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
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="landlineRef">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Dirección" name="directionRef">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tipo de Referencia</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Tipo de Referencia" name="tipyRef">
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
                                    placeholder="Co-Deudor" name="coSigner">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border"
                                    placeholder="CI" name="ciCoS">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="expCoS">
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
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="landlineCoS">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Tipo de Referencia</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Tipo de Referencia" name="directionCoS">
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
                                    placeholder="Nombre" name="garanteOne">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="movilPhoneGaOne">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Dirección" name="directionGaOne">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Nombre" name="garanteTwo">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control form-control-border"
                                    pattern="[0-9]{7,8}" placeholder="Fijo ó Movil" name="movilPhoneGaTwo">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Dirección" name="directionGaTwo">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <label>Información del préstamo</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Fecha de Desembolso</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de Desembolso" name="disburnsement" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Fecha de Ultimo Pago</label>
                                    <input type="date" class="form-control form-control-border"
                                    placeholder="Fecha de Ultimo Pago" name="pay" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Saldo a Capital</label>
                                    <input type="number" class="form-control form-control-border"
                                    placeholder="Saldo a Capital" name="money" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Estado</label>
                                    <select class="custom-select form-control-border" name="state" required>
                                        <option value="VIG">VIG</option>
                                        <option value="VEN">VEN</option>
                                        <option value="EJE">EJE</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Observación</label>
                            <textarea class="form-control" rows="3" placeholder="Observación" name="observation" required></textarea>
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
