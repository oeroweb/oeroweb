<?php 
	session_start();

	if(isset($_SESSION['session_oerosession'])){
		session_destroy();
	}
	header('Location: ../index.php');
 ?>
