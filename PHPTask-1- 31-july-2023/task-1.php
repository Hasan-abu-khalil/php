<?php

$year = 2013;

if ($year % 4 == 0) {
    echo "this year leap year";
} else {
    echo "this year is not leap year ";
}
;

echo "<br>";
echo "<br>";

$temperature = 27;
if ($temperature < 20) {
    echo "It is summertime!";
} else {
    echo " it is winter!";
}

echo "<br>";
echo "<br>";


$num1 = 3;
$num2 = 3;

if ($num1 == $num2) {
    echo ($num1 + $num2) * 3;
} else {
    echo "It is summertime!";

}
echo "<br>";
echo "<br>";


$firstInteger1 = 15;
$firstInteger2 = 15;

if ($firstInteger1 + $firstInteger1 == 30) {
    echo 'good';
} else {
    echo "It is summertime!";

}

echo "<br>";
echo "<br>";

$number = 20;
if ($number % 3 == 0) {
    echo "true";

} else {
    echo "false";
}

echo "<br>";
echo "<br>";

$num3 = 20;
$num4 = 50;

if ($num3 > 20 && $num4 < 50) {
    echo "true";
} else {
    echo ' false';
}

echo "<br>";
echo "<br>";


$num5 = 1;
$num6 = 5;
$num7 = 9;

if ($num5 > $num6 && $num5 > $num7) {
    echo $num5;
} elseif ($num6 > $num5 && $num6 > $num7) {
    echo $num6;
} else {
    echo $num7;
}


echo "<br>";
echo "<br>";


$units = 150;



if ($units <= 50) {
    echo $units * 2.5;
} elseif ($units <= 100) {
    echo (($units - 50) * 5) + (50 * 2.5);
} elseif ($units <= 250) {
    echo (($units - 150) * 6.2) + (100 * 5) + (50 * 2.5);
} else {
    echo (($units - 250) * 7.5) + (100 * 6.2) + (100 * 5) + (50 * 2.5);
}


echo "<br>";
echo "<br>";

$age = 15;

if ($age <= 18) {
    echo "is no eligible to vote";
} else {
    echo " eligible to vote";
}


echo "<br>";
echo "<br>";

$number1 = -60;

if ($number1 > 0) {
    echo "positive";
} elseif ($number1 < 0) {
    echo "Negative";
}


echo "<br>";
echo "<br>";




function calc($num1 = 5, $num2 = 3)
{
    echo $num1 + $num2;
    echo "<br>";
    echo $num1 - $num2;
    echo "<br>";
    echo $num1 * $num2;
    echo "<br>";
    echo $num1 / $num2;

}

calc();

echo "<br>";
echo "<br>";

$grade = 65;

if ($grade <= 60) {
    echo "F";
} elseif ($grade <= 70) {
    echo "D";
} elseif ($grade <= 80) {
    echo "C";
} elseif ($grade <= 90) {
    echo "B";
} else {
    echo "A";
}


?>