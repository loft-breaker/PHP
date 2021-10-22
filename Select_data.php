<?php
//connecting to the  database
$servername = "localhost";
$username = "root";
$password = "";
$databse = "contact";

// create connection 
$conn = mysqli_connect($servername, $username, $password, $databse);

// Die if connection was not successfull
if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}else {
    echo "Connection was successful ";
}

$sql = "SELECT * FROM `contactus`";
$result = mysqli_query($conn, $sql);

// find the number of records returned.
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";

// display the rows returned by sql query 

// if ($num > 0){
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
//     $row = mysqli_fetch_assoc($result);
//     echo var_dump($row);
//     echo "<br>";
// }

// we can do fetch in a better way using while loop
while($row = mysqli_fetch_assoc($result)){
    echo var_dump($row);
    echo "<br>";
}
?>