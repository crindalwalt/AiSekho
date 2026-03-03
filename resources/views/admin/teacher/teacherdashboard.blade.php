<x-my-layouts.user-teacher-main>
       <main class="flex-1 p-8 overflow-y-auto">

            <h1 class="text-3xl font-bold mb-8">
                Teacher <span class="lime-accent">Dashboard</span>
            </h1>

            @if(session('success'))
                <div class="bg-green-500 text-black p-4 rounded-xl mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <div class="glass-card p-8">

                <h3 class="text-xl font-bold mb-6">Create New Course</h3>

                <form action="{{ route('teacher.courses.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf

                    <div>
                        <label class="text-sm font-bold">Course Title</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="w-full rounded-xl p-4 mt-2">
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Short Description</label>
                        <input type="text" name="excerpt" value="{{ old('excerpt') }}" class="w-full rounded-xl p-4 mt-2">
                        @error('excerpt') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Full Description</label>
                        <textarea name="description" rows="4" class="w-full rounded-xl p-4 mt-2">{{ old('description') }}</textarea>
                        @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Category</label>
                        <select name="category" class="w-full rounded-xl p-4 mt-2">
                            <option value="Web Development">Web Development</option>
                            <option value="Artificial Intelligence">Artificial Intelligence</option>
                            <option value="Data Science">Data Science</option>
                            <option value="Mobile Apps">Mobile Apps</option>
                        </select>
                        @error('category') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Level</label>
                        <select name="level" class="w-full rounded-xl p-4 mt-2">
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                        </select>
                        @error('level') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Duration (Hours)</label>
                        <input type="number" name="duration" value="{{ old('duration') }}" class="w-full rounded-xl p-4 mt-2">
                        @error('duration') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Intro Video URL</label>
                        <input type="text" name="video_url" value="{{ old('video_url') }}" class="w-full rounded-xl p-4 mt-2">
                    </div>

                    <div>
                        <label class="text-sm font-bold">Read Time (Minutes)</label>
                        <input type="number" name="read_time" value="{{ old('read_time') }}" class="w-full rounded-xl p-4 mt-2">
                        @error('read_time') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Total Lessons</label>
                        <input type="number" name="lessons_count" value="{{ old('lessons_count') }}" class="w-full rounded-xl p-4 mt-2">
                        @error('lessons_count') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Price</label>
                        <input type="number" step="0.01" name="price" value="{{ old('price') }}" class="w-full rounded-xl p-4 mt-2">
                        @error('price') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Discount Price</label>
                        <input type="number" step="0.01" name="discount_price" value="{{ old('discount_price') }}" class="w-full rounded-xl p-4 mt-2">
                        @error('discount_price') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Thumbnail</label>
                        <input type="file" name="thumbnail" class="mt-2 text-gray-400 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-[#1e2128] file:text-white hover:file:bg-gray-700 cursor-pointer">
                        @error('thumbnail') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label class="text-sm font-bold">Status</label>
                        <select name="status" class="w-full rounded-xl p-4 mt-2">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        @error('status') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>

                    <button type="submit" class="btn-lime w-full py-4 mt-4">
                        Publish Course
                    </button>

                </form>

            </div>

        </main>
</x-my-layouts.user-teacher-main>