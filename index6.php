<?php

$accountHolderS = ["Giovani", "João", "Maria", "Luís", "Luísa", "Rafael"];

$balances = [2500, 3000, 4400, 1000, 8700, 9000];

$mergeAccountHoldersAndBalances = array_merge($accountHolderS, $balances);

$stringAccountHoldersAndBalancesMerged = implode(", ", $mergeAccountHoldersAndBalances);

echo "{$stringAccountHoldersAndBalancesMerged}";

echo "<hr>"; // -----------------------------------------------------------------------------

//associative array
$combineAccountHoldersWithBalances = array_combine($accountHolderS, $balances);

echo "<pre>";
var_dump($combineAccountHoldersWithBalances);
echo "</pre>";

echo "<hr>"; // -----------------------------------------------------------------------------

$key = "Maria";

if (array_key_exists($key, $combineAccountHoldersWithBalances)) {
    
    echo "The holder's balance, {$key}, is {$combineAccountHoldersWithBalances[$key]}.";

} else {

    echo "{$key} is a nonexistent holder!";

}