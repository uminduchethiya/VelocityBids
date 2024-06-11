<!-- resources/views/header.blade.php -->

<header class='absolute z-50 flex items-center w-full bg-white header md:mb-4'>
    <div class="container font-boogaloo">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('img/logo.png') }}" class="h-16 " alt="Flowbite Logo" />
                <span
                    class="self-center hidden text-2xl font-semibold whitespace-nowrap dark:text-transparent md:block">VelocityBids</span>
            </a>
            <!-- menu -->
            <!-- resources/views/your-view.blade.php -->

            <div x-data="{ open: false }" class="navigation">
                <ul class="menu md:flex gap-[2.7rem] hidden">
                    <li>
                        <a href="{{ route('home') }}" class="text-black hover:text-orange-600">Home</a>
                    </li>
                    <li x-data="{ open: false }" @click.away="open = false" class="relative group">
                        <a @click="open = !open" href="{{ route('getallvehicle') }}"
                            class="flex items-center text-black hover:text-orange-600">
                            All Vehicle
                            {{-- <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg> --}}
                        </a>

                        <!-- Dropdown menu -->
                        {{-- <ul x-show="open" @click.away="open = false"
                            class="absolute left-0 mt-2 space-y-2 text-black transition-opacity duration-300 ease-in-out bg-white"
                            role="menu">
                            <li role="menuitem"><a href="#"
                                    class="block px-4 py-2 hover:text-orange-600 hover:bg-gray-100">Car</a>
                            </li>
                            <li role="menuitem"><a href="#"
                                    class="block px-4 py-2 hover:text-orange-600 hover:bg-gray-100">Van</a>
                            </li>
                            <li role="menuitem"><a href="#" class="block px-4 py-2 hover:text-orange-600">Motorcycle</a>
                            </li>
                            <li role="menuitem"><a href="#"
                                    class="block px-4 py-2 hover:text-orange-600 hover:bg-gray-100">Bus</a>
                            </li>
                            <li role="menuitem"><a href="#"
                                    class="block px-4 py-2 hover:text-orange-600 hover:bg-gray-100">Boat</a>
                            </li>
                        </ul> --}}
                    </li>
                    <li x-data="{ open: false }" @click.away="open = false" class="relative group"><a
                            @click="open = !open" href="{{ route('shop') }}"
                            class="flex items-center text-black hover:text-orange-600">
                            Shop
                            {{-- <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg> --}}
                        </a>

                        <!-- Dropdown menu -->
                        {{-- <ul x-show="open" @click.away="open = false"
                            class="absolute left-0 mt-2 space-y-2 text-black transition-opacity duration-300 ease-in-out bg-white"
                            role="menu">
                            <li role="menuitem"><a href="#"
                                    class="block px-4 py-2 hover:text-orange-600 hover:bg-gray-100">abcd</a>
                            </li>
                            <li role="menuitem"><a href="#"
                                    class="block px-4 py-2 hover:text-orange-600 hover:bg-gray-100">Part</a>
                            </li>
                        </ul> --}}
                    </li>

                    <li>
                        <a href="{{ route('user.about') }}" class="text-black hover:text-orange-600">About</a>
                    </li>
                    <li>
                        <a href="{{ route('user.contact') }}" class="text-black hover:text-orange-600">Contact</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <!-- nav-right -->
    <div class="flex items-center h-20 gap-4 px-5">
        <div class="md:block">
            <button type="button"
                class="h-10 px-4 font-extrabold text-white rounded-lg w-28 md:w-28 bg-buttonorange hover:bg-orange-700">
                <a href="{{ route('bid.add-bid') }}">Bid now!</a>
            </button>
        </div>
        <a href="" class=" text-gray-800">
            <!-- component -->
            <div class="flex justify-center items-center">
                <div class="relative md:mb-4 mb-4">
                    <a href="{{ route('view.cart') }}">
                        <div class="t-0 absolute left-3">
                            @php
                                use Illuminate\Support\Facades\Auth;
                                use App\Models\Cart;

                                $userId = Auth::id();
                                $productId = 0; // Set the product ID for which you want to get the count

                                $count = Cart::where('user_id', $userId)->count();
                            @endphp

                            <p
                                class="flex h-2 w-2 items-center justify-center rounded-full bg-red-500 p-3 text-xs text-white">
                                {{ $count }}
                            </p>

                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="file: mt-4 h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                        </svg>
                    </a>

                </div>
            </div>
        </a>


        <div class="relative flex text-left ">
            <a href="#" class="pl-4 text-gray-800 hover:text-orange-600" id="dropdown-menu">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
            </a>

            <!-- Dropdown Content -->
            <div class="absolute right-0 hidden mt-8 origin-top-right bg-white rounded-md shadow-lg md:w-48 ring-1 ring-black ring-opacity-5"
                id="dropdown-content">
                <div class="py-1 text-balance">
                    @if (auth()->check())
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-orange-600">
                            {{ auth()->user()->f_name }} {{ auth()->user()->l_name }}
                        </a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-orange-600">Edit</a>
                        <a href="#"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-orange-600">Bid</a>
                        <a href="{{ route('logout') }}"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-orange-600">Log Out</a>
                    @else
                        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-orange-600">
                            Anonymous User
                        </a>
                        <a href="{{ route('loginindex') }}"
                            class="block px-4 py-2 text-gray-800 hover:bg-gray-100 hover:text-orange-600">Log In</a>
                    @endif

                </div>
            </div>

        </div>
    </div>

    </div>

</header>

<!-- Include Alpine.js -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script>

<!-- Mobile header for smaller screens -->
<header class='fixed bottom-0 z-20 flex items-center justify-center w-full h-24 bg-black header md:mb-4 md:hidden'>
    <!-- Your mobile-specific header content -->
    <div class="navigation md:flex items-center gap-[0.7rem] text-xl">
        <!-- Your mobile menu items here -->
        <ul class="container flex flex-row items-center gap-10 text-xl menu">
            <li>
                <a href="{{ route('home') }}" class="flex flex-col items-center text-white">
                    <img src="{{ asset('img/home-icon.png') }}" alt="" class="w-6 h-6 mb-1 ">
                    Home
                </a>
            </li>
            <li>
                <a href="" class="flex flex-col items-center text-white">
                    <img src="{{ asset('img/car-icon.png') }}" alt="" class="w-6 h-6 mb-1">
                    Vehicle
                </a>
            </li>
            <li>
                <a href="" class="flex flex-col items-center text-white">
                    <img src="{{ asset('img/parts-icon.png') }}" alt="" class="w-6 h-6 mb-1">
                    Parts
                </a>
            </li>
            <li>
                <a href="" class="flex flex-col items-center text-white">
                    <img src="{{ asset('img/about-icon.png') }}" alt="" class="w-6 h-6 mb-1">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('user.contact') }}" class="flex flex-col items-center text-white">
                    <img src="{{ asset('img/contact-icon.png') }}" alt="" class="w-6 h-6 mb-1">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</header>

<script>
    document.getElementById('dropdown-menu').addEventListener('click', function() {
        document.getElementById('dropdown-content').classList.toggle('hidden');
    });

    // Close dropdown when clicking outside
    window.addEventListener('click', function(event) {
        const dropdown = document.getElementById('dropdown-content');
        const menu = document.getElementById('dropdown-menu');

        if (!menu.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add('hidden');
        }
    });
</script>
