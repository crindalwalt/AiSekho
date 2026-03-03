<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructor Dashboard - AI_Sekho</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #0f1115; color: white; }
        .glass-card { background: #16181d; border: 1px solid #1e2128; border-radius: 24px; }
        .lime-accent { color: #d9f99d; }
        .btn-lime { background-color: #d9f99d; color: #000; font-weight: 700; border-radius: 12px; transition: 0.3s; }
        .btn-lime:hover { background-color: #bef264; transform: translateY(-2px); }
        input, select, textarea { background-color: #1e2128; border: 1px solid #374151; color: white; outline: none; transition: 0.3s; }
        input:focus, select:focus, textarea:focus { border-color: #d9f99d; box-shadow: 0 0 0 2px rgba(217, 249, 157, 0.1); }
        
        /* Custom Scrollbar for a pro feel */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0f1115; }
        ::-webkit-scrollbar-thumb { background: #1e2128; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #374151; }
    </style>
</head>
<body class="antialiased overflow-hidden">

<div class="flex h-screen">
    <x-common.users.teacher-sidebar />

    <div class="flex-1 flex flex-col min-w-0 bg-[#0f1115]">
        
     <x-common.users.teacher-header />

     {{ $slot }}
    </div>
</div>

</body>
</html>