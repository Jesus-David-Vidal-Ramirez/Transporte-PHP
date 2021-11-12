<?php

require_once'../Conexiones/conexion.php';

$sql="SELECT e.Nombre, e.Id_Empleados, e.Cargo, b.Placa,b.IdConductor FROM EMPLEADOS AS e  LEFT JOIN BUSETAS AS b ON e.Id_Empleados = b.IdConductor WHERE e.Cargo = 'Conductor' AND b.IdConductor IS NULL";


$stmt = $pdo ->prepare($sql);

$stmt ->setFetchMode(PDO::FETCH_ASSOC);

$stmt->execute();

$Conductores = $stmt->fetchAll();



?>