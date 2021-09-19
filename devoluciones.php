<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-10 p-3 border rounded shadow p-4 mb-5">
      <form class="row g-3" method="post" action="scripts/devoluciones_backend.php">
      <div class="border fs-3 text-center border border-primary" class="bg-primary">Registrar devoluciones</div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Motivo</label>
            <input type="text" class="form-control" name="motivo" id="nombre" placeholder="Motivo de la devolución" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6"> 
            <label  class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fecha" placeholder="Fecha de la devolución" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Monto </label>
            <input type="text" class="form-control" name="monto" id="correo" placeholder="Monto de la devolución" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Perdida</label>
            <input type="text" class="form-control" name="perdida" placeholder="Cantidad de dinero en perdidas" required>
          </div>
          <div class="col-md-12 mt-5 text-center">
            <input type="submit" class="btn btn-success" value="Registrar devolución">
          </div>
      </form>
    </div>
    <div class="col-1"></div>
</div>

<?php
      include("scripts/conexion.php");
      $conexion=conectar();

      $consulta="SELECT * FROM devolucion;";
      $resultado=mysqli_query($conexion,$consulta);
      
?>

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
                        <?php
                          $contador=0;
                          while($lista=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            $contador++;
                            echo '<tr>';
                            echo '<th scope="row">' . $lista['fecha_Devolucion'] . '</th>';
                            echo '<td>' . $lista['motivo_Devolucion'] . '</td>';
                            echo '<td>' . $lista['monto_Devolucion'] . '</td>';
                            echo '<td>' . $lista['perdida_Devolucion'] . '</td>';
                            echo '<td>
                              <a href="modificardevoluciones.php?iddev=' . $lista["id_Devolucion"] . '" class="btn btn-outline-warning"><span class="iconify" data-icon="clarity:note-edit-solid" data-width="15"></span></a>  
                              <a href="scripts/eliminardevolucion.php?iddev=' . $lista["id_Devolucion"] . '" class="btn btn-outline-danger"><span class="iconify" data-icon="ant-design:delete-filled" data-width="15"></span></a> 
                            </td></tr>
                        </tbody>';
                          }
                        ?>
                    </tbody>
                    </table>
        </div>
        <div class="col-1"></div>
    </div>
    
