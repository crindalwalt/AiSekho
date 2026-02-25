<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Dashboard - AI_Sekho</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0f1115; color: white; }
        .glass-card { background: #16181d; border: 1px solid #1e2128; border-radius: 24px; }
        .lime-accent { color: #d9f99d; }
        .btn-lime { background-color: #d9f99d; color: #000; font-weight: 700; border-radius: 12px; transition: all 0.3s; }
        .btn-lime:hover { background-color: #bef264; transform: translateY(-2px); }
        input, select, textarea { background-color: #1e2128 !important; border: 1px solid #374151 !important; color: white !important; }
    </style>
</head>
<body>

    <div class="flex min-h-screen">
        <aside class="w-64 border-r border-gray-800 p-6 hidden md:block">
            <h2 class="text-2xl font-bold mb-10 text-white tracking-tighter">AI<span class="lime-accent">_Sekho</span></h2>
            <nav class="space-y-4">
                <a href="#" class="block p-3 rounded-xl bg-[#1e2128] lime-accent font-medium italic">Instructor Mode</a>
                <a href="#" class="block p-3 rounded-xl hover:bg-[#1e2128] transition">My Courses</a>
                <a href="#" class="block p-3 rounded-xl hover:bg-[#1e2128] transition">Earnings</a>
                <a href="{{ route('logout') }}" class="block p-3 rounded-xl text-red-400 mt-10">Logout</a>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-10">
                <div>
                    <h1 class="text-3xl font-bold italic">Teacher <span class="lime-accent">Panel</span></h1>
                    <p class="text-gray-400">Share your knowledge with the world.</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="text-right hidden sm:block">
                        <p class="text-sm font-bold">Dr. Arsalan Khan</p>
                        <p class="text-xs text-[#d9f99d]">Pro Instructor</p>
                    </div>
                    <img src="https://ui-avatars.com/api/?name=Arsalan+Khan&background=d9f99d&color=000" class="w-12 h-12 rounded-full border-2 border-[#d9f99d]" />
                </div>
            </header>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <section class="lg:col-span-2 glass-card p-8 shadow-xl">
                    <div class="flex items-center mb-8">
                        <div class="p-3 bg-[#d9f99d]/10 rounded-xl mr-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 lime-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold tracking-tight">Create New Course</h3>
                    </div>
                    
                  <form action="{{ route('teacher.courses.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Course Title -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Course Title</label>
        <input type="text" name="name" class="w-full rounded-xl p-4 outline-none">
        @error('name') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
    </div>

    <!-- Excerpt -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Short Description</label>
        <input type="text" name="excerpt" class="w-full rounded-xl p-4 outline-none">
        @error('excerpt') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
    </div>

    <!-- Description -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Description</label>
        <textarea name="description" rows="4" class="w-full rounded-xl p-4 outline-none"></textarea>
        @error('description') <p class="text-red-500 text-xs">{{ $message }}</p> @enderror
    </div>

  

    <!-- Category -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Category</label>
        <select name="category" class="w-full rounded-xl p-4 outline-none">
            <option value="Web Development">Web Development</option>
            <option value="Artificial Intelligence">Artificial Intelligence</option>
            <option value="Data Science">Data Science</option>
            <option value="Mobile Apps">Mobile Apps</option>
        </select>
        @error('category')
            <p class="text-red-500 text-xs">{{ $message }}</p>
            
        @enderror
    </div>

    <!-- Level -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Level</label>
        <select name="level" class="w-full rounded-xl p-4 outline-none">
            <option value="beginner">Beginner</option>
            <option value="intermediate">Intermediate</option>
            <option value="advanced">Advanced</option>
        </select>
        @error('level')
            <p class="text-red-500 text-xs">{{ $message }}</p>
            
        @enderror
    </div>

    <!-- Duration -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Duration (Hours)</label>
        <input type="number" name="duration" class="w-full rounded-xl p-4 outline-none">
        @error('duration')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    <!-- Video URL -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Intro Video URL</label>
        <input type="text" name="video_url" class="w-full rounded-xl p-4 outline-none">
    </div>

    <!-- Read Time -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Read Time (Minutes)</label>
        <input type="number" name="read_time" class="w-full rounded-xl p-4 outline-none">
    </div>

    <!-- Lessons Count -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Total Lessons</label>
        <input type="number" name="lessons_count" class="w-full rounded-xl p-4 outline-none">
        @error('lessons_count')
            <p class="text-red-500 text-xs">{{ $message }}</p>  
        @enderror
    </div>

    <!-- Price -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Price</label>
        <input type="number" step="0.01" name="price" class="w-full rounded-xl p-4 outline-none">
        @error('price')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    <!-- Discount Price -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Discount Price</label>
        <input type="number" step="0.01" name="discount_price" class="w-full rounded-xl p-4 outline-none">
        @error('discount_price')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    <!-- Thumbnail -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Thumbnail</label>
        <input type="file" name="thumbnail">
    </div>

    <!-- Status -->
    <div>
        <label class="text-xs font-bold text-gray-500 uppercase block mb-2">Status</label>
        <select name="status" class="w-full rounded-xl p-4 outline-none">
            <option value="draft">Draft</option>
            <option value="published">Published</option>
            <option value="inactive">Inactive</option>
        </select>
        @error('status')
            <p class="text-red-500 text-xs">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="btn-lime w-full py-4 mt-4">
        Publish Course
    </button>
</form>
                </section>

                <section class="space-y-8">
                    <div class="glass-card p-6 bg-gradient-to-br from-[#16181d] to-[#1e2128]">
                        <h3 class="text-gray-500 text-xs font-black uppercase tracking-widest mb-4">Quick Insights</h3>
                        <div class="space-y-6">
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-3xl font-bold italic">$4,250</p>
                                    <p class="text-xs text-gray-400">Total Revenue</p>
                                </div>
                                <span class="text-green-400 text-xs font-bold">+12% ↑</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-3xl font-bold italic">1,280</p>
                                    <p class="text-xs text-gray-400">Total Students</p>
                                </div>
                                <span class="text-[#d9f99d] text-xs font-bold">+85 this week</span>
                            </div>
                        </div>
                    </div>

                    <div class="glass-card p-6">
                        <h3 class="font-bold mb-4 flex items-center justify-between">
                            Active Courses
                            <span class="text-[10px] bg-[#d9f99d] text-black px-2 py-1 rounded-full uppercase">Live</span>
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center p-3 bg-[#1e2128] rounded-xl border border-gray-800">
                                <div class="w-8 h-8 rounded bg-[#d9f99d] flex items-center justify-center mr-3">
                                    <span class="text-black font-bold text-xs">L13</span>
                                </div>
                                <div class="flex-1">
                                    <p class="text-sm font-bold">Laravel 13 Pro</p>
                                    <p class="text-[10px] text-gray-500">452 Enrolled</p>
                                </div>
                                <button class="text-gray-400 hover:text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" /></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </main>
    </div>

</body>
</html>