<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Include Alpine.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

    <!-- Other head elements -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    @include('components.nav-bar')
    <div class="container">
        <div class="bg-white">
            <main class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between pt-24 pb-6 border-b border-gray-200">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>
                    <div class="flex items-center">
                        <div class="relative inline-block text-left">
                            <div>
                                <form action="{{ route('Searchshop') }}" method="POST">
                                    @csrf
                                    <input type="text" name="search">
                                    <button type="submit" class="h-10 px-4 font-extrabold text-white rounded-lg w-28 md:w-28 bg-buttonorange hover:bg-orange-700">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">

                    <div class="flex flex-wrap -mx-2">
                        @foreach($categories as $category)
                        <div class="w-full m-1 mb-4 border md:w-1/3 md:mb-5 md:px-2">
                            <div class="flex items-end justify-end w-full h-56 bg-center bg-cover"
                                style="background-image: url('{{ Storage::url($category->image1) }}')">
                                <button
                                    class="p-2 mx-5 -mb-4 text-white bg-orange-600 rounded-full hover:bg-orange-500 focus:outline-none focus:bg-orange-500">
                                    <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">{{ $category->product_name }}</h3>
                                <span class="mt-2 text-gray-500">${{ $category->selling_price }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <section aria-labelledby="products-heading" class="pt-6 pb-24">
                    <!-- Your content -->
                    <div class="lg:col-span-3">
                        <!-- Your product grid content -->
                    </div>
                </section>
            </main>
        </div>
    </div>

    @include('components.footer')
</body>

</html>
