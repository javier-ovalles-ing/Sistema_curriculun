<x-layouts.app >
    <script>
        
    </script>
   <div class="card m-5">
    <div class="card-header">        
            <a 
                class="btn btn-primary" 
                href="{{route('user.crear')}}" 
                role="button">Agregar usuario
            </a>        
        </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table" id="tabla_id">
             
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del usuario</th>                        
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>                        
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user['id']}}</td>
                            <td>{{$user['name']}}</td>
                            <td>{{$user['email']}}</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <form action="{{route('user.editar',$user)}}" method="get">
                                        @csrf 
                                        <input class="btn btn-primary" type="submit" value="editar" /> 
                                    </form>
                                    <form action="{{route('user.borrar',$user)}}" method="POST">
                                        @csrf @method('DELETE')
                                        <input class="btn btn-danger" type="submit"  value="eliminar">
                                    </form>
                                </div>
                    @endforeach
                </tbody>
             
            </table>
        </div>
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