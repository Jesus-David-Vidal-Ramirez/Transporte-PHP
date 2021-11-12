

<head>
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script> -->
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
	
</body>
<?php
require_once'../Conexiones/conexion.php';

//require_once('./Conexiones/conexion.php');
 
	session_start();

	$Usuario = $_POST["Usuario"];
	$Password = $_POST["Password"];
	

	$sql= "SELECT Id_Usuarios, Nombre, Apellido , Correo, Password, Telefono, Direccion, Rol from registros where Id_Usuarios = :Id_Usuarios and Password = :Password ";

	
	$stmt=$pdo->prepare($sql);

	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	
	$stmt->execute([
		':Id_Usuarios'=>$Usuario,
		':Password'=>$Password,
	]);

	$dato = $stmt->fetch();
	 
	if($dato['Rol'] == 'ADMIN'){

		$_SESSION['Usuario'] = $Usuario;
		$_SESSION['Password'] = $Password;
		
		echo "<script> swal({
   title: '¡ADMIN!',
   text: 'Esto es un mensaje de error',
   type: 'error',
   time:10000
 });</script>";
		echo "<script> alert(' ENTRO CON EXITO'); window.location.href='../Acceso.php'; </script>" ;
		
		// header("location: ../Acceso.php");
	
	}

	if($dato['Rol'] == 'USER'){
			
		$_SESSION['Usuario'] = $Usuario;
		$_SESSION['Password'] = $Password;
		$_SESSION['Correo'] = $dato['Correo'];

		echo "<script> swal({
   title: 'USER!',
   text: 'Esto es un mensaje de error',
   type: 'error',
   time:6000
 });</script>";
	
		echo "<script> alert(' ENTRO CON EXITO' ); window.location.href='../AccesoUser.php'; </script>" ;
	
	}

	else {
		
// 		echo "<script>
// 	Swal.fire({
//   title: 'هل تريد الاستمرار؟',
//   icon: 'question',
//   iconHtml: '؟',
//   confirmButtonText: 'نعم',
//   cancelButtonText: 'لا',
//   showCancelButton: true,
//   showCloseButton: true,
//   time:8000
// })
		
// 	</script>";
	echo "ERROR USUARIO NO ENCONTRADO";
echo "<script> alert('Usuario incorrecto ');
			window.location.href='../index.php';	
		</script>" ;

	}

?>