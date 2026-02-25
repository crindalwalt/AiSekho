<x-my-layouts.admin-layout>
    <div class="p-10">
        <!-- Header -->
        <div class="mb-8">
            <a href="{{ route('admin.teachers.index') }}" class="text-lime-accent hover:text-lime-300 text-sm font-medium flex items-center gap-2 mb-4">
                ← Back to Teachers
            </a>
            <h1 class="text-4xl font-bold">Add New Teacher</h1>
            <p class="text-gray-400 mt-2">Create a new instructor profile</p>
        </div>

        <!-- Form Card -->
        <div class="bg-[#1A1A1A] rounded-[2.5rem] border border-gray-800 overflow-hidden max-w-2xl">
            <div class="p-8 border-b border-gray-800">
                <h3 class="text-xl font-bold">Teacher Information</h3>
            </div>
            <div class="p-8">
              <form action="{{ route('admin.teachers.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
    @csrf

    <!-- Course Title -->
    <div>
        <label class="block text-sm font-bold text-gray-300 mb-3">Course Title</label>
        <input type="text" name="name" placeholder="e.g., Complete Web Development Bootcamp"
            class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
        @error("name")
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Short Description -->
    <div>
        <label class="block text-sm font-bold text-gray-300 mb-3">Short Description</label>
        <input type="text" name="excerpt" placeholder="Brief summary of the course"
            class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
        @error("excerpt")
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Description -->
    <div>
        <label class="block text-sm font-bold text-gray-300 mb-3">Description</label>
        <textarea name="description" rows="4" placeholder="Write detailed course description..."
            class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition resize-none"></textarea>
        @error("description")
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <div class="grid grid-cols-2 gap-6">
        <!-- Category -->
        <div>
            <label class="block text-sm font-bold text-gray-300 mb-3">Category</label>
            <select name="category"
                class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                <option value="Web Development">Web Development</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Data Science">Data Science</option>
                <option value="Mobile Apps">Mobile Apps</option>
            </select>
            @error("category")
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Level -->
        <div>
            <label class="block text-sm font-bold text-gray-300 mb-3">Level</label>
            <select name="level"
                class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
            @error("level")
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6">
        <!-- Duration -->
        <div>
            <label class="block text-sm font-bold text-gray-300 mb-3">Duration (Hours)</label>
            <input type="number" name="duration" placeholder="40"
                class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
            @error("duration")
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Total Lessons -->
        <div>
            <label class="block text-sm font-bold text-gray-300 mb-3">Total Lessons</label>
            <input type="number" name="lessons_count" placeholder="25"
                class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
            @error("lessons_count")
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <div class="grid grid-cols-2 gap-6">
        <!-- Price -->
        <div>
            <label class="block text-sm font-bold text-gray-300 mb-3">Price ($)</label>
            <input type="number" step="0.01" name="price" placeholder="99"
                class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
            @error("price")
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Discount Price -->
        <div>
            <label class="block text-sm font-bold text-gray-300 mb-3">Discount Price ($)</label>
            <input type="number" step="0.01" name="discount_price" placeholder="79"
                class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
            @error("discount_price")
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>
    </div>

    <!-- Video URL -->
    <div>
        <label class="block text-sm font-bold text-gray-300 mb-3">Intro Video URL</label>
        <input type="text" name="video_url" placeholder="https://youtube.com/..."
            class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white placeholder-gray-600 focus:border-lime-accent focus:ring-2 focus:ring-lime-accent/20 transition">
    </div>

    <!-- Thumbnail -->
    <div>
        <label class="block text-sm font-bold text-gray-300 mb-3">Thumbnail</label>
        <div class="border-2 border-dashed border-gray-700 rounded-lg p-6 text-center hover:border-lime-accent/50 transition cursor-pointer">
            <input type="file" name="thumbnail" class="hidden" id="thumbnail">
            <label for="thumbnail" class="cursor-pointer">
                <p class="text-gray-400">Click to upload or drag and drop</p>
                <p class="text-xs text-gray-500 mt-1">PNG, JPG up to 10MB</p>
            </label>
        </div>
    </div>

    <!-- Status -->
    <div>
        <label class="block text-sm font-bold text-gray-300 mb-3">Status</label>
        <div class="flex gap-4">
            <label class="flex items-center">
                <input type="radio" name="status" value="draft" checked class="mr-2">
                <span class="text-sm text-gray-300">Draft</span>
            </label>
            <label class="flex items-center">
                <input type="radio" name="status" value="published" class="mr-2">
                <span class="text-sm text-gray-300">Published</span>
            </label>
        </div>
        @error("status")
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    <!-- Button -->
    <div class="pt-6">
        <button type="submit" class="w-full bg-lime-accent text-black py-3 rounded-lg font-bold hover:bg-lime-500 transition">
            Publish Course
        </button>
    </div>
</form>
            </div>
        </div>
    </div>
</x-my-layouts.admin-layout>
