<?php
require ('db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhysicsBuzz</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles.css">
    <style>
    body{
        background-image: radial-gradient(circle, #a8eeca, #97efbd, #88efaf, #7aef9f, #6eef8d, #77f083, #81f179, #8bf26e, #a5f56d, #bcf76d, #d2fa70, #e6fc74);
    }
    </style>
</head>
<body>
    <div class="container-fluid header-nav">
        <nav id="header-nav" class="navbar navbar-expand-lg navbar-expand-md navbar-light">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsible-nav" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="collapsible-nav" class="collapse navbar-collapse">
                <ul  class="navbar-nav ml-auto "> 
                    <li class="nav-item"> 
                        <a class="nav-link" href="1.php">
                            Not a User?
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="admin.php">
                            Admin Login
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
        <div class="row content-row">
            <div class="col-lg-6 col-md-6 content-box mr-auto ml-auto text-center">
                <h1 class="text-center">PHYSIC<span id="change-color">SBUZZ</span></h1>
            </div>
        </div>
    </div>


    <div class="container-fluid content">
<?php
    if (isset($_POST['username'])) {
        $username = $_REQUEST['username'];
        $username = mysqli_real_escape_string($con, $username);
        $password = $_REQUEST['password'];//Get the username and password from the form
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());//create a sql query and submit it to the db
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: dashboard1.php");//for valid login take the user to the dashboard
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>




        <div class="row login-row">
            <div class="col-lg-6 col-md-6 login-form ml-auto mr-auto">
                <form class="ml-auto mr-auto" method="post" name="login">
                    <div class="form-group">
                        <label for="login">Username</label>
                        <input type="text" class="form-control" id="login" name="username" autofocus="true"><br>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" value="Login" name="submit" class="btn btn-outline-dark btn-block">Login</button>
                </form>
            </div>
        </div>
<?php
    }
?>

    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
