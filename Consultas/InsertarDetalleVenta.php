<?php

//$Id_Venta;
require_once'../Conexiones/conexion.php';

if(isset($_POST['enviar'])){
$Id_Ruta     = $_POST['Id_Ruta'];
$Id_Usuarios =$_POST['Id_Usuarios'];
$Cantidad    = $_POST['Cantidad'];
$Precio      = $_POST['Precio'];
$Total       = $Cantidad  * $Precio;
$NombreRuta  =$_POST['NombreRuta'];
$Tipo        = $_POST['Tipo'];
$Fecha        = $_POST['Fecha'];

// Comprobando si se hizo compra o reserva
$compra = $_POST['Compra'];
$reservas = $_POST['Reserva'];
// Variable cambiante para alerta de mensaje
$cambiante = 'No entro';




$sql = "INSERT INTO `senatransporte`.`detalleventas` (`Id_Rutas`, `Id_Usuarios`, `Cantidad`, `Precio`, `Total`, `NombreRuta`, `Tipo`, `Fecha`) VALUES (:Id_Ruta, :Id_Usuarios, :Cantidad, :Precio, :Total, :NombreRuta, :Tipo, :Fecha);";

$stmt=$pdo->prepare($sql);

	if($stmt->execute([
		':Id_Ruta'=>$Id_Ruta,
		':Id_Usuarios'=>$Id_Usuarios,
		':Cantidad'=>$Cantidad,
		':Precio'=> $Precio,
		':Total'=> $Total,
		':NombreRuta'=> $NombreRuta,
		':Tipo'=> $Tipo,
		':Fecha'=> $Fecha,
		]))
	{


if(empty($compra)){
	$cambiante = "Reservas";	
}

if(empty($reservas)){
	$cambiante = "Compra";
}
	
	echo "<script> alert('Se guardó la $cambiante con exito ');
		window.location.href='../AccesoUser.php';
	</script>" ;
		

	}else{
		echo "<script> alert('Error ');
		window.location.href='../AccesoUser.php';
	</script>" ;
		//echo 'Error------' ;
		
	}


}else{
	echo "<script> alert('URL No encontrada');
		window.location.href='../AccesoUser.php';
	</script>" ;
}

 

?>