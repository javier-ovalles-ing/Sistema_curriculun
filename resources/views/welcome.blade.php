
<x-layouts.app>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Bienvenid@ al sistema</h1>
          <p class="col-md-8 fs-4">Usuario: {{Auth::user()->name}} </p>
          <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
      </div>    
      
</body>
</x-layouts.app>