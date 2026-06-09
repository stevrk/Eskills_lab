@extends('layouts.app')

@section('title', 'Documents Library')

@section('content')
<div class="fade-in">
    <div class="mb-6">
        <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-2">Document Library</h1>
        <p class="text-gray-600">Download learning materials and procedure manuals</p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @php
            $documents = [
                ['title' => 'Nursing Procedure Manual', 'description' => 'Comprehensive guide to essential nursing procedures and clinical skills', 'size' => '4.2 MB', 'icon' => '📘'],
                ['title' => 'Infection Prevention Guide', 'description' => 'Standard precautions and infection control protocols', 'size' => '2.1 MB', 'icon' => '📙'],
                ['title' => 'Maternal Health Handbook', 'description' => 'Antenatal and postnatal care guidelines', 'size' => '3.5 MB', 'icon' => '📕'],
                ['title' => 'Clinical Skills Checklist', 'description' => 'Competency assessment checklist for nursing students', 'size' => '1.8 MB', 'icon' => '📗'],
                ['title' => 'Emergency Care Protocols', 'description' => 'Quick reference guide for emergency situations', 'size' => '2.9 MB', 'icon' => '📔'],
                ['title' => 'Pharmacology Reference', 'description' => 'Common medications and administration guidelines', 'size' => '5.1 MB', 'icon' => '📒'],
            ];
        @endphp
        
        @foreach($documents as $doc)
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 card-hover">
            <div class="flex items-start space-x-4">
                <div class="text-5xl">{{ $doc['icon'] }}</div>
                <div class="flex-1">
                    <h3 class="font-semibold text-gray-800 mb-2">{{ $doc['title'] }}</h3>
                    <p class="text-sm text-gray-600 mb-3">{{ $doc['description'] }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs text-gray-500">{{ $doc['size'] }}</span>
                        <button class="flex items-center space-x-2 bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg transition-colors text-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                            </svg>
                            <span>Download PDF</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection