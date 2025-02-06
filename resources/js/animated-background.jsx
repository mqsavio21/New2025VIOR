import React from 'react';
import { createRoot } from 'react-dom/client';
import AnimatedGradientBackground from './components/AnimatedGradientBackground';

document.addEventListener('DOMContentLoaded', () => {
    // Create a single background instance that will be shared
    const container = document.getElementById('main-animated-bg-root');
    if (container) {
        try {
            const root = createRoot(container);
            root.render(
                <React.StrictMode>
                    <AnimatedGradientBackground />
                </React.StrictMode>
            );
            console.log('Animated background mounted successfully');
        } catch (error) {
            console.error('Error mounting animated background:', error);
        }
    }
}); 