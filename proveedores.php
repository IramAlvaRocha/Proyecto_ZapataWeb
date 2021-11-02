<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-10 p-3 border rounded shadow p-4 mb-5">
      <form class="row g-3" method="post" action="scripts/gastos_backend.php">
      <div class="border fs-3 text-center border border-primary" class="bg-primary">Agenda proveedores</div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre_proveedor" id="nombre" placeholder="Nombre de proveedor" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6"> 
            <label  class="form-label">Télefono</label>
            <input type="text" class="form-control" name="fecha" placeholder="Telefono del proveedor" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" placeholder="Descripción" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Dirección</label>
            <input type="text" class="form-control" name="descripcion" placeholder="Dirección del proveedor" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Correo</label>
            <input type="email" class="form-control" name="descripcion" placeholder="Correo del proveedor" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6 mt-5 text-center">
            <input type="submit" class="btn btn-success" value="Registrar proveedor">
          </div>
      </form>
    </div>
    <div class="col-1"></div>
</div>



<div class="row">
      <div class="col-1"></div>
      <div class="col-10 text-center">
        <table class="table shadow table-bordered table-hover text-center">
                    <thead>
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Télefono</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Gestión</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                    </table>
        </div>
        <div class="col-1"></div>
    </div>
    

    
