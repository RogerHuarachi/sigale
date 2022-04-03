
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Solicitude de Inicio de Acciones Legales</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <div class="btn-group pr-2">
                        @can('movements.store')
                            @if (!$start->income)
                                <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#incomeCreate{{ $start->id }}">Ing. Demanda</button>
                            @endif
                            <button type="button" class="btn btn-secondary btn-xs" data-toggle="modal" data-target="#movementCreate{{ $start->id }}">Movimientos</button>
                        @endcan
                    </div>
                    <div class="btn-group pr-2">
                        @can('expenses.store')
                            <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#expenseCreate{{ $start->id }}">Gastos</button>
                        @endcan
                        @can('expenses.show')
                            <a class="btn btn-primary btn-xs" href="{{ route('expenses.print', $start->id) }}">
                                <i class="fas fa-print"></i>
                            </a>
                        @endcan
                    </div>
                    <div  class="btn-group">
                        @can('admitteds.store')
                            @if (!$start->admitted && !$start->rejected)
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#admittedCreate{{ $start->id }}">Aprobar</button>
                            @endif
                        @endcan
                        @can('observeds.store')
                            @if (!$start->admitted && !$start->observed && !$start->rejected)
                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#observedCreate{{ $start->id }}">Observar</button>
                            @endif
                        @endcan
                        @can('rejecteds.store')
                            @if (!$start->admitted && !$start->rejected)
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#rejectedCreate{{ $start->id }}">Rechazar</button>
                            @endif
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
                        <h3 class="card-title">Información del cliente</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <dl class="row">
                            <dt class="col-sm-4">Nombre de Cliente</dt>
                            <dd class="col-sm-8">{{ $start->name }}</dd>
                            <dt class="col-sm-4">CI</dt>
                            <dd class="col-sm-8">{{ $start->ci }} {{ $start->exp }}</dd>
                            <dt class="col-sm-4">Nombre de CoDeudor</dt>
                            <dd class="col-sm-8">{{ $start->coSigner }}</dd>
                            <dt class="col-sm-4">CI</dt>
                            <dd class="col-sm-8">{{ $start->ciCoS }} {{ $start->expCoS }}</dd>
                            <dt class="col-sm-4">Dirección</dt>
                            <dd class="col-sm-8">{{ $start->direction }}</dd>
                            <dt class="col-sm-4">Teléfono</dt>
                            <dd class="col-sm-8">{{ $start->landline }}</dd>
                        </dl>

                        <div class="text-center">
                            <label>Información de Garante y CoGarante</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                        <dl class="row">
                            <dt class="col-sm-4">Nombre Garante</dt>
                            <dd class="col-sm-8">{{ $start->garanteOne }}</dd>
                            <dt class="col-sm-4">CI</dt>
                            <dd class="col-sm-8">{{ $start->ciGa }} {{ $start->expGa }}</dd>
                            <dt class="col-sm-4">Nombre de CoGarante</dt>
                            <dd class="col-sm-8">{{ $start->garanteTwo }}</dd>
                            <dt class="col-sm-4">CI</dt>
                            <dd class="col-sm-8">{{ $start->ciCoGa }} {{ $start->expCoGa }}</dd>
                            <dt class="col-sm-4">Dirección</dt>
                            <dd class="col-sm-8">{{ $start->directionGa }}</dd>
                            <dt class="col-sm-4">Teléfono</dt>
                            <dd class="col-sm-8">{{ $start->landlineGa }}</dd>
                        </dl>

                        <div class="text-center">
                            <label>Información de la Deuda</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                        <dl class="row">
                            <dt class="col-sm-4">Fecha de Firma de Contrato</dt>
                            <dd class="col-sm-8">{{ $start->firmCont }}</dd>
                            <dt class="col-sm-4">Fecha de Desembolso</dt>
                            <dd class="col-sm-8">{{ $start->disbursement }}</dd>
                            <dt class="col-sm-4">Fecha de Ultimo Pago</dt>
                            <dd class="col-sm-8">{{ $start->defaulter }}</dd>


                            <dt class="col-sm-4">Monto de Desembolso</dt>
                            <dd class="col-sm-8">{{ $start->disMoney }}</dd>
                            <dt class="col-sm-4">Saldo Capital</dt>
                            <dd class="col-sm-8">{{ $start->salCap }}</dd>
                            <dt class="col-sm-4">Moneda</dt>
                            <dd class="col-sm-8">{{ $start->currency }}</dd>
                            <dt class="col-sm-4">Numero de Operación</dt>
                            <dd class="col-sm-8">{{ $start->numberOp }}</dd>

                            <dt class="col-sm-4">Informe de la situación actual, causas por las que ingreso en mora</dt>
                            <dd class="col-sm-8">{{ $start->descriptionDeOne }}</dd>

                            <dt class="col-sm-4">Detalle de gestiones de cobranza realizada</dt>
                            <dd class="col-sm-8">{{ $start->descriptionDeTwo }}</dd>

                            <dt class="col-sm-4">Actividad económica actual del cliente</dt>
                            <dd class="col-sm-8">{{ $start->descriptionDeThree }}</dd>
                        </dl>

                        <div class="text-center">
                            <label>Documentos</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                        <dl class="row">
                            <dt class="col-sm-4">Contrato</dt>
                            <dd class="col-sm-8">
                                @if ($start->contrato)
                                    Si
                                @endif
                            </dd>
                            <dt class="col-sm-4">Reconocimiento de firma</dt>
                            <dd class="col-sm-8">
                                @if ($start->bolDes)
                                    Si
                                @endif
                            </dd>
                            <dt class="col-sm-4">Boleta de Desembolso</dt>
                            <dd class="col-sm-8">
                                @if ($start->preLiq)
                                    Si
                                @endif
                            </dd>
                            <dt class="col-sm-4">Plan de Pagos</dt>
                            <dd class="col-sm-8">
                                @if ($start->croquisDom)
                                    Si
                                @endif
                            </dd>
                            <dt class="col-sm-4">Documento de PreLiquidación</dt>
                            <dd class="col-sm-8">
                                @if ($start->recFirm)
                                    Si
                                @endif
                            </dd>
                            <dt class="col-sm-4">Boleta de Pagos</dt>
                            <dd class="col-sm-8">
                                @if ($start->planPag)
                                    Si
                                @endif
                            </dd>
                            <dt class="col-sm-4">Croquis de Domicilio Deudor</dt>
                            <dd class="col-sm-8">
                                @if ($start->bolPag)
                                    Si
                                @endif
                            </dd>
                            <dt class="col-sm-4">Croquis de domicilio Garante</dt>
                            <dd class="col-sm-8">
                                @if ($start->croquisGar)
                                    Si
                                @endif
                            </dd>
                        </dl>

                        <div class="text-center">
                            <label>Otros</label>
                        </div>
                        <hr style="height:2px;border-width:0;color:gray;background-color:gray">

                        <dl class="row">
                            <dt class="col-sm-4">Investigación de bienes</dt>
                            <dd class="col-sm-8">{{ $start->investBien }}</dd>
                            <dt class="col-sm-4">Analisis del caso</dt>
                            <dd class="col-sm-8">{{ $start->AnalisisCaso }}</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        @if ($start->observed || $start->rejected)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Notas del Formulario</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            @if ($start->observed)
                                <h5 class="card-title">Observación</h5>
                                <p class="card-text">{{ $start->observed->description }}</p>
                            @endif
                            @if ($start->rejected)
                                <h5 class="card-title">Rechazo</h5>
                                <p class="card-text">{{ $start->rejected->description }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif


        @can('incomes.index')
            @if ($start->income)
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ingreso de la demanda</h3>

                                <div class="card-tools">
                                    @can('incomes.show')
                                        <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#incomeEdit{{ $start->income->id }}"><i class="fas fa-pen"></i></button>
                                        @include('incomes.edit')
                                    @endcan
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <dl class="row">
                                    <dt class="col-sm-5">NUREJ</dt>
                                    <dd class="col-sm-7">{{ $start->income->nurej }}</dd>
                                    <dt class="col-sm-5">WEB ID</dt>
                                    <dd class="col-sm-7">{{ $start->income->webid }}</dd>
                                    <dt class="col-sm-5">Juzgado</dt>
                                    <dd class="col-sm-7">{{ $start->income->judged }}</dd>
                                    <dt class="col-sm-5">Número</dt>
                                    <dd class="col-sm-7">{{ $start->income->number }}</dd>
                                    <dt class="col-sm-5">Juez</dt>
                                    <dd class="col-sm-7">{{ $start->income->judge }}</dd>
                                    <dt class="col-sm-5">Secretaria</dt>
                                    <dd class="col-sm-7">{{ $start->income->secretary }}</dd>
                                    <dt class="col-sm-5">Teléfono</dt>
                                    <dd class="col-sm-7">{{ $start->income->secPhone }}</dd>
                                    <dt class="col-sm-5">Auxiliar</dt>
                                    <dd class="col-sm-7">{{ $start->income->assistant }}</dd>
                                    <dt class="col-sm-5">Teléfono</dt>
                                    <dd class="col-sm-7">{{ $start->income->assPhone }}</dd>
                                    <dt class="col-sm-5">Oficial de Dil.</dt>
                                    <dd class="col-sm-7">{{ $start->income->diligence }}</dd>
                                    <dt class="col-sm-5">Teléfono</dt>
                                    <dd class="col-sm-7">{{ $start->income->dilPhone }}</dd>
                                    <dt class="col-sm-5">Materia</dt>
                                    <dd class="col-sm-7">{{ $start->income->subject->name }}</dd>
                                    <dt class="col-sm-5">Fecha</dt>
                                    <dd class="col-sm-7">{{ $start->income->date }}</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endcan

        @can('movements.index')
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
                                    @foreach ($start->movements as $movement)
                                        <div class="time-label">
                                            @if ($movement->full)
                                                <span class="bg-success">{{ $movement->term }}</span>
                                            @else
                                                <span class="bg-red">
                                                    {{ $movement->term }}
                                                </span>
                                                <span>
                                                    @can('fulls.store')
                                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#fullCreate{{ $movement->id }}"><i class="far fa-check-square"></i></button>
                                                        @include('fulls.create')
                                                    @endcan
                                                </span>
                                            @endif
                                        </div>
                                        <div>
                                            <i class="fas fa-envelope bg-blue"></i>
                                            <div class="timeline-item">
                                                <span class="time">
                                                </span>
                                                <h3 class="timeline-header">{{ $movement->step->name }}</h3>

                                                <div class="timeline-body">
                                                    {{ $movement->obs }}
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

        @can('expenses.index')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gastos</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>Fecha</th>
                                    <th>N° de Documento</th>
                                    <th>Detalle</th>
                                    <th>Gasto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($start->expenses as $expense)
                                    <tr>
                                        <td>{{ $expense->date }}</td>
                                        <td>{{ $expense->invoice }}</td>
                                        <td>{{ $expense->detail }}</td>
                                        <td>{{ $expense->amount }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3"><strong>Total</strong></td>
                                    <td>
                                        {{ $total }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endcan
    </div>
</section>

@include('admitteds.create')
@include('observeds.create')
@include('rejecteds.create')

@include('incomes.create')
@include('movements.create')
@include('expenses.create')
@endsection
