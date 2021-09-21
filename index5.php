<?php

$accountHolders = ["Giovani", "João", "Maria", "Luís", "Luísa", "Rafael"];

$defaultingAccountHolders = ["Luís", "Luísa", "Rafael"];

$compliantAccountHolders = array_diff($accountHolders, $defaultingAccountHolders);

$stringCompliantAccountHolders = implode(", ", $compliantAccountHolders);

echo "{$stringCompliantAccountHolders}";
