<div class="modal fade" id="returnedCreate">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Registrar Formulario</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('returneds.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="card-body pt-0">
                        <div class="text-center">
                            <label>Información de Cliente</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Asesor</label>
                                    <select class="custom-select form-control-border" name="user_id" required>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nombre de Cliente</label>
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de Cliente" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border" placeholder="CI" name="ci" required>
                                </div>
                            </div>
                            <div class="col-md-2">
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
                        <div class="text-center">
                            <label>Lista de Documentos</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentOne">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentTwo">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentThree">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentFour">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentFive">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentSix">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentSeven">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentEight">
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
