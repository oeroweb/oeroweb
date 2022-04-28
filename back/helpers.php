<?php 
	include('cn/db.php');

	function mostrarError($errores, $campo){
		$alerta = '';
		if(isset($errores[$campo]) && !empty($campo)){
			$alerta = "<div class='alerta alerta-error'>" .$errores[$campo]."</div>";			
		}
		return $alerta;
	}

	function borrarErrores(){
		$borrado = false;		

		if(isset($_SESSION['completado'])){
			$_SESSION['completado'] = null;
			$borrado = true;
		}

		if(isset($_SESSION['fallo'])){
			$_SESSION['fallo'] = null;
			$borrado = true;
		}	

		return $borrado;
	}
	
	function todos_blog($conexion){
		$sql = "select * from oedb_blog WHERE estado = 1 ORDER by id LIMIT 6 ";		

		$blogger = mysqli_query($conexion, $sql);

		$resultado = array();
		if($blogger && mysqli_num_rows($blogger) >=1){
			$resultado = $blogger;
		}
		return $resultado;
	}

	function conseguir_blog($conexion, $id){
		$sql = "select * from oedb_blog WHERE estado = 1 and id = $id";		

		$blogger = mysqli_query($conexion, $sql);

		$resultado = array();
		if($blogger && mysqli_num_rows($blogger) >=1){
			$resultado = $blogger;
		}
		return $resultado;
	}

	function todos_postredes($conexion){
		$sql = "select * from oedb_postredes WHERE estado = 1 ORDER by id LIMIT 6 ";		

		$blogger = mysqli_query($conexion, $sql);

		$resultado = array();
		if($blogger && mysqli_num_rows($blogger) >=1){
			$resultado = $blogger;
		}
		return $resultado;
	}
	
	function conseguir_postredes($conexion, $id){
		$sql = "select * from oedb_postredes WHERE estado = 1 and id = $id ORDER by id LIMIT 6 ";		

		$blogger = mysqli_query($conexion, $sql);

		$resultado = array();
		if($blogger && mysqli_num_rows($blogger) >=1){
			$resultado = $blogger;
		}
		return $resultado;
	}

	function todos_Webmail($conexion){
		
		$sql = "SELECT * FROM oedb_webmail WHERE estado = 1 ORDER by id LIMIT 6 ";

		$webmail = mysqli_query($conexion, $sql);
		if($webmail && mysqli_num_rows($webmail) >=1){
			$resultado = $webmail;
		}
		return $resultado;
	}

	
?>