<?php

$conn = mysqli_connect("localhost","root","","bcanews");
if(!$conn){
      die("Database connection failed".mysqli_connect_error());
}
?>