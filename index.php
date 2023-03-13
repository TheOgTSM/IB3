<html lang="en">
<head>
    <title>Index</title>
    <link href="index.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<!-- Sidebar -->
<div class="sidenav">
    <a href="#">Map</a>
    <a href="settings.php">Settings</a>
    <a href="#">About</a>
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
                <button type="button" class="btn btn-primary float-end" id="inlog" value="RUN">Log in</button>
                <button type="button" class="btn btn-primary float-end" id="signup" value="RUN">Sign Up</button>
            </div>
        </div>
    </div>


</div>


<!-- Main page -->
<div class="main">
    <mark><h1 class="main_header">Dashboard Sensoren</h1></mark>
    <p class="main_page_text">Gelieve in te loggen om het dashboard te kunnen raadplegen</p>
</div>

</body>
</html>
