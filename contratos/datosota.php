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
	$sql= "SELECT * FROM OT WHERE Id=$id";
	$rs = odbc_exec( $conexion, $sql);
	$sql2= "SELECT * FROM [OT PROGRAMA] WHERE Id=$id";
	$rs2 = odbc_exec( $conexion, $sql2);
	$data=array();

	$sqlnt= "SELECT NoPersonas FROM [PROVEEDORES PAGOS] WHERE OT=$id";
	$rsnt = odbc_exec($conexion, $sqlnt);

	$nopersonas=odbc_result($rsnt,"NoPersonas");

	$sql1= "SELECT * FROM CLIENTES";
	$rs1 = odbc_exec( $conexion, $sql1);

	while ($rowc=odbc_fetch_array($rs1)) {
		
		$clienten[$rowc['IdCliente']]=$rowc['Razon'];

	}

		 while ($rowt=odbc_fetch_array($rs2)) {

		if (isset($rowt['InicioP'])) {
			$data['fechai']=$rowt['InicioP'];
			$data['fechaii']=date("d/m/Y", strtotime($rowt['InicioP'])); 
		}
			
		if (isset($rowt['FinP'])) {
			$data['fechap']=$rowt['FinP'];
			$data['fechapi']=date("d/m/Y", strtotime($rowt['FinP']));
		}
		
	
 		}
	

	 while ($row=odbc_fetch_array($rs)) {
			
		$data['actividad']=utf8_encode($row['Observaciones']); 
		$data['ubicacion']=utf8_encode($row['Central']);
		$data['ota']=$row['Id'];
		$data['fecha']=date("d/m/Y", strtotime($row['Fecha']));
		$data['cliente']=$clienten[$row['Cliente']];
		$data['ciudad']=$row['Estado']; 
	

 }

 	$data['nopersonas']=$nopersonas;

echo json_encode($data);

?>