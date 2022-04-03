
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Etapas</h1>
        </div>
        <div class="col-sm-6">
            @can('steps.store')
            <ol class="breadcrumb float-sm-right">
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#stepCreate"><i class="fas fa-plus-circle"></i></button>
            </ol>
            @endcan
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
                                @foreach ($steps as $step)
                                    <tr>
                                        <td>{{ $step->name }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#stepShow{{ $step->id }}"><i class="fas fa-eye"></i></button>
                                                @include('steps.show')
                                                @can('steps.update')
                                                <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#stepEdit{{ $step->id }}"><i class="fas fa-pen"></i></button>
                                                @include('steps.edit')
                                                @endcan
                                                @can('steps.destroy')
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#stepDelete{{ $step->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('steps.delete')
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

@include('steps.create')
@endsection
