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

<div class="d-flex col-12">
    <div id="sidebar-container" class="bg-primary ">
        <div class="logo">
            <h4 class="text-light fw-bold"><a class="text-white" href="dashboard.php">Área de administración</a></h4>
        </div>
        <div class="menu">
            <a href="" id="btn-empleado" class="d-block text-light p-3 menu-opc"> <span class="iconify mr-2 lead" data-icon="mdi:account-box"></span> Gestion de empleados</a>
            <a href="" id="btn-devoluciones" class="d-block text-light p-3 menu-opc"><span class="iconify mr-2 lead" data-icon="mdi:clipboard-arrow-left"></span> Gestion devoluciones</a>
            <a href="" id="btn-gastos" class="d-block text-light p-3 menu-opc"><span class="iconify mr-2 lead" data-icon="mdi:cash"></span> Gestion gastos</a>
            <a href="" id="btn-productos" class="d-block text-light p-3 menu-opc"><span class="iconify mr-2 lead" data-icon="mdi:basket-plus"></span> Gestion producto</a>
            <a href="" id="btn-ventas" class="d-block text-light p-3 menu-opc"><span class="iconify mr-2 lead" data-icon="mdi:point-of-sale"></span> Historial de ventas</a>
        </div>
    </div>


    <div class="w-100">
    <!--  Inicio de la barra de navegacion de dashboard -->
    <?php include 'includes/navbardash.php'; ?>
    <!-- Fin de la barra de naveacion de dashboard-->

    <div id="content">
      <section class="py-3">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <h1 class="fw-bold mb-0">Bienvenido Iram Alvarez</h1>
              <p class="text-muted">Revisa la última información</p>
            </div>
            <div class="col-lg-3">
              <a href="reportes.php" class="btn btn-primary w-100 align-self-center">Descargar reportes</a>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-mix">
        <div class="container ">
          <div class="card border rounded shadow p-4 mb-5">
            <div class="card-body">
              <div class="row">
                <div class="col-md-3 d-flex col stat my-3">
                  <div class="mx-auto">
                    <h6 class="text-muted">Total de ventas</h6>
                    <h3 class="fw-bold text-center">$10,000</h3>
                  </div>
                </div>
                <div class="col-md-3 d-flex col stat my-3">
                  <div class="mx-auto">
                    <h6 class="text-muted">Productos activos</h6>
                    <h3 class="fw-bold text-center">13</h3>
                  </div>
                </div>
                <div class="col-md-3 d-flex col stat my-3">
                  <div class="mx-auto">
                    <h6 class="text-muted">Cantidad de devoluciones</h6>
                    <h3 class="fw-bold text-center">26</h3>
                  </div>
                </div>
                <div class="col-md-3 d-flex col stat my-3">
                  <div class="mx-auto">
                    <h6 class="text-muted">Cantidad de empleados</h6>
                    <h3 class="fw-bold text-center">10</h3>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>