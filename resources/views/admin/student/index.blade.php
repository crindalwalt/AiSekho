<x-my-layouts.admin-layout>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Directory - AI_Sekho</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'lime-accent': '#d9f99d',
                        'dark-card': '#16181d',
                        'dark-bg': '#0f1115',
                    }
                }
            }
        }
    </script>
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0f1115; color: white; }
        .glass-card { 
            background: linear-gradient(145deg, #16181d 0%, #1a1c22 100%);
            border: 1px solid rgba(255,255,255,0.05);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .glass-card:hover {
            transform: translateY(-8px);
            border-color: #d9f99d50;
            box-shadow: 0 20px 40px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body class="antialiased p-6 md:p-12">

    <div class="max-w-7xl mx-auto mb-12 flex justify-between items-end">
        <div>
            <h1 class="text-5xl font-black tracking-tighter italic">Student <span class="text-lime-accent">Directory</span></h1>
            <p class="text-gray-500 mt-2 font-medium uppercase tracking-[0.2em] text-xs underline decoration-lime-accent decoration-2 underline-offset-8">Managing Infrastructure</p>
        </div>
        <div class="text-right hidden md:block">
           
            <p class="text-[10px] text-gray-600 font-black uppercase tracking-widest">Total Active</p>
        </div>
    </div>

    @if (session('success'))
        <div id="success-alert" class="max-w-7xl mx-auto mb-10 flex items-center p-4 bg-lime-accent/5 border border-lime-accent/20 rounded-3xl animate-in fade-in duration-500">
            <div class="w-10 h-10 bg-lime-accent rounded-2xl flex items-center justify-center shadow-lg shadow-lime-accent/20">
                <svg class="h-5 w-5 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <p class="ml-4 text-sm font-bold italic">{{ session('success') }}</p>
            <button onclick="document.getElementById('success-alert').style.display='none'" class="ml-auto text-gray-500 hover:text-white">✕</button>
        </div>
    @endif

    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        @foreach($students as $student)
        <div class="glass-card p-8 rounded-[2.5rem] relative overflow-hidden group">
            <div class="absolute -top-24 -right-24 w-48 h-48 bg-lime-accent/5 rounded-full blur-3xl group-hover:bg-lime-accent/10 transition-all"></div>

            <div class="flex items-start justify-between mb-8">
                <div class="relative">
                    @if($student->image_url)
                        <img src="{{ asset('storage/students_images/' . $student->image_url) }}" class="w-20 h-20 rounded-[2rem] object-cover ring-4 ring-black shadow-2xl group-hover:scale-105 transition-transform duration-500">
                    @else
                        <div class="w-20 h-20 rounded-[2rem] bg-gray-800 flex items-center justify-center text-lime-accent text-3xl font-black italic shadow-2xl">
                            {{ strtoupper(substr($student->name, 0, 1)) }}
                        </div>
                    @endif
                    <div class="absolute -bottom-1 -right-1 w-6 h-6 bg-lime-accent border-4 border-[#0f1115] rounded-full flex items-center justify-center">
                        <span class="w-2 h-2 bg-black rounded-full animate-pulse"></span>
                    </div>
                </div>
                <div class="text-right">
                    <span class="text-[10px] font-black text-gray-600 uppercase tracking-widest block">ID Number</span>
                    <p class="text-sm font-bold text-white italic">#STU-{{ str_pad($student->id, 3, '0', STR_PAD_LEFT) }}</p>
                </div>
            </div>

            <div class="space-y-4">
                <div>
                    <h3 class="text-2xl font-black text-white group-hover:text-lime-accent transition-colors tracking-tight italic">{{ $student->name }}</h3>
                    <p class="text-gray-400 text-sm font-medium">{{ $student->email }}</p>
                </div>

                <div class="flex items-center gap-2 pt-2">
                    <div class="px-3 py-1 bg-white/5 rounded-lg border border-white/10 text-[10px] font-bold text-gray-400">
                        {{ $student->gender }}
                    </div>
                    <div class="px-3 py-1 bg-white/5 rounded-lg border border-white/10 text-[10px] font-bold text-gray-400">
                        Age: {{ $student->age }}
                    </div>
                </div>

                <div class="bg-black/20 rounded-2xl p-4 border border-white/[0.03]">
                    <span class="text-[9px] font-black text-gray-600 uppercase tracking-widest block mb-1">Enrolled Course</span>
                    <p class="text-sm font-bold text-gray-200">{{ $student->course->title ?? 'Cloud Computing' }}</p>
                </div>

                <div class="flex items-center justify-between pt-4 border-t border-white/5">
                    <div class="flex flex-col">
                        <span class="text-[9px] font-black text-gray-600 uppercase">Registered</span>
                        <span class="text-xs font-bold text-gray-400">{{ $student->created_at->format('d M, Y') }}</span>
                    </div>
                    <div class="flex gap-2">
                        <button class="p-3 bg-white/5 hover:bg-lime-accent hover:text-black rounded-2xl transition-all duration-300 group/btn">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        </button>
                        <button class="p-3 bg-white/5 hover:bg-red-500 hover:text-white rounded-2xl transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    @if(count($students) == 0)
        <div class="text-center py-24">
            <p class="text-gray-700 font-black uppercase tracking-[0.5em] italic">No Student Records Found</p>
        </div>
    @endif

</body>
</html>
</x-my-layouts.admin-layout>
