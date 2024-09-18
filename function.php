<?php 

    //Function
    function myName() {
        echo "<h1>My Name is Hein Min Htet</h1>";
    }
    myName();

    //Function with Argument
    $brother = "Aung Aung";

    function myBro($name) {
        echo "<h1>My brother name is $name.</h1>";
    }
    myBro($brother);

    function sum($num1,$num2) {
        $result = $num1 + $num2;
        echo "<h1>$result</h1>";
    }
    sum(123,321);

    function myArray($num) {
        $result = $num[0] - $num[1];
        echo "<h1>$result</h1>";
    }
    myArray([32,21]);

    function myNumber($number1 = 50, $number2 = 100) {
        $result = $number1 * $number2;
        echo "<h1>$result</h1>";

    }
    myNumber(10,20);
?>