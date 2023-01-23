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
	
	$usuario = "";
	$password = "";
	$dsn = "sistem";
	$conexion = odbc_connect( $dsn, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	$sql= "SELECT * FROM PROVEEDORES WHERE ID=$id";
	$rs = odbc_exec( $conexion, $sql);
	$data=array();

	

 while ($row=odbc_fetch_array($rs)) {
			
		$data['Direccion']=$row['CALLE']." ".$row['COL']." ".$row['ESTADO']." ".$row['CIUDAD']." ".$row['CP']; 
		$data['Telefono']=$row['TELEFONO'];
		$data['FolioR']=$row['Folio Repse'];
		$data['Email']=$row['CORREO'];
		$data['RFC']=$row['RFC'];
		$data['Fecha']=date('d-m-Y h:i:s');
		$data['ObjetoSocial']=$row['ObjetoSocial'];
		$data['RepLegal']=$row['RepLegal'];
		$data['Noescritura']=$row['Noescritura'];
		$data['AltaSAT']=$row['AltaSAT'];
		$data['NoRegSAT']=$row['NoRegSAT'];
		$data['RegPublico']=$row['RegPublico'];
		$data['Notario']=$row['Notario'];
		$data['Prov']=$row['PROVEEDOR'];

 }

echo json_encode($data, JSON_INVALID_UTF8_IGNORE);

?>