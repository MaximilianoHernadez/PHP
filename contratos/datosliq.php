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
	$id=$_POST['idot'];
	$usuario = "";
	$password = "";
	$dsn = "sistem";
	$conexion = odbc_connect( $dsn, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");

	$sql= "SELECT * FROM [PROVEEDORES PAGOS] WHERE OT=$id";
	$rs = odbc_exec( $conexion, $sql);

	$data=array();
	$monto=0;

	while ($rowc=odbc_fetch_array($rs)) {

		$monto=$monto+$rowc['Monto'];
		

	}
	

$data['Monto']=$monto;

echo json_encode($data);

?>