<?php
$con = mysqli_connect("localhost","root","","physicsbuzz");
if (mysqli_connect_errno()){
    echo "Failed to connect: " . mysqli_connect_error();
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/styles_admin.css">
    <style>
        body{
        background-image: radial-gradient(circle, #a8eeca, #97efbd, #88efaf, #7aef9f, #6eef8d, #77f083, #81f179, #8bf26e, #a5f56d, #bcf76d, #d2fa70, #e6fc74);
        background-size: 100% 100%;
        background-attachment: fixed;
    }
    </style>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
        $sql = "SELECT username, password FROM users WHERE id=21";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_assoc($result);
        $db_username = $row['username'];
        $db_password = $row['password'];
        if(($_POST['username']==$db_username)and($_POST['password']==$db_password)){
            header("Location: admin_dash.php");
        }
        else{
            echo "Incorrect Username or Password.";
        }
    }
    else{
    ?>
    <h1 class="text-center">Admin Login</h1>
    <form action="admin.php" method="POST" class="ml-auto mr-auto">
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Enter username" autofocus="true" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
        </div>
        <button type="submit" name="submit" class="btn btn-block btn-outline-dark form-control">Login</button>
    </form>
    <?php } ?>
</body>
</html>