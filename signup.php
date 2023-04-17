<?php
session_start();
include 'S_signUp.php';
$endMessage = ""; // message that will be displayed at end of the page


// if signup button is pressed, run the SignUp script in S_signUp.php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["inputEmail"];
    $password = $_POST["inputPassword"];

    $endMessage = test($username, $password);
    //$endMessage = "test successfull";
}

?>

<html lang="en">
<head>

    <title>Signup</title>
    <link href="signup.css" rel="stylesheet" type="text/css">
    <link href="common.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- Sidebar -->
<div class="sidenav">
    <a href="map.php">Map</a>
    <a href="settings.php">Settings</a>
    <a href="about.php">About</a>
</div>

<!-- Top Bar-->
<div class="topbar">
    <div class="row p-1">
        <div class="col-4">
            <a href="index.php" type="button" class="btn btn-primary float-lg-start" id="home" >Home</a>
        </div>

        <div class="col-4 d-flex justify-content-center">
            <div class="spinner-border" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        <div class="col-4">
            <div class="btn-group float-end">
                <a href="login.php" type="button" class="btn btn-primary float-end" id="login">Log in</a>
                <a href="signup.php" type="button" class="btn btn-primary float-end" id="signup">Sign Up</a>
            </div>
        </div>
    </div>


</div>


<!-- Main page -->
<div class="main">
    <h1 class="main_header">Sign up</h1>
    <form class="form">
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword">
        </div>
        <div>
            <p>Please enter a password between 6 and 16 characters</p>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <p class="form">
        test result:
        <?php echo $endMessage ?>
    </p>

</div>

</body>
</html>