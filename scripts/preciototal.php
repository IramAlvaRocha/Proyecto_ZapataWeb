<?php
if(isset($_SESSION['compras']))
             {
                if(isset($_GET['prod']))
                {

                    $preciototalxd =  $_SESSION['sumaprecio'] ;;
                    echo "<h2>Total $: <label for='formGroupExampleInput' class='form-label'>$preciototalxd</label></h2>";
                    //$_SESSION['pre_tot'] = $preciototalxd;
                   // echo "<br>" . "Pre_tot final: " . $_SESSION['pre_tot'];
                    
                }
                
                if(!isset($_GET['prod']))
                {
                    $preciototal2 =  $_SESSION['sumaprecio'] ;
                    echo "<h2>Total $: <label for='formGroupExampleInput' class='form-label'>$preciototal2</label></h2>";
                    
                }
             }
             else echo "<h2>Total $: <label for='formGroupExampleInput' class='form-label'>0</label></h2>";
?>             