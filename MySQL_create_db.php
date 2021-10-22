<?php   
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
$databse = "dbrakesh";


// create connection 
$conn = mysqli_connect($servername, $username, $password, $databse);

//create a db
$sql = "CREATE DATABASE dbrakesh";
$result = mysqli_query($conn, $sql);


// Die if connection was not successfull
if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}else {
    echo "Connection was successful ";
}

echo "<br>";
//Check for the database creation success
if ($result){
    echo "The db was Created Successfully";
}else {
    echo "The db was not Created Successfully because of this error -----> ". mysqli_error($conn). "<br>";
}

// create a table in the db 

$tsql = "CREATE TABLE `trip` (`sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12)  NOT NULL , `dest` VARCHAR(11) NOT NULL , PRIMARY KEY (`SNO`))";

$tresult = mysqli_query($conn, $tsql);

if ($tresult){
    echo "The table was Created Successfully";
}else {
    echo "The table was not Created Successfully because of this error -----> ". mysqli_error($conn). "<br>";
}





?>