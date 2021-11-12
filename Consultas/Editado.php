<?php


require_once'../Conexiones/conexion.php';



session_start();
    if(!isset($_SESSION['Usuario'])):
    //if(!$_SESSION['Usuario']):
?>
<script>
  alert("Acceso denegado ");
  window.location.href="../index.php";
</script>

<?php

    endif;

?>
<?php 
$usuario=$_GET["accion"];


$sql = "SELECT Id_Usuarios, Password, Nombre, Apellido, Correo ,Telefono, Direccion, Rol FROM registros WHERE Id_Usuarios = $usuario ";
$stmt = $pdo->prepare($sql);

$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

$registros=$stmt->fetchAll();





        foreach($registros as $registros):

        endforeach;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
    <title>Editando</title>

</head>
<body>

	<div class="editado">


<a href="../Acceso.php" class="btn btn-outline-secondary border-3 mt-3 mx-4 "> Regresar </a>
	<hr>

<div class="d-flex justify-content-center col-19 " >
                         
    <form class="p-2 m-1 w-50" action="Modificar.php" method="POST">

        <h1 class="m-4 text-center text-uppercase">Edición</h1>
        <div >
            <label for="Usuario" class="form-label">Usuario</label>
            <input type="text" name="Usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true" value="<?php echo $registros['Id_Usuarios']  ?>" readonly> 
        </div>
        
        <div>
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="Nombre" class="form-control " id="nombre" required="true" value="<?php echo $registros['Nombre']  ?>">
        </div>
        <div>
            <label for="Apellido" class="form-label">Apellidos</label>
            <input type="text" name="Apellido" class="form-control " id="apellidos" required="true" value="<?php echo $registros['Apellido']  ?>">
        </div>
       <div>
            <label for="password" class="form-label">Password</label>
            <input type="text" name="Password" class="form-control " id="password" required="true" value="<?php echo $registros['Password']  ?>">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Correo" class="form-control" id="email" required="true" value="<?php echo $registros['Correo']  ?>">
        </div>
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="tel" name="Telefono" class="form-control" id="telefono" required="true" value="<?php echo $registros['Telefono']  ?>">
        </div>

        <div class="mb-3">
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="Direccion" required="true" value="<?php echo $registros['Direccion']  ?>">
        </div>
        <!--Validar si se puede modificar esta imagen  
        <div class="mb-3">
            <label for="formFile" class="form-label">Ingresar Imagen</label>
            <input class="form-control" type="file" id="formFile" value="">
        </div>-->
        <div class="mb-3">
            <label for="Rol" class="form-label">Rol</label>
            <input type="text" class="form-control" id="Rol" name="Rol" required="true" value="<?php echo $registros['Rol']  ?>">
        </div>
        <!-- <div class="mb-3">
            <label for="formFile" class="form-label">Rol</label>
           

             <br>
            <?php
                    if($registros['Rol'] == 'USER'){
                    
            ?>
            <select class="form-select" name="Rol">
                    <option value=" <?php echo $registros['Rol']  ?>" ><?php echo $registros['Rol']  ?></option>
                    <option value="USER">ADMIN</option>
            </select>   
            <?php 
            }else{
            ?>
             <select class="form-select" name="Rol">
                <option value=" <?php echo $registros['Rol']  ?>" ><?php echo $registros['Rol']  ?></option>
                <option value="USER">USER</option>
             </select>  

            <?php } ?>

                    

                 
            
        </div> -->
        <button type="submit" class="btn btn-primary w-100 my-4 p-3" name="Editado">Guardar</button>

    </form>
</div>



	</div>

</body>
</html>


