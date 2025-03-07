<?php 
require_once "../connection.php";
$errors = [
      'name' => '',
      'email' => '',
      'password' => '',
      'confirm_password' => '',
      'gender' => ''
];

$old = [
      'name' => '',
      'email' => '',
      'password' => '',
      'confirm_password' => '',
      'gender' => ''
];

if (!empty($_POST)) {
      foreach ($_POST as $key => $value) {
            if (empty($value)) {
                  $errors[$key] = "This field is required";
            } else {
                  $old[$key] = $value;
            }
      }
      $name=$_POST['name'];
   $namePatterns='/^[a-zA-Z ]+$/';
    if(!preg_match($namePatterns,$name)){
         $errors['name']='Name must be alphabets';
    }
    $email=$_POST['email'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']='Invalid email format';
    }
    $password=$_POST['password'];
    if(strlen($password)<6){
        $errors['password']='Password must be 6 characters';
    }
    $confirm_password=$_POST['confirm_password'];
    if($password!=$confirm_password){
        $errors['confirm_password']='Password does not match';
    }

    if(!array_filter($errors)){
      $gender = $_POST['gender'];
      $password = md5($password);
      $sql = "INSERT INTO users(name,email,password,gender) VALUES('$name','$email','$password','$gender')";
      $result = mysqli_query($conn,$sql);
      if($result){
            echo "User registered successfully";
      } else {
            echo "Failed to register user";
      }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
      <div class="container mt-5">
            <h1>REGISTER</h1>
            <div class="row">
                  <div class="col-md-12"> 
                        <form action="" method="post">


                              <div class="form-group mb-2">
                                    <label for="name">Name:
                                          <span class="text-danger"><?= $errors['name']?></span>
                                    </label>
                                    <input type="text" name="name" value="<?=$old['name'] ?>" id="name" class="form-control">
                              </div>

                              <div class="form-group mb-2">
                                    <label for="email">Email:
                                          <span class="text-danger"><?= $errors['email']?></span>
                                    </label>
                                    <input type="email" name="email" value="<?=$old['email'] ?>" id="email" class="form-control">
                              </div>

                              <div class="form-group mb-2">
                                    <label for="password">Password:
                                          <span class="text-danger"><?= $errors['password']?></span>
                                    </label>
                                    <input type="password" name="password" value="<?=$old['password'] ?>" id="password" class="form-control">
                              </div>

                              <div class="form-group mb-2">
                                    <label for="confirm_password">Confirm Password:
                                          <span class="text-danger"><?= $errors['confirm_password']?></span>
                                    </label>
                                    <input type="password" name="confirm_password" value="<?=$old['confirm_password'] ?>" id="confirm_password" class="form-control">
                              </div>

                              <div class="form-group mb-2">
                                    <label for="gender">Gender:
                                          <span class="text-danger"><?= $errors['gender']?></span>
                                    </label>
                                    <select name="gender" id="gender" class="form-control">
                                          <option value="" selected>--- Select Gender ---</option>
                                          <option value="male" <?= $old['gender'] === 'male' ? 'selected' : '' ?>>Male</option>
                                          <option value="female" <?= $old['gender'] === 'female' ? 'selected' : '' ?>>Female</option>
                                    </select>
                              </div>

                              <div class="form-group mb-2">
                                    <button type="submit" class="btn btn-success w-100">Register</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
      <script src="../js/bootstrap.bundle.js"></script> <!-- Fixed script tag -->
</body>
</html>
