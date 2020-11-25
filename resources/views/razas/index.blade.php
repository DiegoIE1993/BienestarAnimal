@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')
    <div class="card" >
        <div class="card-body">
            <div class="card-header bg-dark mb-4">
                <a href="{{url('/razas/create')}}" class="btn btn-success float-right">Nuevo Registro</a>
                <h4>Listado de Razas</h4>
            </div>
            <table class="table table-striped" id="Razas">
                <thead>
                    <tr>
                        <th>#</th>
                        <th >Nombre Raza</th>
                        <th >Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($races as $raza)
                        <tr>
                            <td> {{$raza->id}}</td>
                            <td> {{$raza->nombre}}</td>
                            <td>
                                <a href="{{ url('/razas/'.$raza->id.'/edit')}}" class="fas fa-pencil-alt"></a>
                                @include('razas.delete', ['raza' => $raza])  
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        <script>
            $(document).ready(function() {
                $('#Razas').DataTable({
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