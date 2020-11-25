@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Disponibilidad de Adopcion</div>

                    <div class="card-body">
                            <table class="table table-striped" id="DisponiblesAdopcion">
                                <thead>
                                    <th>Codigo Animal</th>
                                    <th>Foto</th>
                                    <th>Nombre del Ejemplar</th>
                                    <th>Especie</th>
                                    <th>Raza</th>
                                    <th>Sexo</th>
                                    <th>Edad</th>
                                </thead>
                        
                                <tbody>
                                    
                                    @foreach ($registro ?? '' as $adopcion)
                                    <tr>
                                        <td> {{$adopcion->codigo_animal}}</td>
                                        <td> <img whidth="50" height="50" src="/storage/{{ $adopcion->imagen}}"></td>
                                        <td> {{$adopcion->nombre_ejemplar}}</td>
                                        <td> {{$adopcion->especie->nombre}}</td>
                                        <td> {{$adopcion->raza->nombre}}</td>
                                        <td> {{$adopcion->genero}}</td>
                                        <td> {{$adopcion->edad}}</td>
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
            $('#DisponiblesAdopcion').DataTable({
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

 