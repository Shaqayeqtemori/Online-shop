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
  <!-- Topbar Start -->
  <div>
    <div class="hidden lg:flex flex-row justify-between items-center">
      <!-- Right info -->
      <div class="flex items-center space-x-4 ps-5">
        <span class="text-sm">Follow Us:</span>
        <a href="#" class="text-orange-600 hover:text-gray-300 transition"><i class="fab fa-facebook-f"></i></a>
        <a href="https://t.me/dorsa_boutique01" class="text-orange-600 hover:text-gray-300 transition"><i class="fab fa-telegram"></i></a>
        <a href="tel:+93799270705" class="text-orange-600 hover:text-gray-300 transition"><i class="fa fa-phone-alt"></i></a>
        <a href="https://www.instagram.com/dorsa_boutique0?igsh=eWRzanU0dXh1cGto" class="text-orange-600 hover:text-gray-300 transition"><i class="fab fa-instagram"></i></a>
      </div>
      <!-- Left info -->
      <div class="flex items-center space-x-2 py-2 px-5">
        <span class="text-lg font-semibold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
        <span class="text-lg font-semibold">+93799270705</span>
      </div>
    </div>
  </div>
  <!-- strat navbar   -->
  <nav class="sticky top-0 bg-white shadow-md py-2 px-5 z-50">
    <!-- Left logo -->
    <div class="flex items-center justify-between flex-wrap">
      <a href="index.html" class="flex items-center space-x-2">
        <img src="{{ asset('logo2.png') }}" class="h-10" alt="">
        <h2 class="text-[#d36c06] text-xl font-semibold">Dorsa Boutique</h2>
      </a>
      <!-- Hamburger Button -->
      <button id="nav-toggle" class="block md:hidden text-gray-800 focus:outline-none">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <!-- Navigation Links -->
    <div id="nav-menu" class="hidden md:flex md:items-center md:justify-between mt-4 md:mt-0">
      <div class="flex flex-col md:flex-row md:space-x-6 text-gray-800 font-medium">
        <a href="index.html" class="hover:text-orange-600 py-2">Home</a>
        <a href="about.html" class="hover:text-orange-600 py-2">About</a>
        <!-- Dropdown -->
        <div class="relative group">
          <a href="#" class="hover:text-orange-600">Our Category</a>
          <div class="absolute hidden group-hover:block bg-white text-gray-800 mt-2 py-2 w-40 shadow-lg rounded z-50">
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Shop</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Products</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Categories</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Flavour</a>
          </div>
        </div>
        <a href="contact.html" class="hover:text-orange-600 py-2">Contact</a>
      </div>
      <!-- Cart Icon -->
      <a href="orderitem.html" class="hidden lg:flex items-center text-orange-600 ml-[700px]">
        <i class="fa fa-cart-arrow-down text-xl"></i>
        <span class="ml-1 px-2 py-0.5 bg-white text-orange-600 text-sm rounded-full">Basket</span>
      </a>
      <!-- User Dropdown -->
      <div class="relative group">
        <a href="#" class="text-orange-600 text-xl">
          <i class="fa fa-user">Personalities</i>
        </a>
        <div class="absolute hidden group-hover:block bg-white text-gray-800 mt-2  py-2 w-40 shadow-lg rounded z-50">
          <a href="login.html" class="block px-4 py-2 hover:bg-gray-100">Log in</a>
          <a href="sign_in.html" class="block px-4 py-2 hover:bg-gray-100">Sign in</a>
          <a href="my_profile.html" class="block px-4 py-2 hover:bg-gray-100">My Profile</a>
          <a href="logout.html" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
        </div>
      </div>
    </div>
    <!-- Script to toggle menu -->
    <script>
      const toggleBtn = document.getElementById('nav-toggle');
      const navMenu = document.getElementById('nav-menu');
      toggleBtn.addEventListener('click', () => {
        navMenu.classList.toggle('hidden');
      });
    </script>
  </nav>
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
<!-- About Start -->
<div class="w-full py-12 bg-white text-gray-800">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid md:grid-cols-2 gap-8">
      <!-- Images -->
      <div class="grid grid-cols-2 gap-3 items-end">
        <div class="animate-fade-up delay-100">
        <img src="{{ asset('img/_efNcVp-.jpg') }}" class="w-full h-auto rounded shadow" alt="">
        </div>
        <div class="animate-fade-down delay-100">
        <img src="{{ asset('img/Zf9bt5dk-.jpg') }}" class="w-full h-auto rounded shadow" alt="">
        </div>
      </div>
      <!-- Text Content -->
      <div class="animate-fade-in delay-500">
        <p class="uppercase font-semibold text-orange-600 mb-2">About Us</p>
        <h1 class="text-4xl font-bold mb-4">We Are Leader In Dorsa Boutique Shop</h1>
        <p class="mb-6">We started our work at 2022 and we sell products of Turkey, Iran and other countries for tastes.</p>
        <div class="flex items-center bg-orange-600 text-white rounded-md p-6 mb-6">
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
          <div class="flex items-center">
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
    <!-- Image + Play Button -->
    <div class="relative w-full">
        <img src="{{ asset('photoes/-6226267012607361438_120.jpg') }}" class="w-full rounded-lg shadow" alt="">
      <button class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white text-orange-500 p-6 rounded-full shadow-lg hover:scale-105 transition">
        <i class="fa fa-play text-2xl"></i>
      </button>
    </div>
    <!-- Content -->
    <div>
      <p class="uppercase text-orange-500 font-semibold mb-2">Why Choosing Us!</p>
      <h2 class="text-4xl font-bold mb-4">Few Reasons Why People Choosing Us!</h2>
      <p class="mb-6">They are:</p>
      <div class="space-y-6">
        <!-- Feature 1 -->
        <div class="flex items-start">
          <div class="w-12 h-12 flex-shrink-0 bg-green-600 text-white rounded-full flex items-center justify-center">
            <i class="fa fa-check"></i>
          </div>
          <div class="ml-4">
            <h4 class="text-xl font-semibold">Experienced Workers</h4>
            <p class="text-sm text-gray-600">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
          </div>
        </div>
        <!-- Feature 2 -->
        <div class="flex items-start">
          <div class="w-12 h-12 flex-shrink-0 bg-green-600 text-white rounded-full flex items-center justify-center">
            <i class="fa fa-check"></i>
          </div>
          <div class="ml-4">
            <h4 class="text-xl font-semibold">Offering Excellent Clothes</h4>
            <p class="text-sm text-gray-600">Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
          </div>
        </div>
        <!-- Feature 3 -->
        <div class="flex items-start">
          <div class="w-12 h-12 flex-shrink-0 bg-green-600 text-white rounded-full flex items-center justify-center">
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
<!-- Video Modal End -->
<!-- Project Start -->
<div class="w-full bg-orange-600 pt-12 px-0">
  <div class="text-center mx-auto mt-6 max-w-xl">
    <p class="text-white uppercase tracking-wide font-semibold mb-2">Our Products</p>
    <h1 class="text-4xl font-bold text-white mb-6">See some of our Products</h1>
  </div>
  <div class="flex overflow-x-auto space-x-6 px-6 py-6">

    <!-- Product Card -->
    <a href="#" class="flex-shrink-0 w-60 bg-white rounded-lg shadow-md">
        <img src="{{ asset('photoes/-6239988638549131466_121.jpg') }}" class="w-full h-40 object-cover rounded-t-lg" alt="">
      <div class="p-4">
        <h5 class="text-lg font-semibold text-gray-800">Jeans Papperback</h5>
      </div>
    </a>

    <a href="#" class="flex-shrink-0 w-60 bg-white rounded-lg shadow-md">
        <img src="{{ asset('photoes/-6176999459934815802_121.jpg') }}" class="w-full h-40 object-cover rounded-t-lg" alt="">
      <div class="p-4">
        <h5 class="text-lg font-semibold text-gray-800">Pants Papperback</h5>
      </div>
    </a>

    <a href="#" class="flex-shrink-0 w-60 bg-white rounded-lg shadow-md">
        <img src="{{ asset('photoes/-6210702029651821670_121.jpg') }}" class="w-full h-40 object-cover rounded-t-lg" alt="">
      <div class="p-4">
        <h5 class="text-lg font-semibold text-gray-800">Jeans Hodi</h5>
      </div>
    </a>

    <a href="#" class="flex-shrink-0 w-60 bg-white rounded-lg shadow-md">
        <img src="{{ asset('photoes/-6226267012607361439_121.jpg') }}" class="w-full h-40 object-cover rounded-t-lg" alt="">
      <div class="p-4">
        <h5 class="text-lg font-semibold text-gray-800">T-shirt</h5>
      </div>
    </a>

    <a href="#" class="flex-shrink-0 w-60 bg-white rounded-lg shadow-md">
        <img src="{{ asset('photoes/-6325441458194203478_121.jpg') }}" class="w-full h-40 object-cover rounded-t-lg" alt="">
      <div class="p-4">
        <h5 class="text-lg font-semibold text-gray-800">Trend of year</h5>
      </div>
    </a>

    <a href="#" class="flex-shrink-0 w-60 bg-white rounded-lg shadow-md">
        <img src="{{ asset('photoes/-6239988638549131465_121.jpg') }}" class="w-full h-40 object-cover rounded-t-lg" alt="">
      <div class="p-4">
        <h5 class="text-lg font-semibold text-gray-800">Jeans</h5>
      </div>
    </a>
  </div>
