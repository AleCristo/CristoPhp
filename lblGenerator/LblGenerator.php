<html>
    <head>
        <style>
            body{
                align-items: center;
            }
            table
            {
                border-style:solid;
                border-width:2px;
                border-color:black;
            }
        </style>
    </head>

    <body>
        
        <br>
        <?php
        $title = 'Test';
        
        $rows = 2;
        $colums = 10;
        
        echo "<table border='2'>
            <tr> <th colspan=" . $colums . ">" . $title . "</th></tr>";

        for($i = 0; $i < $colums; $i++){
            echo "<tr>";
            for($j = 0; $j < $rows; $j++){
                echo"<td>" . "test" . "</td>";
            }
        } 

        echo "</table>";
        ?>

    </body>
</html>
