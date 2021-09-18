<?php

$balances = [2500, 3000, 1000, 3700, 950, 9000];

foreach ($balances as $balance) {
    
    echo "<p>The balance is {$balance}</p>";

}

echo "<hr>"; //--------------------------------

sort($balances);

echo "<pre>";
var_dump($balances);
echo "</pre>";

echo "<hr>"; //--------------------------------

echo "O menor saldo é {$balances[0]}";
