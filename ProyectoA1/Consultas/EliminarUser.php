<?php 

require_once'../Conexiones/conexion.php';


$usuario=$_GET["accion"];


echo $usuario;
$sql="DELETE from registro WHERE usuario=:accion";

$stmt=$pdo->prepare($sql);
//$stmt->setFetchMode(PDO::FETCH_ASSOC);

	if ($stmt->execute([
	':accion'=>$usuario
	
		]));


	
{
	echo "<script> alert('eliminado ');
	window.location.href='../Acceso.php';
</script>" ;

	
	//header("location:Index.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>
		Estas en eliminar mijo <?php echo $usuario ?>
	</h1>
</body>
</html>