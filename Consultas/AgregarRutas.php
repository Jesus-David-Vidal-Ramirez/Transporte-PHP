<?php

require_once'../Conexiones/conexion.php';



if(isset($_POST["rutas"])){

	$Nombre=$_POST["Nombre"];
	$Precio=$_POST["Precio"]; 
	$Info=$_POST["Informacion"];
	$Imagen = $_FILES['Imagen'];

	if(isset($Imagen) && $Imagen != ""){
        $tipo = $_FILES['imagen']['type'];
        $temp  = $_FILES['imagen']['tmp_name'];

       if( !((strpos($tipo,'jpeg') || strpos($tipo,'jpg') || strpos($tipo,'png')))){
          echo "<script> alert('Solo Se Permiten archivos jpg, gif y png ');
	
</script>" ;
       }else{
        $sql = " INSERT INTO rutas (Nombre, Precio, Informacion, Imagen) VALUES ( :Nombre, :Precio, :Informacion, :Imagen) ";

		$stmt=$pdo->prepare($sql);

		if($stmt->execute([
			':Nombre'=>$Nombre,
			':Precio'=>$Precio,
			':Informacion'=>$Infomrmacion,
			':Imagen' => $Imagen
		]))
			
		{
			 move_uploaded_file($temp,'Imagenes/'.$imagen);   
             echo "<script> alert('Se agregó el contenido con exito ') </script";
			echo "<script> alert('Ruta Registrada con exito ');
			
		</script>" ;

		}else{
             echo "<script> alert('Algo ha salido mal');
	
</script>" ;
         }
       }

	
	
	}else{
		echo 'error';
	}
}
else{
	echo "<script> alert('URL No encontrada ');
			window.location.href='../Acceso.php';
		</script>" ;
}


?>