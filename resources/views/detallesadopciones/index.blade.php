@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')
    <div class="card" >
        <div class="card-body">
            <div class="card-header bg-dark mb-4">
                <h4>Animales en Adopcion</h4>
            </div>
            <table class="table table-striped" id="AdopcionAnimal">
                <thead>
                    <tr>
                        <th>Fecha Adopcion</th>
                        <th>Nombre del Adoptante</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Codigo del Animal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($solicitud as $animals)
                        <tr>
                            <td>{{$animals->fecha}}</td>
                            <td> {{$animals->nombre}}</td>
                            <td> {{$animals->cedula}}</td>
                            <td> {{$animals->telefono}}</td>
                            <td> {{$animals->adopcion_id}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <script>
            $(document).ready(function() {
                $('#AdopcionAnimal').DataTable({
                    responsive: true,
                    autoWidth:false,
                    "language": {
                            "lengthMenu": "Mostrar " + 
                                      `<select class="custom-select custom-select-sm form-control form-control-sm">
                                        <option value = '10'>10</option>
                                        <option value = '25'>25</option>
                                        <option value = '50'>50</option>
                                        <option value = '100'>100</option>
                                        <option value = '-1'>All</option>
                                       </select>` +
                                      " registros por pagina",           
                        "zeroRecords": "Nada encontrado - lo siento",
                        "info": "Página _PAGE_ de _PAGES_",
                        "infoEmpty": "No records available",
                        "infoFiltered": "(filtrado de _MAX_ registros totales)",
                        "search": "Buscar:",
                        "paginate": {
                            "next": "Siguiente",
                            "previous": "Anterior",
                        }
                    }
                });
            } );
        </script>
@endsection