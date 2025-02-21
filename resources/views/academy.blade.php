<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
    <title>Academy</title>
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
        <div class="pt-24 relative overflow-hidden min-h-screen">            
            <!-- Hero Section -->
            <div class="relative h-[300px] sm:h-[400px] md:h-[500px] mb-8 md:mb-12">
                <!-- Hero Image -->
                <div class="absolute inset-0 z-10">
                    <img src="{{ asset('images/heroacademy.png') }}" alt="Academy Hero" class="w-full h-full object-cover object-center">
                    <!-- Dark Overlay -->
                    <div class="absolute inset-0 bg-black/70"></div>
                </div>

                <!-- Yellow Line Shadows - Increased z-index -->
                <div class="absolute top-0 left-0 right-0 h-[2px] md:h-[3px] bg-gradient-to-r from-transparent via-[#FEE66C] to-transparent shadow-[0_0_15px_rgba(254,230,108,0.7)] z-30"></div>
                <div class="absolute top-0 bottom-0 left-0 w-[2px] md:w-[3px] bg-gradient-to-b from-transparent via-[#FEE66C] to-transparent shadow-[0_0_15px_rgba(254,230,108,0.7)] z-30"></div>
                <div class="absolute top-0 bottom-0 right-0 w-[2px] md:w-[3px] bg-gradient-to-b from-transparent via-[#FEE66C] to-transparent shadow-[0_0_15px_rgba(254,230,108,0.7)] z-30"></div>
                <div class="absolute bottom-0 left-0 right-0 h-[2px] md:h-[3px] bg-gradient-to-r from-transparent via-[#FEE66C] to-transparent shadow-[0_0_15px_rgba(254,230,108,0.7)] z-30"></div>
                
                <!-- Hero Content - Highest z-index -->
                <div class="relative h-full flex flex-col items-center justify-center text-center px-4 z-40">
                    <img src="{{ asset('images/logo.png') }}" alt="VIOR Tower Logo" class="h-20 sm:h-28 md:h-32 lg:h-48 mb-2 md:mb-4">
                    <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-6xl font-bold text-white mb-2 md:mb-4 font-['Orbitron']">VIOR Academy</h1>
                </div>
            </div>

            <!-- Animated Background - Lower z-index -->
            <div id="main-animated-bg-root" class="z-0"></div>

            <!-- Who We Are Section -->
            <div class="mb-20 container mx-auto px-4 pt-12">
                <h2 class="text-5xl md:text-7xl font-bold text-[#FEE66C] mb-8 font-['Orbitron'] text-center">WHO WE ARE</h2>
                <div class="max-w-4xl mx-auto">
                    <p class="text-xl md:text-2xl text-[#CBCBCB] mb-8 font-['Rajdhani'] text-center">
                        A non-profit academy dedicated to fostering talent, promoting competitive gaming, and creating a community for passionate gamers.
                    </p>
                    <p class="text-xl md:text-2xl text-[#CBCBCB] font-['Rajdhani'] text-center">
                        Dedicated to fostering talent, promoting competitive gaming, and creating a community for passionate gamers, we strive to create opportunities for players especially vstreamers and vtubers to grow, compete, and achieve their dreams in the ever-evolving landscape of competitive gaming.
                    </p>
                </div>
            </div>

            <!-- Add this more prominent divider -->
            <div class="w-full h-[3px] bg-gradient-to-r from-transparent via-[#FEE66C] to-transparent opacity-60 relative z-10"></div>
            
            <!-- Programs Section -->
            <div class="container mx-auto px-4 py-16">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-[#FEE66C] mb-4 font-['Orbitron']">Our Programs</h2>
                </div>
                
                <!-- Programs Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Private Sessions -->
                    <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg p-6 hover:transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
                        <h3 class="text-2xl font-bold text-[#69B3E3] mb-4 font-['Orbitron']">Private Sessions</h3>
                        <p class="text-[#CBCBCB] font-['Rajdhani']">A comprehensive introduction to competitive gaming fundamentals.</p>
                    </div>

                    <!-- Advanced Training Bootcamp -->
                    <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg p-6 hover:transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
                        <h3 class="text-2xl font-bold text-[#69B3E3] mb-4 font-['Orbitron']">Advanced Training Bootcamp</h3>
                        <p class="text-[#CBCBCB] font-['Rajdhani']">Intensive coaching for competitive players.</p>
                    </div>

                    <!-- Team Development -->
                    <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg p-6 hover:transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
                        <h3 class="text-2xl font-bold text-[#69B3E3] mb-4 font-['Orbitron']">Team Development</h3>
                        <p class="text-[#CBCBCB] font-['Rajdhani']">Specialized training for building cohesive and effective teams.</p>
                    </div>

                    <!-- VOD Analysis -->
                    <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg p-6 hover:transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
                        <h3 class="text-2xl font-bold text-[#69B3E3] mb-4 font-['Orbitron']">VOD Analysis</h3>
                        <p class="text-[#CBCBCB] font-['Rajdhani']">In-depth sessions focusing on your own gameplay and analysis.</p>
                    </div>

                    <!-- Mental Conditioning -->
                    <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg p-6 hover:transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
                        <h3 class="text-2xl font-bold text-[#69B3E3] mb-4 font-['Orbitron']">Mental Conditioning</h3>
                        <p class="text-[#CBCBCB] font-['Rajdhani']">Programs designed to improve focus, resilience, and performance under pressure.</p>
                    </div>
                </div>
            </div>

            <!-- Add this more prominent divider -->
            <div class="w-full h-[3px] bg-gradient-to-r from-transparent via-[#FEE66C] to-transparent opacity-60 relative z-10"></div>
            
            <!-- Option Role Section -->
            <div class="container mx-auto px-4 py-16">
                <!-- Section Header -->
                <div class="text-center mb-16">
                    <h2 class="text-4xl md:text-5xl font-bold text-[#FEE66C] mb-4 font-['Orbitron']">Role</h2>
                    <p class="text-xl text-[#CBCBCB] font-['Rajdhani'] max-w-3xl mx-auto">
                        Pilih peran yang sesuai dengan minat dan kemampuanmu dalam komunitas VIOR
                    </p>
                </div>

                <!-- Role Cards Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- VIOR Team Card -->
                    <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-xl p-6 hover:transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
                        <div class="mb-4">
                            <div class="w-16 h-16 bg-[#FEE66C]/10 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-[#FEE66C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-[#69B3E3] mb-2 font-['Orbitron']">VIOR Team</h3>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">Menjadi player dalam tim VIOR yang lebih kompetitif</p>
                        </div>
                    </div>

                    <!-- Academy Student Card -->
                    <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-xl p-6 hover:transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
                        <div class="mb-4">
                            <div class="w-16 h-16 bg-[#FEE66C]/10 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-[#FEE66C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-[#69B3E3] mb-2 font-['Orbitron']">Academy Student</h3>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">Belajar valorant dengan perlahan dan pemula sebagai murid di komunitas vior</p>
                        </div>
                    </div>

                    <!-- Coach Card -->
                    <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-xl p-6 hover:transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
                        <div class="mb-4">
                            <div class="w-16 h-16 bg-[#FEE66C]/10 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-[#FEE66C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-[#69B3E3] mb-2 font-['Orbitron']">Coach / Instructors</h3>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">Melatih tim VIOR dengan panduan yang ada dan menjunjung prinsip VIOR</p>
                        </div>
                    </div>

                    <!-- Manager Card -->
                    <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-xl p-6 hover:transform hover:scale-105 transition-all duration-300 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
                        <div class="mb-4">
                            <div class="w-16 h-16 bg-[#FEE66C]/10 rounded-full flex items-center justify-center mb-4">
                                <svg class="w-8 h-8 text-[#FEE66C]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-[#69B3E3] mb-2 font-['Orbitron']">Manager</h3>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">Membantu coach dalam menjadwalkan latihan, mencatat notes & pr</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Join VIOR Tower Section -->
            <div class="container mx-auto px-4 py-16">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <!-- Left side content -->
                    <div class="space-y-6">
                        <h2 class="text-4xl md:text-5xl font-bold text-[#FEE66C] font-['Orbitron']">Join VIOR Tower</h2>
                        <p class="text-xl text-[#CBCBCB] font-['Rajdhani']">
                            Be a part of our communities and learn VALORANT together with fellow instructors & teammates.
                        </p>
                        <div class="space-y-4">
                            <!-- Stats Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
                                <!-- Stat 1 -->
                                <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 p-4 rounded-lg">
                                    <h3 class="text-[#69B3E3] font-['Orbitron'] font-bold mb-2">350+ Members</h3>
                                    <p class="text-[#CBCBCB] font-['Rajdhani']">Community Members in Indonesia</p>
                                </div>
                                
                                <!-- Stat 2 -->
                                <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 p-4 rounded-lg">
                                    <h3 class="text-[#69B3E3] font-['Orbitron'] font-bold mb-2">24/7 Access</h3>
                                    <p class="text-[#CBCBCB] font-['Rajdhani']">Flexible scheduling throughout the weekend</p>
                                </div>
                                
                                <!-- Stat 3 -->
                                <div class="bg-[#0F2A55]/50 backdrop-blur-sm border border-[#69B3E3]/20 p-4 rounded-lg">
                                    <h3 class="text-[#69B3E3] font-['Orbitron'] font-bold mb-2">Community Trust</h3>
                                    <p class="text-[#CBCBCB] font-['Rajdhani']">Highly rated by our members in vtuber communities</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA Button -->
                        <a href="https://forms.gle/QAsCu6zv88PkWbnj6" target="_blank" rel="noopener noreferrer" 
                           class="inline-flex items-center justify-center bg-[#69B3E3] hover:bg-[#5499c9] text-white px-8 py-4 
                                  rounded-xl transition-all duration-300 font-bold group mt-8">
                            Join Now!
                            <svg class="w-5 h-5 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Right side image -->
                    <div class="relative">
                        <!-- Yellow glow effect -->
                        <div class="absolute inset-0 bg-[#FEE66C]/20 blur-3xl rounded-full"></div>
                        
                        <!-- Image container -->
                        <div class="relative">
                            <img src="{{ asset('images/mission.png') }}" alt="VIOR Tower Coach" 
                                 class="w-full h-auto rounded-lg shadow-lg transform hover:scale-105 transition-transform duration-300">
                            
                            <!-- Decorative elements -->
                            <div class="absolute -top-4 -right-4 w-24 h-24 bg-[#FEE66C]/10 rounded-full blur-xl"></div>
                            <div class="absolute -bottom-4 -left-4 w-32 h-32 bg-[#69B3E3]/10 rounded-full blur-xl"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Add this more prominent divider -->
            <div class="w-full h-[3px] bg-gradient-to-r from-transparent via-[#FEE66C] to-transparent opacity-60 relative z-10"></div>

            <!-- Notable Members Section -->
            <div class="relative">
                <div id="notable-members-root"></div>

                <!-- Navigation Buttons - Positioned with higher z-index -->
                <div class="relative z-50 flex justify-center gap-8 mb-12 mt-4">
                    <button 
                        id="prevPage"
                        class="bg-[#162F5A]/80 p-3 rounded-full text-[#FEE66C] hover:bg-[#FEE66C] hover:text-[#162F5A] transition-all duration-300 backdrop-blur-sm border border-[#69B3E3]/20 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>

                    <button 
                        id="nextPage"
                        class="bg-[#162F5A]/80 p-3 rounded-full text-[#FEE66C] hover:bg-[#FEE66C] hover:text-[#162F5A] transition-all duration-300 backdrop-blur-sm border border-[#69B3E3]/20 hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
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
                            <div class="bg-[#162F5A] p-8 rounded-2xl shadow-lg transform hover:scale-[1.02] transition-all duration-300 border border-[#2A4374] hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
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
                            <div class="bg-[#162F5A] p-8 rounded-2xl shadow-lg border border-[#2A4374] overflow-hidden hover:shadow-[0_0_15px_rgba(254,230,108,0.3)]">
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