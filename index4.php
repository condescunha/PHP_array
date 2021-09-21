<?php declare(strict_types=1);

namespace condelua;

require 'autoload.php';

$accountHoldersAndTheirPurchasesList = ["Giovani", 12, "Maria", 25, "Luís", "Luísa", "12"];

//call static method
ArrayUtils::removeElement("nonexist", $accountHoldersAndTheirPurchasesList);

$arrayToString = implode(", ", $accountHoldersAndTheirPurchasesList);

echo "<p>{$arrayToString}</p>";