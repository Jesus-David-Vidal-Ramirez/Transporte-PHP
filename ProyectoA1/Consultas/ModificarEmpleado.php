<?php 
	require_once'../Conexiones/conexion.php';

    $Identificacion=$_POST["Identificacion"];
    $Nombre=$_POST["Nombre"];
    $Apellido=$_POST["Apellido"];
    $Correo=$_POST["Correo"];
    $Telefono=$_POST["Telefono"];
    $Direccion=$_POST["Direccion"];
    
    $sql="UPDATE empleados SET Nombre ='$Nombre',  Apellido='$Apellido', Correo ='$Correo', Telefono='$Telefono', Identificacion = '$Identificacion', 	Direccion = '$Direccion' WHERE Identificacion= :Identificacion ";

    $stmt=$pdo->prepare($sql);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $stmt->execute([
        
        'Identificacion'=>$Identificacion

        ]);

    $Identificacion=$stmt->fetch();

  echo "<script> alert(' Empleado Modificado'); window.location.href='../Acceso.php'; </script>" ;
	
?>
