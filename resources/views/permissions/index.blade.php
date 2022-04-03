
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Permisos</h1>
        </div>
        <div class="col-sm-6">
            @can('permissions.store')
                <ol class="breadcrumb float-sm-right">
                    <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#permissionCreate"><i class="fas fa-plus-circle"></i></button>
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
                                    @can('permissions.update', 'permissions.destroy')
                                       <th>Opciones</th> 
                                    @endcan
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                            <div class="btn-group">
                                                @can('permissions.update')
                                                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#permissionEdit{{ $permission->id }}"><i class="fas fa-pen"></i></button>
                                                    @include('permissions.edit')
                                                @endcan
                                                @can('permissions.destroy')
                                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#permissionDelete{{ $permission->id }}"><i class="fas fa-trash-alt"></i></button>
                                                @include('permissions.delete')
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

@include('permissions.create')
@endsection
