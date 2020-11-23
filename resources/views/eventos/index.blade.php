@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')
        
    <div class="card" >
        <div class="card-body">
            <div class="card-header bg-dark mb-4">
                <a href="{{url('/eventos/create')}}" class="btn btn-primary float-right">Agregar Evento</a>
            </div>
            <table class="table table-striped" id="Eventos">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Descripcion</th>
                        <th>Fecha y Hora</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $evento)
                        <tr>
                            <td> {{$evento->id}}</td>
                            <td> {{$evento->titulo}}</td>
                            <td> {{$evento->descripcion}}</td>
                            <td> {{$evento->fecha_hora}}</td>                                            
                            <td>
                                <a href="{{ url('/eventos/'.$evento->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                @include('eventos.delete', ['eventos' => $evento]) 
                                <a href="/eventos/{{$evento->id}}" class="btn btn-primary">ver</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <script>
            $(document).ready(function() {
                $('#Eventos').DataTable({
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