<?php include 'scripts/scriptpv.php'?>
<?php include 'includes/header.php' ?>

<div class=" container-fluid text-center p-3 align-items-center">
        <div class="row mt-2">
            <div class="col-12 col-lg-4">
                <h2><span class="iconify" data-icon="mdi:point-of-sale" data-width="65"></span>Área de ventas</h2>
            </div>
            <div class="col-12 col-lg-8 d-flex align-items-center justify-content-around">
                   <?php
                $nombreEmp = $_SESSION['nombreemp'];  
                echo "<h5>Empleado: $nombreEmp</h5>" ;
                echo " <h5> Fecha: ". date('n / j / Y')." </h5>";
                ?>
                <a class="btn btn-danger" href="index.php">Salir</a>
                <?php include ("scripts/newmail.php"); ?>
           </div>
        </div>
    </div>


    <div class=" container mt-5 mb-2 col-12">
    
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8 text-center">
            <form class="d-flex flex-row justify-content-space-evenly">
              <!-- <label class="align-content-center" for=""><b>Código de producto</b></label> -->
                <input class="form-control me-2" type="text" id="busqueda" name="busqueda" placeholder="Ingrese el código del producto a buscar" aria-label="Search">
            </form>
                 <div class=" text-center text-success d-flex flex-column w-80 border border-2 rounded" name="ResultDiv" id="ResultDiv" >
            </div>
        </div>
        <div class="col-lg-4 text-center justify-content-center align-content-evenly">
            <p class=""><?php include 'scripts/preciototal.php';?></p> 
            
        </div>
    </div>
    <br><br><br>
        <div class="row">
            <table class="table table-bordered shadow">
                <thead>
                    <tr>
                        <th scope="col">Código del Producto</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio $</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Monto $</th>
                        <th scope="col">Quitar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'scripts/listaventa.php';?>
                </tbody>
            </table>

        </div>

        <div class="row shadow d-flex flex-row align-items-center p-3">
                <div class="col-12 col-lg-6 d-flex flex-row justify-conten-evenly">
                <form action="scripts/terminarventa.php" methood="POST">
                    <p class="input-group-text" id="inputGroup-sizing-default">Pago:</span> 
                    &nbsp;
                    <input type="text" name="total" id="total" class="form-control" placeholder="Ingrese el pago  " required>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div class="col-12 col-lg-3">
                    
                    <input type="submit" class="btn btn-success" value="Terminar venta">

                </form>
                </div>
            </form>
            <div class="col-12 col-lg-3">
            <a href="scripts/cancelarventa.php"><button name="" class="btn btn-danger">
                Cancelar Venta
            </button></a>
            </div>
        </div>
            </button></a>
            </div>
        </div>
            </button></a>
            </div>
        </div>
        
<?php include 'includes/footer.php' ?>