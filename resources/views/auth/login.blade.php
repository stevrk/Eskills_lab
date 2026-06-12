@extends('layouts.guest')

@section('title', 'Login')

@section('content')
<div class="min-h-screen flex items-center justify-center p-4">
    <div class="max-w-6xl w-full slide-up">
        <div class="grid md:grid-cols-2 gap-8 bg-white rounded-2xl shadow-2xl overflow-hidden">
            <div class="p-8 md:p-12">
                <div class="text-center mb-8">
                    <div class="flex justify-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="SJOGU Logo" class="h-20 w-auto object-contain">
                    </div>
                    <h1 class="text-2xl font-bold text-gray-800">SJOGU E-Skills Lab</h1>
                    <p class="text-sm text-gray-600 mt-1">St John of God University</p>
                </div>
                
                <div class="mb-8 text-center">
                    <h2 class="text-xl font-semibold text-gray-800">Enhance Your Clinical Skills Anytime, Anywhere</h2>
                    <p class="text-sm text-gray-600 mt-2">Access lecturer-approved clinical procedures, demonstrations and practical tutorials from your mobile device or computer.</p>
                </div>
                
                <form action="{{ url('/dashboard') }}" method="GET">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Student ID</label>
                            <input type="text" value="DEMO2026/001" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <input type="password" value="demo123" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                        </div>
                        <button type="submit" class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-3 rounded-lg transition-all transform hover:scale-[1.02]">
                            Login to Dashboard
                        </button>
                    </div>
                </form>
                
                <p class="text-center text-xs text-gray-500 mt-6">Demo credentials: Any Student ID and Password works</p>
            </div>
            
            <div class="hidden md:block bg-gradient-to-br from-red-600 to-red-800 p-8 text-white">
                <div class="h-full flex flex-col justify-center">
                    <div class="mb-8">
                        <img src="{{ asset('images/logo.png') }}" alt="SJOGU Logo" class="h-16 w-auto object-contain mb-6 opacity-80">
                        <h3 class="text-2xl font-bold mb-4">Clinical Skills Library</h3>
                        <p class="text-red-100 mb-6">Access 100+ clinical procedures, video tutorials, and evidence-based guidelines curated by experienced nursing educators.</p>
                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                <span>Self-paced learning</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                <span>Evidence-based content</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                                <span>Mobile-friendly access</span>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-red-500 pt-6">
                        <p class="text-sm text-red-100">"Empowering future healthcare professionals through quality education"</p>
                        <p class="text-xs text-red-200 mt-2">- St John of God University</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection