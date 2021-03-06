<?php


session_start();

	if(!isset($_SESSION['Usuario'])):
	//if(!$_SESSION['Usuario']):
		
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

	<link rel="stylesheet" type="text/css" href="./CSS/estilos.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
	<title>Administrador</title>
	<link rel="stylesheet" type="text/css" href="./CSS/estilos.css">
	
</head>
<body class="acceso" >	
<div class="container d-flex justify-content-between align-items-center mt-5"  >  
		<div class="">
			<form method="POST" action="logout.php">
				<input type="submit" name="cerrarsesion" value="Cerrar session" class="btn btn-outline-danger border-2 ">
			</form>
		</div>
		<div class="ms-2">	
			<h1 class="text-primary text-center">
				<i>Usuario: <?php echo $_SESSION['Usuario'] ?></i>
			</h1>
			
		</div>	

</div>

<div class="container">
		<hr>
		
	  <div class="row row-cols-1 row-cols-md-2 g-4">

<!--EMPLEADOS -->
  <div class="col empleados">
    <div class="card m-5 ">
    	<h5 class="card-title text-center p-3 ">Empleados</h5>
    	<div class="divider"></div>
	    	  <img src="./Imagenes/Empleados/Empleado.png" class="img-fluid rounded-circle " title='Empleados'style="width: 100% ; height:400px; ">
	  	
      	<div class="card-body text-center">
        	<p class="card-text"> <strong> AQUI PUEDES AGREGAR Y MODIFICAR EMPLEADO </strong></p>
        	<button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#modalAgregar">Agregar</button>

        	<!-- Modal Agregar-->
				<div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title col-11 text-center" id="exampleModalLabel">AGREGAR EMPLEADOS</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">

		 <form class="form" action="./Consultas/AgregarEmpleado.php" method="POST">

        <div class="p-2 m-2" >
        	<label for="password" class="form-label">Nombre</label>
            <input type="text" name="Nombre" class="form-control " id="password" required="true">
        </div>

        <div class="p-2 m-2" >
            <label for="password" class="form-label">Apellido</label>
            <input type="text" name="Apellido" class="form-control " id="password" required="true">
        </div>

        <div class="p-2 m-2" >
            <label for="Cedula" class="form-label">Cedula Ciudadana</label>
            <input type="number"  name="Identificacion" class="form-control" id="cedula" required="true">
        </div>
        
        <div class="p-2 m-2" >
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="tel" name="Telefono" class="form-control" id="telefono" required="true">
        </div>

        <div class="p-2 m-2" >
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="Direccion" required="true">
        </div>

         <div class="p-2 m-2" >
            <label for="Correo" class="form-label">Correo</label>
            <input type="text" class="form-control" id="Correo" name="Correo" required="true">
        </div>

        <div class="p-2 m-2">
        	<label for="Cargos" class="form-label">Cargo</label>
            <select name="Cargo" class="form-select">
			<?php
			require_once('./Consultas/SelectCargos.php');
			 foreach($Cargos as $cargos):
            		
            		//echo '<option value="'.$cargos['Nombre'].' "> '.$cargos['Id_Cargo'].' </option>';
            		?>
            		<option value="<?php print_r($cargos['Nombre'])?> "><?php  print_r($cargos['Nombre'])?></option>
                <?php
		            endforeach;
		            ?>

			</select>            
		</div>
		

        <!--Validar que solo acepte imagenes -->
       <!--  <div class="p-2 m-2" >
            <label for="formFile" class="form-label">Ingresar Imagen</label>
            <input class="form-control" type="file" id="formFile">
        </div> -->

        <button type="submit" class="btn btn-primary m-4 w-50" name="AgregarEmpleado">Enviar</button>
    </form>
				      </div>
				      
				    </div>
				  </div>
				</div>

        	<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalModificar">Mostrar </button>
        						
        	<!-- Modal modificar-->

				<div class="modal fade " id="modalModificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-xl">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title col-11 text-center" id="exampleModalLabel">MODIFICAR EMPLEADO</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">

						<?php

						require_once('./Consultas/SelectEmpleados.php');

						?>
				        
				      	<table class="table table-hover">
								  <thead>
								    <tr>
								      <th scope="col">Identificacion</th>
								      <th scope="col">Nombre</th>
								      <th scope="col">Apellido</th>
								      <th scope="col">Correo</th>
								      <th scope="col">Telefono</th>
								      <th scope="col">Direccion</th>
								      <th scope="col">Ingreso</th>
								      <th scope="col">Cargo</th>
								      <th colspan="2">Acciones</th>
								    </tr>
								  </thead>
								  <tbody>
								    <tbody>
										<?php foreach ($Empleados as  $Empleado): 


											if($Empleado['Id_Empleados'] != 0){


											?>
								<tr>
									 
									<td> <?php echo $Empleado[ 'Id_Empleados']  ?></td> 
									<td> <?php echo $Empleado[ 'Nombre']  ?></td> 	
									<td> <?php echo $Empleado[ 'Apellido']  ?></td> 	
									<td> <?php echo $Empleado[ 'Correo']  ?></td> 	
									<td> <?php echo $Empleado[ 'Telefono']  ?></td> 
									<td> <?php echo $Empleado[ 'Direccion']  ?></td> 
								    <td> <?php echo $Empleado[ 'FechaDeNacimiento']  ?></td> 
									<!-- <td> <?php echo $Empleado[ 'Imagen']  ?></td>    -->
									<td> <?php echo $Empleado[ 'Cargo']  ?></td> 
									
									<td >
										
								                     <a name="EliminarEmpleado" href="./Consultas/EliminarEmpleado.php?accion=<?php echo $Empleado['Id_Empleados']; ?>"
								                        >        
								                        <i class="fas fa-trash-alt text-danger"> Eliminar</i>
								        
								    </td>
								                 
								                <td>
								                    <a href="./Consultas/EditarEmpelado.php?accion=<?php echo $Empleado['Id_Empleados']; ?>"
								                    	>
								                    
								                       <i class="fas fa-sync text-success"> Editar</i>
								                        



								                    </a>
								                </td>
									</tr>
									<?php 
								}
								endforeach; ?> 

									 </tbody>
								  </tbody>
								</table>

				      </div>
				      
				    </div>
				  </div>
				</div>
      	</div>
    </div>
  </div>

