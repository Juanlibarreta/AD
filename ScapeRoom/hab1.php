<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Habitacion 1</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <style>
        body{
            background-image: url('img/hb1.webp');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
</head>

<body>
    <?php
    $combinacion1 = 7;
    $combinacion2 = 6;
    $combinacion3 = 7;
    //var_export($_POST)
        ?>
   <div>
        <h4>
            Al abrir la puerta, te encuentras en una estancia que más parece sacada de una película de acción. Las
            paredes de
            acero están alineadas con estantes repletos de armas de fuego de diversos calibres y estilos.<br><br> Entre
            ellas,
            destaca una imponente estantería con armas cuerpo a cuerpo, desde espadas hasta bastones electrificados.
            <br>
            <br>
            En el centro de la habitación, una mesa de
            operaciones está cubierta de herramientas y equipo militar.
            <br>
            <br>    
            Frente a ti, una puerta de acero pesado bloquea el camino, resguardada por un candado digital.<br> Tres números
            están dispuestos en el teclado: uno a cada lado y uno central.<br>Tras una observacion rápida te das cuenta que los nº exteriores estan atascados cada uno en el 7.<br> El número central está marcado con un oscuro
            rastro de sangre fresca.
            <br>
            ¿Que deseas hacer?
        </h4>
        <form id="GFG" action="" method="post">
            <input type="submit" name="mirar" value="Mirar la mesa">
        </form>
        <br />
        <a href="hab0.php">Volver a la habitacion anterior</a>
        <br />
        <?php
        if (!empty($_POST)) {
            if (count($_POST) == 1) {
                echo '<p>Examinas los papeles desparramados sobre la mesa. Son informes clasificados y diagramas técnicos de alta tecnología. Entre ellos, encuentras un reporte que ha sido cruelmente desgarrado y quemado.<br/><br/>
                    En los restos del documento, identificas tres números que sobresalen 9 - 5 - 1, como si alguien hubiera intentado destruir la información.<br/><br/> Parece que están mezclados en medio de la información técnica, como si alguien hubiera tratado de ocultarlos. Necesitarás descifrar el orden correcto para abrir la puerta del candado.</p>';
            }
        }
        ?>
        <br />
        <form action="" method="post">
            <?php
            echo '<input type="number" min="0" max="9" name="comb1" value="7" readonly>';
            echo '<input type="number" min="0" max="9" name="comb2">';
            echo '<input type="number" min="0" max="9" name="comb3" value="7" readonly>';
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
                echo '<a href="hab3.php">Entrar en la habitacion</a>';
            }
        }?>
    </div>
</body>

</html>