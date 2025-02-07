import './bootstrap';
import '../css/app.css';
import './animated-background';
import React from 'react';
import { createRoot } from 'react-dom/client';
import PlayersSection from './components/PlayersSection';
import { teamsData } from './data/teamsData';

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
    
    const playersRoot = document.getElementById('players-section-root');
    console.log('Players root element:', playersRoot);
    
    if (playersRoot) {
        console.log('Mounting PlayersSection with data:', teamsData.vernalis);
        const root = createRoot(playersRoot);
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
});

// Comment out or remove this duplicate mounting
// ReactDOM.createRoot(document.getElementById('app')).render(<App />);

// const App = () => {
//     return (
//         <div>
//             <PlayersSection teamData={teamsData.vernalis} />
//         </div>
//     );
// };

// export default App;
