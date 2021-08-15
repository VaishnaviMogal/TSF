<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TSF";

//creat connection
$conn = mysqli_connect($servername,$username,$password,$dbname);

//check connection
 if (!$conn) {
     die("Could not connect to the database due to the following error -->".mysqli_connect_error());
 }

 //close the connection
 //mysqli_close($conn);
?>