<x-my-layouts.admin-layout>
    <div class="p-10">
        
        <!-- Header -->
        <div class="mb-8">
            <a href="{{ route('admin.courses.index') }}" 
               class="text-lime-400 hover:text-lime-300 text-sm font-medium flex items-center gap-2 mb-4">
                ← Back to Courses
            </a>
            <h1 class="text-4xl font-bold text-white">Create New Course</h1>
            <p class="text-gray-400 mt-2">Fill in the details below to create a new course.</p>
        </div>

        <!-- Form Card -->
        <div class="bg-[#111111] border border-gray-800 rounded-2xl p-8 shadow-lg">

            <form action="{{ route('admin.courses.store') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Course Name -->
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Course Name</label>
                    <input type="text" name="name"
                           value="{{ old('name') }}"
                           placeholder="Enter course name"
                           class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-lime-500 focus:outline-none">
                    @error('name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Excerpt -->
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Short Excerpt</label>
                    <input type="text" name="excerpt"
                           value="{{ old('excerpt') }}"
                           placeholder="Short summary of the course"
                           class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-lime-500 focus:outline-none">
                    @error('excerpt')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Description</label>
                    <textarea name="description" rows="4"
                              placeholder="Full course description"
                              class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-lime-500 focus:outline-none">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Price + Duration -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    
                    <!-- Price -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Price ($)</label>
                        <input type="number" name="price" step="0.01" min="0"
                               value="{{ old('price') }}"
                               placeholder="Enter price"
                               class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-lime-500 focus:outline-none">
                        @error('price')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Duration -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-300 mb-2">Duration (Hours)</label>
                        <input type="number" name="duration" min="1"
                               value="{{ old('duration') }}"
                               placeholder="Enter duration"
                               class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-lime-500 focus:outline-none">
                        @error('duration')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                </div>

                <!-- Category -->
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Category</label>
                    <input type="text" name="category"
                           value="{{ old('category') }}"
                           placeholder="e.g. Development, Design"
                           class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-lime-500 focus:outline-none">
                    @error('category')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Thumbnail --> 
                 
                <div> <label class="block text-sm font-bold text-gray-300 mb-3">Thumbnail</label> <div class="border-2 border-dashed border-gray-700 rounded-lg p-6 text-center hover:border-lime-accent/50 transition cursor-pointer"> <input type="file" name="thumbnail" class="hidden" id="thumbnail"> <label for="thumbnail" class="cursor-pointer"> 
                    @error('thumbnail')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                    <p class="text-gray-400">Click to upload or drag and drop</p> <p class="text-xs text-gray-500 mt-1">PNG, JPG up to 10MB</p> </label> </div> </div>

                <!-- Level -->
                <div>
                    <label class="block text-sm font-semibold text-gray-300 mb-2">Level</label>
                    <select name="level"
                            class="w-full px-4 py-3 bg-gray-900 border border-gray-700 rounded-lg text-white focus:ring-2 focus:ring-lime-500 focus:outline-none">
                        <option value="">Select Level</option>
                        <option value="beginner" {{ old('level') == 'beginner' ? 'selected' : '' }}>Beginner</option>
                        <option value="intermediate" {{ old('level') == 'intermediate' ? 'selected' : '' }}>Intermediate</option>
                        <option value="advanced" {{ old('level') == 'advanced' ? 'selected' : '' }}>Advanced</option>
                    </select>
                    @error('level')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="pt-4">
                    <button type="submit"
                            class="bg-lime-500 hover:bg-lime-600 text-black font-bold px-6 py-3 rounded-lg transition duration-200">
                        Create Course
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-my-layouts.admin-layout>