@extends('adminlte::page')
@section('plugins.Datatables',true)
    

<<<<<<< HEAD

@section('content')
    <div class="card">
        <div class="card-body">
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
                                <a href="{{ url('/tipoentrada/'.$entrada->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                @include('tipoentrada.delete', ['entrada' => $entrada])  
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
=======
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lista Tipos de Entrada</div>
                        <div class="card-body">
                            <div class="row justify-content-end pb-2">
                            <a href="{{url('/tipoentrada/create')}}" class="btn btn-success">Nuevo Registro</a>
                            </div>
                            <table class="table">
                                <thead>
                                    <th >Nombre Tipo Entrada</th>
                                    <th >Acciones</th>
                                </thead>

                                <tbody>
                                    @foreach ($entradas as $entrada)
                                            <tr>
                                                <td> {{$entrada->nombre}}</td>         
                                                <td>
                                                    <a href="{{ url('/tipoentrada/'.$entrada->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    @include('tipoentrada.delete', ['entrada' => $entrada])  
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                            {{$entradas->links()}} 
                        </div>
                    </div>
                </div>
            </div> 
>>>>>>> 308dd86b05353a2e66ceb3d0e144378be56fbf6e
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
                        "info": "Mostrando la pagina_PAGE_ de _PAGES_",
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