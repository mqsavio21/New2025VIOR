import React, { useEffect } from 'react';
import { motion } from 'framer-motion';
import AnimatedGradientBackground from './AnimatedGradientBackground';

const LoadingScreen = () => {
  useEffect(() => {
    // Hide main content initially
    const mainContent = document.getElementById('page-content');
    if (mainContent) {
      mainContent.style.opacity = '0';
      mainContent.style.visibility = 'hidden';
    }

    // Set a timeout to remove the loading screen after 2 seconds
    const timer = setTimeout(() => {
      const loadingScreen = document.getElementById('loading-screen-root');
      if (loadingScreen) {
        loadingScreen.style.opacity = '0';
        setTimeout(() => {
          loadingScreen.style.display = 'none';
          document.body.classList.remove('loading');
          // Show main content with fade in effect
          if (mainContent) {
            mainContent.style.visibility = 'visible';
            mainContent.style.opacity = '1';
            // Enable scrolling
            document.body.style.overflow = '';
          }
        }, 500); // Fade out transition
      }
    }, 2000); // 2 seconds

    return () => clearTimeout(timer);
  }, []);

  return (
    <div className="fixed inset-0 z-[100] flex items-center justify-center bg-[#0F2A55] transition-opacity duration-500">
      <AnimatedGradientBackground />
      <div className="relative z-10 flex flex-col items-center">
        <div className="relative">
          <img 
            src="/images/logo.png" 
            alt="VIOR Logo" 
            className="w-16 h-16 object-contain" // Reduced from w-24 h-24 to w-16 h-16
          />
          <motion.div
            className="absolute top-0 left-0 w-full h-full"
            style={{
              border: '2px solid #FEE66C',
              borderRadius: '50%',
              borderRightColor: 'transparent',
              borderBottomColor: 'transparent',
              width: '64px',  // Added explicit width (matches w-16)
              height: '64px', // Added explicit height (matches h-16)
              top: '0',
              left: '0'
            }}
            animate={{ rotate: 360 }}
            transition={{
              duration: 1,
              repeat: Infinity,
              ease: "linear"
            }}
          />
        </div>
        <div className="mt-4 text-[#69B3E3] font-['Orbitron']">
          Loading...
        </div>
      </div>
    </div>
  );
};

export default LoadingScreen; 