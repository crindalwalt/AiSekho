<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - AI_Sekho</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0f1115; color: white; }
        .glass-card { background: #16181d; border: 1px solid #1e2128; border-radius: 24px; }
        .lime-accent { color: #d9f99d; }
        .btn-lime { background-color: #d9f99d; color: #000; font-weight: 700; border-radius: 12px; transition: all 0.3s; }
        .btn-lime:hover { background-color: #bef264; transform: translateY(-2px); }
    </style>
</head>
<body>

    <div class="flex min-h-screen">
        <aside class="w-64 border-r border-gray-800 p-6 hidden md:block">
            <h2 class="text-2xl font-bold mb-10 text-white tracking-tighter">AI<span class="lime-accent">_Sekho</span></h2>
            <nav class="space-y-4">
                <a href="#" class="block p-3 rounded-xl bg-[#1e2128] lime-accent font-medium">My Progress</a>
                <a href="#" class="block p-3 rounded-xl hover:bg-[#1e2128] transition">Browse Teachers</a>
                <a href="#" class="block p-3 rounded-xl hover:bg-[#1e2128] transition">Messages</a>
                <a href="#" class="block p-3 rounded-xl text-red-400 mt-10">Logout</a>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-10">
                <div>
                    <h1 class="text-3xl font-bold">Student <span class="lime-accent">Dashboard</span></h1>
                    <p class="text-gray-400">Welcome back, Imran! Ready to learn?</p>
                </div>
                <img src="https://ui-avatars.com/api/?name=Imran&background=d9f99d&color=000" class="w-12 h-12 rounded-full border-2 border-[#d9f99d]" />
            </header>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                
                <section class="glass-card p-6 shadow-xl">
                    <div class="flex items-center mb-6">
                        <div class="p-3 bg-blue-500/10 rounded-xl mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Set Course Schedule</h3>
                    </div>
                    
                    <form action="#" class="space-y-4">
                        <div>
                            <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block mb-2">Select Study Time</label>
                            <input type="time" class="w-full bg-[#1e2128] border-gray-700 text-white rounded-xl p-4 focus:ring-2 focus:ring-[#d9f99d] outline-none">
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-xs font-bold text-gray-500 uppercase tracking-widest block mb-2">Duration (Hours)</label>
                                <select class="w-full bg-[#1e2128] border-gray-700 text-white rounded-xl p-4 outline-none">
                                    <option>1 Hour</option>
                                    <option>2 Hours</option>
                                    <option>3 Hours</option>
                                </select>
                            </div>
                            <div class="flex items-end">
                                <button type="button" class="btn-lime w-full py-4 shadow-lg shadow-[#d9f99d]/10">Save Schedule</button>
                            </div>
                        </div>
                    </form>
                </section>

                <section class="glass-card p-6 shadow-xl">
                    <div class="flex items-center mb-6">
                        <div class="p-3 bg-[#d9f99d]/10 rounded-xl mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lime-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold">Pick Your Course</h3>
                    </div>

                    <div class="space-y-4 max-h-[250px] overflow-y-auto pr-2 custom-scrollbar">
                        <div class="flex items-center justify-between p-4 bg-[#1e2128] rounded-2xl hover:border-[#d9f99d] border border-transparent transition cursor-pointer">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-orange-500/20 rounded-lg flex items-center justify-center mr-4">
                                    <span class="text-orange-500 font-bold">P</span>
                                </div>
                                <div>
                                    <h4 class="font-bold">PHP 8.5 Mastery</h4>
                                    <p class="text-xs text-gray-500">Laravel 13 included</p>
                                </div>
                            </div>
                            <input type="checkbox" class="w-6 h-6 accent-[#d9f99d]">
                        </div>

                        <div class="flex items-center justify-between p-4 bg-[#1e2128] rounded-2xl border border-transparent hover:border-[#d9f99d] transition cursor-pointer">
                            <div class="flex items-center">
                                <div class="w-10 h-10 bg-blue-500/20 rounded-lg flex items-center justify-center mr-4">
                                    <span class="text-blue-500 font-bold">A</span>
                                </div>
                                <div>
                                    <h4 class="font-bold">AI & Machine Learning</h4>
                                    <p class="text-xs text-gray-500">Python & PyTorch</p>
                                </div>
                            </div>
                            <input type="checkbox" class="w-6 h-6 accent-[#d9f99d]">
                        </div>
                    </div>

                    <button class="w-full mt-6 py-3 border border-[#d9f99d] text-[#d9f99d] font-bold rounded-xl hover:bg-[#d9f99d] hover:text-black transition">Enroll in Selected</button>
                </section>

            </div>

            <div class="mt-12 glass-card p-8 bg-gradient-to-r from-[#16181d] to-[#1e2128] flex items-center justify-between">
                <div>
                    <h2 class="text-2xl font-bold mb-2">Ready to Master <span class="lime-accent">PHP 8.5?</span></h2>
                    <p class="text-gray-400">Get exclusive access to our newest Laravel 13 masterclass.</p>
                </div>
                <button class="btn-lime px-8 py-4 shadow-xl shadow-[#d9f99d]/10">Buy Course Now — $49</button>
            </div>
        </main>
    </div>

</body>
</html>