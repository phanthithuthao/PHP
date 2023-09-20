<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--table>tr*10>(td>{7})+(td>{$})+(td) -->
    <?php $n=5; ?>
    <table border="1">
        <?php 
            for ($i=1; $i <= 10; $i++) 
            {
                ?>
                <tr>
                    <td><?php echo $n; ?></td>
                    <td><?php echo $i; ?></td>
                    <td>=<?php echo $n*$i; ?></td>
                </tr>
                <?php
            }
        ?>
    </table>
</body>
</html>