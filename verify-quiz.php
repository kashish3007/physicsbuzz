<?php
session_start();
$con = mysqli_connect("localhost",'root','','physicsbuzz');
if(!$con){
    die("Error in connecting to the database".mysqli_connect_error());
}
$sql = "SELECT * FROM digitalelectronics";
$result = mysqli_query($con,$sql);
$correct_ans = 0;
$wrong_ans = 0;
$not_ans = 0;
$wrong_ques = array();
$wrong_option = array();
$correct_option = array();
while($row = mysqli_fetch_assoc($result)){
    if(empty($_POST[$row['id']])){
        $not_ans+=1;
    }
    else{
        $answer = $_POST[$row['id']];
        if($answer==$row['correct_option']){
            $correct_ans = $correct_ans + 1;
        }
        if($answer!=$row['correct_option']){
            array_push($wrong_ques,$row['id']);
            array_push($wrong_option,$answer);
            array_push($correct_option,$row['correct_option']);
            $wrong_ans = $wrong_ans + 1;
        }
    }
}
$scored = $correct_ans*5;
$create_datetime = date("Y-m-d H:i:s");
$query = "INSERT INTO ".$_SESSION['username']." (attempt_date,quiz,scored_marks) VALUES ('".$create_datetime."','".$_SESSION['quiz']."','".$scored."')";
if(!mysqli_query($con,$query)){
    die("Error in updating student result db ".mysqli_error($con));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/verify.css">
    <style>
        body{
            background-color: #8DF8D2;
        }
    </style>
</head>
<body>
    <div class="container-fluid header-nav">
        <nav id="header-nav" class="navbar navbar-expand-lg navbar-expand-md navbar-light">
            <p class="navbar-brand">Hey, <?php echo $_SESSION['username']; ?>!</p>
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
                        <a class="nav-link" href="dashboard1.php">
                            DashBoard
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <h1 class="text-center"><?php echo $_SESSION['quiz']." Quiz Results"?></h1>
        <h2 class="text-center">Your score : <?php echo $scored;?> out of 25.</h2>
        <h2 class="text-center">Correct Answers : <?php echo $correct_ans;?></h2>
        <h2 class="text-center">Wrong Answers : <?php echo $wrong_ans;?></h2>
        <h2 class="text-center">Not Answered : <?php echo $not_ans;?></h2>
        <?php
        if($wrong_ans!=0){
        ?>
        <h2 class="text-center">Description of Wrong Answers</h2>
        <?php
        echo "<table class='ml-auto mr-auto'>";
        echo "<tr><th>Question ID</th><th>Your Answer</th><th>Correct Answer</th></th>";
        for($i=0;$i<count($wrong_ques);$i++){
            echo "<tr><td>".$wrong_ques[$i]."</td><td>".$wrong_option[$i]."</td><td>".$correct_option[$i]."</td></tr>";
        }
        }
        ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>