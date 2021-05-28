<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
 
</head>
<body>
	

<a href="./index.php" class="btn btn-outline-secondary border-3 mt-3 mx-4"> Regresar </a>

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
            <input type="text" name="Nombre" class="form-control " id="password" required="true">
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
</div>


	


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>