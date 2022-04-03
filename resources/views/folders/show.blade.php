
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-9">
            <h1 class="m-0">FORMULARIO DE TRASPASO DE CARPETA Y CLIENTE A ASESORÍA LEGAL</h1>
            </div>
            <div class="col-sm-3">
                <ol class="breadcrumb float-sm-right">
                    <div  class="btn-group pr-2">
                        @can('motions.store')
                            <button type="button" class="btn btn-secondary btn-xs" data-toggle="modal" data-target="#motionCreate{{ $folder->id }}">Movimientos</button>
                        @endcan
                    </div>
                </ol>
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
                    <div class="card-header">
                        <h3 class="card-title">Información del Cliente</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4">Nombre Completo</dt>
                            <dd class="col-sm-8">{{ $folder->name }}</dd>

                            <dt class="col-sm-4">CI</dt>
                            <dd class="col-sm-8">{{ $folder->ci }}</dd>

                            <dt class="col-sm-4">Expedido</dt>
                            <dd class="col-sm-8">{{ $folder->exp }}</dd>

                            <dt class="col-sm-4">Fecha de Nacimiento</dt>
                            <dd class="col-sm-8">{{ $folder->birthday }}</dd>

                            <dt class="col-sm-4">Estado Civil</dt>
                            <dd class="col-sm-8">{{ $folder->stateCivil }}</dd>


                            <dt class="col-sm-4">Género</dt>
                            <dd class="col-sm-8">{{ $folder->gender }}</dd>

                            <dt class="col-sm-4">Dirección Domicilio</dt>
                            <dd class="col-sm-8">{{ $folder->direction }}</dd>

                            <dt class="col-sm-4">Ciudad</dt>
                            <dd class="col-sm-8">{{ $folder->city }}</dd>

                            <dt class="col-sm-4">Provincia</dt>
                            <dd class="col-sm-8">{{ $folder->province }}</dd>

                            <dt class="col-sm-4">Teléfono Fijo</dt>
                            <dd class="col-sm-8">{{ $folder->landline }}</dd>


                            <dt class="col-sm-4">Teléfono Celular</dt>
                            <dd class="col-sm-8">{{ $folder->movilPhone }}</dd>

                            <dt class="col-sm-4">Profesión</dt>
                            <dd class="col-sm-8">{{ $folder->profession }}</dd>

                            <dt class="col-sm-4">Tipo de Empresa</dt>
                            <dd class="col-sm-8">{{ $folder->type }}</dd>

                            <dt class="col-sm-4">Tipo de Garantía</dt>
                            <dd class="col-sm-8">{{ $folder->warranty->name }}</dd>
                        </dl>
                        <div>
                            <div class="text-center">
                                <label>Referencia</label>
                            </div>
                            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        </div>
                        <dl class="row">
                            <dt class="col-sm-4">Nombre</dt>
                            <dd class="col-sm-8">{{ $folder->nameRef }}</dd>

                            <dt class="col-sm-4">CI</dt>
                            <dd class="col-sm-8">{{ $folder->ciRef }}</dd>

                            <dt class="col-sm-4">Expedido</dt>
                            <dd class="col-sm-8">{{ $folder->expRef }}</dd>

                            <dt class="col-sm-4">Teléfono Fijo</dt>
                            <dd class="col-sm-8">{{ $folder->landlineRef }}</dd>

                            <dt class="col-sm-4">Dirección</dt>
                            <dd class="col-sm-8">{{ $folder->directionRef }}</dd>

                            <dt class="col-sm-4">Tipo de Referencia</dt>
                            <dd class="col-sm-8">{{ $folder->tipyRef }}</dd>
                        </dl>
                        <div>
                            <div class="text-center">
                                <label>Co-Deudor</label>
                            </div>
                            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        </div>
                        <dl class="row">
                            <dt class="col-sm-4">Nombre</dt>
                            <dd class="col-sm-8">{{ $folder->coSigner }}</dd>

                            <dt class="col-sm-4">CI</dt>
                            <dd class="col-sm-8">{{ $folder->ciCoS }}</dd>

                            <dt class="col-sm-4">Expedido</dt>
                            <dd class="col-sm-8">{{ $folder->expCoS }}</dd>

                            <dt class="col-sm-4">Teléfono</dt>
                            <dd class="col-sm-8">{{ $folder->landlineCoS }}</dd>

                            <dt class="col-sm-4">Dirección</dt>
                            <dd class="col-sm-8">{{ $folder->directionCoS }}</dd>
                        </dl>
                        <div>
                            <div class="text-center">
                                <label>Garante</label>
                            </div>
                            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        </div>
                        <dl class="row">
                            <dt class="col-sm-4">Nombre</dt>
                            <dd class="col-sm-8">{{ $folder->garanteOne }}</dd>

                            <dt class="col-sm-4">Teléfono</dt>
                            <dd class="col-sm-8">{{ $folder->movilPhoneGaOne }}</dd>

                            <dt class="col-sm-4">Dirección</dt>
                            <dd class="col-sm-8">{{ $folder->directionGaOne }}</dd>

                            <dt class="col-sm-4">Nombre</dt>
                            <dd class="col-sm-8">{{ $folder->garanteTwo }}</dd>

                            <dt class="col-sm-4">Teléfono</dt>
                            <dd class="col-sm-8">{{ $folder->movilPhoneGaTwo }}</dd>

                            <dt class="col-sm-4">Dirección</dt>
                            <dd class="col-sm-8">{{ $folder->directionGaTwo }}</dd>
                        </dl>
                        <div>
                            <div class="text-center">
                                <label>Información de la Deuda</label>
                            </div>
                            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        </div>
                        <dl class="row">
                            <dt class="col-sm-4">Fecha de Desembolso</dt>
                            <dd class="col-sm-8">{{ $folder->disburnsement }}</dd>

                            <dt class="col-sm-4">Fecha de Ultimo Pago</dt>
                            <dd class="col-sm-8">{{ $folder->pay }}</dd>

                            <dt class="col-sm-4">Monto</dt>
                            <dd class="col-sm-8">{{ $folder->money }}</dd>

                            <dt class="col-sm-4">Estado</dt>
                            <dd class="col-sm-8">{{ $folder->state }}</dd>
                        </dl>
                        <div>
                            <div class="text-center">
                                <label>Observaciónes</label>
                            </div>
                            <hr style="height:2px;border-width:0;color:gray;background-color:gray">
                        </div>
                        <div class="form-group row">
                            <p class="p-2">
                                {{ $folder->observation }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @can('motions.index')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Movimientos</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline">
                                    @foreach ($folder->motions as $motion)
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <span class="bg-red">{{ $motion->created_at }}</span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-envelope bg-blue"></i>
                                            <div class="timeline-item">
                                                {{-- <span class="time"><i class="fas fa-clock"></i>{{ $motion->action }}</span> --}}
                                                <h3 class="timeline-header">{{ $motion->action }}</h3>

                                                <div class="timeline-body">
                                                    {{ $motion->result }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div>
                                        <i class="fas fa-clock bg-gray"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endcan
    </div>
</section>
@include('motions.create')
@endsection
