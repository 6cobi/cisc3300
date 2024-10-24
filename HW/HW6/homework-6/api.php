<?php
$students = [
    "Jeff" => 100,
    "Han" => 90,
    "Mike" => 78,
    "Karen" => 92
];

header('Content-Type: application/json');

echo json_encode($students);

