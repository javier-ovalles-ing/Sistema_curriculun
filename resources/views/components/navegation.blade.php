<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ">
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('home')? 'active':''}}" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{route('empleado.index')}}">Empleados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('puesto.*')? 'active':''}}" 
               href="{{route('puesto.index')}}">Puestos</a>
          </li>
          <li class="nav-item justify-content-end">
            <a class="nav-link {{request()->routeIs('user.*')? 'active':''}}"  aria-disabled="false" href="{{route('user.index')}}">Usuarios</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto mx-5"> 
          @guest
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('login')? 'active':''}}"  aria-disabled="false" href="{{route('login')}}">Login</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link {{request()->routeIs('register')? 'active':''}}"  aria-disabled="false" href="{{route('register')}}">Register</a>
          </li>
          @endguest
          @auth
          <li class="nav-item">
           <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="nav-link">logout</button>
          </form>
          </li>
          @endauth                                                                                 
        </ul>        
      </div>
    </div>
  </nav>