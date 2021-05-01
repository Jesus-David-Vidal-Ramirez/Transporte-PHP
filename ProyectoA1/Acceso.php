<?php


session_start();
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

	<link rel="stylesheet" type="text/css" href="./CSS/estilos.css">	
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
	<title>Logeado</title>
</head>
<body style="background-color: #ffffff;
background-image: linear-gradient(45deg, #ffffff 0%, #7dffd0 100%);
">	
<div class="container-fluid">
		<!-- <h1>
			ACCEDIO <?php echo $_SESSION['Usuario'] ?>
		</h1>
		<h2>
			password  <?php echo $_SESSION['Password'] ?>
		</h2> -->
		<div class="p-3 d-flex justify-content-end ml-5 "> 
		<form method="POST" action="logout.php" >
			<input type="submit" name="" value="Cerrar session" class="btn btn-outline-danger border-2">
		</form>
		</div>
		


 

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


	   -->
	  <hr>

	  <div class="row row-cols-1 row-cols-md-2 g-4">

<!--EMPLEADOS -->
  <div class="col ">
    <div class="card m-5 ">
    	<h5 class="card-title text-center p-3 ">Empleados</h5>
    	<div class="divider"></div>
    	
	    	<a href="RecursosAdmin/Empleados.php">
	    	
	    	  <img src="./Imagenes/Empleados/Empleado.png" class="img-fluid rounded-circle " title='Empleados'style="width: 100% ; height:400px; ">
	  		</a>
      	<div class="card-body text-center">
        	<p class="card-text ">This is a longer card with supporting text below as a </p>
        	<button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#modalAgregar">Agregar</button>

        	<!-- Modal Agregar-->
				<div class="modal fade" id="modalAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel"> AGREGAR</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        <form class="" action="./Consultas/Registro.php" method="POST">

        
        <div >
            <label for="Usuario" class="form-label">Usuario</label>
            <input type="text" name="Usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true" value="Franklin">
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" name="Password" class="form-control " id="password" required="true">
        </div>
        <div>
            <label for="password" class="form-label">Nombre</label>
            <input type="password" name="Nombre" class="form-control " id="password" required="true">
        </div>

        <div class="mb-3">
            <label for="Cedula" class="form-label">Cedula Ciudadana</label>
            <input type="number"  name="Identificacion" class="form-control" id="cedula" required="true">
        </div>
        <!-- No se pide el Email ya que el usuario es email
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Correo" class="form-control" id="email" required="true">
        </div> -->
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="tel" name="Telefono" class="form-control" id="telefono" required="true">
        </div>

        <div class="mb-3">
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="Direccion" required="true">
        </div>
        <!--Validar que solo acepte imagenes -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Ingresar Imagen</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            
            <input class="form-control" type="hidden" value="2" name="Rol" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary m-4 w-50">Enviar</button>

    </form>
				      </div>
				      
				    </div>
				  </div>
				</div>

        	<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalModificar">Modificar</button>
        						
        	<!-- Modal modificar-->
				<div class="modal fade" id="modalModificar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal Modificar</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      
				    </div>
				  </div>
				</div>
        	<button  type="button" class="btn btn-danger m-3" data-bs-toggle="modal" data-bs-target="#modalEliminar">Eliminar</button>

        	<!-- Modal eliminar-->
				<div class="modal fade" id="modalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal Eliminar</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				     
				    </div>
				  </div>
				</div>
      	</div>
    </div>
  </div>

<!--BUSETAS -->
   <div class="col ">
    <div class="card m-5 text-center ">
    	<h5 class="card-title text-center p-3">BUSETAS</h5>
    	<div class="divider"></div>
    	<a href="RecursosAdmin/Busetas.php">
         <img src="./Imagenes/Busetas/buses.png" class="img-fluid rounded-circle m-4" title='Busetas'style="width: 70% ; height: 350px; "></a>
      <div class="card-body text-center">
        <p class="card-text ">This is a longer card with supporting text below as a </p>
        <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#modalAgregarBusetas">Agregar</button>

        	<!-- Modal Agregar Busetas-->
				<div class="modal fade" id="modalAgregarBusetas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">AGREGAR Busetas</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        <form class="" action="./Consultas/Registro.php" method="POST">

        
        <div >
            <label for="Usuario" class="form-label">Usuario</label>
            <input type="text" name="Usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" name="Password" class="form-control " id="password" required="true">
        </div>
        <div>
            <label for="password" class="form-label">Nombre</label>
            <input type="password" name="Nombre" class="form-control " id="password" required="true">
        </div>

        <div class="mb-3">
            <label for="Cedula" class="form-label">Cedula Ciudadana</label>
            <input type="number"  name="Identificacion" class="form-control" id="cedula" required="true">
        </div>
        <!-- No se pide el Email ya que el usuario es email
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Correo" class="form-control" id="email" required="true">
        </div> -->
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="tel" name="Telefono" class="form-control" id="telefono" required="true">
        </div>

        <div class="mb-3">
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="Direccion" required="true">
        </div>
        <!--Validar que solo acepte imagenes -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Ingresar Imagen</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            
            <input class="form-control" type="hidden" value="2" name="Rol" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary m-4 w-50">Enviar</button>

    </form>
				      </div>
				    
				    </div>
				  </div>
				</div>

        	<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalModificarBusetas">Modificar</button>
        						
        	<!-- Modal modificar Busetas-->
				<div class="modal fade" id="modalModificarBusetas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal Modificar Busetas</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      
				    </div>
				  </div>
				</div>
        	<button  type="button" class="btn btn-danger m-3" data-bs-toggle="modal" data-bs-target="#modalEliminarBusetas">Eliminar</button>

        	<!-- Modal eliminar Busetas-->
				<div class="modal fade" id="modalEliminarBusetas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal Eliminar Busetas</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				     
				    </div>
				  </div>
				</div>
    </div>
	</div>
  </div>

<!-- RUTAS -->

  <div class="col ">
    <div class="card m-5 text-center ">
    	<h5 class="card-title text-center p-3">RUTAS</h5>
    	<div class="divider"></div>
    	<a href="RecursosAdmin/Rutas.php">
         <img src="./Imagenes/Rutas/Ruta.png" class="img-fluid rounded-circle m-4" title='RUtas'style="width: 70% ; height: 350px; "></a>
      <div class="card-body text-center">
        <p class="card-text ">This is a longer card with supporting text below as a </p>
        
        <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#modalAgregarRutas">Agregar</button>

        	<!-- Modal Agregar Rutas-->
				<div class="modal fade" id="modalAgregarRutas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel"> AGREGAR Rutas</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        <form class="" action="./Consultas/Registro.php" method="POST">

        
        <div >
            <label for="Usuario" class="form-label">Usuario</label>
            <input type="text" name="Usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" name="Password" class="form-control " id="password" required="true">
        </div>
        <div>
            <label for="password" class="form-label">Nombre</label>
            <input type="password" name="Nombre" class="form-control " id="password" required="true">
        </div>

        <div class="mb-3">
            <label for="Cedula" class="form-label">Cedula Ciudadana</label>
            <input type="number"  name="Identificacion" class="form-control" id="cedula" required="true">
        </div>
        <!-- No se pide el Email ya que el usuario es email
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Correo" class="form-control" id="email" required="true">
        </div> -->
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="tel" name="Telefono" class="form-control" id="telefono" required="true">
        </div>

        <div class="mb-3">
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="Direccion" required="true">
        </div>
        <!--Validar que solo acepte imagenes -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Ingresar Imagen</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            
            <input class="form-control" type="hidden" value="2" name="Rol" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary m-4 w-50">Enviar</button>

    </form>
				      </div>
				    
				    </div>
				  </div>
				</div>

        	<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalModificarRutas">Modificar</button>
        						
        	<!-- Modal modificar Rutas-->
				<div class="modal fade" id="modalModificarRutas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal Modificar Rutas</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      
				    </div>
				  </div>
				</div>
        	<button  type="button" class="btn btn-danger m-3" data-bs-toggle="modal" data-bs-target="#modalEliminarRutas">Eliminar</button>

        	<!-- Modal eliminar Rutas-->
				<div class="modal fade" id="modalEliminarRutas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal Eliminar Rutas</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				 </div>
				  </div>
				</div>      
      </div>
    </div>
  </div>
  
<!-- ESTADISTICAS -->
  <div class="col ">
    <div class="card m-5 text-center ">
    	<h5 class="card-title text-center p-3">ESTADISTICA</h5>
    	<div class="divider"></div>
    	<a href="RecursosAdmin/Estadisticas.php">
         <img src="./Imagenes/Estadisticas/estadistica.png" class="img-fluid rounded-circle m-4" title='Estadisticas'style="width: 70% ; height: 350px; "></a>
      <div class="card-body text-center">
        <p class="card-text ">This is a longer card with supporting text below as a </p>
        <button type="button" class="btn btn-primary m-3" data-bs-toggle="modal" data-bs-target="#modalAgregarEstadisticas">Agregar</button>
        	<!-- Modal Agregar Rutas-->
				<div class="modal fade" id="modalAgregarEstadisticas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel"> AGREGAR Estadisticas</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        <form class="" action="./Consultas/Registro.php" method="POST">

        
        <div >
            <label for="Usuario" class="form-label">Usuario</label>
            <input type="text" name="Usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
        </div>
        <div>
            <label for="password" class="form-label">Password</label>
            <input type="password" name="Password" class="form-control " id="password" required="true">
        </div>
        <div>
            <label for="password" class="form-label">Nombre</label>
            <input type="password" name="Nombre" class="form-control " id="password" required="true">
        </div>

        <div class="mb-3">
            <label for="Cedula" class="form-label">Cedula Ciudadana</label>
            <input type="number"  name="Identificacion" class="form-control" id="cedula" required="true">
        </div>
        <!-- No se pide el Email ya que el usuario es email
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="Correo" class="form-control" id="email" required="true">
        </div> -->
        <div class="mb-3">
            <label for="Telefono" class="form-label">Telefono</label>
            <input type="tel" name="Telefono" class="form-control" id="telefono" required="true">
        </div>

        <div class="mb-3">
            <label for="Direccion" class="form-label">Direccion</label>
            <input type="text" class="form-control" id="direccion" name="Direccion" required="true">
        </div>
        <!--Validar que solo acepte imagenes -->
        <div class="mb-3">
            <label for="formFile" class="form-label">Ingresar Imagen</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            
            <input class="form-control" type="hidden" value="2" name="Rol" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary m-4 w-50">Enviar</button>

    </form>
				      </div>
				    
				    </div>
				  </div>
				</div>

        	<button type="button" class="btn btn-success m-3" data-bs-toggle="modal" data-bs-target="#modalModificarEstadisticas">Modificar</button>
        						
        	<!-- Modal modificar Rutas-->
				<div class="modal fade" id="modalModificarEstadisticas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal Modificar Estadisticas</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				      
				    </div>
				  </div>
				</div>
        	<button  type="button" class="btn btn-danger m-3" data-bs-toggle="modal" data-bs-target="#modalEliminarEstadisticas">Eliminar</button>

        	<!-- Modal eliminar Rutas-->
				<div class="modal fade" id="modalEliminarEstadisticas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Modal Eliminar Estadisticas</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
				        ...
				      </div>
				 </div>
				  </div>
				</div>    

      </div>
    </div>
  </div>
</div>
	
 
	  <script src="https://kit.fontawesome.com/247d2323bf.js" crossorigin="anonymous"></script>	

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>