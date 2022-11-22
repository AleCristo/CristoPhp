<html>
    <head>
        <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
        <nav aria-label="Standard pagination example">
          <ul class="pagination">
            <li class="page-item">
            </li>
            <li class="page-item"><a class="page-link" href="index.html">1</a></li>
            <li class="page-item"><a class="page-link" href="LblGenerator.php">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
            </li>
          </ul>
        </nav>
        </div></div>
    </head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <body>

        <br>
        <?php
        $title = 'Test LblGenerator';

        $rows = 8;
        $colums = 10;
        $r = 0;
        $c = 0;

        echo "<table class='table table-bordered table-hover table-responsive'>
            <tr> <th colspan=" . $colums . ">" . $title . "</th></tr>";

        for ($i = 0; $i < $colums; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $rows; $j++) {
                echo"<td>" . $c . $r . "</td>";
                $r++;
            }
            $r = 0;
            $c++;
        }

        echo "</table>";
        ?>

    </body>
</html>
