import React, { useState, useEffect } from 'react';

const NotableMembers = () => {
    // Sample data - replace with your actual member data
    const members = [
        {
            id: 1,
            name: "Azuko Kaede",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 2,
            name: "Oxxy Sylvester",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 3,
            name: "Zyrra Alvarez",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 4,
            name: "Fafayouw",
            role: "ID Valorant Player",
            position: "Academy Student"
        },
        {
            id: 5,
            name: "Kurayami Reiz",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 6,
            name: "Kirenn Karilya",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 7,
            name: "Yumekawa Haruki",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 8,
            name: "Peorinpie",
            role: "Illustrator & Streamer",
            position: "Academy Student"
        },
        {
            id: 9,
            name: "Kouhei Yamagata",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 10,
            name: "Tetsuya Voaldigoad",
            role: "Indie Vtuber",
            position: "VIOR Team"
        },
        {
            id: 11,
            name: "Nesara Scarlett",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 12,
            name: "Yuyogo Elio",
            role: "Indie Vtuber",
            position: "VIOR Team"
        },
        {
            id: 13,
            name: "Oceanne Reid",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 14,
            name: "Axel Zeed",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 15,
            name: "Elana Clountysia",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 16,
            name: "Zara Azura",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 17,
            name: "StevenS",
            role: "ID Valorant Player",
            position: "Academy Student"
        },
        {
            id: 18,
            name: "Ryoki Nekonial",
            role: "DIG Vtuber",
            position: "Academy Student"
        },
        {
            id: 19,
            name: "Kisaragi Made",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 20,
            name: "Ichigatsu Ailurus",
            role: "MoonEclipse Vtuber",
            position: "Academy Student"
        },
        {
            id: 21,
            name: "Migo Haswell",
            role: "Yorukaze Production Vtuber",
            position: "Academy Student"
        },
        {
            id: 22,
            name: "SwiftyGe",
            role: "Indie Vtuber",
            position: "Academy Student"
        },
        {
            id: 23,
            name: "Nakauji",
            role: "Indie Vtuber / Yorukaze Studio Rigger",
            position: "Academy Student"
        },
        {
            id: 24,
            name: "Cielaria",
            role: "Indie Vtuber",
            position: "VIOR Team"
        }
    ];

    const [currentPage, setCurrentPage] = useState(0);
    const membersPerPage = 8;
    const totalPages = Math.ceil(members.length / membersPerPage);

    // Add useEffect to set up event listeners
    useEffect(() => {
        const prevButton = document.getElementById('prevPage');
        const nextButton = document.getElementById('nextPage');

        if (prevButton) {
            prevButton.addEventListener('click', () => {
                setCurrentPage((prev) => (prev - 1 + totalPages) % totalPages);
            });
        }

        if (nextButton) {
            nextButton.addEventListener('click', () => {
                setCurrentPage((prev) => (prev + 1) % totalPages);
            });
        }

        // Cleanup
        return () => {
            prevButton?.removeEventListener('click', () => {});
            nextButton?.removeEventListener('click', () => {});
        };
    }, [totalPages]);

    const currentMembers = members.slice(
        currentPage * membersPerPage,
        (currentPage + 1) * membersPerPage
    );

    return (
        <div className="container mx-auto px-4 py-12">
            {/* Section Header */}
            <div className="text-center mb-16">
                <h2 className="text-4xl md:text-5xl font-bold text-[#FEE66C] mb-4 font-['Orbitron']">
                    Notable Members
                </h2>
                <p className="text-[#69B3E3] text-lg max-w-2xl mx-auto">
                    Meet our hardworking members
                </p>
            </div>

            {/* Members Grid */}
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                {currentMembers.map((member) => (
                    <div 
                        key={member.id}
                        className="bg-[#162F5A] p-6 rounded-xl border border-[#69B3E3]/20 shadow-[0_0_15px_rgba(254,230,108,0.3)]"
                    >
                        <h3 className="text-xl font-bold text-[#FEE66C] mb-2 font-['Orbitron']">
                            {member.name}
                        </h3>
                        <p className="text-[#69B3E3] font-['Rajdhani']">{member.role}</p>
                        <p className="text-[#CBCBCB] font-['Rajdhani']">{member.position}</p>
                    </div>
                ))}
            </div>
        </div>
    );
};

export default NotableMembers; 