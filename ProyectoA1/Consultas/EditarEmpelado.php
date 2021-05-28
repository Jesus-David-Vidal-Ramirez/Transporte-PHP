<?php


require_once'../Conexiones/conexion.php';


$empleados=$_GET["accion"];


$sql = "SELECT Identificacion,  Nombre,  Apellido, Correo, Telefono, Direccion FROM empleados WHERE Identificacion = '$empleados' ";
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
	<title>EditandoEMPLEADOS</title>
</head>
<body>


    
                

        <?php foreach ($registros as  $registro): ?>

   <!--  <td> <?php  $registro[ 'Identificacion']  ?></td> 
    <td> <?php  $registro[ 'Nombre']  ?></td>  
    <td> <?php  $registro[ 'Apellido']  ?></td>     
    <td> <?php  $registro[ 'Correo']  ?></td>   
    <td> <?php  $registro[ 'Telefono']  ?></td> 
    <td> <?php  $registro[ 'Direccion']  ?></td>  -->
    <?php endforeach; ?> 



<a href="../Acceso.php" class="btn btn-outline-secondary border-3 mt-3 mx-4"> Regresar </a>


<div class="d-flex justify-content-center col-19 " >
                         
    <form class="p-2 m-1 w-50 " action="ModificarEmpleado.php" method="POST">

        <h1 class="m-3 text-center" >EDICION</h1>
        <div class="mb-3">
            <label for="Cedula" class="form-label">Cedula Ciudadana</label>
            <input type="number"  name="Identificacion" class="form-control" id="cedula" required="true" value="<?php echo $registro[ 'Identificacion']  ?>"readonly>
        </div>
        <div class="mb-3" >
            <label for="Nombre" class="form-label">Nombre</label>
            <input type="text" name="Nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true" value="<?php echo $registro[ 'Nombre']  ?>" > 
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Apellido</label>
            <input type="text" name="Apellido" class="form-control " id="Apellido" required="true" value="<?php echo $registro[ 'Apellido']  ?>">
        </div>
        <div class="mb-3">
            <label for="Correo" class="form-label">Correo</label>
            <input type="text" name="Correo" class="form-control " id="Correo" required="true" value="<?php echo $registro[ 'Correo']  ?>">
        </div>
       
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="tel" name="Telefono" class="form-control" id="telefono" required="true" value="<?php echo $registro[ 'Telefono']  ?>">
        </div>

        <div class="mb-3">
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="Direccion" required="true" value="<?php echo $registro[ 'Direccion']  ?>">
        </div>
        
        <button type="submit" class="btn btn-primary w-25">Modificar</button>
    

    </form>
</div>
</body>
</html>


