@extends('adminlte::page')
@section('plugins.Datatables',true)

@section('content')
        
    <div class="card" >
        <div class="card-body">
            <div class="card-header bg-dark mb-4">
                <a href="{{url('/tipoentrada/create')}}" class="btn btn-success float-right">Nuevo Registro</a>
                <h4>Listado Tipo de Entradas</h4>
            </div>
            {{-- <div class="row justify-content-end pb-2">
                <a href="{{url('/tipoentrada/create')}}" class="btn btn-success">Nuevo Registro</a>
            </div> --}}
            <table class="table table-striped" id="TipoEntrada">
                <thead>
                    <tr>
                        <th>ID</th>
                            <th>Nombre Tipo Entrada</th>
                            <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entradas as $entrada)
                        <tr>
                            <td> {{$entrada->id}}</td>
                                <td> {{$entrada->nombre}}</td>
                                <td>
                                    <a href="{{ url('/tipoentrada/'.$entrada->id.'/edit')}}" class="fas fa-pencil-alt"></a>
                                    @include('tipoentrada.delete', ['entrada' => $entrada])  
                                </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
        
        <script>
            $(document).ready(function() {
                $('#TipoEntrada').DataTable({
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