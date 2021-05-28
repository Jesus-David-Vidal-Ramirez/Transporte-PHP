<?php 

require_once'../Conexiones/conexion.php';


$Ruta=$_GET["accion"];

$sql="DELETE from rutas WHERE Id=:accion";

$stmt=$pdo->prepare($sql);


	if ($stmt->execute([
	':accion'=>$Ruta,
		]));
	
{
	echo "<script> alert('Ruta Eliminada');
	window.location.href='../Acceso.php';
</script>" ;

}

?>
