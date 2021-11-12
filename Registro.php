<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./CSS/estilos.css">
</head>
<body class="body">
	

<a href="./index.php" class="btn btn-outline-secondary  border-3 mt-5 mx-5 regresar"> Regresar </a>

<div class="d-flex justify-content-around col-19 " >
                         
    <form class="p-5  w-50 registro " action="./Consultas/Registro.php" method="POST">
        <div class="mb-3">
            <h1 class="text-center text-dark text-uppercase">Registro</h1>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">

           
            <path fill="#0099ff" fill-opacity="1" d="M0,32L30,48C60,64,120,96,180,96C240,96,300,64,360,58.7C420,53,480,75,540,122.7C600,171,660,245,720,245.3C780,245,840,171,900,165.3C960,160,1020,224,1080,250.7C1140,277,1200,267,1260,250.7C1320,235,1380,213,1410,202.7L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>

        </div>
        <div >
            <label for="Usuario" class="form-label labelRegistro">Usuario</label>
            <input type="number" name="Usuario" class="form-control inputRegistro" id="exampleInputEmail1" aria-describedby="emailHelp" required="true">
        </div>

        <div>
            <label for="password" class="form-label labelRegistro">Nombre</label>
            <input type="text" name="Nombre" class="form-control inputRegistro" id="password" required="true">
        </div>

        <div class="mb-3">
            <label for="Apellido" class="form-label labelRegistro">Apellido</label>
            <input type="text"  name="Apellido" class="form-control inputRegistro" id="Apellido" required="true">
        </div>
        

        <div>
            <label for="password" class="form-label labelRegistro">Contraseña</label>
            <input type="password" name="Password" class="form-control inputRegistro" id="password" required="true">
        </div>
      
        <div class="mb-3">
            <label for="Correo" class="form-label labelRegistro">Correo</label>
            <input type="email"  name="Correo" class="form-control inputRegistro" id="Correo" required="true">
        </div>
        

        <div class="mb-3">
            <label for="Telefono" class="form-label labelRegistro">Telefono</label>
            <input type="tel" name="Telefono" class="form-control inputRegistro" id="telefono" required="true">
        </div>

        <div class="mb-3">
            <label for="Direccion" class="form-label labelRegistro">Direccion</label>
            <input type="text" class="form-control inputRegistro" id="direccion" name="Direccion" required="true">
        </div>
        <!--Validar que solo acepte imagenes -->
        <!-- <div class="mb-3">
            <label for="formFile" class="form-label labelRegistro">Ingresar Imagen</label>
            <input class="form-control inputRegistro" type="file" id="formFile">
        </div> -->
        <div class="mb-3">
            <input class="form-control" type="hidden" value="USER" name="Rol" id="formFile">
        </div>
        <button type="submit" class="btn btn-outline-dark w-100 p-3 mt-3 text-uppercase" name="RegistroUser">Registrar</button>

    </form>
</div>
 
       

    

	


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>