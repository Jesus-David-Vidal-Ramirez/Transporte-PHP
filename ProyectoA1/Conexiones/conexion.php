 <?php
include("Parametros.php");

try{

	$pdo = new PDO('mysql:host='.$host.';dbname='.$bd,$usuario,$clave) ;
	

	//echo "Conexion exitosaaaaaaaa";
}catch(PDOExeption $e){
	echo $e->getMenssage();

}

?>

 