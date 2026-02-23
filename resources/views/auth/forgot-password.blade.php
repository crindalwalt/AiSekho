<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - AI_Sekho</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-[#0f1115] text-gray-200">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        
        <div class="mb-10 transform hover:scale-105 transition duration-300">
            <a href="/">
                <h2 class="text-4xl font-extrabold text-white tracking-tighter">
                    AI<span class="text-[#d9f99d]">_Sekho</span>
                </h2>
            </a>
        </div>

        <div class="w-full sm:max-w-md px-8 py-10 bg-[#16181d] border border-gray-800 shadow-[0_20px_60px_rgba(0,0,0,0.7)] overflow-hidden sm:rounded-3xl relative">
            
            <div class="absolute top-0 left-1/2 -translate-x-1/2 w-1/2 h-1 bg-gradient-to-r from-transparent via-[#d9f99d] to-transparent opacity-30"></div>

            <div class="text-center mb-8">
                <h1 class="text-2xl font-bold text-white mb-3">Reset your password</h1>
                <p class="text-sm text-gray-400 px-4">
                    {{ __('No worries! Enter your email and we\'ll send you instructions to reset your password.') }}
                </p>
            </div>

            @if (session('status'))
                <div class="mb-6 p-4 rounded-xl bg-green-500/10 border border-green-500/20 text-[#d9f99d] text-sm text-center font-medium">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="space-y-2">
                    <label for="email" class="text-[10px] font-black text-gray-500 uppercase tracking-[0.2em] ml-1">
                        {{ __('Registered Email') }}
                    </label>
                    <input id="email" 
                           class="block w-full bg-[#1e2128] border border-gray-700 text-white focus:border-[#d9f99d] focus:ring-2 focus:ring-[#d9f99d]/20 rounded-2xl shadow-sm py-4 px-5 transition-all duration-300 outline-none placeholder:text-gray-600" 
                           type="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           placeholder="Enter your email address"
                           required 
                           autofocus />
                    
                    @error('email')
                        <p class="mt-2 text-xs text-red-500 font-medium ml-1 italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-10">
                    <button type="submit" class="w-full bg-[#d9f99d] hover:bg-[#bef264] text-black font-black py-4 px-6 rounded-2xl transition-all duration-300 transform hover:translate-y-[-2px] active:translate-y-[0px] shadow-[0_15px_30px_rgba(217,249,157,0.15)] uppercase tracking-widest text-xs">
                        {{ __('Send Reset Link') }}
                    </button>
                </div>

                <div class="mt-10 flex flex-col space-y-4 text-center border-t border-gray-800/50 pt-8">
                    <a href="{{ route('login') }}" class="text-sm text-gray-400 hover:text-[#d9f99d] transition-colors duration-200 font-medium flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                        </svg>
                        Back to secure login
                    </a>
                </div>
            </form>
        </div>
        
        <p class="mt-10 text-gray-700 text-[10px] font-bold uppercase tracking-[0.3em]">
            Secure Infrastructure &bull; AI_Sekho v2.0
        </p>
    </div>

</body>
</html>