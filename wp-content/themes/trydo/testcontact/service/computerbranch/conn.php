<?php
$name = $_POST['name'];
$gender = $_POST['gender'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST ['email'];
$coursename = $_POST ['coursename'];
//Data baseconnection
$conn = new mysqli('localhost','root' ,'' ,'wpservice' );
if ($conn->connect_error) {
    die('Could not connect to the database.');
}
else {
    $stmt = $conn->prepare("insert into computerbranch (name,gender,phonenumber,email,coursename) 
    values(?,?,?,?,?)");
    $stmt->bind_param("ssiss",$name,$gender,$phonenumber,$email,$coursename);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>