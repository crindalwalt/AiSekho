   <header class="h-20 bg-[#16181d]/90 backdrop-blur-md border-b border-gray-800 flex items-center justify-between px-6 md:px-10 sticky top-0 z-20">
            <div class="flex items-center gap-4">
                <button class="md:hidden text-gray-400 hover:text-white">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                <div class="hidden sm:block">
                    <p class="text-[10px] text-gray-500 uppercase tracking-widest font-bold">Workspace</p>
                    <h2 class="text-sm font-bold text-white">Course Management</h2>
                </div>
            </div>

            <div class="flex items-center space-x-5">
                <div class="hidden sm:flex items-center text-xs font-bold bg-[#1e2128] border border-gray-700 px-4 py-2 rounded-lg text-gray-400 cursor-pointer hover:border-[#d9f99d] transition">
                    <span class="w-2 h-2 rounded-full bg-green-500 mr-2 animate-pulse"></span>
                    System Online
                </div>

                <button class="relative text-gray-400 hover:text-white transition">
                    🔔 <span class="absolute -top-1 -right-1 w-2 h-2 bg-[#d9f99d] rounded-full border-2 border-[#16181d]"></span>
                </button>
                
                <div class="h-8 w-px bg-gray-800 hidden sm:block"></div>
                
                <div class="flex items-center space-x-3 cursor-pointer group">
                    <div class="text-right hidden sm:block">
                        <p class="text-xs font-bold text-white group-hover:text-[#d9f99d] transition">Instructor Name</p>
                        <p class="text-[10px] text-[#d9f99d] uppercase tracking-widest font-black">Lead Teacher</p>
                    </div>
                    <div class="w-10 h-10 rounded-full bg-[#1e2128] border border-gray-700 overflow-hidden">
                        <img src="https://ui-avatars.com/api/?name=Instructor&background=d9f99d&color=000&font-size=0.4" alt="Instructor" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </header>