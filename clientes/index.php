<?php  include '../layout/header_up.php' ?>	
<?php  include '../layout/navbar_up.php' ?>	

<section class="titulo_area">		
	<div class="container-wrap justify-content-center">
		<div class="titulo_texto">
			<h2>Zona Clientes</h2>
		</div>
	</div>		
</section>
<div class="clientes_area">
  <div class="aniview" data-av-animation="fadeInUp">
    <div class="box-formulario w70 mg-auto">
      <form action='' method="post" id="formclientes" class="formclientes">
        <h4 class="titulo">Hablemos sobre tu proyecto</h4>	
        <?php if(!empty($errores)): ?>
          <div class="mensaje">
            <?php echo $errores; ?>
          </div>				
        <?php endif; ?>        
          <label class="label">¿Escribe tu nombre domino?</label> 
          <span class="box-info"><i class="fas fa-exclamation-triangle"></i> <span class="info">El dominio web es el nombre de tu marca, equivalente a una dirección física. Un dominio de internet se forma a partir de dos elementos principales. <br />Ejemplo: nombredominio.com;  nombredetuempresa.com</span></span>
          <div class="inputBox">
            <input type="text" class="form-control w50" name="dominio" id="dominio" placeholder="tudominio.com" required> 
            <input type="text" name="nombreDominio" class="nombreDominio form-control w50" readonly>            
          </div>

          <label class="label">¿Escribe tu(s) correos a crear?</label> 
          <span class="box-info"><i class="fas fa-exclamation-triangle"></i> <span class="info">El  correo puede ser por nombre de areas o nombre de usuarios según sea su preferencia. <br />Ejemplo: ventas@nombredominio.com, nombreapellido@nombredominio.com</span> </span> 
          <div class="container-wrap align-items-center mg-bt20">
            <label for="cant" class="pd20">Escribe tus Correos </label>
            
            <div class=" al-ct">
              <a href="#" class="btn" id="btn-mas"> <i class="fas fa-plus"></i> </a>           
            </div>
          </div>
          <table class="tabla w100">
            <thead>
              <tr>
                <th class="w20 al-ct">Usuario</th>
                <th class="w20 al-ct">Dominio</th>
                <th class="w20 al-ct">Correo</th>
                <th class="w20 al-ct">Clave</th>                                
              </tr>
            </thead>
            <tbody class="tbody">
            <tr class="fila">
              <td class=" al-ct"><input type="text" name="usuario" class="usuario form-control "></td>
              <td class=" al-ct"><input type="text" class="tuDominio form-control" readonly></td>
              <td class=" al-ct"><input type="email" name="email" class="email form-control"></td>
              <td class=" al-ct"><input type="text" name="clave" class="clave form-control" id="clave"></td>
              
            </tr>           
            </tbody>            
          </table>               					
          <div class="inputBox ">	
            <label>Escribe una consulta, comentario sobre el proyecto</label>
            <textarea name="mensaje" class="form-control" cols="10" rows="5" value=""></textarea>
          </div>
          <input class="btn" type="submit" value="Enviar" >		
      </form>	
    </div>      
  </div>
<?php  include '../layout/footer_up.php' ?>	

<script>
$(document).ready(function(){
  $("#btn-mas").click(function(){
    filas = `
    <tr class="fila">
      <td class=" al-ct"><input type="text" name="usuario" class="form-control "></td>
      <td class=" al-ct"><input type="text" class="tuDominio form-control" readonly></td>
      <td class=" al-ct"><input type="email" name="email" class="form-control"></td>
      <td class=" al-ct"><input type="text" name="clave" class="form-control" id="clave"></td>      
    </tr> 
    `; 
    $(".tbody").append(filas);
  });

  $("[name=usuario]").val()
  
});

</script>