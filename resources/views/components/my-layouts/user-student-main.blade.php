<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Student - AI_Sekho Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #0f1115; color: white; }
        
        /* Form Specific Styles */
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

        /* Dashboard Specific Styles */
        .sidebar-link { transition: all 0.3s ease; }
        .sidebar-link:hover { background-color: rgba(217, 249, 157, 0.05); color: #d9f99d; }
        .active-link { background-color: rgba(217, 249, 157, 0.1); color: #d9f99d; border-right: 3px solid #d9f99d; }
        
        /* Custom Scrollbar for Main Content */
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #0f1115; }
        ::-webkit-scrollbar-thumb { background: #1e2128; border-radius: 10px; }
        ::-webkit-scrollbar-thumb:hover { background: #2d3139; }
    </style>
</head>
<body class="antialiased flex h-screen overflow-hidden">

  <x-common.users.student-sidebar />
    <div class="flex-1 flex flex-col min-w-0 bg-[#0f1115]">
        
       <x-common.users.student-header />
       {{ $slot }}
    </div>

</body>
</html>