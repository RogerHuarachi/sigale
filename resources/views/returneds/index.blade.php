
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">FORMULARIO DE DEVOLUCIÓN DOCUMENTOS EN CUSTODIA A ASESORES</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                @can('file.export')
                    <div>
                        <form action="{{ route('returneds.import') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" id="file">
                            <button class="btn btn-dark">
                                <i class="fas fa-upload"></i>
                            </button>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('returneds.export') }}" method="get">
                            <button class="btn btn-dark">
                                <i class="fas fa-download"></i>
                            </button>
                        </form>
                    </div>
                @endcan
                @can('returneds.store')
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#returnedCreate"><i class="fas fa-plus-circle"></i></button>
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
                                    <th>Nombre</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($returneds as $returned)
                                    <tr>
                                        <td>{{ $returned->name }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('returneds.show')
                                                    <a class="btn btn-info btn-xs" href="{{ route('returneds.show', $returned->id) }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                @endcan
                                                @can('returneds.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#returnedEdit{{ $returned->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('returneds.edit')
                                                @endcan
                                                @can('returneds.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#returnedDelete{{ $returned->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('returneds.delete')
                                                @endcan
                                            </div>
                                            <div class="btn-group">
                                                @can('returneds.show')
                                                    <a class="btn btn-primary btn-xs" href="{{ route('returneds.print', $returned->id) }}">
                                                        <i class="fas fa-print"></i>
                                                    </a>
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

@include('returneds.create')
@endsection
