<div class="modal fade" id="returnedEdit{{ $returned->id }}">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Editar Formulario</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('returneds.update', $returned->id) }}" method="POST">
                {{ csrf_field() }}
                {{ @method_field('PUT') }}
                <div class="modal-body">
                    <div class="card-body">
                        <div class="text-center">
                            <label>Información de Cliente</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Asesor</label>
                                    <select class="custom-select form-control-border" name="user_id" required>
                                        <option value="{{ $returned->user->id }}">{{ $returned->user->name }}</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nombre de Cliente</label>
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre  de Cliente" name="name" value="{{ $returned->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>CI</label>
                                    <input type="text" class="form-control form-control-border" placeholder="CI" name="ci" value="{{ $returned->ci }}" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Expedido</label>
                                    <select class="custom-select form-control-border" name="exp" required>
                                        <option value="{{ $returned->exp }}">{{ $returned->exp }}</option>
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
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentOne" value="{{ $returned->documentOne }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentTwo" value="{{ $returned->documentTwo }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentThree" value="{{ $returned->documentThree }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentFour" value="{{ $returned->documentFour }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentFive" value="{{ $returned->documentFive }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentSix" value="{{ $returned->documentSix }}">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentSeven" value="{{ $returned->documentSeven }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-border" onkeyup="javascript:this.value=this.value.toUpperCase();" placeholder="Nombre de documento" name="documentEight" value="{{ $returned->documentEight }}">
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
