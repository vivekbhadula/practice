<?php
echo "Hello World";
echo 5+9;
?>

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

?>
