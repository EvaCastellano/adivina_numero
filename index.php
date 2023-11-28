<?php
$min=0;
$max= 0;
$num_propuesto = 0;
$jugada=0;
$intentos=$_POST['intentos'];
$rtdo=0;


?>

<!doctype html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport">
    <title>Adivina número</title>
   <style>
    .grande{
        margin-bottom: 10%;
    }

   </style>
</head>

<body>
<fieldset style="width: 50%;float:left;margin-left: 20%; background: #aeffaa" class="grande">
    <legend><h1>Juego adivina número</h1></legend>
    <h2> Selecciona un intervalo del menú de abajo</h2>
    <fieldset>
        <legend>Esteblece intervalo</legend>
        <form action="juego.php" method="POST">
            <input type="radio" name="intentos" value=10 checked> 1-1.024(2<sup>10</sup>). 10 intentos<br>
            <input type="radio" name="intentos" value=15> 1-32.268(2<sup>15</sup>). 15 intentos<br>
            <input type="radio" name="intentos" value=20> 1-1.048.536(2<sup>20</sup>). 20 intentos<br>
            <input type="submit" value="Empezar" name="submit">
        </form>
    </fieldset>
    <br/>
    <h2> Piensa un número de ese intervalo</h2>
    <h2> La aplicación lo acertará en el número de intentos establecidos según el intervalo</h2>
    <hr/>

    <h2> Cada vez que la aplicación te especifique un número deberás de indicar</h2>
    <ul>
        <ol>Si el número buscado es mayor</ol>
        <ol>Si el número buscado es menor</ol>
        <ol>Si has acertado el número</ol>
    </ul>


</fieldset>
</body>
</html>