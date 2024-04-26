
<?php
// VARIABLES

//1

$firstVAr = 10;
$secondVAr = 10.10;
$thirdVAr = "hello world";

echo $firstVAr. "\n";
// . = +
// "\n" = new line
echo number_format($secondVAr,2). "\n";
echo $thirdVAr. "\n";

//2

var_dump($firstVAr). "\n";
var_dump($secondVAr). "\n";
var_dump($thirdVAr). "\n";

//3

$name = "Liene";
$surname = "Lagzdina";
$age = 32;

echo $name . " " . $surname . ", ". $age. "\n";

// IF ELSE

//1

$intVar = 10;
$stringVar = "10";

if ($intVar === $stringVar) {
    echo "The variables are the same.". "\n";
} else {
    echo "Integers and strings are not the same.". "\n";
}

//2

$number = 50;

if ($number >= 1 && $number <= 100) {
    echo $number . " is within the range of 1 and 100.". "\n";
} else {
    echo $number . " is not within the range of 1 and 100.". "\n";
}

//3

$value = "hello";

if ($value === "hello") {
    echo "world \n";
}

//4

$evenOrOddNum = 19;

if ($evenOrOddNum % 2 === 0) {
    echo "$evenOrOddNum is an even number.\n";
}
elseif ($evenOrOddNum % 2 !== 0) {
    echo "$evenOrOddNum is an odd number.\n";
}
else {
    echo "Please enter an integer.\n";
}

//5

$x = 50;
$y = 1;
$z = 100;

if ($x > $y && $x < $z) {
    echo "correct \n";
} else {
    echo "incorrect \n";
}

//6

$plateNum = "LL-1337";

switch ($plateNum) {
    case "LL-1337":
        echo "It's your car. \n";
        break;
    default:
        echo "It's not your car. \n";
        break;
}

//7

$numVal = 13;

switch ($numVal) {
    case ($numVal < 50):
        echo "low\n";
        break;
    case ($numVal >= 50 && $numVal < 100):
        echo "medium\n";
        break;
    case ($numVal > 100):
        echo "high\n";
        break;
    default:
        echo "Enter correct value.\n";
}