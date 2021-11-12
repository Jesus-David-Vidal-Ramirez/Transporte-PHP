<?php

require_once './Conexiones/conexion.php';


$sql = "SELECT SUM(total) AS Total, NombreRuta, Fecha FROM detalleventas WHERE NombreRuta = NombreRuta GROUP BY NombreRuta";

$stmt = $pdo ->prepare($sql);

$stmt -> setFetchMode(PDP::FETCH_ASSOC);

$stmt->execute();

$detalleVentas = $stmt->fetchAll();


?>
