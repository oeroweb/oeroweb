<?php 
	require_once ('redireccion.php'); 
	require_once ('helpers.php'); 
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

		<section class="w90" id="blogger">	
		<div class="center">
			<div class="botones container-wrap space-between">
				<a href="../index.php" class="btn btn-azul"> <i class="fas fa-arrow-left"></i> Ir al Blog</a>
				<div class="">
					<a href="blog_add.php" class="btn btn-azul"><i class="fas fa-plus-circle"></i> Añadir Post | Blog </a>
					<a href="post_add.php" class="btn btn-azul"><i class="fas fa-plus-circle"></i> Añadir Publicación | Facebook - Linkedin </a>
				</div>
			</div>
				<?php if(isset($_SESSION['completado'])): ?>
					<div class="alerta-exito2" id="alert">
						<?=$_SESSION['completado']?>					
						<i class='fas fa-times'></i>  
					</div>
				<?php elseif(isset($_SESSION['fallo'])): ?>
					<div class="alerta-error2" id="alert">
						<?=$_SESSION['fallo']?>						
						<i class='fas fa-times'></i>
					</div>
				<?php endif; ?> 
			<div class="box pd20">				
				<?php 
					$bloggers = todos_blog($db);
					if(!empty($bloggers) && mysqli_num_rows($bloggers) >= 1):
						while($blog = mysqli_fetch_assoc($bloggers)):		
				?>				
					<div class="box-item container-wrap align-items-center mg-bt20">
							<?php if($blog['imagen'] != null) :?>
						<img src="../assets/img/blog/<?=$blog['imagen']?>" class="img-box w30" alt="">
							<?php else : ?>
						<img src="../assets/img/blog/blog.png" class="img-box w30" alt="">
							<?php endif; ?>			
						<p class="w40 pd10">#<?=$blog['id'].'  - '?><?=$blog['titulo']?></p>
						<div class="w30 pd20">
							<a href="blog_edit.php?id=<?=$blog['id']?>" class="btn btn-azul" title="Editar"><i class="fas fa-pen"></i></a>
							<a href="models/blog_delete.php?id=<?=$blog['id']?>" class=" btn btn-rojo" title="Borrar"> <i class="fas fa-trash-alt"></i></a>
						</div>
					</div>					
				<?php endwhile;
					 else: ?>
						<div class="container-wrap align-items-center mg-bt20">
							<h2 class="sinpost">No hay publicaciones que mostrar</h2>
						</div>
				<?php endif; ?>			
			</div>
			<div class="box container-wrap pd20">				
				<?php 
					$posts = todos_postredes($db);
					if(!empty($posts) && mysqli_num_rows($posts) >= 1):
						while($post = mysqli_fetch_assoc($posts)):		
				?>				
				<div class="container-wrap w50 align-items-center mg-bt20">						
					<div class="container-wrap align-items-center w70 pd10">
						# <?=$post['id'].'- '. $post['parrafo']?>				
					</div>					
					<div class="w30 pd10 container">
						<a href="post_edit.php?id=<?=$post['id']?>" class="btn btn-azul" title="Editar"><i class="fas fa-pen"></i></a>
						<a href="models/post_delete.php?id=<?=$post['id']?>" class=" btn btn-rojo" title="Borrar"> <i class="fas fa-trash-alt"></i></a>
					</div>					
				</div>
				<?php endwhile;
					else: ?>
						<div class="container-wrap align-items-center mg-bt20">
							<h2 class="sinpost">No hay publicaciones que mostrar</h2>
						</div>
				<?php endif; ?>				
			</div>
		</div>
		<!-- center -->
		<?php borrarErrores(); ?>	
	</section>
<!-- <script src="../assets/js/i22mquery.js"></script> -->
