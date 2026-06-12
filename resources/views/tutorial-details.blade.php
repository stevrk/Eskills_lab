@extends('layouts.app')

@section('title', 'Tutorial Details')

@section('content')
@php
    // Map tutorial IDs to YouTube video URLs
    $videos = [
        1 => 'sndbXQN7M98',   // Intravenous Cannulation
        2 => 'n7kqiAu2gC8',    // BLS and CPR
        3 => 'VDngeM2NzPA',    // Wound Dressing
        4 => 'sUTVOx2yn3A',    // Female Catheterization
        5 => '2iLPfCAMgZs',    // Male Catheterization
        6 => 'fwvVdw3tzg0',    // NG Tube Insertion
        7 => 'GoV2p1y6flI',    // Blood Glucose Monitoring
        8 => 'Nc2zl2SeQNo',    // Oxygen Therapy
        9 => 'soR8THwQzBw',    // Blood Pressure
        10 => 'JmfABHbL-HM',   // TPR Assessment
        11 => 'z_-bzatHQlY',   // Head to Toe Assessment
        12 => '2lrLru26gEw',   // Pain Assessment
        13 => '-pkkgBX7OFQ',   // Antenatal Assessment
        14 => '4fszEL_wpD0',   // Newborn Exam
        19 => '90F2ew68K9g',   // Medication Administration
        20 => 'jx9sRYmBW3Q',   // Infection Control
        21 => 'iwvnA_b9Q8Y',   // Hand Hygiene & PPE
        22 => '4C_yXxlVCgg',   // Needlestick Prevention
    ];
    
    $videoId = $videos[$id] ?? 'sndbXQN7M98';
    
    $titles = [
        1 => 'Intravenous Cannulation Procedure',
        2 => 'Basic Life Support (BLS) and CPR',
        3 => 'Wound Dressing and Aseptic Technique',
        4 => 'Female Urinary Catheterization',
        5 => 'Male Urinary Catheterization',
        6 => 'Nasogastric Tube Insertion',
        7 => 'Blood Glucose Monitoring',
        8 => 'Oxygen Therapy Administration',
        9 => 'Blood Pressure Measurement',
        10 => 'Temperature, Pulse & Respiration Assessment',
        11 => 'Head to Toe Physical Assessment',
        12 => 'Pain Assessment in Clinical Settings',
        13 => 'Antenatal Assessment and Abdominal Examination',
        14 => 'Newborn Baby Examination',
        19 => 'Safe Medication Administration',
        20 => 'Infection Prevention and Control',
        21 => 'Hand Hygiene and PPE Donning/Doffing',
        22 => 'Needlestick Injury Prevention and Management',
    ];
    
    $lecturers = [
        1 => 'Dr. Sarah Mwale',
        2 => 'Prof. James Banda',
        3 => 'Dr. Mary Phiri',
        4 => 'Prof. Peter Zulu',
        5 => 'Dr. Grace Moyo',
        6 => 'Prof. Lucy Chanda',
        7 => 'Dr. Sarah Mwale',
        8 => 'Prof. James Banda',
        9 => 'Dr. Mary Phiri',
        10 => 'Prof. Peter Zulu',
        11 => 'Dr. Grace Moyo',
        12 => 'Prof. Lucy Chanda',
        13 => 'Dr. Sarah Mwale',
        14 => 'Prof. James Banda',
        19 => 'Dr. Mary Phiri',
        20 => 'Prof. Peter Zulu',
        21 => 'Dr. Grace Moyo',
        22 => 'Prof. Lucy Chanda',
    ];
    
    $durations = [
        1 => '12:34',
        2 => '15:20',
        3 => '18:45',
        4 => '14:30',
        5 => '13:45',
        6 => '16:20',
        7 => '08:30',
        8 => '11:15',
        9 => '09:45',
        10 => '10:30',
        11 => '22:15',
        12 => '05:00',
        13 => '19:30',
        14 => '17:45',
        19 => '14:20',
        20 => '12:30',
        21 => '11:45',
        22 => '09:30',
    ];
    
    $title = $titles[$id] ?? 'Clinical Procedure Tutorial';
    $lecturer = $lecturers[$id] ?? 'Clinical Educator';
    $duration = $durations[$id] ?? '15:00';
@endphp

