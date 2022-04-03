
@extends('layouts.app')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">Contratos</h1>
        </div>
        <div class="col-sm-6">
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
                        <table id="example1" class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Nº</th>
                                    <th>Contrato</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.0</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO CON PRENDA DOCUMENTAL CON CODEUDOR</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate10"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.1-0-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>1.1</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO CON PRENDA DOCUMENTAL SIN CODEUDOR</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate11"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.1-1-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.0</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO CON PRENDA DE MERCADERIA CON CODEUDOR</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate20"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.2-0-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>2.1</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO CON PRENDA DE MERCADERIA SIN CODEUDOR</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate21"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.2-1-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.0</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO QUIROGRAFARIO CON CODEUDOR</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate30"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.3-0-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>3.1</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO QUIROGRAFARIO SIN CODEUDOR</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate31"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.3-1-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.0</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO CON PRENDA Y CUSTODIA CON CODEUDOR</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate40"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.4-0-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>4.1</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO CON PRENDA Y CUSTODIA SIN CODEUDOR</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate41"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.4-1-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.0</td>
                                    <td>MODELO- CONTRATO DE PRESTAMO CON GARANTE PERSONAL Y PRENDARIA DE BIENES CON CODEUDOR Y CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate50"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.5-0-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.1</td>
                                    <td>MODELO- CONTRATO DE PRESTAMO CON GARANTE PERSONAL Y PRENDARIA DE BIENES SIN CODEUDOR Y CON CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate51"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.5-1-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>5.2</td>
                                    <td>MODELO- CONTRATO DE PRESTAMO CON GARANTE PERSONAL Y PRENDARIA DE BIENES SIN CODEUDOR Y SIN CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate52"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.5-2-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.0</td>
                                    <td>MODELO- CONTRATO DE PRESTAMO CON GARANTE PERSONAL Y PRENDARIA DE DOCUMENTACION CON CODEUDOR Y CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate60"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.6-0-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.1</td>
                                    <td>MODELO- CONTRATO DE PRESTAMO CON GARANTE PERSONAL Y PRENDARIA DE DOCUMENTACION SIN CODEUDOR Y CON CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate61"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.6-1-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>6.2</td>
                                    <td>MODELO- CONTRATO DE PRESTAMO CON GARANTE PERSONAL Y PRENDARIA DE DOCUMENTACION SIN CODEUDOR Y SIN CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate62"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.6-2-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.0</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO CON GARANTE PERSONAL CON CODEUDOR CON CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate70"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.7-0-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.1</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO CON GARANTE PERSONAL SIN CODEUDOR Y CON CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate71"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.7-1-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>7.2</td>
                                    <td>MODELO-CONTRATO DE PRESTAMO CON GARANTE PERSONAL SIN CODEUDOR Y SIN CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate72"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.7-2-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.0</td>
                                    <td>MODELO-CONTRATO DE REPROGRAMACIÓN DE CRÉDITO CON GARANTE PERSONAL CON CO DEUDOR Y CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate80"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.8-0-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.1</td>
                                    <td>MODELO-CONTRATO DE REPROGRAMACIÓN DE CRÉDITO CON GARANTE PERSONAL SIN CO DEUDOR Y CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate81"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.8-1-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>8.2</td>
                                    <td>MODELO-CONTRATO DE REPROGRAMACIÓN DE CRÉDITO CON GARANTE PERSONAL SIN CO DEUDOR Y SIN CO GARANTE</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate82"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.8-2-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.0</td>
                                    <td>MODELO-CONTRATO DE REPROGRAMACIÓN CON PRENDA DE MERCADERIA CON CO DEUDOR</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate90"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.9-0-create')
                                    </td>
                                </tr>
                                <tr>
                                    <td>9.1</td>
                                    <td>MODELO-CONTRATO DE REPROGRAMACIÓN CON PRENDA DE MERCADERIA SIN CO DEUDOR</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#contractCreate91"><i class="fas fa-plus-circle"></i></button>
                                        @include('bcontracts.9-1-create')
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
