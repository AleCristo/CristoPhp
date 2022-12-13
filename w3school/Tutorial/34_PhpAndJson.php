<html>
    <body>
        <?php
        $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

        echo json_encode($age);
        ?>
        <br>
        <?php
        $cars = array("Volvo", "BMW", "Toyota");

        echo json_encode($cars);
        ?>
        <br>
        <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        var_dump(json_decode($jsonobj));
        ?>
        <br>
        <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        var_dump(json_decode($jsonobj, true));
        ?>
        <br>
        <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        $obj = json_decode($jsonobj);

        echo $obj->Peter;
        echo $obj->Ben;
        echo $obj->Joe;
        ?>
        <br>
        <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        $arr = json_decode($jsonobj, true);

        echo $arr["Peter"];
        echo $arr["Ben"];
        echo $arr["Joe"];
        ?>
        <br>
        <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        $obj = json_decode($jsonobj);

        foreach ($obj as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
        ?>
        <br>
        <?php
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

        $arr = json_decode($jsonobj, true);

        foreach ($arr as $key => $value) {
            echo $key . " => " . $value . "<br>";
        }
        ?>
    </body>
</html>