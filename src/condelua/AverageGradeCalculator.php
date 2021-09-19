<?php

namespace condelua;

class AverageGradeCalculator{

    public array $grades;
    public int $grades1;

    public function __construct(array $gradesParam) {

        $this->grades = $gradesParam;

    }

    private function countGrades(): int{
    
        return sizeof($this->grades);
        
    }

    private function addGrades(): int{
    
        $sumOfGrades = 0;

        for ($i=0; $i < $this->countGrades(); $i++) { 

            $sumOfGrades += $this->grades[$i];

        }

        return $sumOfGrades;

    }

    public function calculateGradeAverage(){

        return $this->addGrades() / $this->countGrades();

    }

}