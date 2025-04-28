<?php 


$id = $_GET['uid'];

$sql = "DELETE FROM users WHERE id=$id";
$response = mysqli_query($conn,$sql);
if($response){
      $_SESSION['success'] = "User deleted successfully";
      header("Location:".url('admin/users.php'));
      exit();
}else{
      $_SESSION['error'] = "Something went wrong";
       header("Location:".url('admin/users.php'));
      exit();
}

?>