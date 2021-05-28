<?php

require_once'../Conexiones/conexion.php';

 
	session_start();


	
	$Usuario = $_POST["Usuario"];
	$Password = $_POST["Password"];
	    
	$sql="SELECT Usuario, Password, Nombre, Identificacion, Telefono, Direccion, Rol from registro where Usuario= :Usuario and password= :Password ";

	
	$stmt=$pdo->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->execute([
		':Usuario'=>$Usuario,
		':Password'=>$Password,
		
		// 'Identificacion' =>$Identificacion,
		]);

	$dato=$stmt->fetch();


	if($dato['Rol'] == 1){

		$_SESSION['Usuario'] = $Usuario;
		$_SESSION['Password'] = $Password;
		
		

		header("location: ../Acceso.php");
		
	} if($dato['Rol'] == 2){

		$_SESSION['Usuario'] = $Usuario;
		$_SESSION['Password'] = $Password;
		

		header("location: ../AccesoUser.php");
		
	}

	else {
		
		echo "<script> alert('Usuario incorrecto ');
			window.location.href='../index.php';	
		</script>" ;

	}

?>