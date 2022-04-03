
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">FORMULARIO DE TRASPASO DE CARPETA Y CLIENTE A ASESORÍA LEGAL </h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                @can('file.export')
                    <div>
                        <form action="{{ route('folders.import') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="file" id="file">
                            <button class="btn btn-dark">
                                <i class="fas fa-upload"></i>
                            </button>
                        </form>
                    </div>
                    <div>
                        <form action="{{ route('folders.export') }}" method="get">
                            <button class="btn btn-dark">
                                <i class="fas fa-download"></i>
                            </button>
                        </form>
                    </div>
                @endcan
                @can('folders.store')
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#folderCreate"><i class="fas fa-plus-circle"></i></button>
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
                                    <th>Nº</th>
                                    <th>Cliente</th>
                                    <th>Asesor</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($folders as $folder)
                                    <tr>
                                        <td>{{ $folder->id }}</td>
                                        <td>{{ $folder->name }}</td>
                                        <td>{{ $folder->user->name }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('folders.show')
                                                    <a class="btn btn-info btn-xs" href="{{ route('folders.show', $folder->id) }}">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                @endcan
                                                @can('folders.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#folderEdit{{ $folder->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('folders.edit')
                                                @endcan
                                                @can('folders.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#folderDelete{{ $folder->id }}"><i class="fas fa-trash-alt"></i></button>
                                                    @include('folders.delete')
                                                @endcan
                                            </div>
                                            <div class="btn-group">
                                                @can('approveds.store')
                                                    @if (!$folder->approved)
                                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#approvedCreate{{ $folder->id }}"><i class="far fa-check-square"></i></button>
                                                        @include('approveds.create')
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

@include('folders.create')
@endsection
