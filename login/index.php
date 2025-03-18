<?php 
require_once '../connection.php';
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
      $email = $_POST['email'];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Invalid email format';
      }

      $password = $_POST['password'];
      if (!array_filter($errors)) {
            $email = $_POST['email'];
            $password = md5($password);
            $sql = "SELECT * FROM news WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                  $news = mysqli_fetch_assoc($result);
                  $_SESSION['news'] = $news;
                  $_SESSION['is_login'] = true;
                  header("Location:/news/index.php");
            } else {
                  $_SESSION['error'] = 'Invalid email or password';
                  header('location:index.php');
                  exit();
            }
      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://cdn.tailwindcss.com"></script>
      <title>Login</title>
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

      <!-- Right Login Form -->
      <div class="md:w-8/12 lg:ms-6 lg:w-5/12">
        <h1 class="text-2xl font-bold mb-4">LOGIN</h1>

        <!-- Display Message -->
        <div>
          <?= message() ?>
        </div>

        <form action="" method="post">
          
          <!-- Email Input -->
          <div class="relative mb-6">
            <input type="text" name="email" value="<?= $old['email'] ?>" id="email"
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

          <!-- General Login Error -->
          <div class="mb-4">
            <span class="text-danger"><?= $errors['login'] ?? '' ?></span>
          </div>

          <!-- Remember Me & Forgot Password -->
          <div class="mb-6 flex items-center justify-between">
            <div>
              <input type="checkbox" id="rememberMe" class="mr-2">
              <label for="rememberMe">Remember me</label>
            </div>
            <a href="#!" class="text-blue-500 hover:underline">Forgot password?</a>
          </div>

          <!-- Submit Button -->
          <button type="submit"
            class="w-full rounded bg-blue-600 px-7 py-3 text-sm font-medium text-white transition duration-150 hover:bg-blue-700 focus:ring focus:ring-blue-300">
            Sign in
          </button>

          <!-- Divider -->
          <div class="my-4 flex items-center">
            <hr class="flex-1 border-neutral-300">
            <p class="mx-4 text-center font-semibold">OR</p>
            <hr class="flex-1 border-neutral-300">
          </div>

          <!-- Social Login Buttons -->
          <a href="#!" class="mb-3 flex w-full items-center justify-center rounded bg-blue-700 px-7 py-3 text-white">
            <span class="mr-2">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-4 h-4 fill-white">
                <path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5 16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0 129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
              </svg>
            </span>
            Continue with Facebook
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

