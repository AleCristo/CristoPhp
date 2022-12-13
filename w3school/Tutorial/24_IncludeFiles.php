<html>
    <body>
        <h1>Welcome to my home page!</h1>
        <p>Some text.</p>
        <p>Some more text.</p>
        <?php include 'footer.php'; ?>
        <br>
        <div class="menu">
            <?php include 'menu.php'; ?>
        </div>

        <h1>Welcome to my home page!</h1>
        <p>Some text.</p>
        <p>Some more text.</p>
        <br>
        <h1>Welcome to my home page!</h1>
        <?php
        include 'vars.php';
        echo "I have a $color $car.";
        ?>
        <br>
        <h1>Welcome to my home page!</h1>
        <?php
        include 'noFileExists.php';
        echo "I have a $color $car.";
        ?>
        <br>
        <h1>Welcome to my home page!</h1>
        <?php
        require 'noFileExists.php';
        echo "I have a $color $car.";
        ?>
    </body>
</html>