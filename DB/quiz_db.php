<?php
$con = mysqli_connect("localhost","root","","LoginSystem");
if(!$con){
    die("Error in connecting to database : ".mysqli_connect_error());
}
$sql = "CREATE TABLE c_plus_plus (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(500),
    option1 VARCHAR(500),
    option2 VARCHAR(500),
    option3 VARCHAR(500),
    option4 VARCHAR(500),
    correct_option VARCHAR(50)
)";
if(!mysqli_query($con,$sql)){
    die("Error in creating table : ".mysqli_error($con));
}
$sql = "INSERT INTO c_plus_plus (question,option1,option2,option3,option4,correct_option)
VALUES ('The default access specifier for the class members is :','public','protected','private','None Of the Above','Op2'),
('How can we make a class act as an interface in C++','By Only Providing all the functions as virtual functions in the class','Defining the class following with the keyword virtual','Defining the class following the keyword interface','Defining the class following with the keyword abstract.','Op1'),
('Objects created using new operator are stored in ____ memory','Cache','Heap','Stack','None of the above','Op2'),
('Which type of data file is analogous to an audio cassete tape','Random access file','Sequential Access File','Binary File','Source Code File','Op2'),
('Compiler generates ___ file','Executable code','Object Code','Assembly Code','None Of the Above','Op2')";
if(!mysqli_query($con,$sql)){
    die("Error in inserting values <br>".mysqli_error($con));
}
?>