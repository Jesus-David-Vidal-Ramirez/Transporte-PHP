<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Transporte</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="./CSS/estilos.css">  
 <!--AOS <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">-->
 <!-- SWEENTALERT -->
 <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
   <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script>
   
</head>
<body>

    <!--Nav -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-4" id="Inicio">


      <div class="container-fluid ">
      			<!-- Button trigger modal -->
    <button type="button" id="iniciarsesion" class="btn btn-primary me-5 text-capitalize" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="mostrar()">
      iniciar sesi&oacute;n
    </button>


    <!-- Modal -->
    <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-capitalize" id="exampleModalLabel" >iniciar sesi&oacute;n</h5>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                 <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          </div>
          <div class="modal-body">

            <!------------ FORMULARIO LOGIN ----------->
          	<form action="./Consultas/Probando.php" method="POST">
    		  <div class="mb-3">
    		    <label for="Usuario" class="form-label">Correo Electronico</label>
    		    <input type="text" name="Usuario" id="Usuario"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="" placeholder="Usuario" >
    		  </div>
    		  <div class="mb-3">
    		    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    		    <input type="Password" name="Password" class="form-control" id="exampleInputPassword1" required="" placeholder="Contraseña">
    		  </div>
      <!-- <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div> -->
      <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
      <button type="submit" class="btn btn-primary text-capitalize">iniciar sesi&oacute;n</button><br>
    </form>

          </div>
          <!--Registro dentro del modal -->
          <form action="Registro.php">
          <div class="modal-footer">
            <p>Algunas funcionalidades de esta pagina web estan solo disponibles para usuarios registrados. Crea una cuenta ahora y obten acceso a las paginas protegidas de esta web</p>
            <button type="submit" class="btn btn-success">Registrarse</button>
          </form>


          </div> 
        </div>
      </div>
    </div>


      <i class="fas fa-bus"></i>
        <!--<a class="navbar-brand" href="#">Icono</a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto ">
            <li class="nav-item ">
              <a class="nav-link active " aria-current="page" href="#Inicio">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#Destinos">Nuestras Rutas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#Contactos">Contactos</a>
            </li>
           
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Busqueda" aria-label="Busqueda">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
        </div>
      </div>
    </nav>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
       <text x="680" y="100" font-size="4em" font-weight="2em" letter-spacing="1em">RIKLINSUS</text>
      <path fill="#0099ff" fill-opacity="1" d="M0,32L30,48C60,64,120,96,180,96C240,96,300,64,360,58.7C420,53,480,75,540,122.7C600,171,660,245,720,245.3C780,245,840,171,900,165.3C960,160,1020,224,1080,250.7C1140,277,1200,267,1260,250.7C1320,235,1380,213,1410,202.7L1440,192L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path>
    </svg>  


<!--Contenido o section -->
<div class="p-4" id="Destinos">
  <h1 class="title ">
  	Destinos mas buscados
  </h1>
</div>


<!--- RUTAS DESDE LA BD -->
<div class="row row-cols-1 row-cols-md-3 g-4  m-2 ">

<?php
 
require_once('./Consultas/SelectRutas.php');

?>

 <?php foreach ($rutas as  $ruta): ?>

 <div class="col rutas">
    <div class="card">
      <img src="Imagenes/<?php echo $ruta['Imagen']  ?>" class="card-img-top" alt="<?php echo $ruta[ 'Imagen']  ?>" width="1200px" height="310px">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $ruta[ 'Nombre']  ?> </h5>
        <p class="card-text">
         <?php echo $ruta[ 'Informacion']  ?>
        </p>
       
      </div>
      <div class="card-footer d-flex justify-content-between"   >
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Comprar</button>
        <strong calss="pl-2"><?php echo $ruta[ 'Precio']  ?></strong>
        
       <button class="btn btn-warning align-items-start" data-bs-toggle="modal" data-bs-target="#exampleModal">Reservar</button>
      </div>
    </div>
  </div>
  <?php endforeach; ?> 
</div>


<hr id="Contactos">
<!--Footer -->

<div class="row g-4  m-4 pb-3 d-flex justify-content-center">
   
    <div class="col-sm-4 ">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center m-4">Ubicacion</h5>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3937.422243456746!2d-75.39448358621696!3d9.295802393336057!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e5914520ac1258b%3A0x80b48b7976601f5f!2sCorposucre!5e0!3m2!1ses!2sco!4v1619670410718!5m2!1ses!2sco" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="mt-4">
                <strong>Riklinsus</strong>
                    <p>
                      Ave. 22-89, Cra. 17 #22-1
                      <br>
                      Sincelejo Sucre
                    </p>
                  </div>
            </div>
        </div>

    </div>
    
    <div class="col-sm-4 ">
        <div class="card">
            <div class="card-body">
              
                <h5 class="card-title text-center">Contacto</h5>
          
                <div> 
                  <strong>Reservas</strong>
                    <p>
                         +57 323 2265283 <br>
                      +57 301 5977587<br>
                     </p> 
                </div>
                <div>
                  
                </div>
                <div>
                  <strong>Horarios</strong>
                    <p>
                      Lunes A viernes 6am : 6pm
                      <br>
                      Sabados y domingos 8am : 4pm 
                    </p>
              </div>
               <strong>PQRS</strong>
                <br>
                  <button type="button" id="iniciarsesion" class="btn btn-primary mt-2 text-capitalize" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="mostrar()">
      Realizar
    </button>
  

            </div>
        </div>
    </div>
    
     <div class="col-sm-4" >
        <div class="card">
            <div class="card-body align-items-end">
                <h5 class="card-title text-center">Redes Sociales</h5>
                  <div class="grid">

                    <div class="g-col-4  d-flex justify-content-start">
                      <a href="#" title="Whatsapp">
                        <i class="fab fa-whatsapp-square fa-7x"></i> 
                      </a>
                    </div>

                    <div class="g-col-4 d-flex justify-content-center">
                      <a href="#" title="Facebook" class=" justify-content-center">
                        <i class="fab fa-facebook-square fa-7x "></i> 
                      </a>
                    </div>
                    <div class="g-col-4 d-flex justify-content-end">
                      <a href="#" title="Instagram" class=" justify-content-end"> 
                        <i class="fab fa-instagram-square fa-7x"> </i> 
                      </a>
                    </div>
                  </div>
              </div>
          </div>
      </div>
    
        
</div>


<div class="row  m-4 pb-3" id="contacto" >
    <div class=" pt-4 d-flex justify-content-center" >
        <p> &copyCopyright2021 - Riklinsus</p>
    </div>
    
</div>

<hr>





<hr>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


<script type="text/javascript" src="script.js"> </script>

<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script> -->
<!--AOS 
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>-->
</body>
</html>