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
<div class="container">
    <!-- Slider main container -->
    <div class="z-0 w-full swiper">

        {{-- mobile home --}}

        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="relative hidden swiper-slide md:block">
                <img src="{{ asset('img/login_car.jpg') }}" class="absolute w-full lg" alt="Flowbite Logo" />


                <p class="text-white text-[70px] font-bold  absolute  mt-[100px] ml-[60px] ">Buy it cheap,<br><span
                        class="">sell it at the auction</span> </p>
                <div class="  mt-[500px] ml-[60px] ">
                    <a href="#"
                        class="bg-buttonorange text-white  py-3  rounded-lg ml-0 absolute font-bold  h-[50px] w-[130px]  text-center justify-center">Place
                        Bid</a>
                    <a href="#"
                        class="bg-white text-black px-4 py-3 rounded-lg ml-[150px] absolute font-bold h-[50px] w-[130px] text-center">Check
                        Car</a>


                </div>

            </div>
            <div class="h-screen md:hidden">
                <img src="{{ asset('img/mobilehome3.jpg') }}" class="absolute w-full mt-24 h-3/5 lg"
                    alt="Flowbite Logo" />
                <div class="  mt-[500px]  mx-5 justify-center ">
                    <p class="text-white text-[34px]  -mt-80  font-bold  absolute  ">Auction is a collector’s <br><span
                            class="">second wife</span>
                    </p>
                    <div class="items-cente mx-7 ">
                        <a href="#"
                            class="bg-buttonorange text-white  py-3  rounded-lg ml-0 absolute font-bold  h-[50px] w-[130px]   text-center justify-center  mt-14">Place
                            Bid</a>
                        <a href="#"
                            class="bg-white text-black px-4 py-3 rounded-lg ml-[200px] absolute font-bold h-[50px] w-[130px]  text-center mt-14">Check
                            Car</a>
                    </div>



                </div>

            </div>





            <div class="relative swiper-slide">
                <img src="{{ asset('img/login_car.jpg') }}" class="absolute hidden w-full md:block"
                    alt="Flowbite Logo" />

                <p class="text-white text-[70px] font-bold  absolute  mt-[100px] ml-[60px] hidden md:block">Auction is a
                    collector’s <br><span class="">second wife</span> </p>
                <div class="  mt-[500px] ml-[60px] ">
                    <a href="#"
                        class="bg-buttonorange text-white  py-3  rounded-lg ml-0 absolute font-bold  h-[50px] w-[130px]  text-center justify-center  hidden md:block">Place
                        Bid</a>
                    <a href="#"
                        class="bg-white text-black px-4 py-3 rounded-lg ml-[150px] absolute font-bold h-[50px] w-[130px] text-center  hidden md:block">Check
                        Car</a>
                </div>

            </div>
        </div>
        {{-- <div class="h-screen ">
            <img src="{{ asset('img/Homecar1.png') }}" class="absolute block w-full md:hidden lg" alt="Flowbite Logo" />
        </div> --}}



        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>



    {{-- Search bar Section --}}
    <div class="z-50 hidden -mt-36 md:block">
        <div class=" md:ml-[60px] lg:ml-[120px]  absolute flex justify-center items-center p-2 md:p-0  ">
            <div
                class="border border-gray-50 lg:h-[180px] lg:w-[1350px] xl:h[1200px] xl:w-[1200px]  p-6 grid grid-cols-1  bg-white shadow-lg rounded-lg">
                <div class="flex flex-col md:flex-row gap-7">


                    <div class="pt-6  flex flex-col w-[250px] ">
                        <label for="">Car Maker</label>
                        <select class="p-2 border rounded">
                            <option value="" selected>Car Maker</option>
                            <option>Audi</option>
                            <option>BMW</option>
                            <option>Ford</option>
                        </select>
                    </div>

                    <div class="pt-6 flex flex-col w-[250px]">
                        <label for="">Car Model</label>
                        <select class="p-2 border rounded">
                            <option value="">Car Model</option>
                            <option>example</option>
                            <option>example</option>
                            <option>example</option>
                        </select>
                    </div>

                    <div class="pt-6 flex flex-col w-[250px]">
                        <label for="">Car Body</label>
                        <select class="p-2 border rounded">
                            <option value="">Car Model</option>
                            <option>example</option>
                            <option>example</option>
                            <option>example</option>
                        </select>
                    </div>


                    <div class="pt-6  flex flex-col w-[250px]">
                        <label for="">Fuel</label>
                        <select class="p-2 border rounded">
                            <option value="">Car Model</option>
                            <option>example</option>
                            <option>example</option>
                            <option>example</option>
                        </select>
                    </div>


                    <div class="pt-6  flex flex-col w-[250px]">
                        <label for="">Color</label>
                        <select class="p-2 border rounded">
                            <option value="">Car Model</option>
                            <option>example</option>
                            <option>example</option>
                            <option>example</option>
                        </select>
                    </div>

                    <div class="flex flex-col pt-10 "><button
                            class="p-2 border bg-buttonorange rounded-md  h-[50px] w-[130px] text-white">Search</button>
                    </div>



                </div>


            </div>
        </div>
    </div>
    {{-- search bar end --}}


    {{-- Action Section --}}
    <div>
        <div class=" font-bold text-black text-3xl ml-16 -mt-[200px] md:mt-56">Auctions</div>

        <div class="flex flex-col items-center justify-center w-full gap-5 md:flex-row md:mt-8 md:p-2 md:gap-20">
            <div class="flex flex-col md:flex-row md:justify-center md:items-start md:gap-5 md:w-full">

                @foreach ($vehicles->sortByDesc('created_at')->take(4) as $vehicle)
                    @if ($vehicle->action == 'available')
                        <div
                            class="w-80 h-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg w-full h-[180px]" src="{{ Storage::url($vehicle->image1) }}"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $vehicle->vehicle_name }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    <span>{{ $vehicle->year }}|<span>
                                            <span>{{ $vehicle->Model }}|</span>
                                            <span>{{ $vehicle->Make }}|</span>
                                            <span>{{ $vehicle->mileage }}</span>
                                </p>
                                <a href="{{ route('bidding', ['id' => $vehicle->id]) }}" class="inline-flex items-center py-2 text-sm font-medium text-center text-red-600 rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    AWAITING BID
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>

        <div class="flex flex-col items-center justify-center w-full gap-5 md:flex-row md:mt-8 md:p-2 md:gap-20">
            <div class="flex flex-col md:flex-row md:justify-center md:items-start md:gap-5 md:w-full">

                @foreach ($vehicles->sortByDesc('created_at')->slice(4, 4) as $vehicle)
                    @if ($vehicle->action == 'available')
                        <div
                            class="w-80  h-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg w-full h-[180px]" src="{{ Storage::url($vehicle->image1) }}"
                                    alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $vehicle->vehicle_name }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    <span>{{ $vehicle->year }}|<span>
                                            <span>{{ $vehicle->Model }}|</span>
                                            <span>{{ $vehicle->Make }}|</span>
                                            <span>{{ $vehicle->mileage }}</span>
                                </p>
                                <a href="{{ route('bidding', ['id' => $vehicle->id]) }}" class="inline-flex items-center py-2 text-sm font-medium text-center text-red-600 rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    AWAITING BID
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>


    </div>

    {{-- about us section --}}
    <div class="">
        <div
            class="font-bold text-black text-4xl md:ml-16 ml-7  mt-[150px]   text-center justify-center md:text-left ">
            About Us</div>
        <div class="flex flex-wrap ml-16 md:flex-row-reverse">
            <!-- Common Text Section -->
            <div class="w-full p-8 pl-10 md:w-1/2 md:text-left md:mt-14 ">
                <div class="mr-10 ">

                    <p class="text-2xl text-center md:text-left">
                        Welcome to Volocity Bids, where passion for vehicles meets innovation in online bidding.
                        Founded
                        by
                        enthusiasts, our platform redefines the thrill of buying and selling automobiles and parts.
                    </p><br>
                    <p class="text-2xl text-center md:text-left">
                        Volocity Bids is more than a marketplace; it's a dynamic community where transparency and
                        trust
                        drive every auction. Join us on the road to your next automotive adventure.
                    </p>
                </div>
            </div>
            <!-- Desktop View -->
            <div class="hidden w-full text-center md:w-1/2 md:flex md:flex-col md:justify-center md:items-center ">
                <img src="{{ asset('img/about.png') }}" class="w-auto h-auto mr-72 " alt="Flowbite Logo" />
            </div>
        </div>
    </div>

    <div class=" text-center md:h-[600px] flex flex-col items-center">
        <div class="flex flex-col mt-8 md:mt-32">
            <h1 class="text-4xl font-bold md:text-5xl">Why Choose <span class="text-primaryColor">Us</span></h1>
            <p class="mt-4 font-bold text-gray-600 md:mt-8 md:text-xl">Discover the Difference with Us</p>
        </div>

        <!-- category list -->
        <div class="flex flex-col mt-4 md:flex-row md:mt-16 md:p-2 md:ml-10">
            <!-- Row 1: All Kind of Pizza Flavors and Fresh Foods -->
            <div class="flex flex-row md:flex-row">
                <div class="flex flex-col items-center mx-10 transition-transform transform group hover:scale-125">
                    <div class="p-4 rounded-full bg-primaryColor">
                        <img src="{{ asset('img/world.png') }}" alt="" class='object-cover w-16 h-16' />
                    </div>
                    <label for=""
                        class='mt-4 font-extrabold md:text-xl text-md text-primaryColor hover:text-primaryColor'>Wide
                        Selection</label>
                    <p class="mt-4 md:mt-0">Find the perfect vehicle from our diverse range, catering to all
                        preferences and budgets.</p>
                </div>

                <div class="flex flex-col items-center mx-10 transition-transform transform group hover:scale-125">
                    <div class="p-4 rounded-full bg-primaryColor">
                        <img src="{{ asset('img/quality.png') }}" alt="" class='object-cover w-16 h-16' />
                    </div>
                    <label for=""
                        class='mt-4 font-extrabold md:text-xl text-md text-primaryColor hover:text-primaryColor'>Quality
                        Assurance</label>
                    <p class="mt-4 md:mt-0">Rest easy knowing all vehicles meet stringent quality standards for
                        reliability.</p>
                </div>
            </div>

            <div class="flex flex-row">
                <!-- Row 2: Best Teast and On Time Delivery -->
                <div class="flex flex-col items-center mx-10 transition-transform transform group hover:scale-125">
                    <div class="p-4 rounded-full bg-primaryColor">
                        <img src="{{ asset('img/trust.png') }}" alt="" class='object-cover w-16 h-16' />
                    </div>
                    <label for=""
                        class='mt-4 font-extrabold md:text-xl text-md text-primaryColor hover:text-primaryColor'>Trust
                        and Security</label>
                    <p class="mt-4 md:mt-0">Shop with confidence knowing your transactions are secure and your data
                        is protected.</p>
                </div>

                <div class="flex flex-col items-center mx-10 transition-transform transform group hover:scale-125">
                    <div class="p-4 rounded-full bg-primaryColor">
                        <img src="{{ asset('img/competitive.png') }}" alt=""
                            class='object-cover w-16 h-16' />
                    </div>
                    <label for=""
                        class='mt-4 font-extrabold md:text-xl text-md text-primaryColor hover:text-primaryColor'>Competitive
                        Pricing</label>
                    <p class="mt-4 md:mt-0">Enjoy unbeatable prices and exclusive deals unavailable elsewhere.</p>
                </div>
            </div>

        </div>

    </div>


    {{-- Car histort Carousol --}}

    <div class="container">
        <div class="container">
            <div class="px-5 py-10">
                <div class="">
                    <div class="flex justify-center">
                        <h1 class="text-3xl font-bold text-primaryColor md:text-5xl">Customer <span
                                class="text-black">Reviews</span>
                        </h1>
                    </div>
                    <p class="flex justify-center text-2xl font-bold text-gray-700">
                        Lorem Ipsum is simply dummy text of the printing
                    </p>

                    <!-- FLICKITY CAROUSEL -->
                    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
                    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

                    <div class="main-carousel h-[410px] mt-10"
                        data-flickity='{
                            "cellAlign": "left",
                            "wrapAround": true,
                            "pageDots": true,
                            "draggable": true
                        }'>

                        @for ($i = 1; $i <= 5; $i++)
                            <div class="carousel-cell">
                                <div
                                    class="carasoul_width w-full h-full px-5 md:w-[459px] md:h-[400px] flex flex-col justify-center md:gap-11 gap-12">
                                    <div class="test w-full p-2 py-10 mx-auto mt-10 bg-[url('/img/Group74.png')] bg-cover bg-center   rounded-3xl md:h-[440px] h-[320px]"
                                        style="background-image: url('{{ asset('/img/Group74.png') }}');">

                                        <div class="w-full rounded-3xl md:h-[200px] md:mt-10">
                                            <p class="text-[12px] font-bold text-center text-black md:text-md w-full">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500s Lorem Ipsum is simply</p>
                                            <div class="flex items-center justify-center md:mt-8 2xl:mt-12">
                                                <img src="{{ asset('img/Group76.png') }}">
                                            </div>
                                            <p class="text-xl font-bold text-center text-white md:text-2xl">Sam Perera
                                            </p>
                                            <p class="text-xl font-bold text-center text-white md:text-md">Driver</p>
                                            <div class="flex justify-center gap-2">
                                                <img src="{{ asset('img/Group.2.png') }}">
                                                <img src="{{ asset('img/Vector.png') }}">
                                                <img src="{{ asset('img/Vector.1.png') }}">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor

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
                    spaceBetween: 200,


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

            <style>
                @media only screen and (width: 1280px) {
                    .test {
                        width: 200px;
                    }

                    .carasoul_width {
                        width: 350px;
                    }

                    /* Add more rules for other elements if needed */
                }

                @media only screen and (width: 1792px) {
                    .test {
                        width: 250px;

                    }

                    .carasoul_width {
                        width: 320px;

                    }

                    /* Add more rules for other elements if needed */
                }



                @media only screen and (min-width: 1366px) and (max-width: 1512px) {
                    .test {
                        width: 300px;
                        /* Adjust the width as needed */
                    }

                    .carasoul_width {
                        width: 320px;

                        /* Adjust the width as needed */
                    }

                    /* Add more rules for other elements if needed */
                }


                @media only screen and (width: 1920px) {
                    .car_text_margin {
                        position: relative;
                        left: 70px;
                    }

                    .car_logos img {
                        width: 250px;
                    }

                    @media (max-width: 767px) {

                        /* Hide background image on screens smaller than 768px width */
                        .md\:flex {
                            background-image: none;
                        }
                    }
                }
            </style>
            @include('components.footer')
        </div>
</body>

</html>
