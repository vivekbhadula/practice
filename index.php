<?php

$name = "Vivek";
$income = 100000;
echo "My name is $name and my salary is $income<br>";
echo "$name is good boy<br>";
echo "$income is a lot<br>";
$friends = array("rohan", "shubham", "vivek", "skills");
echo var_dump($friends[2]);
echo "<br>The name" . " of the guy who made this is ". $name . " and there are " . strlen($name) . " characters in his name.<br>"; 
echo strrev($name);
echo "<br>";
echo strpos($name, "v");
echo "<br>";
echo str_replace("Vivek", "Don", $name);
echo "<br>";
echo str_repeat("$name <br>", 4);
$name = "    He is a good boy    ";
echo "<pre>";
echo rtrim("$name");
echo "<br>";
echo ltrim($name);
echo "</pre>";
echo "<br>";

$a = 45;
$b = 4;
echo var_dump($a < $b);
echo "<br>";
echo var_dump($a <> $b);
echo "<br>";

if ($a > 18) {
    echo "You can drink anything.";
}
elseif ($a > 13) {
    echo "You can drink water and chai only.";
}
else {
    echo "You can drink water only.";
}
echo "<br>";
$age = 34;
if ($age<=65 and $age>=25) {
    echo "You can drive <br>";
}
else {
    echo "You can not drive <br>";
}

switch($age) {
    case 24: 
        echo "24 years";
        break;
    case 34:
        echo "34 years old";
        break;
    case 45: 
        echo "45 years old";
        break;
    default :
        echo "Weird age";
        break;
}

$i = 0;
while($i < 3){
    echo "I am number $i <br>";
    $i++;
}

for ($index=1; $index<3; $index++) { 
    # code...
    echo "This is number $index <br>";
}

$i=0;
do {
    echo "$i <br>";
    $i++;
} while($i<3);

$arr = array("ab","cd","ef","gh");
foreach ($arr as $var) {
    echo "$var <br>";
}

function processMarks($arr_marks) {
    $sum = 0;
    foreach ($arr_marks as $value) {
        $sum += $value;
    }
    return $sum;
}

$vivek = array(56,43,46,50,45,56);
$sumvivek = processMarks($vivek);

$jack = [45,56,45,34,45,56];
$sumjack = processMarks($jack);
echo "Total marks scored by vivek out of 360 is $sumvivek <br>";
echo "Total marks scored by jack out of 360 is $sumjack <br>";

echo "Date <br>";
$d = date("dS F Y");
$e = date("d/m/Y");
$f = date("d/m/Y, g:i");
echo "Today's is $d <br> $e <br> $f <br>";

$favCol = array(
    'shubham' => 'red',
    'skill' => 'blue',
    'bree' => 'black',
    7 => 'white'
);

foreach ($favCol as $key => $value) {
    echo "<br> Favourite color of $key is $value";
}

?>
