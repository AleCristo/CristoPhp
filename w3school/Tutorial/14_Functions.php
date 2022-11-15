<html>
    <body>
        <?php

        function writeMsg() {
            echo "Hello world!";
        }

        writeMsg(); // call the function
        ?>
        <br>
        <?php

        function familyName1($fname) {
            echo "$fname Refsnes.<br>";
        }

        familyName1("Jani");
        familyName1("Hege");
        familyName1("Stale");
        familyName1("Kai Jim");
        familyName1("Borge");
        ?>
        <br>
        <?php

        function familyName2($fname, $year) {
            echo "$fname Refsnes. Born in $year <br>";
        }

        familyName2("Hege", "1975");
        familyName2("Stale", "1978");
        familyName2("Kai Jim", "1983");
        ?>
        <br>
        <?php

        function addNumbers1(int $a, int $b) {
            return $a + $b;
        }

        echo addNumbers1(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
        ?>
        <br>
        <?php
        declare(strict_types = 1); // strict requirement

        function addNumbers2(int $a, int $b) {
            return $a + $b;
        }

        echo addNumbers2(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
        ?>
        <br>
        <?php
        declare(strict_types = 1); // strict requirement

        function setHeight(int $minheight = 50) {
            echo "The height is : $minheight <br>";
        }

        setHeight(350);
        setHeight(); // will use the default value of 50
        setHeight(135);
        setHeight(80);
        ?>
        <br>
        <?php
        declare(strict_types = 1); // strict requirement

        function sum(int $x, int $y) {
            $z = $x + $y;
            return $z;
        }

        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4);
        ?>
        <br>
        <?php
        declare(strict_types = 1); // strict requirement

        function addNumbers(float $a, float $b): float {
            return $a + $b;
        }

        echo addNumbers(1.2, 5.2);
        ?>
        <br>
        <?php

        function add_five(&$value) {
            $value += 5;
        }

        $num = 2;
        add_five($num);
        echo $num;
        ?>
    </body>
</html>