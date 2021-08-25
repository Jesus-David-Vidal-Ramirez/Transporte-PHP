<?php
require_once'../Conexiones/conexion.php';
$Placa=$_POST["Placa"];
$Marca=$_POST["Marca"];
$Modelo=$_POST["Modelo"];
$Color=$_POST["Color"];

$sql = "INSERT INTO Busetas (Placa, Marca, Modelo, Color ) VALUES (
			:Placa, :Marca, :Modelo, :Color)";

$stmt=$pdo->prepare($sql);

if($stmt->execute([
	':Placa'=>$Placa,
	':Marca'=>$Marca,
	':Modelo'=>$Modelo,
	':Color'=> $Color,
	]))
{
	echo "<script> alert('Se guardó la buseta con exito ');
	window.location.href='../Acceso.php';
</script>" ;

}
else{
 	echo "<script> alert('Usuario ya definido Ingrese otro usuario'); window.location.href='../Acceso.php'; </script>";
 }


?>