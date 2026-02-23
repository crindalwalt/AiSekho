<x-my-layouts.main-layout>

    <main class="max-w-7xl mx-auto px-6 py-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            
            <div class="space-y-10">
                <div>
                    <span class="text-xs font-bold tracking-widest uppercase border border-gray-700 px-4 py-1.5 rounded-full text-gray-400">
                        Get In Touch
                    </span>
                    <h1 class="text-5xl md:text-6xl font-bold mt-8 leading-tight">
                        Let's Talk <br> <span class="lime-accent">About AI.</span>
                    </h1>
                    <p class="text-gray-400 mt-6 text-lg max-w-md">
                        Koi sawal hai ya feedback? Humari team aapki help karne ke liye hamesha tayyar hai.
                    </p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="bg-[#1A1A1A] p-3 rounded-xl border border-gray-800">
                            <span class="text-xl">📧</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Email Us</h4>
                            <p class="text-gray-400 text-sm">support@aisekho.com</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-[#1A1A1A] p-3 rounded-xl border border-gray-800">
                            <span class="text-xl">📍</span>
                        </div>
                        <div>
                            <h4 class="font-bold">Office</h4>
                            <p class="text-gray-400 text-sm">Tech Hub, Floor 4, Karachi, Pakistan</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="bg-[#1A1A1A] p-3 rounded-xl border border-gray-800">
                            <span class="text-xl">📞</span>
                        </div>
                        <div>
                            <h4 class="font-bold">WhatsApp</h4>
                            <p class="text-gray-400 text-sm">+92 300 1234567</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-[#1A1A1A] p-8 md:p-12 rounded-[3rem] border border-gray-800 relative">
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-lime-accent/10 rounded-full blur-3xl"></div>
                
                <form action="#" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-500 uppercase ml-1">Full Name</label>
                            <input type="text" placeholder="John Doe" 
                                class="w-full bg-[#0F0F0F] border border-gray-800 rounded-2xl py-4 px-6 text-sm input-focus transition">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs font-bold text-gray-500 uppercase ml-1">Email Address</label>
                            <input type="email" placeholder="john@example.com" 
                                class="w-full bg-[#0F0F0F] border border-gray-800 rounded-2xl py-4 px-6 text-sm input-focus transition">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-500 uppercase ml-1">Subject</label>
                        <select class="w-full bg-[#0F0F0F] border border-gray-800 rounded-2xl py-4 px-6 text-sm input-focus transition text-gray-400">
                            <option>Course Inquiry</option>
                            <option>Technical Support</option>
                            <option>Partnership</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="space-y-2">
                        <label class="text-xs font-bold text-gray-500 uppercase ml-1">Message</label>
                        <textarea rows="5" placeholder="Write your message here..." 
                            class="w-full bg-[#0F0F0F] border border-gray-800 rounded-2xl py-4 px-6 text-sm input-focus transition resize-none"></textarea>
                    </div>

                    <button class="w-full bg-lime-accent text-black font-bold py-4 rounded-2xl hover:opacity-90 transition active:scale-[0.98]">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </main>
</x-my-layouts.main-layout>