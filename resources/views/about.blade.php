
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>About</title>
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
        {{-- navbar --}}
        @extends('layout')
        @section('content')
        <!-- Page Header Start -->
        <div class="w-full bg-gray-900 py-16 mb-10">
            <div class="max-w-7xl mx-auto px-6 text-white">
                <h1 class="text-5xl font-bold mb-4 animate-slide-in-right">About Us</h1>
                <nav class="text-sm animate-slide-in-right" aria-label="breadcrumb">
                <ol class="flex space-x-2 text-gray-300">
                    <li><a href="#" class="hover:text-white">Home</a></li>
                    <span>/</span>
                    <li><a href="#" class="hover:text-white">Pages</a></li>
                    <span>/</span>
                    <li class="text-white font-semibold">About Us</li>
                </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- About Start -->
        <div class="w-full py-12 bg-white text-gray-800">
            <div class="max-w-7xl mx-auto px-9">
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Images -->
                    <div class="grid grid-cols-2 gap-3 items-end">
                        <div class="animate-fade-up ml-4 delay-100">
                        <img src="{{ asset('img/_efNcVp-.jpg') }}" class="w-full h-auto rounded shadow">
                        </div>
                        <div class="animate-fade-down delay-100">
                        <img src="{{ asset('img/Zf9bt5dk.jpg') }}" class="w-full h-auto rounded shadow">
                        </div>
                    </div>
                    <!-- Text Content -->
                    <div class="animate-fade-in delay-500">
                        <p class="uppercase font-bold text-orange-600 ">About Us</p>
                        <h1 class="text-3xl font-bold mb-4">We Are Leader In Dorsa Boutique Shop</h1>
                        <p class="mb-6">We started our work at 2022 and we sell products of Turkey, Iran and other countries for tastes.</p>
                        <div class="flex h-[180px] w-[400px] items-center bg-orange-600 text-white rounded-md p-6 mb-6">
                            <div>
                                <h1 class="text-5xl font-bold">2</h1>
                                <p class="text-sm">Years of</p>
                                <p class="text-sm">Being best</p>
                            </div>
                            <div class="ml-6 text-sm space-y-2 text-white">
                                <p><i class="fa fa-check mr-2"></i>Power & Energy</p>
                                <p><i class="fa fa-check mr-2"></i>Best Products</p>
                                <p><i class="fa fa-check mr-2"></i>Fit cost</p>
                                <p><i class="fa fa-check mr-2"></i>Other countries Trend Clothes</p>
                                <p><i class="fa fa-check mr-2"></i>Being honest</p>
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-6 pt-2">
                            <!-- Email -->
                            <div class="flex items-center">
                                <div class="bg-orange-600 rounded-full p-3 text-white">
                                    <i class="fa fa-envelope-open"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm">Email us</p>
                                    <h5 class="text-base font-semibold">dorsa@gmail.com</h5>
                                </div>
                            </div>
                            <!-- Phone -->
                            <div class="flex  items-center">
                                <div class="bg-orange-600 rounded-full p-3 text-white">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm">Call us</p>
                                    <h5 class="text-base font-semibold">+93799270705</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Facts Start -->
        <div class="w-full bg-orange-600 py-12 px-4">
            <div class="max-w-7xl mx-auto grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                <div class="text-center border border-white p-8 text-white">
                    <i class="fa fa-certificate text-4xl mb-4"></i>
                    <h1 class="text-5xl font-bold mb-2">2</h1>
                    <p class="text-lg font-semibold">Years Experience</p>
                </div>
                <div class="text-center border border-white p-8 text-white">
                    <i class="fa fa-users text-4xl mb-4"></i>
                    <h1 class="text-5xl font-bold mb-2">1000</h1>
                    <p class="text-lg font-semibold">Happy Clients</p>
                </div>
                <div class="text-center border border-white p-8 text-white">
                    <i class="fa fa-check-double text-4xl mb-4"></i>
                    <h1 class="text-5xl font-bold mb-2">500</h1>
                    <p class="text-lg font-semibold">Selling in each month</p>
                </div>
            </div>
        </div>
        <!-- Facts End -->
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
        <!-- Script to toggle menu -->
        <script>
            const toggleBtn = document.getElementById('nav-toggle');
            const navMenu = document.getElementById('nav-menu');
            toggleBtn.addEventListener('click', () => {
                navMenu.classList.toggle('hidden');
            });
        </script>
        @endsection
    </body>
</html>
