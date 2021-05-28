<?php

require_once'../Conexiones/conexion.php';

$Identificacion=$_POST["Identificacion"];
$Nombre=$_POST["Nombre"]; 
$Apellido=$_POST["Apellido"];
$Correo=$_POST["Correo"];
$Telefono=$_POST["Telefono"];
$Direccion=$_POST["Direccion"];



	$sql = " INSERT INTO Empleados (Identificacion, Nombre, Apellido, Correo, Telefono, Direccion) VALUES (

			:Identificacion, :Nombre, :Apellido, :Correo, :Telefono, :Direccion)";

$stmt=$pdo->prepare($sql);

if($stmt->execute([
	':Identificacion'=>$Identificacion,
	':Nombre'=>$Nombre,
	':Apellido'=>$Apellido,
	':Correo'=>$Correo,
	':Telefono'=>$Telefono,
	':Direccion'=>$Direccion,
	
]))
	
{
	echo "<script> alert('Empleado Registrado con exito ');
	window.location.href='../Acceso.php';
</script>" ;

}

else{
 	echo "<script> alert('Correo ya definido Ingrese otro Correo'); window.location.href='../Registro.php'; </script>";
 }


?>