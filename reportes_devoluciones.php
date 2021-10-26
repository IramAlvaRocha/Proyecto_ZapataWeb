<?php
session_start();
ob_start();
require('fpdf/fpdf.php');
require('scripts/conexion.php');

$conexion = conectar();

if(!isset($_SESSION['empleado']))
{
    echo '<script language="javascript">alert("PRIMERO DEBE INICIAR SESIÓN");</script>';
    echo '<script lenguage="javascript">window.location.replace("login.php");</script>';
}

$consulta = "SELECT * FROM devolucion";
$consultada = mysqli_query($conexion, $consulta);

$resultados = mysqli_fetch_array($consultada);
$numfilas = mysqli_num_rows($consultada);
$i=0;
$total=0;
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    date_default_timezone_set("America/Monterrey");
    $fecha = date('Y-m-d   H:i:s');
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte de devoluciones Zapatapp',0,1,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(180,-25,$fecha,0,1,'C');
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Tortilleria Zapata. All Rights Reserved 2021.' ,0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->SetY(50);
$pdf->Cell(20,10,'Folio', 1,0,'C');
$pdf->Cell(70,10,'Motivo devolucion', 1,0,'C');
$pdf->Cell(50,10,'Fecha', 1,0,'C');
$pdf->Cell(45,10,'Total devolucion', 1,0,'C');
for($i=0;$i<=8;$i++)
{
    $pdf->Ln(20);
    $pdf->Cell(20,20, $resultados[0], 1,0,'C');
    $pdf->Cell(70,20, $resultados[2], 1,0,'C');
    $pdf->Cell(50,20, $resultados[1], 1,0,'C');
    $pdf->Cell(45,20, '$' . $resultados[3], 1,0,'C');

    $total = $total + $resultados[3];

    $resultados = mysqli_fetch_array($consultada);
    /*if($i==8)
    {
        $pdf->Ln(100);
        $lol;  
    }
    if($i==9 && isset($lol))
    {
        $pdf->Ln(50);
    }*/
}
$pdf->Ln(50);
$pdf->Cell(70,20, '', 0,0,'C');
$pdf->Ln(10);
for($i=0;$i<=$resultados;$i++)
{
    $pdf->Ln(20);
    $pdf->Cell(20,20, $resultados[0], 1,0,'C');
    $pdf->Cell(70,20, $resultados[2], 1,0,'C');
    $pdf->Cell(50,20, $resultados[1], 1,0,'C');
    $pdf->Cell(45,20, '$' . $resultados[3], 1,0,'C');

    $total = $total + $resultados[3];

    $resultados = mysqli_fetch_array($consultada);
    /*if($i==8)
    {
        $pdf->Ln(100);
        $lol;  
    }
    if($i==9 && isset($lol))
    {
        $pdf->Ln(50);
    }*/
}
$pdf->Ln(20);
$pdf->SetFont('Times','',20);
$pdf->Cell(0,20, 'Total de devoluciones:$ ' . $total, 0,1,'C');

$pdf->Output();
ob_end_flush();
?>