<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Include Alpine.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

    <!-- Other head elements -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Set the maximum height for the images in the swiper slides */
        .swiper-slide img {
            height: 700px
            /* Adjust this value as needed */
            width: 100%;
        }
    </style>

</head>

<body>
    @include('components.nav-bar')

    <!-- Slider main container -->
    <div class="swiper w-full h-screen">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide  relative">
                <img src="{{ asset('img/Homecar1.png') }}" class="w-full absolute" alt="Flowbite Logo" />

                    <p class="text-white text-[70px] font-bold  absolute  mt-[100px] ml-[60px] ">Buy it cheap,<br><span class=" ">sell it at the auction</span> </p>
                    <div class="  mt-[500px] ml-[60px] ">
                        <a href="#"
                            class=" bg-buttonorange text-white px-4 py-2 rounded-lg ml-[00px] absolute font-bold">Place Bid</a>
                            <a href="#"
                            class=" bg-white text-black px-4 py-2 rounded-lg ml-[150px] absolute font-bold">Check Car</a>


                    </div>

            </div>

            <div class="swiper-slide  relative">
                <img src="{{ asset('img/login_car.jpg') }}" class="w-full absolute" alt="Flowbite Logo" />

                    <p class="text-white text-[70px] font-bold  absolute  mt-[100px] ml-[60px] ">Auction is a collector’s <br><span class=" ">second wife</span> </p>
                    <div class="  mt-[500px] ml-[60px] ">
                        <a href="#"
                            class=" bg-buttonorange text-white px-4 py-2 rounded-lg ml-[00px] absolute font-bold">Place Bid</a>
                            <a href="#"
                            class=" bg-white text-black px-4 py-2 rounded-lg ml-[150px] absolute font-bold">Check Car</a>


                    </div>

            </div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            speed: 200,
            spaceBetween: 100,

            // If we need pagination

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            autoplay: {
            delay: 3000, // Change the delay tfffo your preferred time in milliseconds (e.g., 3000 for 3 seconds)
            disableOnInteraction: false, // Set to false if you want the autoplay to continue even when the user interacts with the swiper
        },

        });
    </script>
@include('components.footer')

</body>

</html>
