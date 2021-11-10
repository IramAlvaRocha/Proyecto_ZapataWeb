<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-10 p-3 border rounded shadow p-4 mb-5">
      <form class="row g-3" method="post" action="scripts/gastos_backend.php">
      <div class="border fs-3 text-center border border-primary" class="bg-primary">Registrar gastos</div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Monto</label>
            <input type="text" class="form-control" name="monto" id="nombre" placeholder="Motivo del gasto" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6"> 
            <label  class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fecha" placeholder="Fecha del gasto" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
            <label  class="form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" placeholder="Descripción del gasto" required>
          </div>
          <div class="col-12 col-md-12 col-lg-6">
                <label class="form-label">Sucursal</label>
                <select class="form-select" name="sucursal" id="sucursal" required>
                  <option selected>Seleccione una sucursal:</option>
                  <?php
                    include("scripts/conexion.php");
                    $conexion=conectar();
                    $consulta1="SELECT * FROM sucursal;";
                    $resultado1=mysqli_query($conexion,$consulta1);
                    while($lista1=mysqli_fetch_array($resultado1, MYSQLI_ASSOC)){
                        echo '<option value="' . $lista1['nombre_sucursal'] . '">' . $lista1['nombre_sucursal'] . '</option>';
                    }
                  ?>
                </select>
              </div>
          <div class="col-12 col-md-12 col-lg-6 mt-5 text-center">
            <input type="submit" class="btn btn-success" value="Registrar devolución">
          </div>
      </form>
    </div>
    <div class="col-1"></div>
</div>

<?php

      $consulta="SELECT * FROM gasto;";
      $resultado=mysqli_query($conexion,$consulta);
      
?>

<div class="row">
      <div class="col-1"></div>
      <div class="col-10 text-center">
        <table class="table shadow table-bordered table-hover text-center">
                    <thead>
                        <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Monto</th>
                        <th scope="col">Sucursal</th>
                        <th scope="col">Gestión</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                          $contador=0;
                          while($lista=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            $contador++;
                            echo '<tr>';
                            echo '<th scope="row">' . $lista['fecha_gasto'] . '</th>';
                            echo '<td>' . $lista['descripcion_gasto'] . '</td>';
                            echo '<td>' . $lista['monto_gasto'] . '</td>';
                            echo '<td>' . $lista['sucursal_gasto'] . '</td>';
                            echo '<td>
                              <a href="modificargastos.php?idgasto=' . $lista["idGasto"] . '" class="btn btn-outline-warning"><span class="iconify" data-icon="clarity:note-edit-solid" data-width="15"></span></a>  
                              <a href="scripts/eliminargasto.php?idgasto=' . $lista["idGasto"] . '" class="btn btn-outline-danger"><span class="iconify" data-icon="ant-design:delete-filled" data-width="15"></span></a> 
                            </td></tr>
                        </tbody>';
                          }
                        ?>
                    </tbody>
                    </table>
        </div>
        <div class="col-1"></div>
    </div>
    

    
