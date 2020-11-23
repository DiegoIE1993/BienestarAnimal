@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')
        
    <div class="card" >
        <div class="card-body" >
            <div class="card-header bg-dark mb-4" align='right'>
                @if(count($info) == 0 )
                    <a href="{{url('/nosotros/create')}}" class="btn btn-success">Agregar Informacion</a>
                @endif
                
            </div>
            <table class="table table-striped" id="Informacion">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Mision</th>
                        <th>Vision</th>
                        <th>Horarios de Atencion</th>
                        <th>Contacto</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($info ?? '' as $nosotros)
                        <tr>
                            <td> {{$nosotros->id}}</td>
                            <td> {{$nosotros->titulo}}</td>
                            <td> {{$nosotros->mision}}</td>
                            <td> {{$nosotros->vision}}</td>
                            <td> {{$nosotros->horario}}</td>
                            <td> {{$nosotros->contacto}}</td>
                            <td>
                                <a href="{{ url('/nosotros/'.$nosotros->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                @include('nosotros.delete', ['nosotros' => $nosotros])  
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <script>
            $(document).ready(function() {
                $('#Informacion').DataTable({
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