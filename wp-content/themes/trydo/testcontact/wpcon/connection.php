<?php
	$firstname = $_POST['firstname'];
	$phonenumber = $_POST['phonenumber'];
    $subject = $_POST['subject'];
    $note = $_POST['note'];
	// Database connection
	$conn = new mysqli('localhost','root' ,'' ,'wpservice' );
	if ($conn->connect_error) {
		die('Could not connect to the database.');
	}
	else {
		$stmt = $conn->prepare ("insert into wpcontact(firstName, phonenumber, subject , note ) values(?, ?, ?, ?)");
		$stmt->bind_param("siss", $firstname, $phonenumber, $subject, $note);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
