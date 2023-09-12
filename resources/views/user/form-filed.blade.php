
        <div class="form-group">
            <label for="name">usuario</label>
            <input 
                type="text" 
                class="form-control" 
                id="name"
                name="name"
                value="{{old('name', $user->name)}}"
                aria-describedby="emailHelp"
                placeholder="Nombre"
            >
            @error('user')
                <small class="font-bold text-red">{{ $message }}</small>
            @enderror                    
        </div>
        <br>
        <div class="form-group">
            <label for="email">Direccion de correo</label>
            <input 
                type="email" 
                class="form-control" 
                id="email"
                name="email"
                value="{{old('email', $user->email)}}"
                aria-describedby="emailHelp"
                placeholder="Entre su correo">
            @error('email')
                <small class="font-bold text-red">{{ $message }}</small>
            @enderror                    
        </div>
        <br>
        @if(request()->routeIs('user.crear'))
            <div class="form-group">
                <label for="password">Contrasena: </label>
                <input type="password" 
                    class="form-control" 
                    id="password"
                    name="password"
                    value="{{old('password', $user->password)}}"
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
                    value="{{old('password', $user->password)}}"
                    aria-describedby="emailHelp"
                    placeholder="escriba su contraseña"                           
                    >
                @error('password_confirmation')
                    <small class="font-bold text-red">{{ $message }}</small>
                @enderror                    
            </div>   
        @else
            <br>
            <div>
                <a href="{{route('password.request')}}" class="btn btn-danger">resetear contraseña</a>
            </div>
        @endif
        <br>
        <br>