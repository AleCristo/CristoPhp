<html>
    <body>
        <?php
        $c = 0;
        while ($c < 10) {
            echo "Hello! ";
            $c++;
        }
        ?>
        <br>
        <?php
        $c = 0;
        do {
            echo "Hello! ";
            $c++;
        } while ($c < 10)
        ?>
        <br>
        <?php
        $c = 0;
        for ($i = 0; $i < 10; $i++) {
            echo "Hello! ";
        }
        ?>
        <br>
        <?php
        $c = array("Hello! Hello! Hello! Hello! Hello! Hello! Hello! Hello! Hello! Hello! ");
        foreach ($c as $el) {
            echo $el;
        }
        ?>
        <br>
        <?php
        for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
                break;
            }
            echo "The number is: $x <br>";
        }
        ?>
        <br>
        <?php
        for ($x = 0; $x < 10; $x++) {
            if ($x == 4) {
                continue;
            }
            echo "The number is: $x <br>";
        }
        ?>
        <br>
        <?php
        $x = 0;

        while ($x < 10) {
            if ($x == 4) {
                break;
            }
            echo "The number is: $x <br>";
            $x++;
        }
        ?>
        <br>
        <?php
        $x = 0;

        while ($x < 10) {
            if ($x == 4) {
                $x++;
                continue;
            }
            echo "The number is: $x <br>";
            $x++;
        }
        ?>
    </body>
</html>