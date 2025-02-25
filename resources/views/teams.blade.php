<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
    <title>Teams</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="bg-[#0F2A55] text-[#FCFEFD] loading">
    <!-- Loading Screen Container -->
    <div id="loading-screen-root"></div>

    <div id="page-content" class="transition-transform duration-300 ease-in-out">
        <!-- Navigation -->
        <nav class="fixed w-full z-50 bg-[#0F2A55]/90 backdrop-blur-sm border-b border-[#FEE66C]/40">
            <div class="container mx-auto px-4 py-4">
                <div class="flex justify-between items-center">
                    <div class="text-3xl font-bold">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 md:h-20">
                    </div>
                    <div class="hidden md:flex space-x-8">
                        <a href="/" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">HOME</a>
                        <a href="/teams" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">TEAMS</a>
                        <a href="/about" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">ABOUT</a>
                        <a href="/academy" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">ACADEMY</a>
                        <a href="https://www.oristarium.com/" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">ENTERTAINMENT</a>
                        <a href="/staff" class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-medium font-['Rajdhani']">STAFF</a>
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
        <div id="mobile-menu" class="fixed top-0 left-0 w-80 h-full bg-[#0F2A55] transform transition-transform duration-300 ease-in-out z-50 border-r border-[#69B3E3]/20">
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
                <nav class="flex flex-col space-y-6">
                    <a href="/" class="text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">HOME</a>
                    <a href="/teams" class="text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">TEAMS</a>
                    <a href="/about" class="text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">ABOUT</a>
                    <a href="/academy" class="text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">ACADEMY</a>
                    <a href="https://www.oristarium.com/" class="text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">ENTERTAINMENT</a>
                    <a href="/staff" class="text-xl font-medium text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors font-['Rajdhani']">STAFF</a>
                </nav>

                <!-- Social Media Links -->
                <div class="mt-auto">
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
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="pt-24 relative min-h-screen">
            <!-- Animated Background - Positioned as fixed background -->
            <div id="main-animated-bg-root" class="fixed inset-0 z-0"></div>

            <!-- Content Container - Positioned above background -->
            <div class="relative z-10">
                <!-- Hero Banner -->
                <div class="relative w-full h-[300px] md:h-[400px] overflow-hidden bg-[#0A1C3B]/50 backdrop-blur-sm">
                    <div class="container mx-auto px-4 h-full flex items-center relative z-20">
                        <div class="max-w-2xl">
                            <h1 class="text-4xl md:text-6xl font-bold mb-4 text-[#FEE66C] font-['Orbitron']">MEET OUR TEAMS</h1>
                            <p class="text-[#69B3E3] text-lg md:text-xl">from rising stars to seasoned veterans vtubers, showcasing their competitive spirit and gaming prowess.</p>
                        </div>
                    </div>
                </div>

                <!-- Teams Grid -->
                <div class="container mx-auto px-4 py-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- VIOR Vernalis -->
                        <a href="/teams/vernalis" class="group relative aspect-square bg-[#162F5A] overflow-hidden cursor-pointer block shadow-lg transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <img src="/images/vernalis.png" alt="VIOR Vernalis" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0F2A55] via-[#0F2A55]/50 to-transparent opacity-90"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-2xl font-bold text-[#FCFEFD] mb-2 font-['Orbitron']">VIOR Vernalis</h3>
                                <p class="text-[#FEE66C]">The Most Elite Team in VIOR</p>
                            </div>
                        </a>

                        <!-- VIOR Eclipse -->
                        <a href="/teams/eclipse" class="group relative aspect-square bg-[#162F5A] overflow-hidden cursor-pointer block shadow-lg transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <img src="{{ asset('images/eclipse.png') }}" alt="VIOR Eclipse" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0F2A55] via-[#0F2A55]/50 to-transparent opacity-90"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-2xl font-bold text-[#FCFEFD] mb-2 font-['Orbitron']">VIOR Eclipse</h3>
                                <p class="text-[#FEE66C]">Strategic and Tactical</p>
                            </div>
                        </a>

                        <!-- VIOR Ignite -->
                        <a href="/teams/ignite" class="group relative aspect-square bg-[#162F5A] overflow-hidden cursor-pointer block shadow-lg transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <img src="/images/news2.png" alt="VIOR Ignite" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0F2A55] via-[#0F2A55]/50 to-transparent opacity-90"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-2xl font-bold text-[#FCFEFD] mb-2 font-['Orbitron']">VIOR Ignite</h3>
                                <p class="text-[#FEE66C]">Fiery Passion and Unyielding Spirit</p>
                            </div>
                        </a>

                        <!-- VIOR Aphrodite -->
                        <a href="/teams/aphrodite" class="group relative aspect-square bg-[#162F5A] overflow-hidden cursor-pointer shadow-lg transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <img src="/images/aphrodite.png" alt="VIOR Ignite" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0F2A55] via-[#0F2A55]/50 to-transparent opacity-90"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-2xl font-bold text-[#FCFEFD] mb-2 font-['Orbitron']">VIOR Aphrodite</h3>
                                <p class="text-[#FEE66C]">Stunning and Elegant</p>
                            </div>
                        </a>

                        <!-- VIOR Reverie -->
                        <a href="/teams/reverie" class="group relative aspect-square bg-[#162F5A] overflow-hidden cursor-pointer shadow-lg transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <img src="/images/reverie.png" alt="VIOR Ignite" class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#0F2A55] via-[#0F2A55]/50 to-transparent opacity-90"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="text-2xl font-bold text-[#FCFEFD] mb-2 font-['Orbitron']">VIOR Reverie</h3>
                                <p class="text-[#FEE66C]">Turning Daydreams into Reality</p>
                            </div>
                        </a>

                    </div>
                </div>
                <!-- Add this more prominent divider -->
                <div class="w-full h-[3px] bg-gradient-to-r from-transparent via-[#FEE66C] to-transparent opacity-60 relative z-10"></div>
                
                <!-- Achievements Section -->
                <div class="container mx-auto px-4 py-16">
                    <h2 class="text-4xl font-bold mb-12 text-center text-[#FEE66C] font-['Orbitron'] flex items-center justify-center gap-4">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 3h14l1 2v2h-2.1c.1.3.1.7.1 1 0 2.8-2.2 5-5 5h-2c-2.8 0-5-2.2-5-5 0-.3 0-.7.1-1H4V5l1-2zm13 2H6l-.3.6V6h12.6v-.4L18 5zM12 11c1.9 0 3.5-1.5 3.5-3.5 0-.3 0-.7-.1-1H8.6c-.1.3-.1.7-.1 1C8.5 9.5 10.1 11 12 11z M11 14v5h2v-5h-2z M9 21v-1h6v1H9z"/>
                        </svg>
                        OUR ACHIEVEMENTS
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M5 3h14l1 2v2h-2.1c.1.3.1.7.1 1 0 2.8-2.2 5-5 5h-2c-2.8 0-5-2.2-5-5 0-.3 0-.7.1-1H4V5l1-2zm13 2H6l-.3.6V6h12.6v-.4L18 5zM12 11c1.9 0 3.5-1.5 3.5-3.5 0-.3 0-.7-.1-1H8.6c-.1.3-.1.7-.1 1C8.5 9.5 10.1 11 12 11z M11 14v5h2v-5h-2z M9 21v-1h6v1H9z"/>
                        </svg>
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Achievement 1 -->
                        <div class="bg-[#162F5A] p-6 rounded-lg border border-[#69B3E3]/20 shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-xl font-bold mb-2 text-[#FEE66C] font-['Orbitron']">Digikagi Virtual Championship Season 3</h3>
                            <p class="text-[#CBCBCB]">3rd Place</p>
                        </div>

                        <!-- Achievement 2 -->
                        <div class="bg-[#162F5A] p-6 rounded-lg border border-[#69B3E3]/20 shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-xl font-bold mb-2 text-[#FEE66C] font-['Orbitron']">ASPIRA PRO SERIES (VALORANT EDITION)</h3>
                            <p class="text-[#CBCBCB]">3rd Place</p>
                        </div>

                        <!-- Achievement 3 -->
                        <div class="bg-[#162F5A] p-6 rounded-lg border border-[#69B3E3]/20 shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-xl font-bold mb-2 text-[#FEE66C] font-['Orbitron']">Inari Shrine VALORANT Fun Match</h3>
                            <p class="text-[#CBCBCB]">2nd Place</p>
                        </div>

                        <!-- Achievement 4 -->
                        <div class="bg-[#162F5A] p-6 rounded-lg border border-[#69B3E3]/20 shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-xl font-bold mb-2 text-[#FEE66C] font-['Orbitron']">SerafioZ VALORANT Fun Match</h3>
                            <p class="text-[#CBCBCB]">2nd Place</p>
                        </div>

                        <!-- Achievement 5 -->
                        <div class="bg-[#162F5A] p-6 rounded-lg border border-[#69B3E3]/20 shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-xl font-bold mb-2 text-[#FEE66C] font-['Orbitron']">The Lazy Tempur Valorant Tournament</h3>
                            <p class="text-[#CBCBCB]">Best 8 from 64</p>
                        </div>

                        <!-- Achievement 6 -->
                        <div class="bg-[#162F5A] p-6 rounded-lg border border-[#69B3E3]/20 shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-xl font-bold mb-2 text-[#FEE66C] font-['Orbitron']">RGVE Tournament</h3>
                            <p class="text-[#CBCBCB]">1st Place</p>
                        </div>

                        <!-- Achievement 7 -->
                        <div class="bg-[#162F5A] p-6 rounded-lg border border-[#69B3E3]/20 shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-xl font-bold mb-2 text-[#FEE66C] font-['Orbitron']">VALORANT Premier October 2024 Elite 1</h3>
                            <p class="text-[#CBCBCB]">Runner Up</p>
                        </div>

                        <!-- Achievement 8 -->
                        <div class="bg-[#162F5A] p-6 rounded-lg border border-[#69B3E3]/20 shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-xl font-bold mb-2 text-[#FEE66C] font-['Orbitron']">VALORANT Premier August 2024 Advanced 5</h3>
                            <p class="text-[#CBCBCB]">Runner Up</p>
                        </div>
                    </div>
                </div>

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
                                    <li><a href="/" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Home</a></li>
                                    <li><a href="/teams" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Teams</a></li>
                                    <li><a href="/about" class="text-[#CBCBCB] hover:text-[#FFAB3D]">About</a></li>
                                    <li><a href="/academy" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Academy</a></li>
                                    <li><a href="https://www.oristarium.com/" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Entertainment</a></li>
                                    <li><a href="/staff" class="text-[#CBCBCB] hover:text-[#FFAB3D]">Staff</a></li>
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
                                <!-- Mobile copyright -->
                                <div class="mt-4 text-[#CBCBCB] text-sm md:hidden">
                                    © 2025 VIOR Tower. All rights reserved.
                                </div>
                            </div>
                            <!-- Desktop copyright -->
                            <div class="hidden md:block text-right">
                                <p class="text-[#CBCBCB] text-sm">
                                    © 2025 VIOR Tower.<br class="hidden lg:block">All rights reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
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