</div>
<!-- Footer Start -->
<footer class="bg-gray-900 text-white mt-10 py-10">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

    <!-- Our Address -->
    <div>
      <h5 class="text-xl font-semibold mb-4">Our Address</h5>
      <p class="mb-2"><i class="fa fa-map-marker-alt mr-2"></i>64 Metra Street, Herat, Afghanistan</p>
      <p class="mb-2"><i class="fa fa-phone-alt mr-2"></i>+93799270705</p>
      <p class="mb-4"><i class="fa fa-envelope mr-2"></i>dorsa@gmail.com</p>
      <div class="flex space-x-3">
        <a href="#" class="w-10 h-10 flex items-center justify-center bg-orange-600 rounded-full"><i class="fab fa-facebook-f"></i></a>
        <a href="https://t.me/dorsa_boutique01" class="w-10 h-10 flex items-center justify-center bg-orange-600 rounded-full"><i class="fab fa-telegram"></i></a>
        <a href="tel:+93799270705" class="w-10 h-10 flex items-center justify-center bg-orange-600 rounded-full"><i class="fa fa-phone-alt"></i></a>
        <a href="https://www.instagram.com/dorsa_boutique0?igsh=eWRzanU0dXh1cGto" class="w-10 h-10 flex items-center justify-center bg-orange-600 rounded-full"><i class="fab fa-instagram"></i></a>
      </div>
    </div>

    <!-- Quick Links -->
    <div>
      <h5 class="text-xl font-semibold mb-4">Quick Links</h5>
      <ul class="space-y-2">
        <li><a href="#" class="text-gray-300 hover:text-white">About Us</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Contact Us</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Our Services</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Terms & Conditions</a></li>
        <li><a href="#" class="text-gray-300 hover:text-white">Support</a></li>
      </ul>
    </div>

    <!-- Business Hours -->
    <div>
      <h5 class="text-xl font-semibold mb-4">Business Hours</h5>
      <p class="mb-1">Saturday - Thursday</p>
      <p class="text-orange-400 font-semibold">09:00 am - 10:00 pm</p>
      <p class="mt-4 mb-1">Friday</p>
      <p class="text-orange-400 font-semibold">07:00 am - 12:00 pm</p>
    </div>

    <!-- Newsletter -->
    <div>
      <h5 class="text-xl font-semibold mb-4">Newsletter</h5>
      <p class="mb-4">Send me your suggestion</p>
      <div class="relative">
        <input type="text" placeholder="Your email"
          class="w-full py-3 px-4 pr-28 rounded bg-gray-800 text-white border border-gray-600 placeholder-gray-400">
        <button type="button"
          class="absolute top-1 right-1 bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">SignUp</button>
      </div>
    </div>

  </div>
</footer>
<!-- Copyright -->
<div class="bg-gray-800 text-center py-4 text-sm text-gray-300">
  <p>&copy; <span class="font-semibold">Dorsa</span>, All Rights Reserved.</p>
  <p>Designed and developed by <span class="font-semibold">Shaqayeq Temory</span>.</p>
</div>
<!-- Back to Top Button -->
<a href="#" class="fixed bottom-6 right-6 bg-orange-600 hover:bg-orange-700 text-white w-12 h-12 flex items-center justify-center rounded-full shadow-lg">
  <i class="bi bi-arrow-up text-lg"></i>
</a>
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
</body>
</html>
