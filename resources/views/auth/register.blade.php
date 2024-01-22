<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Boogaloo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Boogaloo&display=swap" rel="stylesheet">
</head>

{{-- registerpage --}}

@if ($errors->any())
    <div class="flex items-center justify-end mt-4">
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4 w-80 text-left">
            <strong class="font-bold">Validation Error!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif



<body>
    <div class=" py-3 h-auto  ">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-6xl h-[810px] border">
            <div class=" w-full lg:w-1/2">
                <h2 class="text-2xl font-semibold text-gray-600 text-center">VELOCITYBIDS</h2>
                <p class="text-xl text-gray-600 text-center">Welcome backl!</p>
                {{-- <a href="#"
                    class="flex items-center justify-center mt-4 mx-7 text-white rounded-lg shadow-md hover:bg-gray-100   ">
                    <div class="px-5 py-3">
                        <svg class="h-6 w-6" viewBox="0 0 40 40">
                            <path
                                d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                fill="#FFC107" />
                            <path
                                d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                                fill="#FF3D00" />
                            <path
                                d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                                fill="#4CAF50" />
                            <path
                                d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                                fill="#1976D2" />
                        </svg>
                    </div>
                    <h1 class="px-4 py-3 w-5/6 text-center text-gray-600 font-bold">Sign up with Google</h1>
                </a> --}}
                <div class=" mt-4  flex items-center justify-between">
                    <span class=" border-b w-1/5 mx-7 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-gray-500 uppercase">or Register with email</a>
                    <span class=" border-b w-1/5 mx-7 lg:w-1/4"></span>
                </div>
                <form action="{{ route('register') }}" method="POST" class="h-auto">
                    @csrf

                    <div class=" flex flex-col-2">
                        <div class="mt-4  mx-7">
                            <label class="block text-gray-700  text-sm font-bold mb-2">First name</label>
                            <input name="f_name"
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="text" required />
                        </div>
                        <div class="mt-4  mx-7">
                            <label class="block text-gray-700  text-sm font-bold mb-2">Last name</label>
                            <input name="l_name"
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="text" required />
                        </div>
                    </div>

                    <div class="mt-4  mx-7">
                        <label class="block text-gray-700  text-sm font-bold mb-2">Email Address</label>
                        <input name="email"
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="email" required />
                    </div>
                    <div class="mt-4  mx-7">
                        <div class="flex justify-between">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>

                        </div>
                        <input name="password"
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="password" required />
                    </div>
                    <div class="mt-4  mx-7">
                        <label class="block text-gray-700  text-sm font-bold mb-2">Confirm Password</label>
                        <input name="c_password"
                            class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                            type="password" required />
                    </div>
                    <div class=" flex flex-col-2"><label class="mt-4  mx-7">
                            <span class="block text-gray-700  text-sm font-bold mb-2">Gender</span>
                            <select name="gender"
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-[180px]"
                                required>
                                <option value="" class="@selected(true) text-black">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </label>
                        <div class="mt-4  mx-7">
                            <label class="block text-gray-700  text-sm font-bold mb-2">Phone Number</label>
                            <input id="c_number" name="c_number"
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="tel" required />
                            <div id="phoneNumberError" class="text-red-500 text-sm mt-1"></div>
                        </div>

                        <script>
                            // Validate phone number
                            function validatePhoneNumber() {
                                var phoneNumber = document.getElementById('c_number').value;

                                // Define the regex pattern for a phone number with 10 digits starting with '0'
                                var regexPattern = /^0\d{9}$/;

                                // Check if the phone number matches the pattern
                                if (!regexPattern.test(phoneNumber)) {
                                    // Display error message
                                    document.getElementById('phoneNumberError').innerHTML =
                                        'Please enter a valid phone number with 10 digits starting with "0".';
                                    return false; // Prevent form submission
                                }

                                // Clear any previous error messages
                                document.getElementById('phoneNumberError').innerHTML = '';
                                return true; // Allow form submission
                            }

                            // Add an event listener to the form submission
                            document.querySelector('form').addEventListener('submit', function(event) {
                                if (!validatePhoneNumber()) {
                                    event.preventDefault(); // Prevent form submission
                                }
                            });
                        </script>


                    </div>
                    <div> <label class="block text-gray-700  text-sm font-bold mb-2 mt-4  mx-7"> Date of Birth</label>
                        <div class="relative   mx-7 ">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none ">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input id="dob" name="dob" datepicker type="text"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-gray-200"
                                placeholder="Select date" required>
                            <div id="dobError" class="text-red-500 text-sm mt-1"></div>
                            <script>
                                function validateDateFormat() {
                                    var dob = document.getElementById('dob').value;
                                    var dateRegex = /^\d{2}\/\d{2}\/\d{4}$/;

                                    if (!dateRegex.test(dob)) {
                                        document.getElementById('dobError').innerHTML = 'Please enter a valid date in MM/DD/YYYY format.';
                                        return false;
                                    }

                                    document.getElementById('dobError').innerHTML = '';
                                    return true;
                                }

                                document.querySelector('form').addEventListener('submit', function(event) {
                                    if (!validateDateFormat()) {
                                        event.preventDefault();
                                    }
                                });
                            </script>

                        </div>
                        <script src="../path/to/flowbite/dist/datepicker.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
                    </div>

                    <div class="mt-8 mx-7">
                        <button
                            class="bg-gray-700 text-white font-bold py-2 px-4 w-full rounded-full hover:bg-gray-600">Register</button>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <span class="border-b w-1/5 md:w-1/4"></span>
                        <a href="login" class="text-xs text-gray-500 uppercase">login</a>
                        <span class="border-b w-1/5 md:w-1/4"></span>
                    </div>
                </form>
            </div>

            {{-- <div class="hidden lg:block w-auto h-auto    bg-cover  mt-44 rounded-full">
                <img src="{{ asset('img/registercarbgremoved1.png') }}"
                    class="h-[400px] md:h-[500px] rounded-br-[150px] w-full">
            </div> --}}

        </div>



    </div>

</body>
