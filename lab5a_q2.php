<?php
$students = [
    [
        'name' => 'Alice',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Bob',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Raju',
        'program' => 'BIT',
        'age' => 22
    ]
];

// Loop through each student and print the details
foreach ($students as $student) {
    echo "Name: " . $student["name"] . "<br>";
    echo "Program: " . $student["program"] . "<br>";
    echo "Age: " . $student["age"] . "<br><br>";
}
?>
