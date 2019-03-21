<?php
// Create connection
$conn = mysqli_connect("127.0.0.1", "root", "", "testscritpt");
$conn -> set_charset("utf8");
$name = $_POST["name"];
$phone = $_POST["phone"];
$mail = $_POST["mail"];


$sql = "INSERT INTO info (Name_user, Phone_user , Email_user, )
VALUES ('$name', '$phone', '$mail' )";


// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" .$conn->error;
}

$conn->close();


?>
