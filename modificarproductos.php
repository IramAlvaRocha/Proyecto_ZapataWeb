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
              <div class="col-6 col-md-6 col-lg-6 mt-5 text-center">
                <a href="" type="button" class="btn btn-success">Modificar datos</a>
              </div>
              <div class="col-6 col-md-6 col-lg-6 mt-5 text-center">
              <a href="dashboard.php" type="button" class="btn btn-danger">Cancelar</a>
              </div>              
          </form>
        </div>
        <div class="col-1"></div>
    </div>
    <?php include 'includes/footer.php'?>