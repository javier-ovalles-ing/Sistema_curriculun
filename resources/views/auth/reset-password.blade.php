



<div>
    <form action="{{route('password.update')}}" method="post">
        @csrf

        <h1>Restablecimiento de contraseña</h1>
        <label for="email">correo: </label>
        <input type="email" name="email" id="email" placeholder="Ingrese su correo">
        @error('email')
            <span style="background:red;">{{$message}}</span>            
        @enderror
        <br>
        <label for="password">password: </label>
        <input type="password" name="password" id="password" placeholder="Ingrese su correo">
        @error('password')
            <span style="background:red;">{{$message}}</span>            
        @enderror
        <br>
        <label for="password_confirmation">confirmar password: </label>
        <input type="password_confirmation" name="password_confirmation" id="password_confirmation" placeholder="Ingrese su correo">
        @error('password_confirmation')
            <span style="background:red;">{{$message}}</span>            
        @enderror
        <br>
        <input  type="hidden" name="token" id="token" value="{{$token}}"/>
        <input type="submit" value="enviar">
    </form>
 </div>