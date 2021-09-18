<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
</head>
<script>
function alerta(){
 swal(
  'The Internet?',
  'That thing is still around?',
  'question'
);
}
      alerta();                   
</script>

<script>
function alertica(){
 swal(
  'The Internet-_-?',
  'That thing is still around?',
  'question'
);
}
      alertica();                   
</script>

<?php
require_once'../Conexiones/conexion.php';
//require_once('./Conexiones/conexion.php');
 echo "<script> swal({
   title: '¡ERROR!',
   text: 'Esto es un mensaje de error',
   type: 'error',
 });</script>";
	session_start();


	
	$Usuario = $_POST["Usuario"];
	$Password = $_POST["Password"];
	

	$sql="SELECT Id_Usuarios, Nombre, Apellido , Correo, Password, Telefono, Direccion, Rol from registros where Id_Usuarios= :Id_Usuarios and Password= :Password ";

	
	$stmt=$pdo->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);

	$stmt->execute([
		':Id_Usuarios'=>$Usuario,
		':Password'=>$Password,
		
		
		// 'Identificacion' =>$Identificacion,
		]);

	$dato=$stmt->fetch();


	// 
	if($dato['Rol'] == 'ADMIN'){

		$_SESSION['Usuario'] = $Usuario;
		$_SESSION['Password'] = $Password;
		
		echo "<script> swal({
   title: '¡ERROR!',
   text: 'Esto es un mensaje de error',
   type: 'error',
 });</script>";
		echo "<script> alert(' ENTRO CON EXITO'); window.location.href='../Acceso.php'; </script>" ;

		// header("location: ../Acceso.php");
	
	}

	if($dato['Rol'] == 'USER'){

		$_SESSION['Usuario'] = $Usuario;
		$_SESSION['Password'] = $Password;
		$_SESSION['Correo'] = $dato['Correo'];
		
		//echo print_r($dato['Correo']);
		echo "<script> alert(' ENTRO CON EXITO' ); window.location.href='../AccesoUser.php'; </script>" ;
		// header("location: ../AccesoUser.php");
		

	}

	else {
		
		echo "<script> alert('Usuario incorrecto ');
			window.location.href='../index.php';	
		</script>" ;

	}

?>