<?php $_SESSION['usuario']='javier';?>
<x-layouts.app>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
          <h1 class="display-5 fw-bold">Bienvenid@ al sistema</h1>
          <p class="col-md-8 fs-4">Usuario: <?php echo  $_SESSION['usuario'];?> </p>
          <button class="btn btn-primary btn-lg" type="button">Example button</button>
        </div>
      </div>
      <div class="card col-4 mx-5">
        <div class="card-header">
          <h1>Header table</h1>
        </div>
        <div class="card-body">
          <div class="table-responsive-sm">
            <table id="table_id" class="display">
              <thead>
                  <tr>
                      <th>Column 1</th>
                      <th>Column 2</th>
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>Row 1 Data 1</td>
                      <td>Row 1 Data 2</td>
                  </tr>
                  <tr>
                      <td>Row 2 Data 1</td>
                      <td>Row 2 Data 2</td>
                  </tr>
              </tbody>
          </table>
          </div>
        </div>
        <div class="card-footer text-muted">
          Footer
        </div>
      </div>
      
</body>
</x-layouts.app>