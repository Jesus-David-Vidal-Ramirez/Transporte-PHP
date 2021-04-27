<?php

//require_once'./Consultas/Probando.php';
//require_once'../Consultas/Probando.php';
//require_once'../Conexion/conexion.php';
session_start();
	//$_SESSION["usuario"]=!true;
	if(!$_SESSION['Usuario']):

?>

<script>
	alert("Acceso denegado ");
	window.location.href="index.php";
</script>

<?php

	endif;
?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
	<title>Logeado</title>
</head>
<body>
	

		<h1>
			ACCEDIO <?php echo $_SESSION['Usuario'] ?>
		</h1>
		<h2>
			password  <?php echo $_SESSION['Password'] ?>
		</h2>

		<form method="POST" action="logout.php">
			<input type="submit" name="" value="Cerrar session">
		</form>

		<hr>




		<?php

require_once('./Consultas/SelectUser.php');

?>

<hr>

		<table  border="1" class="table">
	<thead>

		
		<th>Usuario</th>
		<th>Password</th>
		<th>Nombre</th>
		<th>Identificacion</th>
		<th>Telefono</th>
		<th>Direccion</th>
		<th>Rol</th>
		<th colspan="2">Acciones</th>
		


	</thead>
	<tbody>
		<?php foreach ($registros as  $registro): ?>
<tr>
	 
	<td> <?php echo $registro[ 'Usuario']  ?></td> 	
	<td> <?php echo $registro[ 'Password']  ?></td> 	
	<td> <?php echo $registro[ 'Nombre']  ?></td> 	
	<td> <?php echo $registro[ 'Identificacion']  ?></td> 
	<td> <?php echo $registro[ 'Telefono']  ?></td> 
	<td> <?php echo $registro[ 'Direccion']  ?></td> 
	<td> <?php echo $registro[ 'Rol']  ?></td> 
	<td >
                     <a href="./Consultas/EliminarUser.php?accion=<?php echo $registro['Usuario']; ?>"
                       Style="Color:red; text-decoration: none" >        
                        <i class="fas fa-trash-alt"></i>Eliminar
                </td>
                 
                <td>
                    <a href="./Consultas/Editado.php?accion=<?php echo $registro['Usuario']; ?>">
                    
                       <i class="fas fa-sync"></i>
                        Editar
                    </a>
                </td>
	</tr>
	<?php endforeach; ?> 

	 </tbody>
	  </table>


	  
	  


	  <script src="https://kit.fontawesome.com/247d2323bf.js" crossorigin="anonymous"></script>	
</body>
</html>