<!--BUSETAS -->
<?php 
	require_once'./Conexiones/conexion.php';

$sql = "SELECT Id_Empleados, Nombre, Apellido FROM empleados WHERE cargo = 'conductor' ";

$stmt = $pdo->prepare($sql);

$stmt->setFetchMode(PDO::FETCH_ASSOC);

$stmt->execute();

$conductores=$stmt->fetchAll();
?>
   <div class="col busetas">
    <div class="card m-5 text-center ">
    	<h5 class="card-title text-center p-3">BUSETAS</h5>
    	<div class="divider"></div>
    	
         <img src="./Imagenes/Busetas/buses.png" class="img-fluid rounded-circle m-4 px-4 text-center" title='Busetas' style="width: 90% ; height: 350px; ">
      <div class="card-body text-center">
        <p class="card-text "><strong> AQUI PUEDES AGREGAR Y MODIFICAR BUSETAS </strong></p>
        <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#modalAgregarBusetas">Agregar</button>

        	<!-- Modal Agregar Busetas-->
				<div class="modal fade" id="modalAgregarBusetas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title col-11 text-center" id="exampleModalLabel">AGREGAR BUSETAS</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
		<form class="" action="./Consultas/AgregarBuseta.php" method="POST">
        <div class="p-2 m-2">
            <label for="Modelo" class="form-label">Modelo</label>
            <input type="text" name="Modelo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
        </div>
        <div class="p-2 m-2">
            <label for="Marca" class="form-label">Marca</label>
            <input type="text" name="Marca" class="form-control " id="Marca" required="true">
        </div>

        <div class="p-2 m-2">
            <label for="Placa" class="form-label">Placa</label>
            <input type="text"  name="Placa" class="form-control" id="Placa" required="true">
        </div>
        
        <div class="p-2 m-2">
            <label for="Color" class="form-label">Color</label>
            <input type="text" name="Color" class="form-control" id="Color" required="true">
        </div>

        <div class="p-2 m-2">
            <label for="Seguro" class="form-label">Seguro</label>
            <input type="text" name="Seguro" class="form-control" id="Seguro" required="true">
        </div>

        <div class="p-2 m-2">
            <label for="TecnoMecanica" class="form-label">TecnoMecanica</label>
            <input type="text" name="TecnoMecanica" class="form-control" id="TecnoMecanica" required="true">
        </div>

        <!-- <div class="p-2 m-2">
            <label for="Conductor" class="form-label">Conductor</label>
            <input type="text" name="Conductor" class="form-control" id="Conductor" required="true">
        </div> -->

		<div class="p-2 m-2">
			<label for="TecnoMecanica" class="form-label">Conductor</label>
        	<select name="IdConductor" class="form-select">
                <option></option>
        <?php foreach ($conductores as  $conductor): 
        

            echo '<option value=" '.$conductor[ 'Id_Empleados'].' "> '.$conductor[ 'Nombre'].'  '.$conductor[ 'Apellido'].' CC = '.$conductor[ 'Id_Empleados'].'  </option>';
        endforeach;
        ?>
    		</select>
    	</div>
        
        <button type="submit" name="buseta" value="Enviar" class="btn btn-primary m-4 w-50">Enviar</button>

    </form>

				      </div>
				    
				    </div>
				  </div>
				</div>

        	<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalModificarBusetas">Mostrar</button>
        						
        	<!-- Modal modificar Busetas-->
				<div class="modal fade" id="modalModificarBusetas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content">
				      <div class="modal-header ">
				        <h5 class="modal-title col-11 text-center" id="exampleModalLabel">MODIFICAR BUSETAS</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        
				      	<?php

						require_once('./consultas/SelectBusetas.php');

						?>
				        
				      	<table class="table table-bordered" >
								  <thead>
								    <tr>
								      <th scope="col">Marca</th>
								      <th scope="col">Modelo</th>
								      <th scope="col">Placa</th>
								      <th scope="col">Color</th>
								      <th scope="col">Seguro</th>
								      <th scope="col">Tec. Mecanica</th>
								      <th scope="col">ID Conductor</th>
								      <th colspan="2">Acciones</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<!-- HAY QUE VALIDAR QUE LA BUSETA TENGA PLACA UNICA -->
								    
										<?php foreach ($Busetas as  $buseta): ?>
								<tr>
									 
									<td> <?php echo $buseta[ 'Marca']  ?></td> 
									<td> <?php echo $buseta[ 'Modelo']  ?></td> 	
									<td> <?php echo $buseta[ 'Placa']  ?></td> 	
									<td> <?php echo $buseta[ 'Color']  ?></td> 	
									<td> <?php echo $buseta[ 'Seguro']  ?></td> 	
									<td> <?php echo $buseta[ 'TecnoMecanica']  ?></td> 	
									<td> <?php echo $buseta[ 'IdConductor']  ?></td> 	
									
									
									<td>
								                     <a href="./Consultas/Eliminarbuseta.php?accion=<?php echo $buseta['Placa']; ?>"
								                        >        
								                        <i class="fas fa-trash-alt text-danger"> Eliminar</i>
								                    </a>
								    </td>
								                 
								                <td>
								                    <a href="./Consultas/EditarBusetas.php?accion=<?php echo $buseta['Placa']; ?>">
								                    
								                       <i class="fas fa-sync text-success"> Editar </i>
								                        
								                    </a>
								                </td>
									</tr>
									<?php endforeach; ?> 

									 
								  </tbody>
								</table>




				      </div>
				      
				    </div>
				  </div>
				</div>
        	
    </div>
	</div>
  </div>

