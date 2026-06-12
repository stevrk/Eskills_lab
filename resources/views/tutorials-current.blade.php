@extends('layouts.app')

@section('title', 'Current Semester Tutorials')

@section('content')
<div class="fade-in">
    <div class="mb-6">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Year 3 - Semester 1 Procedures</h1>
                <p class="text-gray-600">These are the clinical procedures you need to learn this semester according to your program plan.</p>
            </div>
            <div class="mt-4 md:mt-0">
                <div class="bg-green-50 border border-green-200 rounded-lg px-4 py-2">
                    <p class="text-sm text-green-700 flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Current Semester Requirements
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Progress Summary for Current Semester -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-4 mb-6">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-600">Semester Progress</p>
                <p class="text-2xl font-bold text-gray-800">6/12 <span class="text-sm font-normal text-gray-500">procedures completed</span></p>
            </div>
            <div class="w-32">
                <div class="w-full bg-gray-200 rounded-full h-2">
                    <div class="bg-red-600 h-2 rounded-full" style="width: 50%"></div>
                </div>
                <p class="text-xs text-gray-500 mt-1 text-center">50% complete</p>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
            $currentSemesterTutorials = [
                ['id' => 1, 'title' => 'Intravenous Cannulation Procedure', 'lecturer' => 'Dr. Sarah Mwale', 'duration' => '12:34', 'category' => 'Clinical Procedures', 'required' => true, 'completed' => true, 'url' => 'sndbXQN7M98'],
                ['id' => 2, 'title' => 'Basic Life Support (BLS) and CPR', 'lecturer' => 'Prof. James Banda', 'duration' => '15:20', 'category' => 'Emergency Care', 'required' => true, 'completed' => true, 'url' => 'n7kqiAu2gC8'],
                ['id' => 3, 'title' => 'Wound Dressing and Aseptic Technique', 'lecturer' => 'Dr. Mary Phiri', 'duration' => '18:45', 'category' => 'Wound Care', 'required' => true, 'completed' => true, 'url' => 'VDngeM2NzPA'],
                ['id' => 4, 'title' => 'Female Urinary Catheterization', 'lecturer' => 'Prof. Peter Zulu', 'duration' => '14:30', 'category' => 'Clinical Procedures', 'required' => true, 'completed' => true, 'url' => 'sUTVOx2yn3A'],
                ['id' => 5, 'title' => 'Male Urinary Catheterization', 'lecturer' => 'Dr. Grace Moyo', 'duration' => '13:45', 'category' => 'Clinical Procedures', 'required' => true, 'completed' => true, 'url' => '2iLPfCAMgZs'],
                ['id' => 6, 'title' => 'Nasogastric Tube Insertion', 'lecturer' => 'Prof. Lucy Chanda', 'duration' => '16:20', 'category' => 'Clinical Procedures', 'required' => true, 'completed' => true, 'url' => 'fwvVdw3tzg0'],
                ['id' => 7, 'title' => 'Blood Glucose Monitoring', 'lecturer' => 'Dr. Sarah Mwale', 'duration' => '08:30', 'category' => 'Assessment', 'required' => true, 'completed' => false, 'url' => 'GoV2p1y6flI'],
                ['id' => 8, 'title' => 'Oxygen Therapy Administration', 'lecturer' => 'Prof. James Banda', 'duration' => '11:15', 'category' => 'Respiratory Care', 'required' => true, 'completed' => false, 'url' => 'Nc2zl2SeQNo'],
                ['id' => 9, 'title' => 'Blood Pressure Measurement', 'lecturer' => 'Dr. Mary Phiri', 'duration' => '09:45', 'category' => 'Vital Signs', 'required' => true, 'completed' => false, 'url' => 'soR8THwQzBw'],
                ['id' => 10, 'title' => 'Temperature, Pulse & Respiration Assessment', 'lecturer' => 'Prof. Peter Zulu', 'duration' => '10:30', 'category' => 'Vital Signs', 'required' => true, 'completed' => false, 'url' => 'JmfABHbL-HM'],
                ['id' => 11, 'title' => 'Head to Toe Physical Assessment', 'lecturer' => 'Dr. Grace Moyo', 'duration' => '22:15', 'category' => 'Assessment', 'required' => true, 'completed' => false, 'url' => 'z_-bzatHQlY'],
                ['id' => 12, 'title' => 'Infection Prevention and Control', 'lecturer' => 'Prof. Lucy Chanda', 'duration' => '12:30', 'category' => 'Safety', 'required' => true, 'completed' => false, 'url' => 'jx9sRYmBW3Q'],
            ];
        @endphp
        
        @foreach($currentSemesterTutorials as $tutorial)
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden card-hover">
            <div class="relative">
                <img src="https://img.youtube.com/vi/{{ $tutorial['url'] }}/mqdefault.jpg" 
                     alt="{{ $tutorial['title'] }}"
                     class="w-full h-48 object-cover">
                
                @if($tutorial['completed'])
                <div class="absolute top-2 left-2 bg-green-500 text-white text-xs px-2 py-1 rounded-full flex items-center">
                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                    </svg>
                    Completed
                </div>
                @else
                <div class="absolute top-2 left-2 bg-orange-500 text-white text-xs px-2 py-1 rounded-full">
                    Pending
                </div>
                @endif
                
                <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                    <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center transform hover:scale-110 transition-transform">
                        <svg class="w-8 h-8 text-white ml-1" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M8 5v14l11-7z"/>
                        </svg>
                    </div>
                </div>
                
                <div class="absolute bottom-2 right-2 bg-black bg-opacity-75 text-white text-xs px-2 py-1 rounded">
                    {{ $tutorial['duration'] }}
                </div>
            </div>
            <div class="p-4">
                <div class="flex items-center justify-between mb-2">
                    <span class="inline-block px-2 py-1 bg-red-100 text-red-600 text-xs font-medium rounded">
                        Required
                    </span>
                    <span class="inline-block px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded">
                        {{ $tutorial['category'] }}
                    </span>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2 line-clamp-2">{{ $tutorial['title'] }}</h3>
                <p class="text-sm text-gray-600 mb-3">👨‍🏫 {{ $tutorial['lecturer'] }}</p>
                
                @if($tutorial['completed'])
                <a href="{{ url('/tutorial/'.$tutorial['id']) }}" class="inline-block w-full text-center bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium py-2 rounded-lg transition-colors">
                    Review Tutorial
                </a>
                @else
                <a href="{{ url('/tutorial/'.$tutorial['id']) }}" class="inline-block w-full text-center bg-red-600 hover:bg-red-700 text-white font-medium py-2 rounded-lg transition-colors">
                    Start Learning
                </a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- Required Readings for Semester -->
    <div class="mt-8 bg-blue-50 rounded-xl p-6 border border-blue-200">
        <h3 class="font-bold text-gray-800 mb-3 flex items-center">
            <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
            Required Readings & Materials
        </h3>
        <ul class="space-y-2">
            <li class="flex items-center justify-between">
                <span class="text-sm text-gray-700">Nursing Procedure Manual (Chapters 4-6)</span>
                <button class="text-blue-600 text-sm">Download PDF →</button>
            </li>
            <li class="flex items-center justify-between">
                <span class="text-sm text-gray-700">Clinical Skills Checklist - Semester 1</span>
                <button class="text-blue-600 text-sm">Download PDF →</button>
            </li>
            <li class="flex items-center justify-between">
                <span class="text-sm text-gray-700">Infection Prevention Guidelines</span>
                <button class="text-blue-600 text-sm">Download PDF →</button>
            </li>
        </ul>
    </div>
</div>
@endsection