<?php
require_once'../Conexiones/conexion.php';

if(isset($_POST['RegistroUser'])){


$Id_Usuarios=$_POST["Usuario"];
$Nombre=$_POST["Nombre"]; 
$Apellido=$_POST["Apellido"];
$Correo=$_POST["Correo"];
$Password=$_POST["Password"];
$Telefono=$_POST["Telefono"];
$Direccion=$_POST["Direccion"];
$Rol=$_POST["Rol"];

	$sql = " INSERT INTO registros (Id_Usuarios, Nombre, Apellido, Correo, Password,  Telefono, Direccion, Rol ) VALUES (
			:Id_Usuarios,  :Nombre,  :Apellido, :Correo, :Password, :Telefono, :Direccion, :Rol)";

$stmt=$pdo->prepare($sql);

if($stmt->execute([
	':Id_Usuarios'=>$Id_Usuarios,
	':Nombre'=>$Nombre,
	':Apellido'=>$Apellido,
	':Password'=>$Password,
	':Correo'=>$Correo,
	':Telefono'=>$Telefono,
	':Direccion'=>$Direccion,
	':Rol'=>$Rol
	
]))
	
{
	echo "<script> alert('Registro terminado con exito ');
	window.location.href='../index.php';
</script>" ;

}

else{
 	echo "<script> alert('Usuario ya definido Ingrese otro usuario'); window.location.href='../Registro.php'; </script>";
 }
}else{
	echo "<script> alert(URL no localizada'); window.location.href='../index.php'; </script>";
}

?>