<!-- RUTAS -->

  <div class="col ruta m-0">
    <div class="card m-5 text-center ">
    	<h5 class="card-title text-center p-3">RUTAS</h5>
    	<div class="divider"></div>
    	
         <img src="./Imagenes/Rutas/Ruta.png" class="img-fluid rounded-circle m-4" title='RUtas'style="width: 90% ; height: 350px; ">
      <div class="card-body text-center">
        <p class="card-text "><strong> AQUI PUEDES AGREGAR Y MODIFICAR RUTAS </strong></p>
        
        <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#modalAgregarRutas">Agregar</button>

        	<!-- Modal Agregar Rutas-->
				<div class="modal fade" id="modalAgregarRutas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title col-11 text-center" id="exampleModalLabel"> AGREGAR RUTAS</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
	<form class="" action="./Consultas/AgregarRutas.php" method="POST">

        <div class="p-2 m-2">
            <label for="Usuario" class="form-label">Vehiculo</label>
            <input type="text" name="Nombre" class="form-control  text-center" id="exampleInputEmail1" aria-describedby="emailHelp" required="true" placeholder="UN SELECT">
            <!-- SELECT * FROM rutas AS r left JOIN busetas AS b ON b.Placa = r.Placa WHERE r.Placa IS NULL  -->
        </div>
        <div class="p-2 m-2">
            <label for="Usuario" class="form-label">Nombre</label>
            <input type="text" name="Nombre" class="form-control  text-center" id="exampleInputEmail1" aria-describedby="emailHelp" required="true" placeholder="Sicnelejo - Sucre">
        </div>
        <div class="p-2 m-2">
            <label for="Precio" class="form-label">Precio</label>
            <input type="text" name="Precio" class="form-control text-center" id="Precio" required="true" placeholder="50.000">
        </div>
       

        <!--Validar que solo acepte imagenes -->
        <div class="p-2 m-2">
            <label for="formFile" class="form-label">Ingresar Imagen</label>
            <input class="form-control" type="file" id="formFile" name="Imagen" required="">
        </div>

 		<div class="p-2 m-2">
            <label for="Info" class="form-label">Informacion</label>
            <textarea name="Informacion" rows="10" cols="52" placeholder="Informacion refrente" class="text-center"></textarea>
        </div>

       
        <button type="submit" name="rutas" class="btn btn-primary m-4 w-50">Enviar</button>

    </form>
				      </div>
				    
				    </div>
				  </div>
				</div>

        	<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalModificarRutas">Modificar</button>
        						
        	<!-- Modal modificar Rutas-->
				<div class="modal fade" id="modalModificarRutas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-xl">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title col-11 text-center" id="exampleModalLabel">MODIFICAR RUTAS</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body table-responsive">
				        
				      	<?php
						require_once('./consultas/SelectRutas.php');
						?>
				        
				      	<table class="table table-bordered " >
								  <thead>
								    <tr>
								      <th scope="col">Nombre</th>
								      <th scope="col">Precio</th>
								      <th scope="col">Info</th>
								      <th scope="col">Imagen</th>
								      <th scope="col">Bus Asignado</th>
								      
								      <th colspan="2">Acciones</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<!-- HAY QUE VALIDAR QUE LA BUSETA TENGA PLACA UNICA -->
								    <tbody>
										<?php foreach ($rutas as  $ruta): ?>
								<tr>
									 
									<td class="py-5"> <?php echo $ruta[ 'Nombre']  ?></td> 

									<td class="py-5"> <?php echo $ruta[ 'Precio']  ?></td> 	
									<td > <?php echo $ruta[ 'Informacion']  ?></td> 	
									<td class="py-5">
										<figure>
										<img class="justify-content-center  " src="./Imagenes/<?php echo $ruta[ 'Imagen']?>" height="200px" width="350px">
									</figure>
										 </td> 	
									<td class="py-5"> <?php echo $ruta[ 'Placa']  ?></td> 
									
									<td class="py-5">
								                     <a href="./Consultas/EliminarRuta.php?accion=<?php echo $ruta['Id_Rutas']; ?>"
								                        >        
								                        <i class="fas fa-trash-alt text-danger"> Eliminar</i>
								                    </a>
								    </td>
								                 
								    <td class="py-5">
								                    <a href="./Consultas/EditarRuta.php?accion=<?php echo $ruta['Id_Rutas']; ?>">
								                    
								                       <i class="fas fa-sync text-success"> Editar </i>
								                        
								                    </a>
								    </td>
									</tr>
									<?php endforeach; ?> 

									 </tbody>
								  </tbody>
								</table>


				      </div>
				      
				    </div>
				  </div>
				</div>
            
      </div>
    </div>
  </div>
  
