<?php

$srvName = "wilhelmmozes.site"; //SERVER ADDRESS OR IP SERVER
$srvUser = "bickdig"; // USER ID TO DATABASE
$srvPWD = "12345678"; //PWD TO ACCESS DATABASE
$dbName = "artis"; //DATABASE NAME

$mysqli = mysqli_connect($srvName,$srvUser,$srvPWD,$dbName);

  if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>