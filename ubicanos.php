<?php
 session_start();
 unset($_SESSION['compras']);
?>
<?php include 'includes/header.php'?>
<?php include 'includes/navbar.php'?>


<div class="row text-center">

<div class="col-12 col-md-12 col-lg-6 shadow align-self-center">
    <div class="row text-center">
         <div class="col-12 col-md-12 col-lg-12 text-center">
             <h2 class="section-heading text-center h1 pt-4">Ubicanos <span class="iconify" data-icon="carbon:map" data-width="50" data-height="50"></span></h2>
          <p class="section-description monospace pb-4 text-center">Ven a conocer nuestras instalaciones, manda un correo electronico o llamanos!</p>
         </div>
    </div>
    <div class="row text-center">
    <div class="col-4 col-sm-4 col-md-4 col-lg-4 text-center">
              <span class="iconify" data-icon="el:map-marker-alt" style="color: #5a5731;" data-width="55" data-height="55"></span>
              <p>Monterrey, Nuevo León</p>
              <p>México</p>
          </div>

          <div class="col-4  col-sm-4 col-md-4 col-sm-3 p-2">
              <span class="iconify" data-icon="el:phone-alt" style="color: #5a5731;" data-width="55" data-height="55"></span>
              <p>81 20 15 48 65</p>
              <p>Lun - Vie, 8:00-22:00</p>
          </div>
          
          <div class="col-4  col-sm-4 col-md-4 col-sm-3 p-2">
              <span class="iconify" data-icon="el:envelope-alt" style="color: #5a5731;" data-width="55" data-height="55"></span>
              <p>ventas</p>
              <p>@zapata.com</p>
          </div>
    </div>
</div>
<div class="col-12 col-md-12 col-lg-6 text-center">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448.6040179912954!2d-100.27819617803434!3d25.907888008648907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86628d43cd68ec0f%3A0x7d8fe41a6deb182c!2sTortilleria%20Zapata!5e0!3m2!1ses-419!2smx!4v1631004392307!5m2!1ses-419!2smx" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

</div>


<?php include 'includes/footer.php'?>
        