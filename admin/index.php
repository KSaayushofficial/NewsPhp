<?php 
require_once "../connection.php";

if(!isset($_SESSION['user']) || $_SESSION['is_login'] != true){
  header("Location: ../login");
  exit();
}


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
<<<<<<< HEAD
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <h4 class="mb-0">Dashboard</h4>
    </div>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="<?=url('admin')?>">
          <i class="bi bi-house-door"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=url('admin/users')?>">
          <i class="bi bi-graph-up"></i> Users
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=url('admin/profile')?>">
          <i class="bi bi-person-add"></i> Update Profile
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=url('admin/category')?>">
          <i class="bi bi-person-add"></i> Category
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=url('admin/blog')?>">
          <i class="bi bi-person-add"></i> Blog
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=url('admin/logout.php')?>">
          <i class="bi bi-people"></i> Logout
        </a>
      </li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <!-- Topbar -->
    <div class="topbar px-4 d-flex align-items-center justify-content-between">
      <button class="btn d-lg-none" id="sidebar-toggle">
        <i class="bi bi-list fs-4"></i>
      </button>
      <div class="search-bar d-none d-md-block">
        <div class="input-group">
          <span class="input-group-text bg-light border-0">
            <i class="bi bi-search"></i>
          </span>
          <input type="text" class="form-control border-0 bg-light" placeholder="Search...">
        </div>
      </div>
      <div class="d-flex align-items-center">
        <div class="position-relative me-3">
          <a href="#" class="text-dark">
            <i class="bi bi-bell fs-5"></i>
            <span class="notification-badge">3</span>
          </a>
        </div>
        <div class="position-relative me-3">
          <a href="#" class="text-dark">
            <i class="bi bi-envelope fs-5"></i>
            <span class="notification-badge">5</span>
          </a>
        </div>
        <div class="user-profile">
          <img src="https://via.placeholder.com/40" alt="" class="user-avatar">
          <div class="d-none d-md-block">
            <div class="fw-bold"><?=$_SESSION['user']['name'];?></div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Dashboard Content -->
<div class="container-fluid p-4">
=======
  <div class="container-fluid p-4">
>>>>>>> 9a6cddc72def2d7143ed9c8382dd78ccf4f8a852
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