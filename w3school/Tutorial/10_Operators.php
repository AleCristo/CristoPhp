<!DOCTYPE html>
<html>
    <body>
        <?php
        $x = 2;
        $y = 4;
        echo $x + $y; //addition
        echo $x - $y; //subtraction
        echo $x * $y; //multiplication
        echo $x / $y; //division
        echo $x % $y; //modulus
        echo $x ** $y; //exponentiation
        echo $x = $y;
        echo $x += $y; //addition
        echo $x -= $y; //subtraction
        echo $x *= $y; //multiplication
        echo $x /= $y; //division
        echo $x %= $y; //modulus
        echo $x == $y; //equal
        echo $x === $y; //identical
        echo $x != $y; //not equal
        echo $x <> $y; //not equal
        echo $x !== $y; //not identical
        echo $x > $y; //grater than
        echo $x < $y; //less than
        echo $x >= $y; //grater than or equal to
        echo $x <= $y; //less than or equal to
        echo $x <=> $y; //spaceship
        echo ++$x; //pre-increment
        echo $x++; //post-increment
        echo --$x; //pre-decrement
        echo $x--; //post-decrement
        echo $x and $y; //and
        echo $x or $y; //or
        echo $x xor $y; //xor
        echo $x && $y; //and
        echo $x || $y; //or
        echo !$x; //not
        echo $x . $y; //concatenation
        echo $x .= $y; //concatenation assignment
        
        $x = array(1, 2, 3);
        $y = array(1, 2, 3);
        
        echo $x + $y; //union
        echo $x == $y; //equality
        echo $x === $y; //identity
        echo $x != $y; //inequality
        echo $x <> $y; //inequality
        echo $x !== $y; //npn-identity       
        ?>
    </body>
</html>