<?php 
	require_once'../Conexiones/conexion.php';

    if(isset($_POST['ModificarRuta'])){

    $Id_Rutas=$_POST["Id_Rutas"];
    $Nombre=$_POST["Nombre"];
    //$Placa=$_POST["Placa"];
    $Precio=$_POST["Precio"];
    $Informacion=$_POST["Informacion"];
    
    

    
    //FALTA LA IMAGEN PARA REALIZAR LA MODIFICACION
    
    $sql="UPDATE rutas SET Nombre ='$Nombre',  Precio='$Precio', Informacion ='$Informacion' WHERE Id_Rutas = :Id_Rutas ";
    
    $stmt=$pdo->prepare($sql);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $stmt->execute([
        
        ':Id_Rutas'=>$Id_Rutas

        ]);


    $Id_Rutas=$stmt->fetch();
    

    
    echo "<script> alert(' Ruta Modificado'); window.location.href='../Acceso.php'; </script>" ;
    }else{
        echo "<script> alert('URL NO ENCONTRADA'); window.location.href='../Acceso.php'; </script>" ;    
    }
	
?>
