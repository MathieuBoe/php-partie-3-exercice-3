<?php 
$number1 = 100;
$number2 = 24;
$multiplication = $number1 * $number2;
$title = 'Exercice3';

include 'header.php';
do {
    echo ' '.$number1 * $number2;
    $number1 --;
}
while ($number1 >= 10);


include 'footer.php';?>