import React from 'react';
import { motion } from "framer-motion";

const AnimatedGradientBackground = ({ className = "" }) => {
  return (
    <motion.div
      className={`absolute inset-0 w-full h-full ${className}`}
      initial={{ opacity: 1 }}
      style={{
        position: 'absolute',
        top: 0,
        left: 0,
        right: 0,
        bottom: 0,
        zIndex: 1,
      }}
      animate={{
        background: [
          "linear-gradient(45deg, #0A1C3B 0%, #1D3B6E 50%, #0A1C3B 100%)",
          "linear-gradient(45deg, #1D3B6E 0%, #0A1C3B 50%, #1D3B6E 100%)",
          "linear-gradient(45deg, #0A1C3B 0%, #1D3B6E 50%, #0A1C3B 100%)",
        ],
      }}
      transition={{
        duration: 5,
        repeat: Infinity,
        repeatType: "reverse",
        ease: "easeInOut",
      }}
    />
  );
};

export default AnimatedGradientBackground; 