@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="fade-in max-w-4xl mx-auto">
    <div class="bg-white rounded-xl shadow-sm overflow-hidden">
        <div class="bg-gradient-to-r from-red-600 to-red-700 p-8 text-white">
            <div class="flex items-center space-x-4">
                <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center text-red-600 text-3xl font-bold">
                    JP
                </div>
                <div>
                    <h1 class="text-2xl font-bold">John Phiri</h1>
                    <p class="text-red-100">Bachelor of Science in Nursing and Midwifery - Year 3</p>
                </div>
            </div>
        </div>
        
        <div class="p-6">
            <div class="grid md:grid-cols-2 gap-6">
                <div>
                    <h2 class="text-lg font-bold text-gray-800 mb-4 pb-2 border-b border-gray-200">Personal Information</h2>
                    <div class="space-y-3">
                        <div>
                            <label class="text-sm text-gray-500">Full Name</label>
                            <p class="text-gray-800 font-medium">John Phiri</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500">Student Number</label>
                            <p class="text-gray-800 font-medium">DEMO2026/001</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500">Email Address</label>
                            <p class="text-gray-800 font-medium">john.phiri@sjogu.demo</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500">Program</label>
                            <p class="text-gray-800 font-medium">Bachelor of Science in Nursing and Midwifery</p>
                        </div>
                        <div>
                            <label class="text-sm text-gray-500">Year of Study</label>
                            <p class="text-gray-800 font-medium">Year 3</p>
                        </div>
                    </div>
                </div>
                
                <div>
                    <h2 class="text-lg font-bold text-gray-800 mb-4 pb-2 border-b border-gray-200">Account Statistics</h2>
                    <div class="space-y-4">
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z"></path>
                                    </svg>
                                    <span class="text-gray-600">Bookmarked Tutorials</span>
                                </div>
                                <span class="font-bold text-gray-800">8</span>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                                    </svg>
                                    <span class="text-gray-600">Downloaded Resources</span>
                                </div>
                                <span class="font-bold text-gray-800">15</span>
                            </div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                                    </svg>
                                    <span class="text-gray-600">Completed Tutorials</span>
                                </div>
                                <span class="font-bold text-gray-800">24</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 pt-6 border-t border-gray-200">
                <h2 class="text-lg font-bold text-gray-800 mb-4">Saved Bookmarks</h2>
                <div class="space-y-3">
                    @php
                        $bookmarks = [
                            'Intravenous Cannulation Procedure',
                            'Basic Life Support (BLS)',
                            'Infection Prevention Guidelines'
                        ];
                    @endphp
                    @foreach($bookmarks as $bookmark)
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
                        <span class="text-gray-700">{{ $bookmark }}</span>
                        <button class="text-red-600 hover:text-red-700 text-sm">View</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection