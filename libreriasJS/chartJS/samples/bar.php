
<script src="../Chart.js"></script>
		<div style="width: 50%">
			<canvas id="canvas" height="450" width="600"></canvas>
		</div>


	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : [
				<?php 
					require('../../../scripts/conexion.php');
					$conexion=conectar();
					$consulta="SELECT * FROM sucursal;";
					$resultado=mysqli_query($conexion,$consulta);
					while($lista=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
						?>
							'<?php echo $lista['nombre_sucursal'] ?>',
						<?php
					}	
				?>

		],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [
					<?php 
					$consulta="SELECT * FROM sucursal;";
					$resultado=mysqli_query($conexion,$consulta);
					while($lista=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
						$sucursal=$lista['nombre_sucursal'];
						$consulta2="SELECT * FROM venta where sucursal_venta='$sucursal';";
						$resultado2=mysqli_query($conexion,$consulta2);
						$contador_venta=0;
						while($lista2=mysqli_fetch_array($resultado2,MYSQLI_ASSOC)){
							$contador_venta+=$lista2['total_Venta'];
						}
						?>
							'<?php echo $contador_venta ?>',
						<?php
					}
					?>
				]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script></script>