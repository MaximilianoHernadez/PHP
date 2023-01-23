<?php 

$ota = $_POST['ota'];
$trabajadores = $_POST['trabajadores'];

require("c:/wamp64/www/complementos/config/dbcontroller.php");
$db= New DBcontroller; 


$sql="UPDATE [PROVEEDORES PAGOS] SET NoPersonas=$trabajadores WHERE OT=$ota";

$res=$db->executeUpdate($sql);

if ($res) {
	echo "Informacion agregada con exito";
}





?>