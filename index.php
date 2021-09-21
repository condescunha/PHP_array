<?php

$accountHolderS = ["Giovani", "João", "Maria", "Luís", "Luísa", "Rafael"];

$balances = [2500, 3000, 4400, 1000, 8700, 9000];

$mergeAccountHoldersAndBalances = array_merge($accountHolderS, $balances);

$stringAccountHoldersAndBalancesMerged = implode(", ", $mergeAccountHoldersAndBalances);

echo "{$stringAccountHoldersAndBalancesMerged}";

echo "<hr>";

//associative array
$combineAccountHoldersWithBalances = array_combine($accountHolderS, $balances);

echo "<pre>";
var_dump($combineAccountHoldersWithBalances);
echo "</pre>";