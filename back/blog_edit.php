<?php 
	 
	require_once ('redireccion.php'); 

	if(!isset($_POST)){
		header("Location:index.php");
	}else{
		require_once ('helpers.php'); 		
		$id = $_GET['id'];
	}
?>
<!doctype html>
<html lang="es">

<head>	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Oscar Rojas">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	 
	<title>Logremos 21  | Administración</title>
	<link rel="icon" href="../assets/img/logo.ico" type="image/ico">	
	<!-- main css -->	
	<link rel="shortcut icon" href="../assets/img/logo.ico">
  <link rel="stylesheet" type="text/css" href="../assets/css/logremosStyles.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/css/all.min.css">	  
	<!-- SCRIPT -->	
	<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
	<script src="../assets/js/jquery.js"></script> 
</head>
<body>	
		<?php include 'aside.php' ?>	
		<div class="center pd10">
			<div class="box2 w80 mg-auto pd10">				
				<h2>Editar Blog</h2>
			
				<form action='models/blog_update.php' enctype="multipart/form-data" class="w100 mg-auto" method='POST' >
					<?php 
						$bloggers = conseguir_blog($db,$id);
						if(!empty($bloggers) && mysqli_num_rows($bloggers) >= 1):
							while($blog = mysqli_fetch_assoc($bloggers)):		
					?>					
					<input type='hidden' name="id" value="<?=$blog['id']?>">
					<div class="box-input">
						<label for='' class="w20 al-rg">Imagen</label>
						<div class="w80">  
							<img class="w60 pd10" src="../assets/img/blog/<?=$blog['imagen']?>" alt="img-blog">	
							<input type="hidden" name="imagen" value="<?=$blog['imagen']?>" readonly>
							<input type="file"  name="foto" value="<?=$blog['imagen']?>">							
						</div>
					</div>
					<div class="box-input">
						<label for='' class="w20 al-rg">Titulo </label>
						<input type='text' class="w80" name="titulo" id="titulo" value="<?=$blog['titulo']?>">						
					</div>
					<div class="box-input">
						<label for='' class="w20 al-rg">Descripción </label>
						<textarea class="w80" name="parrafo"><?=$blog['parrafo']?></textarea>						
					</div>
					<div class="box-input">
						<label for='' class="w20 al-rg">Url </label>
						<input type='url' class="w80" name="url" id="url" value="<?=$blog['link_url']?>">				
					</div>
					<div class="box-input">
						<label for='' class="w20 al-rg">Archivo</label>
						<div class="w80">  
							<input type="text" class="" name="documento" value="<?=$blog['archivo']?>" readonly>
							<input type="file" multiple  name="archivo">							
						</div>
					</div>
					<hr>
					<input type="submit" value="Modificar" class="btn btn-azul">
					<a class="btn btn-azul" href="javascript:history.back()">Cancelar</a>
				</form>				
			</div>			
					<?php endwhile; 
					endif; ?>
			<!-- </div> -->
		</div>
		
		
		<!-- center -->	
</div>
<!-- fin principal -->
<script>
	CKEDITOR.replace( 'parrafo' ); 
</script>
