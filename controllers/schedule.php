<?php
include '../conn.php';
require('../MagicCrypt.php');
use org\magiclen\magiccrypt\MagicCrypt;

if(isset($_POST['create_schedule']))
{
    $plainloc = $_POST["schedule_location"];
    $mc = new MagicCrypt('isa', 256);
    $cipherloc = $mc->encrypt($plainloc);
    add($_POST["schedule_user_id"],$_POST["schedule_start"],$_POST["schedule_end"],$cipherloc,$_POST["schedule_desc"]);

}

function add($scheduleUserId,$scheduleStart,$scheduleEnd,$scheduleLocation,$scheduleDesc)
{
	global $mysqli;
	$sql = "INSERT INTO schedules VALUE(NULL, '" . $scheduleStart . "','" . $scheduleEnd . "','" . $scheduleLocation . "','" . $scheduleDesc . "','" . $scheduleUserId . "')";
	if (mysqli_query($mysqli, $sql)) 
	{
		echo "New record created successfully <a href=\"../list_schedule.php\">back to list schedule</a>";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
	}

	mysqli_close($mysqli);
}

function update()
{
    global $mysqli;
    $sql = "";
    if (mysql_query($mysqli, $sql))
    {
        echo "Successfully updated user on user id " . $id;
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
}

?>