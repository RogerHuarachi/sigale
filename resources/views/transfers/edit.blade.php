<div class="modal fade" id="transferEdit{{ $transfer->id }}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Editar Formulario</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('transfers.update', $transfer->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="modal-body">
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Documentos originales del (Bien mueble/inmueble)</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Automovil" name="document" value="{{ $transfer->document }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <label>Información de Cliente</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Nombre de Cliente</label>
                                    <input type="text" class="form-control form-control-border"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"
                                    placeholder="Nombre  de Cliente" name="name" value="{{ $transfer->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label>Dirección</label>
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Dirección" name="direction" value="{{ $transfer->direction }}" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="text" class="form-control form-control-border" pattern="[0-9]{7,8}" placeholder="4472196 ó 67881253" name="landline" value="{{ $transfer->landline }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nº de fojas documentos originales</label>
                                    <input type="number" class="form-control form-control-border" placeholder="Documentos originales" name="originals" value="{{ $transfer->originals }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nº de fojas documentos copia</label>
                                    <input type="number" class="form-control form-control-border" placeholder="Documentos copia" name="copies" value="{{ $transfer->copies }}" required>
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
