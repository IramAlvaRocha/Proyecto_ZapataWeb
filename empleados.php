
    
<div class="row mt-3" id="form-sign">
        <div class="col-1"></div>
        <div class="col-10 p-3 border rounded shadow p-4 mb-5">
          <form class="row g-3" action="scripts/signscript.php" method="post">
          <span class="border fs-3 border border-primary text-center">Registro de empleado</span>
              <div class="col-12 col-lg-6">
                <label  class="form-label">Nombre(s)</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre completo" required>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <label  class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido paterno y materno" required>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <label  class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo electronico" required>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <label  class="form-label">Dirección</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ciudad, Estado, País" required>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <label  class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Contraseña para el empleado" required>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <label class="form-label">¿El empleado será administrador?</label>
                <select class="form-select" name="admin" id="admin" required>
                  <option selected>Selecciona una opción</option>
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                </select>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <label class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="nacimiento" id="nacimiento" required>
              </div>
              <div class=" col-12 col-md-12 col-lg-6">
              <label class="form-label">Folio de registro de empleado</label>
                <input type="text" class="form-control" name="folio" id="nombre" required>
              </div>
              <div class="col-12 col-md-12 col-lg-12 mt-5 text-center">
                <input type="submit" class="btn btn-success" value="Registrar empleado">
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
                        <th scope="col">#Folio</th>
                        <th scope="col">Nombre(s)</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Gestión</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1859201</th>
                        <td>Jean Alexis</td>
                        <td>Padilla Villanueva</td>
                        <td>No admin</td>
                        <td>
                        <a href="modificarempleados.php" class="btn btn-outline-warning"><span class="iconify" data-icon="clarity:note-edit-solid" data-width="15"></span></a>  
                        <a  class="btn btn-outline-danger"><span class="iconify" data-icon="ant-design:delete-filled" data-width="15"></span></a> 
                        </td>
                        </tr>
                    </tbody>
                    </table>
        </div>
        <div class="col-1"></div>
    </div>
    
