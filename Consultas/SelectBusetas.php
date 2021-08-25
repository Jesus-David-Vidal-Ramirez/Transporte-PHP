<?php


 
require_once'./Conexiones/conexion.php';

$sql = "SELECT * FROM Busetas";

$stmt = $pdo->prepare($sql);

$stmt->setFetchMode(PDO::FETCH_ASSOC);

$stmt->execute();

$Busetas=$stmt->fetchAll();
?>