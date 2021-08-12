<?php

$servername="localhost";
$username="root";
$password="";
$dbname="cdc";

$connect = mysqli_connect($servername,$username,$password,$dbname);

if ($connect)
{
  //echo"Connection OK";
}
else
{
  echo "Connection FAILED".mysql_connect_error();
}

?>
