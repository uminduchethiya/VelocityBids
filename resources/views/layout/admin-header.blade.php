{{-- search bar --}}
<div class="fixed z-10 bg-white">
    <div class="container 2xl:ml-[220px]">
        <div class="relative flex items-center w-full max-w-md md:h-20">
            <div class="">
                <div class="absolute inline-flex items-center p-2 top-6 left-5">
                    <i class="text-gray-400 fas fa-search"></i>
                </div>
            </div>
            <div class="">
                <div class=" absolute md:ml-[700px] cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </div>
                <div class="absolute md:ml-[740px] cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <div class=" absolute md:w-[35%] md:mt-2 ml-[800px] border-none">
                    <p name="" class="border-none md:w-full" >Umindu Chethiya</p>
                </div>
                <input class="w-full h-10 md:w-[300px] pl-10 pr-5 py-1 md:ml-4 text-base  hidden md:block border border-black rounded-full focus:shadow-outline" type="search" placeholder="Search">
            </div>
        </div>
    </div>
</div>
