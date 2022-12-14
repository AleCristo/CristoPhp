<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
// Start the session
session_start();
?>


<html>  
    <meta charset="UTF-8">
    <style>
        table {
            border-spacing: 0px;
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
        }

        td, td, th {

            border: 1px solid black;
            padding: 10px;
        }
    </style>
    <body>
        <?php
        
        if(!isset($_SESSION["materie"])){
            $_SESSION["materie"] = array();
        }
        
        if(!isset($_SESSION["voti"])){
            $_SESSION["voti"] = array();
        }
            
        $materia = $voto = $media = "";
        $cond = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $materia = fixString($_POST["materia"]);
            if (!preg_match("/[A-za-z]{1,20}/", $materia)) {
                $cond = true;
            }

            $voto = fixString($_POST["voto"]);
            if (!preg_match("/[3-9]\.[0-9]||10/", $voto)) {
                $cond = true;
            }

            if (isset($_POST["media"])) {
                $media = "on";
            } else {
                $media = "off";
            }

            if ($cond == true) {
                
                ?>
                <h1>ERRORE</h1>
                <a href="<?= $_SERVER["PHP_SELF"] ?>">Go back</a>
                <?php
                
            } else {
                
                $materie = $_SESSION["materie"];
                $voti = $_SESSION["voti"];
                
                $materie[count($materie)] = $materia;
                $voti[count($voti)] = $voto;
                
                $_SESSION["materie"] = $materie;
                $_SESSION["voti"] = $voti;
                
                $lunghezza = count($materie);
                $cmedia = 0;
                
                ?>
                <table class="table">
                    <tr>
                        <th colspan="2">Voti</th>
                    </tr>
                    <tr>
                        <th>Materia</th>
                        <th>Voto</th>
                    </tr>
                    <?php
                    for ($i = 0; $i < $lunghezza; $i++) {
                        $c = 1;
                        ?>
                        <tr>
                            <th><?= $materie[$i] ?></th>
                            <th><?= $voti[$i] ?></th>
                        </tr>  
                        <?php
                        $cmedia += $voti[$i];
                    }

                    if ($media == "on") {
                        ?>
                        <tr>
                            <th>Media</th>
                            <th><?= $cmedia/$lunghezza ?></th>
                        </tr>
                        <tr>
                            <th colspan="2"><a href="<?= $_SERVER["PHP_SELF"] ?>">Go back</a></th>
                        </tr>
                        <?php
                    }
                    ?>
                </table>

                <?php
            }
        } else {
            ?>
                
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <table class="table">
                    <tr> 
                        <th>Materia</th>
                        <th><input type="text" name="materia" value="<?= $materia ?>" required="" pattern="[A-za-z]{1,20}" placeholder="da 1 a 20 caratteri"></th>
                    </tr>
                    <tr> 
                        <th>Voto</th>
                        <th><input type="text" name="voto" value="<?= $voto ?>" required="" pattern="[3-9]\.[0-9]||10" placeholder="3.0 - 10.0"></th>
                    </tr>
                    <tr> 
                        <th>Media dei voti</th>
                        <th><input type="checkbox" name="media" value="<?= $media ?>"></th>
                    </tr>
                    <tr>
                        <th colspan="2"><input type="submit"></th>
                    </tr>
                    <tr>
                        <th colspan="2"><a href="Destroy.php">Destroy Session</a></th>
                    </tr>
                </table>
            </form>
            
            <?php
        }
        ?>

        <?php

        function fixString($ogg) {
            $ogg = trim($ogg);
            $ogg = htmlspecialchars($ogg);
            $ogg = stripslashes($ogg);
            return $ogg;
        }
        ?>
    </body>
</html>