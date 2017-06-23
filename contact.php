<?php
require 'connect.php';
$conn = Connect();
$name = $conn->real_escape_string($_POST['name']);
$department = $conn->real_escape_string($_POST['department']);
$contact    = $conn->real_escape_string($_POST['number']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

$query = "INSERT into contact_form (Name,Department,Contact,Email,Message) VALUES('" . $name . "','" . $department . "','" . $contact . "','" . $email . "','" . $message . "')";
$success = $conn->query($query);
if (!$success) {
	die("Couldn't enter data: ".$conn->error);
}
echo " Thank <br>";
$conn->close();

?>