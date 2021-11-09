<!-- 
/<?php
//include("scripts/seguridad_nav.php");
    if($sesion_iniciada==0){
        echo '<script language="javascript">alert("Usted no ha iniciado sesion.");</script>';
        echo '<script lenguage="javascript">window.location.replace("login.php");</script>'; 
    }
?>
<!doctype html>
<html lang="es">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=GFS+Neohellenic:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Tortilleria Zapata</title>
  </head>
  <body>

  <div class="row">
    <div class="col-1 col-md-1 col-lg-1"></div>
    <div class="col-10 col-md-10 col-lg-10">
      <?php //include 'includes/navbardash.php'; ?>
    </div>
    <div class="col-1 col-md-1 col-lg-1"></div>
  </div>
<div class="row text-center mt-2 p-3">
  <h1>Haga click en el reporte que desea visualizar</h1>
</div>
<div class="row mt-1" id="form-sign">
        <div class="col-1"></div>  
        <div class="col-10 p-3 border rounded shadow">
        <div class="row text-center p-3"> 
              <div class="col-12 col-sm-6 col-md-4 p-4">
              <a href="reportes_empleados.php" width="" class="btn btn-warning"><span class="iconify" data-icon="carbon:user-avatar-filled" data-width="60"></span><b>Empleados</b></a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 p-4">
                <a href="reportes_ventas.php" class="btn btn-warning"><span class="iconify" data-icon="ic:twotone-point-of-sale" data-width="60"></span><b>Ventas</b></a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 p-4">
                <a href="reportes_devoluciones.php" class="btn btn-warning"><span class="iconify" data-icon="zmdi:assignment-return" data-width="50"></span><b>Devoluciones</b></a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 p-4">
                <a href="reportes_gastos.php" class="btn btn-warning"><span class="iconify" data-icon="fluent:money-calculator-24-filled" data-width="60"></span><b>Gastos</b></a>
              </div>
              <div class="col-12 col-sm-6 col-md-4 p-4">
                  <a href="reportes_productos.php" class="btn btn-warning"><span class="iconify" data-icon="icon-park-outline:ad-product" data-width="60"></span><b>Productos</b></a>
              </div>
        </div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
              <a href="dashboard.php" class="btn btn-danger">Volver</a>
            </div>
            <div class="col-1"></div>
          </div>
        </div>   
        <div class="col-1"></div>
</div>

    <?php // include 'includes/footer.php'?>

 -->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=GFS+Neohellenic:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;800&display=swap" rel="stylesheet">
    <title>Tortilleria Zapata</title>
  </head>
  <body class="p-3" style="background-color: rgba(0, 0, 0, 0.04);">
      <div class="container d-flex flex-column align-items-center">
        <div class="container border">
          <h1 class="text-center">Reportes </h1>
        </div>
        <br><br>
        <div class="col-12 col-md-12 col-lg-6">
                <label class="form-label">Sucursal</label>
                <select class="form-select" name="zona" id="zona" required>
                  <option selected>Selecciona una zona</option>
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                </select>
              </div>
              <br><br>
              <div class="col-12 col-md-12 col-lg-6">
                <label class="form-label">Sucursal</label>
                <select class="form-select" name="sucursal" id="sucursal" required>
                  <option selected>Selecciona una sucursal</option>
                  <option value="Si">Sí</option>
                  <option value="No">No</option>
                </select>
              </div>
              <br><br>
              <button class="btn btn-success" value="Ver reporte">Ver reporte</button>
      </div>
</body>
</html>