<aside class="bg-white border-r border-gray-200 w-64 flex-shrink-0 hidden md:block overflow-y-auto">
    <div class="flex flex-col h-full">
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center space-x-3">
                <!-- Logo Image -->
                <img src="{{ asset('images/logo.png') }}" alt="SJOGU Logo" class="w-10 h-10 object-contain">
                <div>
                    <h1 class="text-lg font-bold text-gray-800">SJOGU</h1>
                    <p class="text-xs text-gray-500">E-Skills Lab</p>
                </div>
            </div>
        </div>
        
        <div class="p-4 bg-red-50 m-4 rounded-lg">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-red-600 rounded-full flex items-center justify-center text-white font-semibold">
                    JP
                </div>
                <div class="flex-1">
                    <p class="text-sm font-semibold text-gray-800">John Phiri</p>
                    <p class="text-xs text-gray-600">Year 3 Nursing</p>
                </div>
            </div>
        </div>
        
        <nav class="flex-1 px-4 space-y-1">
            <a href="{{ url('/dashboard') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition-all duration-200 {{ request()->is('dashboard') ? 'bg-red-50 text-red-600' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <span class="text-sm font-medium">Dashboard</span>
            </a>
            
            <a href="{{ url('/tutorials') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition-all duration-200 {{ request()->is('tutorials*') ? 'bg-red-50 text-red-600' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                </svg>
                <span class="text-sm font-medium">Video Tutorials</span>
            </a>
            
            <a href="{{ url('/documents') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition-all duration-200 {{ request()->is('documents') ? 'bg-red-50 text-red-600' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                </svg>
                <span class="text-sm font-medium">Documents</span>
            </a>
            
            <a href="{{ url('/guidelines') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition-all duration-200 {{ request()->is('guidelines') ? 'bg-red-50 text-red-600' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                </svg>
                <span class="text-sm font-medium">Clinical Guidelines</span>
            </a>
            
            <a href="{{ url('/profile') }}" class="flex items-center space-x-3 px-4 py-3 rounded-lg text-gray-700 hover:bg-red-50 hover:text-red-600 transition-all duration-200 {{ request()->is('profile') ? 'bg-red-50 text-red-600' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
                <span class="text-sm font-medium">Profile</span>
            </a>
        </nav>
        
        <div class="p-4 border-t border-gray-200 mt-auto">
            <div class="bg-gray-50 rounded-lg p-3">
                <p class="text-xs text-gray-600 text-center">Need help?</p>
                <p class="text-xs text-center text-red-600 font-medium mt-1">Contact Support</p>
            </div>
        </div>
    </div>
</aside>