<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('img/fondo.png');
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        input[type="password"] {
            width: 70px;
            height: 70px;
            margin: 3px;
            padding: 10px;
            border-radius: 20px;
            border: 3px solid black;
            color: transparent;
            text-align: center;
        }
        
        input[type="text"] {
            width: 70px;
            height: 70px;
            margin: 3px;
            padding: 10px;
            border-radius: 20px;
            border: 3px solid black;
            text-align: center;
        }

        input[type="number"] {
            width: 70px;
            height: 70px;
            margin: 3px;
            padding: 10px;
            border-radius: 20px;
            border: 3px solid;
            text-align: center;
        }
    </style>
</head>

<body>
    <div align="center">
        <h1 style="color:white">Nivel 1</h1>
        <form id="form1" action="" method="post">

            <?php
            session_start();
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pulsado"])) {
                $valor_input = $_POST["pulsado"];
                // Verifica si el array ya existe en la sesión, si no, créalo
                if (!isset($_SESSION["pulsados"])) {
                    $_SESSION["pulsados"] = array();
                }
                //var_export($_SESSION["pulsados"]);
                $_SESSION["pulsados"][] = $valor_input;

            }
            //var_export($_POST);
            if (empty($_POST)) {
                $array_numeros = array();
                $i = 1;
                while ($i <= 9) {
                    $random = random_int(1, 9);
                    if (!in_array($random, $array_numeros, false)) {
                        array_push($array_numeros, $random);
                        $i++;
                    }
                }
                $total = 0;
                $vidas = 3;
            } else {
                $array_numeros = $_POST["numero"];
                $vidas = $_POST["vidas"];
                $total = $_POST["total"] + $_POST["pulsado"];
            }
            //var_export($array_numeros);

            echo '<p></p>';
            for ($i = 0; $i < count($array_numeros); $i++) {
                if ($i % 3 == 0 && $i != 0) {
                    echo "<p></p>";
                }
                if(empty($_POST)){
                    echo "<input type='password' name='numero[]' value='" . $array_numeros[$i] . "' onclick='go(" . $array_numeros[$i] . ")'>";
                }else{
                    if(in_array($array_numeros[$i],$_SESSION["pulsados"])){
                        echo "<input type='text' name='numero[]' value='" . $array_numeros[$i] . "' onclick='go(" . $array_numeros[$i] . ")'>";
                    }else{
                        echo "<input type='password' name='numero[]' value='" . $array_numeros[$i] . "' onclick='go(" . $array_numeros[$i] . ")'>";
                    }
                }
            }
            ?>
            <input type="hidden" name="vidas" value="<?php echo $vidas - 1 ?>">
            <input type="hidden" id="pulsado" name="pulsado">
            <div align="center">
                <p style="color:white">Vidas: <?php echo $vidas ?> / 3</p>
                <p><input type="number" name="total" value="<?php echo $total ?>" readonly>
            </div>
        </form>
    </div>

    <?php
    if ($vidas == 0 && $total >= 15) {
        session_destroy();
        header("Location: matrices2.php");
        exit();
    } else if ($vidas == 0 && $total < 15) {
        session_destroy();
        header("Location: loser.php");
        exit();
    }
    ?>
</body>

<script>
    function go(n) {
        document.getElementById("pulsado").value = n;
        document.getElementById("form1").submit();
    }
</script>

</html>