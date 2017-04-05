<?php
	if($_POST){
		require '../db/database.php';
		$database = new database();
		$database->nuevaBD();
		$usuario = $database->mostrar_usuario($_POST['user'], md5($_POST['pass']));
		if($usuario->rowCount() == 1){
			session_start();
			$_SESSION['username'] = $row['nombre'];
			$_SESSION['logged'] = TRUE;
			header("Location: ../app.php"); // A la página a la que tenemos que ir
			exit;
		}else{
			header("Location: ../index.php");
			exit;
		}
	}else{    //Si no se ha mandado nada, volvemos al index o la página del login
		header("Location: ../index.php");
		exit;
	}
?>