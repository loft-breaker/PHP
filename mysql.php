<?php   
    echo "welcome to the stage where we are ready to get connected to a database <br>";
    /*Ways to connect to a MySQL Database
    1.MySQLi extension
        I. through Function
        II. through oops
    2. PDO
    */
// Connecting to the database 

$servername = "localhost";
$username = "root";
$password = "";

// create connection 
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successfull
if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}else {
    echo "Connection was successful";
}


?>