<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
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
      <?php include 'includes/navbardash.php'; ?>
    </div>
    <div class="col-1 col-md-1 col-lg-1"></div>
  </div>
    
<div class="row mt-3" id="form-sign">
        <div class="col-1"></div>
        <div class="col-10 p-3 border rounded shadow  mb-5">
          <div class="row text-center p-5">
          <div class="col-12 col-md-3 col-lg-4 shadow mb-3 ">
          <span class="iconify" data-icon="carbon:user-avatar-filled" data-width="60"></span>
              <p>Empleados</p>
            </div>
            <div class="col-12 col-md-3 col-lg-4  shadow mb-3">
            <span class="iconify" data-icon="ic:twotone-point-of-sale" data-width="60"></span>
              <p>Ventas</p>
            </div>
            <div class="col-12 col-md-3 col-lg-4   shadow mb-3 ">
            <span class="iconify" data-icon="zmdi:assignment-return" data-width="60"></span>
              <p>Devoluciones</p>
            </div>
            <div class="col-12 col-md-3 col-lg-4  shadow mb-3 ">
            <span class="iconify" data-icon="fluent:money-calculator-24-filled" data-width="60"></span>
              <p>Gastos</p>
            </div>
            <div class="col-12 col-md-3 col-lg-4  shadow mb-3 ">
            <span class="iconify" data-icon="icon-park-outline:ad-product" data-width="60"></span>
              <p>Productos</p>
            </div>
          </div>
        </div>
        <div class="col-1"></div>
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
            <a href="dashboard.php" class="btn btn-danger">Volver</a>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <?php include 'includes/footer.php'?>