@extends('layouts.master')
@section('title')
Licencias
@endsection

@section('content')

<div class="container">
    <script>
        jQuery(document).ready(function($) {
            $('#example').DataTable();
            $(document).on('click', '#example tbody tr buttn', function() {
                $("#modaldata tbody tr").html("");
                $("#modaldata tbody tr").html($(this).closest("tr").html());
                $("#exampleModal").modal("show");
            });
        });
    </script>


<h2>Licencias Ambientales</h2>
<br>

<table id="example" class="table table-striped " style="width:100%" >
    <thead>
        <tr>
                <th>Nombre Proyecto</th>
                <th>Solicitante</th>
                <th>Fecha Inicio Trámite</th>
                <th>Departamento</th>
                <th>Tipo</th>
                <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    @foreach( $licencias as $key => $licencia )
        <tr>
            <td>{{$licencia->nombre}}</td>
            <td>{{$licencia->solicitante}}</td>
            <td>{{$licencia->fecha}}</td>
            <td>{{$licencia->departamento}}</td>
            <td>{{$licencia->tipo}}</td>
            <td>{{$licencia->estado}}</td>
        </tr>
    @endforeach


    </tbody>
<!--     <tfoot>
        <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Start date</th>
            <th>Salary</th>
        </tr>
    </tfoot> -->
</table>
</div>


@endsection
