<?php 
require_once "../connection.php";

if(isset($_GET['loginBtn'])){
  header("Location: ../login");
  exit();
}

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
      $sql = "INSERT INTO news (name,email,password,gender) VALUES('$name','$email','$password','$gender')";
      $result = mysqli_query($conn,$sql);
      if($result){
            $_SESSION['success']= "User registered successfully";
            header("Location:../login/index.php");
      } else {
            $_SESSION['error'] = "Failed to register user";
            header("Location:../register/index.php");
      }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sign Up</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
      <section class="h-screen">
  <div class="container h-full px-6 py-24">
    <div class="flex h-full flex-wrap items-center justify-center lg:justify-between">
      
      <!-- Left Image Section -->
      <div class="mb-12 md:mb-0 md:w-8/12 lg:w-6/12">
        <img src="https://tecdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="w-full" alt="Illustration" />
      </div>

      <!-- Right Register Form -->
      <div class="md:w-8/12 lg:ms-6 lg:w-5/12">
        <h1 class="text-2xl font-bold mb-4">SIGN UP</h1>

        <!-- Display Message -->
        <div>
          <?= message() ?>
        </div>

        <form action="" method="post">
          
          <!-- Name Input -->
          <div class="relative mb-6">
            <input type="text" name="name" value="<?= $old['name'] ?>" id="name"
              class="peer block w-full rounded border px-3 py-2 leading-[2.15] outline-none focus:ring focus:ring-blue-500"
             />
            <label for="name"
              class="absolute left-3 top-0 text-neutral-500 transition-all duration-200 peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-focus:-translate-y-4 peer-focus:text-blue-500">
              Name:
            </label>
            <span class="text-danger"><?= $errors['name'] ?></span>
          </div>

          <!-- Email Input -->
          <div class="relative mb-6">
            <input type="email" name="email" value="<?= $old['email'] ?>" id="email"
              class="peer block w-full rounded border px-3 py-2 leading-[2.15] outline-none focus:ring focus:ring-blue-500"
             />
            <label for="email"
              class="absolute left-3 top-0 text-neutral-500 transition-all duration-200 peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-focus:-translate-y-4 peer-focus:text-blue-500">
              Email Address:
            </label>
            <span class="text-danger"><?= $errors['email'] ?></span>
          </div>

          <!-- Password Input -->
          <div class="relative mb-6">
            <input type="password" name="password" value="<?= $old['password'] ?>" id="password"
              class="peer block w-full rounded border px-3 py-2 leading-[2.15] outline-none focus:ring focus:ring-blue-500"
               />
            <label for="password"
              class="absolute left-3 top-0 text-neutral-500 transition-all duration-200 peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-focus:-translate-y-4 peer-focus:text-blue-500">
              Password:
            </label>
            <span class="text-danger"><?= $errors['password'] ?></span>
          </div>

          <!-- Confirm Password Input -->
          <div class="relative mb-6">
            <input type="password" name="confirm_password" value="<?= $old['confirm_password'] ?>" id="confirm_password"
              class="peer block w-full rounded border px-3 py-2 leading-[2.15] outline-none focus:ring focus:ring-blue-500"
               />
            <label for="confirm_password"
              class="absolute left-3 top-0 text-neutral-500 transition-all duration-200 peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-focus:-translate-y-4 peer-focus:text-blue-500">
              Confirm Password:
            </label>
            <span class="text-danger"><?= $errors['confirm_password'] ?></span>
          </div>

          <!-- Gender Dropdown -->
          <div class="relative mb-6">
            <select name="gender" id="gender"
              class="peer block w-full rounded border px-3 py-2 leading-[2.15] outline-none focus:ring focus:ring-blue-500">
              <option value="male" <?= $old['gender'] === 'male' ? 'selected' : '' ?>>Male</option>
              <option value="female" <?= $old['gender'] === 'female' ? 'selected' : '' ?>>Female</option>
            </select>
            <label for="gender"
              class="absolute left-3 top-0 text-neutral-500 transition-all duration-200 peer-placeholder-shown:top-3 peer-placeholder-shown:text-gray-400 peer-focus:-translate-y-4 peer-focus:text-blue-500">
              Gender:
            </label>
            <span class="text-danger"><?= $errors['gender'] ?></span>
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="w-full rounded bg-blue-600 px-7 py-3 text-sm font-medium text-white transition duration-150 hover:bg-blue-700 focus:ring focus:ring-blue-300">
            Sign Up
          </button>

          <!-- Divider -->
          <div class="my-4 flex items-center">
            <hr class="flex-1 border-neutral-300">
            <p class="mx-4 text-center font-semibold">OR</p>
            <hr class="flex-1 border-neutral-300">
          </div>

          <!-- Social Register Buttons -->
          <a href="#" onclick="window.location.href='?loginBtn=true'" class="mb-3 flex w-full items-center justify-center rounded bg-blue-700 px-7 py-3 text-white">
            Already have an account? | Login
          </a>

          <a href="#!" class="flex w-full items-center justify-center rounded bg-blue-500 px-7 py-3 text-white">
            <span class="mr-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 fill-white">
                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
              </svg>
            </span>
            Continue with X
          </a>

        </form>
      </div>

    </div>
  </div>
</section>

</body>
</html>
