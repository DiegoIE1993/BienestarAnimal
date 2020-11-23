@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')
        
    <div class="card" >
        <div class="card-body">
            <div class="card-header bg-dark mb-4">
                <a href="{{url('/usuarios/create')}}" class="btn btn-primary float-right">Nuevo Usuario</a>
            </div>
            <table class="table table-striped" id="Usuarios">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $usuario)
                        <tr>
                            <td> {{$usuario->id}}</td>
                            <td>{{$usuario->name }}</td>
                            <td>{{$usuario->email }}</td>
                            <td>{{$usuario->roles->implode('name',', ')}}</td>
                            <td>
                                <a href="{{ url('/usuarios/'.$usuario->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                @include('usuarios.delete', ['usuario' => $usuario])             
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