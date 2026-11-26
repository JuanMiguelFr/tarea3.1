<?php
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$correo = isset($_POST['correo']) ? $_POST['correo'] : '';

$destinos = isset($_POST['destinos']) ? $_POST['destinos'] : [];
$actividades = isset($_POST['actividades']) ? $_POST['actividades'] : [];
$servicios = isset($_POST['servicios']) ? $_POST['servicios'] : [];

$total_destinos = count($destinos);
$total_actividades = count($actividades);
$total_servicios = count($servicios);

$total_general = $total_destinos + $total_actividades + $total_servicios;
?>

