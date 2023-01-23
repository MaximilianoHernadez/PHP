

$(document).ready(function(){

  Swal.fire(
  'ATENCION!',
  'Se modifico el procedimiento para generar y descargar contratos. Por favor da click en el boton "Manual" para revisar el nuevo proceso.',
  'question'
  )

  function cargarinfo(){
        let id = $("#prov2").val();
         let id2 = $("#prov").val();
      
      $.ajax({
            type:'POST',
            url:'datosprov.php',
            dataType: "json",
            data:{id:id},
            success:function(data){

            $("#direccion").text(data.Direccion);
            $("#telefono").text(data.Telefono);
            $("#email").text(data.Email);
            $("#rfc").text(data.RFC);
            $("#fecha").text(data.Fecha);
            $("#RepLegal").text(data.RepLegal);
            $("#ObjetoSocial").text(data.ObjetoSocial);
            $("#Notario").text(data.Notario);
            $("#Noescritura").text(data.Noescritura);
            $("#FolioR").text(data.FolioR);
              
            $("#datos").fadeIn();
            $("#ota").fadeIn();


            }

            });

          $.ajax({
            type:'POST',
            url:'otasp.php',
            dataType: "html",
            data:{id:id},
            success:function(data){
            $("#ota").html(data);
            }

            });
    }
    
    cargarinfo()
 		
 			$("#ota").change(function(e){
 				let idot = $("#ota option:selected").val();
 

 			$.ajax({
            type:'POST',
            url:'datosota.php',
            dataType: "json",
            data:{idot:idot},
            success:function(data){
              console.log(data.nopersonas)
            	$("#ota1").text('');
            	$("#actividad").text('');
            	$("#central").text('');
            	$("#cliente").text('');
            	$("#fechaota").text('');
            	$("#ciudadot").text('');
            	$("#fechai").text('');
            	$("#fechap").text('');
              $("#trabajadores").val('');  

            	$("#ota1").text(data.ota);
            	$("#actividad").text(data.actividad);
            	$("#central").text(data.ubicacion);
            	$("#cliente").text(data.cliente);
            	$("#fechaota").text(data.fecha);
            	$("#ciudadot").text(data.ciudad);
            	$("#fechai").text(data.fechaii);
            	$("#fechap").text(data.fechapi);
              $("#trabajadores").val(data.nopersonas);           	
               }
        		});

 							$.ajax({
            type:'POST',
            url:'datosliq.php',
            dataType: "json",
            data:{idot:idot},
            success:function(data){
            	$("#Montoliq").val("");
            	$("#Montoliq").text("");
            	$("#MontoliqP").val("");
            	$("#MontoliqP").text("");

            	$("#Montoliq").val(data.Monto);
            	$("#Montoliq").text(data.Monto);
            	$("#MontoliqP").val(data.Monto);
            	$("#MontoliqP").text(data.Monto);
         	     	
               }
        		});
 						

 			});

 			$("#trabajadores").change(function(e){
 				let trabajadores = $("#trabajadores").val();
        let ota = $("#ota").val();
        $.ajax({
            type:'POST',
            url:'workers.php',
            dataType: "html",
            data:{ota:ota, trabajadores: trabajadores},
            success:function(data){
                alert(data)                
               }
            });

 			});


 			$("#generar").click(function(e){
      $("#form1").submit();
			
 			});
      $("#download").click(function(e){
      $("#form2").submit();
      
      });

 			
 		});