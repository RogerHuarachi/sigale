<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $start->name }}</title>
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
                <h3>FORMULARIO RENDICIÓN GASTOS JUDICIALES</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <label>Cliente: </label> {{ $start->name }}
                    </div>
                    <div class="col-6">
                        <label>Fecha: </label> {{ date("Y-m-d") }}
                    </div>
                </div>
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
</body>
</html>
