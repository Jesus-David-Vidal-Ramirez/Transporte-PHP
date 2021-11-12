<?php

require_once'../Conexiones/conexion.php';



if(isset($_POST["rutas"])){

	$Nombre=$_POST["Nombre"];
	$Precio=$_POST["Precio"]; 
	$Info=$_POST["Informacion"];
	$Imagen = $_POST['Imagen'];


		  $sql = " INSERT INTO rutas (Nombre, Precio, Informacion, Imagen) VALUES ( :Nombre, :Precio, :Informacion, :Imagen) ";

		$stmt=$pdo->prepare($sql);

		if($stmt->execute([
			':Nombre'=>$Nombre,
			':Precio'=>$Precio,
			':Informacion'=>$Infomrmacion,
			':Imagen' => $Imagen
		]))
			{
		  
				 echo "<script> alert('Se agregó el contenido con exito ') </script";
			echo "<script> alert('Ruta Registrada con exito ');
			
		</script>" ;
		}
		else{
				 echo "<script> alert('Algo ha salido mal');
	
			</script>" ;
			}
		 }

	
	
else{
	echo "<script> alert('URL No encontrada ');
			window.location.href='../Acceso.php';
		</script>" ;
}


?>