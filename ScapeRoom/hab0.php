<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Habitacion 0</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <style>
        body{
            background-image: url('img/hb0.png');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
    <div>
        <?php
        //var_export($_POST);
        ?>
        <h4>Te despiertas en una habitación oscura, con solo la débil luz de una pantalla parpadeante.<br> Frente a ti, se
            encuentran dos puertas misteriosas. A lo lejos, destaca un interruptor solitario.<br> El aire está cargado de
            electricidad y la sensación de urgencia se palpa en el ambiente. Es hora de tomar una decisión.</h4>
        <p>¿Que deseas hacer?</p>
        <a href="hab1.php">Ir por la puerta de la derecha</a>
        <br>
        <a href="hab2.php">Ir por la puerta de la izquierda</a>
        <br>
        <br>
        <form id="GFG" action="" method="post">
            <input type="submit" name="mirar" value="Mirar Alrededor">
        </form>

        <?php
        if (!empty($_POST)) {
            echo '<p>Al presionar el interruptor, una luz tenue revela una mesa ensangrentada en el rincón.<br/> Sobre ella, apenas visible, un número dibujado con trazos temblorosos: el 6.</p>';
        }
        ?>
    </div>
</body>

</html>