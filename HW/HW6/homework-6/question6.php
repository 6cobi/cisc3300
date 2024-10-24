<?php
$students = [
    "Jeff" => 100,
    "Han" => 90,
    "Mike" => 78,
    "Karen" => 92
];

forEach ($students as $name => $score) {
    echo "Student: $name, Score: $score<br>";
}

function hiStudent(string $name, string $greeting = "hi"): string {
    return "$greeting, $name!";
}

echo hiStudent("Jeff"); 
echo hiStudent("Han", "Hello");

