<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #2C3E50;
        }

        .servicio-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .servicio {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .servicio img {
            max-width: 100%;
            border-radius: 10px;
        }

        .servicio h2 {
            margin: 10px 0;
            color: #34495E;
        }

        .servicio p {
            color: #7F8C8D;
        }

        .precio {
            font-size: 1.2em;
            font-weight: bold;
            color: #27AE60;
        }
    </style>
</head>
<body>
    <h1>Servicios Disponibles</h1>
    <div class="servicio-container">
        <?php foreach ($servicios as $servicio): ?>
            <div class="servicio">
                <h2><?= htmlspecialchars($servicio['nombre']); ?></h2>
                <img src="<?= htmlspecialchars($servicio['imagen']); ?>" alt="<?= htmlspecialchars($servicio['nombre']); ?>">
                <p><?= htmlspecialchars($servicio['descripcion']); ?></p>
                <p class="precio">Precio: $<?= number_format($servicio['precio'], 2); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>

