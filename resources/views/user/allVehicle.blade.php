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

<body class="bg-white h-screen">
    @include('components.nav-bar')

      {{-- Search bar Section --}}
      <div class="  z-50 hidden   md:block">
        <div class=" md:ml-[60px] md:mt-[110px] lg:ml-[120px]  absolute flex justify-center items-center p-2 md:p-0  ">
            <div
                class="border border-gray-50 lg:h-[180px] lg:w-[1350px] xl:h[1200px] xl:w-[1200px]  p-6 grid grid-cols-1  bg-white shadow-lg rounded-lg">
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


    <div class="">
        <div class="font-bold text-black text-3xl ml-16">Auctions</div>

        <div class="flex flex-col items-center justify-center w-full gap-5 md:flex-row md:mt-[280px] md:p-2 md:gap-20">
            <div class="flex flex-wrap justify-center gap-5 md:justify-start md:gap-10 mx-3">

                @foreach ($vehicles as $vehicle)
                    @if($vehicle->action == 'available')
                        <div class="w-80 h-[350px] bg-white border  border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="rounded-t-lg w-full h-[180px]" src="{{ Storage::url($vehicle->image1) }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $vehicle->vehicle_name }}</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    <span>{{ $vehicle->year }} | </span>
                                    <span>{{ $vehicle->Model }} | </span>
                                    <span>{{ $vehicle->Make }} | </span>
                                    <span>{{ $vehicle->mileage }}</span>
                                </p>
                                <a href="#" class="inline-flex text-red-600 items-center py-2 text-sm font-medium text-center rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    AWAITING BID
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>

        <div class="mt-8">
            {{ $vehicles->links() }}
        </div>
    </div>


@include('components.footer')




</body>

</html>
