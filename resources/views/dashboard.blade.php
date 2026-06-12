@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="fade-in">
    <!-- Welcome Section -->
    <div class="mb-8">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Welcome Back, John Phiri</h1>
        <p class="text-gray-600">Track your learning progress and continue building clinical competence.</p>
    </div>

    <!-- Quick Stats Cards -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
        @php
            $stats = [
                ['label' => 'Tutorials Watched', 'value' => '18', 'total' => '34', 'color' => 'red', 'icon' => 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z'],
                ['label' => 'Documents Downloaded', 'value' => '12', 'total' => '24', 'color' => 'blue', 'icon' => 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4'],
                ['label' => 'Guidelines Read', 'value' => '8', 'total' => '12', 'color' => 'green', 'icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z'],
                ['label' => 'Learning Hours', 'value' => '42', 'total' => '80', 'color' => 'purple', 'icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'],
            ];
        @endphp
        
        @foreach($stats as $stat)
        <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
            <div class="flex items-center justify-between mb-3">
                <div>
                    <p class="text-gray-500 text-sm">{{ $stat['label'] }}</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $stat['value'] }} <span class="text-sm text-gray-400">/ {{ $stat['total'] }}</span></p>
                </div>
                <div class="w-10 h-10 bg-{{ $stat['color'] }}-100 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-{{ $stat['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $stat['icon'] }}"></path>
                    </svg>
                </div>
            </div>
            <!-- Progress Bar -->
            <div class="w-full bg-gray-200 rounded-full h-2">
                <div class="bg-{{ $stat['color'] }}-600 h-2 rounded-full" style="width: {{ ($stat['value'] / $stat['total']) * 100 }}%"></div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Overall Progress Section -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-8">
        <div class="flex justify-between items-start mb-4">
            <div>
                <h2 class="text-xl font-bold text-gray-800">Your Learning Progress</h2>
                <p class="text-gray-600 text-sm">Track your engagement with clinical skills content</p>
            </div>
            <div class="text-right">
                <span class="text-3xl font-bold text-red-600">53%</span>
                <p class="text-xs text-gray-500">Overall Progress</p>
            </div>
        </div>
        
        <!-- Overall Progress Bar -->
        <div class="w-full bg-gray-200 rounded-full h-4 mb-6">
            <div class="bg-gradient-to-r from-red-500 to-red-600 h-4 rounded-full transition-all duration-500" style="width: 53%"></div>
        </div>
        
        <!-- Category Progress -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @php
                $categories = [
                    ['name' => 'Clinical Procedures', 'progress' => 65, 'color' => 'red', 'watched' => '13/20'],
                    ['name' => 'Vital Signs & Assessment', 'progress' => 75, 'color' => 'blue', 'watched' => '6/8'],
                    ['name' => 'Maternal & Child Health', 'progress' => 40, 'color' => 'green', 'watched' => '2/5'],
                    ['name' => 'Medication & Safety', 'progress' => 50, 'color' => 'yellow', 'watched' => '4/8'],
                    ['name' => 'Emergency Care', 'progress' => 60, 'color' => 'purple', 'watched' => '3/5'],
                    ['name' => 'Documentation', 'progress' => 30, 'color' => 'indigo', 'watched' => '1/3'],
                ];
            @endphp
            
            @foreach($categories as $category)
            <div class="bg-gray-50 rounded-lg p-3">
                <div class="flex justify-between mb-2">
                    <span class="text-sm font-medium text-gray-700">{{ $category['name'] }}</span>
                    <span class="text-xs text-gray-500">{{ $category['watched'] }}</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-{{ $category['color'] }}-500 h-2 rounded-full" style="width: {{ $category['progress'] }}%"></div>
                </div>
                <p class="text-xs text-gray-500 mt-1">{{ $category['progress'] }}% complete</p>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Recently Watched Tutorials -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-800">Continue Learning</h2>
            <a href="{{ url('/tutorials') }}" class="text-red-600 hover:text-red-700 text-sm font-medium">View all tutorials →</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @php
                $recentWatched = [
                    ['id' => 1, 'title' => 'Intravenous Cannulation Procedure', 'watched_at' => '2 hours ago', 'progress' => 100, 'url' => 'sndbXQN7M98', 'duration' => '12:34'],
                    ['id' => 4, 'title' => 'Female Urinary Catheterization', 'watched_at' => 'Yesterday', 'progress' => 85, 'url' => 'sUTVOx2yn3A', 'duration' => '14:30'],
                    ['id' => 20, 'title' => 'Infection Prevention and Control', 'watched_at' => '2 days ago', 'progress' => 60, 'url' => 'jx9sRYmBW3Q', 'duration' => '12:30'],
                ];
            @endphp
            
            @foreach($recentWatched as $tutorial)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden card-hover">
                <div class="relative">
                    <img src="https://img.youtube.com/vi/{{ $tutorial['url'] }}/mqdefault.jpg" 
                         alt="{{ $tutorial['title'] }}"
                         class="w-full h-36 object-cover">
                    <div class="absolute bottom-2 right-2 bg-black bg-opacity-75 text-white text-xs px-2 py-1 rounded">
                        {{ $tutorial['duration'] }}
                    </div>
                </div>
                <div class="p-4">
                    <h3 class="font-semibold text-gray-800 mb-2 line-clamp-2">{{ $tutorial['title'] }}</h3>
                    <p class="text-xs text-gray-500 mb-2">Last watched: {{ $tutorial['watched_at'] }}</p>
                    
                    <!-- Watch Progress -->
                    <div class="mb-3">
                        <div class="flex justify-between text-xs mb-1">
                            <span class="text-gray-600">Progress</span>
                            <span class="text-gray-600">{{ $tutorial['progress'] }}%</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-1.5">
                            <div class="bg-red-600 h-1.5 rounded-full" style="width: {{ $tutorial['progress'] }}%"></div>
                        </div>
                    </div>
                    
                    <div class="flex space-x-2">
                        <a href="{{ url('/tutorial/'.$tutorial['id']) }}" class="flex-1 text-center bg-red-600 hover:bg-red-700 text-white text-sm font-medium py-1.5 rounded-lg transition-colors">
                            Continue Watching
                        </a>
                        <button class="px-3 py-1.5 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Recently Downloaded Documents -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-800">Recent Downloads</h2>
            <a href="{{ url('/documents') }}" class="text-red-600 hover:text-red-700 text-sm font-medium">View all documents →</a>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @php
                $recentDownloads = [
                    ['title' => 'Nursing Procedure Manual', 'description' => 'Complete guide to essential nursing procedures', 'size' => '4.2 MB', 'downloaded_at' => '2 days ago', 'icon' => '📘'],
                    ['title' => 'Infection Prevention Guide', 'description' => 'Standard precautions and infection control', 'size' => '2.1 MB', 'downloaded_at' => '5 days ago', 'icon' => '📙'],
                    ['title' => 'Clinical Skills Checklist', 'description' => 'Competency assessment for nursing students', 'size' => '1.8 MB', 'downloaded_at' => '1 week ago', 'icon' => '📗'],
                    ['title' => 'Emergency Care Protocols', 'description' => 'Quick reference for emergency situations', 'size' => '2.9 MB', 'downloaded_at' => '1 week ago', 'icon' => '📔'],
                ];
            @endphp
            
            @foreach($recentDownloads as $doc)
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 card-hover">
                <div class="flex items-start space-x-3">
                    <div class="text-4xl">{{ $doc['icon'] }}</div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-800">{{ $doc['title'] }}</h3>
                        <p class="text-xs text-gray-500 mt-1">{{ $doc['description'] }}</p>
                        <div class="flex items-center justify-between mt-2">
                            <div class="flex items-center space-x-3">
                                <span class="text-xs text-gray-400">{{ $doc['size'] }}</span>
                                <span class="text-xs text-gray-400">Downloaded: {{ $doc['downloaded_at'] }}</span>
                            </div>
                            <button class="text-red-600 hover:text-red-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection