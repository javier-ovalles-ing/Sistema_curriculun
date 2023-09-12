<x-layouts.app>

    <div class="card">
        <div class="card-header">
            <a href="{{route('empleado.crear')}}" class="btn btn-primary">Agregar empleado</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Foto</th>
                            <th scope="col">CV</th>
                            <th scope="col">Puesto</th>
                            <th scope="col">Fecha de ingreso </th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->id}}</td>
                            <td  scope="row">{{
                                        $empleado->primernombre.' '.
                                        $empleado->segundonombre.' '.
                                        $empleado->primerapellido.' '.$empleado->segundoapellido
                                        }}
                            </td>
                            
                            <td><img width="100" src='{{Storage::url($empleado->foto)}}'></td>
                            <td><a href="{{Storage::url($empleado->cv)}}" >{{Storage::url($empleado->cv)}}</a></td>
                            <td>{{$empleado->puesto->nombredelpuesto}}</td>
                            <td>
                                {{Carbon\Carbon::parse($empleado->fechaingreso)
                                               ->format('Y-m-d')}}
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <form action="{{route('empleado.editar',$empleado)}}" method="get">
                                            @csrf 
                                            <input class="btn btn-primary" type="submit" value="editar" /> 
                                        </form>
                                        <form action="{{route('empleado.borrar',$empleado)}}" method="POST">
                                            @csrf @method('DELETE')
                                            <input class="btn btn-danger" type="submit"  value="eliminar">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>

</x-layouts.app>

