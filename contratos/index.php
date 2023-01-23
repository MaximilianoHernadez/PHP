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

  require("c:/wamp64/www/complementos/config/head.php"); 
  require("c:/wamp64/www/complementos/config/dbcontroller.php");

	if (empty($nom)) {
		echo "<script language=javascript> alert('NO CUENTAS CON FOLIO REPSE REGISTRADO EN NUESTRA PLATAFORMA, SI ES UN ERROR POR FAVOR COMUNICATE CON EL AREA DE SISTEMAS')</script>";
		echo "<script language=javascript> self.location.href='/proveedores/accesop/menu.php' </script>";
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>GENERACION DE CONTRATOS</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
 	
 	<style type="text/css">
 		body {
	background: #f2f2f2;
	font-family: 'Roboto', sans-serif;
	padding: 0;
	margin: 0;
	}

 	</style>

</head>
<body class="bg-dark text-light">
	<nav class="navbar navbar-expand-lg" style="background: #353333;">
	<!--	<form class="form-inline">
  		<select class="custom-select">
  			<option>SELECCIONAR YEAR</option>
  		</select>
  		
  		</form>
	!-->

    <ul class="navbar-nav">
       <li class="nav-item active">

       	<form id="form1" action="otasp2.php" method="POST" target="_blank" >
       	<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
				</form>
				<form id="form2" action="download.php" method="POST" target="_blank" >
       	<input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
				</form>
		 <button class="btn btn-outline-success m-2" type="button">
   			ACIMSA
  		</button>
		<button id="generar" class="btn btn-outline-success m-2" type="button">
   			GENERAR CONTRATOS
 		</button>
 		<button id="download" class="btn btn-outline-success m-2" type="button">
   			DESCARGAR CONTRATOS
  	</button>
  		<a href="firmas/manual.pdf" target="_blank" id="generar" class="btn btn-outline-success m-2" type="button">
   				MANUAL
  		</a>
        
      </li>
    </ul>



</nav>
<div class="container">

	<div class="row p-2" style="color: red; font-size: .8em">
		<div class="col-12 p-0">NOTA: SI NO MANDASTE TU FIRMA AL DEPARTAMENTO DE SISTEMAS NO APARECERA EN EL CONTRATO Y TENDRAS QUE FIRMARLO PARA PRESENTAR TU DECLARACION</div>
		<div class="col-12 p-0">PUEDES ENVIAR TU FIRMA ESCANEADA AL CORREO: mhernandez@acimsa.com EN CASO DE QUE NO APAREZCA Y REQUIERAS QUE SI APAREZCA</div>
		<div class="col-12 p-0">DAR CLICK EN EL BOTON "GENERAR CONTRATO" PARA VISUALIZAR Y DESCARGAR EL CONTRATO</div>
		<div class="col-12 p-0">SE AGREGO EL BOTON "MANUAL" POR CUALQUIER DUDA</div>
		<div class="col-12 p-0">FAVOR COTEJAR SUS OBRAS, SI FALTAN OBRAS FAVOR DE NOTIFICARLO Y EN CASO CONTRARIO NO GENERAR CONTRATOS DE OBRAS QUE NO LES CORRESPONDEN</div>
	</div>
	
		<div class="row d-flex justify-content-center text-center p-3"><h1>GENERACION DE CONTRATOS</h1></div>
 
		<div class="row d-flex p-2 justify-content-center  align-items-center text-center">

			<div class="col-3 p-2">PROVEEDOR</div>
			<div class="col-3 p-2">
					<input type="text" class="form-control form-control-sm" id="prov" name="" value="<?php echo $nom; ?>" readonly>
					<input type="hidden" class="form-control form-control-sm" id="prov2" name="" value="<?php echo $id; ?>" readonly>
			</div>
			
			<div class="col-6 p-2"> <div class="col-12 d-flex justify-content-center"><select name="ota" class="custom-select" id="ota" style="max-width: 300px; display: none;"></select></div></div>
		</div>

			<div class="row text-center" id="datos" style="display: none;">

			<div class="row col-6 d-flex justify-content-center m-0 p-0">
			<div class="col-5 d-flex justify-content-center align-items-center border border-primary rounded">DIRECCION</div>
			<div class="col-7 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="direccion"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">TELEFONO</div>
			<div class="col-7 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="telefono"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">REPRENSENTANTE LEGAL</div>
			<div class="col-7 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="RepLegal"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">RFC</div>
			<div class="col-7 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="rfc"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">EMAIL</div>
			<div class="col-7 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="email"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">FECHA</div>
			<div class="col-7 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="fecha"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">NUMERO DE ESCRITURA</div>
			<div class="col-7 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="Noescritura"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">FOLIO REPSE</div>
			<div class="col-7 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="FolioR"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">OBJETO SOCIAL</div>
			<div class="col-7 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="ObjetoSocial"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">NOTARIO</div>
			<div class="col-7 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="Notario"></div>
			</div>

			<div class="row col-6 d-flex justify-content-center m-0 p-0">
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">OTA</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="ota1"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">ACTIVIDAD</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="actividad"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">CENTRAL</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="central"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">CLIENTE</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="cliente"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">FECHA</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="fechaota"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded"># TRABAJADORES</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">
				<input type="text" name="trabajadores" id="trabajadores" class="form-control">
			</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">CIUDAD</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="ciudadot"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">FECHA DE INICIO P</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="fechai"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">FECHA TERMINO P</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="fechap"></div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded">MONTO LIQUIDADO</div>
			<div class="col-5 d-flex justify-content-center align-items-center align-items-center border border-primary rounded" id="Montoliq"></div>
			</div>
			
				
			</div>
</div>

</body>
</html>
<?php require("c:/wamp64/www/complementos/config/global_functions.php"); ?>
<script language="javascript" src="funciones.js"></script>