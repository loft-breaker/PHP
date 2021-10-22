<?php
//connecting to the  database
$servername = "localhost";
$username = "root";
$password = "";
$databse = "dbrakesh";

// create connection 
$conn = mysqli_connect($servername, $username, $password, $databse);

// Die if connection was not successfull
if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}else {
    echo "Connection was successful ";
}

//variables to be inserted into the table
$name = "vikash";
$destination = "gaya";

// Sql query to be executed
$sql = "INSERT INTO `trip` (`name`, `dest`) VALUES ('$name', '$destination')";
$result = mysqli_query($conn, $sql);

//Add a new trip to the Trip table in the database 
if ($result){
    echo "The record was Inserted Successfully";
}else {
    echo "The record was not Inserted  Successfully because of this error -----> ". mysqli_error($conn). "<br>";
}

?>