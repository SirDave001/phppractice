<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
//declaring variables
$txt = "Hello world";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;

//output variables
//Example 1
$txt = "SirDave TECH";
echo "Welcome to $txt!";

//example 2
$txt = "Sir Dave TECH";
echo "i am " . $txt . "!";

#sum of two variables
$x = 5;
$y = 4;
echo $x + $y;

#php variable scope
#global
$x = 5; //global scope

function mypractice() {
    //using x inside this function will generate an error
    echo "<p>variable x inside function is: $x</p>";
}
mypractice();

echo "<p>variable x outside function is: $x</p>";

#local
function myTest() {
    $x = 5; //local scope
    echo "<p>Variable x inside function is: $x</p>";
  }
  myTest();

  //using x outside the function will generate an error
  echo "<p>Variable x outside function is: $x</p>";

//php the global keyword
#the 'global' keyword is used to access a global variable from within a function.
#to do this use the 'global' keyword before the variables (inside the function):
#Example 1

$x = 5;
$y = 10;

function mypractice() {
    global $x, $y;
    $y = $x + $y
}

mypractice();
echo $y;

//GLOBAL index
$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; //outputs 15

#static
//static keyword is used when a variable is still needed and does not want to be deleted when the action of the function is completed.
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
  }

  myTest();
  echo "<br>";
  myTest();
  echo "<br>";
  myTest();
  echo "<br>";
  myTest();
  ?>
?>

</body>
</html>