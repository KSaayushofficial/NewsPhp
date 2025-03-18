<?php 
$page=$_GET['uri'] ?? 'dashboard';
$page = str_replace('.php','',$page);
$page = $page.'.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
</head>
<body>
  <div class="container-fluid p-4">
      <div class="row">
            <div class="col-md-12">
                  <?php
      $pagePath = "./pages/$page";
      if(file_exists($pagePath) && is_file($pagePath)){
            require $pagePath;
      } else {
            echo "404 Page not found";
      }
      ?>
            </div>
      </div>
</div>
</body>
</html>