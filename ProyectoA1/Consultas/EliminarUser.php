<?php 

require_once'../Conexiones/conexion.php';


$usuario=$_GET["accion"];


echo $usuario;
$sql="DELETE from registro WHERE usuario=:accion";

$stmt=$pdo->prepare($sql);


	if ($stmt->execute([
	':accion'=>$usuario
	
		]));
	
{
	echo "<script> alert('eliminado ');
	window.location.href='../Acceso.php';
</script>" ;

	
	
}

?>
