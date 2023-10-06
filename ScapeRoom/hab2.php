<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Habitacion 2</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body {
            background-image: url('img/hb2.png');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
    <?php
    $combinacion1 = 5;
    $combinacion2 = 1;
    $combinacion3 = 9;
    //var_export($_POST)
    ?>

    <div>
        <?php
        ?>
        <h4>Al abrir la puerta, te adentras en una zona médica. El aire está impregnado con un olor a desinfectante y
            metal. El suelo pulido refleja las luces parpadeantes de las máquinas.
            <br>
            A lo largo de la sala, yacen tres cuerpos cubiertos por sábanas blancas, cada uno en su propia camilla. Sus
            siluetas parecen inmóviles, atrapadas en un silencio perturbador.
            <br>
            Cinco pantallas, una vez vitales para la operación de la sala, ahora están rotas y apagadas, destellando
            fragmentos de código y estática.<br> El murmullo de la maquinaria en desuso es lo único que rompe el silencio.
            Esta sala guarda secretos y pistas que quizás te acerquen a la salida.
            <br>
            Ves otra puerta al final de la habitacion, el candado digital permite la insercion de tres números.
            Parece contrastar con el resto de la habitacion, huele a restos de azufre....
        </h4>
        <p>¿Que deseas hacer?</p>
        <a href="hab0.php">Volver a la habitacion anterior</a>
        <br>
        <br>
        <form action="" method="post">
            <?php
            echo '<input type="number" min="0" max="9" name="comb1">';
            echo '<input type="number" min="0" max="9" name="comb2">';
            echo '<input type="number" min="0" max="9" name="comb3">';
            echo '<br>';
            echo '<br>';
            echo '<input type="submit" value="Descifrar">';
            ?>
        </form>
        <?php
        if (!empty($_POST) && count($_POST) > 2) {
            if ($_POST["comb1"] != $combinacion1 || $_POST["comb2"] != $combinacion2 || $_POST["comb3"] != $combinacion3) {
                echo '<br>El candado emite un chasquido metálico y permanece cerrado. Un zumbido electrónico te advierte que la combinación no es la correcta.<br><br> Debes buscar más pistas para descifrar el código y avanzar. El tiempo corre en tu contra.';
            }
        } ?>
        <?php
        if (!empty($_POST) && count($_POST) > 2) {
            if ($_POST["comb1"] == $combinacion1 && $_POST["comb2"] == $combinacion2 && $_POST["comb3"] == $combinacion3) {
                echo '<a href="hab4.php">Entrar en la habitacion</a>';
            }
        } ?>
    </div>
</body>

</html>