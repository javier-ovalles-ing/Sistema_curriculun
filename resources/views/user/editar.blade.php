<x-layouts.app>
    <div class="card my-5">
        <div class="card-header">
            <h1>{{'datos del empleado'}}</h1>            
        </div>
        <div class="card-body">
            <form action="{{route('user.actualizar', $user)}}" method="post" enctype="multipart/form-data" autocomplete="false">
                @csrf @method('PATCH')
               
                @include('user.form-filed')

                <a href="{{route('user.index')}}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="card-footer text-muted">
          
        </div>
    </div>
</x-layouts.app>