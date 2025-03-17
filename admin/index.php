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
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <!-- Custom CSS -->
<link rel="stylesheet" href="../css/admin.css">
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="sidebar-header">
      <h4 class="mb-0">Dashboard</h4>
    </div>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">
          <i class="bi bi-house-door"></i> Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-graph-up"></i> Analytics
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-people"></i> Customers
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-cart"></i> Orders
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-box"></i> Products
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-gear"></i> Settings
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="bi bi-question-circle"></i> Help
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
          <img src="https://via.placeholder.com/40" alt="User" class="user-avatar">
          <div class="d-none d-md-block">
            <div class="fw-bold">John Doe</div>
            <div class="small text-muted">Administrator</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Dashboard Content -->
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

    <!-- Footer -->
    <footer class="bg-white p-3 text-center">
      <p class="mb-0 text-muted">© 2023 Admin Dashboard. All rights reserved.</p>
    </footer>
  </div>

  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <!-- Custom JS -->
  <script>
    // Toggle sidebar on mobile
    document.getElementById('sidebar-toggle').addEventListener('click', function() {
      document.getElementById('sidebar').classList.toggle('show');
      document.getElementById('main-content').classList.toggle('pushed');
    });
  </script>
</body>
</html>