<?php

    $areas = array();

    $estatus = array();
    $estatus[]="CANCELADA";
    $estatus[]="FACTURADA";
    $estatus[]="TERMINADA";
	$estatus[]="EN PROCESO";
	$estatus[]="NO INICIADA";

	$periodos = array();
    $periodos[]=2017; 	
    $periodos[]=2018; 	
    $periodos[]=2019; 	
    $periodos[]=2020;
    $periodos[]=2021;
    $periodos[]=2022;
 	
	$meses   = array();
    $meses[1] = "ENE"; 	
    $meses[2] = "FEB"; 	
    $meses[3] = "MAR"; 	
    $meses[4] = "ABR"; 	
    $meses[5] = "MAY"; 	
    $meses[6] = "JUN"; 	
    $meses[7] = "JUL"; 	
    $meses[8] = "AGO"; 	
    $meses[9] = "SEP"; 	
    $meses[10] = "OCT"; 	
    $meses[11] = "NOV"; 	
    $meses[12] = "DIC"; 	

    $estatusMes = array();
    for ($i=1; $i<=12; $i=$i+1) {
		$estatusMes["CANCELADA"][$i]   = 0;
		$estatusMes["FACTURADA"][$i]   = 0;
		$estatusMes["TERMINADA"][$i]   = 0;
		$estatusMes["EN PROCESO"][$i]  = 0;
		$estatusMes["NO INICIADA"][$i] = 0;
	}

    $colors1 = array();
    $colors1["CANCELADA"]   = "#F08080";
    $colors1["FACTURADA"]   = "#7B68EE";
    $colors1["TERMINADA"]   = "#00FA9A";
	$colors1["EN PROCESO"]  = "#FFA07A";
	$colors1["NO INICIADA"] = "#EE82EE";

    $colors2 = array();
    $colors2["CANCELADA"]   = "#CD5C5C";
    $colors2["FACTURADA"]   = "#483D8B";
    $colors2["TERMINADA"]   = "#3CB371";
	$colors2["EN PROCESO"]  = "#FF7F50";
	$colors2["NO INICIADA"] = "#DA70D6";

    $colorsRGB = array();
    $colorsRGB["CANCELADA"]   = "rgb(205, 92, 92, 0.6)";
    $colorsRGB["FACTURADA"]   = "rgb(72, 61, 139, 0.6)";
    $colorsRGB["TERMINADA"]   = "rgb(60, 179, 113, 0.6)";
	$colorsRGB["EN PROCESO"]  = "rgb(255, 127, 80, 0.6)";
	$colorsRGB["NO INICIADA"] = "rgb(218, 112, 214, 0.6)";
	
	$sql = '';
			
if ($_SESSION["user"]["Grupo"] == null) {
	$_SESSION["user"]["Grupo"] = 4;
}

switch ($_SESSION["user"]["Grupo"]) {
  case 1:
    $sql = $sql . " and [OT.Cliente] = ".$_SESSION["user"]["IdClenteProveedor"];
    break;
  case 2:
    $sql = $sql . " and [OT.Cliente] = ".$_SESSION["user"]["IdClenteProveedor"]. 
	              " and [OT].Encargado in (select [CONTACTOS].Id from CONTACTOS where [CONTACTOS].Area1 = '".
				   $_SESSION["user"]["Area1"] . "') ";
    break;
  case 3:
    $sql = $sql . " and [OT.Cliente] = ".$_SESSION["user"]["IdClenteProveedor"].
	              " and OT.Area = ".$_SESSION["user"]["Area"];
    break;
  case 4:
    $sql = $sql . " and [OT.Cliente] = ".$_SESSION["user"]["IdClenteProveedor"].
	              " and OT.Encargado = ".$_SESSION["user"]["Id"];
    break;
  case 9:
    $sql = $sql;
    break;
}
			
/*			
echo $row["Grupo"] . "<br>";
echo "Si Grupo = 1<br>";
echo  "   and  [IdClenteProveedor] => 1 ";			

echo "Si Grupo = 2<br>";
echo  "   and  [IdClenteProveedor] => 1 ";			
echo  "   and  [Area] => 6 ";			

echo "Si Grupo = 3<br>";
echo  "   and  [IdClenteProveedor] => 1 ";			
echo  "   and  area in (select area1 where area1 coincide con el usuario) => 6 ";			

echo "Si Grupo = 4<br>";
echo  "   and  [IdClenteProveedor] => 1 ";			
echo  "   and [Id] = OT.Encargado ";			

echo "<pre>";			
print_r($row);
echo "</pre>";
echo $row["Nombre"] . "<br>";			
echo $row["Apellido"] . "<br>";			
die;	

			$_SESSION["nombre"] = $nombre;
			$_SESSION["apellido"] = $apellido;
			$_SESSION["username"] = $username;
			$_SESSION["grupo"] = $grupo;
			$_SESSION["login"] = true;
		
//
*/
			
	if (isset($_GET["a"])) { $sql = $sql . " AND Year([ot].[fecha]) = " . $_GET["a"]; }		
	
//echo $sql;

//echo $sql;

	$dataODBC = odbc_exec($DB->conn,$sql);	