<!-- ESTADISTICAS -->
  <div class="col estadistica m-0">
    <div class="card m-5 text-center ">
    	<h5 class="card-title text-center p-3">ESTADISTICA</h5>
    	<div class="divider"></div>
    	
         <img src="./Imagenes/Estadisticas/estadistica.png" class="img-fluid rounded-circle m-4" title='Estadisticas'style="width: 90% ; height: 350px; ">
      <div class="card-body text-center">
        <p class="card-text "><strong> AQUI PUEDES AGREGAR Y MODIFICAR RUTAS </strong></p>
       
        	<a type="button"  href="./Estadisticas.php" target="_black" class="btn btn-primary m-3 w-50"  >Mostrar</a>
        						
        	<!-- Modal Mostrar Rutas-->
				<div class="modal fade" id="modalMostrarEstadisticas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg">
				    <div class="modal-content ">
				      <div class="modal-header">
				        <h5 class="modal-title col-11 text-center" id="exampleModalLabel"> ESTADISTICAS</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				         
				      	<?php

						

						?>
				        
				      	<table class="table table-bordered" >
								  <thead>
								    <tr>
								      <th scope="col">Rutas</th>
								      <th scope="col">Total</th>
								      <th scope="col">Fecha</th>
								      <th scope="col">Impresion</th>
								      
								      
								    </tr>
								  </thead>
								  <tbody>
								  	
								    <tbody>
										<tr>
											<td> Nombre</td>
										</tr>

									 </tbody>
								  </tbody>
								</table>


				      </div>
				      
				    </div>
				  </div>
				</div>
      </div>
    </div>
  </div>
