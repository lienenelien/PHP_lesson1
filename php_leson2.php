<?php

// ARRAYS

//1

$arrayToSum = [22, 33, 88]; //non-associative = no key value pairs

echo "The total sum is: " . array_sum($arrayToSum) . "\n";

//2 array given

$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($person["name"], $person["surname"], $person["age"]);

//3 object given

$person2 = new stdClass();
$person2->name = "John";
$person2->surname = "Doe";
$person2->age = 50;

var_dump($person2->name, $person2->surname, $person2->age);

//4 nested array given, display concatenated value of - Jane Doe 41

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

$janeInfo = $items[0][1]; // 0 = access both arrays as one item in items arr, 1 = janes info

echo $janeInfo["name"] . " " . $janeInfo["surname"] . " " . $janeInfo["age"] . "\n";

//5 using previouse nested array

$johnInfo = $items[0][0];

$concatValues = $janeInfo["name"] . " " . $janeInfo["surname"] . " " . $janeInfo["age"] . ", "
    . $johnInfo["name"] . " " . $johnInfo["surname"]. " " . $johnInfo["age"];

echo $concatValues;


