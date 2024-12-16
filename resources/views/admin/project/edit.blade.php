<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Edit Project</title>
    <!-- Link yang benar untuk Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.2.4/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body class="bg-gradient-to-r from-purple-400 via-indigo-500 to-blue-600 font-sans antialiased">

    <div class="container mx-auto mt-10 p-8 bg-gradient-to-r from-purple-400 via-indigo-500 to-blue-600 rounded-lg shadow-xl max-w-lg">
        <h3 class="text-center text-3xl font-semibold text-white mb-6">Edit Project</h3>

        <form action="{{ route('admin.project.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Project Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-100">Project Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $project->name) }}" required
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('name')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Project Description -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-100">Description</label>
                <textarea name="description" id="description" required
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">{{ old('description', $project->description) }}</textarea>
                @error('description')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            
            <!-- Start Date -->
<div class="mb-4">
    <label for="start_date" class="block text-sm font-medium text-gray-100">Start Date</label>
    <input type="date" id="start_date" name="start_date" value="{{ old('start_date', $project->start_date) }}" required
        class="mt-2 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    @error('start_date')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>

<!-- End Date -->
<div class="mb-4">
    <label for="end_date" class="block text-sm font-medium text-gray-100">End Date</label>
    <input type="date" id="end_date" name="end_date" value="{{ old('end_date', $project->end_date) }}"
        class="mt-2 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    @error('end_date')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>

  <!-- Status -->
  <div class="mb-4">
    <label for="status" class="block text-sm font-medium text-gray-100">Status</label>
    <select id="status" name="status" required
        class="mt-2 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
        <option value="pending" {{ old('status', $project->status) == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="completed" {{ old('status', $project->status) == 'completed' ? 'selected' : '' }}>Completed</option>
        <option value="in-progress" {{ old('status', $project->status) == 'in-progress' ? 'selected' : '' }}>In Progress</option>
    </select>
    @error('status')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>




            <!-- File Upload (optional) -->
            <div class="mb-4">
                <label for="file" class="block text-sm font-medium text-gray-100">Upload File (optional)</label>
                <input type="file" name="file" id="file"
                    class="mt-2 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                @error('file')
                    <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <!-- Project Type -->
<div class="mb-4">
    <label for="type" class="block text-sm font-medium text-gray-100">Project Type</label>
    <select id="type" name="type" required
        class="mt-2 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
        <option value="internal" {{ old('type', $project->type) == 'internal' ? 'selected' : '' }}>Internal</option>
        <option value="external" {{ old('type', $project->type) == 'external' ? 'selected' : '' }}>External</option>
        <option value="research" {{ old('type', $project->type) == 'research' ? 'selected' : '' }}>Research</option>
        <option value="development" {{ old('type', $project->type) == 'development' ? 'selected' : '' }}>Development</option>
    </select>
    @error('type')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>


            <!-- Image Upload -->
 <!-- Image Upload -->
<div class="mb-4">
    <label for="image" class="block text-sm font-medium text-gray-100">Upload Image (optional)</label>
    <input type="file" name="image" id="image" accept="image/jpeg,image/png,image/jpg,image/gif,image/svg+xml"
        class="mt-2 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
    @error('image')
        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
    @enderror
</div>

            <!-- Display existing image if available -->
            @if($project->image)
                <div class="mb-4">
                    <p><strong>Existing Image:</strong></p>
                    <img src="{{ asset('storage/' . $project->image) }}" alt="Project Image" class="mt-2 rounded-md shadow-md w-full">
                </div>
            @endif

            <!-- Display existing file if available -->
            @if($project->file)
                <div class="mb-4">
                    <p><strong>Existing File:</strong> <a href="{{ asset('storage/' . $project->file) }}" target="_blank" class="text-indigo-600 hover:text-indigo-800">Lihat File</a></p>
                </div>
            @endif

          





            <div class="flex justify-between">
                <!-- Submit Button -->
                <button type="submit" class="bg-blue-600 text-white py-3 px-6 rounded-md hover:bg-blue-700 focus:outline-none">Update</button>

                <!-- Back Button -->
                <a href="{{ route('admin.project.index') }}" class="bg-gray-400 text-gray-800 py-3 px-6 rounded-md hover:bg-gray-500 focus:outline-none">Kembali</a>
            </div>
        </form>
    </div>

</body>

</html>
