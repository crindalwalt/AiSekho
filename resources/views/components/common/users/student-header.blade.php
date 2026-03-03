 <header class="h-20 bg-[#16181d]/90 backdrop-blur-md border-b border-[#1e2128] flex items-center justify-between px-6 md:px-10 sticky top-0 z-20">
            <div class="flex items-center space-x-4">
                <button class="md:hidden text-gray-400 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                
                <div class="hidden sm:block relative">
                    <span class="absolute left-3 top-2.5 text-gray-500 text-sm">🔍</span>
                    <input type="text" placeholder="Search anything..." class="bg-[#1e2128] border-none rounded-full py-2 pl-10 pr-4 text-xs w-64 text-white focus:ring-1 focus:ring-[#d9f99d] transition">
                </div>
            </div>

            <div class="flex items-center space-x-5">
                <button class="relative text-gray-400 hover:text-white transition">
                    🔔 <span class="absolute -top-1 -right-1 w-2 h-2 bg-[#d9f99d] rounded-full border-2 border-[#16181d]"></span>
                </button>
                <div class="h-8 w-px bg-[#1e2128] hidden sm:block"></div>
                <div class="flex items-center space-x-3 cursor-pointer group">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-white group-hover:text-[#d9f99d] transition">Admin User</p>
                        <p class="text-[10px] text-gray-500 uppercase tracking-widest font-black">Super Admin</p>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-[#1e2128] border border-[#2d3139] overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=Admin+User&background=d9f99d&color=000&font-size=0.4" alt="Admin" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </header>
