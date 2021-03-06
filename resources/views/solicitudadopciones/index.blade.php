@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')
    <style>
        .aprobado {background-color : #38b831 !important; }
        .verificacion {background-color : #3b6ace !important; }
        .rechazado {background-color : #ce3b6f !important; }
    </style>
    <div class="card" >
        <div class="card-body">
            <div class="card-header bg-dark mb-4">
                <h4>Solicitudes de Adopcion</h4> 
            </div>
            
            <table class="table table-striped" id="Solicitudes" >
                <thead>
                    <tr align="center">
                        <th>Fecha</th>
                        <th>Codigo Animal</th>
                        <th>Nombres</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        {{-- <th>Correo</th> --}}
                        <th>Documentos</th>
                        <th>Estado</th>
                        <th>Editar Estado</th>
                    </tr>
                </thead>
                <tbody align="center">
                    @foreach ($adopcions as $solicitud)
                        <tr>
                            <td> {{$solicitud->fecha}}</td>
                            <td> {{$solicitud->adopcion_id}}</td>
                            <td> {{$solicitud->nombre}}</td>
                            <td> {{$solicitud->cedula}}</td>
                            <td> {{$solicitud->telefono}}</td>
                            <td> {{$solicitud->direccion}}</td>
                            {{-- <td> {{$solicitud->correo}}</td> --}}
                            <td>
                                <a target="_blank" href="/storage/{{ $solicitud->documentos}}" alt="">Visualizar</a>
                            </td>

                            @if ($solicitud->estado_solicitud == 'Aprobado')
                            <td class="aprobado">{{$solicitud->estado_solicitud}}</td>
                            @elseif($solicitud->estado_solicitud == 'Verificacion')
                            <td class="verificacion">{{$solicitud->estado_solicitud}}</td>
                            @elseif($solicitud->estado_solicitud == 'Rechazado')
                            <td class="rechazado">{{$solicitud->estado_solicitud}}</td>
                            @else
                               <td>{{$solicitud->estado_solicitud}}</td> 
                            @endif
                            <td>
                                <a href="{{ url('/solicitudadopciones/'.$solicitud->id.'/edit')}}" class="fas fa-pencil-alt"></a> 
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