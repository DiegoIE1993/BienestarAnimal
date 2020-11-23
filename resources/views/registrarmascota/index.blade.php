@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')

    <div class="card" >
        <div class="card-body">
            <div class="card-header bg-dark mb-4">
                <a href="{{url('/registrarmascota/create')}}" class="btn btn-primary float-right">Agregar Mascota</a>
            </div>
            <table class="table table-striped" id="Usuarios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Identificacion del Animal</th>
                        <th>Nombres del Ejemplar</th>
                        <th>Especie</th>
                        <th>Raza</th>
                        <th>Sexo</th>
                        <th>Edad</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registro as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->codigo_animal}}</td>
                            <td>{{$item->nombre_ejemplar}}</td>
                            <td>{{$item->especie->nombre}}</td>
                            <td>{{$item->raza->nombre}}</td>
                            <td>{{$item->genero}}</td>
                            <td>{{$item->edad}}</td>
                            <td>
                                <a href="/registrarmascota/{{$item->codigo_animal}}" class="fa fa-search-plus">Ver</a>  
                            </td>
                            <td>
                                <a href="{{ url('/registrarmascota/'.$item->codigo_animal.'/edit')}}" class="btn btn-primary">Editar</a> 
                                    @include('registrarmascota.delete', ['item' => $item])  
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <script>
            $(document).ready(function() {
                $('#Usuarios').DataTable({
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