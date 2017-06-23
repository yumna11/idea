
<?php
require 'connect.php';
$conn = Connect();
$project = $conn->real_escape_string($_POST['project']);
$p_file = $conn->real_escape_string($_POST['file']);
$p_video    = $conn->real_escape_string($_POST['video']);
$p_picture = $conn->real_escape_string($_POST['picture']);
$p_url = $conn->real_escape_string($_POST['project_url']);
$p_des = $conn->real_escape_string($_POST['project_des']);
$p_dept = $conn->real_escape_string($_POST['dept']);
$p_supervisor = $conn->real_escape_string($_POST['prjctspr']);
$p_tm1 = $conn->real_escape_string($_POST['tm1']);
$p_tm2 = $conn->real_escape_string($_POST['tm2']);
$p_tm3 = $conn->real_escape_string($_POST['tm3']);
$p_email = $conn->real_escape_string($_POST['email']);
$p_contact = $conn->real_escape_string($_POST['contact']);
$query = "INSERT into add_a_project (Title,File,Image,Video,URL,Details,Department,Supervisor,Member_1,Member_2,Member_3,Email,Contact) VALUES('" . $project . "','" . $p_file . "','" . $p_picture . "','" . $p_video . "','" . $p_url . "','" . $p_des . "','" . $p_dept . "'
,'" . $p_supervisor . "','" . $p_tm1 . "','" . $p_tm2 . "','" . $p_tm3 . "','" . $p_email . "','" . $p_contact . "')";
$success = $conn->query($query);
if (!$success) {
	die("Couldn't enter data: ".$conn->error);
}
echo " Thank <br>";
$conn->close();

?>