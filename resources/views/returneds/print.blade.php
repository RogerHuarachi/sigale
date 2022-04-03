<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $returned->name }}</title>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body>
    <div class="container p-5">

        <div class="card">
            <div class="card-header text-center">
                <div class="row m-0">
                    <div class="col text-center">
                    <img src="{{ asset('dist/img/proeza.png') }}" class="rounded float-end">
                    </div>
                </div>
                <h3>FORMULARIO DE DEVOLUCIÓN DOCUMENTOS EN CUSTODIA A ASESORES</h3>
            </div>
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

                <div class="form-group row">
                    <div class="col-6 text-center">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <label>___________________________________</label><br>
                        <label>Firma y Sello</label><br>
                        <label>Asesor de Crédito</label>
                    </div>
                    <div class="col-6 text-center">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <label>___________________________________</label><br>
                        <label>Firma y Sello</label><br>
                        <label>V°B Asesoría Legal</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
