<?php include 'scripts/scriptpv.php'?>
<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>

<div class=" container text-center">
        <div class="row mt-2">
            <div class="col-12">
                <h1><span class="iconify" data-icon="mdi:point-of-sale" data-width="75"></span>PUNTO DE VENTA</h1>
            </div>
        </div>
    </div>

    <div class="container border">
        <div class="row p-2 shadow rounded">
            <div class="col-6 text-center">
                <?php
                $nombreEmp = $_SESSION['nombreemp'];  
                echo "<h4><span class='iconify' data-icon='clarity:employee-solid' data-width='35'></span>Empleado: $nombreEmp</h4>" ?>
            </div>
            <div class="col-6 text-center">
            <?php
             $folioemp = $_SESSION['empleado'];
             echo "<h4><span class='iconify' data-icon='fa-solid:id-badge' data-width='25'></span>Folio: $folioemp </h4>" ?>
            </div>
        </div>
    </div>


    <div class=" container mt-5 mb-2 col-12">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 text-center">
            <form class="d-flex ">
              <label class="p-2 align-content-center" for=""><b>Código de producto</b></label>
                <input class="form-control me-2" type="text" id="busqueda" name="busqueda" placeholder="Buscar producto" aria-label="Search">
                <button class="btn btn-success" type="submit">Buscar</button>
            </form>
                 <div class=" text-center text-success" name="ResultDiv" id="ResultDiv" >
            </div>
        </div>
        <div class="col-lg-6 text-center justify-content-center align-content-evenly">
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

        <div class="row shadow p-3">
                <div class="col-12 col-lg-6 d-flex">
                    <span class="input-group-text" id="inputGroup-sizing-default">Pago del Cliente $:</span>
                    <input type="text" name="total" id="total" class="form-control" placeholder="Ingrese el pago del cliente" required>
                </div>
                <div class="col-12 col-lg-6 text-center">
                    <button  form="formventa" type="submit" class="btn btn-success">
                        Terminar Venta
                    </button>
                </div>
            </form>
            <div class="col-12 col-lg-6 text-center mt-3">
            <a href="scripts/cancelarventa.php"><button name="" class="btn btn-danger">
                Cancelar Venta
            </button></a>
            </div>
        </div>
        
<?php include 'includes/footer.php' ?>