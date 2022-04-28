<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="container-wrap">
			<div class="w25">				
				<div class=" al-ct aniview" data-av-animation="fadeInUp">
					<a href="index.php"> <img src="../assets/img/oeroweb-black.png" class="img-footer" alt="Logo OeroWeb"></a>
				</div>
			</div>				
			<div class="w25">				
				<div class=" aniview" data-av-animation="fadeInUp">
					<h4>Datos</h4>						
					<div class="">
						<p> <a href="mailto:info@oeroweb.com"> <i class="fas fa-envelope"></i> info@oeroweb.com</a></p>				
						<p><a href="tel:+051991703456"><i class="fas fa-phone-square"></i> 991 703 456</a> | <a href="tel:+051951708889"> 951 708 889</a></p>		
						<p><a href="https://www.facebook.com/oeroweb/"><i class="fab fa-facebook"></i> facebook.com/oeroweb</a></p>										
					</div>									
				</div>
			</div>				
			<div class="w25">		
				<div class=" aniview" data-av-animation="fadeInUp">
					<h4>Páginas</h4>						
					<ul class="">
						<li><i class="fa fa-check"></i> <a href="../index.php">INICIO</a></li>
						<li><i class="fa fa-check"></i> <a href="../servicios.php">SERVICIOS</a></li>
						<li><i class="fa fa-check"></i> <a href="../sobremi.php">SOBRE MI</a></li>
						<li><i class="fa fa-check"></i> <a href="../portafolio.php">PORTAFOLIO</a></li>
						<li><i class="fa fa-check"></i> <a href="../contacto.php">CONTÁCTANOS</a></li>
					</ul>										
				</div>
			</div>
			<div class="w25">
				<div class=" aniview" data-av-animation="fadeInUp">
					<h4>Portafolio</h4>
					<ul>		
						<li><i class="fa fa-check"></i> <a href="http://zilsys.net.pe" target="_blank">Zilsys Sac</a></li>
						<li><i class="fa fa-check"></i> <a href="http://logremos21.com/index.php" target="_blank">Logremos 21</a></li>
						<li><i class="fa fa-check"></i> <a href="http://luismonar.com/" target="_blank">Monar Consultoría de Empresas Familiares</a></li>
						<li><i class="fa fa-check"></i> <a href="http://i22m.com/index.php" target="_blank">Consulting I22m</a></li>
						<li><i class="fa fa-check"></i> <a href="http://demotiendavirtual.oeroweb.com/es/" target="_blank">Demo Tienda Virtual</a></li>
						<li ><i class="fa fa-check"></i> <a href="https://cajeforest.com/index.php" target="_blank">Cajeforest</a></li>
						<li><i class="fa fa-check"></i> <a href="https://expertia.com.pe/" target="_blank">Expertia</a></li>
						<li><i class="fa fa-check"></i><a href="http://inkachallenge.oeroweb.com" target="_blank">Inkachallenge</a></li>							
						<li><i class="fa fa-check"></i> <a href="http://ieinavalstellamaris.oeroweb.com" target="_blank">Stella Maris</a></li>							
					</ul>						
				</div>
			</div>		
		</div>		
		<div class="w100 container-wrap justify-content-center">
			<div class="aniview" data-av-animation="fadeInUp">
				<p class="footer-text">Copyright &copy; 2016 - <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados  <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://www.oeroweb.com">oeroweb</a> | <a href="politica-privacidad.php">Politica de Privacidad</a></p>				
			</div>
		</div>
	</footer>
	<div class="btnWhatsapp">
		<div class="popup-what" id="popup-what">
			<div class="box1 container-wrap">
				<div class="box-ico ">
					<i class="fab fa-whatsapp"></i>
				</div>
				<div class="box-text w80">
					<span class="bold">¿De qué modo te puedo ayudar?</span>
					<p>Eres emprendedor o empresario, cuentanos tu proyecto</p>
				</div>
			</div>
			<div class="box2">
				<a href="https://api.whatsapp.com/send?phone=51991703456&text= Solicito%20información%20sobre%20tus%20servicios%20Web.%20Gracias." target="_blank"> 
					<div class="container-wrap">
						<!-- <i class="fa fa-whatsapp w10 green"></i>  -->
						<span class="w80"> OEROWEB <br> <span class="gris">Oeroweb</span> </span>
						<i class="fab fa-whatsapp"></i>
					</div>				
				</a>
			</div>
		</div>
		<span class="text-whatsapp" id="text-whatsapp">Escribenos </span>
		<span class="ico-whatsapp" id="ico-whatsapp">
			<i class="fab fa-whatsapp"></i>		
		</span>
	</div> 

	<span class="ir-arriba" title="Subir"><i class="fa fa-chevron-up"></i></span>	
	<!--================End Footer Area =================-->
	<script type="text/javascript">
	 	const currentLocation = location.href;
    const menuItem = document.querySelectorAll(".nav-link");
    const menuLenght = menuItem.length
    for (let i = 0; i < menuLenght; i++) {
        if (menuItem[i].href === currentLocation) {
            // menuItem[i].className = "active"
            menuItem[i].classList.add("active");
        }
			}	
	</script>


<!-- MY STYLES -->
<script src="../assets/js/jquery.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>

<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/oeroquery.js"></script>
<script src="../assets/js/backquery.js"></script>
<script src="../assets/js/jquery.aniview.js"></script>