</div>

 

		<?php

require_once('./Consultas/SelectUser.php');

?>


<h1 class="mx-5 my-5 text-primary text-center title">
                Administraci&oacute;n
            </h1>
<div class="m-5 table-responsive">
		<table  border="1" class="table table-dark table-hover my-5  table-bordered">
	<thead>

		<caption>Usuarios</caption>
		<th>Usuario</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Correo</th>
		<th>Password</th>
		<th>Telefono</th>
		<th>Direccion</th>
		<th>Rol</th>
		<th colspan="2">Acciones</th>
		


	</thead>
	<tbody class="table table-striped table-light">
		<?php foreach ($registros as  $registro): ?>
<tr>
	 
	<td> <?php echo $registro[ 'Id_Usuarios']  ?></td> 	
	<td> <?php echo $registro[ 'Nombre']  ?></td>
	<td> <?php echo $registro[ 'Apellido']  ?></td>	
	<td> <?php echo $registro[ 'Correo']  ?></td> 	
	<td> <?php echo $registro[ 'Password']  ?></td> 	
	<td> <?php echo $registro[ 'Telefono']  ?></td> 
	<td> <?php echo $registro[ 'Direccion']  ?></td> 
	<td> <?php echo $registro[ 'Rol']  ?></td> 
	<td >
                     <a href="./Consultas/EliminarUser.php?accion=<?php echo $registro['Id_Usuarios']; ?>"
                        >        
                        <i class="fas fa-trash-alt text-danger">Eliminar</i></a>
                        <!-- <i class="fas fa-trash-alt text-danger"> Eliminar</i> -->
                </td>
                 
                <td>
                    <a href="./Consultas/Editado.php?accion=<?php echo $registro['Id_Usuarios']; ?>">
                    
                       <i class="fas fa-sync-alt  text-success">Editar</i>
                        
                    </a>
                </td>
	</tr>
	<?php endforeach; ?> 

	 </tbody>
	  </table>

	</div>


	  <script src="https://kit.fontawesome.com/247d2323bf.js" crossorigin="anonymous"></script>	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>