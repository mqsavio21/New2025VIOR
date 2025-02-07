import React, { useState, useEffect } from 'react';

const PlayersSection = ({ teamData }) => {
    const [currentIndex, setCurrentIndex] = useState(0);
    const currentPlayer = teamData.players[currentIndex];

    const updateUI = (player, index) => {
        // Update text content
        document.getElementById('player-name').textContent = player.name;
        document.getElementById('player-game-name').textContent = player.gameName;
        document.getElementById('player-description').textContent = player.description;
        document.getElementById('current-index').textContent = index + 1;
        document.getElementById('profile-tag').textContent = `PROFILE // ${player.gameName.toUpperCase()}`;
        
        // Update progress bar
        const progressBar = document.getElementById('progress-bar');
        progressBar.style.width = `${((index + 1) / teamData.players.length) * 100}%`;
        
        // Update image with fade effect
        const img = document.getElementById('player-image');
        img.style.opacity = '0';
        setTimeout(() => {
            img.src = player.image;
            img.style.opacity = '1';
        }, 200);

        // Update social links
        const socialLinksContainer = document.getElementById('player-social-links');
        socialLinksContainer.innerHTML = player.socialLinks
            .map(link => `
                <a href="${link.url}" 
                   target="_blank" 
                   rel="noopener noreferrer" 
                   class="text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors">
                    <i class="fab ${link.icon} text-2xl"></i>
                </a>
            `).join('');
    };

    const handlePrevious = () => {
        setCurrentIndex((prev) => (prev - 1 + teamData.players.length) % teamData.players.length);
    };

    const handleNext = () => {
        setCurrentIndex((prev) => (prev + 1) % teamData.players.length);
    };

    useEffect(() => {
        // Add navigation buttons
        const controls = document.getElementById('carousel-controls');
        const navButtons = document.createElement('div');
        navButtons.className = 'flex space-x-4';
        navButtons.innerHTML = `
            <button id="prev-button" class="w-12 h-12 flex items-center justify-center border border-[#FCFEFD]/20 hover:border-[#FFAB3D] text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors">←</button>
            <button id="next-button" class="w-12 h-12 flex items-center justify-center border border-[#FCFEFD]/20 hover:border-[#FFAB3D] text-[#FCFEFD] hover:text-[#FFAB3D] transition-colors">→</button>
        `;
        controls.appendChild(navButtons);

        // Add event listeners
        document.getElementById('prev-button').addEventListener('click', handlePrevious);
        document.getElementById('next-button').addEventListener('click', handleNext);

        // Initial UI update
        updateUI(currentPlayer, currentIndex);

        // Cleanup
        return () => {
            if (controls && navButtons) {
                controls.removeChild(navButtons);
            }
        };
    }, []);

    // Update UI when currentIndex changes
    useEffect(() => {
        updateUI(currentPlayer, currentIndex);
    }, [currentIndex]);

    // Add keyboard navigation
    useEffect(() => {
        const handleKeyPress = (e) => {
            if (e.key === 'ArrowLeft') {
                handlePrevious();
            } else if (e.key === 'ArrowRight') {
                handleNext();
            }
        };

        window.addEventListener('keydown', handleKeyPress);
        return () => window.removeEventListener('keydown', handleKeyPress);
    }, []);

    return null;
};

export default PlayersSection; 