<?php

	require_once'../Conexiones/conexion.php';


	$Usuario=$_POST["Usuario"];
	$Password=$_POST["Password"];
	$Nombre=$_POST["Nombre"];
	$Identificacion=$_POST["Identificacion"];
	$Telefono=$_POST["Telefono"];
	$Direccion=$_POST["Direccion"];
	$Rol=$_POST["Rol"];
	

	$sql="UPDATE registro SET Password='$Password' ,  Nombre='$Nombre', Telefono='$Telefono' ,  Identificacion='$Identificacion', Direccion='$Direccion' , Rol=$Rol  WHERE Usuario='$Usuario' ";
	$stmt=$pdo->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->execute([
		
		'Usuario'=>$Usuario

		]);

	$Usuario=$stmt->fetch();

	echo "<script> alert(' Exito!'); window.location.href='../Acceso.php'; </script>" ;
	



?>

