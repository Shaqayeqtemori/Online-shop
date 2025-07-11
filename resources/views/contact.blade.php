
<!-- start HTML codes -->
<!DOCTYPE html>
<html lang="en">
    <!-- links -->
    <head>
        <meta charset="utf-8">
        <title>Contact</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <!-- Google Web Fonts -->
        <link href="{{ asset('dist/css/output.css') }}" rel="stylesheet">
        <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap" rel="stylesheet">
        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    </head>
    <body>
        <!-- navbar -->
        @extends('layout')
        @section('content')
        <!-- Page Header Start -->
        <div class="w-full bg-gray-900 py-16 mb-10">
            <div class="max-w-7xl mx-auto px-6 text-white">
                <h1 class="text-5xl font-bold mb-4 animate-slide-in-right">Contact Us</h1>
                <nav class="text-sm animate-slide-in-right" aria-label="breadcrumb">
                <ol class="flex space-x-2 text-gray-300">
                    <li><a href="#" class="hover:text-white">Home</a></li>
                    <span>/</span>
                    <li><a href="#" class="hover:text-white">Pages</a></li>
                    <span>/</span>
                    <li class="text-white font-semibold">Contact Us</li>
                </ol>
                </nav>
            </div>
        </div>
        <!-- Contact Form (TailwindCSS version) -->
        <div class="w-[500px] h-[100hv] mx-auto flex items-center justify-center border-none rounded-sm">
            <form class="grid grid-cols-1 md:grid-cols-2 gap-3">
                <!-- First Name -->
                <div class="relative">
                    <input type="text" name="namee" id="name" placeholder=" " class="peer w-[250px] border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    <label for="name" class="absolute left-4 top-2 text-gray-500 text-sm peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 transition-all">Your Name</label>
                    <span class="text-red-500 text-sm"></span>
                </div>
                <!-- Last Name -->
                <div class="relative">
                    <input type="text" name="last_name" id="last_name" placeholder=" " class="peer w-[250px] border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" />
                    <label for="last_name" class="absolute left-4 top-2 text-gray-500 text-sm peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 transition-all">Your Last Name</label>
                    <span class="text-red-500 text-sm"></span>
                </div>
                <!-- Email -->
                <div class="relative col-span-1 md:col-span-2">
                    <input type="email" name="email" id="email" placeholder=" " class="peer w-[507px] border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" />
                    <label for="email" class="absolute left-4 top-2 text-gray-500 text-sm peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 transition-all">Your Email</label>
                    <span class="text-red-500 text-sm"></span>
                </div>
                <!-- Subject -->
                <div class="relative col-span-1 md:col-span-2">
                    <input type="text" name="subject" id="subject" placeholder=" " class="peer w-[507px] border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500" />
                    <label for="subject" class="absolute left-4 top-2 text-gray-500 text-sm peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 transition-all">Subject</label>
                </div>
                <!-- Message -->
                <div class="relative col-span-1 md:col-span-2">
                    <textarea name="massage" id="message" rows="6" placeholder=" " class="peer w-[507px] border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                    <label for="message" class="absolute left-4 top-2 text-gray-500 text-sm peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 transition-all">Message</label>
                    <span class="text-red-500 text-sm"></span>
                </div>
                <!-- Submit Button -->
                <div class="col-span-1 flex  items-center justify-center  md:col-span-2">
                    <button type="submit" name="sub_btn" class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-md shadow">
                    Send Message
                    </button>
                </div>
                <!-- General Error -->
                <span class="text-red-500 text-sm col-span-2"></span>
            </form>
        </div>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/java.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(function () {
                $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
                });
            });
        </script>
        @endsection
    </body>
</html>
