<?php
        include("scripts/conexion.php");
        session_start();

        /*  LIBERABLE HASTA TENER TODO
        if(!isset($_SESSION_['folio_emp']))
        {
            echo '<script language="javascript">alert("PRIMERO DEBE INICIAR SESIÓN");</script>';
            echo '<script lenguage="javascript">window.location.replace("login.php");</script>';
        }
        */
        $conexion = conectar();

        if(isset($_GET['prod']))
        {
           // echo "Si existe lol";
           $folio = $_GET['prod']; // ID del producto que se buscó
           
           $consulta = "SELECT folio_Producto, nombre_Producto, precio_Producto FROM producto WHERE folio_Producto='$folio'"; //Consultamos los datos del producto con ese ID
           $consultada = mysqli_query($conexion, $consulta);
           $filas = mysqli_fetch_array($consultada); //Mandamos los datos a un array llamado filas
           //Verificamos que haya una variable de sesión llamada compras
           if(!isset($_SESSION['compras']))
           {
            $_SESSION['compras']= array();  //Si no hay, creamos un array en el que se guardaran los productos
           }
           

           array_push($_SESSION['compras'], $filas); //Agregaremos al final del array los datos del nuevo producto
           $preciototal =0;
           foreach($_SESSION['compras'] as $value) // Por cada arreglo dentro de ese valor, lo sacamos
           {
               for($i=0;$i<=2;$i++)
               echo $value[$i] . " ";
               $preciototal = $preciototal + $value[2];
               echo "<br>";
               
           }
          // echo $_SESSION['compras']; //Este nel
          // echo $_SESSION['compras'][0][0]; // ESTE ES EL INDEX EN EL CUAL ESTA CADA VALOR 
           //echo $SESSION['compras'][1][2]; //Este podría existir 
        }

    ?>
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
                <h4><span class="iconify" data-icon="clarity:employee-solid" data-width="35"></span>Empleado:   Iram Alvarez</h4>
            </div>
            <div class="col-6 text-center">
            <h4><span class="iconify" data-icon="fa-solid:id-badge" data-width="25"></span>Folio: 1889240</h4>
            </div>
        </div>
    </div>


    <div class=" container mt-5 mb-2 col-12">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-6 ">
            <form class="d-flex">
                <label for="">Código de producto</label>
                <input class="form-control me-2" type="text" id="busqueda" name="busqueda" placeholder="Buscar producto" aria-label="Search">
                <button class="btn btn-success" type="submit">Buscar</button>
            </form>
            <div class="" name="ResultDiv" id="ResultDiv" style="background-color:#E3E3E3;font-size:40px;margin-left:99px;width:70%;">

            </div>
            <div class="col-12 col-md-12 col-lg-6 text-center ">
            <?php
             if(isset($_SESSION['compras']))
             {
                echo "<h2>Total $: <label for='formGroupExampleInput' class='form-label'>$preciototal</label></h2>";
                $_SESSION['pre_tot'] = $preciototal;
             }
             else echo "<h2>Total $: <label for='formGroupExampleInput' class='form-label'>0</label></h2>";
             ?>
            </div>
        </div>
    </div>
    

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
                    <?php
                    if(isset($_SESSION['compras']))
                    {
                        echo '<th scope="row"></th>';
                    foreach($_SESSION['compras'] as $value) // Por cada arreglo dentro de ese valor, lo sacamos
                    {
                        for($i=0;$i<=2;$i++)
                            $foliopro = $value[0];
                            $nombrepro = $value[1];
                            $preciopro = $value[2];
                            echo "<tr>";
                                echo "<th scope='row'>$foliopro</th>";
                                echo "<td>$nombrepro</td>";
                                echo "<td>$preciopro</td>";
                                echo "<td>";
                                    echo "<div class='input-group text-center'>";
                                        echo "<input type='number' step class='form-control text-center' placeholder='1'>";
                                    echo "</div>";
                                echo "</td>";
                                echo "<td>40.00</td>";
                                echo "<td>";
                                    echo "<button name='accion' value='cancelar' type='submit' class='btn btn-danger'> X </button>";
                                echo "<td>";
                            echo "</tr>";
                        
                    }
                    }
                    
                    ?>
                    <!--
                    <tr>
                        <th scope="row">750120</th>
                        <td>Tortilla Enchiladas KG</td>
                        <td>20.00</td>
                        <td>
                            <div class="input-group text-center">
                                <button class="btn btn-outline-secondary" type="button">-</button>
                                <input type="number" step class="form-control text-center" placeholder=" 2 ">
                                 <button class="btn btn-outline-secondary" type="button">+</button> 
                            </div>
                        </td>
                        <td>40.00</td>
                        <td>
                            <button name="accion" value="cancelar" type="submit" class="btn btn-danger">
                                X
                            </button>
                        </td>
                    </tr>
                    -->
                </tbody>
            </table>

        </div>

        <div class="row shadow p-3">
            <form  id="formventa"  action="scripts/terminarventa.php" method="POST">
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
            <div class="col-12 col-lg-6 text-center">
            <a href="scripts/cancelarventa.php"><button name="" class="btn btn-danger">
                Cancelar Venta
            </button></a><
            </div>
        </div>
        
<?php include 'includes/footer.php' ?>