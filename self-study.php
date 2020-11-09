<?php
session_start();
if(!isset($_SESSION['username'])){
    die(header("Location: login.php"));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Self Study</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/self.css">
    <style>
    body{
        background-image: radial-gradient(circle, #a8eeca, #97efbd, #88efaf, #7aef9f, #6eef8d, #77f083, #81f179, #8bf26e, #a5f56d, #bcf76d, #d2fa70, #e6fc74);
    }
    </style>
</head>
<body>
    <div class="container-fluid header-nav">
        <nav id="header-nav" class="navbar navbar-expand-lg navbar-expand-md navbar-light">
            <div class="navbar-brand">Hey, <?php echo $_SESSION['username']; ?>!</div>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsible-nav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="collapsible-nav" class="collapse navbar-collapse">
                <ul  class="navbar-nav ml-auto">
                    <li class="nav-item"> 
                        <a class="nav-link" href="logout.php">
                            Logout
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="dashboard1.php">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="review_previous.php">
                            Summary Of previous attempts.
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="about.php">
                            About
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <a href="https://www.youtube.com/watch?v=M0mx8S05v60&list=PLBlnK6fEyqRjMH3mWf6kwqiTbT798eAOm" class="text-center"><button class="btn btn-dark btn-block">Digital Electronics</button></a>
            </div>
            <div class="col-lg-4">
                <a href="https://www.youtube.com/watch?v=TXFloNYv7bc&list=PLveOHQXne1oue7L8g2zKWGhvz8lwt_ViB" class="text-center"><button class="btn btn-dark btn-block">Engineering Mechanics</button></a>
            </div>
            <div class="col-lg-4">
                <a href="https://www.youtube.com/watch?v=p075LPq3Eas&list=PL46AAEDA6ABAFCA78" class="text-center"><button class="btn btn-dark btn-block">Dynamics of Machines</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="https://www.youtube.com/playlist?list=PLgMDNELGJ1CaNcuuQv9xN07ZWkXE-wCGP" class="text-center"><button class="btn btn-dark btn-block">Semi Conductors</button></a>
            </div>
            <div class="col-lg-4">
                <a href="https://www.youtube.com/playlist?list=PLBlnK6fEyqRiw-GZRqfnlVIBz9dxrqHJS" class="text-center"><button class="btn btn-dark btn-block">Analog Electronics</button></a>
            </div>
            <div class="col-lg-4">
                <a href="https://www.youtube.com/playlist?list=PLRsFfXmDi9IbhS_bl9v7Bd1uZjoeN4wOT" class="text-center"><button class="btn btn-dark btn-block">Digital signal processing</button></a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="https://www.youtube.com/playlist?list=PLgwJf8NK-2e7CDIWsh61eItP9iRw1EIQc" class="text-center"><button class="btn btn-dark btn-block">Optical fiber communications</button></a>
            </div>
            <div class="col-lg-4">
                <a href="https://www.youtube.com/playlist?list=PLLy_2iUCG87Bdulp9brz9AcvW_TnFCUmM" class="text-center"><button class="btn btn-dark btn-block">Fundamental of CMO's VLSI</button></a>
            </div>
            <div class="col-lg-4">
                <a href="https://www.youtube.com/playlist?list=PLgzsL8klq6DIHSngsEx5W0E5VWncy-FfO" class="text-center"><button class="btn btn-dark btn-block">Field theory</button></a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>