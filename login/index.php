<?php 

$errors = [
      'email' => '',
      'password' => '',
];

$old = [
      'email' => '',
      'password' => '',
];

if (!empty($_POST)) {
      foreach ($_POST as $key => $value) {
            if (empty($value)) {
                  $errors[$key] = "This field is required";
            } else {
                  $old[$key] = $value;
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
            <h1>LOGIN</h1>
            <div class="row">
                  <div class="col md-12">
                        <form action="" method="post">
                              <div class="form-group mb-2">
                                    <label for="email">Email: <span class="text-danger"><?= $errors['email']?></span></label>
                                    <input type="text" name="email" value="<?=$old['email'] ?>" id="email" class="form-control">
                              </div>
                              <div class="form-group mb-2">
                                    <label for="password">Password: <span class="text-danger"><?= $errors['password']?></span></label>
                                    <input type="password" name="password" value="<?=$old['password'] ?>" id="password" class="form-control">
                              </div>
                              <div class="form-group mb-2">
                                    <button class="btn btn-success w-100">Login</button>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
      <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>