<?php

$_SESSION['username'] = "";

$servername = "localhost";
$username = "wout";
$password = "password";
$dbname = 'userbase';

$conn = new mysqli($servername, $username, $password,$dbname);
$query = "INSERT INTO users (username, password) VALUES ($username, $password)";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];

    // code taken from https://stackoverflow.com/questions/18170227/handling-mysql-errors-in-php
    $result = $conn->query($query);
    if ($result) {
        //if the query ran ok, do stuff

    } else {
        echo "Something has gone wrong! ";
        //if it didn't, echo the error message
    }
}




