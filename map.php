

<html lang="en">
<head>
    <title>Map</title>
    <link href="map.css" rel="stylesheet" type="text/css">
    <link href="common.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <script type="text/javascript">

        // When page is loaded, get json files from server and display them in graphs
        window.onload = function () {
            //import json from "C:\\Schoolwerk\\dummyresults.json" assert { type: "json" };
            //var json = require("C:\\Schoolwerk\\dummyresults.json");
            var json_temp = [[0, 21], [1, 21], [2, 27], [3, 18], [4, 26], [5, 20], [6, 22], [7, 27], [8, 30], [9, 22], [10, 15], [11, 26], [12, 30], [13, 24], [14, 18], [15, 15], [16, 30], [17, 20], [18, 18], [19, 19], [20, 16], [21, 16], [22, 17], [23, 16], [24, 16], [25, 15], [26, 27], [27, 20], [28, 24], [29, 26], [30, 26], [31, 26], [32, 29], [33, 24], [34, 22], [35, 21], [36, 20], [37, 20], [38, 26], [39, 30], [40, 17], [41, 22], [42, 26], [43, 29], [44, 26], [45, 16], [46, 23], [47, 29], [48, 23], [49, 15], [50, 16], [51, 23], [52, 17], [53, 20], [54, 25], [55, 19], [56, 28], [57, 20], [58, 21], [59, 17], [60, 26], [61, 27], [62, 15], [63, 26], [64, 20], [65, 27], [66, 23], [67, 20], [68, 25], [69, 17], [70, 24], [71, 26], [72, 23], [73, 17], [74, 23], [75, 23], [76, 15], [77, 26], [78, 24], [79, 15], [80, 29], [81, 19], [82, 24], [83, 23], [84, 22], [85, 22], [86, 30], [87, 17], [88, 18], [89, 22], [90, 30], [91, 24], [92, 26], [93, 24], [94, 28], [95, 20], [96, 23], [97, 15], [98, 28], [99, 15]];
            var dataPoints_temp = [];

            var json_qual = [[0, 21], [1, 21], [2, 27], [3, 18], [4, 26], [5, 20], [6, 22], [7, 27], [8, 30], [9, 22], [10, 15], [11, 26], [12, 30], [13, 24], [14, 18], [15, 15], [16, 30], [17, 20], [18, 18], [19, 19], [20, 16], [21, 16], [22, 17], [23, 16], [24, 16], [25, 15], [26, 27], [27, 20], [28, 24], [29, 26], [30, 26], [31, 26], [32, 29], [33, 24], [34, 22], [35, 21], [36, 20], [37, 20], [38, 26], [39, 30], [40, 17], [41, 22], [42, 26], [43, 29], [44, 26], [45, 16], [46, 23], [47, 29], [48, 23], [49, 15], [50, 16], [51, 23], [52, 17], [53, 20], [54, 25], [55, 19], [56, 28], [57, 20], [58, 21], [59, 17], [60, 26], [61, 27], [62, 15], [63, 26], [64, 20], [65, 27], [66, 23], [67, 20], [68, 25], [69, 17], [70, 24], [71, 26], [72, 23], [73, 17], [74, 23], [75, 23], [76, 15], [77, 26], [78, 24], [79, 15], [80, 29], [81, 19], [82, 24], [83, 23], [84, 22], [85, 22], [86, 30], [87, 17], [88, 18], [89, 22], [90, 30], [91, 24], [92, 26], [93, 24], [94, 28], [95, 20], [96, 23], [97, 15], [98, 28], [99, 15]];;
            var dataPoints_qual = [];

            //temperature chart
            for (var i = 0; i < json_temp.length; i++){
                dataPoints_temp.push({
                    x: json_temp[i][0],
                    y: json_temp[i][1]
                })
            }


            var chart_temp = new CanvasJS.Chart("temperatureChart", {
                title:{
                    text: "Recente Temperaturen"
                },
                axisY:{
                    text: "Temperatuur (°C)"
                },
                data: [
                    {
                        type: "line",
                        dataPoints: dataPoints_temp
                    }
                ]
            });


            // air quality chart
            for (var j = 0; i < json_qual.length; i++){
                dataPoints_qual.push({
                    x: json_temp[j][0],
                    y: json_temp[j][1]
                })
            }

            var chart_qual = new CanvasJS.Chart("qualityChart", {
                title:{
                    text: "Recente Luchtkwaliteit"
                },
                axisY:{
                    text: "CO2"
                },
                data: [
                    {
                        type: "line",
                        dataPoints: dataPoints_temp
                    }
                ]
            })
            
            chart_temp.render();
            chart_qual.render();

        }
    </script>

</head>
<body>

<?php

//if(!isset($_SESSION['email'])){
 //   header("Location: /login.php");
//}

?>

<!-- java source canvasJS for graph drawing and Bootstrap for general layout -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

<!-- Sidebar -->
<div class="sidenav">
    <a href="map.php">Map</a>
    <a href="settings.php">Settings</a>
    <a href="about.php">About</a>
</div>

<!-- Top Bar-->
<div class="topbar">
    <div class="row align-items-center">
        <div class="col-4">
            <a href="index.php" type="button" class="btn btn-primary float-lg-start" id="home" >Home</a>
        </div>

        <div class="col-4">
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
    <h1>Map</h1>

    <select class="form-select form-select-sm w-25 position-relative top-0 start-50 translate-middle-x" aria-label=".form-select-sm example" >
        <option selected>Open this select menu</option>
        <option value="room_2_75">Klas 2.75</option>
        <option value="room_2_85">Klas 2.85</option>
        <option value="room_6_50">Klas 6.50</option>
    </select>

    <div class = "chart" id="temperatureChart" style="height: 300px; width: 45%"></div>
    <div class = "chart" id="qualityChart" style="height: 300px; width: 45%"></div>

</div>

</body>
</html>
