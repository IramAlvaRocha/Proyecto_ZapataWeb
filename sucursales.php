
    
<div class="row mt-3" id="form-sign">
        <div class="col-1"></div>
        <div class="col-10 p-3 border rounded shadow p-4 mb-5">
          <form class="row g-3" action="scripts/empleados_backend.php" method="post">
          <span class="border fs-3 border border-primary text-center">Sucursales</span>
              <div class="col-12 col-lg-6">
                <label  class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre de la sucursal" required>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <label  class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Teléfono de contacto de sucursal" required>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <label  class="form-label">Responsable de sucursal</label>
                <input type="text" class="form-control" name="responsable" id="responsable" placeholder="Nombre de responsable de sucursal" required>
              </div>
              <div class="col-12 col-md-12 col-lg-6">
                <label  class="form-label">Zona</label>
                <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ciudad, Estado, País" required>
              </div>
              <div class="col-12 col-md-12 col-lg-12 mt-5 text-center">
                <input type="submit" class="btn btn-success" value="Registrar sucursal">
              </div>
          </form>
        </div>
        <div class="col-1"></div>
    </div>

    <?php
      include("scripts/conexion.php");
      $conexion=conectar();

      $consulta="SELECT * FROM empleado;";
      $resultado=mysqli_query($conexion,$consulta);
      
    ?>

    <div class="row">
      <div class="col-1"></div>
      <div class="col-10 text-center">
        <table class="table shadow table-bordered table-hover text-center">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Sucursal</th>
                        <th scope="col">Encargado</th>
                        <th scope="col">Zona</th>
                        <th scope="col">Teléfono</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                      $contador=0;
                      while($lista=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                        $contador++;
                        echo '<tr>';
                        echo '<th scope="row">' . $lista['folio_Empleado'] . '</th>';
                        echo '<td>' . $lista['nombre_Empleado'] . '</td>';
                        echo '<td>' . $lista['correo_Empleado'] . '</td>';
                        echo '<td>' . $lista['admin_Empleado'] . '</td>';
                        echo '<td>
                          <a href="modificarempleados.php?user=' . $lista["folio_Empleado"] . '" class="btn btn-outline-warning"><span class="iconify" data-icon="clarity:note-edit-solid" data-width="15"></span></a>  
                          <a href="scripts/eliminarempleados.php?user=' . $lista["folio_Empleado"] . '" class="btn btn-outline-danger"><span class="iconify" data-icon="ant-design:delete-filled" data-width="15"></span></a> 
                        </td></tr>
                    </tbody>';
                      }
                    ?>
                    </tbody>
                    </table>
        </div>
        <div class="col-1"></div>
    </div>
    
