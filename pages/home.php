<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PULSE - Modern News & Magazine</title>
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

    <!-- Breaking News Ticker -->
    <div class="py-2 bg-primary bg-opacity-10 dark:bg-opacity-20 border-b border-primary border-opacity-20">
        <div class="container mx-auto px-4">
            <div class="flex items-center overflow-hidden">
                <div class="shrink-0 mr-4">
                    <span class="bg-primary text-white px-3 py-1 rounded-full text-sm font-medium">Breaking</span>
                </div>
                <div class="news-ticker overflow-hidden whitespace-nowrap">
                    <div class="inline-block animate-marquee">
                        <span class="inline-block mr-8 text-gray-800 dark:text-white">Global Tech Summit announces breakthrough in quantum computing</span>
                        <span class="inline-block mr-8 text-gray-800 dark:text-white">Climate scientists report record temperatures for third consecutive month</span>
                        <span class="inline-block mr-8 text-gray-800 dark:text-white">Major economic reforms expected to boost global markets</span>
                        <span class="inline-block mr-8 text-gray-800 dark:text-white">International peace talks show promising results</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="py-8 md:py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Main Featured Article -->
                <div class="lg:col-span-8 relative group overflow-hidden rounded-2xl shadow-xl animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="relative h-[500px] overflow-hidden">
                        <img src="https://cdn.geekwire.com/wp-content/uploads/2025/02/Majorana-1-002-4000px.jpg" alt="Featured News" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-80"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-6 md:p-8">
                            <span class="inline-block px-4 py-1 bg-primary text-white rounded-full text-sm font-medium mb-4">Technology</span>
                            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white mb-4 font-serif">Quantum Computing Breakthrough Promises New Era of Technology</h1>
                            <p class="text-gray-200 mb-4 max-w-3xl">Scientists have achieved a major milestone in quantum computing that could revolutionize everything from medicine to artificial intelligence.</p>
                            <div class="flex items-center text-white">
                                <img src="https://placehold.co/100x100" alt="Author" class="w-10 h-10 rounded-full mr-3">
                                <div>
                                    <p class="font-medium">Dr. Sarah Chen</p>
                                    <p class="text-sm text-gray-300">March 18, 2025 • 8 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Secondary Featured Articles -->
                <div class="lg:col-span-4 grid grid-rows-2 gap-6">
                    <!-- Secondary Article 1 -->
                    <div class="relative group overflow-hidden rounded-2xl shadow-xl animate-fade-in" style="animation-delay: 0.2s;">
                        <div class="relative h-[240px] overflow-hidden">
                            <img src="https://www.thecable.ng/wp-content/uploads/2023/12/IMG_2573.jpeg" alt="News Image" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <span class="inline-block px-3 py-1 bg-secondary text-white rounded-full text-xs font-medium mb-2">Environment</span>
                                <h2 class="text-xl font-bold text-white mb-2">Climate Summit Reaches Historic Agreement on Emissions</h2>
                                <div class="flex items-center text-white text-sm">
                                    <span>March 17, 2025</span>
                                    <span class="mx-2">•</span>
                                    <span>5 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Secondary Article 2 -->
                    <div class="relative group overflow-hidden rounded-2xl shadow-xl animate-fade-in" style="animation-delay: 0.3s;">
                        <div class="relative h-[240px] overflow-hidden">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkU1heijW8GtEkcI-p2NNxf-iHeuJwQt55_ZNHpj6UqlSyCOwHcA6y7xZXObL5A8e8WSU&usqp=CAU" alt="News Image" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-5">
                                <span class="inline-block px-3 py-1 bg-accent text-gray-900 rounded-full text-xs font-medium mb-2">Health</span>
                                <h2 class="text-xl font-bold text-white mb-2">Revolutionary Cancer Treatment Shows 90% Success Rate</h2>
                                <div class="flex items-center text-white text-sm">
                                    <span>March 16, 2025</span>
                                    <span class="mx-2">•</span>
                                    <span>4 min read</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-8">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center gap-3 md:gap-4 animate-fade-in" style="animation-delay: 0.4s;">
                <a href="categories.html" class="category-pill px-5 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                    <i class="fas fa-globe mr-2"></i> World
                </a>
                <a href="categories.html" class="category-pill px-5 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                    <i class="fas fa-laptop-code mr-2"></i> Technology
                </a>
                <a href="categories.html" class="category-pill px-5 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                    <i class="fas fa-chart-line mr-2"></i> Business
                </a>
                <a href="categories.html" class="category-pill px-5 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                    <i class="fas fa-heartbeat mr-2"></i> Health
                </a>
                <a href="categories.html" class="category-pill px-5 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                    <i class="fas fa-futbol mr-2"></i> Sports
                </a>
                <a href="categories.html" class="category-pill px-5 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                    <i class="fas fa-film mr-2"></i> Entertainment
                </a>
                <a href="categories.html" class="category-pill px-5 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                    <i class="fas fa-flask mr-2"></i> Science
                </a>
                <a href="categories.html" class="category-pill px-5 py-2 bg-white dark:bg-gray-800 bg-opacity-70 dark:bg-opacity-70 rounded-full shadow-md hover:shadow-lg text-gray-800 dark:text-white font-medium transition-all duration-300 hover:bg-primary hover:text-white">
                    <i class="fas fa-landmark mr-2"></i> Politics
                </a>
            </div>
        </div>
    </section>

    <!-- Trending News -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white font-serif">Trending Now</h2>
                <a href="trending.html" class="text-primary hover:text-secondary transition-colors duration-300 flex items-center">
                    View All <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Trending Card 1 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.5s;">
                    <div class="relative">
                        <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-primary text-white text-xs font-medium px-2 py-1 rounded-full">
                            #1 Trending
                        </div>
                    </div>
                    <div class="p-5">
                        <span class="text-xs font-semibold text-primary uppercase tracking-wider">Technology</span>
                        <h3 class="text-lg font-bold mt-2 mb-3 text-gray-800 dark:text-white">AI Assistants Becoming Indistinguishable From Humans</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">New generation of AI assistants pass Turing test with unprecedented success rates.</p>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 dark:text-gray-400">March 18, 2025</span>
                            <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300">Read More</a>
                        </div>
                    </div>
                </div>
                
                <!-- Trending Card 2 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.6s;">
                    <div class="relative">
                        <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-primary text-white text-xs font-medium px-2 py-1 rounded-full">
                            #2 Trending
                        </div>
                    </div>
                    <div class="p-5">
                        <span class="text-xs font-semibold text-secondary uppercase tracking-wider">Business</span>
                        <h3 class="text-lg font-bold mt-2 mb-3 text-gray-800 dark:text-white">Global Markets Surge Following Economic Reform Announcement</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Investors respond positively to new international trade agreements.</p>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 dark:text-gray-400">March 17, 2025</span>
                            <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300">Read More</a>
                        </div>
                    </div>
                </div>
                
                <!-- Trending Card 3 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.7s;">
                    <div class="relative">
                        <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-primary text-white text-xs font-medium px-2 py-1 rounded-full">
                            #3 Trending
                        </div>
                    </div>
                    <div class="p-5">
                        <span class="text-xs font-semibold text-accent uppercase tracking-wider">Sports</span>
                        <h3 class="text-lg font-bold mt-2 mb-3 text-gray-800 dark:text-white">Underdog Team Makes Historic Championship Win</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">First-time finalists defeat reigning champions in dramatic overtime victory.</p>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 dark:text-gray-400">March 16, 2025</span>
                            <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300">Read More</a>
                        </div>
                    </div>
                </div>
                
                <!-- Trending Card 4 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 0.8s;">
                    <div class="relative">
                        <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-primary text-white text-xs font-medium px-2 py-1 rounded-full">
                            #4 Trending
                        </div>
                    </div>
                    <div class="p-5">
                        <span class="text-xs font-semibold text-green-500 uppercase tracking-wider">Science</span>
                        <h3 class="text-lg font-bold mt-2 mb-3 text-gray-800 dark:text-white">Mars Mission Discovers Evidence of Ancient Water Systems</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">New findings suggest Mars once had extensive rivers and lakes.</p>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 dark:text-gray-400">March 15, 2025</span>
                            <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Editor's Picks -->
    <section class="py-12 bg-gradient-to-br from-gray-100 to-white dark:from-gray-900 dark:to-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white font-serif">Editor's Picks</h2>
                <a href="news.html" class="text-primary hover:text-secondary transition-colors duration-300 flex items-center">
                    View All <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Left Column -->
                <div class="lg:col-span-1">
                    <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg h-full animate-fade-in" style="animation-delay: 0.9s;">
                        <div class="relative">
                            <img src="https://placehold.co/600x800" alt="News Image" class="w-full h-80 object-cover">
                            <div class="absolute top-3 left-3">
                                <span class="inline-block px-3 py-1 bg-primary text-white rounded-full text-xs font-medium">Editor's Choice</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-semibold text-primary uppercase tracking-wider">Culture</span>
                            <h3 class="text-xl font-bold mt-2 mb-3 text-gray-800 dark:text-white">Renaissance of Traditional Arts in Digital Age</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">How artisans are finding new audiences through social media platforms while preserving centuries-old techniques.</p>
                            <div class="flex items-center text-sm">
                                <img src="https://placehold.co/100x100" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                <span class="text-gray-500 dark:text-gray-400">By Maria Rodriguez</span>
                            </div>
                            <div class="mt-4 flex justify-between items-center text-sm">
                                <span class="text-gray-500 dark:text-gray-400">March 14, 2025</span>
                                <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Middle Column -->
                <div class="lg:col-span-1">
                    <div class="space-y-6">
                        <!-- Middle Card 1 -->
                        <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1s;">
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-2/5">
                                    <img src="https://placehold.co/300x200" alt="News Image" class="w-full h-full object-cover">
                                </div>
                                <div class="md:w-3/5 p-5">
                                    <span class="text-xs font-semibold text-secondary uppercase tracking-wider">Politics</span>
                                    <h3 class="text-lg font-bold mt-2 mb-3 text-gray-800 dark:text-white">New International Coalition Forms to Address Climate Crisis</h3>
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-gray-500 dark:text-gray-400">March 13, 2025</span>
                                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Middle Card 2 -->
                        <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1.1s;">
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-2/5">
                                    <img src="https://placehold.co/300x200" alt="News Image" class="w-full h-full object-cover">
                                </div>
                                <div class="md:w-3/5 p-5">
                                    <span class="text-xs font-semibold text-accent uppercase tracking-wider">Education</span>
                                    <h3 class="text-lg font-bold mt-2 mb-3 text-gray-800 dark:text-white">Universities Adopt AI-Enhanced Learning Platforms</h3>
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-gray-500 dark:text-gray-400">March 12, 2025</span>
                                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Middle Card 3 -->
                        <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1.2s;">
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-2/5">
                                    <img src="https://placehold.co/300x200" alt="News Image" class="w-full h-full object-cover">
                                </div>
                                <div class="md:w-3/5 p-5">
                                    <span class="text-xs font-semibold text-green-500 uppercase tracking-wider">Health</span>
                                    <h3 class="text-lg font-bold mt-2 mb-3 text-gray-800 dark:text-white">Personalized Medicine Breakthrough for Chronic Conditions</h3>
                                    <div class="flex justify-between items-center text-sm">
                                        <span class="text-gray-500 dark:text-gray-400">March 11, 2025</span>
                                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300">Read</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column -->
                <div class="lg:col-span-1">
                    <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg h-full animate-fade-in" style="animation-delay: 1.3s;">
                        <div class="relative">
                            <img src="https://placehold.co/600x800" alt="News Image" class="w-full h-80 object-cover">
                            <div class="absolute top-3 left-3">
                                <span class="inline-block px-3 py-1 bg-secondary text-white rounded-full text-xs font-medium">Featured</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-xs font-semibold text-secondary uppercase tracking-wider">Innovation</span>
                            <h3 class="text-xl font-bold mt-2 mb-3 text-gray-800 dark:text-white">Sustainable Cities: The Future of Urban Living</h3>
                            <p class="text-gray-600 dark:text-gray-300 mb-4">How architects and urban planners are reimagining cities to be more sustainable, efficient, and livable.</p>
                            <div class="flex items-center text-sm">
                                <img src="https://placehold.co/100x100" alt="Author" class="w-8 h-8 rounded-full mr-2">
                                <span class="text-gray-500 dark:text-gray-400">By James Wilson</span>
                            </div>
                            <div class="mt-4 flex justify-between items-center text-sm">
                                <span class="text-gray-500 dark:text-gray-400">March 10, 2025</span>
                                <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video News Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white font-serif">Video News</h2>
                <a href="videos.html" class="text-primary hover:text-secondary transition-colors duration-300 flex items-center">
                    View All <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Video Card 1 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1.4s;">
                    <div class="relative group">
                        <img src="https://placehold.co/600x400" alt="Video Thumbnail" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 bg-primary bg-opacity-80 rounded-full flex items-center justify-center group-hover:bg-opacity-100 transition-all duration-300">
                                <i class="fas fa-play text-white text-xl"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-3 right-3 bg-black bg-opacity-70 text-white text-xs px-2 py-1 rounded">
                            5:24
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Inside the Quantum Computing Revolution</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">An exclusive look at the labs where the future of computing is being created.</p>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 dark:text-gray-400">2.4M views</span>
                            <span class="text-gray-500 dark:text-gray-400">March 18, 2025</span>
                        </div>
                    </div>
                </div>
                
                <!-- Video Card 2 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1.5s;">
                    <div class="relative group">
                        <img src="https://placehold.co/600x400" alt="Video Thumbnail" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 bg-primary bg-opacity-80 rounded-full flex items-center justify-center group-hover:bg-opacity-100 transition-all duration-300">
                                <i class="fas fa-play text-white text-xl"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-3 right-3 bg-black bg-opacity-70 text-white text-xs px-2 py-1 rounded">
                            8:17
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">The Future of Sustainable Transportation</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">How electric and autonomous vehicles are transforming how we move.</p>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 dark:text-gray-400">1.8M views</span>
                            <span class="text-gray-500 dark:text-gray-400">March 16, 2025</span>
                        </div>
                    </div>
                </div>
                
                <!-- Video Card 3 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1.6s;">
                    <div class="relative group">
                        <img src="https://placehold.co/600x400" alt="Video Thumbnail" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 bg-primary bg-opacity-80 rounded-full flex items-center justify-center group-hover:bg-opacity-100 transition-all duration-300">
                                <i class="fas fa-play text-white text-xl"></i>
                            </div>
                        </div>
                        <div class="absolute bottom-3 right-3 bg-black bg-opacity-70 text-white text-xs px-2 py-1 rounded">
                            6:42
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Exploring the Deep Ocean: New Species Discovered</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Marine biologists reveal fascinating findings from recent deep-sea expedition.</p>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-gray-500 dark:text-gray-400">3.1M views</span>
                            <span class="text-gray-500 dark:text-gray-400">March 14, 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Grid -->
    <section class="py-12 bg-gradient-to-br from-gray-100 to-white dark:from-gray-900 dark:to-gray-800">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white font-serif">Latest News</h2>
                <a href="news.html" class="text-primary hover:text-secondary transition-colors duration-300 flex items-center">
                    View All <i class="fas fa-arrow-right ml-2"></i>
                </a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Latest News Card 1 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1.7s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-primary uppercase tracking-wider">Technology</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">2 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Neural Interfaces Allow Direct Brain-to-Computer Communication</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">New technology enables users to control digital devices with thoughts alone.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- Latest News Card 2 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1.8s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-secondary uppercase tracking-wider">Business</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">4 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Renewable Energy Investments Reach All-Time High</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Global corporations commit billions to clean energy transition.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- Latest News Card 3 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 1.9s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-accent uppercase tracking-wider">Health</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">6 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">New Study Links Gut Microbiome to Mental Health</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Research reveals strong connection between digestive bacteria and psychological wellbeing.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- Latest News Card 4 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 2s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-green-500 uppercase tracking-wider">Environment</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">8 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Ocean Cleanup Project Removes 100,000 Tons of Plastic</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Innovative system successfully tackles Great Pacific Garbage Patch.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- Latest News Card 5 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 2.1s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-purple-500 uppercase tracking-wider">Culture</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">10 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Virtual Reality Art Exhibition Breaks Attendance Records</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">Digital museum experience attracts millions of visitors worldwide.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
                
                <!-- Latest News Card 6 -->
                <div class="news-card glass dark:glass-dark rounded-xl overflow-hidden shadow-lg animate-fade-in" style="animation-delay: 2.2s;">
                    <img src="https://placehold.co/600x400" alt="News Image" class="w-full h-48 object-cover">
                    <div class="p-5">
                        <div class="flex justify-between items-center mb-3">
                            <span class="text-xs font-semibold text-red-500 uppercase tracking-wider">Sports</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">12 hours ago</span>
                        </div>
                        <h3 class="text-lg font-bold mb-3 text-gray-800 dark:text-white">Athlete Breaks World Record Using New Training Technology</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">AI-powered coaching system helps sprinter achieve unprecedented performance.</p>
                        <a href="article.html" class="text-primary hover:text-secondary transition-colors duration-300 text-sm font-medium">Read Full Story</a>
                    </div>
                </div>
            </div>
            
            <!-- Load More Button -->
            <div class="text-center mt-10">
                <button class="px-6 py-3 bg-primary hover:bg-opacity-90 text-white rounded-full transition-all duration-300 shadow-lg hover:shadow-xl">
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
        
        // News ticker animation
        const marquee = document.querySelector('.animate-marquee');
        if (marquee) {
            const duration = marquee.textContent.length * 0.15;
            marquee.style.animation = `marquee ${duration}s linear infinite`;
        }
        
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