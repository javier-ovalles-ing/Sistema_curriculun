<x-layouts.app>
    <div class="card my-5">
        <div class="card-header">
            <h1>{{'crear usuario'}}</h1>            
        </div>
        <div class="card-body">
            <form action="{{route('register')}}" method="post" enctype="multipart/form-data" autocomplete="false">
                @csrf
               
                <div class="form-group">
                    <label for="email">Nombre: </label>
                    <input 
                        type="text" 
                        class="form-control" 
                        id="name"
                        name="name"
                        value="{{old('name')}}"
                        aria-describedby="emailHelp"
                        placeholder="Entre su correo">
                    @error('name')
                        <small class="font-bold text-red">{{ $message }}</small>
                    @enderror                    
                </div>
                <br>
                <br>
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
                <div class="form-group">
                    <label for="password_confirmation">Rescribir contrasena: </label>
                    <input type="text" 
                        class="form-control" 
                        id="password_confirmation"
                        name="password_confirmation"
                        value="{{old('password')}}"
                        aria-describedby="emailHelp"
                        placeholder="escriba su contraseña"                           
                        >
                    @error('password_confirmation')
                        <small class="font-bold text-red">{{ $message }}</small>
                    @enderror                    
                </div> 
                <br>  
                
                <a href="{{route('login')}}" class="btn btn-danger">login</a>
                <button type="submit" class="btn btn-primary">register</button>
            </form>
        </div>
        <div class="card-footer text-muted">
           
        </div>
    </div>
</x-layouts.app>