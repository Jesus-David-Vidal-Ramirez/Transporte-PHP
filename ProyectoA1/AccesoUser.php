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
	<title>Transporte</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
 		<link rel="stylesheet" type="text/css" href="./CSS/estilos.css">
</head>
<body>



	
									   
<nav class="navbar navbar-expand-lg navbar-light bg-light mt-4" id="Inicio">

  <div class="container-fluid ">

	<div class="dropdown m-3">
	  <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
	    <?php  echo $_SESSION['Usuario']  ?>
	  </button>

	  <ul class="dropdown-menu" >
	    <li class="Reservas" data-bs-toggle="modal" data-bs-target="#Reservas"><a class="dropdown-item" href="#" >Reservas</a></li>
	    <li class="Compras" data-bs-toggle="modal" data-bs-target="#Compras" ><a class="dropdown-item" href="#">Compras</a></li>
	    <li class="Cerrar"  ><a class="dropdown-item" href="logout.php">Cerrar Session</a></li>
	   
	  </ul>
	</div>




<!-- Modal Reservas -->
<div class="modal fade " id="Reservas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reservas</h5>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
	      <div class="modal-body">     
	      	Salieron las reservas
	      </div>
      </div> 
    </div>
  </div>

<!-- Modal Compras-->
<div class="modal fade " id="Compras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Compras</h5>
             <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
      </div>
	      <div class="modal-body">     
	      	Salieron las Compras
	      </div>
      </div> 
    </div>
  </div>


  	<i class="fas fa-bus"></i>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="#Inicio">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Destinos">Nuestras Rutas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Contactos">Contactos</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Destino" aria-label="Search">
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
  <h1>
  	Destinos mas buscados
  </h1>
</div>


<div class="row row-cols-1 row-cols-md-3 g-4  m-2 ">

<?php

require_once('./Consultas/SelectRutas.php');

?>

 <?php foreach ($rutas as  $ruta): ?>

 <div class="col">
    <div class="card">
      <img src="Imagenes/<?php echo $ruta[ 'Imagen']  ?>" class="card-img-top" alt="<?php echo $ruta[ 'Imagen']  ?>" width="1200px" height="310px">
      <div class="card-body">
        <h5 class="card-title"> <?php echo $ruta[ 'Nombre']  ?> </h5>
        <p class="card-text">
         <?php echo $ruta[ 'Info']  ?>
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
                <strong>Riklinsus</strong>
                <p>
                  Ave. 22-89, Cra. 17 #22-1
                  <br>
                  Sincelejo Sucre
                </p>
                </div>
                <div>
                <strong>Horarios</strong>
                <p>
                  Lunes A viernes 6am : 6pm
                  <br>
                  Sabados y domingos 8am : 4pm 

                </p>
              </div>
               
                
            </div>
        </div>
    </div>
    
     <div class="col-sm-4 " >
        <div class="card">
            <div class="card-body align-items-end">
                <h5 class="card-title text-center">Redes Sociales</h5>
                <div class="text-center">
                  <a href="#" title="Whatsapp" >
                    <i class="fab fa-whatsapp-square fa-7x"></i><br> </a>
                  <a href="#" title="Facebook"><i class="fab fa-facebook-square fa-7x"></i><br> </a>
                  <a href="#" title="Instagram"> <i class="fab fa-instagram-square fa-7x"> </i><br> </a>
                  
                  
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







	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 
	<script src="https://kit.fontawesome.com/247d2323bf.js" crossorigin="anonymous"></script>	

</body>
</html>