<?php 
  include('layout/header.php');
  // include ('layout/navbar.php'); 
  
  if(!isset($_POST)){
		header("Location:index.php");
	}else{
		require_once ('back/helpers.php');
		$id = $_GET['id'];
	}

?>
<body>
  <!-------------- INICIO DE PAGINA -------------->
  <?php include('layout/navbar.php'); ?> 
  <main id="main">
    <!------ HEADER ------>

  <section class="verblog">
    <?php 
      $bloggers = conseguir_blog($db,$id);
      if(!empty($bloggers) && mysqli_num_rows($bloggers) >= 1):
        while($blog = mysqli_fetch_assoc($bloggers)):		
    ?>
    <div class="center">        
      <div class="container-wrap">
        <div class="box-verblog w60 ">  
          <h2 class="titulo al-ct "><?=$blog['titulo']?></h2>                  
          <?php if($blog['imagen'] != null) : ?>
          <div class="mg-bt10">
            <img src="assets/img/blog/logo.png" class="img-blog" alt="">            
          </div>          
          <?php else: ?>
          <div class="mg-bt10">
            <img src="assets/img/blog/<?=$blog['imagen']?>" class="img-blog" alt="">            
          </div>  
          <?php endif; ?>
          <p><i class="fad fa-user"></i> OeroWeb</p>        
          <p><img src="assets/css/webfonts/user-pro.svg" alt=""> OeroWeb</p>        
          <?=$blog['parrafo']?>          
          <p class="url"><a href="<?=$blog['link_url']?>"><?=$blog['link_url']?></a></p>         
          <span class="fecha"><i class="ico far fa-calendar-alt"></i><?=$blog['fechacreacion']?></span>         
          <?php endwhile;
            endif; 	?>	
            <div class="w100 al-ct pd20">
              <a href="index.php" class="btn btn-azul">Regresar</a>
            </div>          
        </div>
        <aside class="aside-blog">
          <div class="box-aside">
            <h2 class="titulo">Categorías</h2>        
          </div>
        </aside>      
      </div>      
      <!------ container ------->

    </div>
</section>

<?php include ('layout/footer.php'); ?>

