<?php
require_once'../Conexiones/conexion.php';


$Empleado=$_GET["accion"];



$sql="DELETE from Empleados WHERE Identificacion=:accion";

$stmt=$pdo->prepare($sql);


	if ($stmt->execute([
	':accion'=>$Empleado
	
		]));
	
{
	echo "<script> alert('Eliminado ');
	window.location.href='../Acceso.php';
</script>" ;

	
	
}

?>