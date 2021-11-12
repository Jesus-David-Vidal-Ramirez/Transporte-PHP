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

$Reserva=$_GET["accion"];

$sql="DELETE FROM detalleventas WHERE Id_Venta=:accion";

$stmt=$pdo->prepare($sql);


	if ($stmt->execute([
	':accion'=>$Reserva,
		]));
	
{
	echo "<script> alert('Reserva Eliminada');
	window.location.href='../AccesoUser.php';
</script>" ;

}

?>	