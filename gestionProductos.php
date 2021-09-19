<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-10 p-3 border rounded shadow p-4 mb-5">
      <form class="row g-3">
      <div class="border fs-3 text-center border border-primary" class="bg-primary">Registrar producto nuevo</div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Folio</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Folio del nuevo producto" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6"> 
            <label  class="form-label">Nombre</label>
            <input type="text" class="form-control"  placeholder="Nombre del producto" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Precio</label>
            <input type="number" class="form-control" name="correo" id="correo" placeholder="Precio del producto" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Descripción</label>
            <input type="text" class="form-control" placeholder="Descripción del producto" required>
          </div>
          <div class="col-md-12 mt-5 text-center">
            <button type="submit" class="btn btn-success">Registrar producto</button>
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
                        <th scope="col">Folio</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio venta</th>
                        <th scope="col">Gestión</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">T12K93</th>
                        <td>Tortillas triangulares</td>
                        <td>Un kilo de tortillas triangulares</td>
                        <td>45</td>
                        <td>
                        <a href="modificarproductos.php" class="btn btn-outline-warning"><span class="iconify" data-icon="clarity:note-edit-solid" data-width="15"></span></a>  
                        <a  class="btn btn-outline-danger"><span class="iconify" data-icon="ant-design:delete-filled" data-width="15"></span></a> 
                        </td>
                        </tr>
                    </tbody>
                    </table>
        </div>
        <div class="col-1"></div>
    </div>
    
