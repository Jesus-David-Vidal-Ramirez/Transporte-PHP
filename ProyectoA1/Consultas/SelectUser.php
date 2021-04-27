<?php




 
require_once'./Conexiones/conexion.php';

$sql = "SELECT * FROM registro";
$stmt = $pdo->prepare($sql);

$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();

$registros=$stmt->fetchAll();

?>
