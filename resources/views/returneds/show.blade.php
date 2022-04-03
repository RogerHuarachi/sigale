
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-8">
            <h1 class="m-0">FORMULARIO DE DEVOLUCIÓN DOCUMENTOS EN CUSTODIA A ASESORES</h1>
            </div>
            <div class="col-sm-4">
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
                        <dl class="row">
                            <dt class="col-sm-4">Nombre de Asesor</dt>
                            <dd class="col-sm-8">{{ $returned->user->name }}</dd>

                            <dt class="col-sm-4">Nombre de Jefe de Agencia</dt>
                            @foreach ($users as $user)
                                <dd class="col-sm-8">{{ $user->name }}</dd>
                            @endforeach

                            <dt class="col-sm-4">Fecha de Entrega</dt>
                            <dd class="col-sm-8">{{ $returned->created_at }}</dd>

                            <dt class="col-sm-4">Agencia</dt>
                            <dd class="col-sm-8">{{ $returned->user->agency->name }}</dd>

                            <dt class="col-sm-4">Asunto</dt>
                            <dd class="col-sm-8">ENTREGA DE DOCUMENTOS EN CUSTODIA DEL (LA) SEÑOR (A): <strong>{{ $returned->name }}</strong></dd>
                        </dl>

                        <div class="form-group row">
                            <p class="p-2">
                                Mediante el presente formulario entrego la documentación que se
                                encontraba en custodia de Asesoría Legal, para la devolución de
                                los documentos al señor (a) <strong>{{ $returned->name }}</strong>, con número de
                                <strong>C.I. {{ $returned->ci }}</strong>,
                                expedido en <strong>{{ $returned->exp }}</strong> . Los siguientes documentos:
                            </p>
                        </div>

                        <div class="form-group row">
                            <ul>
                                @if ($returned->documentOne)
                                    <li>{{ $returned->documentOne }}</li>
                                @endif
                                @if ($returned->documentTwo)
                                    <li>{{ $returned->documentTwo }}</li>
                                @endif
                                @if ($returned->documentThree)
                                    <li>{{ $returned->documentThree }}</li>
                                @endif
                                @if ($returned->documentFour)
                                    <li>{{ $returned->documentFour }}</li>
                                @endif
                                @if ($returned->documentFive)
                                    <li>{{ $returned->documentFive }}</li>
                                @endif
                                @if ($returned->documentSix)
                                    <li>{{ $returned->documentSix }}</li>
                                @endif
                                @if ($returned->documentSeven)
                                    <li>{{ $returned->documentSeven }}</li>
                                @endif
                                @if ($returned->documentEight)
                                    <li>{{ $returned->documentEight }}</li>
                                @endif
                            </ul>
                        </div>

                        <div class="form-group row">
                            <p class="p-2">
                                Documentos que serán entregados en su totalidad al dueño o dueña de los mismos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
