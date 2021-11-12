<?php

	require_once'../Conexiones/conexion.php';

	if(isset($_POST['Editado'])){
	$Usuario=$_POST["Usuario"];
	$Nombre=$_POST["Nombre"];
	$Apellido=$_POST["Apellido"];
	$Password=$_POST["Password"];
	$Correo=$_POST["Correo"];
	$Telefono=$_POST["Telefono"];
	$Direccion=$_POST["Direccion"];
	$Rol=$_POST["Rol"];
	// echo 'usu ' .$Usuario;
	// echo 'nom ' .$Nombre;
	// echo 'ape ' .$Apellido;
	// echo 'pas ' .$Password;
	// echo 'core ' .$Correo;
	// echo 'telu ' .$Telefono;
	// echo 'diru ' .$Direccion;
	// echo 'rol ' . $Rol;

	

		// UPDATE `registros` SET `Direccion` = 'Calle' WHERE `registros`.`Id_Usuarios` = 1;

	$sql="UPDATE registros SET  Nombre='$Nombre', Apellido='$Apellido', Correo='$Correo', Password='$Password', Telefono='$Telefono' , Direccion='$Direccion' , Rol= '$Rol' WHERE Id_Usuarios= :Usuario ";

	$stmt=$pdo->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->execute([
		
		':Usuario'=>$Usuario,

		]);


	$Usuario=$stmt->fetch();

	
	echo "<script> alert('Editado con Exito!'); window.location.href='../Acceso.php'; </script>" ;
	}else{
		echo "<script> alert('URL NO ENCONTRADA'); window.location.href='../Acceso.php'; </script>" ;
	}
?>

