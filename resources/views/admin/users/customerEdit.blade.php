@extends('layout.adminLayout')
@section('content')
@vite('resources/css/app.css')
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="container">
        <div class="mx-10 md:mt-40">
            <h1 class="text-[40px] font-anton text-primaryColor">Customer <span class="text-black">Edit</span></h1>
           
            <form action="{{route('admin.user.customerUpdate',$user->id)}}" method="post" class="flex flex-col  mx-auto md:mt-8 font-boogaloo text-[20px] mt-4">
                @method('post')
                @csrf
                <div class="flex flex-row gap-4 md:gap-8">
                    <div class="w-7/12">
                        <label for="">First Name </label>
                        <input type="text" placeholder="First Name" name="f_name" value="{{ $user->f_name }}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                            @error('first_name')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-7/12">
                        <label for="">Last Name </label>
                        <input type="text" placeholder="Last Name" name="l_name" value="{{ $user->l_name }}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                            @error('last_name')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-row gap-4 md:gap-8">
                    <div class="w-7/12">
                        <label for="">Phone Number </label>
                        <input type="number" placeholder="Phone Number " name="c_number"
                            value="{{ $user->c_number }}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60"> @error('c_number')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="w-7/12">
                        <label for=""> Email Address </label>
                        <input type="email" placeholder="email" name="email" value="{{ $user->email }}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                            @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="flex  flex-row gap-4 md:gap-8">
                    {{-- <div> <label class="block text-gray-700  text-sm font-bold mb-2 mt-4  mx-7"> Date of Birth</label>
                        <div class="relative   mx-7 ">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none ">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input id="dob" name="dob" datepicker type="text" value="{{$user->dob}}"
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
                    </div> --}}


                    <label class=" w-[600px]">
                        <span class="block text-gray-700   font-bold ">Gender</span>
                        <select name="gender" class="text-gray-700 focus:outline-none border-gray-800 focus:shadow-outline border rounded-lg py-2 px-4 block w-[470px]" required>
                            <option value="" @if ($user->gender == '') selected @endif>Select</option>
                            <option value="male" @if ($user->gender == 'male') selected @endif>Male</option>
                            <option value="female" @if ($user->gender == 'female') selected @endif>Female</option>
                        </select>

                        @error('gender')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </label>





                </div>
                <button type="submit"
                    class="items-center bg-red-800 mt-4 p-2 bg-primaryColor flex justify-start md:w-[15%] w-[150px] rounded-lg text-black md:mt-8 text-center">
                    <span class="mx-auto">Update</span>
                </button>
            </form>
        </div>
    </div>
@endsection
