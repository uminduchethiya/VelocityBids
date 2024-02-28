@extends('layout.adminLayout')
@section('content')
    @vite('resources/css/app.css')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="container">
        <div class="mx-10 md:mt-40">
            <h1 class="text-[40px] font-anton text-primaryColor">BID <span class="text-black">LIST</span></h1>
            <p class="text-gray-600 font-boogaloo">Where our irresistible pizza offers are waiting to elevate your dining
                experience</p>
            <form action="{{ route('bid.adminupdate', $vehicle->id) }}" method="post" enctype="multipart/form-data"
                class="flex flex-col  mx-auto md:mt-8 font-boogaloo text-[20px] mt-4">
                @method('post')
                @csrf

                <div class="flex flex-row gap-4 md:gap-8">
                    <div class="flex  w-7/12 flex-row gap-4 ">
                        <label class="">
                            <span class="block text-gray-700   font-bold ">Vehicle Type</span>
                            <select name="vehicle_type"
                                class="text-gray-700 focus:outline-none border-gray-800 focus:shadow-outline border rounded-lg py-2 px-4 block w-[470px]">
                                <option value="car" @if ($vehicle->vehicle_type == 'car') selected @endif>Car</option>
                                <option value="van"@if ($vehicle->vehicle_type == 'van') selected @endif>Van</option>
                                <option value="bus"@if ($vehicle->vehicle_type == 'bus') selected @endif>Bus</option>
                            </select>
                            {{-- Error message removed --}}
                        </label>
                    </div>
                    <div class="w-7/12">
                        <label for="">Vehicle Name </label>
                        <input type="text" placeholder="Vehicle Name" name="vehicle_name"
                            value="{{ $vehicle->vehicle_name }}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                        {{-- Error message removed --}}
                    </div>
                </div>
                <div class="flex flex-row gap-4 md:gap-8">
                    <div class="w-7/12">
                        <label for="">Mileage </label>
                        <input type="number" placeholder="Mileage" name="mileage" value="{{ $vehicle->mileage }}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                        {{-- Error message removed --}}
                    </div>

                    <div class="w-7/12">
                        <label for=""> Year</label>
                        <input type="number" placeholder="year" name="year" value="{{ $vehicle->year }}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                        {{-- Error message removed --}}
                    </div>
                </div>

                <div class="flex flex-row gap-4 md:gap-8">
                    <div class="w-7/12">
                        <label for="">Registration Number </label>
                        <input type="text" placeholder="Registration Number" name="regnumber"
                            value="{{ $vehicle->regnumber }}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                        {{-- Error message removed --}}
                    </div>
                    <div class="flex  w-7/12 flex-row gap-4 ">
                        <label class="">
                            <span class="block text-gray-700   font-bold ">Vehicle Type</span>
                            <select name="Location"
                                class="text-gray-700 focus:outline-none border-gray-800 focus:shadow-outline border rounded-lg py-2 px-4 block w-[470px]">
                                <option value="Galle" @if ($vehicle->Location == 'Galle') selected @endif>Galle</option>
                                <option value="Colombo"@if ($vehicle->Location == 'Colombo') selected @endif>Colombo</option>
                                <option value="Kandy"@if ($vehicle->Location == 'Kandy') selected @endif>Kandy</option>
                                <option value="Kurunagale"@if ($vehicle->Location == 'Kurunagale') selected @endif>Kurunagale
                                </option>
                            </select>
                            {{-- Error message removed --}}
                        </label>
                    </div>
                </div>

                <div class="flex  flex-row gap-4 md:gap-8">
                    <label class=" w-7/12">
                        <span class="block text-gray-700   font-bold ">Fuel Type</span>
                        <select name="fuel_type"
                            class="text-gray-700 focus:outline-none border-gray-800 focus:shadow-outline border rounded-lg py-2 px-4 block w-[470px]">
                            <option value="petrol" @if ($vehicle->fuel_type == 'petrol') selected @endif>Petrol</option>
                            <option value="diesel" @if ($vehicle->fuel_type == 'diesel') selected @endif>Diesel</option>
                            <option value="electric" @if ($vehicle->fuel_type == 'electric') selected @endif>Electric</option>
                        </select>
                        {{-- Error message removed --}}
                    </label>
                    <div class="w-7/12">
                        <label for="">Model </label>
                        <input type="text" placeholder="Model" name="Model" value="{{ $vehicle->Model }}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                        {{-- Error message removed --}}
                    </div>
                </div>


                <div class="flex  flex-row gap-4 md:gap-8">
                    <div class="w-[475px]">
                        <label for="">Make </label>
                        <input type="text" placeholder="Model" name="Make" value="{{ $vehicle->Make }}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                        {{-- Error message removed --}}
                    </div>
                </div>

                <div class="mb-4">
                    <label for="condescription" class="block text-gray-700 font-bold mb-2">Condition Description</label>
                    <textarea name="condescription" id="condescription" class="w-full h-[200px] px-4 py-2 border rounded-md">{{ $vehicle->condescription }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="feadescription" class="block text-gray-700 font-bold mb-2">Features Description</label>
                    <textarea name="feadescription" id="feadescription" class="w-full h-[200px] px-4 py-2 border rounded-md">{{ $vehicle->feadescription }}</textarea>
                </div>

                <!-- Image Upload Fields -->
                <div class="mb-4">
                    <label class="block text-gray-700 font-bold mb-2">Upload Images</label>

                    <div class="flex flex-wrap -mx-2">
                        <div class="w-full md:w-1/3 px-2 mb-2">
                            <label for="image1">Vehicle Front Image</label>
                            <input type="file" accept="image/*" name="image1" id="image1"
                                class="mb-2  border border-black rounded-md" onchange="previewImage(this, 'preview1')">
                            <img id="preview1" class="image-preview border border-black rounded-md mt-2"
                                src="{{ Storage::url($vehicle->image1) }}">
                        </div>

                        <div class="w-full md:w-1/3 px-2 mb-2">
                            <label for="image2">Vehicle Back Image</label>
                            <input type="file" accept="image/*" name="image2" id="image2"
                                class="mb-2  border border-black rounded-md" onchange="previewImage(this, 'preview2')">
                            <img id="preview2" class="image-preview mt-2 border border-black rounded-md"
                                src="{{ Storage::url($vehicle->image2) }}">
                        </div>

                        <div class="w-full md:w-1/3 px-2 mb-2">
                            <label for="image3">Vehicle Left Side Image</label>
                            <input type="file" accept="image/*" name="image3" id="image3"
                                class="mb-2  border border-black rounded-md" onchange="previewImage(this, 'preview3')">
                            <img id="preview3" class="image-preview mt-2 border border-black rounded-md"
                                src="{{ Storage::url($vehicle->image3) }}">
                        </div>

                        <div class="w-full md:w-1/3 px-2 mb-2">
                            <label for="image4">Vehicle Right Side Image</label>
                            <input type="file" accept="image/*" name="image4" id="image4"
                                class="mb-2  border border-black rounded-md" onchange="previewImage(this, 'preview4')">
                            <img id="preview4" class="image-preview mt-2 border border-black rounded-md"
                                src="{{ Storage::url($vehicle->image4) }}">
                        </div>

                        <div class="w-full md:w-1/3 px-2 mb-2">
                            <label for="image5">Vehicle Inside Image</label>
                            <input type="file" accept="image/*" name="image5" id="image5"
                                class="mb-2  border  border-black rounded-md" onchange="previewImage(this, 'preview5')">
                            <img id="preview5"
                                class="image-preview mt-2 border border-black rounded-md "src="{{ Storage::url($vehicle->image5) }}">
                        </div>
                    </div>
                </div>

                <div>
                    <label class=" w-7/12">
                        <span class="block text-gray-700   font-bold ">Action</span>
                        <select name="action"
                            class="text-gray-700 focus:outline-none border-gray-800 focus:shadow-outline border rounded-lg py-2 px-4 block w-[470px]">
                            <option value="pending" @if ($vehicle->action == 'pending') selected @endif>Pending</option>
                            <option value="available" @if ($vehicle->action == 'available') selected @endif>Available
                            </option>
                            <option value="unavailable" @if ($vehicle->action == 'unavailable') selected @endif>Unavalible
                            </option>
                        </select>
                        {{-- Error message removed --}}
                    </label>
                </div>


                <style>
                    .image-preview {
                        width: 100%;
                        /* Set the width as needed */
                        height: 300px;
                        /* Set the height as needed */
                        object-fit: contain
                            /* Maintain aspect ratio and cover the container */
                    }
                </style>

                <script>
                    function previewImage(input, previewId) {
                        var preview = document.getElementById(previewId);
                        var file = input.files[0];

                        if (file) {
                            var reader = new FileReader();

                            reader.onload = function(e) {
                                preview.src = e.target.result;
                            };

                            reader.readAsDataURL(file);
                        } else {
                            preview.src = "";
                        }
                    }
                </script>



                <div class="flex flex-row gap-10">
                    <form method="POST" action="{{ route('bid.adminupdate', ['id' => $vehicle->id]) }}">
                        @csrf
                        <button type="submit"
                            class="items-center bg-green-500 mt-4 p-2 bg-primaryColor flex justify-center md:w-[15%] w-[150px] rounded-lg text-black md:mt-8 text-center hover:bg-green-600 transition-colors duration-300">
                            <span class="mx-auto">Confirm</span>
                        </button>
                    </form>

                    <form method="POST" action="{{ route('bid.delete', ['vehicle' => $vehicle]) }}"
                        onsubmit="return confirm('Are you sure you want to delete this vehicle?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="items-center bg-red-800 p-2 bg-primaryColor flex justify-center  rounded-lg text-black md:mt-8 text-center hover:bg-red-900 transition-colors duration-300">Delete
                            Vehicle</button>
                    </form>
                </div>




            </form>
        </div>
    </div>
@endsection
