<?php
$applicant = $_POST['applicant'];
$name = $_POST['name'];
$pesttype = $_POST['pesttype'];
$phonenumber = $_POST['phonenumber'];
$Region = $_POST['Region'];
$buildingnumber =$_POST['buildingnumber'];
 
//Database connection
$conn = new mysqli('localhost','root' ,'' ,'wpservice' );
if ($conn->connect_error) {
    die('Could not connect to the database.');
}
else {
$stmt = $conn->prepare("insert into vectorcontrol (applicant,name,pesttype,phonenumber,Region,buildingnumber)
values('$applicant','$name','$pesttype','$phonenumber','$Region','$buildingnumber')")
$execval = $stmt->execute();
echo $execval;
echo "Registration successfully...";
$stmt->close();
$conn->close();
}
?>