<?php

 
require_once'./Conexiones/conexion.php';

$sql = "SELECT * FROM Empleados";

$stmt = $pdo->prepare($sql);

$stmt->setFetchMode(PDO::FETCH_ASSOC);

$stmt->execute();

$Empleados=$stmt->fetchAll();

?>