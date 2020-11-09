<?php
session_start();
if(!isset($_SESSION['username'])){
    die(header("Location: login.php"));
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        <?php include_once("CSS/styles_dash.css") ?>
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/df44c1c5e3.js" crossorigin="anonymous"></script>
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
                        <a class="nav-link" href="self-study.php">
                            Self Study
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
    <div class="content container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 choose_exam ml-auto">
                <div class="text-center choose_intro">
                    Take a Quiz!
                </div>
                <div class="subject text-center">
                    <a href="digitalelec.php" class="text-center"><button class="btn btn-dark">DIGITAL ELECTRONICS</button></a>
                </div>
                <div class="subject text-center">
                    <a href="digitalsignalprocessing.php" class="text-center"><button class="btn btn-dark">DIGITAL SIGNAL PROCESSING</button></a>
                </div>
                <div class="subject text-center">
                    <a href="opticalfibercomm.php" class="text-center"><button class="btn btn-dark">OPTICAL FIBER COMMUNICATION</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
