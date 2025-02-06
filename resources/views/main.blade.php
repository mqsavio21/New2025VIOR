<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
    <title>VIOR Tower</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Add Orbitron font import -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <!-- Add Rajdhani font import -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-[#0F2A55] text-[#FCFEFD] loading">
    <!-- Loading Screen Container -->
    <div id="loading-screen-root"></div>

    <!-- Main Content -->
    <div id="page-content" class="transition-transform duration-300 ease-in-out">
        <!-- Navigation -->
        <nav class="fixed w-full z-50 bg-[#0F2A55]/90 backdrop-blur-sm border-b border-[#FEE66C]/40">
            <div class="container mx-auto px-4 py-4">
                <div class="flex justify-between items-center">
                    <div class="text-3xl font-bold">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 md:h-20">
                    </div>
                    <div class="hidden md:flex space-x-8">
                        <a href="#" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">HOME</a>
                        <a href="/teams" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">TEAMS</a>
                        <a href="#" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">ABOUT</a>
                        <a href="#" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">ACADEMY</a>
                        <a href="https://www.oristarium.com/" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">ENTERTAINMENT</a>
                        <a href="#" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">STAFF</a>
                    </div>
                    <!-- Mobile menu button -->
                    <button id="mobile-menu-button" class="md:hidden text-[#FCFEFD] hover:text-[#FFAB3D] focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>

        <!-- Mobile Menu (Side Drawer) -->
        <div id="mobile-menu" class="fixed top-0 left-0 w-80 h-full bg-[#0F2A55] transform -translate-x-full transition-transform duration-300 ease-in-out z-50 border-r border-[#69B3E3]/20">
            <div class="h-full flex flex-col p-6">
                <!-- Close button -->
                <div class="flex justify-end mb-8">
                    <button id="mobile-menu-close" class="text-[#FCFEFD] hover:text-[#FFAB3D]">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Navigation Links -->
                <nav class="space-y-6">
                    <a href="#" class="block text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">HOME</a>
                    <a href="/teams" class="block text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">TEAMS</a>
                    <a href="#" class="block text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">ABOUT</a>
                    <a href="#" class="block text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">ACADEMY</a>
                    <a href="https://www.oristarium.com/" class="block text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">ENTERTAINMENT</a>
                    <a href="#" class="block text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">STAFF</a>
                    
                    <!-- Social Media Links -->
                    <div class="flex space-x-4 pt-4 border-t border-[#69B3E3]/20">
                        <!-- Twitter/X -->
                        <a href="https://x.com/ViOrTower" target="_blank" rel="noopener noreferrer" class="text-[#FCFEFD] hover:text-[#FFAB3D]">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                            </svg>
                        </a>
                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@vernalisorion" target="_blank" rel="noopener noreferrer" class="text-[#FCFEFD] hover:text-[#FFAB3D]">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                            </svg>
                        </a>
                        <!-- Discord -->
                        <a href="https://discord.gg/QFmu86a8Ak" target="_blank" rel="noopener noreferrer" class="text-[#FCFEFD] hover:text-[#FFAB3D]">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0a12.64 12.64 0 0 0-.617-1.25a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.078.078 0 0 0 .084-.028a14.09 14.09 0 0 0 1.226-1.994a.076.076 0 0 0-.041-.106a13.107 13.107 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10.2 10.2 0 0 0 .372-.292a.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127a12.299 12.299 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028a19.839 19.839 0 0 0 6.002-3.03a.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03z"/>
                            </svg>
                        </a>
                        <!-- YouTube -->
                        <a href="https://www.youtube.com/@VernalisOrion" target="_blank" rel="noopener noreferrer" class="text-[#FCFEFD] hover:text-[#FFAB3D]">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Hero Section -->
        <main>
            <div class="relative h-screen">
                <!-- Video background (moved inside hero section) -->
                <div class="absolute top-0 left-0 w-full h-full overflow-hidden">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-30">
                        <source src="videos/dashvideo.mp4" type="video/mp4">
                    </video>
                    <!-- Add gradient overlay -->
                    <div class="absolute inset-0 bg-gradient-to-b from-[#0F2A55]/80 via-transparent to-[#0F2A55] pointer-events-none"></div>
                </div>
                
                <div class="relative h-full flex items-center justify-center">
                    <div class="text-center space-y-4 md:space-y-8 z-10 px-4 pt-20">
                        <!-- Only Orbitron -->
                        <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold tracking-wider animate-fade-in text-[#FEE66C] drop-shadow-lg font-['Orbitron']">
                            VIOR TOWER
                        </h1>
                        <p class="text-lg md:text-xl lg:text-2xl tracking-wide animate-fade-in-delay text-[#69B3E3] drop-shadow-md">
                            Elevate Talents, Empower Skills
                        </p>
                        <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                            <a href="https://forms.gle/QAsCu6zv88PkWbnj6" class="bg-[#FFAB3D] hover:bg-[#FEE66C] text-[#0F2A55] px-8 py-3 rounded-none transition-colors font-bold shadow-lg hover:shadow-xl border-2 border-[#FFAB3D]">
                                JOIN US
                            </a>
                            <a href="#" class="border-2 border-[#69B3E3] hover:bg-[#69B3E3] hover:text-[#0F2A55] text-[#69B3E3] px-8 py-3 rounded-none transition-colors shadow-lg hover:shadow-xl">
                                VIEW TEAMS
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest News Section -->
            <div class="relative overflow-hidden">
                <div class="container mx-auto px-4 py-20 relative z-10">
                    <h2 class="text-4xl font-bold mb-12 text-[#FEE66C]">LATEST NEWS</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- News Card 1 -->
                        <div class="group relative overflow-hidden bg-[#162F5A] shadow-lg h-[400px]">
                            <div class="h-full">
                                <img src="/images/news1.png" alt="News" class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#0F2A55] via-[#0F2A55]/80 to-transparent p-6">
                                <h3 class="text-xl font-bold mt-2 text-[#FCFEFD]">1st Female Player in VIOR Vernalis</h3>
                                <p class="text-[#CBCBCB] mt-2">January 2025</p>
                            </div>
                        </div>

                        <!-- News Card 2 -->
                        <div class="group relative overflow-hidden bg-[#162F5A] shadow-lg h-[400px]">
                            <div class="h-full">
                                <img src="/images/news2.png" alt="News" class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-300">
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#0F2A55] via-[#0F2A55]/80 to-transparent p-6">
                                <h3 class="text-xl font-bold mt-2 text-[#FCFEFD]">New Team: VIOR Ignite</h3>
                                <p class="text-[#CBCBCB] mt-2">January 2025</p>
                            </div>
                        </div>

                        <!-- News Card 3 -->
                        <div class="group relative overflow-hidden bg-[#162F5A] shadow-lg h-[400px]">
                            <div class="h-full">
                                <video autoplay loop muted playsinline class="object-cover w-full h-full transform group-hover:scale-105 transition-transform duration-300">
                                    <source src="/videos/oristarium.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#0F2A55] via-[#0F2A55]/80 to-transparent p-6">
                                <h3 class="text-xl font-bold mt-2 text-[#FCFEFD]">Upcoming Entertainment Brand: ORISTARIUM</h3>
                                <p class="text-[#CBCBCB] mt-2">February 2025</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add this more prominent divider -->
            <div class="w-full h-[3px] bg-gradient-to-r from-transparent via-[#FEE66C] to-transparent opacity-60 relative z-10"></div>
            <!-- Wrapper for all three sections with shared animated background -->
            <div class="shared-sections-wrapper">
                <!-- Single animated background -->
                <div id="shared-animated-bg-root"></div>
                
                <!-- Content wrapper -->
                <div class="shared-sections-content">
                    <!-- Recent Videos Section -->
                    <div class="container mx-auto px-4 py-20">
                        <div class="flex justify-between items-center mb-12">
                            <h2 class="text-4xl font-bold text-[#FEE66C]">RECENT VIDEOS</h2>
                            <a href="https://www.youtube.com/@VernalisOrion" class="text-[#69B3E3] hover:text-[#FFAB3D] transition-colors font-medium flex items-center group">
                                SEE ALL
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                        
                        <!-- Video Grid -->
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Video Card 1 -->
                            <div class="group relative bg-[#162F5A] hover:bg-[#1D3B6E] transition-colors">
                                <a href="https://www.youtube.com/watch?v=M_LmDWdiVmA&t=34s" target="_blank" rel="noopener noreferrer" class="block">
                                    <div class="aspect-video w-full overflow-hidden relative">
                                        <img src="/images/igrev.png" alt="Video thumbnail" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                        <div class="absolute inset-0 bg-gradient-to-t from-[#162F5A] opacity-50 group-hover:opacity-30 transition-opacity"></div>
                                        <div class="absolute bottom-4 left-4 bg-[#FFAB3D] text-[#0A1C3B] px-2 py-1 text-sm font-bold">
                                            MATCH
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h3 class="text-[#FCFEFD] font-semibold line-clamp-2 group-hover:text-[#FFAB3D] transition-colors text-lg">
                                            Reverie VS Ignite | Powered by Vernalis & kinachanchannel
                                        </h3>
                                        <p class="text-[#69B3E3] text-sm mt-2">January 2025</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Video Card 2 -->
                            <div class="group relative bg-[#162F5A] hover:bg-[#1D3B6E] transition-colors">
                                <a href="https://www.youtube.com/watch?v=oaSnYe4WnCg&t=17s" target="_blank" rel="noopener noreferrer" class="block">
                                    <div class="aspect-video w-full overflow-hidden relative">
                                        <img src="/images/ecap.png" alt="Video thumbnail" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                        <div class="absolute inset-0 bg-gradient-to-t from-[#162F5A] opacity-50 group-hover:opacity-30 transition-opacity"></div>
                                        <div class="absolute bottom-4 left-4 bg-[#FFAB3D] text-[#0A1C3B] px-2 py-1 text-sm font-bold">
                                            MATCH
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h3 class="text-[#FCFEFD] font-semibold line-clamp-2 group-hover:text-[#FFAB3D] transition-colors text-lg">
                                            Aphrodite VS Eclipse | Powered by Desa Lele
                                        </h3>
                                        <p class="text-[#69B3E3] text-sm mt-2">November 2024</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Video Card 3 -->
                            <div class="group relative bg-[#162F5A] hover:bg-[#1D3B6E] transition-colors">
                                <a href="https://www.youtube.com/watch?v=mISJeFdWZqk&t=6122s" target="_blank" rel="noopener noreferrer" class="block">
                                    <div class="aspect-video w-full overflow-hidden relative">
                                        <img src="/images/viordvc.png" alt="Video thumbnail" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                        <div class="absolute inset-0 bg-gradient-to-t from-[#162F5A] opacity-50 group-hover:opacity-30 transition-opacity"></div>
                                        <div class="absolute bottom-4 left-4 bg-[#69B3E3] text-[#0A1C3B] px-2 py-1 text-sm font-bold">
                                            ROSTER
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h3 class="text-[#FCFEFD] font-semibold line-clamp-2 group-hover:text-[#FFAB3D] transition-colors text-lg">
                                            Meet VIOR DVC Roster | with Meridia Elinor & Xena Celestia
                                        </h3>
                                        <p class="text-[#69B3E3] text-sm mt-2">July 2024</p>
                                    </div>
                                </a>
                            </div>

                            <!-- Video Card 4 -->
                            <div class="group relative bg-[#162F5A] hover:bg-[#1D3B6E] transition-colors">
                                <a href="https://www.youtube.com/watch?v=B9HdC0FcUZE" target="_blank" rel="noopener noreferrer" class="block">
                                    <div class="aspect-video w-full overflow-hidden relative">
                                        <img src="/images/oristariumtamnel.png" alt="Video thumbnail" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                                        <div class="absolute inset-0 bg-gradient-to-t from-[#162F5A] opacity-50 group-hover:opacity-30 transition-opacity"></div>
                                        <div class="absolute bottom-4 left-4 bg-[#FEE66C] text-[#0A1C3B] px-2 py-1 text-sm font-bold">
                                            NEWS
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <h3 class="text-[#FCFEFD] font-semibold line-clamp-2 group-hover:text-[#FFAB3D] transition-colors text-lg">
                                            ORISTARIUM | Official Announcement from VIOR Tower
                                        </h3>
                                        <p class="text-[#69B3E3] text-sm mt-2">February 2025</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Add this more prominent divider -->
                    <div class="w-full h-[3px] bg-gradient-to-r from-transparent via-[#FEE66C] to-transparent opacity-60 relative z-10"></div>
                    <!-- Discord Community Section -->
                    <div class="container mx-auto px-4 py-24">
                        <div class="text-center mb-16">
                            <h2 class="text-4xl font-bold text-white mb-4">Join Our Community</h2>
                            <p class="text-[#69B3E3] text-lg max-w-2xl mx-auto">Connect with fellow VTubers, fans, and creators in our vibrant Discord community</p>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <!-- Discord Server Card -->
                            <div class="bg-[#162F5A] p-8 rounded-2xl shadow-lg transform hover:scale-[1.02] transition-all duration-300 border border-[#2A4374]">
                                <div class="flex flex-col h-full justify-between">
                                    <div>
                                        <div class="flex items-center mb-4">
                                            <div class="w-3 h-3 bg-[#69B3E3] rounded-full animate-pulse mr-2"></div>
                                            <p class="text-[#69B3E3] text-sm font-semibold">Active Community</p>
                                        </div>
                                        <h3 class="text-3xl font-bold text-[#FCFEFD] mb-6">VIOR Discord Server</h3>
                                        <div class="grid grid-cols-2 gap-4">
                                            <p class="text-[#CBCBCB] flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-[#69B3E3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Various Open Channels
                                            </p>
                                            <p class="text-[#CBCBCB] flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-[#69B3E3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Routine Community Events
                                            </p>
                                            <p class="text-[#CBCBCB] flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-[#69B3E3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Interact With Our Team
                                            </p>
                                            <p class="text-[#CBCBCB] flex items-center">
                                                <svg class="w-5 h-5 mr-2 text-[#69B3E3]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                                Active Voice Channels
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <a href="https://discord.gg/QFmu86a8Ak" target="_blank" rel="noopener noreferrer" 
                                       class="inline-flex items-center justify-center bg-[#69B3E3] hover:bg-[#5499c9] text-white px-8 py-4 
                                              rounded-xl transition-all duration-300 font-bold group mt-8">
                                        Join Our Community
                                        <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Discord Widget -->
                            <div class="bg-[#162F5A] p-8 rounded-2xl shadow-lg border border-[#2A4374] overflow-hidden">
                                <iframe 
                                    src="https://discord.com/widget?id=1005507894717993020&theme=dark" 
                                    width="100%" 
                                    height="400" 
                                    class="rounded-lg"
                                    allowtransparency="true" 
                                    frameborder="0" 
                                    sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts">
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <!-- Add this more prominent divider -->
                    <div class="w-full h-[3px] bg-gradient-to-r from-transparent via-[#FEE66C] to-transparent opacity-60 relative z-10"></div>

                    <!-- Founders Section -->
                    <div class="container mx-auto px-4 py-24">
                        <div class="text-center mb-16">
                            <h2 class="text-4xl font-bold text-[#FEE66C] mb-4 font-['Rajdhani']">The Founders of VIOR</h2>
                            <p class="text-[#69B3E3] text-lg max-w-2xl mx-auto">Meet the brilliant minds behind VIOR Tower, pioneering the future of VTuber esports and entertainment</p>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                            <!-- Founder 1 -->
                            <div class="text-center">
                                <div class="mb-6 relative group">
                                    <div class="relative w-56 h-56 md:w-64 md:h-64 mx-auto overflow-hidden rounded-full">
                                        <img src="/images/haru.png" alt="Founder" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                                        <div class="absolute inset-0 bg-[#FEE66C]/10 group-hover:bg-transparent transition-all duration-300"></div>
                                    </div>
                                </div>
                                <h3 class="text-2xl font-bold text-[#FCFEFD] mb-2">Haruki "HaruMiz" Mizuhashi</h3>
                                <p class="text-[#69B3E3] font-medium mb-2">CEO & Founder</p>
                                <p class="text-[#CBCBCB] text-sm">Since 2023</p>
                            </div>

                            <!-- Founder 2 -->
                            <div class="text-center">
                                <div class="mb-6 relative group">
                                    <div class="relative w-56 h-56 md:w-64 md:h-64 mx-auto overflow-hidden rounded-full">
                                        <img src="/images/ovio.png" alt="Founder" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                                        <div class="absolute inset-0 bg-[#FEE66C]/10 group-hover:bg-transparent transition-all duration-300"></div>
                                    </div>
                                </div>
                                <h3 class="text-2xl font-bold text-[#FCFEFD] mb-2">Ovio "Birdy" Damion</h3>
                                <p class="text-[#69B3E3] font-medium mb-2">Community Director & Founder</p>
                                <p class="text-[#CBCBCB] text-sm">Since 2023</p>
                            </div>

                            <!-- Founder 3 -->
                            <div class="text-center">
                                <div class="mb-6 relative group">
                                    <div class="relative w-56 h-56 md:w-64 md:h-64 mx-auto overflow-hidden rounded-full">
                                        <img src="/images/roffi.png" alt="Founder" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                                        <div class="absolute inset-0 bg-[#FEE66C]/10 group-hover:bg-transparent transition-all duration-300"></div>
                                    </div>
                                </div>
                                <h3 class="text-2xl font-bold text-[#FCFEFD] mb-2">Roffi Daijoubu</h3>
                                <p class="text-[#69B3E3] font-medium mb-2">CTO & Founder</p>
                                <p class="text-[#CBCBCB] text-sm">Since 2023</p>
                            </div>

                            <!-- Founder 4 -->
                            <div class="text-center">
                                <div class="mb-6 relative group">
                                    <div class="relative w-56 h-56 md:w-64 md:h-64 mx-auto overflow-hidden rounded-full">
                                        <img src="/images/bellatrix.png" alt="Founder" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-300">
                                        <div class="absolute inset-0 bg-[#FEE66C]/10 group-hover:bg-transparent transition-all duration-300"></div>
                                    </div>
                                </div>
                                <h3 class="text-2xl font-bold text-[#FCFEFD] mb-2">Bellatrix Cyrus</h3>
                                <p class="text-[#69B3E3] font-medium mb-2">Head of Entertainment</p>
                                <p class="text-[#CBCBCB] text-sm">Since 2024</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-[#0F2A55] text-[#FCFEFD] py-12 border-t border-[#69B3E3]/20">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4 text-[#FEE66C]">ABOUT</h3>
                        <p class="text-[#CBCBCB]">A community dedicated to fostering talent, promoting competitive gaming, and creating a community for passionate vtubers.</p>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4 text-[#FEE66C]">QUICK LINKS</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Home</a></li>
                            <li><a href="/teams" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Teams</a></li>
                            <li><a href="#" class="text-[#CBCBCB] hover:text-[#FFAB3D]">About</a></li>
                            <li><a href="#" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Academy</a></li>
                            <li><a href="https://www.oristarium.com/" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Entertainment</a></li>
                            <li><a href="#" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Staff</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-4 text-[#FEE66C]">FOLLOW US</h3>
                        <div class="flex space-x-4">
                            <!-- Twitter/X -->
                            <a href="https://x.com/ViOrTower" target="_blank" rel="noopener noreferrer" class="text-[#CBCBCB] hover:text-[#FFAB3D]">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                            <!-- TikTok -->
                            <a href="https://www.tiktok.com/@vernalisorion" target="_blank" rel="noopener noreferrer" class="text-[#CBCBCB] hover:text-[#FFAB3D]">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.956-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419c0-1.333.955-2.419 2.157-2.419c1.21 0 2.176 1.096 2.157 2.42c0 1.333-.946 2.418-2.157 2.418z"/>
                                </svg>
                            </a>
                            <!-- Discord -->
                            <a href="https://discord.gg/QFmu86a8Ak" target="_blank" rel="noopener noreferrer" class="text-[#CBCBCB] hover:text-[#FFAB3D]">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0a12.64 12.64 0 0 0-.617-1.25a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.078.078 0 0 0 .084-.028a14.09 14.09 0 0 0 1.226-1.994a.076.076 0 0 0-.041-.106a13.107 13.107 0 0 1-1.872-.892a.077.077 0 0 1-.008-.128a10.2 10.2 0 0 0 .372-.292a.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127a12.299 12.299 0 0 1-1.873.892a.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028a19.839 19.839 0 0 0 6.002-3.03a.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03z"/>
                                </svg>
                            </a>
                            <!-- YouTube -->
                            <a href="https://www.youtube.com/@VernalisOrion" target="_blank" rel="noopener noreferrer" class="text-[#CBCBCB] hover:text-[#FFAB3D]">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Add this script at the end of the body -->
    <script>
        const body = document.body;
        const mobileMenu = document.getElementById('mobile-menu');
        const pageContent = document.getElementById('page-content');
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenuClose = document.getElementById('mobile-menu-close');

        function toggleMobileMenu() {
            body.classList.toggle('menu-open');
        }

        function closeMobileMenu() {
            body.classList.remove('menu-open');
        }

        mobileMenuButton.addEventListener('click', toggleMobileMenu);
        mobileMenuClose.addEventListener('click', toggleMobileMenu);

        // Close menu when clicking outside
        document.addEventListener('click', function(event) {
            if (body.classList.contains('menu-open') && 
                !mobileMenu.contains(event.target) && 
                !mobileMenuButton.contains(event.target)) {
                toggleMobileMenu();
            }
        });

        // Add resize event listener
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) { // 768px is Tailwind's md breakpoint
                closeMobileMenu();
            }
        });
    </script>
</body>
</html> 