<?php 
$page=$_GET['uri'] ?? 'home';
$page = str_replace('.php','',$page);
$page = $page.'.php';

if(isset($_GET['adminBtn'])){
  header("Location: ../news/admin/index.php");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">  
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="glass dark:glass-dark sticky top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center">
                    <a href="index.php" class="text-3xl font-bold font-serif">
                        <span class="gradient-text">PULSE</span>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex space-x-8">
                    <a href="index.php" class="text-gray-800 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors duration-300 border-b-2 border-primary">Home</a>
                    <a href="news.php" class="text-gray-800 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors duration-300">News</a>
                    <a href="categories.php" class="text-gray-800 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors duration-300">Categories</a>
                    <a href="about.php" class="text-gray-800 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors duration-300">About</a>
                    <a href="contact.php" class="text-gray-800 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors duration-300">Contact</a>
                </nav>
                
                <!-- Search Button -->
                <div class="hidden md:flex items-center space-x-4">
                    <button id="search-button" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                        <i class="fas fa-search text-xl"></i>
                    </button>
                    <a href="#">
                        <button onclick="window.location.href='?adminBtn=true'" class="bg-primary hover:bg-opacity-90 text-white px-5 py-2 rounded-full transition-all duration-300 flex items-center">
    <i class="fas fa-user-circle mr-2"></i>Admin
</button>
                    </a>
                </div>
                
                <!-- Mobile menu button -->
                <div class="lg:hidden flex items-center space-x-4">
                    <button id="search-button-mobile" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                        <i class="fas fa-search text-xl"></i>
                    </button>
                    <button id="mobile-menu-button" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="lg:hidden hidden pb-4 glass dark:glass-dark">
            <div class="container mx-auto px-4 py-2 space-y-3">
                <a href="index.php" class="block py-2 text-gray-800 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors duration-300">Home</a>
                <a href="news.php" class="block py-2 text-gray-800 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors duration-300">News</a>
                <a href="categories.php" class="block py-2 text-gray-800 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors duration-300">Categories</a>
                <a href="about.php" class="block py-2 text-gray-800 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors duration-300">About</a>
                <a href="contact.php" class="block py-2 text-gray-800 dark:text-white font-medium hover:text-primary dark:hover:text-primary transition-colors duration-300">Contact</a>
                <div class="pt-2 flex space-x-3">
                    <a href="#" class="hover:text-primary transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-primary transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-primary transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-primary transition"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        
        <!-- Search Overlay -->
        <div id="search-overlay" class="fixed inset-0 bg-black bg-opacity-80 z-50 flex items-center justify-center hidden">
            <div class="w-full max-w-3xl px-4">
                <div class="relative">
                    <input type="text" placeholder="Search for news, articles, and more..." class="w-full py-4 px-6 rounded-full text-lg focus:outline-none">
                    <button class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-primary">
                        <i class="fas fa-search text-xl"></i>
                    </button>
                </div>
                <div class="text-center mt-6">
                    <button id="close-search" class="text-white hover:text-primary transition">
                        <i class="fas fa-times text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
                        <div class="col">
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