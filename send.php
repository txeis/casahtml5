<?php

		
      
	  $mensaje.= "\nNombre: ". $_POST['nombre'];
	  $mensaje.= "\nApellidos: ". $_POST['apellidos'];
	  
	  $mensaje.= "\nLocalidad: ". $_POST['localidad'];
	  $mensaje.= "\nProvincia: ". $_POST['provincia'];
	  $mensaje.= "\nPaís: ". $_POST['pais'];
	  
	  $mensaje.= "\nTelefono: ". $_POST['telefono'];
	  $mensaje.= "\nEmail: ".$_POST['email'];
	  
	  $mensaje.= "\nFecha de entrada: ". $_POST['dia_entrada'];
	  $mensaje.= "/". $_POST['mes_entrada'];
	  $mensaje.= "/". $_POST['anio_entrada'];
	  
	  $mensaje.= "\nFecha de salida: ". $_POST['dia_salida'];
	  $mensaje.= "/". $_POST['mes_salida'];
	  $mensaje.= "/". $_POST['anio_salida'];
	  
	  $mensaje.= "\nNº adultos: ". $_POST['n_adultos'];
	  $mensaje.= "\nNº niños: ". $_POST['n_ninos'];
	  
	  $mensaje.= "\nHabitación: ". $_POST['tipo_habitacion'];
	  $mensaje.= "\nPensión alimentaria: ". $_POST['pension_alimentaria'];
	  
	  
	  $mensaje.= "\nComentarios: \n".$_POST['comments'];
	  
	  $destino= "casala_era@yahoo.es";
	  $remitente = $_POST['email'];
	  $asunto = "pre-reserva de: ".$_POST['nombre'];
	  mail($destino,$asunto,$mensaje,"FROM: $remitente");
	  
	  echo "<script type='text/javascript'>
        alert('Su mensaje ha sido enviado. ');
        window.location='index.html';
      </script>"; 
  
	  
	   
	  
?>