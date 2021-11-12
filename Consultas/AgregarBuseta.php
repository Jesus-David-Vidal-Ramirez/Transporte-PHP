<?php
require_once'../Conexiones/conexion.php';



if(isset($_POST['buseta'])){


	$Placa=$_POST["Placa"];
	$Marca=$_POST["Marca"];
	$Modelo=$_POST["Modelo"];
	$Color=$_POST["Color"];
	$IdConductor=$_POST["IdConductor"];
	$TecnoMecanica=$_POST["TecnoMecanica"];
	$Seguro=$_POST["Seguro"];

	$sql = "INSERT INTO Busetas (Placa, Marca, Modelo, Color,Seguro,TecnoMecanica,IdConductor ) VALUES (
				:Placa, :Marca, :Modelo, :Color, :Seguro , :TecnoMecanica, :IdConductor)";

	$stmt=$pdo->prepare($sql);

	if($stmt->execute([
		':Placa'=>$Placa,
		':Marca'=>$Marca,
		':Modelo'=>$Modelo,
		':Color'=> $Color,
		':Seguro'=> $Seguro,
		':TecnoMecanica'=>$TecnoMecanica,
		 ':IdConductor'=>$IdConductor
		]))
	{
		echo "<script> alert('Se guardó la buseta con exito ');
		window.location.href='../Acceso.php';
	</script>" ;

	}

	else{
	 	echo "<script> alert('Usuario ya definido Ingrese otro usuario'); window.location.href='../Acceso.php'; </script>";
	 }


}else{
	echo "<script> alert('URL No encontrada ');
			window.location.href='../Acceso.php';
		</script>" ;
}




?>