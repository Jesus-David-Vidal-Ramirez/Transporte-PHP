<?php

require_once'../Conexiones/conexion.php';


if(isset($_POST["AgregarEmpleado"])){


$Id_Empleados=$_POST["Identificacion"];
$Nombre=$_POST["Nombre"]; 
$Apellido=$_POST["Apellido"];
$Telefono=$_POST["Telefono"];
$Direccion=$_POST["Direccion"];
$Correo=$_POST["Correo"];
$FechaDeNacimiento =  date("Y-n-d");
$Cargo=$_POST["Cargo"];

//, FechaDeNacimiento, Cargo
//, :FechaDeNacimiento, :Cargo
$sql = "INSERT INTO Empleados (Id_Empleados, Nombre, Apellido, Telefono, Direccion, Correo, FechaDeNacimiento, Cargo) 	  VALUES (:Id_Empleados, :Nombre, :Apellido, :Telefono, :Direccion, :Correo, :FechaDeNacimiento, :Cargo)";

$stmt=$pdo->prepare($sql);

if($stmt->execute([
	':Id_Empleados'      =>$Id_Empleados,
	':Nombre'            =>$Nombre,
	':Apellido'          =>$Apellido,
	':Telefono'          =>$Telefono,
	':Direccion'         =>$Direccion,
	':Correo'            =>$Correo,
	':FechaDeNacimiento' =>$FechaDeNacimiento,
	':Cargo'			 =>$Cargo
]))
	
{
	echo "<script> alert('Empleado Registrado con exito ');
	window.location.href='../Acceso.php';
</script>" ;

}

else{
 	echo "<script> alert('Usuario ya registrado verifique su Cedula de Ciudadania' );
 			 			window.location.href='../Acceso.php'; 
 		  </script>";

 }
}else{
	echo "<script> alert('URL No encontrada ');
			window.location.href='../Acceso.php';
		</script>" ;
}


?>