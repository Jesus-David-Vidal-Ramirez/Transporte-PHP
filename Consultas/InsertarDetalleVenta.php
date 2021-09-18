<?php

//$Id_Venta;
require_once'../Conexiones/conexion.php';

if(isset($_POST['reservas'])){
$Id_Ruta     = $_POST['Id_Ruta'];
$Id_Usuarios =$_POST['Id_Usuarios'];
$Cantidad    = $_POST['Cantidad'];
$Precio      = $_POST['Precio'];
$Total       = $Cantidad  * $Precio;
$NombreRuta  =$_POST['NombreRuta'];
$Tipo        = $_POST['Tipo'];
$Fecha        = $_POST['Fecha'];


// echo "$Id_Ruta" .'<br>';
// echo "$Id_Usuarios" .'<br>';
// echo "$Cantidad" .'<br>';
// echo "$Precio" .'<br>';
// echo "$Total" .'<br>';
// echo "$NombreRuta" .'<br>';
// echo "$Tipo" .'<br>';
// echo "$Fecha" .'<br>';



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
	echo "<script> alert('Se guardó la reserva con exito ');
		window.location.href='../AccesoUser.php';
	</script>" ;
		//echo 'entro';

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