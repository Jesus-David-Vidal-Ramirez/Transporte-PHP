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




	$Empleado=$_GET["accion"];

	$sql="DELETE from Empleados WHERE Id_Empleados=:accion";

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