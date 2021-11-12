<?php 

require_once'../Conexiones/conexion.php';
// HAY QUE VALIDAR QUE LA BUSETA TENGA PLACA UNICA 

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
