<?php
session_start();
$con = mysqli_connect("localhost","root","","physicsbuzz");
if(!$con){
    die("Error in connecting with the database");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/previous.css">
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
                        <a class="nav-link" href="self-study.html">
                            Self Study
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="dashboard1.php">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="delete_summary.php">
                            Delete Records
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <h1 class="text-center">Quiz Summary for <?php echo $_SESSION['username'];?></h1>
        <?php
        $query = "SELECT * FROM ".$_SESSION['username'];
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0){
            echo "<table class='ml-auto mr-auto'>";
            echo "<tr><th>Attempt Time</th><th>Subject</th><th>Scored Marks</th>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr><td>".$row['attempt_date']."</td><td>".$row['quiz']."</td><td>".$row['scored_marks']."</td></tr>";
            }
            echo "</table>";
        }
        else if(mysqli_num_rows($result)==0){
            echo "<h3 class='text-center'>Nothing to display</h3>";
        }
        else{
            die("Error in retrieving data ".mysqli_error($con));
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>