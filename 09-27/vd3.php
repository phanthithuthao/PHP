<?php
$x1 = 10;
$x2 = '5';
$x3 = $x1 + $x2;
$s1 = "Tong cua " . $x1 . "+" . $x2 . "=" . $x3;
$s2 = 'Tong cua ' . $x1 . '+' . $x2 . '=' . $x3;
$s3 = "Tong cua $x1 + $x2 = $x3";
$s4 = 'tong cua $x1 + $x2 = $x3';
echo $x1 . '<br>';
echo $s2 . '<br>';
echo "$s3 <br>";
echo $s4;