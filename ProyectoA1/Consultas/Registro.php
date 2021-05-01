<?php
require_once'../Conexiones/conexion.php';


$Usuario=$_POST["Usuario"];
$Password=$_POST["Password"];
$Nombre=$_POST["Nombre"]; 
$Identificacion=$_POST["Identificacion"];
$Telefono=$_POST["Telefono"];
$Direccion=$_POST["Direccion"];
$Rol=$_POST["Rol"];


	$sql = " INSERT INTO registro (Usuario, Password, Nombre, Identificacion, Telefono, Direccion, Rol ) VALUES (
			:Usuario, :Password, :Nombre, :Identificacion, :Telefono, :Direccion, :Rol)";

$stmt=$pdo->prepare($sql);

if($stmt->execute([
	':Usuario'=>$Usuario,
	':Password'=>$Password,
	':Nombre'=>$Nombre,
	':Identificacion'=>$Identificacion,
	':Telefono'=>$Telefono,
	':Direccion'=>$Direccion,
	':Rol'=>$Rol,
]))
	
{
	echo "<script> alert('Registro terminado con exito ');
	window.location.href='../index.php';
</script>" ;

}

else{
 	echo "<script> alert('Usuario ya definido Ingrese otro usuario'); window.location.href='../Registro.php'; </script>";
 }

?>