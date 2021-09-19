<?php 

namespace condelua;

require 'autoload.php';

$grades = [9, 3, 10, 5, 10, 8];
$averageGradeCalculator = new AverageGradeCalculator($grades);
$averageGrade = $averageGradeCalculator->calculateGradeAverage();

    echo "<p>The grade of portuguese is {$grades[0]}.</p>";
    echo "<p>The grade of math is {$grades[1]}.</p>";
    echo "<p>The grade of geography is {$grades[2]}.</p>";
    echo "<p>The grade of history is {$grades[3]}.</p>";
    echo "<p>The grade of chemistry is {$grades[4]}.</p>";
    echo "<p>The grade of art is {$grades[5]}.</p>";
    echo "<hr>";
    echo "<p>The overall average of grades is {$averageGrade}.</p>";