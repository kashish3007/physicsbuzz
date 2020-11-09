<?php require ('db.php');
session_start();
$_SESSION['username'] = "kashish";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>remove_users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    table,td,th{
        border : 1px solid black;
    }
    table{
        margin-top : 10px;
    }
    td,th{
        padding : 5px;
    }
    input{
        text-align : center;
    }
    body{
        background-image: radial-gradient(circle, #a8eeca, #97efbd, #88efaf, #7aef9f, #6eef8d, #77f083, #81f179, #8bf26e, #a5f56d, #bcf76d, #d2fa70, #e6fc74);
        background-size: 100% 100%;
        background-attachment: fixed;
    }
    </style>
</head>
<body>
<nav id="header-nav" class="navbar navbar-expand-lg navbar-expand-md navbar-light">
    <p class="navbar-brand">Hello Admin</p>
    <button type="button" class="navbar-toggler ml-auto" data-toggle="collapse" data-target="#collapsible-nav" aria-expanded="false">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="collapsible-nav" class="collapse navbar-collapse">
        <ul  class="navbar-nav ml-auto "> 
            <li class="nav-item"> 
                <a class="nav-link" href="logout.php">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
    <?php
    if(isset($_POST['submit'])){
        $del_user = $_POST['username'];
        if($del_user=="kashish"){
            die("Cannot delete admin. <a href='admin_dash.php'>Click to go back</a>");
        }
        else{
            $sql = "DELETE FROM users WHERE username='$del_user'";
            if(mysqli_query($con,$sql)){
            header("Location: admin_dash.php");
            }
            else{
                echo "An error occured : ";
            }
        }
    }
    else{
        $query = "SELECT * FROM users";
        $result = mysqli_query($con,$query);
        echo "<h1 class='text-center'>Registered Users</h1>";
        echo "<table class='ml-auto mr-auto'>
        <tr><th>Username</th>
        <th>Email</th>";
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row['username']."</td><td>".$row['email']."</td></tr>";
        }
        echo "</table>";
    ?>
    <h3>Enter the user you want to remove.</h3>
    <form action="admin_dash.php" method="POST">
        <input type="text" name="username" placeholder="enter username" required autofocus="true">
        <button type="submit" name="submit" class="btn btn-dark">Submit</button>
    </form>
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>