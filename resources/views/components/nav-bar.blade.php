<!-- resources/views/components/nav-bar.blade.php -->

<div x-data="{ open: false }" class="flex flex-wrap items-center justify-between max-w-screen-xl p-4 mx-auto">
    <img src="{{ asset('img/logo.png') }}" class="h-12" alt="" />

    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
            <li>
                <a href="#" class="block px-3 py-2 text-gray-900 md:dark:bg-transparent hover:text-orange-600" aria-current="page">Home</a>
            </li>
            <li>
                <a href="#" class="block px-3 py-2 text-gray-900 md:dark:bg-transparent hover:text-orange-600" aria-current="page">About</a>
            </li>
            <li>
                <a href="#" class="block px-3 py-2 text-gray-900 md:dark:bg-transparent hover:text-orange-600" aria-current="page">Contact Us</a>
            </li>
            <li>
                <a href="#" class="block px-3 py-2 text-gray-900 md:dark:bg-transparent hover:text-orange-600" aria-current="page">Service</a>
            </li>
            <a href="#" class="px-4 py-2 text-white bg-orange-600 rounded-md hover:bg-orange-700">Register</a>
        </ul>
    </div>

    <div x-show="open" x-cloak class="absolute right-0 z-50 bg-white border border-gray-100 rounded-lg top-16 md:hidden">
        <ul class="flex flex-col p-4 font-medium border-b border-gray-100 md:p-0 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
            <li>
                <a href="#" class="block px-3 py-2 text-gray-900 md:dark:bg-transparent hover:text-orange-600" aria-current="page">Home</a>
            </li>
            <li>
                <a href="#" class="block px-3 py-2 text-gray-900 md:dark:bg-transparent hover:text-orange-600" aria-current="page">About</a>
            </li>
            <li>
                <a href="#" class="block px-3 py-2 text-gray-900 md:dark:bg-transparent hover:text-orange-600" aria-current="page">Contact</a>
            </li>
            <li>
                <a href="#" class="block px-3 py-2 text-gray-900 md:dark:bg-transparent hover:text-orange-600" aria-current="page">Service</a>
            </li>
            <li>
                <!-- Your Register button with orange background -->
                <a href="#" class="block px-3 py-2 text-white bg-orange-600 rounded-md hover:bg-orange-700">Register</a>
            </li>
            <!-- Add more menu items as needed -->
        </ul>
    </div>

    <button @click="open = !open" type="button" class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-orange-600 dark:focus:ring-orange-600" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
</div>
