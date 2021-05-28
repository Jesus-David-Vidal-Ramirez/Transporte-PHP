<?php 
	require_once'../Conexiones/conexion.php';

    $Id=$_POST["Id"];
   
    $Nombre=$_POST["Nombre"];
    $Precio=$_POST["Precio"];
    $Informacion=$_POST["Informacion"];
    //FALTA LA IMAGEN PARA REALIZAR LA MODIFICACION
    
    $sql="UPDATE rutas SET Nombre ='$Nombre',  Precio='$Precio', Info ='$Informacion' WHERE Id = :Id ";

    $stmt=$pdo->prepare($sql);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $stmt->execute([
        
        'Id'=>$Id

        ]);


    $Id=$stmt->fetch();


    
 echo "<script> alert(' Ruta Modificado'); window.location.href='../Acceso.php'; </script>" ;
	
?>
