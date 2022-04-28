<?php include('layout/header.php');
  include('back/helpers.php'); ?>  
<body>
  <?php include('layout/navbar.php'); ?>

  <div class="center">
    <div class="container-wrap">
      <section class="blog">      
        <div class="box-blog">
          <div class="box-titulo container-wrap space-between">
            <h2 class="titulo">Publicaciones</h2>
            <a href="#" class="btn-boxtitulo"> Mostrar más</a>     
          </div>          
          <?php 
            $bloggers = todos_blog($db);
            if(!empty($bloggers) && mysqli_num_rows($bloggers) >= 1):
              while($blog = mysqli_fetch_assoc($bloggers)):		
          ?>	
          <a href="publicacion.php?id=<?=$blog['id']?>" class=" articulos">
            <div class="container-wrap">
              <div class="img-publicacion">
                <?php if($blog['imagen'] != null) :?>
                  <img src="assets/img/blog/<?=$blog['imagen']?>" class="img-blog" alt="">
                <?php else : ?>
                  <img src="assets/img/blog/logo.png" class="img-blog" alt="">
                <?php endif; ?>
              </div>
              <div class="texto-publicacion">
                <h2 class="titulo-blog"><?=$blog['titulo']?></h2>
                <p><?=substr($blog['parrafo'],0,200)." ..."?> </p>   
                <p class="fecha"><i class="ico far fa-calendar-alt"></i><?=$blog['fechacreacion']?></p>                     
              </div>
            </div>
          </a>
          <?php endwhile;
            else: ?>
              <div class="container-wrap align-items-center mg-bt20">
                <h3 class="sinpost">No hay publicaciones que mostrar</h3>
              </div>
          <?php endif; ?>
          <div class="box-footer container-wrap space-between">
            <!-- <h2 class="titulo">Publicaciones</h2> -->
            <a href="#" class="btn-boxtitulo"> Mostrar más</a>     
          </div>  
          
        </div>
        <h2 class="titulo">  Redes Sociales</h2> 
        <div class="postredes">   
          <div class="container-wrap">
            <?php 
                $bloggers = todos_postredes($db);
                if(!empty($bloggers) && mysqli_num_rows($bloggers) >= 1):
                  while($blog = mysqli_fetch_assoc($bloggers)):		
              ?>	
            <div class="articulos">
              <?=$blog['parrafo']?>        
            </div>
            <?php endwhile;
              else: ?>
              <div class="container-wrap align-items-center mg-bt20">
              <h3 class="azul">No hay publicaciones que mostrar</h3>
              </div>
            <?php endif; ?>      
          </div>
        </div>
      </section>
      <aside class="aside-blog">
        <div class="box-aside">
          <h2 class="titulo">Categorías</h2>        
        </div>
      </aside>
    </div>
  </div>


<?php include ('layout/footer.php'); ?>

