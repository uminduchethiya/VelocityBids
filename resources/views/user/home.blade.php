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
    <div class="swiper w-full h-screen z-0">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide  relative">
                <img src="{{ asset('img/login_car.jpg') }}" class="w-full absolute" alt="Flowbite Logo" />

                <p class="text-white text-[70px] font-bold  absolute  mt-[100px] ml-[60px] ">Buy it cheap,<br><span class=" ">sell it at the auction</span> </p>
                <div class="  mt-[500px] ml-[60px] ">
                    <a href="#"
                        class="bg-buttonorange text-white  py-3  rounded-lg ml-0 absolute font-bold  h-[50px] w-[130px]  text-center justify-center">Place
                        Bid</a>
                    <a href="#"
                        class="bg-white text-black px-4 py-3 rounded-lg ml-[150px] absolute font-bold h-[50px] w-[130px] text-center">Check
                        Car</a>


                </div>

            </div>


            <div class="swiper-slide  relative">
                <img src="{{ asset('img/login_car.jpg') }}" class="w-full absolute" alt="Flowbite Logo" />

                <p class="text-white text-[70px] font-bold  absolute  mt-[100px] ml-[60px] ">Auction is a collector’s <br><span class=" ">second wife</span> </p>
                <div class="  mt-[500px] ml-[60px] ">
                    <a href="#"
                        class="bg-buttonorange text-white  py-3  rounded-lg ml-0 absolute font-bold  h-[50px] w-[130px]  text-center justify-center">Place
                        Bid</a>
                    <a href="#"
                        class="bg-white text-black px-4 py-3 rounded-lg ml-[150px] absolute font-bold h-[50px] w-[130px] text-center">Check
                        Car</a>



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


    {{-- Search bar Section --}}
    <div class="-mt-32 z-50">
        <div class=" ml-16 absolute flex justify-center items-center p-2 md:p-0">
            <div class="border border-gray-50 h-[180px] w-[1350px] p-6 grid grid-cols-1  bg-white shadow-lg rounded-lg">
                <div class="flex flex-col md:flex-row gap-7">


                    <div class="pt-6  flex flex-col w-[250px] ">
                        <label for="">Car Maker</label>
                        <select class="border p-2 rounded">
                            <option value="" selected>Car Maker</option>
                            <option>Audi</option>
                            <option>BMW</option>
                            <option>Ford</option>
                        </select>
                    </div>

                    <div class="pt-6 flex flex-col w-[250px]">
                        <label for="">Car Model</label>
                        <select class="border p-2 rounded">
                            <option value="">Car Model</option>
                            <option>example</option>
                            <option>example</option>
                            <option>example</option>
                        </select>
                    </div>

                    <div class="pt-6 flex flex-col w-[250px]">
                        <label for="">Car Body</label>
                        <select class="border p-2 rounded">
                            <option value="">Car Model</option>
                            <option>example</option>
                            <option>example</option>
                            <option>example</option>
                        </select>
                    </div>


                    <div class="pt-6  flex flex-col w-[250px]">
                        <label for="">Fuel</label>
                        <select class="border p-2 rounded">
                            <option value="">Car Model</option>
                            <option>example</option>
                            <option>example</option>
                            <option>example</option>
                        </select>
                    </div>


                    <div class="pt-6  flex flex-col w-[250px]">
                        <label for="">Color</label>
                        <select class="border p-2 rounded">
                            <option value="">Car Model</option>
                            <option>example</option>
                            <option>example</option>
                            <option>example</option>
                        </select>
                    </div>

                    <div class=" pt-10 flex flex-col"><button
                            class="p-2 border bg-buttonorange rounded-md  h-[50px] w-[130px] text-white">Search</button>
                    </div>



                </div>


            </div>
        </div>
    </div>
    {{-- search bar end --}}


    {{-- Action Section --}}
    <div>
        <div class=" font-bold text-black text-3xl ml-16 mt-[250px]">Auctions</div>

        <div class="flex flex-col items-center justify-center w-full gap-5 md:flex-row md:mt-8 md:p-2 md:gap-20 ">
            <div class="flex flex-row gap-16  md:flex-row ml-10 ">



                <div
                    class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  ">
                    <a href="#">
                        <img class="rounded-t-lg " src="{{ asset('img/login_car.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW X6
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span>2022 |</span> <span>5500km
                                |</span> <span>1 997 cm3 |</span> <span>hybrid</span>
                        </p>
                        <a href="#"
                            class="inline-flex items-center  py-2 text-sm font-medium text-center text-black rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Current Bid: <span class=" text-buttonorange ">200000$</span>

                        </a>
                    </div>
                </div>


                <div
                    class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  ">
                    <a href="#">
                        <img class="rounded-t-lg " src="{{ asset('img/login_car.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW X6
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span>2022 |</span> <span>5500km
                                |</span> <span>1 997 cm3 |</span> <span>hybrid</span>
                        </p>
                        <a href="#"
                            class="inline-flex items-center  py-2 text-sm font-medium text-center text-black rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Current Bid: <span class=" text-buttonorange ">200000$</span>

                        </a>
                    </div>
                </div>
                <div
                    class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  ">
                    <a href="#">
                        <img class="rounded-t-lg " src="{{ asset('img/login_car.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW X6
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span>2022 |</span> <span>5500km
                                |</span> <span>1 997 cm3 |</span> <span>hybrid</span>
                        </p>
                        <a href="#"
                            class="inline-flex items-center  py-2 text-sm font-medium text-center text-black rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Current Bid: <span class=" text-buttonorange ">200000$</span>

                        </a>
                    </div>
                </div>
                <div
                    class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  ">
                    <a href="#">
                        <img class="rounded-t-lg " src="{{ asset('img/login_car.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW X6
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span>2022 |</span> <span>5500km
                                |</span> <span>1 997 cm3 |</span> <span>hybrid</span>
                        </p>
                        <a href="#"
                            class="inline-flex items-center  py-2 text-sm font-medium text-center text-black rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Current Bid: <span class=" text-buttonorange ">200000$</span>

                        </a>
                    </div>
                </div>

            </div>


        </div>


        <div class="flex flex-col items-center justify-center w-full gap-5 md:flex-row md:mt-8 md:p-2 md:gap-20 ">
            <div class="flex flex-row gap-16  md:flex-row ml-10 ">



                <div
                    class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  ">
                    <a href="#">
                        <img class="rounded-t-lg " src="{{ asset('img/login_car.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW X6
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span>2022 |</span> <span>5500km
                                |</span> <span>1 997 cm3 |</span> <span>hybrid</span>
                        </p>
                        <a href="#"
                            class="inline-flex items-center  py-2 text-sm font-medium text-center text-black rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Current Bid: <span class=" text-buttonorange ">200000$</span>

                        </a>
                    </div>
                </div>


                <div
                    class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  ">
                    <a href="#">
                        <img class="rounded-t-lg " src="{{ asset('img/login_car.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW X6
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span>2022 |</span> <span>5500km
                                |</span> <span>1 997 cm3 |</span> <span>hybrid</span>
                        </p>
                        <a href="#"
                            class="inline-flex items-center  py-2 text-sm font-medium text-center text-black rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Current Bid: <span class=" text-buttonorange ">200000$</span>

                        </a>
                    </div>
                </div>
                <div
                    class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  ">
                    <a href="#">
                        <img class="rounded-t-lg " src="{{ asset('img/login_car.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW X6
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span>2022 |</span> <span>5500km
                                |</span> <span>1 997 cm3 |</span> <span>hybrid</span>
                        </p>
                        <a href="#"
                            class="inline-flex items-center  py-2 text-sm font-medium text-center text-black rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Current Bid: <span class=" text-buttonorange ">200000$</span>

                        </a>
                    </div>
                </div>
                <div
                    class="w-72 h-80 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700  ">
                    <a href="#">
                        <img class="rounded-t-lg " src="{{ asset('img/login_car.jpg') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">BMW X6
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><span>2022 |</span> <span>5500km
                                |</span> <span>1 997 cm3 |</span> <span>hybrid</span>
                        </p>
                        <a href="#"
                            class="inline-flex items-center  py-2 text-sm font-medium text-center text-black rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Current Bid: <span class=" text-buttonorange ">200000$</span>

                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>
    <div class="">
        <div class="font-bold text-black text-3xl ml-16 mt-[150px]">About Us</div>
        <div class="flex flex-wrap md:flex-row-reverse ml-16">
            <!-- Common Text Section -->
            <div class="w-full p-8 pl-10 md:w-1/2 md:text-left md:mt-14">
                <div class="mt-8">
                    <p class="mb-4 text-2xl font-bold text-center">Our Story</p>
                    <p class="text-lg md:text-left text-center">
                        Welcome to Volocity Bids, where passion for vehicles meets innovation in online bidding. Founded
                        by
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
                delay: 3000, // Change the delay to your preferred time in milliseconds (e.g., 3000 for 3 seconds)
                disableOnInteraction: false, // Set to false if you want the autoplay to continue even when the user interacts with the swiper
            },

        });
    </script>
    @include('components.footer')

</body>

</html>
