<?php 
session_start();
session_destroy();
header("Location:bcanews/login");
exit();
?>