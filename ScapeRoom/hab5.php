<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Habitacion 5</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body {
            background-image: url('img/hb5.png');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $combinacion1 = 3;
        $combinacion2 = 1;
        $combinacion3 = 6;
        if (empty($_POST)) {
            $vida = 3;
        } else {
            $vida = $_POST["vida"] - 1;
        }
        //var_export($_POST)
        ?>
        <h4>
            El salón principal se abre ante ti, un espacio vasto y desolado lleno de torretas y robots. El aire está
            cargado con el olor de la electrónica chamuscada y el eco de explosiones distantes retumba en las paredes.
            Luces parpadeantes crean una atmósfera intermitente de tensión.
        </h4>
        <h4>
            Neones dañados titilan en tonos ámbar y verde, destellando fragmentos de luz en las esquinas más oscuras del
            salón. Entre las sombras, se yerguen torretas inmóviles, testimonios de una batalla que tuvo lugar aquí.
        </h4>
        <h4>
            A lo lejos, el candado emite un zumbido mecánico, y un contador digital parpadea en rojo, marcando la
            cantidad de veces que puedes intentar descifrar la combinacion. Es un recordatorio
            constante de que debes actuar con rapidez y decisión en este lugar sombrío y peligroso.
        </h4>
        <h4>
            Detras tuya oyes un rudio, la puerta por la que entraste se ha cerrado, dejandote no opcion que intentar
            encontrar las pistas.
        </h4>
        <h4>
            Puedes observar al lado de la puerta un circuito con resistencias, por lo que ves el primer resistor es tres
            veces más grande que el segundo, y el tercero tiene el doble de resistencia que el primero.
        </h4>
        <br>
        <form action="" method="post">
            <?php
            if ($vida >= 0) {
                echo '<input type="number" min="0" max="9" name="comb1">';
                echo '<input type="number" min="0" max="9" name="comb2">';
                echo '<input type="number" min="0" max="9" name="comb3">';
                echo '<input type="hidden" name="vida" value="' . $vida . '">';
                echo '<br>';
                echo '<br>';
                echo '<input type="submit" value="Descifrar">';
            } else if ($vida < 0 && ($_POST["comb1"] != $combinacion1 || $_POST["comb2"] != $combinacion2 || $_POST["comb3"] != $combinacion3)) {
                echo "<p>Notas una mano fria agarrandote la garganta, y ves en la pared tu sombra proyectada por decenas de luces apuntandote</p>";
                echo "<p>Lo único que oyes antes de perder el conocimiento para siempre, es el ruido de todas ellas balanceandose contra ti, aplastando todo componento y órgano en tu cuerpo</p>";
                echo "<p>FIN</p>";
            }
            ?>
        </form>
        <?php
        if (!empty($_POST) && count($_POST) > 2) {
            if ($_POST["comb1"] != $combinacion1 || $_POST["comb2"] != $combinacion2 || $_POST["comb3"] != $combinacion3) {
                switch ($vida) {
                    case 2:
                        echo "<p>Puedes escuchar a lo lejos como se va encendiendo una maquinaria, los cables que entran por la sala empiezan a chispear</p>";
                        echo "<p>El contador a bajado un punto, la combinacion introducida no fue la correcta</p>";
                        break;
                    case 1:
                        echo "<p>Notas como las maquinas y robots de alrededor empiezan a brillar, parece que los cables estan alimentado de nuevo estas maquinas aparentemente inertes</p>";
                        echo "<p>El contador a bajado un punto, la combinacion introducida no fue la correcta</p>";
                        break;
                    case 0:
                        echo "<p>Empiezas a notar como muchos empiezan a moverse y rastrear la gran sala, solo te queda una oportunidad antes de que descubran donde te encuentres</p>";
                        echo "<p>El contador esta en rojo parpadeando entero, ya solo te queda una oportunidad!</p>";
                        break;
                    default:
                        echo "<p>";
                        echo "<a href='hab0.php'>Vuelve a empezar</a>";
                        break;
                }
            }
        } ?>
        <?php
        if (!empty($_POST) && count($_POST) > 2) {
            if ($_POST["comb1"] == $combinacion1 && $_POST["comb2"] == $combinacion2 && $_POST["comb3"] == $combinacion3) {
                echo '<a href="hab6.php">Entrar en la habitacion</a>';
            }
        } ?>
    </div>
</body>

</html>