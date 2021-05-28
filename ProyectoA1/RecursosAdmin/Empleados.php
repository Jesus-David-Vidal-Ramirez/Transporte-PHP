<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"> 
	<title>Document</title>
</head>
<body>
	<div class="d-flex justify-content-between">
	
	 <h1 >EMPLEADOS</h1>
	 
	 
	 <h1 >Bienvenido</h1>
	 
	 <ul >
	 	<li>
	 		<a href="">Rutas</a>
	 		<a href="">Busetas</a>
	 		<a href="">Estadisticas</a>
	 	</li>
	 </ul>

	</div>
	<figure class="d-flex justify-content-center">

	<img src="" alt="La iMagen" class="d-flex justify-content-center">
	</figure>

	<section class="container " >

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

	  </section>


<div class="d-flex justify-content-center col-19 " >
                         
    <form class="p-5 m-3 w-50" action="./Consultas/Registro.php" method="POST">

        <h1 class="m-4">REGISTRO</h1>
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
            <label for="formFile" class="form-label">Rol</label>
            <input class="form-control" type="hidden" value="2" name="Rol" id="formFile">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
   <div class="p-5 m-3 w-50 d-flex align-items-center">
   	<button>Agregar</button>

   	
   	<button>Agregar</button>
   	<button>Agregar</button>
   	<button>Agregar</button>
   </div> 
</div>

</body>
</html>