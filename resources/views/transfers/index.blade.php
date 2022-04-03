
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">FORMULARIO DE DOCUMENTOS EN CUSTODIA</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                @can('file.export')
                    <div>
                        <form action="{{ route('transfers.import') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" id="file">
                            <button class="btn btn-dark">
                                <i class="fas fa-upload"></i>
                            </button>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('transfers.export') }}" method="get">
                            <button class="btn btn-dark">
                                <i class="fas fa-download"></i>
                            </button>
                        </form>
                    </div>
                @endcan
                @can('transfers.store')
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#transferCreate"><i class="fas fa-plus-circle"></i></button>
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
                                    <th>Documento</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transfers as $transfer)
                                    <tr>
                                        <td>{{ $transfer->name }}</td>
                                        <td>{{ $transfer->document }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('transfers.show')
                                                    <a class="btn btn-info btn-xs" href="{{ route('transfers.show', $transfer->id) }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                @endcan
                                                @can('transfers.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#transferEdit{{ $transfer->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('transfers.edit')
                                                @endcan
                                                @can('transfers.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#transferDelete{{ $transfer->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('transfers.delete')
                                                @endcan
                                            </div>
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                @can('accepteds.store')
                                                    @if (!$transfer->accepted)
                                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#acceptedCreate{{ $transfer->id }}"><i class="far fa-check-square"></i></button>
                                                        @include('accepteds.create')
                                                    @endif
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

@include('transfers.create')
@endsection
