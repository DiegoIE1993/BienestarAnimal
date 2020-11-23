@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')
        
    <div class="card" >
        <div class="card-body">
            <div class="card-header bg-dark mb-4">
                {{-- <a href="{{url('/usuarios/create')}}" class="btn btn-primary float-right">Nuevo Usuario</a> --}}
            </div>
            <table class="table table-striped" id="Solicitudes">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Codigo Animal</th>
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Documentos</th>
                        <th>Estado</th>
                        <th>Editar Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($adopcions as $solicitud)
                        <tr>
                            <td> {{$solicitud->id}}</td>
                            <td> {{$solicitud->fecha}}</td>
                            <td> {{$solicitud->adopcion_id}}</td>
                            <td> {{$solicitud->nombre}}</td>
                            <td> {{$solicitud->cedula}}</td>
                            <td> {{$solicitud->telefono}}</td>
                            <td> {{$solicitud->direccion}}</td>
                            <td> {{$solicitud->correo}}</td>
                            <td>
                                <a target="_blank" href="/storage/{{ $solicitud->documentos}}" alt="">Ver</a>
                            </td>
                            <td> {{$solicitud->estado_solicitud}}</td>
                            <td>
                                <a href="{{ url('/solicitudadopciones/'.$solicitud->id.'/edit')}}" class="fa fa-paint-brush"></a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <script>
            $(document).ready(function() {
                $('#Solicitudes').DataTable({
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