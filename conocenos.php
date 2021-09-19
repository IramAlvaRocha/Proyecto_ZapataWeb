<?php
 session_start();
 unset($_SESSION['compras']);
?>
<?php include 'includes/header.php'?>
<?php include 'includes/navbar.php'?>

<div class="row p-5 shadow">
    <div class="col-12 col-lg-4 text-center">
        <img src="img/logo-final.png" class="img img-fluid " width="250" alt="">
    </div>
    <div class="col-12 col-lg-8">
        <div class="row align-content-center vh-50 p-5">
            <div class="col-12 col-lg-6 p-3">
            <h1>Mision</h1>
              <h5>Ser para nuestros clientes la mejor opción en calidad y confianza, de modo que seamos parte de su dia a dia estando presentes en la canasta basica de su hogar.</h5>
            </div>
            <div class="col-12 col-lg-6 p-3">
            <h1>Vision</h1>
              <h5>Entregar la mejor tortilla a nuestros clientes, que su sabor y precio sea un simbolo de distinción de la misma manera que este todo de la mano con un fuerte sentido de humanidad.</h5>
            </div>
        </div>
    </div>
</div>


<?php include 'includes/footer.php'?>