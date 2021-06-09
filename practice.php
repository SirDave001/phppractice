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

#PhP Strings
//strlen() returns the length a string
echo strlen("Hello world!"); // outputs 12

//str_word_count() - Count Words in a String
echo str_word_count("Hello world!"); // outputs 2

//strrev() - Reverse a String
echo strrev("Hello world!"); // outputs !dlrow olleH

//strpos() - Search For a Text Within a String
echo strpos("Hello world!", "world"); // outputs 6

//str_replace() - Replace Text Within a String
//replace the text 'world" with "Dolly"
echo str_replace("world", "Dolly", "Hello World!"); //outputs "Hello Dolly!"

//Complete PHP String reference
//Was referred to php string reference page

#PHP Numbers
//One thing to know about PhP is that it provides automatic data type conversion.
//so if you assign an integer value to a variable, the type of that variable will automatically be an integer. Then, if you assign a string to the same variable, the data type will change to a string.
//This automatic conversion can sometimes break your <code class code.

//PHP integers
//2, 256, -256, 10358, -179567 are all integers. An interger is a number without any decimal part. An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems, and between -9223372036854775808 and 9223372036854775807 in 64 bit systems. A value greater(or lower) than this, will be stored as float, because it exceeds the limit of an integer.
//4*2.5 is 10 and will be sored as float, cos one of the operands is a float.
$x = 4536;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

//PHP floats
//a float is a number with decimal point or in a exponential form, e.g 2.0, 234.54, 2872.345, 34.342E-3 are all floats.
// the float data type can  commonly store a value up to1.7976931348623E+308(platform dependent), and have a maximum precision of 14 digits.
$x = 10.365;
var_dump(is_float($x));

//PHP infinity
//A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
$x 1.4e765
var_dump($x);

//PHP NaN
//NaN stands for Not a Number. it is used for impossible mathematical operations.
//invalid calculations will return a NaN value
$x = acos(8);
var_dump($x);

//PHP numerical strings
//the PHP is_numeric() function can be used to find if a variable is numeric. the function returns true if the variable is a number or a numeric string, false if otherwise.
$x = 5958;
var_dump(is_numeric($x));

$x = "5958";
var_dump(is_numeric($x));

$x = "59.58" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

//PHP casting strings and floats to integers
//sometimes you need to cast a numerical value into another data type.
//the int(), (integer) or the intval() function are often used to convert a value to an integer.
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

//cast string to int
$x = "23465.768";
$int_cast = (int)$x
echo $int_cast;

#PHP Math

//php pi() function. it returns the value of PI
echo(pi()) //returns 3.1415926535898

//php min() and max() functions
//it can be used to find the lowest or the highest value in a list of arguments
echo(min(0, 23, 456, 67, -21, -450)) //returns -450
echo(max(0, 23, 456, 67, -21, -450)) //returns 456

//PHP abs() function
//it returns the absolute (positive) value of a number
echo(abs(-67.3)); //returns 67.3

//PHP sqrt() function
//this function returns the square root of a number
echo(sqrt(64)); //returns 8

//PHP round() function
//this function rounds a floating number to its nearest integer
echo(round(0.60)); //returns 1
echo(round(0.49)) //returns 0

//random numbers
//the rand( function generates a random number)
echo(rand());
//to get a range in the rand() function
echo(rand(1-1000)); //set a range

#PHP CONSTANTS
//constants are like variables except that once they are defined they cannot be changed or undefined
//a constant is an identifier (name) for a simple value. the value cannot be changed during the script. a valid constant name starts with a letter or underscore(no $ sign before the constant name).
//note: unlike variables, constants are automatically global across the entire script

//creating a php constant. to create a constant, use the define() function.
//syntax= define(name, value, case-sensitive)
/*parameters
1. name: Specifies the name of the constant
2. value: Specifies the value of the constant
3. case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false */

define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

//case-sensitivity set to true
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

//PHP Constant Arrays
//In PHP7, you can create an Array constant using the define() function.

define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0]; //returns alfa romeo

