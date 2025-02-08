import './bootstrap';
import '../css/app.css';
import './animated-background';
import React from 'react';
import { createRoot } from 'react-dom/client';
import PlayersSection from './components/PlayersSection';
import { teamsData } from './data/teamsData';
import NotableMembers from './components/NotableMembers';


// Add error boundary
class ErrorBoundary extends React.Component {
    constructor(props) {
        super(props);
        this.state = { hasError: false };
    }

    static getDerivedStateFromError(error) {
        return { hasError: true };
    }

    componentDidCatch(error, errorInfo) {
        console.error('React Error:', error, errorInfo);
    }

    render() {
        if (this.state.hasError) {
            return <div>Something went wrong.</div>;
        }
        return this.props.children;
    }
}

// Wait for DOM to load
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM Content Loaded');
    
    // Try to mount Vernalis section
    const vernalisRoot = document.getElementById('players-section-root');
    console.log('Players root element:', vernalisRoot);
    
    if (vernalisRoot) {
        console.log('Mounting PlayersSection with data:', teamsData.vernalis);
        const root = createRoot(vernalisRoot);
        root.render(
            <ErrorBoundary>
                <React.StrictMode>
                    <PlayersSection teamData={teamsData.vernalis} />
                </React.StrictMode>
            </ErrorBoundary>
        );
    } else {
        console.error('Could not find players-section-root element');
    }

    // Try to mount Ignite section
    const igniteRoot = document.getElementById('ignite-players-section-root');
    if (igniteRoot) {
        const root = createRoot(igniteRoot);
        root.render(
            <ErrorBoundary>
                <React.StrictMode>
                    <PlayersSection teamData={teamsData.ignite} />
                </React.StrictMode>
            </ErrorBoundary>
        );
    }

    // Try to mount Eclipse section
    const eclipseRoot = document.getElementById('eclipse-players-section-root');
    if (eclipseRoot) {
        const root = createRoot(eclipseRoot);
        root.render(
            <ErrorBoundary>
                <React.StrictMode>
                    <PlayersSection teamData={teamsData.eclipse} />
                </React.StrictMode>
            </ErrorBoundary>
        );
    }

    // Try to mount Aphrodite section
    const aphroditeRoot = document.getElementById('aphrodite-players-section-root');
    if (aphroditeRoot) {
        const root = createRoot(aphroditeRoot);
        root.render(
            <ErrorBoundary>
                <React.StrictMode>
                    <PlayersSection teamData={teamsData.aphrodite} />
                </React.StrictMode>
            </ErrorBoundary>
        );
    }

   // Try to mount reverie section
   const reverieRoot = document.getElementById('reverie-players-section-root');
   if (reverieRoot) {
       const root = createRoot(reverieRoot);
       root.render(
           <ErrorBoundary>
               <React.StrictMode>
                   <PlayersSection teamData={teamsData.reverie} />
               </React.StrictMode>
           </ErrorBoundary>
       );
   }

   // Mount Staff Gallery
   const staffGalleryRoot = document.getElementById('staff-gallery-root');
   if (staffGalleryRoot) {
       const root = createRoot(staffGalleryRoot);
       root.render(
           <ErrorBoundary>
               <React.StrictMode>
                   <StaffGallery />
               </React.StrictMode>
           </ErrorBoundary>
       );
   }

   // Mount Academy Hero
   const academyHeroRoot = document.getElementById('academy-hero-root');
   if (academyHeroRoot) {
       const root = createRoot(academyHeroRoot);
       root.render(
           <ErrorBoundary>
               <React.StrictMode>
                   <AcademyHero />
               </React.StrictMode>
           </ErrorBoundary>
       );
   }

   if (document.getElementById('notable-members-root')) {
       const root = createRoot(document.getElementById('notable-members-root'));
       root.render(<NotableMembers />);
   }

});

