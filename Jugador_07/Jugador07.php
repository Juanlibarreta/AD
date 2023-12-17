<?php
require_once("iJugador.php");

class Jugador07 implements iJugador
{
    private $nAlumno = "Juan Luis Ibarreta";
    private $nGuerra = "Time Machine Tannen";
    private $ruta_icono = "https://images.freeimages.com/fic/images/icons/1621/back_to_the_future/256/delorean2.png";

    function setNombreAlumno($nAlumno)
    {
        $this->nAlumno = $nAlumno;
        return $this;
    }

    function getNombreAlumno()
    {
        return $this->nAlumno;
    }

    function setNombreGuerra($nGuerra)
    {
        $this->nGuerra = $nGuerra;
        return $this;
    }

    function getNombreGuerra()
    {
        return $this->nGuerra;
    }

    function setIcono($ruta_icono)
    {
        $this->ruta_icono = $ruta_icono;
        return $this;
    }

    function getIcono()
    {
        return $this->ruta_icono;
    }

    function jugar($numeroAciertosAnterior)
    {

        if ($numeroAciertosAnterior == -1) {
            session_start();
            $_SESSION["j07_Resultados_Anteriores"] = [];
            $_SESSION["j07_Jugados"] = [];
            $_SESSION["j07_Jugados"][] = "1010";
            return "1010";
        } else {
            $_SESSION["j07_Resultados_Anteriores"][] = $numeroAciertosAnterior;
            switch ($numeroAciertosAnterior) {
                case 0: {
                        $j07_Ultimo = end($_SESSION["j07_Jugados"]);
                        $j07_Salida = "";
                        for ($i = 0; $i < strlen($j07_Ultimo); $i++) {
                            if ($j07_Ultimo[$i] === "0") {
                                $j07_Salida .= "1";
                            } else {
                                $j07_Salida .= "0";
                            }
                        }
                        $_SESSION["j07_Jugados"][] = $j07_Salida;
                        return $j07_Salida;
                    }
                case 1: {
                        $j07_Salida = end($_SESSION["j07_Jugados"]);
                        while (in_array($j07_Salida, $_SESSION["j07_Jugados"])) {
                            $j07_Salida = "";
                            for ($i = 0; $i < 4; $i++) {
                                $j07_Salida .= "" . random_int(0, 1);
                            }
                        }
                        $_SESSION["j07_Jugados"][] = $j07_Salida;
                        return $j07_Salida;
                    }
                case 2: {
                        $j07_Salida = end($_SESSION["j07_Jugados"]);
                        while (in_array($j07_Salida, $_SESSION["j07_Jugados"])) {
                            $j07_Pos1 = random_int(0, 3);
                            $j07_Pos2 = random_int(0, 3);

                            while ($j07_Pos2 == $j07_Pos1) {
                                $j07_Pos2 = random_int(0, 3);
                            }

                            if ($j07_Salida[$j07_Pos1] === "0") {
                                $j07_Salida[$j07_Pos1] = "1";
                            } else {
                                $j07_Salida[$j07_Pos1] = "0";
                            }

                            if ($j07_Salida[$j07_Pos2] === "0") {
                                $j07_Salida[$j07_Pos2] = "1";
                            } else {
                                $j07_Salida[$j07_Pos2] = "0";
                            }
                        }
                        $_SESSION["j07_Jugados"][] = $j07_Salida;
                        return $j07_Salida;
                    }
                case 3: {
                        $j07_Salida = end($_SESSION["j07_Jugados"]);
                        while (in_array($j07_Salida, $_SESSION["j07_Jugados"])) {
                            $j07_Pos = random_int(0, 3);
                            if ($j07_Salida[$j07_Pos] === "0") {
                                $j07_Salida[$j07_Pos] = "1";
                            } else {
                                $j07_Salida[$j07_Pos] = "0";
                            }
                        }
                        $_SESSION["j07_Jugados"][] = $j07_Salida;
                        return $j07_Salida;
                    }
                default: {
                    }
            }
        }
    }
}
