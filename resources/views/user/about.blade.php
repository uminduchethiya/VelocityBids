<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your Page Title</title>
    <!-- Include your styles from Vite -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Include Alpine.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

    <!-- Include Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofGJnTLq+5NoRyZlF+JecXCFpY6j1p5Fa" crossorigin="anonymous">

</head>

<body class="bg-white">
    @include('components.nav-bar')
    <!-- Common Text Section -->
    <div class="flex flex-wrap md:flex-row-reverse bg-gradient-to-r from-orange-100 via-orange-50 to-white">
        <!-- Desktop View -->
        <div class="hidden w-full p-4 text-center md:w-1/2 md:flex md:flex-col md:justify-center md:items-center">
            <img src="{{ asset('img/contact-main.png') }}" class="w-auto h-auto" alt="Flowbite Logo" />
        </div>

        <!-- Common Text Section -->
        <div class="w-full p-8 pl-10 md:w-1/2 md:text-left ">
            <p class="mb-4 text-2xl font-bold">About Us</p>
            <p class="text-5xl font-bold pb-10">Welcome to our Vehicle Bidding Platform</p>

            <span class="text-yellow-500">★</span>
            <span class="text-yellow-500">★</span>
            <span class="text-yellow-500">★</span>
            <span class="text-yellow-500">★</span>
            <span class="text-yellow-500">★</span>

            <p class="text-lg">Explore and Bid with Confidence</p>
            <p class="text-lg">Join our community with a Trust Rating of 5.0 based on 2348 Reviews</p>
        </div>
    </div>
    <!-- Common Text Section -->
    <div class="flex flex-wrap md:flex-row-reverse ">
        <!-- Common Text Section -->
        <div class="w-full p-8 pl-10 md:w-1/2 md:text-left md:mt-14">
            <div class="mt-8">
                <p class="mb-4 text-2xl font-bold text-center">Our Story</p>
                <p class="text-lg md:text-left text-center">
                    Welcome to Volocity Bids, where passion for vehicles meets innovation in online bidding. Founded by
                    enthusiasts, our platform redefines the thrill of buying and selling automobiles and parts.
                </p><br>
                <p class="text-lg md:text-left text-center">
                    Volocity Bids is more than a marketplace; it's a dynamic community where transparency and trust
                    drive every auction. Join us on the road to your next automotive adventure.
                </p>
            </div>
        </div>
        <!-- Desktop View -->
        <div class="hidden w-full  text-center md:w-1/2 md:flex md:flex-col md:justify-center md:items-center ">
            <img src="{{ asset('img/about-story.png') }}" class="w-auto h-auto" alt="Flowbite Logo" />
        </div>
    </div>
    <!-- Common Text Section -->
    <div class="flex gap-4 m-4 md:mt-16">
        <div
            class="w-full sm:w-1/1 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 p-4 bg-transparent border-2 border-orange-600 rounded-2xl font-bold text-center">
            <p class="mb-4 text-xl font-bold">Our Vision</p>
            <p class="text-lg mb-6">To revolutionize the vehicle bidding experience and create a trusted platform for
                buyers and sellers.</p>
        </div>
        <div
            class="w-full sm:w-1/1 md:w-1/2 lg:w-1/2 xl:w-1/2 mb-4 p-4 bg-transparent border-2 border-orange-600 rounded-2xl font-bold text-center">
            <p class="mb-4 text-xl font-bold">Our Mission</p>
            <p class="text-lg">To provide a seamless and secure bidding environment, fostering transparency and
                satisfaction for all participants.</p>
        </div>
    </div>

    <!-- Slider -->
<div class="flex items-center justify-center mt-8 m-4">
    <div class="w-full ">
        <div class="slider">
            <div class="carousel-slide">
                <img src="{{ asset('img/slide1.jpg') }}" alt="Slide 1" class="w-full h-64 object-cover md:h-80">
            </div>
            <div class="carousel-slide">
                <img src="{{ asset('img/slide2.jpg') }}" alt="Slide 2" class="w-full h-64 object-cover md:h-80">
            </div>
            <div class="carousel-slide">
                <img src="{{ asset('img/slide3.jpg') }}" alt="Slide 3" class="w-full h-64 object-cover md:h-80">
            </div>
        </div>
    </div>
</div>
<!-- End Slider -->

@include('components.footer')

<!-- Your other content goes here -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    // Initialize Slick Carousel
    $(document).ready(function() {
        $('.slider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true, // Display arrows
            dots: true,
            prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><i class="fas fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next" aria-label="Next"><i class="fas fa-chevron-right"></i></button>',
        });
    });
</script>

    <!-- Initialize Alpine.js -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Alpine.start();
        });
    </script>

</body>

</html>
