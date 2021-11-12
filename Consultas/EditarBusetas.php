<?php


require_once'../Conexiones/conexion.php';

session_start();
    if(!isset($_SESSION['Usuario'])):
    
?>
<script>
  alert("Acceso denegado ");
  window.location.href="../index.php";
</script>

<?php

    endif;

?>
<?php

$buseta=$_GET["accion"];


$sql = "SELECT Placa,  Modelo,  Marca, Color, Seguro, TecnoMecanica, IdConductor FROM busetas WHERE Placa = '$buseta' ";

$stmt = $pdo->prepare($sql);

$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

$registros=$stmt->fetchAll();

$SQLConductor ="SELECT e.Nombre, e.Apellido, e.Id_Empleados, e.Cargo, b.Placa,b.IdConductor FROM EMPLEADOS AS e  LEFT JOIN BUSETAS AS b ON e.Id_Empleados = b.IdConductor WHERE e.Cargo = 'Conductor' AND b.IdConductor IS NULL ";
$stmt = $pdo->prepare($SQLConductor);

$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

$conductores=$stmt->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../CSS/estilos.css">
	<title>EditandoBUSETAS</title>
</head>
<body>

<div class="editado">       
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

        <h1 class="m-4 text-center text-uppercase">Editar Busetas</h1>
        <div class="mb-3">
            <label for="Placa" class="form-label">Placa</label>
            <input type="text"  name="Placa" class="form-control" id="Placa" required="true" value="<?php echo $registro['Placa'] ?>" readonly  >
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
        <div class="mb-3">
            <label for="Seguro" class="form-label">Seguro</label>
            <input type="text" name="Seguro" class="form-control " id="Seguro" required="true" value="<?php echo $registro[ 'Seguro']  ?>">
        </div>
        <div class="mb-3">
            <label for="TecnoMecanica" class="form-label">TecnoMecanica</label>
            <input type="text" name="TecnoMecanica" class="form-control " id="TecnoMecanica" required="true" value="<?php echo $registro[ 'TecnoMecanica']  ?>">
        </div>
        <!-- <div class="mb-3">
            <label for="IdConductor" class="form-label">IdConductor</label>
            <input type="text" disabled name="IdConductor" class="form-control " id="IdConductor" required="true" value="<?php echo $conductor[ 'Id_Empleados']  ?>">
        </div> -->

        <?php 
            if($registro['IdConductor'] == null || $registro['IdConductor'] == 0 ){
                
            
        ?>  
        <div class="mb-3">
            <label for="IdConductor" class="form-label">IdConductor</label>
            <select name="IdConductor" class="form-select">
                <option></option>
        <?php foreach ($conductores as  $conductor): 
        

            echo '<option value=" '.$conductor[ 'Id_Empleados'].' "> '.$conductor[ 'Nombre'].'  '.$conductor[ 'Apellido'].' CC = '.$conductor[ 'Id_Empleados'].'  </option>';

        ?>
       
        <?php

        endforeach;
         echo'</select>';
            echo'</div>';
        }else{
        ?>    

        <div class="mb-3">
            <label for="IdConductor" class="form-label">IdConductor</label>
             <select name="IdConductor" class="form-select">
                <option value="<?php echo $registro[ 'IdConductor']  ?>"> <?php echo $registro[ 'IdConductor']  ?></option>
                <option value=" "> </option>
           <!--  <input type="text" disabled name="IdConductor" class="form-control " id="IdConductor" required="true" value="<?php echo $registro[ 'IdConductor']  ?>"> -->
       </select>
        </div>
        <?php }?>

       
        <button type="submit" class="btn btn-primary w-100 my-4 p-3" name="ModificarBuseta">Modificar</button>
    </form>
</div>
</div>
</body>
</html>


