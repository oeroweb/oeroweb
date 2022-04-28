<?php  include 'layout/header.php' ?>	


<?php
  $errores = "";  
	$destino ="contacto@oeroweb.com";  
	$titulo = 'LLego nuevo correo, contacto por la web';
	// $destino ='contacto@oeroweb.com' . ', '; 
  // $destino .='oeroweb@gmail.com';     

    if($_POST){
      if (!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['correo']) && !empty($_POST['mensaje']) ){ 
        
        $nombre = $_POST['nombre'];
        $asunto = $_POST['asunto'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $plan = $_POST['plan'];
        $mensaje = $_POST['mensaje'];
  
        if (!is_string($nombre)) {      
          $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
          $errores = "<i class='fa fa-thumbs-down'></i> Por favor agrega un nombre <br />" ;
        } 
      
        if (!empty($correo)) {
          $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
          $errores .= "<i class='fa fa-thumbs-down'></i> Por favor ingresa un correo valido <br />";          
        }
  
        if (!is_string($asunto)) {      
          $asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
          $errores = "<i class='fa fa-thumbs-down'></i> Por favor agrega un asunto <br />";
				}
				
				if(!empty($plan)){
					$errores = "<i class='fa fa-thumbs-down'></i> Por favor selecionar un plan <br />";
				}

        if (!empty($mensaje)) {      
          $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
          $errores = "<i class='fa fa-thumbs-down'></i> Por favor agrega un mensaje <br />";
				}
				
				$sql = "INSERT INTO oedb_webmail (id, nombre, asunto, telefono, email, plan, mensaje, fechacreacion, estado) VALUES (null, '$nombre','$asunto','$telefono',  '$email','$idea', NOW(), 0);";
				
				$resultado = mysqli_query($db,$sql);
						
				if($resultado){
					$_SESSION['completado'] = "Tu idea se recibió de forma  exitosa, estará en espera de aprobación del administrador";			
				} else{
					$_SESSION['fallo'] = "Error al enviar el correo; por favor volver a intentar";		
				}
  
      $contenido = '
      <html>
      <head>
        <title> '. $titulo . '</title>
      </head>
      <body>
        <h2 style="color:#0A4369">Nuevo Correo Contacto</h2><hr><p >Solicita el plan <strong>' . $plan . '</strong></p><p><strong>' . $nombre . '</strong> a escrito por la web, su correo <strong>' . $correo . '</strong> con el asunto <strong> ' . $asunto . '</strong></p><p> su mensaje es : </p><p> ' . $mensaje .'</p><hr><p >Ingresa aquí para ver el mensaje.</p><p> <a href="https://www.oeroweb.com/back/administrator.php"> Aquí </a></p>
      </body>
      </html>
      ';
      
      $cabeceras  = 'MIME-Version: 1.0' . "\r\n";
      $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";  
			
			mail($destino, $titulo, $contenido, $cabeceras);

      $errores = "<i class='fa fa-thumbs-up'></i> Tu mensaje se envio correctactamente.";
      
        }else{
          $errores = '<i class="fa fa-thumbs-down"></i> Por favor llenar todos los campos';
        } 
    }else{
      $errores = "";
    } 
?>

<!-- <section class="titulo_area">		
	<div class="container-wrap justify-content-center">
		<div class="titulo_texto">
			<h2>Contáctenos</h2>
		</div>
	</div>		
</section> -->

<!--================ inicio Portfolio =================-->
<section class="contacto_area" id="contacto_area">	
	<div class="container-wrap justify-content-center">
		<div class="box-datos w50">				
			<div class="aniview" data-av-animation="fadeInUp">
				<h4 class="titulo">Redes Sociales</h4>
				<hr class="w70">		
				<p><a href="https://www.facebook.com/oeroweb/"><i class="fab fa-facebook"></i> www.facebook.com/oweoweb</a></p>		
				<p><a href="https://www.linkedin.com/company/53436513/admin/"><i class="fab fa-linkedin"></i> www.linkedin.com/oweoweb</a></p>			
				<h4 class="titulo">Correo</h4>								
				<hr class="w70">
				<p> <a href="mailto:info@oeroweb.com"><i class="fas fa-envelope"></i> info@oeroweb.com</a></p>				
				<h4 class="titulo">Telefonos</h4>						
				<hr class="w70">
				<p><a href="tel:+051991703456"><i class="fas fa-mobile"></i> 991 703 456</a></p> 
				<p><a href="tel:+051951708889"><i class="fas fa-mobile"></i>  951 708 889</a></p>				
			</div>
		</div>
		<div class="box-formulario w50">
			<div class="aniview" data-av-animation="fadeInUp">
				<form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>' method="post" id="formcontacto" class="formcontacto">		
					<?php if(!empty($errores)): ?>
						<div class="mensaje">
							<?php echo $errores; ?>
						</div>				
					<?php endif; ?>
						<h4 class="titulo">Escribenos</h4>
						<div class="inputBox">
							<input type="text" class="form-control mb-10" name="nombre" value="<?php if(isset($nombre)) echo $nombre ?>" required>
							<span>Nombre</span>
						</div>				
						<div class="inputBox">
							<input type="text" class="form-control mb-10" name="asunto" value="<?php if(isset($asunto)) echo $asunto ?>" required>
							<span>Asunto</span>
						</div>				
						<div class="inputBox">
							<input type="email" class="form-control mb-10" name="correo" value="<?php if(isset($correo)) echo $correo ?>" required>
							<span>Correo</span>
						</div>														
						<div class="radioBox ">
							<input class="btnradio" type="radio" id="emprendedor2" name="plan" required> Emprendedor
						</div>
						<div class="radioBox ">
							<input class="btnradio" type="radio" id="dPlus" name="plan" required> Digital Plus
						</div>
						<div class="radioBox ">
							<input class="btnradio" type="radio" id="dPremium" name="plan" required> Digital Premium
						</div>						
						<div class="inputBox ">										
							<textarea name="mensaje" class="form-control" cols="10" rows="5" value="<?php if(isset($mensaje)) echo $mensaje ?>" required></textarea>
							<span>Dejanos tu consulta</span>
						</div>
						<input class="btn" type="submit" value="Enviar" >		
				</form>	
			</div>
		</div>	
	</div>
	
</section>
<!--================ fin Portfolio =================-->
	<?php include 'layout/footer.php' ?>		
</body>
</html>