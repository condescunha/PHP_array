<?php

$names = "Mateus, Marcos, Lucas, João";

$arrayNames = explode(", ", $names);

foreach ($arrayNames as $name) {

    echo "<p>Olá {$name}!</p>";

}

echo "<hr>"; //------------------------------

$stringNames = implode(", ", $arrayNames);

echo "{$stringNames}";