

<?php

require_once('./Conexiones/conexion.php');


$sql = "SELECT * FROM rutas";

$stmt = $pdo->prepare($sql);

$stmt -> setFetchMode(PDO::FETCH_ASSOC);

$stmt -> execute();

$rutas = $stmt->fetchAll();


?>

