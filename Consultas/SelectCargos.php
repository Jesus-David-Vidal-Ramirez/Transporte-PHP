<?php

require_once'./Conexiones/conexion.php';

$sql = "SELECT * FROM Cargos";

$stmt = $pdo ->prepare($sql);

$stmt -> setFetchMode(PDO::FETCH_ASSOC);

$stmt -> execute();


$Cargos = $stmt -> fetchAll();

?>