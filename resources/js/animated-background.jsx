import React from 'react';
import { createRoot } from 'react-dom/client';
import AnimatedGradientBackground from './components/AnimatedGradientBackground';
import LoadingScreen from './components/LoadingScreen';

document.addEventListener('DOMContentLoaded', () => {
    // Mount loading screen
    const loadingContainer = document.getElementById('loading-screen-root');
    if (loadingContainer) {
        try {
            const loadingRoot = createRoot(loadingContainer);
            loadingRoot.render(
                <React.StrictMode>
                    <LoadingScreen />
                </React.StrictMode>
            );
        } catch (error) {
            console.error('Error mounting loading screen:', error);
        }
    }

    // Mount shared animated background
    const sharedBgContainer = document.getElementById('shared-animated-bg-root');
    if (sharedBgContainer) {
        try {
            const sharedBgRoot = createRoot(sharedBgContainer);
            sharedBgRoot.render(
                <React.StrictMode>
                    <AnimatedGradientBackground />
                </React.StrictMode>
            );
        } catch (error) {
            console.error('Error mounting shared animated background:', error);
        }
    }
}); 