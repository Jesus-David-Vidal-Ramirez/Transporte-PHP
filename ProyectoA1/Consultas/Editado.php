<?php


require_once'../Conexiones/conexion.php';


$usuario=$_GET["accion"];


$sql = "SELECT Usuario, Password, Nombre, Identificacion, Telefono, Direccion, Rol FROM registro WHERE usuario = '$usuario' ";
$stmt = $pdo->prepare($sql);

$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

$registros=$stmt->fetchAll();




?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<title>Editando</title>
</head>
<body>

		<?php foreach ($registros as  $registro): ?>

	 
	

                 
              

	<?php endforeach; ?> 



<a href="../Acceso.php" class="btn btn-outline-secondary border-3 mt-3 mx-4"> Regresar </a>
	<hr>

<div class="d-flex justify-content-center col-19 " >
                         
    <form class="p-2 m-2 w-50" action="Modificar.php" method="POST">

        <h1 class="m-4">Edicion</h1>
        <div >
            <label for="Usuario" class="form-label">Usuario</label>
            <input type="text" name="Usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true" value="<?php echo $registro[ 'Usuario']  ?>" readonly> 
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="text" name="Password" class="form-control " id="password" required="true" value="<?php echo $registro[ 'Password']  ?>">
        </div>
        <div>
            <label for="password" class="form-label">Nombre</label>
            <input type="text" name="Nombre" class="form-control " id="password" required="true" value="<?php echo $registro[ 'Nombre']  ?>">
        </div>

        <div class="mb-3">
            <label for="Cedula" class="form-label">Cedula Ciudadana</label>
            <input type="number"  name="Identificacion" class="form-control" id="cedula" required="true" value="<?php echo $registro[ 'Identificacion']  ?>">
        </div>
       <!--  <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Correo" class="form-control" id="email" required="true" value="">
        </div> -->
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="tel" name="Telefono" class="form-control" id="telefono" required="true" value="<?php echo $registro[ 'Telefono']  ?>">
        </div>

        <div class="mb-3">
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="Direccion" required="true" value="<?php echo $registro[ 'Direccion']  ?>">
        </div>
        <!--Validar si se puede modificar esta imagen  
        <div class="mb-3">
            <label for="formFile" class="form-label">Ingresar Imagen</label>
            <input class="form-control" type="file" id="formFile" value="">
        </div>-->
        <div class="mb-3">
            <label for="formFile" class="form-label">Rol</label>
            <input class="form-control" type="text"  name="Rol" id="formFile" value=" <?php echo $registro[ 'Rol']  ?>">
        </div>
        <button type="submit" class="btn btn-primary w-50">Submit</button>

    </form>
</div>



	

</body>
</html>


