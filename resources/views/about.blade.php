<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon/favicon.ico') }}">
    <title>About Us</title>
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

                    <div id="main-animated-bg-root"></div>
        <!-- Main content -->
        <div class="pt-24 relative overflow-hidden min-h-screen">
            
            <!-- Add Axel background image (left) -->
            <div class="fixed left-0 top-24 bottom-0 w-1/3 pointer-events-none z-[1]">
                <img 
                    src="{{ asset('images/axel.png') }}" 
                    alt="Background Decoration" 
                    class="h-full w-full object-contain object-left opacity-15"
                    style="position: absolute; left: 0; top: 0;"
                >
            </div>

            <!-- Add Kirenn background image (right) -->
            <div class="fixed right-0 top-24 bottom-0 w-1/3 pointer-events-none z-[1]">
                <img 
                    src="{{ asset('images/kirenn.png') }}" 
                    alt="Background Decoration" 
                    class="h-full w-full object-contain object-right opacity-15 scale-100 md:scale-100 sm:scale-125"
                    style="position: absolute; right: -15%; top: 0;"
                >
            </div>
            
            <!-- About Section -->
            <div class="container mx-auto px-4 py-16 relative z-10">
                <!-- Who We Are Section -->
                <div class="mb-20">
                    <h2 class="text-5xl md:text-7xl font-bold text-[#FEE66C] mb-8 font-['Orbitron']">WHO WE ARE</h2>
                    <div class="max-w-4xl">
                        <p class="text-xl md:text-2xl text-[#CBCBCB] mb-8 font-['Rajdhani']">
                            VIOR Tower is a non-profit community academy based for Indonesian Valorant players, particularly those who identify as vstreamers or vtubers which founded in October 2023.
                        </p>
                        <p class="text-xl md:text-2xl text-[#CBCBCB] font-['Rajdhani']">
                        Dedicated to fostering talent, promoting competitive gaming, and creating a community for passionate gamers, we strive to create opportunities for players especially vstreamers and vtubers to grow, compete, and achieve their dreams in the ever-evolving landscape of competitive gaming.
                        </p>
                    </div>
                </div>

                <!-- Stats Section -->
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8 mb-20">
                    <div class="text-center p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg">
                        <div class="text-3xl md:text-5xl font-bold text-[#FEE66C] mb-4 font-['Orbitron']">5</div>
                        <div class="text-xl text-[#CBCBCB] font-['Rajdhani']">COMPETITIVE TEAMS</div>
                    </div>
                    <div class="text-center p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg">
                        <div class="text-3xl md:text-5xl font-bold text-[#FEE66C] mb-4 font-['Orbitron']">50+</div>
                        <div class="text-xl text-[#CBCBCB] font-['Rajdhani']">ACTIVE PLAYERS</div>
                    </div>
                    <div class="text-center p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg">
                        <div class="text-3xl md:text-5xl font-bold text-[#FEE66C] mb-4 font-['Orbitron']">300K+</div>
                        <div class="text-xl text-[#CBCBCB] font-['Rajdhani']">COMMUNITY MEMBERS</div>
                    </div>
                    <div class="text-center p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg">
                        <div class="text-3xl md:text-5xl font-bold text-[#FEE66C] mb-4 font-['Orbitron']">10</div>
                        <div class="text-xl text-[#CBCBCB] font-['Rajdhani']">ACHIEVEMENTS</div>
                    </div>
                    <div class="text-center p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg">
                        <div class="text-3xl md:text-5xl font-bold text-[#FEE66C] mb-4 font-['Orbitron']">2023</div>
                        <div class="text-xl text-[#CBCBCB] font-['Rajdhani']">FOUNDED IN</div>
                    </div>
                </div>

                <!-- Mission Section -->
                <div class="mb-20 flex flex-col md:flex-row items-center gap-12">
                    
                    <!-- left side - Text -->
                    <div class="w-full md:w-1/2">
                        <h2 class="text-5xl md:text-7xl font-bold text-[#FEE66C] mb-8 font-['Orbitron']">OUR MISSION</h2>
                        <div class="space-y-6">
                            <p class="text-xl md:text-2xl text-[#CBCBCB] font-['Rajdhani']">
                                We want to build a place for empowerment through education, foster a supportive community, promote positive gaming etiquette, and integration of art & gaming.
                            </p>
                            <p class="text-xl md:text-2xl text-[#CBCBCB] font-['Rajdhani']">
                                We are hoping to be a suitable place for nurturing ground in Indonesia for aspiring Valorant players especially for VStreamers, where talent transcends rank and every individual is empowered to unlock their full potential.
                            </p>
                        </div>
                    </div>
                    <!-- right side - Image -->
                    <div class="w-full md:w-1/2">
                        <div class="relative">
                            <img 
                                src="{{ asset('images/mission.png') }}" 
                                alt="Esports Player" 
                                class="w-full h-[500px] object-cover rounded-lg shadow-[0_0_15px_rgba(254,230,108,0.3)]"
                            >
                        </div>
                    </div>
                </div>

                <!-- Values Section -->
                <div>
                    <h2 class="text-5xl md:text-7xl font-bold text-[#FEE66C] mb-8 font-['Orbitron']">OUR VALUES</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-2xl font-bold text-[#FFAB3D] mb-4 font-['Rajdhani']">EXCELLENCE</h3>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">We strive for excellence in everything we do, from competitive performance to content creation and community engagement.</p>
                        </div>
                        <div class="p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-2xl font-bold text-[#FFAB3D] mb-4 font-['Rajdhani']">INNOVATION</h3>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">We embrace new ideas and technologies to stay at the forefront of esports evolution and entertainment.</p>
                        </div>
                        <div class="p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-2xl font-bold text-[#FFAB3D] mb-4 font-['Rajdhani']">COMMUNITY</h3>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">We foster an inclusive and supportive environment where players and fans can connect, grow, and thrive together.</p>
                        </div>
                    </div>
                </div>

                <!-- History Section -->
                <div class="mt-20">
                    <h2 class="text-5xl md:text-7xl font-bold text-[#FEE66C] mb-8 font-['Orbitron']">OUR HISTORY</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <!-- Column 1: The Beginning -->
                        <div class="p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-2xl font-bold text-[#FFAB3D] mb-4 font-['Rajdhani']">THE BEGINNING</h3>
                            <div class="text-sm text-[#FF4655] mb-2 font-['Rajdhani']">OCTOBER 2023</div>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">VIOR Tower was established with a vision to create a unique platform for Indonesian VStreamers and VTubers in the VALORANT community, starting with just a handful of dedicated members.</p>
                        </div>

                        <!-- Column 2: First Steps -->
                        <div class="p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-2xl font-bold text-[#FFAB3D] mb-4 font-['Rajdhani']">FIRST STEPS</h3>
                            <div class="text-sm text-[#FF4655] mb-2 font-['Rajdhani']">NOVEMBER 2023</div>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">Formation of our first competitive teams and the launch of our community Discord server, marking the beginning of our journey to build a supportive gaming ecosystem in Indonesia Vtubers Communities.</p>
                        </div>

                        <!-- Column 3: Community Growth -->
                        <div class="p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-2xl font-bold text-[#FFAB3D] mb-4 font-['Rajdhani']">COMMUNITY GROWTH</h3>
                            <div class="text-sm text-[#FF4655] mb-2 font-['Rajdhani']">DECEMBER 2023</div>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">Rapid expansion of our community to over 300 members, establishing VIOR Tower as a significant presence in the Indonesian Vtuber VALORANT scene.</p>
                        </div>

                        <!-- Column 4: Looking Forward -->
                        <div class="p-8 bg-[#0A1C3B]/50 backdrop-blur-sm border border-[#69B3E3]/20 rounded-lg shadow-[0_0_15px_rgba(254,230,108,0.3)] transition-shadow duration-300 hover:shadow-[0_0_20px_rgba(254,230,108,0.5)]">
                            <h3 class="text-2xl font-bold text-[#FFAB3D] mb-4 font-['Rajdhani']">LOOKING FORWARD</h3>
                            <div class="text-sm text-[#FF4655] mb-2 font-['Rajdhani']">2024 & BEYOND</div>
                            <p class="text-[#CBCBCB] font-['Rajdhani']">Continuing to expand our influence in vtuber VALORANT scene while fostering the unique blend of gaming and content creation that defines our community with the new released of our entertainment brand, ORISTARIUM.</p>
                        </div>
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