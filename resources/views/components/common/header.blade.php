<nav class="fixed top-0 left-0 w-full z-50 
            flex items-center justify-between px-6 md:px-16 py-4 
            bg-[#0F0F0F]/70 backdrop-blur-xl border-b border-white/10 
            transition-all duration-300">
    
    <div class="text-2xl font-bold tracking-tighter text-white">
        AI_<span class="text-[#D9FF00] drop-shadow-[0_0_8px_rgba(217,255,0,0.5)]">Sekho</span>
    </div>

    <div class="hidden md:flex space-x-10 text-sm font-medium">
        <a href="{{ route('home') }}" class="text-gray-400 hover:text-[#D9FF00] transition-colors duration-200">Courses</a>
        <a href="{{ route('teachers') }}" class="text-gray-400 hover:text-[#D9FF00] transition-colors duration-200">Teachers</a>
        <a href="{{ route('about') }}" class="text-gray-400 hover:text-[#D9FF00] transition-colors duration-200">About Us</a>
        <a href="{{ route('contact-us') }}" class="text-gray-400 hover:text-[#D9FF00] transition-colors duration-200">Contact Us</a>
    </div>

    <div class="flex items-center space-x-6">
        <a href="{{ route('login') }}" class="hidden sm:block text-sm font-medium text-gray-300 hover:text-white transition">Login</a>
        <a href="{{ route('register') }}" 
           class="relative group overflow-hidden bg-white text-black px-7 py-2.5 rounded-full text-sm font-bold transition-all duration-300 hover:bg-[#D9FF00]">
            <span class="relative z-10">Get Started</span>
        </a>
    </div>
</nav>

<div class="h-20"></div>