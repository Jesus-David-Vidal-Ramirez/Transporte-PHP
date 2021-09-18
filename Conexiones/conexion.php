 <?php
include("Parametros.php");

try{

	$pdo = new PDO('mysql:host='.$host.';dbname='.$bd ,$usuario,$clave, 
		array(\PDO::MYSQL_ATTR_INIT_COMMAND =>  'SET NAMES utf8') );

	//echo "Conexion exitosaaaaaaaa";
}catch(PDOExeption $e){
	echo $e->getMenssage();

}

?>

 