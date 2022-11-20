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
        $titolo = 'Es di prova';
        $nRighe = 10;
        $nColonne = 10;
        $riga = 1;
        $colonna = 1;
        echo "<table border='1' align='center'>
            <tr> <th colspan=" . $nColonne . ">" . $titolo . "</th></tr>";

        for($i = 0; $i < $nRighe; $i++){
            echo "<tr>";
            for($j = 0; $j < $nColonne; $j++){
                echo"<td>" . $riga . "," .$colonna. "</td>";
                $colonna++;
            }
            $colonna = 1;
            $riga++;
        } 

        echo "</table>";
        ?>

    </body>
</html>
