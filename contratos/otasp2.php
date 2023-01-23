
<?php

header('Content-Type: text/html; charset=ISO-8859-1');

session_start();
	if (isset($_SESSION['CORREO']))  
  {
   $usuario_re=$_SESSION['CORREO'];
    }
  else
  {
    echo "<script language=javascript> alert('Sólo los miembros logueados pueden ver esta página')</script>";
		echo "<script language=javascript> self.location.href='/' </script>";
  }
require('fpdi/textbox.php'); 



     
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
       // Arial bold 15
    $this->SetFont('Times', 'B' ,15);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
   
    // Salto de línea
    $this->Ln(0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<?php require("c:/wamp64/www/complementos/config/head.php"); ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Status Contratos</title>
</head>

<body class="oscuro text-light">
<?php require("c:/wamp64/www/complementos/config/header.php"); ?>
<div class="col-12 d-flex justify-content-center align-items-center" style="height:90vh;">

<?php


	

	header('Content-Type: text/html; charset=ISO-8859-1');
	$id=$_POST['id'];


	$meses=array(1 => "ENERO", 2 => "FEBERO", 3 => "MARZO", 4 => "ABRIL", 5 => "MAYO", 6 => "JUNIO", 7 => "JULIO", 8 => "AGOSTO", 9 => "SEPTIEMBRE", 10 => "OCTUBRE", 11 => "NOVIEMBRE", 12 => "DICIEMBRE");

	require("c:/wamp64/www/complementos/config/dbcontroller.php");
	$mes = date('m');
	$year= date("Y");
	$yeara= date("Y")-1;


	switch ($mes) {
		case '1':
			$fechai = "#09/01/$yeara#";
			$fechaf = "#12/31/$yeara#";
			$cuatrimestre="3ERCUATRIMESTRE".$yeara;
		break;
		case '5':
			$fechai = "#01/01/$year#";
			$fechaf = "#04/30/$year#";
			$cuatrimestre="1ERCUATRIMESTRE".$year;
		break;
		case '9':
			$fechai = "#05/01/$year#";
			$fechaf = "#08/31/$year#";
			$cuatrimestre="2DOCUATRIMESTRE".$year;
		break;
		
		default:
			$fechai = NULL;
			$fechaf = NULL;
		break;
	}


	$db= New DBcontroller; 

	$queryFRepse="SELECT FechaRepse FROM PROVEEDORES WHERE ID=$id";
	$fechaRepse=$db->runQueryO($queryFRepse, "FechaRepse");
	$fechaRepse=date("m/d/Y", strtotime($fechaRepse));
 	$fechaRepseF="#$fechaRepse#";
 	$fechai;
 	$fechaf;

	$sql= "SELECT * FROM [PROVEEDORES PAGOS] WHERE Proveedor=$id AND (FPago>=$fechai AND FPago<=$fechaf) ORDER BY FPago DESC";
	$res= $db->runQuery_n($sql);
	$totalt=0;

	if ($res!="No hay conjunto de resultados") {
	$rtotal=count($res);


	foreach ($res as $key => $value) {
		if ($value['NoPersonas']>0) {
			$totalt=$totalt+1;
		}else{
			$otfaltante[]=$value['OT'];
		}

	}

	$faltantes=$rtotal-$totalt;
		
	if ($rtotal!=$totalt) {
		echo "<div class='text-center wey col-3 p-2 m-1  table-responsive' style='max-height:90vh; min-height:25vh;'> Tienes ".$faltantes." otas a las que no les has asignado numero de trabajadores <br>";
		echo "Las otas que faltan son las siguientes:<br>";
		foreach ($otfaltante as $key => $value) { 
		echo  "<div class='col-12 text-center'>$value</div>";		
	 }
	 echo "</div>";

	}else{
		echo "<div class='text-center wey col-6 d-flex align-items-center justify-content-center' style='height:60vh;'><p style='font-size:3em; color: green'>TUS CONTRATOS FUERON PROCESADOS CON EXITO</p></div>";
	}
	}

	$sqlprov="SELECT * FROM PROVEEDORES WHERE ID=$id";
	$resprov=$db->runQuery_n($sqlprov);
	$sqlclientes= "SELECT * FROM [Clientes]";
	$clientes=$db->runQuery($sqlclientes,"IdCliente");

		

$a["1"]=$resprov[0]['PROVEEDOR'];
$a["21"]=$resprov[0]["Folio Repse"];
$a["22"]=$resprov[0]["ObjetoSocial"];	
$a["2"]=$resprov[0]["RepLegal"];
$a["3"]=$resprov[0]['PROVEEDOR'];
$a["10"]=$resprov[0]["RFC"];
$a["11"]=$resprov[0]["CALLE"];
$a["17"]=$resprov[0]["TELEFONO"];
$a["18"]=$resprov[0]["CORREO"];

$hoy=date("d-m-Y");
$dia=date("d");
$mes=$meses[round(date("m"))];
$year=date("Y");
$a["16"]=$dia." de ".$mes." de ".$year;


$a["7"]=$resprov[0]['Noescritura'];
$a["8"]=$resprov[0]["Notario"];
$nodatei=array();
$nodatef=array();


if ($res!="No hay conjunto de resultados") {
foreach ($res as $key => $value) {

$ot=$value['OT'];


$sqlprograma= "SELECT InicioP,FinP FROM [OT PROGRAMA] WHERE Id=$ot";
$resprograma=$db->runQuery_n($sqlprograma);

$iniciopp[$ot]=$resprograma[0]["InicioP"];
$finpp[$ot]=$resprograma[0]["FinP"];

$iniciopp[$ot];

if ($iniciopp[$ot]==null) {
	$nodatei[]=$ot;
}

if ($finpp[$ot]==null) {
	$nodatef[]=$ot;
}

}
}

if (count($nodatei)>0) {
	echo "<div class='text-center wey col-3 p-2 m-1 table-responsive' style='max-height:90vh; min-height:25vh;'>Tienes ".count($nodatei)." OTA sin fecha de inicio<br>";
	echo "Son las siguientes:<br>";
	foreach ($nodatei as $key => $value) {
		echo $value."<br>";
	}
	echo "</div>";
}
if (count($nodatef)>0) {
	echo "<div class='text-center wey col-3 p-2 m-1 table-responsive' style='max-height:90vh; min-height:25vh;'>Tienes ".count($nodatef)." OTA sin fecha de fin<br>";
	echo "Son las siguientes:<br>";
	foreach ($nodatef as $key => $value) {
		echo $value."<br>";
	}
	echo "</div>";
}

$i=0;
if ($res!="No hay conjunto de resultados") {

if ($nodatef>0 && $nodatei>0 && $rtotal==$totalt) {

foreach ($res as $key => $value) {
$i=$i+1;
$ot=$value['OT'];
$resi=$value['I'];

$sqlota= "SELECT * FROM OT WHERE Id=$ot";

$sqlnp= "SELECT NoPersonas FROM [PROVEEDORES PAGOS] WHERE OT=$ot";

		
$resota=$db->runQuery_n($sqlota);

$resnp=$db->runQueryO($sqlnp, "NoPersonas");


$a["12"]=$resota[0]["Id"];
$a["4"]=$resota[0]["Central"];
$a["5"]=$resota[0]["Observaciones"];
$a["6"]=$resota[0]["Central"];
$a["9"]=$resota[0]["Estado"];
$a["13"]=$clientes[$resota[0]["Cliente"]]['Razon'];
$a["14"]=$resota[0]["Fecha"];
$a["15"]=$resnp;


$diai=date("d", strtotime($iniciopp[$ot]));

$mesi=$meses[round(date("m", strtotime($iniciopp[$ot])))];

$yeari=date("Y", strtotime($iniciopp[$ot]));



$diaf=date("d", strtotime($finpp[$ot]));

$mesf=$meses[round(date("m", strtotime($finpp[$ot])))];

$yearf=date("Y", strtotime($finpp[$ot]));


$a["19"]=$diai." de ".$mesi." de ".$yeari;
$a["20"]=$diaf." de ".$mesf." de ".$yearf;

if ($a['7']==null OR $a['8']==null) {
	require("lib.php");
}else{
	require("libm.php");
}


}

}
}





	//while ($row=odbc_fetch_array($rs)) {

	//	$clave=$row['ota'];
	//	$fas=date("d-m-Y", strtotime($row['fas']));

		
	//	$html.="<option value='$clave'>$clave || $fas</option>";

	//} 






?>
</div>
</body>
</html>


