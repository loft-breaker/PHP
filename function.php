<?php
echo "<h4>Functions</h4> <br> ";
echo "welcome to functions in php <br> ";

function average($arr)
{
    $sum = 0;
    foreach ($arr as  $value) {
        $sum += $value;
    }
    return $sum;
}

$rakesh = [54, 98, 88, 67, 12, 76];
$sum_marks = average($rakesh);
 echo "$sum_marks";

/* some inbuild functions
count()  //
*/


echo "<h4>Date Handlings</h4> <br> ";
$d = date("dS F Y, g:i A");
echo " Todays date is $d <br>";

echo "<h4>Associate Arrays</h4> <br> ";
// $arr = array("this", "that", "those");
// echo $arr[0]."<br>";
// echo $arr[1]."<br>";
// echo $arr[2]."<br>";

// Associate arrays

$favcolor = array(
    'rakesh' => 'red',
    'ranjan' => 'blue',
    'raj' => 'yellow',
    8 => 'this'
);

foreach ($favcolor as $value) {
    echo "$value <br> ";
}

foreach ($favcolor as $key => $value) {
    echo "<br> Favorite color of $key is $value";
}


echo "<h4>Multi dimensional arrays</h4> <br> ";
$multiDim = array(
    array(2,5,7,9),
    array(1,3,5,8),
    array(4,8,0,2)
);
// echo var_dump($multiDim);
for ($i=0; $i < count($multiDim); $i++) {
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
        echo ($multiDim[$i][$j]);
        echo " ";
        
    } 
    echo "<br>";
}
echo "<h4>Scope, Golobal Variables,  Local Variables</h4> <br> ";
echo "<p>Scope</p>";
$a = 98; // golobal variable

function printval(){
    $a = 97; //local variable
    global $a; // golobal variables can change locally 
    echo "The value of your variable a is $a and b is $b";
}
echo $a;
printval();

?>