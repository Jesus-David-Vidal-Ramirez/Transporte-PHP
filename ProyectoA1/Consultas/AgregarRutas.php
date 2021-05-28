<?php

require_once'../Conexiones/conexion.php';

$Nombre=$_POST["Nombre"];
$Precio=$_POST["Precio"]; 
$Info=$_POST["Info"];





$sql = " INSERT INTO rutas (Nombre, Precio, Info) VALUES ( :Nombre, :Precio, :Info) ";

$stmt=$pdo->prepare($sql);

if($stmt->execute([
	':Nombre'=>$Nombre,
	':Precio'=>$Precio,
	':Info'=>$Info,
	
]))
	
{
	echo "<script> alert('Ruta Registrada con exito ');
	window.location.href='../Acceso.php';
</script>" ;

}

// else{
//  	echo "<script> alert('Correo ya definido Ingrese otro Correo'); window.location.href='../Registro.php'; </script>";
//  }


?>