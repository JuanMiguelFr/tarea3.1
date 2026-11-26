<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agencia de Viajes - Personalizar Paquete</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        div {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="contenedor">
    <h1>Personaliza tu Paquete Turístico</h1>
    
    <form action="resultados.php" method="POST">
        
        <h3>Datos del cliente</h3>
        <div class="campo">
            <label for="nombre">Nombre completo:</label><br>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div class="campo">
            <label for="correo">Correo electrónico:</label><br>
            <input type="email" id="correo" name="correo" required>
        </div>

        <h3>A. Destinos turísticos</h3>
        <div class="campo">
            <p><small>(Mantén presionada la tecla Ctrl o Cmd para elegir varios)</small></p>
            <select name="destinos[]" multiple>
                <option value="Cancún">Cancún</option>
                <option value="Puerto Vallarta">Puerto Vallarta</option>
                <option value="Acapulco">Acapulco</option>
                <option value="Los Cabos">Los Cabos</option>
                <option value="Mazatlán">Mazatlán</option>
                <option value="Huatulco">Huatulco</option>
                <option value="Puerto Escondido">Puerto Escondido</option>
            </select>
        </div>

</body>
</html>