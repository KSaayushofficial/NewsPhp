<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PULSE</title>
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
            <img src="https://placehold.co/1920x600" alt="About Us Header" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 font-serif">About PULSE</h1>
            <p class="text-xl text-white text-opacity-90 max-w-3xl mx-auto">Delivering accurate, timely, and impactful news to inform and inspire our global audience.</p>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="text-center mb-12 animate-fade-in">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white font-serif mb-4">Our Story</h2>
                    <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto"></div>
                </div>
                
                <div class="glass dark:glass-dark p-8 rounded-2xl shadow-xl animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="prose prose-lg max-w-none text-gray-700 dark:text-gray-300">
                        <p class="mb-4">Founded in 2020, PULSE was created with a simple mission: to provide accurate, unbiased, and timely news to readers around the world. In an era of information overload and misinformation, we recognized the need for a trusted source of news that prioritizes facts over sensationalism.</p>
                        
                        <p class="mb-4">Our team of experienced journalists and editors work tirelessly to bring you the most important stories from across the globe. We cover a wide range of topics, from politics and business to technology and culture, ensuring that our readers stay informed about the issues that matter most.</p>
                        
                        <p class="mb-4">What sets PULSE apart is our commitment to innovative storytelling and digital-first approach. We leverage cutting-edge technology to deliver news in formats that resonate with today's audiences, while maintaining the highest standards of journalistic integrity.</p>
                        
                        <p>As we continue to grow, we remain dedicated to our core values of accuracy, independence, and fairness. We are grateful for the trust our readers place in us, and we strive every day to earn and maintain that trust through our reporting.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-16 bg-gradient-to-br from-gray-100 to-white dark:from-gray-900 dark:to-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in" style="animation-delay: 0.3s;">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white font-serif mb-4">Our Values</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto"></div>
                <p class="mt-4 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">The principles that guide our work and define our approach to journalism.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value 1 -->
                <div class="value-card glass dark:glass-dark rounded-xl p-8 text-center shadow-lg animate-fade-in" style="animation-delay: 0.4s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-balance-scale text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Integrity</h3>
                    <p class="text-gray-600 dark:text-gray-400">We are committed to honest, accurate, and fair reporting. We verify facts, correct errors promptly, and maintain transparency in our journalistic process.</p>
                </div>
                
                <!-- Value 2 -->
                <div class="value-card glass dark:glass-dark rounded-xl p-8 text-center shadow-lg animate-fade-in" style="animation-delay: 0.5s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-search text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Independence</h3>
                    <p class="text-gray-600 dark:text-gray-400">We maintain editorial independence and resist external pressures that could compromise our reporting. Our loyalty is to the truth and to our readers.</p>
                </div>
                
                <!-- Value 3 -->
                <div class="value-card glass dark:glass-dark rounded-xl p-8 text-center shadow-lg animate-fade-in" style="animation-delay: 0.6s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Diversity</h3>
                    <p class="text-gray-600 dark:text-gray-400">We value diverse perspectives and strive to represent a wide range of voices and viewpoints in our coverage, ensuring that our reporting reflects the complexity of the world.</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                <!-- Value 4 -->
                <div class="value-card glass dark:glass-dark rounded-xl p-8 text-center shadow-lg animate-fade-in" style="animation-delay: 0.7s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Innovation</h3>
                    <p class="text-gray-600 dark:text-gray-400">We embrace new technologies and storytelling formats to deliver news in ways that are engaging, accessible, and relevant to today's audiences, while maintaining journalistic excellence.</p>
                </div>
                
                <!-- Value 5 -->
                <div class="value-card glass dark:glass-dark rounded-xl p-8 text-center shadow-lg animate-fade-in" style="animation-delay: 0.8s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-globe text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Global Perspective</h3>
                    <p class="text-gray-600 dark:text-gray-400">We approach news with a global mindset, recognizing the interconnectedness of our world and providing context that helps readers understand how events in one part of the world affect others.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in" style="animation-delay: 0.9s;">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white font-serif mb-4">Meet Our Team</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto"></div>
                <p class="mt-4 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">The talented individuals who bring PULSE to life every day.</p>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Member 1 -->
                <div class="team-card glass dark:glass-dark rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 1s;">
                    <div class="relative">
                        <img src="https://placehold.co/400x500" alt="Team Member" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h3 class="text-xl font-bold text-white">Sarah Johnson</h3>
                            <p class="text-primary font-medium">Editor-in-Chief</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">With over 20 years of experience in journalism, Sarah leads our editorial team with vision and integrity.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-card glass dark:glass-dark rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 1.1s;">
                    <div class="relative">
                        <img src="https://placehold.co/400x500" alt="Team Member" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h3 class="text-xl font-bold text-white">Michael Chen</h3>
                            <p class="text-primary font-medium">Senior Political Reporter</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Michael specializes in political reporting and has covered major elections and policy developments worldwide.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-card glass dark:glass-dark rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 1.2s;">
                    <div class="relative">
                        <img src="https://placehold.co/400x500" alt="Team Member" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h3 class="text-xl font-bold text-white">Olivia Rodriguez</h3>
                            <p class="text-primary font-medium">Technology Editor</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Olivia brings deep expertise in technology and innovation, covering the latest developments in the tech industry.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Team Member 4 -->
                <div class="team-card glass dark:glass-dark rounded-xl overflow-hidden shadow-xl animate-fade-in" style="animation-delay: 1.3s;">
                    <div class="relative">
                        <img src="https://placehold.co/400x500" alt="Team Member" class="w-full h-80 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-60"></div>
                        <div class="absolute bottom-0 left-0 w-full p-6">
                            <h3 class="text-xl font-bold text-white">James Wilson</h3>
                            <p class="text-primary font-medium">Environmental Correspondent</p>
                        </div>
                    </div>
                    <div class="p-6">
                        <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">James focuses on environmental issues and climate change, bringing attention to one of the most pressing challenges of our time.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-primary transition-colors duration-300">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="#" class="inline-block px-8 py-3 bg-primary hover:bg-opacity-90 text-white rounded-full transition-all duration-300 shadow-lg hover:shadow-xl">
                    View All Team Members
                </a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary opacity-90"></div>
            <img src="https://placehold.co/1920x600" alt="Stats Background" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="glass rounded-xl p-8 animate-fade-in" style="animation-delay: 1.4s;">
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">5M+</div>
                    <p class="text-white text-opacity-90 text-lg">Monthly Readers</p>
                </div>
                <div class="glass rounded-xl p-8 animate-fade-in" style="animation-delay: 1.5s;">
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">100+</div>
                    <p class="text-white text-opacity-90 text-lg">Countries Reached</p>
                </div>
                <div class="glass rounded-xl p-8 animate-fade-in" style="animation-delay: 1.6s;">
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">50+</div>
                    <p class="text-white text-opacity-90 text-lg">Journalists</p>
                </div>
                <div class="glass rounded-xl p-8 animate-fade-in" style="animation-delay: 1.7s;">
                    <div class="text-4xl md:text-5xl font-bold text-white mb-2">15</div>
                    <p class="text-white text-opacity-90 text-lg">Industry Awards</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in" style="animation-delay: 1.8s;">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white font-serif mb-4">Our Journey</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto"></div>
                <p class="mt-4 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">The key milestones that have shaped PULSE into what it is today.</p>
            </div>
            
            <div class="relative">
                <!-- Timeline Line -->
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-gradient-to-b from-primary to-secondary"></div>
                
                <!-- Timeline Items -->
                <div class="space-y-16 relative">
                    <!-- 2020 -->
                    <div class="flex flex-col md:flex-row items-center animate-fade-in" style="animation-delay: 1.9s;">
                        <div class="md:w-1/2 md:pr-12 md:text-right mb-8 md:mb-0">
                            <div class="glass dark:glass-dark p-6 rounded-xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">2020</h3>
                                <h4 class="text-xl font-semibold text-primary mb-3">PULSE is Founded</h4>
                                <p class="text-gray-600 dark:text-gray-400">PULSE was established with a mission to deliver accurate, unbiased news in the digital age.</p>
                            </div>
                        </div>
                        <div class="z-10 w-12 h-12 rounded-full bg-gradient-to-r from-primary to-secondary flex items-center justify-center">
                            <div class="w-8 h-8 rounded-full bg-white dark:bg-gray-900"></div>
                        </div>
                        <div class="md:w-1/2 md:pl-12"></div>
                    </div>
                    
                    <!-- 2021 -->
                    <div class="flex flex-col md:flex-row items-center animate-fade-in" style="animation-delay: 2s;">
                        <div class="md:w-1/2 md:pr-12"></div>
                        <div class="z-10 w-12 h-12 rounded-full bg-gradient-to-r from-primary to-secondary flex items-center justify-center">
                            <div class="w-8 h-8 rounded-full bg-white dark:bg-gray-900"></div>
                        </div>
                        <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0">
                            <div class="glass dark:glass-dark p-6 rounded-xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">2021</h3>
                                <h4 class="text-xl font-semibold text-primary mb-3">Global Expansion</h4>
                                <p class="text-gray-600 dark:text-gray-400">PULSE expanded its coverage to over 50 countries, establishing a truly global presence.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2022 -->
                    <div class="flex flex-col md:flex-row items-center animate-fade-in" style="animation-delay: 2.1s;">
                        <div class="md:w-1/2 md:pr-12 md:text-right mb-8 md:mb-0">
                            <div class="glass dark:glass-dark p-6 rounded-xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">2022</h3>
                                <h4 class="text-xl font-semibold text-primary mb-3">Award-Winning Coverage</h4>
                                <p class="text-gray-600 dark:text-gray-400">Our team received multiple industry awards for groundbreaking investigative journalism.</p>
                            </div>
                        </div>
                        <div class="z-10 w-12 h-12 rounded-full bg-gradient-to-r from-primary to-secondary flex items-center justify-center">
                            <div class="w-8 h-8 rounded-full bg-white dark:bg-gray-900"></div>
                        </div>
                        <div class="md:w-1/2 md:pl-12"></div>
                    </div>
                    
                    <!-- 2023 -->
                    <div class="flex flex-col md:flex-row items-center animate-fade-in" style="animation-delay: 2.2s;">
                        <div class="md:w-1/2 md:pr-12"></div>
                        <div class="z-10 w-12 h-12 rounded-full bg-gradient-to-r from-primary to-secondary flex items-center justify-center">
                            <div class="w-8 h-8 rounded-full bg-white dark:bg-gray-900"></div>
                        </div>
                        <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0">
                            <div class="glass dark:glass-dark p-6 rounded-xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">2023</h3>
                                <h4 class="text-xl font-semibold text-primary mb-3">Digital Innovation</h4>
                                <p class="text-gray-600 dark:text-gray-400">Launched our revolutionary news platform with personalized content delivery and interactive features.</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- 2024 -->
                    <div class="flex flex-col md:flex-row items-center animate-fade-in" style="animation-delay: 2.3s;">
                        <div class="md:w-1/2 md:pr-12 md:text-right mb-8 md:mb-0">
                            <div class="glass dark:glass-dark p-6 rounded-xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">2024</h3>
                                <h4 class="text-xl font-semibold text-primary mb-3">5 Million Readers</h4>
                                <p class="text-gray-600 dark:text-gray-400">PULSE reached a milestone of 5 million monthly readers across our digital platforms.</p>
                            </div>
                        </div>
                        <div class="z-10 w-12 h-12 rounded-full bg-gradient-to-r from-primary to-secondary flex items-center justify-center">
                            <div class="w-8 h-8 rounded-full bg-white dark:bg-gray-900"></div>
                        </div>
                        <div class="md:w-1/2 md:pl-12"></div>
                    </div>
                    
                    <!-- 2025 -->
                    <div class="flex flex-col md:flex-row items-center animate-fade-in" style="animation-delay: 2.4s;">
                        <div class="md:w-1/2 md:pr-12"></div>
                        <div class="z-10 w-12 h-12 rounded-full bg-gradient-to-r from-primary to-secondary flex items-center justify-center">
                            <div class="w-8 h-8 rounded-full bg-white dark:bg-gray-900"></div>
                        </div>
                        <div class="md:w-1/2 md:pl-12 mb-8 md:mb-0">
                            <div class="glass dark:glass-dark p-6 rounded-xl shadow-lg inline-block">
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">2025</h3>
                                <h4 class="text-xl font-semibold text-primary mb-3">The Future</h4>
                                <p class="text-gray-600 dark:text-gray-400">Continuing to innovate and expand our reach, with exciting new features and partnerships on the horizon.</p>
                            </div>
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