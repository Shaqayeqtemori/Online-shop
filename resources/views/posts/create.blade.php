<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body class="min-h-screen  bg-cover bg-center " style="background-image: url('/img/pro (2).jpg')">
    <div class="w-[500px] h-[100hv] mx-auto flex items-center justify-center border-none rounded-sm">
        <h1 class="text-3xl font-bold text-center text-green-700 mb-8">Share Your Post</h1>
        @if ($errors->any())
            <div class="mb-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div>
                <label for="name" class="block text-gray-800 font-semibold mb-1">Your Name</label>
                <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div>
                <label for="email" class="block text-gray-800 font-semibold mb-1">Your Email</label>
                <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div>
                <label for="title" class="block text-gray-800 font-semibold mb-1">Post Title</label>
                <input type="text" name="title" id="title" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>
            <div>
                <label for="body" class="block text-gray-800 font-semibold mb-1">Your Message</label>
                <textarea name="body" id="body" rows="4" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-green-500" required></textarea>
            </div>
            <div>
                <label for="image" class="block text-gray-800 font-semibold mb-1">Upload Image</label>
                <input type="file" name="image" id="image" class="w-full border border-gray-300 rounded-lg p-3 bg-white file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100" required>
            </div>
            <button type="submit" class="w-full bg-green-600 hover:bg-green-700 text-white text-lg font-semibold py-3 rounded-xl transition duration-300">
                Submit Post
            </button>
        </form>
    </div>
</body>
</html>
