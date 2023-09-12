<x-layouts.app>
    <div class="card my-5">
        <div class="card-header">
            <h1>{{'Login'}}</h1>            
        </div>
        <div class="card-body">
            <form action="{{route('login')}}" method="post" enctype="multipart/form-data" autocomplete="false">
                @csrf
               
                <div class="form-group">
                    <label for="email">Direccion de correo</label>
                    <input 
                        type="email" 
                        class="form-control" 
                        id="email"
                        name="email"
                        value="{{old('email')}}"
                        aria-describedby="emailHelp"
                        placeholder="Entre su correo">
                    @error('email')
                        <small class="font-bold text-red">{{ $message }}</small>
                    @enderror                    
                </div>
                <br>
                <div class="form-group">
                    <label for="password">Contrasena: </label>
                    <input type="password" 
                        class="form-control" 
                        id="password"
                        name="password"
                        value="{{old('password')}}"
                        aria-describedby="emailHelp"
                        placeholder="escriba su contraseña">
                    @error('password')
                        <small class="font-bold text-red">{{ $message }}</small>
                    @enderror                    
                </div>   
                <br>
                <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="checkbox" class="btn-check" id="recordar" autocomplete="off">
                    <label class="btn btn-outline-warning" for="recordar">recordar</label>
                </div>
                <button type="submit" class="btn btn-primary">login</button>
                <a href="{{route('register')}}" class="nav ms-auto mt-5">registrarce</a>
            </form>
        </div>
        <div class="card-footer text-muted">
           
        </div>
    </div>
</x-layouts.app>