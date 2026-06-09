<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SJOGU E-Skills Lab - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
    @stack('styles')
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        @include('components.sidebar')
        
        <div class="flex-1 flex flex-col overflow-hidden">
            @include('components.navbar')
            
            <main class="flex-1 overflow-y-auto bg-gray-50 p-4 md:p-6">
                @yield('content')
            </main>
        </div>
    </div>
    
    @include('components.mobile-menu')
    
    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        }
        
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {
                document.getElementById('mobile-menu')?.classList.add('hidden');
            }
        });
    </script>
    @stack('scripts')
</body>
</html>