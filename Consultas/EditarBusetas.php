<?php


require_once'../Conexiones/conexion.php';


$buseta=$_GET["accion"];


$sql = "SELECT Placa,  Modelo,  Marca, Color FROM busetas WHERE Placa = '$buseta' ";

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
	<title>EditandoBUSETAS</title>
</head>
<body>
<a href="../Acceso.php" class="btn btn-outline-secondary border-3 mt-4 mx-4"> Regresar </a>

    
                

        <?php foreach ($registros as  $registro): ?>

   <!--  <td> <?php  $registro[ 'Placa']  ?></td> 
    <td> <?php  $registro[ 'Modelo']  ?></td>  
    <td> <?php  $registro[ 'Marca']  ?></td>     
    <td> <?php  $registro[ 'Color']  ?></td>   
   -->

 
    <?php endforeach; ?> 



        
	

<div class="d-flex justify-content-center col-19 " >
                         
    <form class="p-2 m-2 w-50" action="ModificarBusetas.php" method="POST">

        <h1 class="m-4 text-center">Editar Busetas</h1>
        <div class="mb-3">
            <label for="Cedula" class="form-label">Placa</label>
            <input type="text"  name="Placa" class="form-control" id="cedula" required="true" value="<?php echo $registro[ 'Placa']  ?>" >
        </div>
        <div class="mb-3">
            <label for="Modelo" class="form-label">Modelo</label>
            <input type="text" name="Modelo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true" value="<?php echo $registro[ 'Modelo']  ?>" > 
        </div>
        <div class="mb-3">
            <label for="Marca" class="form-label">Marca</label>
            <input type="text" name="Marca" class="form-control " id="Marca" required="true" value="<?php echo $registro[ 'Marca']  ?>">
        </div>
        <div class="mb-3">
            <label for="Color" class="form-label">Color</label>
            <input type="text" name="Color" class="form-control " id="Color" required="true" value="<?php echo $registro[ 'Color']  ?>">
        </div>
       
        
        <button type="submit" class="btn btn-primary w-25">Modificar</button>
    

    </form>
</div>
</body>
</html>


