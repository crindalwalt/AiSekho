 <aside class="w-64 bg-[#16181d] border-r border-[#1e2128] flex-col hidden md:flex z-30">
        <div class="h-20 flex items-center px-8 border-b border-[#1e2128]">
            <div class="text-2xl font-extrabold tracking-tighter italic">
                AI_<span class="lime-accent">Sekho</span>
            </div>
        </div>
        
        <nav class="flex-1 py-6 px-4 space-y-2 overflow-y-auto">
            <p class="px-4 text-[10px] font-black text-gray-500 uppercase tracking-widest mb-4">Main Menu</p>
            
            <a href="#" class="sidebar-link flex items-center space-x-3 p-3.5 rounded-xl text-gray-400">
                <span class="text-lg">📊</span>
                <span class="text-sm font-semibold">Dashboard</span>
            </a>
               <a href="#" class="active-link flex items-center space-x-3 p-3.5 rounded-xl">
                <span class="text-lg">👥</span>
                <span class="text-sm font-semibold">Students</span>
            </a>
            
            <a href="#" class="sidebar-link flex items-center space-x-3 p-3.5 rounded-xl text-gray-400">
                <span class="text-lg">📚</span>
                <span class="text-sm font-semibold">My_Courses</span>
            </a>
            
         

            
            <p class="px-4 text-[10px] font-black text-gray-500 uppercase tracking-widest mt-8 mb-4">Settings</p>
            
            <a href="#" class="sidebar-link flex items-center space-x-3 p-3.5 rounded-xl text-gray-400">
                <span class="text-lg">⚙️</span>
                <span class="text-sm font-semibold">Platform Setup</span>
            </a>
        </nav>

        <div class="p-6 border-t border-[#1e2128]">
          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="w-full flex items-center space-x-3 p-3.5 rounded-xl text-red-400 hover:bg-red-600 hover:text-white transition">
                  <span class="text-lg">🚪</span>
                  <span class="text-sm font-semibold">Logout</span>
              </button>
        </div>
    </aside>
