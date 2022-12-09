<?php session_start() ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="/css/output.css" rel="stylesheet">

</head>

<body>
    <?php
    require_once '../src/auxiliar.php';

    $pdo = conectar();
    $usuario = New App\Tablas\Usuario($_SESSION['login']);
    
/*     $sent = $pdo->query("SELECT * FROM persona ORDER BY dni");
 */
/*     if(App\Tablas\Usuario::esta_logueado()){
        $usuario = \App\Tablas\Usuario::obtener(intval($_SESSION['login']['id']));

    } */


    ?>


    <div class="container mx-auto">
        <?php require '../src/_navbar.php' ?>
        <table class="table mx-auto border-solid border-4">
            <tr>
                <th class="cell border-2">
                    DNI
                </th>
                <th class="cell border-2">
                    Nombre
                </th>
                <th class="cell border-2">
                    Apellido1
                </th>
                <th class="cell border-2">
                    Apellido2
                </th>
                <th class="cell border-2">
                    Género
                </th>
            </tr>
            <tbody>
                <?php foreach ($sent as $fila): ?>
                <tr>
                    <td><?= $fila['dni'] ?></td>
                    <td><?= $fila['nombre'] ?></td>
                    <td><?= $fila['apellido1'] ?></td>
                    <td><?= $fila['apellido2'] ?></td>
                    <td><?= $fila['genero'] ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="/js/flowbite/flowbite.js"></script>

</body>

</html>