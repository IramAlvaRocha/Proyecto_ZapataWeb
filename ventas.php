<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-10 p-3 border rounded shadow p-4 mb-5">
      <div class="row">
          <div class="col-12 border mb-3 fs-3 text-center border border-primary" class="bg-primary">Historial de ventas</div>
          <div col-1></div>
          <div col-10>
          <table class="table table-bordered table-hover text-center">
<?php
      include("scripts/conexion.php");
      $conexion=conectar();

      $consulta="SELECT * FROM venta;";
      $resultado=mysqli_query($conexion,$consulta);
      
?>
                <thead>
                    <tr>
                    <th scope="col">#Venta</th>
                    <th scope="col">Nombre de empleado</th>
                    <th scope="col">Sucursal</th>
                    <th scope="col">Fecha de venta</th>
                    <th scope="col">Total de venta</th>
                    <th scope="col">Gestion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                          $contador=0;
                          while($lista=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                            $contador++;
                            echo '<tr>';
                            echo '<th scope="row">' . $contador . '</th>';
                            echo '<td>' . $lista['folio_EmpleadoFK'] . '</td>';
                            echo '<td>' . $lista['sucursal_venta'] . '</td>';
                            echo '<td>' . $lista['fecha_Venta'] . '</td>';
                            echo '<td>$ ' . $lista['total_Venta'] . ' MXN</td>';
                            echo '<td>
                              <a href="scripts/eliminarventa.php?idventa=' . $lista["id_Venta"] . '" class="btn btn-outline-danger"><span class="iconify" data-icon="ant-design:delete-filled" data-width="15"></span></a> 
                            </td></tr>';
                          }
                        ?>
                    
                </tbody>
                </table>
          </div>
          <div col-1></div>
          
      </div>

    </div>
    <div class="col-1"></div>
</div>