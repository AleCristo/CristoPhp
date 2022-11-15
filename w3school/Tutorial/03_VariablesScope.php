<!DOCTYPE html>
<html>
    <body>
        <?php
        $x = 5; // global scope

        function Test1() {
            $x = "error";
            echo "<p>Variable x inside function is: $x</p>";
        }

        Test1();

        echo "<p>Variable x outside function is: $x</p>";
        ?>
        <br>
        <?php

        function Test2() {
            $x = 5; // local scope
            echo "<p>Variable x inside function is: $x</p>";
        }

        Test2();

// using x outside the function will generate an error
        echo "<p>Variable x outside function is: $x</p>";
        ?>
        <br>
        <?php
        $x = 5;
        $y = 10;

        function Test3() {
            global $x, $y;
            $y = $x + $y;
        }

        Test3();
        echo $y; // outputs 15
        ?>
        <br>
        <?php
        $x = 5;
        $y = 10;

        function Test4() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        Test4();
        echo $y; // outputs 15
        ?>
        <br>
        <?php

        function Test5() {
            static $x = 0;
            echo $x;
            $x++;
        }

        Test5();
        Test5();
        Test5();
        ?>
    </body>
</html>