//constants are global. constants are automatically global and can be used across the entire script
//the blow example uses a constant inside a function, even if its defined outside the function
define("GREETING", "Welcome to SirDave TECH!");
function myphp() {
  echo GREETING
}

myphp()

#PHP OPERATORS
/*Operators are used to perform operations on variables and values.

PHP divides the operators in the following groups:

Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators */

//php arithmetic operators
//The PHP arithmetic operators are used with numeric values to perform common arithmetical operations, such as addition, subtraction, multiplication etc.
/*+	Addition	$x+$y	Sum of $x and $y
-	Subtraction	$x-$y--Difference of $x and $y
*	Multiplication	$x*$y--Product of $x and $y
/	Division	$x/$y--Quotient of $x and $y
%	Modulus	$x%$y--Remainder of $x divided by $y
**	Exponentiation	$x**$y--Result of raising $x to the $y'th power

//php assignment operators
/*x = y	x = y	The left operand gets set to the value of the expression on the right
x += y	x = x + y	Addition
x -= y	x = x - y	Subtraction
x *= y	x = x * y	Multiplication
x /= y	x = x / y	Division
x %= y	x = x % y	Modulus

//php comparison operators
//the php comparison operators are used to compare two values(number or string)
/*==	Equal	$x == $y	Returns true if $x is equal to $y
===	Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type
!=	Not equal	$x != $y	Returns true if $x is not equal to $y
<>	Not equal	$x <> $y	Returns true if $x is not equal to $y
!==	Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type
>	Greater than	$x > $y	Returns true if $x is greater than $y
<	Less than	$x < $y	Returns true if $x is less than $y
>=	Greater than or equal to	$x >= $y	Returns true if $x is greater than or equal to $y
<=	Less than or equal to	$x <= $y	Returns true if $x is less than or equal to $y
<=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.

PHP Increment / Decrement Operators
The PHP increment operators are used to increment a variable's value.
The PHP decrement operators are used to decrement a variable's value.
Operator	    Name	                  Description
 ++$x	    Pre-increment	    Increments $x by one, then returns $x
 $x++	    Post-increment	    Returns $x, then increments $x by one
 --$x	    Pre-decrement	    Decrements $x by one, then returns $x
 $x--	    Post-decrement	    Returns $x, then decrements $x by one

PHP Logical Operators
The PHP logical operators are used to combine conditional statements.
Operator	  Name	  Example	              Result
and	        And	    $x and $y	      True if both $x and $y are true
or	        Or	    $x or $y	      True if either $x or $y is true
xor	        Xor	    $x xor $y	      True if either $x or $y is true, but not both
&&	        And	    $x && $y	      True if both $x and $y are true
||	        Or	    $x || $y	      True if either $x or $y is true
!	          Not	    !$x	            True if $x is not true

PHP String Operators
PHP has two operators that are specially designed for strings.
Operator	        Name	                   Example	                      Result
.	            Concatenation	            $txt1 . $txt2	            Concatenation of $txt1 and $txt2
.=	       Concatenation assignment	    $txt1 .= $txt2	              Appends $txt2 to $txt1

PHP Array Operators
The PHP array operators are used to compare arrays.

Operator	    Name	        Example	                      Result
+	          Union	          $x + $y	              Union of $x and $y	
==	      Equality	        $x == $y	    Returns true if $x and $y have the same key/value pairs	
===	      Identity	        $x === $y	    Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
!=	     Inequality	        $x != $y	    Returns true if $x is not equal to $y	
<>	     Inequality	        $x <> $y	    Returns true if $x is not equal to $y	
!==	    Non-identity	      $x !== $y	    Returns true if $x is not identical to $y	

PHP Conditional Assignment Operators
The PHP conditional assignment operators are used to set a value depending on conditions:

Operator	Name	Example	Result	Show it
?:	Ternary	$x = expr1 ? expr2 : expr3	Returns the value of $x.
The value of $x is expr2 if expr1 = TRUE.
The value of $x is expr3 if expr1 = FALSE	
??	Null coalescing	$x = expr1 ?? expr2	Returns the value of $x.
The value of $x is expr1 if expr1 exists, and is not NULL.
If expr1 does not exist, or is NULL, the value of $x is expr2.
Introduced in PHP 7
EXAMPLE */

