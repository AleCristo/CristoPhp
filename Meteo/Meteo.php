<!DOCTYPE html>

<?php
$cookie_name = "";
?>

<html>  
    <meta charset="UTF-8">
    <title>Meteo</title>
    <style>
        table, span {
            border-spacing: 0px;
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
        }

        td, tr, th {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
    <body>
        <?php

        function CreaImmagine() {
            $random = rand(0, 2);
            if ($random == 0) {
                $immagine = "immagini/0.png";
            }
            if ($random == 1) {
                $immagine = "immagini/1.png";
            }
            if ($random == 2) {
                $immagine = "immagini/0.png";
            }
            ?><img src="<?= $immagine ?>"></img>
            <?php
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $paese = $_POST["paese"];

            $cookie_name = $paese;
            if ($cookie_name != "") {
                setcookie($cookie_name, $paese, time() + (86400), "/");
            }
            ?>
            <table border=1>
                <tr>
                    <th colspan="7"><?= $paese ?></th>
                </tr>
                <tr>
                    <td>Lunedì</td>
                    <td>Martedì</td>
                    <td>Mercoledì</td>
                    <td>Giovedì</td>
                    <td>Venerdì</td>
                    <td>Sabato</td>
                    <td>Domenica</td>
                </tr>
                <tr>
                    <td><?= CreaImmagine() ?></td>
                    <td><?= CreaImmagine() ?></td>
                    <td><?= CreaImmagine() ?></td>
                    <td><?= CreaImmagine() ?></td>
                    <td><?= CreaImmagine() ?></td>
                    <td><?= CreaImmagine() ?></td>
                    <td><?= CreaImmagine() ?></td>
                </tr>
            </table>
            <?php
        } else {
            ?>
            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">  
                Visitati questo giorno:
                <br>
                <?php
                foreach ($_COOKIE as $cookie_name => $cookie_value) {
                    ?> <input type="submit" id="paese" class="btn btn-link" name="paese" value="<?= $cookie_name; ?>"> <?php
                }
                ?>
            </form>

            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <table class="table">
                    <tr> 
                    <br><br>
                    <th><input type="text" name="paese" id="paese" pattern="[A-Za-z ]{1,20}" placeholder="inserire nome del luogo"></th>
                    </tr>
                    <tr>
                        <th colspan="3"><input type="submit"></th>
                    </tr>
                </table>
            </form>
            <?php
        }
        ?>
    </body>
</html>
