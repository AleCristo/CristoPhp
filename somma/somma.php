<html>
    <head>
        <?php
        $op1r = $op2r = $ris = $op1 = $op2 = "";
        $cond = true;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $op1 = togliSpazi($_POST["op1"]);
            if (!preg_match("/^[0-9]+$/", $op1)) {
                $op1r = "sei un bidone";
                $cond = false;
            }

            $op2 = togliSpazi($_POST["op2"]);
            if (!preg_match("/^[0-9]+$/", $op2)) {
                $op2r = "sei un bidone p2";
                $cond = false;
            }

            if ($cond) {
                $ris = $op1 + $op2;
            }
        }

        function togliSpazi($obj) {
            $obj = trim($obj);
            $obj = htmlspecialchars($obj);
            $obj = stripslashes($obj);
            return $obj;
        }
        ?>
    </head>
    <body>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <input type="text" name="op1"><?php echo $op1r ?><br>
            <input type="text" name="op2"><?php echo $op2r ?><br>
            <input type="submit">
        </form>
        <input type="text" readonly value="<?= $ris;?>">
    </body>
</html>

