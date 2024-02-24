<div class="fixed top-0 left-0 flex-col hidden p-2 bg-black md:w-1/4 md:flex md:h-screen h-full">

    <nav class="md:mt-20">
       <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 md:w-1/4 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
       <div class="flex items-center justify-center md:mt-2">
          <a href="{{ route('home') }}">
             <img src="{{ asset('img/logo.png') }}" alt="Logo" class="w-20 md:w-36" />
          </a>
       </div>
       <div class="h-full px-3 py-4 bg-black overflow-y-auto">
             <ul class="space-y-4 font-medium">
                <li class="">
                   <a href="{{route('admin.dashboard')}}" class="flex items-center p-2 text-gray-900 rounded-lg text-white hover:bg-gray-100 hover:bg-primaryColor group hover:rounded-3xl">
                      <svg class="w-5 h-5 text-gray-500 transition duration-75 text-gray-400 group-hover:text-gray-900 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                         <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z"/>
                         <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z"/>
                      </svg>
                      <span class="ms-3">Dashboard</span>
                   </a>
                </li>
                <li class="">
                   <a href="{{route('admin.dashboard')}}" class="flex items-center p-2 text-gray-900 rounded-lg text-white hover:bg-gray-100 hover:bg-primaryColor group hover:rounded-3xl">
                      <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 text-gray-400 group-hover:text-gray-900 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                         <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
                      </svg>
                      <span class="flex-1 ms-3 whitespace-nowrap">Orders</span>
                   </a>
                </li>
                <li class="">
                   <a href="{{route('admin.customerlist')}}" class="flex items-center p-2 text-gray-900 rounded-lg text-white hover:bg-gray-100 hover:bg-primaryColor group hover:rounded-3xl">
                      <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 text-gray-400 group-hover:text-gray-900 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                         <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                      </svg>
                      <span class="flex-1 ms-3 whitespace-nowrap">Customers</span>
                   </a>
                </li>
                <li class="">
                   <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 text-white hover:bg-primaryColor hover:rounded-3xl" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                         <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                         </svg>
                         <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Menu</span>
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                         </svg>
                   </button>
                   <ul id="dropdown-example" class="hidden py-2 space-y-2">
                         <li>
                            <a href="" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Product List</a>
                         </li>
                         <li>
                            <a href="{{route('admin.dashboard')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Add Product</a>
                         </li>
                         <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Edit Product</a>
                         </li>
                   </ul>
                </li>
                <li class="">
                   <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 text-white hover:bg-primaryColor hover:rounded-3xl" aria-controls="dropdown-example2" data-collapse-toggle="dropdown-example2">
                         <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                         </svg>
                         <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Category</span>
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                         </svg>
                   </button>
                   <ul id="dropdown-example2" class="hidden py-2 space-y-2">
                         <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Category List</a>
                         </li>
                         <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Add Category</a>
                         </li>
                         <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Edit Category</a>
                         </li>
                   </ul>
                </li>
                <li class="">
                   <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 text-white hover:bg-primaryColor hover:rounded-3xl" aria-controls="dropdown-example3" data-collapse-toggle="dropdown-example3">
                         <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                         </svg>
                         <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Payment</span>
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                         </svg>
                   </button>
                   <ul id="dropdown-example3" class="hidden py-2 space-y-2">
                         <li>
                            <a href="{{route('admin.dashboard')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Customer Payment</a>
                         </li>
                         <li>
                            <a href="{{route('admin.dashboard')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Order Payment</a>
                         </li>
                         <li>
                            <a href="{{route('admin.dashboard')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Product Payment</a>
                         </li>
                   </ul>
                </li>
                <li class="">
                   <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 text-white hover:bg-primaryColor hover:rounded-3xl" aria-controls="dropdown-example4" data-collapse-toggle="dropdown-example4">
                         <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900 text-gray-400 group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                            <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                         </svg>
                         <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Settings</span>
                         <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                         </svg>
                   </button>
                   <ul id="dropdown-example4" class="hidden py-2 space-y-2">
                         <li>
                            <a href="{{route('admin.dashboard')}}" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Change Password</a>
                         </li>
                         <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 text-white hover:bg-gray-700">Logout</a>
                         </li>
                   </ul>
                </li>
             </ul>
          </div>
       </aside>
    </nav>


 </div>

  <!-- Add this script to handle the dropdown toggle -->
 <script>
   document.addEventListener('DOMContentLoaded', function () {
     const button = document.querySelector('[data-collapse-toggle="dropdown-example"]');
     const dropdown = document.getElementById('dropdown-example');

     button.addEventListener('click', function () {
       dropdown.classList.toggle('hidden'); // Toggle the 'hidden' class
     });
   });

   document.addEventListener('DOMContentLoaded', function () {
     const button = document.querySelector('[data-collapse-toggle="dropdown-example2"]');
     const dropdown = document.getElementById('dropdown-example2');

     button.addEventListener('click', function () {
       dropdown.classList.toggle('hidden'); // Toggle the 'hidden' class
     });
   });

   document.addEventListener('DOMContentLoaded', function () {
     const button = document.querySelector('[data-collapse-toggle="dropdown-example3"]');
     const dropdown = document.getElementById('dropdown-example3');

     button.addEventListener('click', function () {
       dropdown.classList.toggle('hidden'); // Toggle the 'hidden' class
     });
   });

   document.addEventListener('DOMContentLoaded', function () {
     const button = document.querySelector('[data-collapse-toggle="dropdown-example4"]');
     const dropdown = document.getElementById('dropdown-example4');

     button.addEventListener('click', function () {
       dropdown.classList.toggle('hidden'); // Toggle the 'hidden' class
     });
   });
 </script>
