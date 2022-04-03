
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">SOLICITUD DE INICIO DE ACCIONES LEGALES </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                @can('file.export')
                    <div>
                        <form action="{{ route('starts.import') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" id="file">
                            <button class="btn btn-dark">
                                <i class="fas fa-upload"></i>
                            </button>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('starts.export') }}" method="get">
                            <button class="btn btn-dark">
                                <i class="fas fa-download"></i>
                            </button>
                        </form>
                    </div>
                @endcan
                @can('starts.store')
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#startCreate"><i class="fas fa-plus-circle"></i></button>
                
                @endcan
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
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Cliente</th>
                                    <th>Asesor</th>
                                    <th>Observado</th>
                                    <th>Aprobado</th>
                                    <th>Rechazado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($starts as $start)
                                    <tr>
                                        <td>{{ $start->name }}</td>
                                        <td>{{ $start->user->name }}</td>
                                        <td>
                                            @if ($start->observed)
                                                <span class="badge bg-warning">OBSERVADO</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($start->admitted)
                                                <span class="badge bg-success">APROBADO</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($start->rejected)
                                                <span class="badge bg-danger">RECHAZADO</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                @can('starts.show')
                                                    <a class="btn btn-info btn-xs" href="{{ route('starts.show', $start->id) }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                @endcan
                                                @can('starts.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#startEdit{{ $start->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('starts.edit')
                                                @endcan
                                                @can('starts.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#startDelete{{ $start->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('starts.delete')
                                                @endcan
                                            </div>
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
