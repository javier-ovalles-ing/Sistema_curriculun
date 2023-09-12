<x-layouts.app>
    <div class="card m-5">
        <div class="card-header">
           <a href="{{route('puesto.crear')}}" class="btn btn-primary">Agregar Puesto</a>
        </div>
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table" id="tabla_id">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre del puesto</th>     
                            <th scope="col">Acciones</th>                    
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($puestos as $puesto)
                          <tr>
                            <td> {{$puesto['id']}}</td>
                            <td> {{$puesto['nombredelpuesto']}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <form action="{{route('puesto.editar',$puesto)}}" method="get">
                                        @csrf 
                                        <input class="btn btn-primary" type="submit" value="editar" /> 
                                    </form>
                                    <form action="{{route('puesto.borrar',$puesto)}}" method="POST">
                                        @csrf @method('DELETE')
                                        <input class="btn btn-danger" type="submit"  value="eliminar">
                                    </form>
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
    <script type="module">
        function askDelete(e){

            Swal.fire({
                            title: 'Are you sure?',
                            text: "You won't be able to revert this!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, delete it!'

                        }).then((result) => {
                                if (result.isConfirmed) {
                                    
                                    e.preventDefault();
                                    e.target.parentNode.submit();
                                }
                        })
        }

        document.addEventListener('click',(e)=>{
            if(e.target.value == 'eliminar'){
                e.preventDefault();
                
                askDelete(e);
            }
        });
   </script>
</x-layouts.app>