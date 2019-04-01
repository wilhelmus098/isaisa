<?php
include 'conn.php';

if(isset($_POST['btnRegister']))
{
    if ($_POST["password"] === $_POST["password1"])
    {
        addUser($_POST["username"],$_POST["password"],$_POST["position"]);
    }
}

function addUser($name,$pwd,$pos)
  {
    global $mysqli;
    $sql = "INSERT INTO users VALUE(NULL, '" . $name . "','" . $pwd . "','" . $pos . "')";
    if (mysqli_query($mysqli, $sql)) 
    {
        echo "New record created successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

    mysqli_close($mysqli);
  }

?>