<div class="fade-in max-w-4xl mx-auto">
    <div class="mb-4">
        <a href="{{ url('/tutorials') }}" class="text-red-600 hover:text-red-700 flex items-center space-x-2">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            <span>Back to Tutorials</span>
        </a>
    </div>
    
    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="aspect-w-16 aspect-h-9 bg-black">
            <iframe class="w-full aspect-video" 
                    src="https://www.youtube.com/embed/{{ $videoId }}?modestbranding=1&rel=0&showinfo=0&controls=1&color=white" 
                    title="{{ $title }}" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
            </iframe>
        </div>
        
        <div class="p-6">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">{{ $title }}</h1>
            
            <div class="flex items-center space-x-6 mb-6 pb-6 border-b border-gray-200">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span class="text-gray-600">{{ $lecturer }}</span>
                </div>
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-gray-600">{{ $duration }} minutes</span>
                </div>
            </div>
            
            <div class="space-y-6">
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-3">Description</h2>
                    <p class="text-gray-600 leading-relaxed">This comprehensive tutorial demonstrates the proper technique for {{ strtolower($title) }}, including step-by-step instructions, clinical tips, and best practices for nursing and midwifery students at St John of God University.</p>
                </div>
                
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-3">Learning Objectives</h2>
                    <ul class="space-y-2">
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-red-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-600">Understand the clinical indications and contraindications</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-red-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-600">Demonstrate proper aseptic technique throughout the procedure</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-red-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-600">Identify potential complications and their appropriate management</span>
                        </li>
                        <li class="flex items-start space-x-2">
                            <svg class="w-5 h-5 text-red-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-600">Apply evidence-based practice guidelines in clinical settings</span>
                        </li>
                    </ul>
                </div>
                
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-3">Required Equipment</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-3">
                        @php
                            $equipment = ['Personal Protective Equipment (PPE)', 'Sterile Gloves', 'Antiseptic Solution', 'Sterile Dressing', 'Medical Tape', 'Patient Records', 'Waste Disposal', 'Procedure Light'];
                        @endphp
                        @foreach($equipment as $item)
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span class="text-gray-600 text-sm">{{ $item }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-3">Procedure Steps</h2>
                    <ol class="space-y-3 list-decimal list-inside">
                        <li class="text-gray-600">Verify patient identity and explain the procedure thoroughly</li>
                        <li class="text-gray-600">Perform hand hygiene and prepare necessary equipment</li>
                        <li class="text-gray-600">Position patient appropriately for optimal access and comfort</li>
                        <li class="text-gray-600">Apply strict aseptic technique throughout the procedure</li>
                        <li class="text-gray-600">Execute the clinical procedure following best practice guidelines</li>
                        <li class="text-gray-600">Monitor patient response and ensure comfort throughout</li>
                        <li class="text-gray-600">Document procedure details and findings accurately</li>
                        <li class="text-gray-600">Provide patient education and schedule follow-up care as needed</li>
                    </ol>
                </div>
                
                <div>
                    <h2 class="text-xl font-bold text-gray-800 mb-3">Suggested Reading</h2>
                    <ul class="space-y-2">
                        <li class="text-red-600 hover:text-red-700 cursor-pointer">Nursing Procedure Manual - Current Edition (Chapter on {{ strtolower(substr($title, 0, 30)) }}...)</li>
                        <li class="text-red-600 hover:text-red-700 cursor-pointer">Clinical Skills Guidelines for Nursing and Midwifery Practice</li>
                        <li class="text-red-600 hover:text-red-700 cursor-pointer">WHO Guidelines for Infection Prevention and Control in Healthcare</li>
                        <li class="text-red-600 hover:text-red-700 cursor-pointer">SJOGU Clinical Skills Laboratory Reference Manual</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!--<div class="mt-8">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Related Tutorials</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @php
                $relatedTutorials = [
                    ['id' => 2, 'title' => 'Basic Life Support (BLS)', 'url' => 'n7kqiAu2gC8', 'duration' => '15:20'],
                    ['id' => 20, 'title' => 'Infection Prevention & Control', 'url' => 'jx9sRYmBW3Q', 'duration' => '12:30'],
                    ['id' => 11, 'title' => 'Head to Toe Assessment', 'url' => 'z_-bzatHQlY', 'duration' => '22:15'],
                ];
            @endphp
            
            @foreach($relatedTutorials as $related)
            <a href="{{ url('/tutorial/'.$related['id']) }}" class="bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden card-hover block">
                <img src="https://img.youtube.com/vi/{{ $related['url'] }}/mqdefault.jpg" 
                     alt="{{ $related['title'] }}"
                     class="w-full h-32 object-cover">
                <div class="p-3">
                    <h3 class="font-semibold text-gray-800 text-sm mb-1">{{ $related['title'] }}</h3>
                    <p class="text-xs text-gray-500">⏱️ {{ $related['duration'] }}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>-->
</div>
@endsection