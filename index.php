<?php
/*
    $portugueseGrade = 9;
    $mathGrade = 3;
    $geographyGrade = 10;
    $historyGrade = 5;
    $chemistryGrade = 10;
    $averageGrade = ($portugueseGrade + $mathGrade + $geographyGrade + $historyGrade + $chemistryGrade) / 5;

        echo "<p>The grade of portuguese is {$portugueseGrade}.</p>";
        echo "<p>The grade of math is {$mathGrade}.</p>";
        echo "<p>The grade of geography is {$geographyGrade}.</p>";
        echo "<p>The grade of history is {$historyGrade}.</p>";
        echo "<p>The grade of chemistry is {$chemistryGrade}.</p>";
        echo "<hr>";
        echo "<p>The overall average of grades is {$averageGrade}.</p>";
*/

// Open PHP server to execute the code -> in Windows PowerShell type: php -S 0.0.0.0:8000

// --- 21/09/18 ----------------------------------------------------------------------------------------------

// turning grades into an array of grades.
// $grades = array(9, 3, 10, 5, 10);
$grades = [9, 3, 10, 5, 10, 8];
$amountOfGrades = sizeof($grades);
$sumOfGrades = sumOfGrades($grades, $amountOfGrades);
$averageGrade =  $sumOfGrades / $amountOfGrades;

    function sumOfGrades(Array $grades, int $amountOfGrades): int
    {
        $sumOfGrades = 0;
        for ($i=0; $i < $amountOfGrades; $i++) { 
            $sumOfGrades += $grades[$i];
        }
        return $sumOfGrades;
    }

    echo "<p>The grade of portuguese is {$grades[0]}.</p>";
    echo "<p>The grade of math is {$grades[1]}.</p>";
    echo "<p>The grade of geography is {$grades[2]}.</p>";
    echo "<p>The grade of history is {$grades[3]}.</p>";
    echo "<p>The grade of chemistry is {$grades[4]}.</p>";
    echo "<p>The grade of art is {$grades[5]}.</p>";
    echo "<hr>";
    echo "<p>The overall average of grades is {$averageGrade}.</p>";