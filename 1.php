<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        <?php include_once("CSS/styles_reg.css"); ?>
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/df44c1c5e3.js" crossorigin="anonymous"></script>
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
                        <a class="nav-link" href="login.php">
                            Already a User
                        </a>
                    </li> 
                </ul>
            </div>
        </nav>
        <div class="row content-row">
            <div class="col-lg-6 col-md-6 content-box mr-auto ml-auto text-center">
                <h1 class="text-center">PHYSICS<span id="change-color">BUZZ</span></h1>
            </div>
        </div>
    </div>


    <div class="container-fluid content">
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        $username = $_REQUEST['username'];
        $username = mysqli_real_escape_string($con, $username);
        $email    = $_REQUEST['email'];
        $email    = mysqli_real_escape_string($con, $email);
        $password = $_REQUEST['password'];
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                        VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            $query = "CREATE TABLE ".$username."(
                attempt_date DATETIME,
                quiz VARCHAR(30),
                scored_marks VARCHAR(30)
            )";
            if(!mysqli_query($con,$query)){
                die("Error in creating student database ".mysqli_error($con));
            }
            echo "<div>
                    <h3>You are registered successfully.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                    </div>";
        } else {
            echo "<div>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='1.php'>registration</a> again.</p>
                    </div>";
        } 
        
    }
    else{
?>




        <div class="row login-row">
            <div class="col-lg-6 col-md-6 login-form ml-auto mr-auto">
                <form class="ml-auto mr-auto" method="post">
                    <div class="form-group">
                        <label for="login">Username</label>
                        <input type="text" name="username" placeholder="Username" class="form-control" required />
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
			            <input type="text" name="email" placeholder="Email Adress" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
			            <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>
                    <button type="submit" value="Register" name="submit" class="btn btn-outline-dark btn-block">Register</button>
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