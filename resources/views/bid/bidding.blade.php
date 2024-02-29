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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

</head>

<body class="flex flex-col min-h-screen bg-white">

    @include('components.nav-bar')

    <div class="flex-grow">
        <div class="grid grid-cols-3 gap-4 pt-10 m-10 mt-10">
            <div id="mainImageContainer" class="col-span-2 bg-gray-100">
                <!-- Main image -->
                <img class="h-auto w-full max-w-full rounded-lg object-center md:h-[480px] "
                    src="{{ Storage::url($vehicle->image1) }}"
                    alt="" />
            </div>
            <div class="grid grid-cols-2 gap-1">
                <!-- Gallery images with onclick function to set as the main image -->
                <div class="flex items-center justify-center">
                    <img onclick="changeMainImage(this)"
                        src="{{ Storage::url($vehicle->image1) }}"
                        class="object-cover object-center w-full h-40 max-w-full bg-gray-100 rounded-lg cursor-pointer" alt="gallery-image" />
                </div>
                <div class="flex items-center justify-center">
                    <img onclick="changeMainImage(this)"
                        src="{{ Storage::url($vehicle->image2) }}"
                        class="object-cover object-center w-full h-40 max-w-full bg-gray-100 rounded-lg cursor-pointer" alt="gallery-image" />
                </div>
                <div class="flex items-center justify-center">
                    <img onclick="changeMainImage(this)"
                        src="{{ Storage::url($vehicle->image3) }}"
                        class="object-cover object-center w-full h-40 max-w-full bg-gray-100 rounded-lg cursor-pointer" alt="gallery-image" />
                </div>
                <div class="flex items-center justify-center">
                    <img onclick="changeMainImage(this)"
                        src="{{ Storage::url($vehicle->image4) }}"
                        class="object-cover object-center w-full h-40 max-w-full bg-gray-100 rounded-lg cursor-pointer" alt="gallery-image" />
                </div>
                <div class="flex items-center justify-center">
                    <img onclick="changeMainImage(this)"
                        src="{{ Storage::url($vehicle->image5) }}"
                        class="object-cover object-center w-full h-40 max-w-full bg-gray-100 rounded-lg cursor-pointer" alt="gallery-image" />
                </div>
            </div>
            <div class="grid justify-between grid-cols-2 col-span-3 gap-4 mt-4 text-xl">
                <!-- Additional vehicle information -->
                <div>
                    <p><strong>Vehicle Type:</strong> {{ $vehicle->vehicle_type }}</p>
                    <p><strong>Fuel Type:</strong> {{ $vehicle->fuel_type }}</p>
                    <p><strong>Mileage:</strong> {{ $vehicle->mileage }}</p>
                    <p><strong>Year:</strong> {{ $vehicle->year }}</p>
                    <p><strong>Feature Description:</strong> {{ $vehicle->feadescription }}</p>
                </div>
                <div>
                    <p><strong>Model:</strong> {{ $vehicle->Model }}</p>
                    <p><strong>Make:</strong> {{ $vehicle->Make }}</p>
                    <p><strong>Registration Number:</strong> {{ $vehicle->regnumber }}</p>
                    <p><strong>Location:</strong> {{ $vehicle->Location }}</p>
                    <p><strong>Condition Description:</strong> {{ $vehicle->condescription }}</p>
                </div>
            </div>

        </div>

        <script>
            function changeMainImage(clickedImage) {
                // Get the source of the clicked image
                var newImageSrc = clickedImage.src;

                // Set the source of the main image to the clicked image
                document.getElementById('mainImageContainer').innerHTML =
                    '<img class="h-auto w-full max-w-full rounded-lg object-center md:h-[480px]" src="' +
                    newImageSrc + '" alt="" />';
            }
        </script>
    </div>



    @include('components.footer')

</body>


</html>
