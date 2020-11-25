@extends('adminlte::page')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Animales en Adopcion</div>

                    <div class="card-body">
                            <table class="table table-striped" id="DetalleAdopcion">
                                <thead>
                                    <th>Codigo Animal</th>
                                    <th>Foto</th>
                                    <th>Nombre del Ejemplar</th>
                                    <th>Especie</th>
                                    <th>Nombre Adoptante</th>
                                    <th>Telefono</th>
                                    <th>Correo</th>
                                </thead>
                        
                                <tbody>
                                    
                                    @foreach ($registro ?? '' as $adopcion)
                                    <tr>
                                        <td> {{$adopcion->codigo_animal}}</td>
                                        <td> <img whidth="50" height="50" src="/storage/{{ $adopcion->imagen}}"></td>
                                        <td> {{$adopcion->nombre_ejemplar}}</td>
                                        <td> {{$adopcion->especie->nombre}}</td>
                                         
                                    </tr>
                                    @endforeach
                                    @foreach ($solicitud as $prueba)
                                    <tr>
                                        <td> {{$prueba->nombre}}</td>
                                        
                                    </tr>
                                        
                                    @endforeach
                                    
                                    
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
