<?php

$colors = array("white", "green", "red");

echo $colors[1];
echo '<br>';
echo $colors[2];
echo '<br>';
echo $colors[0];



echo '<br>';
echo '<br>';


$cities = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid");

foreach ($cities as $key => $value) {
    echo "$key: $value  <br> <br>";
}

echo '<br>';
echo '<br>';

$color = array(4 => 'white', 6 => 'green', 11 => 'red');

echo $color[4];


echo '<br>';
echo '<br>';

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);

foreach ($fruits as $key => $value) {
    echo "$key: $value  <br> <br>";
}
echo '<br>';
echo '<br>';

$words = array("abcd", "abc", "de", "hjjj", "g", "wer");
echo" shortest ";
echo min(array_map('strlen', $words));
echo '<br>';
echo "longest ";
echo max(array_map('strlen', $words));



echo '<br>';
echo '<br>';






?>