<?php
include '../conn.php';

if(isset($_POST['create_contract']))
{

    add($_POST["contract_user_id"],$_POST["contract_start"],$_POST["contract_end"],$_POST["contract_value"]);
   
}

function add($contractUserId,$contractStart,$contractEnd,$contractValue)
  {
    global $mysqli;
    $sql = "INSERT INTO contracts VALUE(NULL, '" . $contractUserId . "','" . $contractStart . "','" . $contractEnd . "','" . $contractValue . "')";
    if (mysqli_query($mysqli, $sql)) 
    {
        echo "New record created successfully <a href=\"../list_contract.php\">back to list contracts</a>";
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