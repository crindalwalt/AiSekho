<x-my-layouts.main-layout>
      <main class="max-w-7xl mx-auto px-6 py-16">
        <h1 class="text-4xl font-bold mb-10">Shopping <span class="lime-accent">Cart</span></h1>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            
            <div class="lg:col-span-2 space-y-6">
                
                <div class="bg-[#1A1A1A] p-6 rounded-[2rem] border border-gray-800 flex flex-col md:flex-row items-center gap-6">
                    <div class="w-full md:w-40 h-28 bg-gray-800 rounded-2xl overflow-hidden shrink-0">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-lg font-bold">Mastering ChatGPT & Prompt Engineering</h3>
                        <p class="text-gray-500 text-sm mt-1">Instructor: Dr. Arsalan Khan</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-xl font-bold">$49.99</span>
                        <button class="text-gray-500 hover:text-red-500 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                        </button>
                    </div>
                </div>

                <div class="bg-[#1A1A1A] p-6 rounded-[2rem] border border-gray-800 flex flex-col md:flex-row items-center gap-6">
                    <div class="w-full md:w-40 h-28 bg-gray-800 rounded-2xl overflow-hidden shrink-0">
                        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&q=80&w=400" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="text-lg font-bold">Python for Data Science</h3>
                        <p class="text-gray-500 text-sm mt-1">Instructor: Usman Sheikh</p>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-xl font-bold">$59.99</span>
                        <button class="text-gray-500 hover:text-red-500 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                        </button>
                    </div>
                </div>

                <a href="#" class="inline-block text-lime-accent text-sm font-bold hover:underline">← Continue Shopping</a>
            </div>

            <div class="space-y-6">
                <div class="bg-[#1A1A1A] p-8 rounded-[2.5rem] border border-gray-800">
                    <h3 class="text-xl font-bold mb-6">Order Summary</h3>
                    
                    <div class="space-y-4 text-sm text-gray-400">
                        <div class="flex justify-between">
                            <span>Subtotal</span>
                            <span class="text-white font-bold">$109.98</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Discount (10%)</span>
                            <span class="text-lime-accent">-$10.99</span>
                        </div>
                        <div class="border-t border-gray-800 pt-4 flex justify-between text-lg">
                            <span class="text-white font-bold">Total</span>
                            <span class="text-lime-accent font-bold">$98.99</span>
                        </div>
                    </div>

                    <div class="mt-8">
                        <div class="relative">
                            <input type="text" placeholder="Promo Code" class="w-full bg-[#0F0F0F] border border-gray-800 rounded-xl py-3 px-4 text-sm focus:outline-none focus:border-lime-accent">
                            <button class="absolute right-2 top-2 text-xs font-bold bg-gray-800 px-3 py-1.5 rounded-lg hover:text-lime-accent transition">Apply</button>
                        </div>
                    </div>

                    <button class="w-full mt-8 bg-lime-accent text-black font-bold py-4 rounded-2xl hover:opacity-90 transition shadow-lg shadow-lime-500/10">
                        Proceed to Checkout
                    </button>
                    
                    <div class="mt-6 flex justify-center space-x-4 opacity-50 grayscale">
                        <span class="text-xs border border-gray-600 px-2 py-1 rounded">VISA</span>
                        <span class="text-xs border border-gray-600 px-2 py-1 rounded">MASTER</span>
                        <span class="text-xs border border-gray-600 px-2 py-1 rounded">STRIPE</span>
                    </div>
                </div>
            </div>

        </div>
    </main>
</x-my-layouts.main-layout>