@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Animales Adopcion</div>

                    <div class="card-body">
                            <table class="table table-striped" id="DetalleAdopcion">
                                <thead>
                                    <th>Fecha Adopcion</th>
                                    <th>Nombre del Adoptante</th>
                                    <th>Cedula</th>
                                    <th>Telefono</th>
                                    <th>Codigo del Animal</th>
                                    <th>Nombre del Ejemplar</th>
                                    <th>Especie</th>
                                    
                                </thead>
                        
                                <tbody>        
                                    <tr>
                                        @foreach ($solicitud as $animals)
                                        <td>{{$animals->fecha}}</td>
                                        <td> {{$animals->nombre}}</td>
                                        <td> {{$animals->cedula}}</td>
                                        <td> {{$animals->telefono}}</td>
                                        <td> {{$animals->adopcion_id}}</td>

                                        
                                    </tr>

                                </tbody>
                                </table>
                        </div>
                    </div>
    
                </div>
                
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $('#DetalleAdopcion').DataTable({
                    responsive: true,
                    autoWidth:false,
                    dom: 'Bfrtip',
                    buttons: [
                        'excel', 
                        'pdf', 
                        'print'
                    ],
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
