<?php

$i = 0;
for ($i = 0; $i <= 30; $i++) {

    echo $i . '<br>';
}

echo '<br>';
echo '<br>';


$rows = 5;

for ($nested = 1; $nested <= $rows; $nested++) {
    for ($nested1 = 1; $nested1 <= $rows; $nested1++) {
        echo ($nested === $nested1) ? "$nested " : "0 ";
    }
    echo '<br>';
}

echo '<br>';
echo '<br>';

$result = 1;
for ($i = 1; $i <= 5; $i++) {
    $result *= $i;
    echo $result . '<br>';
}



echo '<br>';
echo '<br>';


$num=1;
for ($i=1; $i <=5; $i++) { 
    for ($j=1; $j <=$i; $j++) { 
       
        echo $num." ";
        $num++;

    } 
    echo '<br>';
}

?>