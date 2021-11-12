<?php 
	require_once'../Conexiones/conexion.php';

    if(isset($_POST['ModificarEmpleado'])){
    $Identificacion=$_POST["Identificacion"];
    $Nombre=$_POST["Nombre"];
    $Apellido=$_POST["Apellido"];
    $Correo=$_POST["Correo"];
    $Telefono=$_POST["Telefono"];
    $Direccion=$_POST["Direccion"];
    
    $sql="UPDATE empleados SET Nombre ='$Nombre',  Apellido='$Apellido', Correo ='$Correo', Telefono='$Telefono', 	Direccion = '$Direccion' WHERE Id_Empleados= :Identificacion ";

    $stmt=$pdo->prepare($sql);

    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $stmt->execute([
        
        ':Identificacion'=>$Identificacion

        ]);

    $Identificacion=$stmt->fetch();


     echo "<script> alert(' Empleado Modificado'); window.location.href='../Acceso.php'; </script>" ;
	}else{
      echo "<script> alert('URL NO ENCONTRADA'); window.location.href='../Acceso.php'; </script>" ;    
    }
?>
