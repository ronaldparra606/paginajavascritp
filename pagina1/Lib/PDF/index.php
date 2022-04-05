<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(65);
    // Título
    $this->Cell(70,10,'Reporte de Prueba',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';
$consulta = "SELECT * FROM db_quiz";
$resultado = $conexion->query($consulta);



$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


while($row = $resultado->fetch_assoc()){
    $pdf->Cell(50, 10, $row['nombre_completo'], 1, 0, 'c', 0);
    $pdf->Cell(50, 10, $row['fecha'], 1, 0, 'c', 0);
    $pdf->Cell(50, 10, $row['puntos'], 1, 1, 'c', 0);
}


$pdf->Output();
?>