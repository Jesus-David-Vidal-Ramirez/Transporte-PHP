<?php 

require_once'../Conexiones/conexion.php';

session_start();
    if(!isset($_SESSION['Usuario'])):
    
?>
<script>
  alert("Acceso denegado ");
  window.location.href="../index.php";
</script>

<?php

    endif;

?>
<?php
$usuario=$_GET["accion"];


echo $usuario;
$sql="DELETE from registros WHERE usuario=:accion";

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
