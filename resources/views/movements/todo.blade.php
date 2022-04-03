
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Movimientos pendientes</h1>
        </div>
      </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Plazo</th>
                                    <th>Nombre</th>
                                    <th>Etapa</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($movements as $movement)
                                    <tr>
                                        <td>{{ $movement->term }}</td>
                                        <td>{{ $movement->start->name }}</td>
                                        <td>{{ $movement->step->name }}</td>
                                        <td>
                                            @if ($movement->full)
                                                <span class="badge bg-success">Completado</span>
                                            @else
                                                <span class="badge bg-danger">Por Hacer</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('starts.create')
@endsection
