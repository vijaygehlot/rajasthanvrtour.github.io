<?php

$username = "root";
$password = "deepak";
$dbname = "rajhack";


$fname=$_POST['fname'];
$lname=$_POST['lname'];
$uname=$_POST['uname'];
$password=$_POST['password'];

$_SESSION['name']=$fname." ".$lname;
$_SESSION['uname']=$uname;

// Create connection
$conn = new mysqli("127.0.0.1:3306", $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO register VALUES ('$fname','$lname','$uname','$password')";

if ($conn->query($sql) == TRUE) {
    include 'index1.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>