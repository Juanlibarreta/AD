<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Habitacion 4</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body {
            background-image: url('img/hb3.png');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $combinacion1 = 5;
        $combinacion2 = 3;
        $combinacion3 = 1;
        //var_export($_POST)
        ?>
        <h4>
            Entras en un lavabo que parece haber sido olvidado por el tiempo. Las paredes, antes blancas, ahora están
            cubiertas de moho y desconchones. La luz parpadeante apenas ilumina el lugar, dejando rincones oscuros y
            sombríos.
        </h4>
        <h4>
            El lavabo está salpicado de manchas oscuras, y el agua gotea de un grifo oxidado con un sonido monótono y
            perturbador. El espejo está roto, mostrando reflejos distorsionados de lo que alguna vez fue.
            <br>
            Sobre el lavabo y en las esquinas, se amontonan trastos oxidados y componentes mecánicos ensangrentados,
            creando una macabra colección de objetos olvidados.
        </h4>
        <h4>
            En una esquina, se encuentra un candado oxidado de tres números. Cada giro de su dial emite un sonido
            metálico que parece resonar en la oscuridad del lugar. Los números posibles están desgastados, como si
            hubieran sido manipulados muchas veces.
        </h4>
        <h4>
            Percibes dibujado debajo de cada numero del candado una especie de simbolos, en el primero una pantalla, la
            segunda una cruz, y la tercera una bala
        </h4>
        <p>¿Que deseas hacer?</p>
        <a href="hab1.php">Volver a la habitacion anterior</a>
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
                echo '<a href="hab5.php">Entrar en la habitacion</a>';
            }
        } ?>
    </div>
</body>

</html>