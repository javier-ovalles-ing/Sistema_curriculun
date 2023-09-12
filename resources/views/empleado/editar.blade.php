<x-layouts.app>
   
    <div class="card">
        <div class="card-header">
            Datos del empleado
        </div>
        <div class="card-body">
           <form action="{{route('empleado.actualizar',$empleado)}}" method="post" enctype="multipart/form-data"
           >
            @csrf
            @method('PATCH')
            @include('empleado.form-field')
            <br>
            <a href="{{route('empleado.index')}}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
           </form>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>
</x-layouts.app>