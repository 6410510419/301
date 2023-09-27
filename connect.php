<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$dbname = "desserts";

$con = mysqli_connect($host, $user, $pass, $dbname);
mysqli_query($con,"set char set utf8");

?>
