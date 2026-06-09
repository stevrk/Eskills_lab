@extends('layouts.app')

@section('title', 'Video Tutorials')

@section('content')
<div class="fade-in">
    <div class="mb-6">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Video Tutorials</h1>
        <p class="text-gray-600">Watch step-by-step clinical procedure demonstrations</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
            $tutorials = [
                ['id' => 1, 'title' => 'Intravenous Cannulation Procedure', 'lecturer' => 'Dr. Sarah Mwale', 'duration' => '12:34', 'category' => 'Clinical Procedures', 'url' => 'sndbXQN7M98'],
                ['id' => 2, 'title' => 'Basic Life Support (BLS) and CPR', 'lecturer' => 'Prof. James Banda', 'duration' => '15:20', 'category' => 'Emergency Care', 'url' => 'n7kqiAu2gC8'],
                ['id' => 3, 'title' => 'Wound Dressing and Aseptic Technique', 'lecturer' => 'Dr. Mary Phiri', 'duration' => '18:45', 'category' => 'Wound Care', 'url' => 'VDngeM2NzPA'],
                ['id' => 4, 'title' => 'Female Urinary Catheterization', 'lecturer' => 'Prof. Peter Zulu', 'duration' => '14:30', 'category' => 'Clinical Procedures', 'url' => 'sUTVOx2yn3A'],
                ['id' => 5, 'title' => 'Male Urinary Catheterization', 'lecturer' => 'Dr. Grace Moyo', 'duration' => '13:45', 'category' => 'Clinical Procedures', 'url' => '2iLPfCAMgZs'],
                ['id' => 6, 'title' => 'Nasogastric Tube Insertion', 'lecturer' => 'Prof. Lucy Chanda', 'duration' => '16:20', 'category' => 'Clinical Procedures', 'url' => 'fwvVdw3tzg0'],
                ['id' => 7, 'title' => 'Blood Glucose Monitoring', 'lecturer' => 'Dr. Sarah Mwale', 'duration' => '08:30', 'category' => 'Assessment', 'url' => 'GoV2p1y6flI'],
                ['id' => 8, 'title' => 'Oxygen Therapy Administration', 'lecturer' => 'Prof. James Banda', 'duration' => '11:15', 'category' => 'Respiratory Care', 'url' => 'Nc2zl2SeQNo'],
                ['id' => 9, 'title' => 'Blood Pressure Measurement', 'lecturer' => 'Dr. Mary Phiri', 'duration' => '09:45', 'category' => 'Vital Signs', 'url' => 'soR8THwQzBw'],
                ['id' => 10, 'title' => 'Temperature, Pulse & Respiration Assessment', 'lecturer' => 'Prof. Peter Zulu', 'duration' => '10:30', 'category' => 'Vital Signs', 'url' => 'JmfABHbL-HM'],
                ['id' => 11, 'title' => 'Head to Toe Physical Assessment', 'lecturer' => 'Dr. Grace Moyo', 'duration' => '22:15', 'category' => 'Assessment', 'url' => 'z_-bzatHQlY'],
                ['id' => 12, 'title' => 'Pain Assessment in Clinical Settings', 'lecturer' => 'Prof. Lucy Chanda', 'duration' => '05:00', 'category' => 'Assessment', 'url' => '2lrLru26gEw'],
                ['id' => 13, 'title' => 'Antenatal Assessment & Abdominal Examination', 'lecturer' => 'Dr. Sarah Mwale', 'duration' => '19:30', 'category' => 'Maternal Health', 'url' => '-pkkgBX7OFQ'],
                ['id' => 14, 'title' => 'Newborn Baby Examination', 'lecturer' => 'Prof. James Banda', 'duration' => '17:45', 'category' => 'Pediatrics', 'url' => '4fszEL_wpD0'],
                ['id' => 19, 'title' => 'Safe Medication Administration', 'lecturer' => 'Dr. Mary Phiri', 'duration' => '14:20', 'category' => 'Pharmacology', 'url' => '90F2ew68K9g'],
                ['id' => 20, 'title' => 'Infection Prevention and Control', 'lecturer' => 'Prof. Peter Zulu', 'duration' => '12:30', 'category' => 'Safety', 'url' => 'jx9sRYmBW3Q'],
                ['id' => 21, 'title' => 'Hand Hygiene and PPE Donning/Doffing', 'lecturer' => 'Dr. Grace Moyo', 'duration' => '11:45', 'category' => 'Safety', 'url' => 'iwvnA_b9Q8Y'],
                ['id' => 22, 'title' => 'Needlestick Injury Prevention', 'lecturer' => 'Prof. Lucy Chanda', 'duration' => '09:30', 'category' => 'Safety', 'url' => '4C_yXxlVCgg'],
            ];
        @endphp
        
        @foreach($tutorials as $tutorial)
        <a href="{{ url('/tutorial/'.$tutorial['id']) }}" class="block">
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden card-hover">
                <div class="relative">
                    <!-- Real YouTube Thumbnail -->
                    <img src="https://img.youtube.com/vi/{{ $tutorial['url'] }}/mqdefault.jpg" 
                         alt="{{ $tutorial['title'] }}"
                         class="w-full h-48 object-cover"
                         loading="lazy">
                    
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
                        {{ $tutorial['duration'] }}
                    </div>
                </div>
                <div class="p-4">
                    <span class="inline-block px-2 py-1 bg-red-100 text-red-600 text-xs font-medium rounded mb-2">{{ $tutorial['category'] }}</span>
                    <h3 class="font-semibold text-gray-800 mb-2 line-clamp-2">{{ $tutorial['title'] }}</h3>
                    <p class="text-sm text-gray-600 mb-1">👨‍🏫 {{ $tutorial['lecturer'] }}</p>
                    <div class="flex items-center justify-between mt-3">
                        <div class="flex items-center space-x-1 text-xs text-gray-500">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>{{ $tutorial['duration'] }}</span>
                        </div>
                        <span class="text-red-600 text-sm font-medium">Watch →</span>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endsection