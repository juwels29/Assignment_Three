<?php

$studentGrades=[
    "Student 1" => ["Math" => 90, "English" => 85, "Science" => 88],
    "Student 2" => ["Math" => 80, "English" => 95, "Science" => 72],
    "Student 3" => ["Math" => 92, "English" => 99, "Science" => 75],
];

function calculateAverageGrades ($grades){
    foreach($grades as $student => $subjectGrades){
        $averageGrade= array_sum($subjectGrades) / count($subjectGrades);

        echo "$student 's Average Grade:" .$averageGrade ."\n";
    }

}
calculateAverageGrades($studentGrades);
