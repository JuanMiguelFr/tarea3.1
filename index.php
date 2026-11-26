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
        <h3>B. Actividades turísticas</h3>
        <div class="campo">
            <label><input type="checkbox" name="actividades[]" value="Buceo"> Buceo</label><br>
            <label><input type="checkbox" name="actividades[]" value="Paseo en lancha"> Paseo en lancha</label><br>
            <label><input type="checkbox" name="actividades[]" value="Visita a zonas arqueológicas"> Visita a zonas arqueológicas</label><br>
            <label><input type="checkbox" name="actividades[]" value="Senderismo"> Senderismo</label><br>
            <label><input type="checkbox" name="actividades[]" value="Pesca deportiva"> Pesca deportiva</label><br>
            <label><input type="checkbox" name="actividades[]" value="Recorrido gastronómico"> Recorrido gastronómico</label><br>
            <label><input type="checkbox" name="actividades[]" value="Visita a museos"> Visita a museos</label>
        </div>

        <h3>C. Servicios adicionales</h3>
        <div class="campo">
            <label><input type="checkbox" name="servicios[]" value="Transporte al aeropuerto"> Transporte al aeropuerto</label><br>
            <label><input type="checkbox" name="servicios[]" value="Desayuno incluido"> Desayuno incluido</label><br>
            <label><input type="checkbox" name="servicios[]" value="Hospedaje de lujo"> Hospedaje de lujo</label><br>
            <label><input type="checkbox" name="servicios[]" value="Seguro de viajero"> Seguro de viajero</label><br>
            <label><input type="checkbox" name="servicios[]" value="Renta de automóvil"> Renta de automóvil</label><br>
            <label><input type="checkbox" name="servicios[]" value="Guía turístico"> Guía turístico</label>
        </div>

        <button type="submit">Generar paquete</button>
    </form>
</div>
</body>
</html>