/*
	while ($row = odbc_fetch_array($dataODBC)) {
		echo "<pre>";			
		print_r($row);
		echo "</pre>";
//		die;
		break;
	}
*/	
	$data = array();
	$i       = 0;
	$j       = 0;
	$total   = 0;
	$totales = array();
	$pormes  = array("01" => 0,"02" => 0,"03" => 0,"04" => 0,"05" => 0,"06" => 0,"07" => 0,"08" => 0,"09" => 0,"10" => 0,"11" => 0,"12" => 0);
    $poraño  = array();
	foreach ($periodos as $periodo) {
		$poraño[$periodo] = 0;
	} 	
    $tabla   = array(); 	
	$tablat[] = "OTA";
	$tablat[] = "Pedido";
	$tablat[] = "DPI";
	$tablat[] = "OT`";
	$tablat[] = "Central";
	$tablat[] = "Area";
	$tablat[] = "Nombre";
	$tablat[] = "Apellido";
	$tablat[] = "Estatus";		
	$tablat[] = "Fecha Inicio";
	$tablat[] = "Fecha Fin";
	while ($row = odbc_fetch_array($dataODBC)) {
		if ($row["CANCELADA"]==true) {
			$row["estatuso"] = "CANCELADA";
		} else {
			if ($row["FACTURADA"] > 0) {
				$row["estatuso"] = "FACTURADA";
			} else { 			
				if (!is_null($row["TERMINADA"])) {
					$row["estatuso"] = "TERMINADA";
				} else {					
					$fecha_actual = strtotime(date("Y-m-d H:i:00",time()));
					$fecha_proceso = strtotime($row["PROCESO"]);
					if (($fecha_proceso>$fecha_actual) OR ($row["PROCESO"]=="")) {
						$row["estatuso"] = "NO INICIADA";
					} else { 
					$row["estatuso"] = "EN PROCESO";
					}					
				}
			}
		}
		$continuar = true;
		if (isset($_GET["e"])) {
			if ($_GET["e"] != $row["estatuso"]) {
				$continuar = false;
			}
		}
	if (($continuar)) {			
  		    $total = $total + 1;
			$data[] = $row;
			if (isset($totales[$data[$i]["estatuso"]])) {
				$totales[$data[$i]["estatuso"]] = $totales[$data[$i]["estatuso"]]  + 1;
			} else {
				$totales[$data[$i]["estatuso"]] = 1;
			}		
			$tabla[$j]["OTA"]     = $row["Id"];
			$tabla[$j]["Pedido"]   = $row["Pedido"];
			$tabla[$j]["DPI"]      = $row["DPI"];
			$tabla[$j]["OT"]       = $row["OT"];
			$tabla[$j]["Central"]  = utf8_encode($row["Central"]);
			$tabla[$j]["Area"]     = utf8_encode($row["Area"]);
			$tabla[$j]["Nombre"]   = utf8_encode($row["Nombre"]);			
			$tabla[$j]["Apellido"] = utf8_encode($row["Apellido"]);
			$tabla[$j]["estatuso"] = $row["estatuso"];		
			$tabla[$j]["InicioP"]  = $row["InicioP"];
			$tabla[$j]["FinP"]     = $row["FinP"];			
			$j = $j + 1;

			$pormes[substr($data[$i]["Fecha"], 5, 2)] = $pormes[substr($data[$i]["Fecha"], 5, 2)] + 1; 

			$estatusE = $row["estatuso"];
			$mesE     = (int)substr($data[$i]["Fecha"], 5, 2);
			$estatusMes[$estatusE][$mesE] = $estatusMes[$estatusE][$mesE] + 1;

			if (isset($poraño[$data[$i]["año"]])) {
				$poraño[$data[$i]["año"]] = $poraño[$data[$i]["año"]] + 1;
			} else {
				$poraño[$data[$i]["año"]] = 1;
			}					
			if (isset($areas[$data[$i]["Area"]])) {
				$areas[$data[$i]["Area"]] = $areas[$data[$i]["Area"]] + 1;
			} else {
				$areas[$data[$i]["Area"]] = 1;
			}			
			$i = $i+1;
	}
	}
		
	function getListaMeses() {
		global $meses;
		$lista = "";
		for ($i=1; $i<=12; $i=$i+1) {
			$lista = $lista . '"' . $meses[$i] . '",';
		}
		return $lista;
	}
	
	function getEstatusMes( $estatus ) {
		global $estatusMes;
		$lista = "";
		for ($i=1; $i<=12; $i=$i+1) {
			$lista = $lista . '"' . $estatusMes[$estatus][$i] . '",';
		}
		return $lista;
	}

	function getPeriodos( ) {
		global $periodos;
		$lista = "";
		foreach ($periodos as $periodo) {
			$lista = $lista . '"' . $periodo . '",';
		}
		return $lista;
	}

	function getAreas( ) {
		global $areas;
		$lista = "";
		foreach ($areas as $area=>$valor) {
			$lista = $lista . '"' . $area . '",';
		}
		return $lista;
	}

	function getPeriodosValor( ) {
		global $periodos, $poraño;
		$lista = "";
		foreach ($periodos as $periodo) {
			$lista = $lista . '"' . $poraño[$periodo] . '",';
		}
		return $lista;
	}

	function getAreasValor( ) {
		global $areas;
		$lista = "";
		foreach ($areas as $area=>$valor) {
			$lista = $lista . '"' . $valor . '",';
		}
		return $lista;
	}


/*	
	echo "<pre>";
	print_r($poraño);
	echo "</pre>";
die;
	echo "<pre>";
	print_r($estatusMes);
	echo "</pre>";

	
	echo "<pre>";
	print_r($totales);
	echo "</pre>";

	echo "<pre>";
	print_r($pormes);
	echo "</pre>";
	die;
*/
?>