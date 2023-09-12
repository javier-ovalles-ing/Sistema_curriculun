

 <div>
    <form action="{{route('password.email')}}" method="post">
        @csrf

        <h1>Recuperacion de contraseña</h1>
        <label for="email">correo: </label>
        <input type="email" name="email" id="email" placeholder="Ingrese su correo">
        @error('email')
            <span style="background:red;">{{$message}}</span>            
        @enderror
        <br>
        <input type="submit" value="enviar">
    </form>
 </div>