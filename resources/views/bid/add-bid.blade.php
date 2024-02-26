<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Try your BID</title>
    <!-- Include your styles from Vite -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Include Alpine.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>
</head>

<body class="bg-white">
    @include('components.nav-bar')

    <div class="flex flex-wrap md:flex-row-reverse bg-gradient-to-r from-orange-100 via-orange-50 to-white">
        <!-- Desktop View -->
        <div class="hidden w-full p-4 text-center md:w-1/2 md:flex md:flex-col md:justify-center md:items-center">
            <img src="{{ asset('img/contact-main.png') }}" class="w-auto h-auto" alt="Flowbite Logo" />
        </div>

        <!-- Common Text Section -->
        <div class="w-full p-8 pl-10 md:w-1/2 md:text-left ">
            <p class="mb-4 text-2xl font-bold">BID NOW</p>
        </div>
    </div>


    <div class=" text-2xl font-bold ml-6 mt-20">Vehicle Details</div>
    <form action="{{route('bid.addBidInfo')}}" method="post" enctype="multipart/form-data"
        class="max-w-fit p-8 mx-6 mb-4 bg-gray-100 rounded-md mt-5">
        @csrf

        <div class="flex flex-wrap -mx-4">
            <!-- Vehicle Type -->
            <div class="w-full md:w-1/2 px-4 mb-4">
                <label for="vehicle_type" class="block text-gray-700 font-bold mb-2">Vehicle Type:</label>
                <select name="vehicle_type" id="vehicle_type" class="w-full px-4 py-2 border rounded-md">
                    <option value="car">Car</option>
                    <option value="van">Van</option>
                    <option value="bus">Bus</option>
                </select>
            </div>

            <!-- Fuel Type -->
            <div class="w-full md:w-1/2 px-4 mb-4">
                <label for="fuel_type" class="block text-gray-700 font-bold mb-2">Fuel Type:</label>
                <select name="fuel_type" id="fuel_type" class="w-full px-4 py-2 border rounded-md">
                    <option value="petrol">Petrol</option>
                    <option value="diesel">Diesel</option>
                    <option value="electric">Electric</option>
                </select>
            </div>
        </div>


        <!-- Mileage & year -->
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-4">
                <label for="mileage" class="block text-gray-700 font-bold mb-2">Mileage:</label>
                <input type="number" name="mileage" id="mileage" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="w-full md:w-1/2 px-4 mb-4">
                <label for="year" class="block text-gray-700 font-bold mb-2">Year:</label>
                <input type="number" name="year" id="year" class="w-full px-4 py-2 border rounded-md">
            </div>
        </div>

        {{-- Model & Make --}}
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-4">
                <label for="Model" class="block text-gray-700 font-bold mb-2">Model:</label>
                <input type="text" name="Model" id="Model" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="w-full md:w-1/2 px-4 mb-4">
                <label for="Make" class="block text-gray-700 font-bold mb-2">Make:</label>
                <input type="text" name="Make" id="Make" class="w-full px-4 py-2 border rounded-md">
            </div>
        </div>

        {{-- reg number --}}
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2  px-4 mb-4">
                <label for="Make" class="block text-gray-700 font-bold mb-2">Registration Number:</label>
                <input type="text" name="regnumber" id="regnumber" class="w-full px-4 py-2 border rounded-md">
            </div>

            <div class="w-full md:w-1/2 px-4 mb-4">
                <label for="Location" class="block text-gray-700 font-bold mb-2">Location:</label>
                <select name="Location" id="Location" class="w-full px-4 py-2 border rounded-md">
                    <option value="select">select</option>
                    <option value="Galle">Galle</option>
                    <option value="Colombo">Colombo</option>
                    <option value="Kandy">Kandy</option>
                    <option value="Kurunagale">Kurunagale</option>
                </select>
            </div>
        </div>




        <!-- Description -->
        <div class="mb-4">
            <label for="condescription" class="block text-gray-700 font-bold mb-2">Condition Description:</label>
            <textarea name="condescription" id="condescription" class="w-full h-[200px] px-4 py-2 border rounded-md"></textarea>
        </div>

        <div class="mb-4">
            <label for="feadescription" class="block text-gray-700 font-bold mb-2">Features Description:</label>
            <textarea name="feadescription" id="feadescription" class="w-full h-[200px] px-4 py-2 border rounded-md"></textarea>
        </div>



        <!-- Image Upload Fields -->
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Upload Images:</label>

            <div class="flex flex-wrap -mx-2">
                <div class="w-full md:w-1/3 px-2 mb-2">
                    <label for="image1">Vehicle Front Image:</label>
                    <input type="file" accept="image/*" name="image1" id="image1" class="mb-2  border border-black rounded-md"
                        onchange="previewImage(this, 'preview1')">
                    <img id="preview1" class="image-preview border border-black rounded-md mt-2" >
                </div>

                <div class="w-full md:w-1/3 px-2 mb-2">
                    <label for="image2">Vehicle Back Image:</label>
                    <input type="file" accept="image/*" name="image2" id="image2" class="mb-2  border border-black rounded-md"
                        onchange="previewImage(this, 'preview2')">
                    <img id="preview2" class="image-preview mt-2 border border-black rounded-md" >
                </div>

                <div class="w-full md:w-1/3 px-2 mb-2">
                    <label for="image3">Vehicle Left Side Image:</label>
                    <input type="file" accept="image/*" name="image3" id="image3" class="mb-2  border border-black rounded-md"
                        onchange="previewImage(this, 'preview3')">
                    <img id="preview3" class="image-preview mt-2 border border-black rounded-md" >
                </div>

                <div class="w-full md:w-1/3 px-2 mb-2">
                    <label for="image4">Vehicle Right Side Image:</label>
                    <input type="file" accept="image/*" name="image4" id="image4" class="mb-2  border border-black rounded-md"
                        onchange="previewImage(this, 'preview4')">
                    <img id="preview4" class="image-preview mt-2 border border-black rounded-md" >
                </div>

                <div class="w-full md:w-1/3 px-2 mb-2">
                    <label for="image5">Vehicle Inside Image:</label>
                    <input type="file" accept="image/*" name="image5" id="image5" class="mb-2  border  border-black rounded-md"
                        onchange="previewImage(this, 'preview5')">
                    <img id="preview5" class="image-preview mt-2 border border-black rounded-md " >
                </div>
            </div>
        </div>


        <style>
            .image-preview {
                width: 100%;
                /* Set the width as needed */
                height: 300px;
                /* Set the height as needed */
                object-fit:contain
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


        <!-- Bid Now Button -->
        <div class="mb-4">
            <button type="submit"
                class="w-full md:w-28 h-10 px-4 text-white bg-orange-500 hover:bg-orange-700 rounded-lg font-extrabold">
                Bid Now!
            </button>
        </div>
    </form>
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
