<?php
$con = mysqli_connect("localhost","root","","LoginSystem");
if(!$con){
    die("Error in connecting to database : ".mysqli_connect_error());
}
$sql = "CREATE TABLE dsa (
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
$sql = "INSERT INTO dsa (question,option1,option2,option3,option4,correct_option)
VALUES ('In a min-heap:','parent nodes have values greater than or equal to their childs','parent nodes have values less than or equal to their childs','both statements are true','both statements are wrong','Op1'),
('What data structure can be used to check if a syntax has balanced paranthesis ?','queue','tree','list','stack','Op4'),
('Find the odd out','Prims Minimal Spanning Tree Algorithm','Kruskals Minimal Spanning Tree Algorithm','Floyd-Warshalls All pair shortest path Algorithm','Dijkstras Minimal Spanning Tree Algorithm','Op3'),
('Which of the following algorithm is not stable?','Bubble Sort','Quick Sort','Merge Sort','Insertion Sort','Op2'),
('Which of the following has search effeciency of Ο(1) −','Tree','Heap','Hash Table','Linked List','Op3')";
if(!mysqli_query($con,$sql)){
    die("Error in inserting values <br>".mysqli_error($con));
}
?>