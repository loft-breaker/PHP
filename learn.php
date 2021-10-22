
<?php

//this is single line comment 
/*this 
is 
multiline
comments
*/
/*<?php //php is start like that 
   // php code are here 
?> //php end like that*/ 

        //variables
//variables are conatainers for storeing information
// variables starts with $ and cannot start with number
// variables starts with letter or underscores
// variables are case sensitive


$Name = "Rakesh";
$income = 2000;

echo "I am $Name and my income is $income";
echo"<br>"; // this for print new line
echo "$Name is 30 maar khan ";
//     ----------Data Types-----------
/*
        1. String   - sequence of characters
        2. Integer  - non- decimal number
        3. Float    - decimal point  number
        4. Boolean  - Can be either true or false
        5. Onbject  - instances of classes
        6. Array    - used to stores mutliple values in a single variables
        7. NULL     - empty value assigned
*/
//        ----------- String Function-------------------

$name = "Rakesh is good boy";
echo $name;
echo "<br>";

echo "The leangth of my sring is ". strlen($name); //count leangth of string 
echo "<br>";
echo str_word_count($name); //count no. of words
echo"<br>";
echo strrev($name); // reverse the string
echo "<br>";
echo strpos($name, "a");  //give position of the string
echo "<br>";
echo str_replace("Rakesh", "Ranjan", $name); //replace the string
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
echo "<pre>";
echo rtrim("   this is a good boy     ");
echo ltrim("   this is a good boy     ");
echo "</pre>";

// ------------Operators-------------
/*      1. Arithmetic Operators
        2. Assignment Operators
        3. Comparison Operators
        4. Logical Opeartors
*/

$a = 9; //operands
$b = 2; //operands
echo "<h1>arithmetic operators</h1>";
echo "a = ".$a. " & b = ".$b. "<br>";
// 1. Arithemtic Operatpors
echo "The sum of a and b :" .($a + $b). "<br>";
echo "The subtract of a and b :" .($a - $b). "<br>";
echo "The multiple of a and b :" .($a * $b). "<br>";
echo "The divide of a and b :" .($a / $b). "<br>";
echo "The modulo of a and b :" .($a % $b). "<br>";
echo "The power of a and b :" .($a ** $b). "<br>";

// 2. Assignment Operators
echo "<h1>Assignment Operators</h1>";
$x = $a;
echo "For x the value is ". $a . "<br>";
$a -= 6;
echo "For a, the value is ". $a . "<br>";
$a *= 6;
echo "For a, the value is ". $a . "<br>";
$a /= 5;
echo "For a, the value is ". $a . "<br>";
$a %= 6;
echo "For a, the value is ". $a . "<br>";
//3 Comparison Operators
echo "<h1>Comparison Operators</h1>";

$x = 7;
$y = 9;

echo "x = ".$x. " & y = ".$y. "<br>";
echo "For x == y, the result is " ;
echo var_dump($x == $y) ;
echo "<br>";
echo "For x > y, the result is " ;
echo var_dump($x > $y) ;
echo "<br>";
echo "For x < y, the result is " ;
echo var_dump($x < $y) ;
echo "<br>";
echo "For x <> y, the result is " ;
echo var_dump($x <> $y) ;
echo "<br>";
echo "For x <= y, the result is " ;
echo var_dump($x <= $y) ;
echo "<br>";
echo "For x >= y, the result is " ;
echo var_dump($x >= $y) ;
echo "<br>";

echo "<h1>Logical Operators</h1>";
$m = true;
$n = false;


echo "For m and n , the result is " ;
echo var_dump($m and $n) ;
echo "<br>";
echo "For m or n , the result is " ;
echo var_dump($m or $n) ;
echo "<br>";
echo "For m && n , the result is " ;
echo var_dump($m && $n) ;
echo "   //this is and operator <br>";
echo "For m || n , the result is " ;
echo var_dump($m || $n) ;
echo "   // this is or operator <br>";
echo "For !m , the result is " ;
echo var_dump(!$m ) ;
echo "<br>";

//If-Else conditionals
echo "<h4>If-Else Conditionals</h4> <br> ";

if($a> 78){
        echo "a is greater than 78";
} else {
        echo " a is not greater than 78 <br> ";
}

echo "<h6>nested if-else</h6> <br> ";
$age = 54;

if ($age > 18){
        echo "You can drink alcohol, chai and water";
} elseif($age > 13){
        echo "You can Drink chai and water";
} else {
        echo "You can drink  water only";
}

echo "<br>";
if($age<65 && $age > 25){
        echo "You can drive the car";
}
echo "<br>";

echo "<h4>Switch case</h4> <br> ";

$age = 12;


switch($age) {
        case 12 :
                echo "you are 12 years old";
                break;
        case 45 :
                echo "you are 45 years old";
                break;
        case 18 :
                echo "you are 18 years old";
                break;
        case 25 :
                echo "you are 25 years old";
                break;
        case 32 :
                echo "you are 32 years old";
                break;
        default :
                echo "Your age is weird";         
                break;
}
echo "<br>";
echo "<h4>while loops</h4> <br> ";
$z = 0;
while($z <=5){
        echo $z;
        echo "<br>";
        $z++;
}
echo "<h4>for loops</h4> <br> ";
for($i =0; $i<=5;$i++){
        echo $i;
        echo "<br>";
}
for ($i=0; $i <=10; $i++) { 
        echo $i+1;
        echo "<br>";
}

echo "<h4>Do-while loops</h4> <br> ";
$i = 0;
do {
        echo "$i <br>";
        $i ++;
}while($i<=5);
echo "<h4>foreach loops</h4> <br> ";

$arr = array("bananas", "apples", "Harpic", "Bread");


 foreach ($arr as $value) {
        echo "$value <br>";
 }



// echo "<br>";
// echo "<br>";
// echo "<br>";


?>