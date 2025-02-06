import React, { useEffect } from 'react';
import { motion } from 'framer-motion';
import AnimatedGradientBackground from './AnimatedGradientBackground';

const LoadingScreen = () => {
  useEffect(() => {
    // Hide main content immediately
    const mainContent = document.getElementById('page-content');
    if (mainContent) {
      mainContent.style.opacity = '0';
      mainContent.style.visibility = 'hidden';
    }

    // Add a small delay before starting the fade-out process
    const timer = setTimeout(() => {
      const loadingScreen = document.getElementById('loading-screen-root');
      if (loadingScreen) {
        // Start fade out
        loadingScreen.style.opacity = '0';
        
        // After fade out, hide loading screen and show content
        setTimeout(() => {
          loadingScreen.style.display = 'none';
          document.body.classList.remove('loading');
          
          // Show main content with fade in effect
          if (mainContent) {
            mainContent.style.visibility = 'visible';
            requestAnimationFrame(() => {
              mainContent.style.opacity = '1';
              // Enable scrolling
              document.body.style.overflow = '';
            });
          }
        }, 500); // Fade out transition duration
      }
    }, 1500); // Reduced from 2000ms to 1500ms for better UX

    return () => clearTimeout(timer);
  }, []);

  return (
    <div 
      className="fixed inset-0 z-[100] flex items-center justify-center bg-[#0F2A55] transition-opacity duration-500" 
      style={{ transform: 'translateZ(0)' }}
    >
      <AnimatedGradientBackground />
      <div className="fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center z-10">
        <div className="relative">
          <img 
            src="/images/logo.png" 
            alt="VIOR Logo" 
            className="w-16 h-16 object-contain"
          />
          <motion.div
            className="absolute top-0 left-0"
            style={{
              border: '2px solid #FEE66C',
              borderRadius: '50%',
              borderRightColor: 'transparent',
              borderBottomColor: 'transparent',
              width: '64px',
              height: '64px',
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