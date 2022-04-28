<?php  include 'layout/header.php' ?>	
<?php  include 'layout/navbar.php' ?>	
<style type="text/css">
    .slider {
        width: 100%;
        /* margin: 100px auto; */
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 60%; margin:auto;
    }

    .slick-prev:before,
    .slick-next:before {
			color: #002b4f;
			font-size:32px;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>

	<!--================ INICIO Banner =================-->
<section class="home_banner_area">
	<div class="center">	
		<div class="container-wrap align-items-center">			
				<div class="texto-banner w50 ">
					<div class="banner_content w60 mg-auto  aniview" data-av-animation="fadeInUp">
						<hr>					
						<h1 class="text-uppercase">Oscar Rojas </h1>
						<h5 class="text-uppercase">Web Developers</h5>
						<div class="box-botones ">
							<a class="btn btn-azul" href="portafolio.php"><span>Portafolio</span></a>
							<a class="btn btn-celeste" href="contacto.php"><span>Contáctanos</span></a>
						</div>
					</div>
				</div>
				<div class="imagen-banner w50 " >
					<div class="home_right_img aniview" data-av-animation="fadeInUp">
						<img class="w80 mg-auto" src="assets/img/banner/bg1.svg" alt="imagen fondo izquierdo">
					</div>
				</div>			
		</div>
	</div>
</section>
<!--================ FIN Banner =================-->

<!--================ inicio Servicios =================-->
<section class="servicios_area">
	<div class="center">	
		<div class="w100 justify-content-center">				
			<div class="main_title w60 mg-auto aniview" data-av-animation="fadeInUp">
				<h2>Nuestros Servicios </h2>
				<p>Ponemos a tu disposición una gama completa de servicios para lograr una estrategia efectiva que acelerará tus ventas por internet.
				</p>
			</div>				
		</div>		
		<section class="vertical-center slider">
			<div class="box">
				<div class="container-wrap">
					<div class="w33">
						<div class="servicios_item aniview" data-av-animation="fadeInUp">
							<img src="assets/img/servicios/s1.svg" alt="Diseños de paginas web">
							<h4>Diseño páginas web </h4>
							<p>Diseñamos webs adaptables para cualquier los dispositivos y con alto impacto visual, con los estándares autorizados.</p>
						</div>
					</div>
					<div class="w33">
						<div class="servicios_item aniview" data-av-animation="fadeInUp">
							<img src="assets/img/servicios/s2.svg" alt="Desarrollo de Software">
							<h4>Desarrollo de software</h4>
							<p>Implementamos el servicio de Intranet, herramientas para optimizar los procesos y la productividad.</p>
						</div>
					</div>
					<div class="w33">
						<div class="servicios_item aniview" data-av-animation="fadeInUp">
							<img src="assets/img/servicios/s5.svg" alt="Posicionamiento SEO">
							<h4>Creación de Contenido</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, dolorum!.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="container-wrap">
					<div class="w33">
						<div class="servicios_item aniview" data-av-animation="fadeInUp">
							<img src="assets/img/servicios/s4.svg" alt="Posicionamiento SEO">
							<h4>Community Manager</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, dolorum!.</p>
						</div>
					</div>
					<div class="w33">
						<div class="servicios_item aniview" data-av-animation="fadeInUp">
							<img src="assets/img/servicios/s3.svg" alt="Posicionamiento SEO">
							<h4>Posicionamiento SEO</h4>
							<p>Lograr un gran alcance de tu marca en la red.</p>
						</div>
					</div>			
					<div class="w33">
						<div class="servicios_item aniview" data-av-animation="fadeInUp">
							<img src="assets/img/servicios/s6.svg" alt="Posicionamiento SEO">
							<h4>Auditoría Social Media</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, dolorum!.</p>
						</div>
					</div>
   		 	</div>
			</div>   
  </section>
		
	</div>
</section>
<!--================ fin Servicios =================-->

<!--================ inicio PAQUETES =================-->
<section class="planes_area">
	<div class="center">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-center">
				<div class="main_title aniview" data-av-animation="fadeInUp">
					<h2>Nuestros Planes </h2>
					<p>Soluciones para tu Empresa o Negocio</p>
				</div>
			</div>
		</div>
		<div class="container-wrap planes_inner">				
			<div class="w33">
				<div class="planes_item aniview" data-av-animation="fadeInUp">
					<img src="assets/img/planes/p1.svg" alt="plan emprendedor">
					<h2>PLAN EMPRENDEDOR </h2>
					<!-- <p>Para tí que recién empiezas un plan </p>		 -->
					<ul class="list">
						<li><i class="fa fa-check"></i> Diseño y desarrollo del sitio web</li>
						<li><i class="fa fa-check"></i> Integración con redes Sociales</li>
						<li><i class="fa fa-check"></i> Integración con Whatsapp</li>
						<li><i class="fa fa-check"></i> Posicionamiento SEO</li>
						<li><i class="fa fa-check"></i> Formulario de Contacto</li>
						<li><i class="fa fa-check"></i> Ubicación con Goggle Maps</li>
						<li><i class="fa fa-check"></i> Dominio y Hosting por 1 año</li>
					</ul>
					<h4 class="subtitlo">SOCIAL MEDIA </h4>
					<ul class="list">
						<li><i class="fa fa-check"></i> Diagnóstico de redes sociales.</li>
						<li><i class="fa fa-check"></i> Elaboración de 4 piezas gráficas.</li>
						<li><i class="fa fa-check"></i> Diseño de un gift.</li>
						<li><i class="fa fa-check"></i> Diseño de un banner para Facebook.</li>						
					</ul>		
					<a href="#" class="btn btn-primary" id="emprendedor" >Solicitar Plan</a>
				</div>
			</div>
			<div class="w33">
				<div class="planes_item aniview" data-av-animation="fadeInUp">
					<img src="assets/img/planes/p2.svg" alt="Plan Digital plus">
					<h2>PLAN DIGITAL PLUS</h2>
					<ul class="list">
						<li><i class="fa fa-check"></i> Diseño y desarrollo del sitio web</li>
						<li><i class="fa fa-check"></i> Integración con redes Sociales</li>
						<li><i class="fa fa-check"></i> 2 a 3 Sección Administrables</li>
						<li><i class="fa fa-check"></i> Integración con Whatsapp</li>
						<li><i class="fa fa-check"></i> Posicionamiento SEO</li>
						<li><i class="fa fa-check"></i> Formulario de Contacto</li>
						<li><i class="fa fa-check"></i> Ubicación con Goggle Maps</li>
						<li><i class="fa fa-check"></i> Ingretación con base de datos</li>
						<li><i class="fa fa-check"></i> Dominio y Hosting por 1 año</li>
					</ul>
					<h4 class="subtitlo">SOCIAL MEDIA </h4>
					<ul class="list">
						<li><i class="fa fa-check"></i> Diagnóstico de redes sociales.</li>
						<li><i class="fa fa-check"></i> Elaboración de 8 piezas gráficas.</li>
						<li><i class="fa fa-check"></i> Diseño de un gift.</li>
						<li><i class="fa fa-check"></i> Diseño de un banner para Facebook.</li>						
						<li><i class="fa fa-check"></i> Reporte estadístico mensual..</li>						
					</ul>	
					<a href="#" class="btn btn-primary" id="micro" >Solicitar Plan</a>
				</div>
			</div>
			<div class="w33">
				<div class="planes_item aniview" data-av-animation="fadeInUp">
					<img src="assets/img/planes/p3.svg" alt="Plan Digital Premium ">
					<h2>PLAN DIGITAL PREMIUM </h2>
					<ul class="list">
						<li><i class="fa fa-check"></i> Diseño y desarrollo del sitio web</li>
						<li><i class="fa fa-check"></i> Integración con redes Sociales</li>
						<li><i class="fa fa-check"></i> 4 a más Sección Administrables</li>
						<li><i class="fa fa-check"></i> Integración de chat / Whatsapp</li>
						<li><i class="fa fa-check"></i> Formulario de Contacto</li>
						<li><i class="fa fa-check"></i> Servicio de Notificaciones</li>
						<li><i class="fa fa-check"></i> Posicionamiento SEO</li>
						<li><i class="fa fa-check"></i> Ubicación con Goggle Maps</li>
						<li><i class="fa fa-check"></i> Ingretación con base de datos</li>
						<li><i class="fa fa-check"></i> Dominio y Hosting por 1 año</li>
					</ul>
					<h4 class="subtitlo">SOCIAL MEDIA </h4>
					<ul class="list">
						<li><i class="fa fa-check"></i> Diagnóstico de redes sociales.</li>
						<li><i class="fa fa-check"></i> Elaboración de 12 piezas gráficas.</li>
						<li><i class="fa fa-check"></i> Diseño de 2 gift.</li>
						<li><i class="fa fa-check"></i> Diseño de un banner para Facebook.</li>						
						<li><i class="fa fa-check"></i> Edición de un video mensual (max. de 1 minuto).</li>						
						<li><i class="fa fa-check"></i> Reporte estadístico mensual..</li>						
					</ul>	
					<a href="#" class="btn btn-primary" id="macro" >Solicitar Plan</a>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ fin ServPaquetesicios =================-->

<!--================ inicio Portfolio =================-->
<section class="portafolio_area" id="portfolio">
	<div class="center">
		<div class="w100">		
			<div class="main_title text-left aniview" data-av-animation="fadeInUp">
				<h2>Portafolio </h2>
			</div>			
		</div>
		<div class="enlaces w100">
			<ul class="container-wrap justify-content-center">
				<li class="list active" data-filter="all">Todas las Categorías</li>
				<li class="list" data-filter="disenoWeb">Diseño Web</li>
				<li class="list" data-filter="socialMedia"> Social Media</li>
				<li class="list" data-filter="branding"> Branding</li>
			</ul>
		</div>
		<div class="filters-content">
			<div class="w100 container-wrap justify-content-center">
				<!-- LOGREMOS 21 -->
				<div class="w33 portafolio_box disenoWeb">
					<div class="aniview" data-av-animation="fadeInUp">	
						<img class="img-portafolio" src="assets/img/pages/paglogremos.png" alt="Logremos 21">			
						<div class="overlay">
							<div class="box-overlay">
								<h3> Logremos21, Cambiar, creer y Lograr</h3>
								<p><a href="http://logremos21.com/" target="_blank">http://logremos21.com/</a></p>	
							</div>
						</div>
					</div>
				</div>
				<!-- LUIS MONAR -->
				<div class="w33 portafolio_box socialMedia">
					<div class=" aniview" data-av-animation="fadeInUp">	
						<img class="img-portafolio" src="assets/img/pages/pagmonar.png" alt="Empresas Familiares Perú">			
						<div class="overlay">
							<div class="box-overlay">
								<h3>Empresas Familiares Perú</h3>
								<p><a href="http://luismonar.com/" target="_blank">http://luismonar.com/</a></p>	

							</div>
						</div>
					</div>
				</div>
				<!-- CONSULTING I22M -->
				<div class="w33 portafolio_box disenoWeb">
					<div class=" aniview" data-av-animation="fadeInUp">	
						<img class="img-portafolio" src="assets/img/pages/pagi22m.png" alt="Consulting i22m">			
						<div class="overlay">
							<div class="box-overlay">
								<h3>Consulting I22M</h3>
								<p><a href="http://i22m.com/" target="_blank">http://i22m.com/</a></p>
							</div>
						</div>
					</div>
				</div>
				<!-- TIENDA VIRTUAL YUYUWAYU -->
				<div class="w33 portafolio_box disenoWeb">
					<div class=" aniview" data-av-animation="fadeInUp">		
						<img class="img-portafolio" src="assets/img/pages/pagyuyuwayu.png" alt="Yuyuwayu - Tienda Virtual">		
						<div class="overlay">
							<div class="box-overlay">
								<h3>Yuyuwayu - Tienda Virtual</h3>
								<p><a href="http://yuyuwayu.com/" target="_blank">http://yuyuwayu.com/</a></p>
							</div>
						</div>
					</div>
				</div>
				<!-- CAJEFOREST -->
				<div class="w33 portafolio_box disenoWeb">
					<div class=" aniview" data-av-animation="fadeInUp">		
						<img class="img-portafolio" src="assets/img/pages/pagcajeforest.png" alt="Página Cajeforest">		
						<div class="overlay">
							<div class="box-overlay">
								<h3>Cajeforest</h3>
								<p><a href="https://www.cajeforest.com/" target="_blank">https://www.cajeforest.com/</a></p>
							</div>
						</div>
					</div>
				</div>			
				<!-- EXPERTIA -->
				<div class="w33 portafolio_box branding">
					<div class=" aniview" data-av-animation="fadeInUp">		
						<img class="img-portafolio" src="assets/img/pages/paginaexp.png" alt="Página Cajeforest">		
						<div class="overlay">
							<div class="box-overlay">
								<h3>Expertia</h3>
								<p><a href="https://expertia.com.pe/" target="_blank">https://expertia.com.pe/</a></p>
							</div>
						</div>
					</div>
				</div>														
			</div>
		</div>
		<div class="w100 al-ct">
			<a class="btn" href="portafolio.php">Ver Mas </a>
		</div>
	</div>
</section>

<!--=============== Start Testimonial Area ============-->
	<div class="testimonial_area">
		<div class="center">
			<div class="w100 justify-content-center">				
				<div class="main_title aniview" data-av-animation="fadeInUp">
						<h2>Testimonios </h2>
						<p>Lo que opinan nuestros clientes </p>
				</div>				
			</div>
			<div class="owl-carousel">			
				<div class="testi_item">								
					<img src="assets/img/avatar/male.png" class="img-testimonios">
					<div class="testi_text">
						<span>IEI NAVAL STELLA MARIS</span>
						<h4>Junior Guerrero</h4>
						<p>Diseños elegantes,fácil de comprender, fue realizada según las especificaciones requeridas.</p>
						<p>Muy servicial,siempre buscando que la página cumpla con mis expectativas.</p>
						<p>Link : <a href="http://ieinavalstellamaris.oeroweb.com" target="_blank">http://ieinavalstellamaris.oeroweb.com/</a></p>	
					</div>						
				</div>
				<div class="testi_item">								
					<img src="assets/img/avatar/male.png" class="img-testimonios">
					<div class="testi_text">
						<span>ZAPATERIA MARITA JK</span>
						<h4>Juan Reyes</h4>
						<p>Excelente profesional responsable, cumplidor con los plazos de entrega</p>
						<p>Link : <a href="http://zapateriamaritajk.oeroweb.com" target="_blank">http://zapateriamaritajk.oeroweb.com/</a></p>	
					</div>						
				</div>
				<div class="testi_item">								
					<img src="assets/img/avatar/male.png" class="img-testimonios">
					<div class="testi_text">
						<span>ZAPATERIA MARITA JK</span>
						<h4>Juan Reyes</h4>
						<p>Excelente profesional responsable, cumplidor con los plazos de entrega</p>
						<p>Link : <a href="http://zapateriamaritajk.oeroweb.com" target="_blank">http://zapateriamaritajk.oeroweb.com/</a></p>	
					</div>						
				</div>				
				<div class="testi_item">								
					<img src="assets/img/avatar/male.png" class="img-testimonios">
					<div class="testi_text">
						<span>MERVICK MEDICAL PERÚ SAC</span>						
						<h4>Mercedes Dominguez</h4>
						<p>Muy buena herramienta para promocionar la marca</p>
						<p>Excelente trato servicio muy profesional y eficiente </p>
						<p>Link : <a href="http://mervimed.oeroweb.com" target="_blank">http://mervimed.oeroweb.com/</a></p>	
					</div>						
				</div>
				<div class="testi_item">								
					<img src="assets/img/avatar/male.png" class="img-testimonios">
					<div class="testi_text w100">
						<span>INKA CHALLENGE</span>
						<h4>Freddy Fartolino</h4>
						<p>Página con muy buen diseño amigable y sobretodo bien estructurado. </p>
						<p>Excelente servicio, recomendable.</p>
						<p>Link : <a href="http://inkachallenge.oeroweb.com" target="_blank">Inkachallenge</a></p>		
					</div>						
				</div>

			</div>		
		</div>
	</div>
	<!--================ End Testimonial Area =================-->

	<?php include 'layout/footer.php' ?>	
	
	<!-- carrousel -->
<!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
<script src="assets/slick/slick.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
	$(document).on('ready', function() {
		
			$(".vertical-center").slick({
        dots: true,
        vertical: true,
        centerMode: true,
      });
	});
</script>
</body>
</html>