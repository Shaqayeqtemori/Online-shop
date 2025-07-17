<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products</title>
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
    {{-- products --}}
   <div class="rounded-xl h-auto w-[100%]  max-w-4xl  bg-white p-10">
        <!-- flex container -->
        <div class="container flex  justify-center items-center px-6 mx-auto mt-3 ">
            <!-- items -->
            <div class="flex flex-col items-center space-y-2 mt-4 mb-4">
                <h1 class="w-full text-center text-2xl md:text-4xl font-bold">
                Our Products
                </h1>
                <p class="max-w-sm text-center text-gray-600">
                Discover great new Dresses and clothes here!
                </p>
            </div>
        </div>
        <!-- cards -->
        <div class="max-w-9xl mx-auto mt-3">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-9">
                <!-- card1 -->
                <div class="bg-gray-100  rounded-xl bg-gray-100 overflow-hidden" style="height: 430px;">
                    <div class="relative">
                        <!-- img -->
                        <img src="{{ asset('17366867155960.jpg') }}" class="w-full h-60">
                        <!-- icon -->
                        <div class="absolute top-2 right-2 bg-gray-600 text-white p-2 rounded-full">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">Men Clothes</h3>
                        <p class="text-gray-600">It is in different colors and sizes</p>
                            <div class="flex items-center justify-center md:justify-start">
                            <a href="#" class="p-3  px-6 pt-2  bg-gray-500 text-white rounded-full baseline ">
                            Buy Now</a>
                        </div>
                    </div>
                </div>
                <!-- card2 -->
                <div class=" rounded-xl bg-gray-100 overflow-hidden" style="height: 430px;">
                    <div class="relative">
                        <!-- img -->
                        <img src="{{ asset('img.jpg') }}" class="w-full h-60">
                        <!-- icon -->
                        <div class="absolute top-2 right-2 bg-gray-600 text-white p-2 rounded-full">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">Women Clothes</h3>
                        <p class="text-gray-600">It is the greates clothes here!</p>
                        <div class="flex items-center justify-center md:justify-start">
                            <a href="#" class="p-3  px-6 pt-2  bg-gray-500 text-white rounded-full baseline ">
                            Buy Now</a>
                        </div>
                    </div>
                </div>
                <!-- card3 -->
                <div class=" rounded-xl bg-gray-100 overflow-hidden" style="height: 430px;">
                    <div class="relative">
                        <!-- img -->
                        <img src="{{ asset('k.jpg') }}" class="w-full h-60">
                        <!-- icon -->
                        <div class="absolute top-2 right-2 bg-gray-600 text-white p-2 rounded-full">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">Children Clothes</h3>
                        <p class="text-gray-600">It is the greates clothes here!</p>
                            <div class="flex items-center justify-center md:justify-start">
                            <a href="#" class="p-3  px-6 pt-2  bg-gray-500 text-white rounded-full baseline ">
                            Buy Now</a>
                        </div>
                    </div>
                </div>
                <!-- card4-->
                <div class=" rounded-xl bg-gray-100 overflow-hidden" style="height: 430px;">
                    <div class="relative">
                        <!-- img -->
                        <img src="{{ asset('k.jpg') }}" class="w-full h-60">
                        <!-- icon -->
                        <div class="absolute top-2 right-2 bg-gray-600 text-white p-2 rounded-full">
                            <i class="fa fa-cart-plus"></i>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="p-4">
                        <h3 class="text-lg font-bold mb-2">Women Clothes</h3>
                        <p class="text-gray-600">It is the greates clothes here!</p>
                        <div class="flex items-center justify-center md:justify-start">
                            <a href="#" class="p-3  px-6 pt-2  bg-gray-500 text-white rounded-full baseline ">
                            Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
  @endsection
</body>
</html>
