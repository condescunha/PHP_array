<?php

namespace condelua;

require 'autoload.php';



$associativeArray = [
    "Giovani" => 2500,
    "João" => 3000,
    "Maria" => 4400
];

$peopleWithHigherBalance = ArrayUtils::findPeopleWithHigherBalance(3000, $associativeArray);

echo "<pre>";
var_dump($peopleWithHigherBalance);
echo "</pre>";