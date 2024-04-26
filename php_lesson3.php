<?php
// LOOPS

//1 for each loop

$numbers = range(1, 10);

foreach ($numbers as $number) {
    echo $number . " \n" ;
}

//2 using same arr as in ex1 / for loop

for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}

//3 given var x / while loop

$x = 1;
while ($x < 10) { // print out as long as x smaller than 10
    echo "codelex ";
    $x++; // to avoid infinite loop
}

echo "\n";

//4 loop and print out if no remainder when /3

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numbers as $number) {
    if ($number % 3 === 0) {
        echo $number . " ";
    }
}

//5 nested array of persons / print out each element info using a loop

$persons = [
    'person1' => [
        'name' => 'John',
        'surname' => 'Doe',
        'age' => 50,
        'birthday' => '31 JUL'
    ],
    'person2' => [
        'name' => 'Jane',
        'surname' => 'Doe',
        'age' => 41,
        'birthday' => '12 FEB'
    ],
    'person3' => [
        'name' => 'Liene',
        'surname' => 'Coding',
        'age' => 32,
        'birthday' => '25 OCT'
    ]
];

foreach ($persons as $key => $person) {
    echo "Name: {$person['name']}\n";
    echo "Surname: {$person['surname']}\n";
    echo "Age: {$person['age']}\n";
    echo "Birthday: {$person['birthday']}\n";
    echo "\n";
}






