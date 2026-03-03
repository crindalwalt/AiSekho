
    <aside class="w-64 border-r border-gray-800 p-6 hidden md:block flex-shrink-0 bg-[#0f1115]">
        <h2 class="text-2xl font-bold mb-10">AI<span class="lime-accent">_Sekho</span></h2>

        <nav class="space-y-4">
            <a href="#" class="block p-3 rounded-xl bg-[#1e2128] lime-accent font-medium">Instructor Mode</a>
            <a href="#" class="block p-3 rounded-xl hover:bg-[#1e2128]">My Courses</a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="block p-3 rounded-xl text-red-400 mt-10 w-full text-left">
                    Logout
                </button>
            </form>
        </nav>
    </aside>