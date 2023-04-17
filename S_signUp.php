<?php
session_start();
//$_SESSION['username'] = "";
$_SESSION['signUpMessage'] = "";

    $_SESSION['error'] = "start of script";
    echo "script start";
    echo $_POST["inputEmail"];
    echo $_POST["inputPassword"];

    // if signup button is pressed, run the SignUp script in S_signUp.php
    if(isset($_POST['submit'])) {

        $_SESSION['error'] = "master if";
        echo "if start";

        $email = $_POST["inputEmail"];
        $password = $_POST["inputPassword"];

        $servername = "localhost";
        $username = "wout";
        $password = "password";
        $dbname = 'userbase';

        $conn = new mysqli($servername, $username, $password, $dbname);
        $query = "INSERT INTO users ($username, password) VALUES ($email, $password)";


        // check if connection with database was successfull;
        if ($conn->connect_error) {
            //die("Connection failed: " . $conn->connect_error);
            $endMessage = "there was an error connecting with the server";
            $_SESSION['error'] = "database connection failed";
        }
        echo "Connected successfully";

        // first check if entered email is a valid one
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // email is invalid, report to the user
            echo $email;
            $endMessage = "Please enter a valid email address";
            $_SESSION['error'] = "Email Wrong";
        }
        echo "email correct";

        // template taken from https://stackoverflow.com/questions/18170227/handling-mysql-errors-in-php <==
        $result = $conn->query($query);
        if ($result) {

            //if the query ran ok, do stuff
            $endMessage = "Account created successfully";

            // log in with created user
            $_SESSION['username'] = "";


        } else {
            //if it didn't, echo the error message
            $endMessage = "Something has gone wrong";
            $_SESSION['error'] = "error with query";
        }
        // ==> end of template
        $_SESSION['signUpMessage'] = $endMessage;
    }


