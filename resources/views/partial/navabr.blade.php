<!-- Topbar Start -->
<div>
    <div class="hidden bg-orange-600 lg:flex flex-row justify-between items-center">
        <!-- Right info -->
        <div class="flex items-center space-x-4 ps-5">
            <span class="text-sm text-white">Follow Us:</span>
            <a href="#" class="text-orange-200 hover:text-gray-300 transition"><i class="fab fa-facebook-f"></i></a>
            <a href="https://t.me/dorsa_boutique01" class="text-orange-200 hover:text-gray-300 transition"><i class="fab fa-telegram"></i></a>
            <a href="tel:+93799270705" class="text-orange-200 hover:text-gray-300 transition"><i class="fa fa-phone-alt"></i></a>
            <a href="https://www.instagram.com/dorsa_boutique0?igsh=eWRzanU0dXh1cGto" class="text-orange-200 hover:text-gray-300 transition"><i class="fab fa-instagram"></i></a>
        </div>
        <!-- Left info -->
        <div class="flex text-white items-center space-x-2 py-2 px-5">
            <span class="text-lg "><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
            <span class="text-lg ">+93799270705</span>
        </div>
    </div>
</div>
<!-- strat navbar   -->
<nav class="sticky top-0 bg-white shadow-md py-2 px-5 z-50">
    <!-- Left logo -->
    <div class="flex items-center justify-between flex-wrap">
        <a href="index.html" class="flex items-center space-x-2">
        <img src="{{ asset('logo2.png') }}" class="h-10" alt="">
        <h2 class="text-[#d36c06] text-xl">Dorsa Boutique</h2>
        </a>
        <!-- Hamburger Button -->
        <button id="nav-toggle" class="block md:hidden text-gray-800 focus:outline-none">
        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        </button>
    </div>
    <!-- Navigation Links -->
    <div id="nav-menu" class="hidden  md:flex md:items-center md:justify-between mt-4 md:mt-0">
        <div class="flex flex-col md:flex-row md:space-x-6 text-gray-800 font-medium">
            <a href="{{route('home')}}" class="text-orange-700 hover:text-orange-600 py-2">Home</a>
            <a href="{{route('about')}}" class="text-orange-700 hover:text-orange-600 py-2">About</a>
            <!-- Dropdown -->
            <div class="relative group">
                <a href="{{route('products')}}" class="text-orange-700 hover:text-orange-600">Our Products</a>
                <div class="absolute hidden group-hover:block bg-white text-gray-800 mt-2 py-2 w-40 shadow-lg rounded z-50">
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Men Clothes</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Women Clothes</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Children Clothes</a>
                <a href="#" class="block px-4 py-2 hover:bg-gray-100">Children Clothes</a>
                </div>
            </div>
            <a href="{{route('contact')}}" class="text-orange-700 hover:text-orange-600 py-2">Contact</a>
        </div>
        <!-- Cart Icon -->
        <a href="#" class="hidden lg:flex items-center text-orange-600 ml-[700px]">
        <i class="fa fa-cart-arrow-down text-xl"></i>
        <span class="ml-1 px-2 py-0.5 bg-white text-orange-600 text-sm rounded-full">Basket</span>
        </a>
        <!-- User Dropdown -->
        <div class="relative group">
        <a href="#" class="text-orange-600 text-xl">
            <i class="fa fa-user">Personalities</i>
        </a>
        <div class="absolute hidden group-hover:block bg-white text-gray-800 mt-2  py-2 w-40 shadow-lg rounded z-50">
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Log in</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Sign in</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">My Profile</a>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Logout</a>
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