// if empty($user) = TRUE, set $status = "anonymous"
echo $status = (empty($user)) ? "anonymous" : "logged in";
echo("<br>");

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";


/* PHP IF AND ELSE STATEMENTS
Conditional statements are used to perform different actions based on different conditions.
--if statement - executes some code if one condition is true
--if...else statement - executes some code if a condition is true and another code if that condition is false
--if...elseif...else statement - executes different codes for more than two conditions
--switch statement - selects one of many blocks of code to be executed
Example
Output "Have a good day!" if the current time (HOUR) is less than 20: */

$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
/*PHP - The if Statement
The if statement executes some code if one condition is true.
Syntax
if (condition) {
  code to be executed if condition is true;
}
Example
Output "Have a good day!" if the current time (HOUR) is less than 20:*/

$t = date(class="phpstringcolor" style="color:brown">"H");
class="phpnumbercolor" style="color:red">
class="phpkeywordcolor" style="color:mediumblue">if ($t < class="phpstringcolor" style="color:brown">"20") {
class="phpnumbercolor" style="color:red">   class="phpkeywordcolor" style="color:mediumblue">echo class="phpstringcolor" style="color:brown">"Have a good day!";
class="phpnumbercolor" style="color:red"> }
class="phptagcolor" style="color:red">

/*PHP - The if...else Statement
The if...else statement executes some code if a condition is true and another code if that condition is false.
Syntax
if (condition) {
  code to be executed if condition is true;
}
else {
  code to be executed if condition is false;
}
Example
Output "Have a good day!" if the current time (HOUR) is less than 20:*/

$t = date(class="phpstringcolor" style="color:brown">"H");

class="phpkeywordcolor" style="color:mediumblue">if ($t < class="phpstringcolor" style="color:brown">"20") {
class="phpnumbercolor" style="color:red">   class="phpkeywordcolor" style="color:mediumblue">echo class="phpstringcolor" style="color:brown">"Have a good day!";
class="phpnumbercolor" style="color:red"> } class="phpkeywordcolor" style="color:mediumblue">else {
class="phpnumbercolor" style="color:red">   class="phpkeywordcolor" style="color:mediumblue">echo class="phpstringcolor" style="color:brown">"Have a good night!";
class="phpnumbercolor" style="color:red"> }
class="phptagcolor" style="color:red">

/*PHP - The if...elseif...else Statement
The if...elseif...else statement executes different codes for more than two conditions.
Syntax
if (condition) {
  code to be executed if this condition is true;
} elseif (condition) {
  code to be executed if first condition is false and this condition is true;
} else {
  code to be executed if all conditions are false;
}
Example
Output "Have a good morning!" if the current time is less than 10, and "Have a good day!" if the current time is less than 20. Otherwise it will output "Have a good night!":*/

$t = date(class="phpstringcolor" style="color:brown">"H");
class="phpnumbercolor" style="color:red">
class="phpkeywordcolor" style="color:mediumblue">if ($t < class="phpstringcolor" style="color:brown">"10") {
class="phpnumbercolor" style="color:red">   class="phpkeywordcolor" style="color:mediumblue">echo class="phpstringcolor" style="color:brown">"Have a good morning!";
class="phpnumbercolor" style="color:red"> } class="phpkeywordcolor" style="color:mediumblue">elseif ($t < class="phpstringcolor" style="color:brown">"20") {
class="phpnumbercolor" style="color:red">   class="phpkeywordcolor" style="color:mediumblue">echo class="phpstringcolor" style="color:brown">"Have a good day!";
class="phpnumbercolor" style="color:red"> } class="phpkeywordcolor" style="color:mediumblue">else {
class="phpnumbercolor" style="color:red">   class="phpkeywordcolor" style="color:mediumblue">echo class="phpstringcolor" style="color:brown">"Have a good night!";
class="phpnumbercolor" style="color:red"> }
class="phptagcolor" style="color:red">

/*PHP - The switch Statement
The switch statement will be explained in the next chapter */































  ?>
?>

</body>
</html>