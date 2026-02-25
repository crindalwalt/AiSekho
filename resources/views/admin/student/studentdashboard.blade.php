<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student - AI_Sekho</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0f1115; color: white; }
        .glass-card { background: #16181d; border: 1px solid #1e2128; border-radius: 32px; }
        .lime-accent { color: #d9f99d; }
        input, select, textarea { 
            background-color: #1e2128 !important; 
            border: 1px solid #2d3139 !important; 
            color: white !important;
            transition: all 0.3s ease;
        }
        input:focus, select:focus, textarea:focus {
            border-color: #d9f99d !important;
            box-shadow: 0 0 0 4px rgba(217, 249, 157, 0.1) !important;
            outline: none;
        }
    </style>
</head>
<body class="antialiased p-6 md:p-12">

    <div class="max-w-3xl mx-auto">
        <div class="mb-10 flex items-center justify-between">
            <div>
                <h1 class="text-4xl font-extrabold italic tracking-tighter">Register <span class="lime-accent">Student</span></h1>
                <p class="text-gray-500 mt-2 uppercase tracking-widest text-[10px] font-bold">Administration / New Entry</p>
            </div>
            <a href="{{ route('admin.students.index') }}" class="text-gray-400 hover:text-white transition text-sm">← Back to List</a>
        </div>

        <div class="glass-card p-8 md:p-12 shadow-2xl relative overflow-hidden">
            <div class="absolute -top-24 -left-24 w-48 h-48 bg-lime-accent/5 rounded-full blur-3xl"></div>

            <form action="{{ route('admin.students.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                @csrf

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-[10px] font-black text-gray-500 uppercase tracking-widest ml-1">Full Name</label>
                        <input type="text" name="name" required placeholder="Ali Ahmed" 
                            class="w-full rounded-2xl p-4 text-sm">
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-black text-gray-500 uppercase tracking-widest ml-1">Email Address</label>
                        <input type="email" name="email" required placeholder="ali@example.com" 
                            class="w-full rounded-2xl p-4 text-sm">
                        @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="space-y-2">
                        <label class="text-[10px] font-black text-gray-500 uppercase tracking-widest ml-1">Age</label>
                        <input type="number" name="age" required placeholder="22" 
                            class="w-full rounded-2xl p-4 text-sm">
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-black text-gray-500 uppercase tracking-widest ml-1">Gender</label>
                        <select name="gender" class="w-full rounded-2xl p-4 text-sm appearance-none cursor-pointer">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="text-[10px] font-black text-gray-500 uppercase tracking-widest ml-1">Assign Course</label>
                        <select name="course_id" required class="w-full rounded-2xl p-4 text-sm appearance-none cursor-pointer">
                            @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-black text-gray-500 uppercase tracking-widest ml-1">Phone Number</label>
                    <input type="text" name="phone" required placeholder="+92 300 1234567" 
                        class="w-full rounded-2xl p-4 text-sm">
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-black text-gray-500 uppercase tracking-widest ml-1">Home Address</label>
                    <textarea name="address" rows="2" placeholder="Street, City, Country" 
                        class="w-full rounded-2xl p-4 text-sm resize-none"></textarea>
                </div>

                <div class="space-y-2">
                    <label class="text-[10px] font-black text-gray-500 uppercase tracking-widest ml-1">Student Profile Image</label>
                    <div class="relative group">
                        <input type="file" name="image_url" 
                            class="w-full text-xs text-gray-400 file:mr-4 file:py-3 file:px-6 file:rounded-2xl file:border-0 file:text-[10px] file:font-black file:uppercase file:bg-white/5 file:text-white hover:file:bg-white/10 file:cursor-pointer cursor-pointer bg-[#1e2128] rounded-2xl p-2 border border-dashed border-gray-700">
                    </div>
                    <p class="text-[9px] text-gray-600 italic">Recommended: Square image, Max 2MB (JPG, PNG)</p>
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-[#d9f99d] hover:bg-[#bef264] text-black font-black py-5 rounded-2xl transition-all duration-300 transform hover:scale-[1.02] shadow-xl shadow-[#d9f99d]/10 uppercase tracking-[0.2em] text-xs">
                        Finalize Registration
                    </button>
                </div>
            </form>
        </div>

        <p class="mt-8 text-center text-gray-700 text-[9px] font-black uppercase tracking-[0.5em] italic">AI_Sekho Security Protocol Active</p>
    </div>

</body>
</html>