<?php
$con = mysqli_connect("localhost","root","","LoginSystem");
if(!$con){
    die("Error in connecting to database : ".mysqli_connect_error());
}
$sql = "CREATE TABLE python (
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
$sql = "INSERT INTO python (question,option1,option2,option3,option4,correct_option)
VALUES ('Name the python module that supports regular expressions','regex','re','pyre','pyregex','Op2'),
('Which event among them is fired when the right mouse button is released?','ButtonReleased','ButtonPressed','ButtonReleased-3','ButtonPressed-3','Op3'),
('We can create an image in canvas. Select the option to do so?','Image = PhotoImage(imagefilename)','Canvas.create_image(filename)','Image = Photoimage(file=imagefilename)','Image = Photoimage(imagefilename)','Op3'),
('What will be the output of the following python Expression print(4.00/(2.0+2.0))','Error','1.0','1.00','1','Op2'),
('What is the output of print 0.1 + 0.2 == 0.3?','True','False','Machine Independent','Error','Op2')";
if(!mysqli_query($con,$sql)){
    die("Error in inserting values <br>".mysqli_error($con));
}
?>