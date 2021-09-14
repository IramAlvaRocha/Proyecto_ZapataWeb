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
    <link rel="stylesheet" href="./css/styledash.css">
    <title>Tortilleria Zapata</title>
  </head>
  <body>

  <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
          <?php include 'includes/navbardash.php';?>
      </div>
      <div class="col-1"></div>
  </div>

  <div class="row">
      
      <div class="col-1"></div>
      <div class="col-12 col-md-5 mt-3 text-center ">
          <h2 class="p-1"><span class="iconify" data-icon="carbon:user-avatar-filled" data-width="60"></span>Reporte de empleados</h2>
          <p>Visualice o descargué el reporte para los empleados </p>
      </div>
      <div class="col-12 col-md-5 text-center p-2">
      <iframe src="prueba.pdf" embedded="True" width="95%" height="500px" frameborder="0"></iframe>
      </div>
      <div class="col-1"></div>
  </div>
  <div class="row">
      <div class="col-1"></div>
      <div class="col-10">
          <a href="reportes.php" class="btn btn-danger">Volver</a>
          <?php include 'includes/footer.php';?>
      </div>
      <div class="col-1"></div>
  </div>