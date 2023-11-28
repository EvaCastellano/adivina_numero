<?php

$opcion = $_POST['submit'] ?? null;
switch ($opcion) {
    case "Empezar":
        $min = 0;
        $intentos = $_POST['intentos'];
        $max = 2 ** $intentos;
        $num_propuesto = ($min + $max) / 2;
        $jugada = 1;
        break;
    case "Jugar":
        //obtener valores de variables
        $min = $_POST['min'];
        $max = $_POST['max'];
        $intentos = $_POST['intentos'];
        $num_propuesto = $_POST['$num_propuesto'];
        $jugada = $_POST['jugada'];
        //leer resultado
        $rtdo = $_POST['rtdo'];
        //actualizar min o max en funcón del resultado
        switch ($rtdo) {
            case ">":
                $min = $num_propuesto;
                break;
            case "<":
                $max = $num_propuesto;
                break;
            case "=":
                break;
        }
        //actualizar las variables $num_propuesto y $jugada
        $num_propuesto = ($min + $max) / 2;
        $jugada++;

        break;
    case "Volver":
        break;
    case "Reiniciar":
        break;
    default:
}
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Juego</title>
    <style>
        input {
            margin: 5px;
            width: 10vw;
            height: 10vh;
            font-size: 20px;
        }

        input:hover {
            box-shadow: 2px 2px 2px grey;
        }

        form {
            width: 15rem;
        }
    </style>
</head>

<body>
    <h1>juego.php</h1>
    <h2>Jugada:
        <?= $jugada ?>
    </h2>
    <h2>Intentos:
        <?= $intentos - $jugada ?>
    </h2>
    <h3>Número propuesto:
        <?= $num_propuesto ?>
    </h3>
    <form action="index.php" method="POST">
        <input type="submit" value="Volver" name="submit">
    </form>
    <form action="juego.php" method="POST">
        <input type="submit" value="Reiniciar" name="submit">
        <input type="submit" value="Jugar" name="submit">
        <input type="hidden" name="max" value="<?= $max ?>">
        <input type="hidden" name="min" value="<?= $min ?>">
        <input type="hidden" name="num_propuesto" value="<?= $num_propuesto ?>">
        <input type="hidden" name="intentos" value="<?= $intentos ?>">
        <input type="radio" name="rtdo" value="<">
        <input type="radio" name="rtdo" value=">">
        <input type="radio" name="rtdo" value="=">
    </form>
</body>

</html>