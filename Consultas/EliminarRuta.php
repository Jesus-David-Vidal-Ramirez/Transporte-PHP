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

$Ruta=$_GET["accion"];

$sql="DELETE from rutas WHERE Id_Rutas=:accion";

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
	