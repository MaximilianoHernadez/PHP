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
	$id=$_POST['id'];

	require("c:/wamp64/www/complementos/config/dbcontroller.php");
	$db= New DBcontroller;
	$queryprov="SELECT PROVEEDOR FROM PROVEEDORES WHERE ID=$id";
	$proveedor=$db->runQueryO($queryprov, "PROVEEDOR");

	$mes = date('m');
	$year= date("Y");
	$yeara= date("Y")-1;


	switch ($mes) {
		case '1':
			$cuatrimestre="3ERCUATRIMESTRE".$yeara;
		break;
		case '5':

			$cuatrimestre="1ERCUATRIMESTRE".$year;
		break;
		case '9':
			$cuatrimestre="2DOCUATRIMESTRE".$year;
		break;
		
		default:
		$cuatrimestre=null;
		break;
	}

	$ruta=trim("C:/Info/Personal/ProveedoresContratos/$proveedor/$cuatrimestre/");

 		$zip = new ZipArchive();
 		$zip->open("$cuatrimestre.zip",ZipArchive::CREATE);

 	if (file_exists($ruta)) {

		if ($dir = opendir($ruta)) {
			
			while (false !== ($entrada = readdir($dir))) {
				if ($entrada!=".." AND $entrada!=".") {
				$zip->addFile("$ruta$entrada","$entrada");
				}
        		
    		}
		}

	$zip->close();

 	header("Content-type: application/octet-stream");
 	header("Content-disposition: attachment; filename=$cuatrimestre.zip");
 	readfile("$cuatrimestre.zip");
 	unlink("$cuatrimestre.zip");
	
	}else{
		echo "<script type='text/javascript'>alert('Tus contratos no se han generado aun, si tienes dificultades comunicate con el area de sistemas')</script>";
		echo "<script type='text/javascript'>window.close()</script>";

	}

	

?>
