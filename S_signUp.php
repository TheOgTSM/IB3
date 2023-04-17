<?php
session_start();
//$_SESSION['username'] = "";

function SignUp($email, $password){

    $servername = "localhost";
    $username = "wout";
    $password = "password";
    $dbname = 'userbase';

    $conn = new mysqli($servername, $username, $password,$dbname);
    $query = "INSERT INTO users ($username, password) VALUES ($email, $password)";


    // check if connection with database was successfull;
    if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
        return "there was an error connecting with the server";
    }

    echo "Connected successfully";

        // first check if entered email is a valid one
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // email is invalid, report to the user
            echo $email;
            return "Please enter a valid email address";
        }
    echo "after email check";

        // template taken from https://stackoverflow.com/questions/18170227/handling-mysql-errors-in-php <==
        $result = $conn->query($query);
        if ($result) {

            //if the query ran ok, do stuff
            return "Account created successfully";

            // log in with created user
            $_SESSION['username'] = "";

        } else {
            //if it didn't, echo the error message
            return "Something has gone wrong";
        }
        // ==> end of template
}

function test(){
    return "test successfull";
}



