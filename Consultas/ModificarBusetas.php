<?php 
	require_once'../Conexiones/conexion.php';

    ///ASIGNAR UNA PLACA UNICA AL INGREGAR Y AL MODIFICAR VALIDARLO

    if(isset($_POST['ModificarBuseta'])){

    $Placa         =$_POST["Placa"];
    $Modelo        =$_POST["Modelo"];
    $Marca         =$_POST["Marca"];
    $Color         =$_POST["Color"];
    $Seguro        =$_POST["Seguro"];
    $TecnoMecanica =$_POST["TecnoMecanica"];

    $IdConductor=$_POST["IdConductor"];


   //echo 'conductor' . $IdConductor;
    
    $sql="UPDATE busetas SET Modelo ='$Modelo',  Marca='$Marca', Color ='$Color', Seguro = '$Seguro', TecnoMecanica='$TecnoMecanica', IdConductor = '$IdConductor' WHERE Placa = :Placa ";

    $stmt=$pdo->prepare($sql);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $stmt->execute([
        
        ':Placa'=>$Placa,

        ]);

    $Placa=$stmt->fetch();

    echo "<script> alert('Buseta Modificado Exitosamente'); window.location.href='../Acceso.php'; </script>" ;
	}else{
        echo "<script> alert('URL NO ENCONTRADA'); window.location.href='../Acceso.php'; </script>" ;    
    }
?>
