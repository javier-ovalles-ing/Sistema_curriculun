<x-layouts.app>
    <div class="card">
        <div class="card-header">
           Actualizar puesto
        </div>
        <div class="card-body">
            <form action="{{route('puesto.actualizar',$puesto)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="id">ID</label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="id"
                        name="id"
                        readonly
                        value="{{old('id',$puesto->id)}}"
                        aria-describedby="emailHelp"
                        placeholder="Nombre del puesto"
                    >
                </div>
                <br>
                @include('puesto.form-field')
                <br>
                <a href="{{route('puesto.index')}}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Editar</button>
            </form>
        </div>
        <div class="card-footer text-muted">
            Footer
        </div>
    </div>
    
</x-layouts.app>