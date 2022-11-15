<!DOCTYPE html>
<html>
    <body>
        <?php
        define("GREETING", "Welcome to W3Schools.com!");
        echo GREETING;
        ?>

        <br>

        <?php
        define("GREETING", "Welcome to W3Schools.com!", true);
        echo greeting;
        ?>

        <br>

        <?php
        define("cars", [
            "Alfa Romeo",
            "BMW",
            "Toyota"
        ]);
        echo cars[0];
        ?>

        <br>

        <?php
        define("GREETING", "Welcome to W3Schools.com!");

        function myTest() {
            echo GREETING;
        }

        myTest();
        ?>
    </body>
</html>