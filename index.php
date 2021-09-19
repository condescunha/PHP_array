<?php declare(strict_types=1);

require "ArrayUtils.php";

$accountHoldersAndTheirPurchasesList = ["Giovani", 12, "Maria", 25, "Luís", "Luísa", "12"];

//call static method
ArrayUtils::removeElement("12", $accountHoldersAndTheirPurchasesList);

$arrayToString = implode(", ", $accountHoldersAndTheirPurchasesList);

echo "<p>{$arrayToString}</p>";