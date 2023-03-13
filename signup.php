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
            <label for="userEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="inputEmail">
        </div>
        <div class="mb-3">
            <label for="userPassword" class="form-label">Password</label>
            <input type="password" class="form-control" id="inputPassword">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div id="visible" class="errorMessage">
        <p>A user with this email address already exists, please log in</p>
    </div>
</div>

</body>
</html>