<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - PULSE</title>
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
            <img src="https://placehold.co/1920x600" alt="Contact Header" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-4 font-serif">Contact Us</h1>
            <p class="text-xl text-white text-opacity-90 max-w-3xl mx-auto">Get in touch with our team for inquiries, feedback, or collaboration opportunities.</p>
        </div>
    </section>

    <!-- Contact Information Cards -->
    <section class="py-16 -mt-16 relative z-10">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Contact Card 1 -->
                <div class="contact-card glass dark:glass-dark rounded-xl p-8 text-center shadow-xl animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-map-marker-alt text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Our Location</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">123 News Street</p>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">New York, NY 10001</p>
                    <p class="text-gray-600 dark:text-gray-400">United States</p>
                </div>
                
                <!-- Contact Card 2 -->
                <div class="contact-card glass dark:glass-dark rounded-xl p-8 text-center shadow-xl animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-envelope text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Email Us</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">info@pulsemedia.com</p>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">careers@pulsemedia.com</p>
                    <p class="text-gray-600 dark:text-gray-400">press@pulsemedia.com</p>
                </div>
                
                <!-- Contact Card 3 -->
                <div class="contact-card glass dark:glass-dark rounded-xl p-8 text-center shadow-xl animate-fade-in" style="animation-delay: 0.3s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-primary to-secondary rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-phone text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-800 dark:text-white">Call Us</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">+1 (555) 123-4567</p>
                    <p class="text-gray-600 dark:text-gray-400 mb-2">+1 (555) 987-6543</p>
                    <p class="text-gray-600 dark:text-gray-400">Monday-Friday: 9am-5pm EST</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form and Map Section -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Contact Form -->
                <div class="glass dark:glass-dark rounded-xl p-8 shadow-xl animate-fade-in" style="animation-delay: 0.4s;">
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white font-serif mb-6">Send Us a Message</h2>
                    <form>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Your Name</label>
                                <input type="text" id="name" class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-800 bg-opacity-50 dark:bg-opacity-50 border border-gray-300 dark:border-gray-700 text-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label for="email" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Your Email</label>
                                <input type="email" id="email" class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-800 bg-opacity-50 dark:bg-opacity-50 border border-gray-300 dark:border-gray-700 text-gray-800 dark:text-white">
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Subject</label>
                            <input type="text" id="subject" class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-800 bg-opacity-50 dark:bg-opacity-50 border border-gray-300 dark:border-gray-700 text-gray-800 dark:text-white">
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Your Message</label>
                            <textarea id="message" rows="5" class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-800 bg-opacity-50 dark:bg-opacity-50 border border-gray-300 dark:border-gray-700 text-gray-800 dark:text-white"></textarea>
                        </div>
                        <div class="flex items-center mb-6">
                            <input type="checkbox" id="newsletter" class="mr-2">
                            <label for="newsletter" class="text-gray-700 dark:text-gray-300">Subscribe to our newsletter</label>
                        </div>
                        <button type="submit" class="bg-gradient-to-r from-primary to-secondary hover:opacity-90 text-white font-medium py-3 px-6 rounded-lg transition duration-300 shadow-lg hover:shadow-xl">
                            Send Message
                        </button>
                    </form>
                </div>
                
                <!-- Map and Office Hours -->
                <div class="animate-fade-in" style="animation-delay: 0.5s;">
                    <div class="glass dark:glass-dark rounded-xl overflow-hidden shadow-xl mb-8">
                        <div class="h-80 bg-gray-200 dark:bg-gray-700">
                            <!-- Replace with actual map embed code -->
                            <div class="w-full h-full flex items-center justify-center bg-gray-200 dark:bg-gray-700 text-gray-500 dark:text-gray-400">
                                <p>Map Embed Goes Here</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="glass dark:glass-dark rounded-xl p-6 shadow-xl">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-4">Office Hours</h3>
                        <ul class="space-y-3">
                            <li class="flex justify-between items-center border-b border-gray-200 dark:border-gray-700 pb-2">
                                <span class="text-gray-700 dark:text-gray-300">Monday - Friday</span>
                                <span class="text-gray-800 dark:text-white font-medium">9:00 AM - 5:00 PM</span>
                            </li>
                            <li class="flex justify-between items-center border-b border-gray-200 dark:border-gray-700 pb-2">
                                <span class="text-gray-700 dark:text-gray-300">Saturday</span>
                                <span class="text-gray-800 dark:text-white font-medium">10:00 AM - 2:00 PM</span>
                            </li>
                            <li class="flex justify-between items-center">
                                <span class="text-gray-700 dark:text-gray-300">Sunday</span>
                                <span class="text-gray-800 dark:text-white font-medium">Closed</span>
                            </li>
                        </ul>
                        
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mt-6 mb-4">Connect With Us</h3>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-primary hover:text-white transition-colors duration-300 text-gray-700 dark:text-gray-300">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-primary hover:text-white transition-colors duration-300 text-gray-700 dark:text-gray-300">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-primary hover:text-white transition-colors duration-300 text-gray-700 dark:text-gray-300">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-primary hover:text-white transition-colors duration-300 text-gray-700 dark:text-gray-300">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-gray-200 dark:bg-gray-700 flex items-center justify-center hover:bg-primary hover:text-white transition-colors duration-300 text-gray-700 dark:text-gray-300">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-16 bg-gradient-to-br from-gray-100 to-white dark:from-gray-900 dark:to-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12 animate-fade-in" style="animation-delay: 0.6s;">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white font-serif mb-4">Frequently Asked Questions</h2>
                <div class="w-20 h-1 bg-gradient-to-r from-primary to-secondary mx-auto"></div>
                <p class="mt-4 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">Find answers to common questions about PULSE and our services.</p>
            </div>
            
            <div class="max-w-3xl mx-auto">
                <div class="space-y-6">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item glass dark:glass-dark rounded-xl p-6 shadow-lg animate-fade-in" style="animation-delay: 0.7s;">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">How can I submit a news tip?</h3>
                        <p class="text-gray-600 dark:text-gray-400">You can submit news tips by emailing tips@pulsemedia.com or by using the contact form on this page. Please include as much detail as possible, and our editorial team will review your submission.</p>
                    </div>
                    
                    <!-- FAQ Item 2 -->
                    <div class="faq-item glass dark:glass-dark rounded-xl p-6 shadow-lg animate-fade-in" style="animation-delay: 0.8s;">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">How can I report an error in an article?</h3>
                        <p class="text-gray-600 dark:text-gray-400">We strive for accuracy in all our reporting. If you spot an error, please email corrections@pulsemedia.com with the article title, the error, and the correction. We appreciate your help in maintaining our journalistic standards.</p>
                    </div>
                    
                    <!-- FAQ Item 3 -->
                    <div class="faq-item glass dark:glass-dark rounded-xl p-6 shadow-lg animate-fade-in" style="animation-delay: 0.9s;">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Do you offer internships or job opportunities?</h3>
                        <p class="text-gray-600 dark:text-gray-400">Yes, we regularly offer internships and job opportunities for journalists, editors, and other media professionals. Please visit our careers page or email careers@pulsemedia.com for current openings.</p>
                    </div>
                    
                    <!-- FAQ Item 4 -->
                    <div class="faq-item glass dark:glass-dark rounded-xl p-6 shadow-lg animate-fade-in" style="animation-delay: 1s;">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">How can I subscribe to your newsletter?</h3>
                        <p class="text-gray-600 dark:text-gray-400">You can subscribe to our newsletter by entering your email address in the subscription form on our homepage or by checking the newsletter subscription box when submitting the contact form on this page.</p>
                    </div>
                    
                    <!-- FAQ Item 5 -->
                    <div class="faq-item glass dark:glass-dark rounded-xl p-6 shadow-lg animate-fade-in" style="animation-delay: 1.1s;">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-white mb-3">Can I republish or use content from PULSE?</h3>
                        <p class="text-gray-600 dark:text-gray-400">All content published by PULSE is protected by copyright. For permission to republish or use our content, please contact permissions@pulsemedia.com with details about the content you wish to use and your intended purpose.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section -->
    <section class="py-16 relative overflow-hidden">
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary opacity-90 dark:opacity-80"></div>
            <img src="https://placehold.co/1920x1080" alt="Background" class="w-full h-full object-cover">
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-3xl mx-auto text-center text-white">
                <h2 class="text-3xl md:text-4xl font-bold mb-4 font-serif">We'd Love to Hear From You</h2>
                <p class="text-lg mb-8 text-white text-opacity-90">Have questions, feedback, or ideas? Our team is here to help. Reach out to us today and let's start a conversation.</p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+15551234567" class="bg-white text-primary hover:bg-opacity-90 px-6 py-3 rounded-full font-medium transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                        <i class="fas fa-phone mr-2"></i> Call Us
                    </a>
                    <a href="mailto:info@pulsemedia.com" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-primary px-6 py-3 rounded-full font-medium transition duration-300 shadow-lg hover:shadow-xl flex items-center justify-center">
                        <i class="fas fa-envelope mr-2"></i> Email Us
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-16">
        <div class="container mx-auto px-4">
            <div class="glass dark:glass-dark rounded-xl p-8 shadow-xl">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-800 dark:text-white font-serif mb-4">Subscribe to Our Newsletter</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-6">Stay updated with the latest news, exclusive stories, and special offers delivered directly to your inbox.</p>
                        <ul class="space-y-3">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                                <span class="text-gray-700 dark:text-gray-300">Breaking news alerts</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                                <span class="text-gray-700 dark:text-gray-300">Weekly news digests</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                                <span class="text-gray-700 dark:text-gray-300">Exclusive content and interviews</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                                <span class="text-gray-700 dark:text-gray-300">Special event invitations</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <form class="space-y-4">
                            <div>
                                <label for="newsletter-name" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Your Name</label>
                                <input type="text" id="newsletter-name" class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-800 bg-opacity-50 dark:bg-opacity-50 border border-gray-300 dark:border-gray-700 text-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label for="newsletter-email" class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Your Email</label>
                                <input type="email" id="newsletter-email" class="w-full px-4 py-3 rounded-lg bg-white dark:bg-gray-800 bg-opacity-50 dark:bg-opacity-50 border border-gray-300 dark:border-gray-700 text-gray-800 dark:text-white">
                            </div>
                            <div>
                                <label class="block text-gray-700 dark:text-gray-300 font-medium mb-2">Interests (Optional)</label>
                                <div class="grid grid-cols-2 gap-2">
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2">
                                        <span class="text-gray-700 dark:text-gray-300">Technology</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2">
                                        <span class="text-gray-700 dark:text-gray-300">Business</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2">
                                        <span class="text-gray-700 dark:text-gray-300">Politics</span>
                                    </label>
                                    <label class="flex items-center">
                                        <input type="checkbox" class="mr-2">
                                        <span class="text-gray-700 dark:text-gray-300">Health</span>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="w-full bg-gradient-to-r from-primary to-secondary hover:opacity-90 text-white font-medium py-3 px-6 rounded-lg transition duration-300 shadow-lg hover:shadow-xl">
                                Subscribe Now
                            </button>
                            <p class="text-xs text-gray-500 dark:text-gray-400 text-center">We respect your privacy. Unsubscribe at any time.</p>
                        </form>
                    </div>
                </div>
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