<html>
    <?php 
    $n =1;
    //neu n chan -> in ra 1 form, n le: in ra 1 table
    ?>
    <body>
        <?php
        if ($n%2==0) {
            echo '<form>';
            echo '<input type=text name=n value="'. $n .'">';
            echo '</form>';
        }else {
            echo '<table border=1';
            echo '<tr><td>' . $n . '</td></tr>';
            echo '</table>';
        }
        ?>
    </body>
</html>