import './bootstrap';
import '../css/app.css';
import './animated-background';
import React from 'react';
import { createRoot } from 'react-dom/client';
import PlayersSection from './components/PlayersSection';
import { teamsData } from './data/teamsData';

// Wait for DOM to load
document.addEventListener('DOMContentLoaded', () => {
    const playersRoot = document.getElementById('players-section-root');
    
    if (playersRoot) {
        const root = createRoot(playersRoot);
        root.render(
            <React.StrictMode>
                <PlayersSection teamData={teamsData.vernalis} />
            </React.StrictMode>
        );
    }
});

// Log that app.js is loaded
console.log('app.js loaded');