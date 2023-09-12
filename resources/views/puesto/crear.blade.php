<x-layouts.app>
   
    <div class="card">
        <div class="card-header">
            Datos del ID
        </div>
        <div class="card-body">
           <form action="{{route('puesto.guardar')}}" method="post">
            @csrf
            @include('puesto.form-field')
            <br>
            <a href="{{route('puesto.index')}}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary">Crear</button>
           </form>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>
</x-layouts.app>