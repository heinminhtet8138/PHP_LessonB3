<?php 

    $number1 = 300;
    $number2 = 500;

    $number1++; // $number1 + 1
    echo $number1;
    echo "<br>";
    echo $number1++;
    echo "<br>";
    echo $number1;
    echo "<br>";
    echo ++$number2; // $number2 + 1;
    echo "<br>";

    $number1 += $number2; // $number1 = number1 + $number2
    echo $number1;

    $firstNumber = 600;
    $secondNumber = 400;
    $add = $firstNumber + $secondNumber;
    echo "<h3>$add</h3>";
    $sub = $firstNumber - $secondNumber;
    echo "<h3>$sub</h3>";
    $mul = $firstNumber * $secondNumber;
    echo "<h3>$mul</h3>";
    $div = $firstNumber / $secondNumber;
    echo "<h3>$div</h3>";
    $mod = $firstNumber % $secondNumber;
    echo "<h3>$mod</h3>";


?>