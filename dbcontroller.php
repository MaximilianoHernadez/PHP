<?php

if (!class_exists("DBController")) {

	class DBController {

	private $user = "";
	private $password = "";
	//SE ENLAZA A ALMACENESP
	
	private $database = ""; 
	private $conn;
   

	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		 $conn = odbc_connect($this->database,$this->user,$this->password);
		//$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query,$key) {
		$result = odbc_exec($this->conn,$query);
		while($row=odbc_fetch_array($result)) {
			$resultset[$row[$key]] = $row;
		}		
			if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}
            
        }
       function runQueryi($query) {
		$result = odbc_exec($this->conn,$query);

		if ($result) {
		echo "Informacion agregada con exito";
		}else{
		echo "Ocurrio algun error";
		}

       }
     function runQuery_n($query) {
		$result = odbc_exec($this->conn,$query);
		while($row=odbc_fetch_array($result)) {
			$resultset[] = $row;
		}		
			if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}
            
        }
        function runQuery_array($query,$field) {
		$result = odbc_exec($this->conn,$query);
		while($row=odbc_fetch_array($result)) {
			$resultset[$row[$field]] = $row;
		}		
			if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}
            
        }
        function runQuery_array2($query,$field) {
		$result = odbc_exec($this->conn,$query);
		while($row=odbc_fetch_array($result)) {
			$resultset[$row[$field]][] = $row;
		}		
			if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}
            
        }
        function runQueryO($query,$field) {
		$result = odbc_exec($this->conn,$query);
		$resultset=odbc_result($result,$field);
		
			if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}
            
        }
       //  
       function runQueryU($query) {
		$result = odbc_exec($this->conn,$query);
		while($row=odbc_fetch_array($result)) {
			$resultset = $row;
		}		
           if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}
        }

        // Crear un array con un conjunto de valores de 1 solo campo de la tabla
        function runQueryA($query,$field) {
		$result = odbc_exec($this->conn,$query);
		while($row=odbc_fetch_array($result)) {
			$resultset[]=$row[$field];
		}		
			if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}
            
        }

	
	// Ejecutar una actualizacion
	function executeUpdate($query) {
        $result = odbc_exec($this->conn,$query); 
     	return $result;		

    }

    // Crear un array a partir de una tabla con 1 index y 1 solo valor. La llave no puede repetirse
    function buildarray($query,$field1,$field2){
    	$result = odbc_exec($this->conn,$query);
    	while($row=odbc_fetch_array($result)) {
			$resultset[$row[$field1]] = $row[$field2];
		}
		if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}

    }

    // Crear un array a partir de una tabla con 1 index y 1 solo valor. Cuando la llave se repite
    function buildarraym($query,$field1,$field2){
    	$result = odbc_exec($this->conn,$query);
    	while($row=odbc_fetch_array($result)) {
			$resultset[$row[$field1]][] = $row[$field2];
		}
		if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}

    }

    // Crear un array a partir de una tabla con 2 index
    function buildarray2($query,$field1,$field2){
    	$result = odbc_exec($this->conn,$query);
    	
    	while($row=odbc_fetch_array($result)) {
    		$val=trim($row[$field1]);
			$resultset[$val][$row[$field2]] = $row;
		}
		if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}

    }

    // hacer un array con fechas a partir de una tabla con el nombre de 2 campos

    function buildarray_date($query,$field1,$field2){
    	$result = odbc_exec($this->conn,$query);
    	while($row=odbc_fetch_array($result)) {

    	$row[$field2] == '' ? "" : $resultset[$row[$field1]] = date("d/m/Y", strtotime($row[$field2]));
			
		}
		if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}

    }

    // para formatear varias fechas en un array

    function date_format($date){
    	foreach ($date as $key => $value) {

    	isset($date[$key]) == "true" ? "" : $date[$key] = date("d/m/Y", strtotime($date[$key]));
    }
    	return $date;
    }

    // para formatear solo una fecha

        function dateOnly_format($date){

    	$new_date = $date == "" ? "" : date("d/m/Y", strtotime($date));

    	return $new_date;
    }


        function name_db($id){

        $query = "SELECT Nombre, Apellidos FROM PERSONAL where Id=$id";
        $result = odbc_exec($this->conn,$query);

        $name=odbc_result($result,"Nombre");
        $lastName=odbc_result($result,"Apellidos");

        $resultset=$name." ".$lastName;

    	if (isset($resultset)) {
				return $resultset;
			}else{
				return "No hay conjunto de resultados";
			}
    }
	
}
	
}


?>