@props([
    'product' => null,
])

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
@extends('layout.adminLayout')
@section('content')
    <div class="container">
        <div class="mx-10 md:mb-4">
            <h1 class="text-[40px] font-anton text-primaryColor md:mt-40">

                <span class="text-black">Product</span>
            </h1>
           
            {{-- @if (Session::has('success'))
                <div class="block w-full p-4 mb-4 text-base leading-5 text-white bg-green-300 rounded-lg opacity-100 arelative font-regular"
                    role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif --}}
            <form  action="{{route('admin.product.productupdate',$product->id)}}" method="post" enctype="multipart/form-data"
                class="flex flex-col  mx-auto md:mt-8 font-boogaloo text-[20px] mt-4">

                @method('post')

                @csrf
                <div class="flex flex-row gap-4 md:gap-8">
                    <div class="w-7/12">
                        <label for="">Product Name</label>
                        <input type="text" placeholder="Product Name" name="product_name" value="{{$product->product_name}}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                    </div>
                    <div class="flex flex-col w-7/12">
                        <label for="">Select Category</label>
                        <select name="category_id" id="category"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                            <option value="">Select a category</option>
                            @foreach ($category as $categorys)
                                <option value="{{ $categorys->id }}" @if (old('category_id', $product?->category_id) == $categorys->id) selected @endif
                                    class="text-black">{{ $categorys->category_name }} </option>
                            @endforeach
                        </select>

                    </div>
                </div>
                <div class="flex flex-row gap-4 md:gap-8 md:mt-4">
                    <div class="w-7/12">
                        <label for="price">Price</label>
                        <input name="price" id="price" type="number" placeholder="Price" value="{{$product->price}}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                    </div>
                    <div class="w-7/12">
                        <label for="selling_price">Selling Price</label>
                        <input name="selling_price" id="selling_price" type="number" placeholder="Selling Price"  value="{{$product->selling_price}}"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                    </div>
                </div>
                <div class="w-full md:mt-4">
                    <label for="">Short Description</label>
                    <input name="short_des" type="text" placeholder="Short Description"  value="{{$product->short_des}}"
                        class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                </div>
                <div class="flex flex-col mt-4 md:mt-8">
                    <label for="">Description</label>
                    <input name="description" placeholder="Your Message"  value="{{$product->description}}"
                        class="w-full p-2 border border-gray-800 rounded-lg opacity-60 md:h-36">
                </div>
                <div class="flex flex-row gap-4 md:gap-8 md:mt-4">
                    <!-- Image inputs -->

                    <div class="mb-4">
                        <label class="block text-gray-700 font-bold mb-2">Upload Images:</label>

                        <div class="flex flex-wrap -mx-2">
                            <div class="w-full md:w-1/3 px-2 mb-2">
                                <label for="image1">Vehicle Front Image:</label>
                                <input type="file" accept="image/*" name="image1" id="image1"
                                    class="mb-2  border border-black rounded-md" onchange="previewImage(this, 'preview1')">
                                    <img id="preview1" class="image-preview border border-black rounded-md mt-2"
                                    src="{{ Storage::url($product->image1) }}">
                            </div>

                            <div class="w-full md:w-1/3 px-2 mb-2">
                                <label for="image2">Vehicle Back Image:</label>
                                <input type="file" accept="image/*" name="image2" id="image2"
                                    class="mb-2  border border-black rounded-md" onchange="previewImage(this, 'preview2')">
                                    <img id="preview1" class="image-preview border border-black rounded-md mt-2"
                                    src="{{ Storage::url($product->image2) }}">
                            </div>

                            <div class="w-full md:w-1/3 px-2 mb-2">
                                <label for="image3">Vehicle Left Side Image:</label>
                                <input type="file" accept="image/*" name="image3" id="image3"
                                    class="mb-2  border border-black rounded-md" onchange="previewImage(this, 'preview3')">
                                    <img id="preview1" class="image-preview border border-black rounded-md mt-2"
                                    src="{{ Storage::url($product->image3) }}">
                            </div>

                            <div class="w-full md:w-1/3 px-2 mb-2">
                                <label for="image4">Vehicle Right Side Image:</label>
                                <input type="file" accept="image/*" name="image4" id="image4"
                                    class="mb-2  border border-black rounded-md" onchange="previewImage(this, 'preview4')">
                                    <img id="preview1" class="image-preview border border-black rounded-md mt-2"
                                    src="{{ Storage::url($product->image4) }}">
                            </div>

                            <div class="w-full md:w-1/3 px-2 mb-2">
                                <label for="image5">Vehicle Inside Image:</label>
                                <input type="file" accept="image/*" name="image5" id="image5"
                                    class="mb-2  border  border-black rounded-md"
                                    onchange="previewImage(this, 'preview5')">
                                    <img id="preview1" class="image-preview border border-black rounded-md mt-2"
                                    src="{{ Storage::url($product->image5) }}">
                            </div>
                        </div>
                    </div>

                </div>
                <button type="submit"
                    class="items-center bg-red-800 mt-4 p-2 bg-primaryColor flex justify-start md:w-[15%] w-[150px] rounded-lg text-black md:mt-8 text-center">
                    <span class="mx-auto">Update</span>
                </button>
            </form>




        </div>
    </div>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
    </style>

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

    <script>
        function loadPreview(index, ) {
            // Image preview function
        }

        function validatePrices() {
            // Price validation function
        }
    </script>
@endsection
