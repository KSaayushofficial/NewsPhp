<?php 
if(isset($_GET['newsBtn'])){
  header("Location: ../index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewsHub Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lucide-icons@0.309.0/dist/umd/lucide.min.js">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        secondary: '#0ea5e9',
                        accent: '#8b5cf6',
                        dark: '#1e293b',
                        light: '#f8fafc'
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>

</head>
<body class="bg-gray-50 text-gray-800 min-h-screen">
    <div class="flex flex-col md:flex-row min-h-screen">

        <!-- Main Content -->
        <main class="flex-1">
            <!-- Header -->
            <header class="bg-white shadow-sm p-4 flex justify-between items-center">
                <div class="flex items-center">
                    <button id="sidebar-toggle" class="mr-4 text-gray-600 md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <h2 class="text-xl font-semibold">Dashboard</h2>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="relative">
<button onclick="window.location.href='?newsBtn=true'" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
    News
</button>

                    </div>
                    <button class="relative p-2 text-gray-600 hover:text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                        <span class="absolute top-1 right-1 bg-red-500 text-white rounded-full w-4 h-4 text-xs flex items-center justify-center">3</span>
                    </button>
                    <div class="relative">
                        <button class="flex items-center space-x-2">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Profile" class="w-8 h-8 rounded-full">
                            <span class="hidden md:block">John Editor</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </header>

            <!-- Dashboard Content -->
            <div class="p-6">
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <div class="glass rounded-xl p-6 flex items-center">
                        <div class="bg-blue-100 p-3 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Total Articles</p>
                            <h3 class="text-2xl font-bold">2,845</h3>
                            <p class="text-green-500 text-sm">+12.5% from last month</p>
                        </div>
                    </div>
                    <div class="glass rounded-xl p-6 flex items-center">
                        <div class="bg-purple-100 p-3 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Page Views</p>
                            <h3 class="text-2xl font-bold">1.2M</h3>
                            <p class="text-green-500 text-sm">+18.2% from last month</p>
                        </div>
                    </div>
                    <div class="glass rounded-xl p-6 flex items-center">
                        <div class="bg-green-100 p-3 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Subscribers</p>
                            <h3 class="text-2xl font-bold">45,257</h3>
                            <p class="text-green-500 text-sm">+3.7% from last month</p>
                        </div>
                    </div>
                    <div class="glass rounded-xl p-6 flex items-center">
                        <div class="bg-red-100 p-3 rounded-lg mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Revenue</p>
                            <h3 class="text-2xl font-bold">$24,582</h3>
                            <p class="text-red-500 text-sm">-2.3% from last month</p>
                        </div>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6">
                    <div class="glass rounded-xl p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold">Traffic Overview</h3>
                            <div class="flex space-x-2">
                                <button class="px-3 py-1 text-sm bg-primary text-white rounded-lg">Weekly</button>
                                <button class="px-3 py-1 text-sm text-gray-600 hover:bg-gray-100 rounded-lg">Monthly</button>
                                <button class="px-3 py-1 text-sm text-gray-600 hover:bg-gray-100 rounded-lg">Yearly</button>
                            </div>
                        </div>
                        <div class="chart-bar">
                            <div class="chart-bar-item" style="height: 60%;" title="Mon: 45k"></div>
                            <div class="chart-bar-item" style="height: 80%;" title="Tue: 65k"></div>
                            <div class="chart-bar-item" style="height: 70%;" title="Wed: 55k"></div>
                            <div class="chart-bar-item" style="height: 90%;" title="Thu: 72k"></div>
                            <div class="chart-bar-item" style="height: 100%;" title="Fri: 80k"></div>
                            <div class="chart-bar-item" style="height: 75%;" title="Sat: 60k"></div>
                            <div class="chart-bar-item" style="height: 50%;" title="Sun: 40k"></div>
                        </div>
                        <div class="flex justify-between mt-2 text-xs text-gray-500">
                            <span>Mon</span>
                            <span>Tue</span>
                            <span>Wed</span>
                            <span>Thu</span>
                            <span>Fri</span>
                            <span>Sat</span>
                            <span>Sun</span>
                        </div>
                    </div>
                    <div class="glass rounded-xl p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold">Top Categories</h3>
                            <button class="text-primary hover:underline text-sm">View All</button>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <div class="w-full">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-medium">Technology</span>
                                        <span class="text-sm text-gray-500">65%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-primary rounded-full h-2" style="width: 65%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-full">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-medium">Politics</span>
                                        <span class="text-sm text-gray-500">48%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-secondary rounded-full h-2" style="width: 48%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-full">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-medium">Business</span>
                                        <span class="text-sm text-gray-500">42%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-accent rounded-full h-2" style="width: 42%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-full">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-medium">Entertainment</span>
                                        <span class="text-sm text-gray-500">35%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-green-500 rounded-full h-2" style="width: 35%"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <div class="w-full">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-medium">Sports</span>
                                        <span class="text-sm text-gray-500">28%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-2">
                                        <div class="bg-yellow-500 rounded-full h-2" style="width: 28%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Articles & Top Authors -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="glass rounded-xl p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold">Recent Articles</h3>
                            <button class="text-primary hover:underline text-sm">View All</button>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-start space-x-4 p-3 hover:bg-gray-50 rounded-lg transition">
                                <img src="https://source.unsplash.com/random/100x100?tech" alt="Article" class="w-16 h-16 object-cover rounded-lg">
                                <div>
                                    <h4 class="font-medium">The Future of AI in Journalism: Opportunities and Challenges</h4>
                                    <p class="text-sm text-gray-500 mt-1">By Sarah Johnson • 2 hours ago</p>
                                    <div class="flex items-center mt-2">
                                        <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">Technology</span>
                                        <span class="text-gray-500 text-xs ml-3">4 min read</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4 p-3 hover:bg-gray-50 rounded-lg transition">
                                <img src="https://source.unsplash.com/random/100x100?politics" alt="Article" class="w-16 h-16 object-cover rounded-lg">
                                <div>
                                    <h4 class="font-medium">Global Summit Addresses Climate Change Policy</h4>
                                    <p class="text-sm text-gray-500 mt-1">By Michael Chen • 5 hours ago</p>
                                    <div class="flex items-center mt-2">
                                        <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">Politics</span>
                                        <span class="text-gray-500 text-xs ml-3">6 min read</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4 p-3 hover:bg-gray-50 rounded-lg transition">
                                <img src="https://source.unsplash.com/random/100x100?business" alt="Article" class="w-16 h-16 object-cover rounded-lg">
                                <div>
                                    <h4 class="font-medium">Market Analysis: Tech Stocks Surge Amid Economic Recovery</h4>
                                    <p class="text-sm text-gray-500 mt-1">By Jessica Williams • 8 hours ago</p>
                                    <div class="flex items-center mt-2">
                                        <span class="bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded">Business</span>
                                        <span class="text-gray-500 text-xs ml-3">5 min read</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4 p-3 hover:bg-gray-50 rounded-lg transition">
                                <img src="https://source.unsplash.com/random/100x100?sports" alt="Article" class="w-16 h-16 object-cover rounded-lg">
                                <div>
                                    <h4 class="font-medium">Championship Finals: Underdogs Stun Favorites in Overtime</h4>
                                    <p class="text-sm text-gray-500 mt-1">By David Thompson • 12 hours ago</p>
                                    <div class="flex items-center mt-2">
                                        <span class="bg-yellow-100 text-yellow-800 text-xs px-2 py-1 rounded">Sports</span>
                                        <span class="text-gray-500 text-xs ml-3">3 min read</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="glass rounded-xl p-6">
                        <div class="flex justify-between items-center mb-6">
                            <h3 class="text-lg font-semibold">Top Authors</h3>
                            <button class="text-primary hover:underline text-sm">View All</button>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg transition">
                                <div class="flex items-center space-x-3">
                                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Author" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="font-medium">Sarah Johnson</h4>
                                        <p class="text-sm text-gray-500">Technology Editor</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium">245</p>
                                    <p class="text-sm text-gray-500">Articles</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg transition">
                                <div class="flex items-center space-x-3">
                                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Author" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="font-medium">Michael Chen</h4>
                                        <p class="text-sm text-gray-500">Politics Reporter</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium">189</p>
                                    <p class="text-sm text-gray-500">Articles</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg transition">
                                <div class="flex items-center space-x-3">
                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Author" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="font-medium">Jessica Williams</h4>
                                        <p class="text-sm text-gray-500">Business Analyst</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium">156</p>
                                    <p class="text-sm text-gray-500">Articles</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between p-3 hover:bg-gray-50 rounded-lg transition">
                                <div class="flex items-center space-x-3">
                                    <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Author" class="w-10 h-10 rounded-full">
                                    <div>
                                        <h4 class="font-medium">David Thompson</h4>
                                        <p class="text-sm text-gray-500">Sports Writer</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium">132</p>
                                    <p class="text-sm text-gray-500">Articles</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Mobile sidebar toggle
        document.getElementById('mobile-toggle').addEventListener('click', function() {
            const sidebarContent = document.getElementById('sidebar-content');
            sidebarContent.classList.toggle('hidden');
        });

        // Desktop sidebar toggle
        document.getElementById('sidebar-toggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('md:w-64');
            sidebar.classList.toggle('md:w-20');
        });

        // Theme toggle
        document.getElementById('theme-toggle').addEventListener('click', function() {
            document.documentElement.classList.toggle('dark');
            const themeToggleText = this.querySelector('span');
            if (document.documentElement.classList.contains('dark')) {
                themeToggleText.textContent = 'Light Mode';
                this.querySelector('svg').innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />';
            } else {
                themeToggleText.textContent = 'Dark Mode';
                this.querySelector('svg').innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />';
            }
        });

        // Chart tooltips
        const chartBars = document.querySelectorAll('.chart-bar-item');
        chartBars.forEach(bar => {
            bar.addEventListener('mouseover', function() {
                const tooltip = document.createElement('div');
                tooltip.className = 'absolute -top-10 left-1/2 transform -translate-x-1/2 bg-dark text-white px-2 py-1 rounded text-xs';
                tooltip.textContent = this.getAttribute('title');
                this.appendChild(tooltip);
            });
            
            bar.addEventListener('mouseout', function() {
                const tooltip = this.querySelector('div');
                if (tooltip) {
                    tooltip.remove();
                }
            });
        });
    </script>
</body>
</html>