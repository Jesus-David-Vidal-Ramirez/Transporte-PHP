<?php 

require_once'../Conexiones/conexion.php';
// HAY QUE VALIDAR QUE LA BUSETA TENGA PLACA UNICA 

$buseta=$_GET["accion"];

$sql="DELETE from Busetas WHERE Placa=:accion";

$stmt=$pdo->prepare($sql);


	if ($stmt->execute([
	':accion'=>$buseta
	
		]));
	
{
	echo "<script> alert('eliminado ');
	window.location.href='../Acceso.php';
</script>" ;

}

?>
