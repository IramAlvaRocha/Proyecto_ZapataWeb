
<?php include 'includes/header.php' ?>

<!-- Inicio de la barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-light" class="bg-light">
  <div class="container-fluid">
    <a class="navbar-brand mx-auto nombre-logo"  href="index.php">
    <img src="./img/zapata.png" alt="" width="50" height="50">
    TORTILLERIA ZAPATA
    </a>  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 items">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="productos.php">PRODUCTOS</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="ubicanos.php">UBICANOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="conocenos.php">CONOCENOS</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar producto" aria-label="Search">
        <button class="btn btn-warning" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<div class="row mt-3">
    <div class="col-1"></div>
    <div class="col-10 p-3 border rounded-lg">
      <form class="row g-3" action="scripts/signscript.php" method="post">
      <span class="border fs-3 border-warning text-center">Registrar empleado</span>
          <div class="col-md-6">
            <label  class="form-label">Nombre(s)</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre completo" required>
          </div>
          <div class="col-md-6">
            <label  class="form-label">Apellidos</label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido paterno y materno" required>
          </div>
          <div class="col-md-6">
            <label  class="form-label">Correo Electronico</label>
            <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese su correo electronico" required>
          </div>
          <div class="col-md-6">
            <label  class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ciudad, Estado, País" required>
          </div>
          <div class="col-md-4">
            <label  class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contraseña" id="contraseña" placeholder="Contraseña para el empleado" required>
          </div>
          <div class="col-md-4">
            <label class="form-label">¿El empleado será administrador?</label>
            <select class="form-select" name="admin" id="admin" required>
              <option selected>Selecciona una opción</option>
              <option value="Si">Sí</option>
              <option value="No">No</option>
            </select>
          </div>
          <div class="col-md-4">
            <label class="form-label">Fecha de nacimiento</label>
            <input type="date" class="form-control" name="nacimiento" id="nacimiento" required>
          </div>
          <div class="col-md-6">
          <label class="form-label">Folio de registro de empleado</label>
            <input type="text" class="form-control" name="folio" id="nombre" required>
          </div>
          <div class="col-md-6 mt-5 text-center">
            <button type="submit" class="btn btn-success">Registrar empleado</button>
          </div>
      </form>
      <p class="small fw-bold mt-2 pt-1 mb-0">Ya eres empleado? <a href="login.php"
      class="link-success">Ingresa ahora</a></p>
    </div>
    <div class="col-1"></div>
</div>

<br>
<?php include 'includes/footer.php'?>