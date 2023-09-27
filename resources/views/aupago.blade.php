<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autorizacion de pago</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .btn-aceptar, .btn-declinar {
            padding: 5px 10px;
            background-color: #4CAF50; /* Verde para aceptar */
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-declinar {
            background-color: #f44336; /* Rojo para declinar */
        }
    </style>
</head>
<body>
    <h1>Autorizacion
    </h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Aceptar</th>
            <th>Declinar</th>
        </tr>
        <tr>
            <td>Nombre 1</td>
            <td><button class="btn-aceptar">Aceptar</button></td>
            <td><button class="btn-declinar">Declinar</button></td>
        </tr>
        <tr>
            <td>Nombre 2</td>
            <td><button class="btn-aceptar">Aceptar</button></td>
            <td><button class="btn-declinar">Declinar</button></td>
        </tr>
        <tr>
            <td>Nombre 3</td>
            <td><button class="btn-aceptar">Aceptar</button></td>
            <td><button class="btn-declinar">Declinar</button></td>
        </tr>
    </table>
</body>
</html>
