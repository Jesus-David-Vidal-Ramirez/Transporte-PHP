<?php


require_once'../Conexiones/conexion.php';


$ruta=$_GET["accion"];


$sql = "SELECT Nombre,  Precio, Info, Imagen, Id FROM rutas WHERE Id = '$ruta' ";
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

   <!--  <td> <?php  $registro[ 'Precio']  ?></td> 
    <td> <?php  $registro[ 'Nombre']  ?></td>  
    <td> <?php  $registro[ 'Info']  ?></td>     
    <td> <?php  $registro[ 'Imagen']  ?></td>   
    
        -->
    <?php endforeach; ?> 

    
    

<a href="../Acceso.php" class="btn btn-outline-secondary border-3 mt-3 mx-4"> Regresar </a>


<div class="d-flex justify-content-center col-19 " >
                         
    <form class="p-2 m-1 w-50 " action="ModificarRuta.php" method="POST">

        <h1 class="m-3 text-center" >Editar ruta</h1>

        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre </label>
            <input type="text"  name="Nombre" class="form-control" id="Nombre" required="true" value="<?php echo $registro[ 'Nombre']  ?>">
        </div>
        <div class="mb-3" >
            <label for="Precio" class="form-label">Precio</label>
            <input type="text" name="Precio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true" value="<?php echo $registro[ 'Precio']  ?>" > 
        </div>
        <div class="mb-3">
            <img src="../Imagenes/<?php echo $registro['Imagen']?>" width="200px" class="my-3"> 
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="Informacion" class="form-label">Informacion</label>
            <textarea rows="6" cols="92" name="Informacion"><?php echo $registro[ 'Info']  ?></textarea>
        </div>

        <input type="hidden" name="Id" value="<?php echo $registro['Id']?>">

        
        
        
       
        
        <button type="submit" class="btn btn-primary w-25">Modificar</button>
    

    </form>
</div>
</body>
</html>


