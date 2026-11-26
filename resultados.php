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

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen del Paquete</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
    </style>
</head>
<body>

    <h1>Resumen de tu Paquete Turístico</h1>

    <h2>Datos del Cliente</h2>
    <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
    <p><strong>Correo electrónico:</strong> <?php echo htmlspecialchars($correo); ?></p>

    <h2>Destinos Seleccionados</h2>
    <?php if ($total_destinos > 0): ?>
        <ul>
            <?php foreach ($destinos as $destino): ?>
                <li><?php echo htmlspecialchars($destino); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No seleccionaste ningún elemento</p>
    <?php endif; ?>
    <p><strong>Total de destinos:</strong> <?php echo $total_destinos; ?></p>

    <h2>Actividades Turísticas</h2>
    <?php if ($total_actividades > 0): ?>
        <ul>
            <?php foreach ($actividades as $actividad): ?>
                <li><?php echo htmlspecialchars($actividad); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No seleccionaste ningún elemento</p>
    <?php endif; ?>
    <p><strong>Total de actividades:</strong> <?php echo $total_actividades; ?></p>

    <h2>Servicios Adicionales</h2>
    <?php if ($total_servicios > 0): ?>
        <ul>
            <?php foreach ($servicios as $servicio): ?>
                <li><?php echo htmlspecialchars($servicio); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No seleccionaste ningún elemento</p>
    <?php endif; ?>
    <p><strong>Total de servicios:</strong> <?php echo $total_servicios; ?></p>

    <hr>
    <p><strong>Total general de elementos seleccionados:</strong> <?php echo $total_general; ?></p>

    <br>
    <a href="index.php">Volver al formulario</a>

</body>
</html>