<?php
session_start();
$con = mysqli_connect("localhost","root","","physicsbuzz");
if(!$con){
    die("Error in connecting to the database ".mysqli_connect_error());
}
$query = "DELETE FROM ".$_SESSION['username'];
if(!mysqli_query($con,$query)){
    die("Couldn't delete records ".mysqli_error($con));
}
echo "Records deleted successfully.<br>";
echo "<a href='review_previous.php'>Click to go back</a>";
?>