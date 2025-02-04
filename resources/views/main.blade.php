<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esports Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#0F2A55] text-[#FCFEFD]">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-[#0F2A55]/90 backdrop-blur-sm border-b border-[#69B3E3]/20">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="text-3xl font-bold">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16">
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium">HOME</a>
                    <a href="#" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium">TEAMS</a>
                    <a href="#" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium">ABOUT</a>
                    <a href="#" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium">ACADEMY</a>
                    <a href="#" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium">ENTERTAINMENT</a>
                    <a href="#" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium">MEMBERS</a>
                </div>
                <!-- Mobile menu button -->
                <button class="md:hidden text-[#FCFEFD]">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-16 6h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main>
        <div class="relative h-screen">
            <!-- Video background (moved inside hero section) -->
            <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
                <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-30">
                    <source src="videos/dashvideo.mp4" type="video/mp4">
                </video>
            </div>
            
            <div class="relative h-full flex items-center justify-center">
                <div class="text-center space-y-8 z-10 px-4">
                    <h1 class="text-6xl md:text-8xl font-bold tracking-wider animate-fade-in text-[#FEE66C] drop-shadow-lg">
                        VIOR Tower
                    </h1>
                    <p class="text-xl md:text-2xl tracking-wide animate-fade-in-delay text-[#69B3E3] drop-shadow-md">
                        Elevate Talents, Empower Skills
                    </p>
                    <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-6">
                        <a href="#" class="bg-[#FFAB3D] hover:bg-[#FEE66C] text-[#0F2A55] px-8 py-3 rounded-none transition-colors font-bold shadow-lg hover:shadow-xl">
                            SHOP NOW
                        </a>
                        <a href="#" class="border-2 border-[#69B3E3] hover:bg-[#69B3E3] hover:text-[#0F2A55] text-[#69B3E3] px-8 py-3 rounded-none transition-colors shadow-lg hover:shadow-xl">
                            VIEW TEAMS
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest News Section (with its own background) -->
        <div class="bg-[#0F2A55]">
            <div class="container mx-auto px-4 py-20">
                <h2 class="text-4xl font-bold mb-12 text-[#FEE66C]">LATEST NEWS</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- News Card -->
                    <div class="group relative overflow-hidden bg-[#162F5A] shadow-lg">
                        <div class="aspect-w-16 aspect-h-9">
                            <img src="/images/news1.jpg" alt="News" class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#0F2A55] p-6">
                            <span class="text-[#FFAB3D]">NEWS</span>
                            <h3 class="text-xl font-bold mt-2 text-[#FCFEFD]">Latest Tournament Victory</h3>
                            <p class="text-[#CBCBCB] mt-2">Read More →</p>
                        </div>
                    </div>
                    <!-- Add more news cards here -->
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-[#0F2A55] text-[#FCFEFD] py-12 border-t border-[#69B3E3]/20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4 text-[#FEE66C]">ABOUT</h3>
                    <p class="text-[#CBCBCB]">Your premier esports organization.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-[#FEE66C]">QUICK LINKS</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Teams</a></li>
                        <li><a href="#" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Players</a></li>
                        <li><a href="#" class="text-[#CBCBCB] hover:text-[#FFAB3D]">News</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4 text-[#FEE66C]">FOLLOW US</h3>
                    <div class="flex space-x-4">
                        <!-- Add social media icons here -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html> 