<?php

session_start();
ob_start();


$conn = mysqli_connect("localhost","root","","bcanews");
if(!$conn){
      die("Database connection failed".mysqli_connect_error());
}

function message(){
      if(isset($_SESSION['success'])){
            $output= "<div class='alert alert-success'>";
            $output .= htmlentities($_SESSION['success']);
            $output .= "</div>";
      $_SESSION['success'] = null;
return $output;

}
  if(isset($_SESSION['error'])){
            $output= "<div class='alert alert-danger'>";
            $output .= htmlentities($_SESSION['error']);
            $output .= "</div>";
      $_SESSION['error'] = null;
return $output;

}
}

if(!function_exists('url')){
      function url($url=''){
            $host = $_SERVER['HTTP_HOST'];
            $project_name = "bcanews";
            $url = trim($url,'/');
            return "http://".$host."/".$project_name."/".$url;
      }
}
?>