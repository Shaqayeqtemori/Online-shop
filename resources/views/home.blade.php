<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Online shop</title>
  <link href="{{ asset('dist/css/output.css') }}" rel="stylesheet">
  <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
</head>
<!-- body -->
<body class="overflow-x-hidden">
   {{-- navbar --}}
   @extends('layout')
   @section('content')
   <!-- Carousel Start -->
   <div class="w-full overflow-hidden mb-5 relative">
    <div class="relative w-full h-[85vh]" id="carousel">
      <!-- Slide 1 -->
      <div class="absolute inset-0 z-10 opacity-100 transition-opacity duration-1000 carousel-slide active">
        <img src="{{ asset('img/car (1).jpg') }}" class="w-full h-full object-cover" alt="">
        <div class="absolute inset-0 bg-black/50 flex items-center">
          <div class="max-w-4xl mx-auto px-6 text-left">
            <p class="uppercase text-orange-400 text-sm font-medium mb-2 animate-fade-in-right">Best Choose for good tastes</p>
            <h1 class="text-white text-5xl md:text-6xl font-bold mb-5 animate-fade-in-right">Dorsa Boutique Shop</h1>
            <a href="#" class="inline-block bg-orange-600 text-white px-6 py-3 rounded-md hover:bg-orange-700 transition animate-fade-in-right">
              Explore More and buy us
            </a>
          </div>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="absolute inset-0 z-0 opacity-0 transition-opacity duration-1000 carousel-slide">
        <img src="{{ asset('img/car (3).jpg') }}" class="w-full h-full object-cover" alt="">
        <div class="absolute inset-0 bg-black/50 flex items-center">
          <div class="max-w-4xl mx-auto px-6 text-left">
            <p class="uppercase text-orange-400 text-sm font-medium mb-2 animate-fade-in-right">Best Choose for good tastes</p>
            <h1 class="text-white text-5xl md:text-6xl font-bold mb-5 animate-fade-in-right">Dorsa Boutique Shop</h1>
            <a href="#" class="inline-block bg-orange-600 text-white px-6 py-3 rounded-md hover:bg-orange-700 transition animate-fade-in-right">
              Explore More and buy us
            </a>
          </div>
        </div>
      </div>
      <!-- Controls -->
      <button id="prevBtn" class="absolute top-1/2 left-4 -translate-y-1/2 z-20 bg-black/50 text-white w-10 h-10 flex items-center justify-center rounded-full hover:bg-black">
        <i class="fa fa-chevron-left"></i>
      </button>
      <button id="nextBtn" class="absolute top-1/2 right-4 -translate-y-1/2 z-20 bg-black/50 text-white w-10 h-10 flex items-center justify-center rounded-full hover:bg-black">
        <i class="fa fa-chevron-right"></i>
      </button>
    </div>
  </div>
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
  <!-- Features Start -->
  <div class="w-full py-12 bg-white text-gray-800">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">
        <!-- Image Play Button -->
        <div class="relative w-full">
            <img src="{{ asset('photoes/-6226267012607361438_120.jpg') }}" class="w-full h-[400px] w-[150px] rounded-lg shadow" alt="">
            <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white text-orange-500 p-6 rounded-full shadow-lg hover:scale-105 transition">
            <i class="fa fa-play text-2xl"></i>
            </button>
        </div>
        <!-- Content -->
        <div>
            <p class="uppercase text-orange-500 font-bold mb-2">Why Choosing Us!</p>
            <h2 class="text-3xl font-bold mb-4">Few Reasons Why People Choosing Us!</h2>
            <p class="mb-6 font-bold">They are:</p>
            <div class="space-y-6">
                <!-- Feature 1 -->
                <div class="flex items-start">
                <div class="w-12 h-12 flex-shrink-0 bg-orange-600 text-white rounded-full flex items-center justify-center">
                    <i class="fa fa-check"></i>
                </div>
                <div class="ml-4">
                    <h4 class="text-xl ">Experienced Workers</h4>
                    <p class="text-sm text-gray-600">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                </div>
                </div>
                <!-- Feature 2 -->
                <div class="flex items-start">
                <div class="w-12 h-12 flex-shrink-0 bg-orange-600 text-white rounded-full flex items-center justify-center">
                    <i class="fa fa-check"></i>
                </div>
                <div class="ml-4">
                    <h4 class="text-xl font-semibold">Offering Excellent Clothes</h4>
                    <p class="text-sm text-gray-600">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                </div>
                </div>
                <!-- Feature 3 -->
                <div class="flex items-start">
                <div class="w-12 h-12 flex-shrink-0 bg-orange-600 text-white rounded-full flex items-center justify-center">
                    <i class="fa fa-check"></i>
                </div>
                <div class="ml-4">
                    <h4 class="text-xl font-semibold">24/7 Customer Support</h4>
                    <p class="text-sm text-gray-600">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!-- Features End -->
  <!-- Video Modal Start -->
  <div id="videoModal" tabindex="-1" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <div class="bg-white rounded-md shadow-lg w-full max-w-2xl">
        <div class="flex justify-between items-center border-b p-4">
        <h3 class="text-lg font-semibold">Youtube Video</h3>
        <button onclick="document.getElementById('videoModal').classList.add('hidden')" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        <div class="p-4">
        <div class="aspect-w-16 aspect-h-9">
            <iframe id="video" class="w-full h-full" src="" allowfullscreen allow="autoplay; encrypted-media"></iframe>
        </div>
        </div>
    </div>
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
  <script>
    const slides = document.querySelectorAll('.carousel-slide');
    let currentIndex = 0;
    function showSlide(index) {
        slides.forEach((slide, i) => {
        slide.style.opacity = i === index ? '1' : '0';
        slide.style.zIndex = i === index ? '10' : '0';
        });
    }
    document.getElementById('prevBtn').addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });
    document.getElementById('nextBtn').addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });
    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }, 2000);
    showSlide(currentIndex);
  </script>
  @endsection
</body>
</html>
