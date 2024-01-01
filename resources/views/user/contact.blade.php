<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Your Page Title</title>
    <!-- Include your styles from Vite -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Include Alpine.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

    <!-- Other head elements -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="bg-white">
    @include('components.nav-bar')
    <div class="flex flex-col flex-grow min-h-screen">
        <div class="flex flex-wrap md:flex-row-reverse bg-gradient-to-r from-orange-100 via-orange-50 to-white">

            <!-- Common Text Section -->
            <div class="flex flex-wrap md:flex-row-reverse bg-gradient-to-r from-orange-100 via-orange-50 to-white">
                <!-- Desktop View -->
                <div
                    class="hidden w-full p-4 text-center md:w-1/2 md:flex md:flex-col md:justify-center md:items-center">
                    <img src="{{ asset('img/contact-main.png') }}" class="w-auto h-auto" alt="Flowbite Logo" />
                </div>

                <!-- Common Text Section -->
                <div class="w-full p-8 pl-10 md:w-1/2 md:text-left ">
                    <p class="mb-4 text-2xl font-bold">Contact Us</p>
                    <p class="text-5xl font-bold">Vehicle Bidding Website</p>

                    <span class="text-yellow-500">★</span>
                    <span class="text-yellow-500">★</span>
                    <span class="text-yellow-500">★</span>
                    <span class="text-yellow-500">★</span>
                    <span class="text-yellow-500">★</span>

                    <p class="text-lg">Trust Rating 5.0</p>
                    <p class="text-lg">2348 Reviews</p>
                </div>
            </div>
        </div>
        <div class="mapouter">
            <div class="gmap_canvas">
                <iframe class="w-full h-[80vh] p-8"
                    src="https://maps.google.com/maps?q=nibm,galle&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                    frameborder="0" scrolling="no">
                </iframe>
            </div>
        </div>
        <div>
            <h2 class="md:text-4xl text-center font-bold m-4 text-2xl">
                HOW CAN WE HELP YOU
            </h2>
        </div>
        <div class="flex flex-wrap mb-4">
            <div class="w-full sm:w-1/1 md:w-1/2 lg:w-1/2 xl:w-1/2 px-4 pt-4 ">
                <form class="mb-12 w-full md:px-3 lg:mb-0 lg:w-full lg:px-6">

                    <div class="mb-3 w-full">
                        <label class="block font-medium mb-[2px] text-orange-600" htmlFor="exampleInput90">
                            Name
                        </label>
                        <input type="text" class="px-2 py-2 border w-full outline-none rounded-md"
                            id="exampleInput90" placeholder="Name" />
                    </div>

                    <div class="mb-3 w-full">
                        <label class="block font-medium mb-[2px] text-orange-600" htmlFor="exampleInput90">
                            Email
                        </label>
                        <input type="email" class="px-2 py-2 border w-full outline-none rounded-md"
                            id="exampleInput90" placeholder="Enter your email address" />
                    </div>

                    <div class="mb-3 w-full">
                        <label class="block font-medium mb-[2px] text-orange-600" htmlFor="exampleInput90">
                            Message
                        </label>
                        <textarea class="px-2 py-2 border rounded-[5px] w-full outline-none" name="" id=""></textarea>
                    </div>

                    <button type="button"
                        class=" inline-block w-full rounded bg-orange-600 px-6 py-2.5 font-medium uppercase leading-normal text-white hover:shadow-md hover:bg-orange-700">
                        Send
                    </button>

                </form>
            </div>
            <div class="w-full sm:w-1/1 md:w-1/2 lg:w-1/2 xl:w-1/2 border-black px-4 pt-4">
                <div class="mt-10 mb">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10 md:mb-28">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-orange-600 text-white">
                                    <!-- Heroicon name: globe-alt -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                    </svg>

                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Address
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    123 Main St, Suite 100<br>
                                    Anytown, USA 12345
                                </dd>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-orange-600 text-white">
                                    <!-- Heroicon name: phone -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                    </svg>

                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Phone number
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    (555) 555-5555
                                </dd>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-orange-600 text-white">
                                    <!-- Heroicon name: mail -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                    </svg>

                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Email
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    info@ourstore.com
                                </dd>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-shrink-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-orange-600 text-white">
                                    <!-- Heroicon name: clock -->
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>

                                </div>
                            </div>
                            <div class="ml-4">
                                <dt class="text-lg leading-6 font-medium text-gray-900">
                                    Store Hours
                                </dt>
                                <dd class="mt-2 text-base text-gray-500">
                                    Monday - Friday: 9am to 8pm<br>
                                    Saturday: 10am to 6pm<br>
                                    Sunday: 12pm to 4pm
                                </dd>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>

        </div>
    </div>



    </div>

    </div>
    </div>



    @include('components.footer')

    <!-- Your other content goes here -->

    <script>
        // Initialize Alpine.js
        document.addEventListener('DOMContentLoaded', function() {
            Alpine.start();
        });
    </script>
</body>

</html>
