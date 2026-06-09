@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="fade-in">
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Welcome Back, John Phiri</h1>
        <p class="text-gray-600">Continue building your clinical competence through practical learning resources.</p>
    </div>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        @php
            $stats = [
                ['label' => 'Procedures', 'value' => '24', 'color' => 'red', 'icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2'],
                ['label' => 'Video Tutorials', 'value' => '18', 'color' => 'blue', 'icon' => 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z'],
                ['label' => 'PDF Documents', 'value' => '32', 'color' => 'green', 'icon' => 'M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z'],
                ['label' => 'Clinical Guidelines', 'value' => '12', 'color' => 'purple', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z']
            ];
        @endphp
        
        @foreach($stats as $stat)
        <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500 text-sm">{{ $stat['label'] }}</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $stat['value'] }}</p>
                </div>
                <div class="w-10 h-10 bg-{{ $stat['color'] }}-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-{{ $stat['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"></path>
                    </svg>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-800">Year 3 Nursing & Midwifery Procedures</h2>
            <a href="{{ url('/tutorials') }}" class="text-red-600 hover:text-red-700 text-sm font-medium">View all →</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $procedures = [
                    ['id' => 1, 'title' => 'Intravenous Cannulation', 'lecturer' => 'Dr. Sarah Mwale', 'duration' => '12:34', 'url' => 'sndbXQN7M98'],
                    ['id' => 3, 'title' => 'Wound Dressing and Aseptic Technique', 'lecturer' => 'Dr. Mary Phiri', 'duration' => '18:45', 'url' => 'VDngeM2NzPA'],
                    ['id' => 4, 'title' => 'Female Urinary Catheterization', 'lecturer' => 'Prof. Peter Zulu', 'duration' => '14:30', 'url' => 'sUTVOx2yn3A'],
                    ['id' => 19, 'title' => 'Safe Medication Administration', 'lecturer' => 'Dr. Mary Phiri', 'duration' => '14:20', 'url' => '90F2ew68K9g'],
                    ['id' => 9, 'title' => 'Blood Pressure Measurement', 'lecturer' => 'Dr. Grace Moyo', 'duration' => '09:45', 'url' => 'soR8THwQzBw'],
                    ['id' => 20, 'title' => 'Infection Prevention and Control', 'lecturer' => 'Prof. Peter Zulu', 'duration' => '12:30', 'url' => 'jx9sRYmBW3Q'],
                ];
            @endphp
            
            @foreach($procedures as $procedure)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden card-hover">
                <div class="relative">
                    <img src="https://img.youtube.com/vi/{{ $procedure['url'] }}/mqdefault.jpg" 
                         alt="{{ $procedure['title'] }}"
                         class="w-full h-48 object-cover">
                    
                    <!-- Play button overlay -->
                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                        <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center transform hover:scale-110 transition-transform">
                            <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                        </div>
                    </div>
                    
                    <!-- Duration badge -->
                    <div class="absolute bottom-2 right-2 bg-black bg-opacity-75 text-white text-xs px-2 py-1 rounded">
                        {{ $procedure['duration'] }}
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 mb-2 line-clamp-2">{{ $procedure['title'] }}</h3>
                    <p class="text-sm text-gray-600 mb-3">👨‍🏫 {{ $procedure['lecturer'] }}</p>
                    <a href="{{ url('/tutorial/'.$procedure['id']) }}" class="inline-block w-full text-center bg-red-600 hover:bg-red-700 text-white font-medium py-2 rounded-lg transition-colors">
                        Watch Tutorial
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <!-- Recently Added Section -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-800">Recently Added Tutorials</h2>
            <a href="{{ url('/tutorials') }}" class="text-red-600 hover:text-red-700 text-sm font-medium">Browse all →</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @php
                $recentTutorials = [
                    ['id' => 2, 'title' => 'Basic Life Support (BLS) and CPR', 'lecturer' => 'Prof. James Banda', 'duration' => '15:20', 'url' => 'n7kqiAu2gC8'],
                    ['id' => 13, 'title' => 'Antenatal Assessment', 'lecturer' => 'Dr. Sarah Mwale', 'duration' => '19:30', 'url' => '-pkkgBX7OFQ'],
                    ['id' => 14, 'title' => 'Newborn Baby Examination', 'lecturer' => 'Prof. James Banda', 'duration' => '17:45', 'url' => '4fszEL_wpD0'],
                    ['id' => 21, 'title' => 'Hand Hygiene and PPE Donning/Doffing', 'lecturer' => 'Dr. Grace Moyo', 'duration' => '11:45', 'url' => 'iwvnA_b9Q8Y'],
                ];
            @endphp
            
            @foreach($recentTutorials as $tutorial)
            <a href="{{ url('/tutorial/'.$tutorial['id']) }}" class="block">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden card-hover">
                    <div class="relative">
                        <img src="https://img.youtube.com/vi/{{ $tutorial['url'] }}/mqdefault.jpg" 
                             alt="{{ $tutorial['title'] }}"
                             class="w-full h-32 object-cover">
                        <div class="absolute bottom-1 right-1 bg-black bg-opacity-75 text-white text-xs px-1 py-0.5 rounded">
                            {{ $tutorial['duration'] }}
                        </div>
                    </div>
                    <div class="p-3">
                        <h3 class="font-semibold text-gray-800 text-sm line-clamp-2 mb-1">{{ $tutorial['title'] }}</h3>
                        <p class="text-xs text-gray-500">{{ $tutorial['lecturer'] }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</div>
@endsection