<?php
include '../conn.php';
$username = strtolower($_POST["username"]);
$password = $_POST["password"];


global $mysqli;
$sql = "select * from users where lower(user_name)='$username' and user_password='$password'";
$result = mysqli_query($mysqli, $sql);
$row = $result->num_rows;
if ($row==1){
	echo "1";
	session_start();
	$_SESSION["user_logged_in"] = true;
	$_SESSION["user_name"] = $username;
	while($row = $result->fetch_assoc()) {
      	$_SESSION["user_position"] = $row['user_position'];
	}
}else if ($row==0)
{
	echo "0";
}
mysqli_close($mysqli);
?>


