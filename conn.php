<?php

$srvName = "localhost"; //SERVER ADDRESS OR IP SERVER
$srvUser = "root"; // USER ID TO DATABASE
$srvPWD = ""; //PWD TO ACCESS DATABASE
$dbName = "artis"; //DATABASE NAME

$mysqli = mysqli_connect($srvName,$srvUser,$srvPWD,$dbName);

  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>