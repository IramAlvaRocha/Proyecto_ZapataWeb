
<?php
 session_start();
 unset($_SESSION['compras']);
?>
<?php include 'includes/header.php' ?>
<nav class="navbar navbar-expand-lg navbar-light" class="bg-light">
  <div class="container-fluid">
    <a class="navbar-brand mx-auto nombre-logo"  href="index.php">
    <img src="./img/logo-final.png" alt="" width="50" height="50">TORTILLERIA ZAPATA</a>  
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 items">
        <li class="nav-item">
          <a class="nav-link active" href="productos.php">PRODUCTOS</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="ubicanos.php">UBICANOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./conocenos.php">CONOCENOS</a>
        </li>
      </ul>
      <form class="d-flex d-none">
        <input class="form-control me-2" type="search" placeholder="Buscar producto" aria-label="Search">
        <button class="btn btn-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<div class=" p-5 row mt-2 mb-5 mx-auto rounded wh-100" style="background-color: rgba(0, 0, 0, 0.03);" >
    <div class="col-1"></div>
    <div class="col-10">
            <section class="vh-auto mt-2">
                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-auto">
                    <div class="col-md-9 col-lg-6 col-xl-5 mb-4">
                        <img src="./img/login2.svg" class="img-fluid"
                        alt="Imagen de ingreso al sistema">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 align-content-center">
                        <form action="scripts/login_backend.php" method="post">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <span class="iconify" data-icon="mdi:account-circle" data-width="45" data-height="25"></span>
                            <label class="form-label">Folio de empleado</label>
                            <input type="text" name="folio"  class="w-100 form-control form-control-lg"
                            placeholder="Ingresa folio de empleado" required="" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                        <span class="iconify" data-icon="ri:lock-password-fill" data-width="45" data-height="25"></span>
                            <label class="form-label" for="form3Example4">Contraseña</label>
                            <input type="password" name="contrasena" id="form3Example4" class="form-control form-control-lg"
                            placeholder="Contraseña" required="" />
                        </div>
                        <div class=" text-lg-center ms-auto pt-2">
                            <input type="submit" class="btn btn-outline-success btn-sm" value="Ingresar">
                        </div>
                        </form>
                    </div>
                    </div>
                </div>
        </section>
    </div>
    <div class="col-1"></div>
</div>
<?php include 'includes/footer.php' ?>