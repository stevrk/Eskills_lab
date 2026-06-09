<nav class="bg-white border-b border-gray-200 sticky top-0 z-20">
    <div class="px-4 md:px-6 py-3">
        <div class="flex items-center justify-between">
            <button onclick="toggleMobileMenu()" class="md:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            
            <!-- Mobile Logo -->
            <div class="flex md:hidden items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="SJOGU" class="h-8 w-auto object-contain">
                <span class="font-bold text-gray-800 text-sm">SJOGU E-Skills</span>
            </div>
            
            <div class="hidden md:flex flex-1 max-w-md mx-4">
                <div class="relative w-full">
                    <input type="text" placeholder="Search procedures, tutorials..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:border-transparent">
                    <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
            </div>
            
            <div class="flex items-center space-x-4">
                <button class="relative p-2 rounded-lg text-gray-600 hover:bg-gray-100 transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                    </svg>
                    <span class="absolute top-1 right-1 w-2 h-2 bg-red-600 rounded-full"></span>
                </button>
                
                <div class="flex items-center space-x-3 cursor-pointer group">
                    <div class="w-8 h-8 bg-red-600 rounded-full flex items-center justify-center text-white font-semibold text-sm">
                        JP
                    </div>
                    <div class="hidden md:block">
                        <p class="text-sm font-medium text-gray-800">John Phiri</p>
                        <p class="text-xs text-gray-500">Nursing Student</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="md:hidden mt-3">
            <div class="relative">
                <input type="text" placeholder="Search..." class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500">
                <svg class="absolute left-3 top-2.5 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>
    </div>
</nav>