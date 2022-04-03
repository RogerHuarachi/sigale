
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">FORMULARIO DE DOCUMENTOS EN CUSTODIA</h1>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        @include('option.error')
        @include('option.validation')
        @include('option.confirmation')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row m-0">
                            <div class="col-4">
                                <div class="form-group">
                                <label>Fecha</label>
                                <label class="form-control form-control-border">{{ $transfer->created_at }}</label>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group">
                                <label>Asesor</label>
                                <label class="form-control form-control-border">{{ $transfer->user->name }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="col-6">
                                <div class="form-group">
                                <label>Documentos originales del (Bien mueble/inmueble)</label>
                                <label class="form-control form-control-border">{{ $transfer->document }}</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label>Agencia</label>
                                <label class="form-control form-control-border">{{ $transfer->user->agency->name }}</label>
                                </div>
                            </div>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="text-center">
                            <label>Información de Cliente</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        <div class="row m-0">
                            <div class="col-5">
                                <div class="form-group">
                                <label>Nombre</label>
                                <label class="form-control form-control-border">{{ $transfer->name }}</label>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                <label>Dirección</label>
                                <label class="form-control form-control-border">{{ $transfer->direction }}</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                <label>Teléfono</label>
                                <label class="form-control form-control-border">{{ $transfer->landline }}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row m-0">
                            <div class="col-6">
                                <div class="form-group">
                                <label>No. De fojas documentos originales</label>
                                <label class="form-control form-control-border">{{ $transfer->originals }}</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label>No. De fojas documentos copia simple o legalizada</label>
                                <label class="form-control form-control-border">{{ $transfer->copies }}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
