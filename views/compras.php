<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #34495E;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Historial de Compras</h1>
    <table>
        <thead>
            <tr>
                <th>Cliente</th>
                <th>Servicio</th>
                <th>Fecha de Compra</th>
                <th>Cantidad</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($compras as $compra): ?>
                <tr>
                    <td><?= htmlspecialchars($compra['cliente_nombre']); ?></td>
                    <td><?= htmlspecialchars($compra['servicio_nombre']); ?></td>
                    <td><?= htmlspecialchars($compra['fecha_compra']); ?></td>
                    <td><?= htmlspecialchars($compra['cantidad']); ?></td>
                    <td>$<?= number_format($compra['total'], 2); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
