<?php  
	include 'layout/header.php';
	include 'layout/navbar.php';
	include 'back/cn/db.php';
?>	

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
					<?php
						$nombre = ""; $asunto = ""; $correo = ""; $telefono = "";
						$plan = "Otros"; $mensaje = "";
						if(isset($_POST['submit'])){
							$nombre = $_POST['nombre']; $asunto = $_POST['asunto']; $correo = $_POST['correo']; $plan = $_POST['plan']; $mensaje = $_POST['mensaje'];	$telefono = $_POST['telefono'];
							if(filter_var($nombre, FILTER_SANITIZE_STRING)){
							}else{
								?>
									<div class="mensaje error"><?php echo $nombre ?> por favor ingresar un nombre</div>
								<?php
							}

							if(filter_var($asunto, FILTER_SANITIZE_STRING)){
							}else{
								?>
									<div class="mensaje error"><?php echo $asunto ?> por favor ingresar un asunto</div>
								<?php
							}

							if(filter_var($mensaje, FILTER_SANITIZE_STRING)){
							}else{
								?>
									<div class="mensaje error"><?php echo $mensaje ?> por favor ingresar un mensaje</div>
								<?php
							}						

							if (filter_var($correo, FILTER_VALIDATE_EMAIL)){
								//echo 'correo valido';	
								$destino ="From: contacto@oeroweb.com";  
								$titulo = 'LLego correo solicitando información.';
								$contenido = '
									<html>
									<head>
										<title> '. $titulo . '</title>
									</head>
									<body>
										<h2 style="color:#0A4369">Nuevo Correo Contacto</h2><hr><p >Solicita el plan <strong>' . $plan . '</strong></p><p><strong>' . $nombre . '</strong> a escrito por la web, su correo <strong>' . $correo . '</strong> con el asunto <strong> ' . $asunto . '</strong></p><p> su mensaje es : </p><p> ' . $mensaje .'</p><hr><p >Ingresa aquí para ver el mensaje.</p><p> <a href="https://www.oeroweb.com/back/administrator.php"> Aquí </a></p>
									</body>
									</html>';								
								$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
								$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";  
								
								$sql = "INSERT INTO oedb_webmail (id, nombres, asunto, email, telefono, plan, mensaje, fechacreacion, estado) VALUES (null, '$nombre', '$asunto', '$correo', '$telefono', '$plan', '$mensaje', NOW(), 1);";		
								$resultado = mysqli_query($db,$sql);
								// if($resultado){
								// 	echo 'subido';
								// }else{
								// 	var_dump($sql);
								// }
			
								if(mail($destino, $titulo, $contenido, $cabeceras)){
									?>
									<div class="mensaje success">Gracias por escribrir, el correo se envío satisfactoriamente</div>
									<?php									 											 
										$correo=""; $nombre = ""; $asunto = ""; $telefono = "";
										$plan = ""; $mensaje = "";
								}else{
									?>
									<div class="mensaje error">Hubo un problema con el envío del correo!</div>
									<?php
								}

							}else{
								?>
									<div class="mensaje error"><?php echo $correo ?>, no es un correo valido!</div>
								<?php
							}

						}
					?>
					
					<h4 class="titulo">Escribenos</h4>	
						<div class="inputBox">
							<input type="text" class="form-control mb-10" name="nombre" required value="<?php echo $nombre ?>" >
							<span>Nombre</span>
						</div>				
						<div class="inputBox">
							<input type="text" class="form-control mb-10" name="asunto" required value="<?php echo $asunto ?>" >
							<span>Asunto</span>
						</div>				
						<div class="inputBox">
							<input type="text" class="form-control mb-10" name="telefono" value="<?php echo $telefono ?>" >
							<span>Teléfono</span>
						</div>														
						<div class="inputBox">
							<input type="text" class="form-control mb-10" name="correo" required value="<?php echo $correo ?>" >
							<span>Correo</span>
						</div>														
						<div class="radioBox ">
							<input class="btnradio" type="radio" id="emprendedor2" value="Plan Emprendedor" name="plan" required> Emprendedor
						</div>
						<div class="radioBox ">
							<input class="btnradio" type="radio" id="dPlus" value="Plan Digital Plus" name="plan" required> Digital Plus
						</div>
						<div class="radioBox ">
							<input class="btnradio" type="radio" id="dPremium" value="Plan Digital Premium" name="plan" required> Digital Premium
						</div>						
						<div class="inputBox ">										
							<textarea name="mensaje" class="form-control" cols="10" rows="5" value="<?php $mensaje ?>" required></textarea>
							<span>Dejanos tu consulta</span>
						</div>
						<input class="btn" type="submit" name="submit" value="Enviar" >		
				</form>	
			</div>
		</div>	
	</div>
	
</section>
<!--================ fin Portfolio =================-->
	<?php include 'layout/footer.php' ?>		
</body>
</html>