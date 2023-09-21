<html>
    <?php 
    $n =2;
    //If n is even print it to form, otherwise print it to table
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
        <hr>
        <!--Method 2 should be written follow here -->
        <?php
        if ($n%2==0) {
            ?>
            <form action="">
                <input type=text name=n value="<?php echo $n; ?>">
            </form>
            <?php
        }else {
            ?>
            <table border=1>
                <tr>
                    <td><?php echo $n ?></td>
                </tr>
            </table>
            <?php
        }
        ?>
    </body>
</html>