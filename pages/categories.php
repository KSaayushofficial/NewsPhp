<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories - PULSE</title>
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

    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary opacity-90"></div>
            <img src="https://placehold.co/1920x600" alt="Categories Header" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 font-serif">News Categories</h1>
            <p class="text-xl text-white text-opacity-90 max-w-3xl mx-auto">Explore our diverse range of news categories covering everything from technology to culture.</p>
        </div>
    </section>

    <!-- Categories Grid -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Technology Category -->
                <div class="category-card rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="relative h-60">
                        <img src="https://placehold.co/600x400" alt="Technology" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h2 class="text-2xl font-bold text-white mb-2 font-serif">Technology</h2>
                            <p class="text-white text-opacity-90">The latest innovations and digital trends</p>
                        </div>
                    </div>
                    <div class="glass dark:glass-dark p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-primary font-medium">124 Articles</span>
                            <a href="#" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="space-y-3">
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Quantum Computing Breakthrough</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• AI Assistants Becoming Indistinguishable From Humans</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Neural Interfaces Allow Direct Brain-to-Computer Communication</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Business Category -->
                <div class="category-card rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="relative h-60">
                        <img src="https://placehold.co/600x400" alt="Business" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h2 class="text-2xl font-bold text-white mb-2 font-serif">Business</h2>
                            <p class="text-white text-opacity-90">Markets, economy, and corporate news</p>
                        </div>
                    </div>
                    <div class="glass dark:glass-dark p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-secondary font-medium">98 Articles</span>
                            <a href="#" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="space-y-3">
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Global Markets Surge Following Economic Reform</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Renewable Energy Investments Reach All-Time High</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Tech Giants Face New Regulatory Challenges</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Health Category -->
                <div class="category-card rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="relative h-60">
                        <img src="https://placehold.co/600x400" alt="Health" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h2 class="text-2xl font-bold text-white mb-2 font-serif">Health</h2>
                            <p class="text-white text-opacity-90">Medical breakthroughs and wellness</p>
                        </div>
                    </div>
                    <div class="glass dark:glass-dark p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-accent font-medium">87 Articles</span>
                            <a href="#" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="space-y-3">
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Revolutionary Cancer Treatment Shows 90% Success Rate</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• New Study Links Gut Microbiome to Mental Health</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Personalized Medicine Breakthrough for Chronic Conditions</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Science Category -->
                <div class="category-card rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 0.4s;">
                    <div class="relative h-60">
                        <img src="https://placehold.co/600x400" alt="Science" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h2 class="text-2xl font-bold text-white mb-2 font-serif">Science</h2>
                            <p class="text-white text-opacity-90">Discoveries and scientific research</p>
                        </div>
                    </div>
                    <div class="glass dark:glass-dark p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-green-500 font-medium">76 Articles</span>
                            <a href="#" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="space-y-3">
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Mars Mission Discovers Evidence of Ancient Water Systems</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Exploring the Deep Ocean: New Species Discovered</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Breakthrough in Clean Energy: Fusion Reactor Milestone</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Environment Category -->
                <div class="category-card rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 0.5s;">
                    <div class="relative h-60">
                        <img src="https://placehold.co/600x400" alt="Environment" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h2 class="text-2xl font-bold text-white mb-2 font-serif">Environment</h2>
                            <p class="text-white text-opacity-90">Climate change and sustainability</p>
                        </div>
                    </div>
                    <div class="glass dark:glass-dark p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-teal-500 font-medium">92 Articles</span>
                            <a href="#" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="space-y-3">
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Climate Summit Reaches Historic Agreement on Emissions</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Ocean Cleanup Project Removes 100,000 Tons of Plastic</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• New International Coalition Forms to Address Climate Crisis</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Politics Category -->
                <div class="category-card rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 0.6s;">
                    <div class="relative h-60">
                        <img src="https://placehold.co/600x400" alt="Politics" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h2 class="text-2xl font-bold text-white mb-2 font-serif">Politics</h2>
                            <p class="text-white text-opacity-90">Government, policy, and global affairs</p>
                        </div>
                    </div>
                    <div class="glass dark:glass-dark p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-red-500 font-medium">115 Articles</span>
                            <a href="#" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="space-y-3">
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Historic Peace Agreement Signed After Decades of Conflict</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Major Electoral Reform Bill Passes with Bipartisan Support</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Global Summit Addresses Cybersecurity Challenges</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Sports Category -->
                <div class="category-card rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 0.7s;">
                    <div class="relative h-60">
                        <img src="https://placehold.co/600x400" alt="Sports" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h2 class="text-2xl font-bold text-white mb-2 font-serif">Sports</h2>
                            <p class="text-white text-opacity-90">Athletics, competitions, and achievements</p>
                        </div>
                    </div>
                    <div class="glass dark:glass-dark p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-blue-500 font-medium">108 Articles</span>
                            <a href="#" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="space-y-3">
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Underdog Team Makes Historic Championship Win</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Athlete Breaks World Record Using New Training Technology</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• International Tournament Expands to Include New Countries</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Entertainment Category -->
                <div class="category-card rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 0.8s;">
                    <div class="relative h-60">
                        <img src="https://placehold.co/600x400" alt="Entertainment" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h2 class="text-2xl font-bold text-white mb-2 font-serif">Entertainment</h2>
                            <p class="text-white text-opacity-90">Film, music, and celebrity news</p>
                        </div>
                    </div>
                    <div class="glass dark:glass-dark p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-pink-500 font-medium">94 Articles</span>
                            <a href="#" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="space-y-3">
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Award-Winning Film Director Announces New Project</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Virtual Reality Art Exhibition Breaks Attendance Records</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Streaming Platforms Revolutionize Content Distribution</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Culture Category -->
                <div class="category-card rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 0.9s;">
                    <div class="relative h-60">
                        <img src="https://placehold.co/600x400" alt="Culture" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h2 class="text-2xl font-bold text-white mb-2 font-serif">Culture</h2>
                            <p class="text-white text-opacity-90">Arts, heritage, and societal trends</p>
                        </div>
                    </div>
                    <div class="glass dark:glass-dark p-6">
                        <div class="flex justify-between items-center mb-4">
                            <span class="text-sm text-purple-500 font-medium">83 Articles</span>
                            <a href="#" class="text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="space-y-3">
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Renaissance of Traditional Arts in Digital Age</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Global Cultural Exchange Program Launches in 50 Countries</span>
                            </a>
                            <a href="#" class="block text-gray-800 dark:text-white hover:text-primary dark:hover:text-primary transition-colors duration-300">
                                <span class="text-sm">• Ancient Artifacts Reveal New Insights About Lost Civilization</span>
                            </a>
                        </div>
                    </div>
                </div>
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