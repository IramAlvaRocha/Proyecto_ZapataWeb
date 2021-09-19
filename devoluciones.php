<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-10 p-3 border rounded shadow p-4 mb-5">
      <form class="row g-3">
      <div class="border fs-3 text-center border border-primary" class="bg-primary">Registrar devoluciones</div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Motivo</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Motivo de la devolución" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6"> 
            <label  class="form-label">Fecha</label>
            <input type="date" class="form-control"  placeholder="Fecha de la devolución" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Monto </label>
            <input type="text" class="form-control" name="correo" id="correo" placeholder="Monto de la devolución" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Perdida</label>
            <input type="text" class="form-control" placeholder="Cantidad de dinero en perdidas" required>
          </div>
          <div class="col-md-12 mt-5 text-center">
            <button type="submit" class="btn btn-success">Registrar devolución</button>
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
                        <th scope="col">Fecha</th>
                        <th scope="col">Motivo</th>
                        <th scope="col">Monto</th>
                        <th scope="col">Perdida</th>
                        <th scope="col">Gestión</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">21/08/2021</th>
                        <td>Tortillas cuadradas</td>
                        <td>200</td>
                        <td>35</td>
                        <td>
                        <a href="modificardevoluciones.php" class="btn btn-outline-warning"><span class="iconify" data-icon="clarity:note-edit-solid" data-width="15"></span></a>  
                        <a  class="btn btn-outline-danger"><span class="iconify" data-icon="ant-design:delete-filled" data-width="15"></span></a> 
                        </td>
                        </tr>
                    </tbody>
                    </table>
        </div>
        <div class="col-1"></div>
    </div>
    
