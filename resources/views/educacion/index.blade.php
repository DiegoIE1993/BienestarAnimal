@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')
        
    <div class="card" >
        <div class="card-body">
            <div class="card-header bg-dark mb-4">
                <a href="{{url('/educacion/create')}}" class="btn btn-primary float-right">Agregar Contenido</a>
            </div>
            <table class="table table-striped" id="ContenidoEducativo">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Url Video</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($educations as $educacion)
                        <tr>
                            <td> {{$educacion->id}}</td>
                            <td> {{$educacion->titulo}}</td>
                            <td> {{$educacion->video}}</td>                                         
                            <td>
                                <a href="{{ url('/educacion/'.$educacion->id.'/edit')}}" class="fas fa-pencil-alt"></a>
                                @include('educacion.delete', ['educacion' => $educacion]) 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <script>
            $(document).ready(function() {
                $('#Contenidoeducativo').DataTable({
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