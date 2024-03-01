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
        <div class="relative px-4 py-3 mb-4 text-left text-red-700 bg-red-100 border border-red-400 rounded w-80">
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
    <div class="h-auto py-3 ">
        <div class="flex bg-white rounded-lg shadow-lg overflow-hidden mx-auto max-w-sm lg:max-w-6xl h-[810px] border">
            <div class="w-full lg:w-1/2">
                <h2 class="text-2xl font-semibold text-center text-gray-600">VELOCITYBIDS</h2>
                <p class="text-xl text-center text-gray-600">Welcome backl!</p>
                {{-- <a href="#"
                    class="flex items-center justify-center mt-4 text-white rounded-lg shadow-md mx-7 hover:bg-gray-100 ">
                    <div class="px-5 py-3">
                        <svg class="w-6 h-6" viewBox="0 0 40 40">
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
                    <h1 class="w-5/6 px-4 py-3 font-bold text-center text-gray-600">Sign up with Google</h1>
                </a> --}}
                <div class="flex items-center justify-between mt-4 ">
                    <span class="w-1/5 border-b mx-7 lg:w-1/4"></span>
                    <a href="#" class="text-xs text-center text-gray-500 uppercase">or Register with email</a>
                    <span class="w-1/5 border-b mx-7 lg:w-1/4"></span>
                </div>
                <form action="{{ route('admins.register') }}" method="POST" class="h-auto">
                    @csrf

                    <div class="flex flex-col-2">
                        <div class="mt-4 mx-7">
                            <label class="block mb-2 text-sm font-bold text-gray-700">First name</label>
                            <input name="f_name"
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="text" required />
                        </div>
                        <div class="mt-4 mx-7">
                            <label class="block mb-2 text-sm font-bold text-gray-700">Last name</label>
                            <input name="l_name"
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="text" required />
                        </div>
                    </div>

                    <div class="mt-4 mx-7">
                        <label class="block mb-2 text-sm font-bold text-gray-700">Email Address</label>
                        <input name="email"
                            class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                            type="email" required />
                    </div>
                    <div class="mt-4 mx-7">
                        <label class="block mb-2 text-sm font-bold text-gray-700">User Role</label>
                        <select name="user"
                            class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                            required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="mt-4 mx-7">
                        <div class="flex justify-between">
                            <label class="block mb-2 text-sm font-bold text-gray-700">Password</label>

                        </div>
                        <input name="password"
                            class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                            type="password" required />
                    </div>
                    <div class="mt-4 mx-7">
                        <label class="block mb-2 text-sm font-bold text-gray-700">Confirm Password</label>
                        <input name="c_password"
                            class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                            type="password" required />
                    </div>
                    <div class="flex flex-col-2"><label class="mt-4 mx-7">
                            <span class="block mb-2 text-sm font-bold text-gray-700">Gender</span>
                            <select name="gender"
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-[180px]"
                                required>
                                <option value="" class="@selected(true) text-black">Select</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </label>
                        <div class="mt-4 mx-7">
                            <label class="block mb-2 text-sm font-bold text-gray-700">Phone Number</label>
                            <input id="c_number" name="c_number"
                                class="block w-full px-4 py-2 text-gray-700 bg-gray-200 border border-gray-300 rounded appearance-none focus:outline-none focus:shadow-outline"
                                type="tel" required />
                            <div id="phoneNumberError" class="mt-1 text-sm text-red-500"></div>
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
                    <div> <label class="block mt-4 mb-2 text-sm font-bold text-gray-700 mx-7"> Date of Birth</label>
                        <div class="relative mx-7 ">
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
                            <div id="dobError" class="mt-1 text-sm text-red-500"></div>
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
                            class="w-full px-4 py-2 font-bold text-white bg-gray-700 rounded-full hover:bg-gray-600">Register</button>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <span class="w-1/5 border-b md:w-1/4"></span>
                        <a href="login" class="text-xs text-gray-500 uppercase">login</a>
                        <span class="w-1/5 border-b md:w-1/4"></span>
                    </div>
                </form>
            </div>

            <div class="hidden w-auto h-auto bg-cover rounded-full lg:block mt-44">
                <img src="{{ asset('img/registercarbgremoved1.png') }}"
                    class="h-[400px] md:h-[500px] rounded-br-[150px] w-full">
            </div>

        </div>



    </div>

</body>
