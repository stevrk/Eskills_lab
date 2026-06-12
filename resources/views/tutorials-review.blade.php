@extends('layouts.app')

@section('title', 'Review Previous Years')

@section('content')
<div class="fade-in">
    <div class="mb-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Review Previous Years</h1>
                <p class="text-gray-600">Reinforce your clinical skills by reviewing tutorials from past years.</p>
            </div>
            
            <!-- Year and Semester Filters -->
            <div class="mt-4 md:mt-0 flex space-x-2">
                <select id="yearFilter" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 bg-white text-gray-700 text-sm">
                    <option value="2">Year 2</option>
                    <option value="1">Year 1</option>
                </select>
                
                <select id="semesterFilter" class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 bg-white text-gray-700 text-sm">
                    <option value="all">All Semesters</option>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                </select>
            </div>
        </div>
    </div>
    
    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-6">
        <div class="flex items-start space-x-3">
            <svg class="w-5 h-5 text-blue-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <div>
                <p class="text-sm text-blue-800 font-medium">Reviewing past tutorials helps reinforce clinical knowledge</p>
                <p class="text-xs text-blue-600 mt-1">Access all tutorials from previous years to refresh your skills and prepare for clinical rotations.</p>
            </div>
        </div>
    </div>
    
    <div id="tutorialsContainer" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Tutorials will be populated here via JavaScript -->
        <div class="text-center py-12 col-span-full">
            <div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-red-600"></div>
            <p class="text-gray-500 mt-2">Loading tutorials...</p>
        </div>
    </div>
</div>

<script>
    // Tutorials database
    const tutorialsData = {
        2: { // Year 2
            1: [ // Semester 1
                { id: 101, title: 'Patient Assessment Fundamentals', lecturer: 'Dr. Grace Moyo', duration: '18:20', category: 'Assessment', url: 'JmfABHbL-HM' },
                { id: 102, title: 'Medical Record Documentation', lecturer: 'Prof. Peter Zulu', duration: '14:15', category: 'Documentation', url: 'z_-bzatHQlY' },
                { id: 103, title: 'Introduction to Pharmacology', lecturer: 'Dr. Sarah Mwale', duration: '20:30', category: 'Pharmacology', url: '90F2ew68K9g' },
            ],
            2: [ // Semester 2
                { id: 104, title: 'Patient Positioning Techniques', lecturer: 'Dr. Sarah Mwale', duration: '11:30', category: 'Patient Care', url: 'soR8THwQzBw' },
                { id: 105, title: 'Specimen Collection', lecturer: 'Prof. James Banda', duration: '16:45', category: 'Laboratory', url: 'GoV2p1y6flI' },
                { id: 106, title: 'Oxygen Therapy Basics', lecturer: 'Dr. Mary Phiri', duration: '11:15', category: 'Respiratory Care', url: 'Nc2zl2SeQNo' },
            ]
        },
        1: { // Year 1
            1: [ // Semester 1
                { id: 201, title: 'Introduction to Clinical Skills', lecturer: 'Prof. Lucy Chanda', duration: '20:15', category: 'Foundation', url: 'sndbXQN7M98' },
                { id: 202, title: 'Hand Hygiene Techniques', lecturer: 'Dr. Grace Moyo', duration: '08:45', category: 'Safety', url: 'iwvnA_b9Q8Y' },
                { id: 203, title: 'Basic First Aid', lecturer: 'Prof. Peter Zulu', duration: '22:30', category: 'Emergency Care', url: 'n7kqiAu2gC8' },
            ],
            2: [ // Semester 2
                { id: 204, title: 'Communication in Healthcare', lecturer: 'Dr. Sarah Mwale', duration: '15:40', category: 'Professional Skills', url: 'JmfABHbL-HM' },
                { id: 205, title: 'Vital Signs Basics', lecturer: 'Prof. James Banda', duration: '12:20', category: 'Assessment', url: 'soR8THwQzBw' },
                { id: 206, title: 'Patient Safety Protocols', lecturer: 'Dr. Mary Phiri', duration: '18:15', category: 'Safety', url: 'jx9sRYmBW3Q' },
            ]
        }
    };
    
    function loadTutorials() {
        const year = document.getElementById('yearFilter').value;
        const semester = document.getElementById('semesterFilter').value;
        
        let tutorials = [];
        
        if (semester === 'all') {
            // Combine both semesters
            tutorials = [...(tutorialsData[year][1] || []), ...(tutorialsData[year][2] || [])];
        } else {
            tutorials = tutorialsData[year][semester] || [];
        }
        
        displayTutorials(tutorials, year, semester);
    }
    
    function displayTutorials(tutorials, year, semester) {
        const container = document.getElementById('tutorialsContainer');
        
        if (tutorials.length === 0) {
            container.innerHTML = `
                <div class="text-center py-12 col-span-full">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="text-gray-500">No tutorials found for this selection.</p>
                </div>
            `;
            return;
        }
        
        const semesterText = semester === 'all' ? 'All Semesters' : `Semester ${semester}`;
        
        container.innerHTML = `
            <div class="col-span-full mb-2">
                <h2 class="text-lg font-semibold text-gray-800">Year ${year} - ${semesterText}</h2>
                <p class="text-sm text-gray-500">Reviewing past clinical procedures</p>
            </div>
            ${tutorials.map(tutorial => `
                <a href="/tutorial/${tutorial.id}" class="block">
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden card-hover">
                        <div class="relative">
                            <img src="https://img.youtube.com/vi/${tutorial.url}/mqdefault.jpg" 
                                 alt="${tutorial.title}"
                                 class="w-full h-48 object-cover">
                            <div class="absolute top-2 left-2 bg-purple-500 text-white text-xs px-2 py-1 rounded-full">
                                Review
                            </div>
                            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center transform hover:scale-110 transition-transform">
                                    <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M8 5v14l11-7z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="absolute bottom-2 right-2 bg-black bg-opacity-75 text-white text-xs px-2 py-1 rounded">
                                ${tutorial.duration}
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between mb-2">
                                <span class="inline-block px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">
                                    ${tutorial.category}
                                </span>
                            </div>
                            <h3 class="font-semibold text-gray-800 mb-2 line-clamp-2">${tutorial.title}</h3>
                            <p class="text-sm text-gray-600 mb-1">👨‍🏫 ${tutorial.lecturer}</p>
                            <div class="flex items-center justify-between mt-3">
                                <div class="flex items-center space-x-1 text-xs text-gray-500">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>${tutorial.duration}</span>
                                </div>
                                <span class="text-red-600 text-sm font-medium">Review →</span>
                            </div>
                        </div>
                    </div>
                </a>
            `).join('')}
        `;
    }
    
    // Event listeners
    document.getElementById('yearFilter').addEventListener('change', loadTutorials);
    document.getElementById('semesterFilter').addEventListener('change', loadTutorials);
    
    // Initial load
    loadTutorials();
</script>
@endsection