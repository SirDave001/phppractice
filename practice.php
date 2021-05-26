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

  #php echo statement
//display text
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
//display variables
$txt1 = "Learn PHP";
$txt2 = "Sir Dave";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP with " . $txt2 . "<br>";
echo $x + $y;

#php print statement
//display text
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";

//display variables
$txt1 = "Learn PHP";
$txt2 = "Sir Dave";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP with " . $txt2 . "<br>";
print $x + $y;

#php data types
//String
//A string is a sequence of characters, like "Hello world!".
//A string can be any text inside quotes. You can use single or double quotes:
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;

//Integer
//An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
//In the following example $x is an integer. The PHP var_dump() function returns the data type and value:
$x = 5985;
echo $x;
var_dump($x);

//Float (floating point numbers - also called double)
//A float (floating point number) is a number with a decimal point or a number in exponential form.
//In the following example $x is a float. The PHP var_dump() function returns the data type and value:
$x = 43.6;
echo $x;
var_dump($x)

//Boolean
//A Boolean represents two possible states: TRUE or FALSE.
//Booleans are often used in conditional testing. You will learn more about conditional testing in a later chapter of this tutorial.
$x = true;
$y = false;

//Array
//An array stores multiple values in one single variable.
//In the following example $cars is an array. The PHP var_dump() function returns the data type and value:
$cars = array("Volvo","BMW","Toyota");
echo $cars;
var_dump($cars);

//Object
//*Classes and objects are the two main aspects of object-oriented programming.
//A class is a template for objects, and an object is an instance of a class.
//When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
//Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
//When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
//If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
class Car {
    public $gearmode;
    public $color;
    public $model;
    public function __construct($gearmode, $color, $model) {
      $this->gearmode = $gearmode;
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a "  . $this->gearmode . ", " . $this->color . " " . $this->model . "!";
    }
  }

  $myCar = new Car("automatic", "black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("manual", "red", "Toyota");
  echo $myCar -> message();

//NULL
//Null is a special data type which can have only one value: NULL.
//A variable of data type NULL is a variable that has no value assigned to it.
//Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
//Variables can also be emptied by setting the value to NULL:

$x = "Hello world!";
$x = null;
echo $x;
var_dump($x);

//Resource
//The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
//A common example of using the resource data type is a database call.
//We will not talk about the resource type here, since it is an advanced topic.









  ?>
?>

</body>
</html>