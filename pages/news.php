<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - PULSE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    dark: '#0A0F1D', // Deep navy-black for a premium dark mode
                    light: '#F5F7FA', // Soft near-white for contrast
                    primary: '#1E90FF', // Bright electric blue for a modern feel
                    secondary: '#5efce8', // Vibrant sunset orange for highlights
                    accent: '#00F7BF', // Neon cyan-green for eye-catching elements
                    muted: '#A1AAB3', // Soft grayish-blue for neutral backgrounds
                },
                fontFamily: {
                    sans: ['Inter', 'sans-serif'],
                    serif: ['Merriweather', 'serif'],
                },
                backdropBlur: {
                    xs: '4px',
                    sm: '10px',
                    md: '18px',
                }
            }
        }
    }
</script>


</head>
<body class="font-sans bg-gradient-to-br from-light to-muted dark:from-dark dark:to-gray-900 dark:text-white min-h-screen transition-colors duration-300">
    <!-- Top Bar -->
    <div class="bg-gradient-to-r from-primary to-secondary text-white py-2">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <div class="flex items-center space-x-4 text-sm">
                <span><i class="fas fa-clock mr-1"></i> March 18, 2025</span>
                <span class="hidden md:inline-block"><i class="fas fa-map-marker-alt mr-1"></i> New York</span>
                <span class="hidden md:inline-block">24°C</span>
            </div>
            <div class="flex items-center space-x-4">
                <button id="theme-toggle" class="text-white hover:text-accent transition">
                    <i class="fas fa-moon"></i>
                </button>
                <div class="hidden md:flex space-x-3">
                    <a href="#" class="hover:text-accent transition"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-accent transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-accent transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-accent transition"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>


    <!-- Page Header -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary opacity-90"></div>
            <img src="https://placehold.co/1920x600" alt="News Header" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 font-serif">Latest News</h1>
            <p class="text-xl text-white text-opacity-90 max-w-3xl mx-auto">Stay informed with our comprehensive coverage of breaking news and top stories from around the world.</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="glass dark:glass-dark rounded-xl p-6 shadow-lg">
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6">
                    <div class="w-full lg:w-auto">
                        <h3 class="text-lg font-medium text-gray-800 dark:text-white mb-3">Filter by Category</h3>
                        <div class="flex flex-wrap gap-2">
                            <button class="category-pill px-4 py-2 bg-primary text-white rounded-full shadow-md hover:shadow-lg font-medium transition-all duration-300">
                                All
                            </button>
                            <button class="category-pill px-4 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                                Technology
                            </button>
                            <button class="category-pill px-4 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                                Business
                            </button>
                            <button class="category-pill px-4 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                                Health
                            </button>
                            <button class="category-pill px-4 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                                Politics
                            </button>
                        </div>
                    </div>
                    <div class="w-full lg:w-auto flex flex-col md:flex-row gap-4">
                        <div class="relative">
                            <input type="text" placeholder="Search news..." class="w-full px-4 py-2 pl-10 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 border-0 rounded-full focus:outline-none focus:ring-2 focus:ring-primary">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        </div>
                        <div class="relative">
                            <select class="w-full appearance-none px-4 py-2 pr-10 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 border-0 rounded-full focus:outline-none focus:ring-2 focus:ring-primary text-gray-800 dark:text-white">
                                <option>Sort by: Latest</option>
                                <option>Sort by: Popular</option>
                                <option>Sort by: Trending</option>
                                <option>Sort by: Most Read</option>
                            </select>
                            <i class="fas fa-chevron-down absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured News -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <!-- Featured Article -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="relative h-80">
                        <img src="https://placehold.co/800x600" alt="Featured News" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="inline-block px-3 py-1 bg-primary text-white rounded-full text-xs font-medium">Featured</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-primary uppercase tracking-wider">Technology</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">2 hours ago</span>
                        </div>
                        <h2 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">Quantum Computing Breakthrough Promises New Era of Technology</h2>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">Scientists have achieved a major milestone in quantum computing that could revolutionize everything from medicine to artificial intelligence.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://placehold.co/100x100" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                <span class="text-sm text-gray-500 dark:text-gray-400">By Dr. Sarah Chen</span>
                            </div>
                            <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Read More</a>
                        </div>
                    </div>
                </div>
                
                <!-- Featured Article 2 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="relative h-80">
                        <img src="https://placehold.co/800x600" alt="Featured News" class="w-full h-full object-cover">
                        <div class="absolute top-4 left-4">
                            <span class="inline-block px-3 py-1 bg-secondary text-white rounded-full text-xs font-medium">Featured</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-secondary uppercase tracking-wider">Environment</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">4 hours ago</span>
                        </div>
                        <h2 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">Climate Summit Reaches Historic Agreement on Emissions</h2>
                        <p class="text-gray-600 dark:text-gray-300 mb-4">World leaders have agreed on ambitious new targets to reduce carbon emissions and combat climate change in a landmark decision.</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <img src="https://placehold.co/100x100" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                <span class="text-sm text-gray-500 dark:text-gray-400">By Michael Johnson</span>
                            </div>
                            <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 font-medium">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Grid -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- News Card 1 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.3s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-primary uppercase tracking-wider">Health</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">6 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Revolutionary Cancer Treatment Shows 90% Success Rate</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">A new therapy has shown remarkable results in clinical trials, offering hope to millions of patients worldwide.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- News Card 2 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.4s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-secondary uppercase tracking-wider">Business</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">8 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Global Markets Surge Following Economic Reform Announcement</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Investors respond positively to new international trade agreements and policy changes.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- News Card 3 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.5s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-accent uppercase tracking-wider">Sports</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">10 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Underdog Team Makes Historic Championship Win</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">First-time finalists defeat reigning champions in dramatic overtime victory.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- News Card 4 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.6s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-green-500 uppercase tracking-wider">Science</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">12 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Mars Mission Discovers Evidence of Ancient Water Systems</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">New findings suggest Mars once had extensive rivers and lakes similar to Earth.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- News Card 5 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.7s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-purple-500 uppercase tracking-wider">Technology</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">14 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">AI Assistants Becoming Indistinguishable From Humans</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">New generation of AI assistants pass Turing test with unprecedented success rates.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- News Card 6 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.8s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-red-500 uppercase tracking-wider">Politics</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">16 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">New International Coalition Forms to Address Climate Crisis</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Major nations join forces to develop unified approach to environmental challenges.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- News Card 7 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.9s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-blue-500 uppercase tracking-wider">Education</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">18 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Universities Adopt AI-Enhanced Learning Platforms</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Higher education institutions adapt to changing student needs with innovative approaches.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- News Card 8 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-yellow-500 uppercase tracking-wider">Culture</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">20 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Renaissance of Traditional Arts in Digital Age</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">How artisans are finding new audiences through social media while preserving centuries-old techniques.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- News Card 9 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1.1s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-pink-500 uppercase tracking-wider">Entertainment</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">22 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Award-Winning Film Director Announces New Project</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Acclaimed filmmaker reveals details about highly anticipated upcoming movie.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
            </div>
            
            <!-- Load More -->
            <div class="mt-12 text-center">
                <button class="px-8 py-3 bg-primary hover:bg-opacity-90 text-white rounded-full transition-all duration-300 shadow-lg hover:shadow-xl">
                    Load More News
                </button>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary opacity-90 dark:opacity-80"></div>
            <img src="https://placehold.co/1920x1080" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center text-white">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 font-serif">Stay Updated with PULSE</h2>
                <p class="text-lg mb-8 text-white text-opacity-90">Subscribe to our newsletter to receive the latest news, exclusive stories, and personalized content directly in your inbox.</p>
                <form class="max-w-md mx-auto">
                    <div class="flex flex-col sm:flex-row gap-4">
                        <input type="email" placeholder="Your email address" class="flex-grow px-4 py-3 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-white">
                        <button type="submit" class="bg-white text-primary hover:bg-opacity-90 px-6 py-3 rounded-full font-medium transition duration-300 shadow-lg hover:shadow-xl">Subscribe</button>
                    </div>
                    <p class="text-sm mt-4 text-white text-opacity-80">We respect your privacy. Unsubscribe at any time.</p>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <div>
                    <a href="index.html" class="text-3xl font-bold font-serif mb-4 inline-block">
                        <span class="gradient-text">PULSE</span>
                    </a>
                    <p class="text-gray-400 mb-6">Your source for the latest news, in-depth analysis, and cutting-edge stories from around the world.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-primary transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-primary transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-primary transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-primary transition-colors duration-300">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Explore</h4>
                    <ul class="space-y-2">
                        <li><a href="index.html" class="text-gray-400 hover:text-white transition-colors duration-300">Home</a></li>
                        <li><a href="news.html" class="text-gray-400 hover:text-white transition-colors duration-300">News</a></li>
                        <li><a href="trending.html" class="text-gray-400 hover:text-white transition-colors duration-300">Trending</a></li>
                        <li><a href="categories.html" class="text-gray-400 hover:text-white transition-colors duration-300">Categories</a></li>
                        <li><a href="videos.html" class="text-gray-400 hover:text-white transition-colors duration-300">Videos</a></li>
                        <li><a href="about.html" class="text-gray-400 hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="contact.html" class="text-gray-400 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="categories.html" class="text-gray-400 hover:text-white transition-colors duration-300">Technology</a></li>
                        <li><a href="categories.html" class="text-gray-400 hover:text-white transition-colors duration-300">Business</a></li>
                        <li><a href="categories.html" class="text-gray-400 hover:text-white transition-colors duration-300">Health</a></li>
                        <li><a href="categories.html" class="text-gray-400 hover:text-white transition-colors duration-300">Science</a></li>
                        <li><a href="categories.html" class="text-gray-400 hover:text-white transition-colors duration-300">Sports</a></li>
                        <li><a href="categories.html" class="text-gray-400 hover:text-white transition-colors duration-300">Entertainment</a></li>
                        <li><a href="categories.html" class="text-gray-400 hover:text-white transition-colors duration-300">Politics</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-primary"></i>
                            <span>123 News Street, New York, NY 10001, USA</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-envelope mt-1 mr-3 text-primary"></i>
                            <span>info@pulsemedia.com</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-phone mt-1 mr-3 text-primary"></i>
                            <span>+1 (555) 123-4567</span>
                        </li>
                    </ul>
                    <div class="mt-6">
                        <h5 class="font-medium mb-2">Download Our App</h5>
                        <div class="flex space-x-3">
                            <a href="#" class="bg-gray-800 hover:bg-gray-700 transition-colors duration-300 px-3 py-2 rounded flex items-center">
                                <i class="fab fa-apple text-xl mr-2"></i>
                                <span class="text-sm">App Store</span>
                            </a>
                            <a href="#" class="bg-gray-800 hover:bg-gray-700 transition-colors duration-300 px-3 py-2 rounded flex items-center">
                                <i class="fab fa-google-play text-xl mr-2"></i>
                                <span class="text-sm">Google Play</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 mt-8 text-center text-gray-400">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p>&copy; 2025 PULSE Media. All rights reserved.</p>
                    <div class="flex space-x-6 mt-4 md:mt-0">
                        <a href="#" class="hover:text-white transition-colors duration-300">Privacy Policy</a>
                        <a href="#" class="hover:text-white transition-colors duration-300">Terms of Service</a>
                        <a href="#" class="hover:text-white transition-colors duration-300">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-6 right-6 w-12 h-12 rounded-full bg-primary text-white flex items-center justify-center shadow-lg hover:bg-opacity-90 transition-all duration-300 opacity-0 invisible">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JavaScript -->
    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
        
        // Search overlay toggle
        const searchButton = document.getElementById('search-button');
        const searchButtonMobile = document.getElementById('search-button-mobile');
        const searchOverlay = document.getElementById('search-overlay');
        const closeSearch = document.getElementById('close-search');
        
        searchButton.addEventListener('click', () => {
            searchOverlay.classList.toggle('hidden');
        });
        
        searchButtonMobile.addEventListener('click', () => {
            searchOverlay.classList.toggle('hidden');
        });
        
        closeSearch.addEventListener('click', () => {
            searchOverlay.classList.add('hidden');
        });
        
        // Dark mode toggle
        const themeToggle = document.getElementById('theme-toggle');
        const html = document.documentElement;
        
        // Check for saved theme preference or use user's system preference
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            html.classList.add('dark');
            themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
        } else {
            html.classList.remove('dark');
            themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
        }
        
        themeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
            if (html.classList.contains('dark')) {
                localStorage.theme = 'dark';
                themeToggle.innerHTML = '<i class="fas fa-sun"></i>';
            } else {
                localStorage.theme = 'light';
                themeToggle.innerHTML = '<i class="fas fa-moon"></i>';
            }
        });
        
        // Back to top button
        const backToTopButton = document.getElementById('back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.remove('opacity-0', 'invisible');
                backToTopButton.classList.add('opacity-100', 'visible');
            } else {
                backToTopButton.classList.remove('opacity-100', 'visible');
                backToTopButton.classList.add('opacity-0', 'invisible');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>