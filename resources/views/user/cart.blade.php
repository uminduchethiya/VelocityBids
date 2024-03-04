{{-- add to cart ui --}}
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
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
        <div>
            <div class="mt-8 font-boogaloo md:mt-4 w-3/4">
                <div class="overflow-x-auto">
                    <table class=" mt-[200px]">
                        <thead class="text-white bg-black">
                            <th class="px-20 py-2 rounded-bl-3xl rounded-tl-3xl">Product</th>
                            <th class=" py-2  ">Product Name</th>
                            <th class="px-20 py-2">Price</th>
                            <th class="px-20 py-2">Quntity</th>
                            <th class="px-10 py-2">Total</th>
                            <th class="px-10 py-2 rounded-br-3xl rounded-tr-3xl">Action</th>
                        </thead>

                        <tbody id="tableBody">
                            <!-- Replace this part with your frontend logic or static data -->
                            <!-- Sample data for demonstration purposes -->
                            <tr class="text-center text-black border-b tableRow">
                                <td class="px-10 py-2 text-primaryColor"><u>abc</u></td>
                                <td class="py-2">123</td>

                                <td class="py-2">$100</td>
                                <td class="px-10 py-2">
                                    <div>
                                        <div
                                        class="flex items-center justify-center w-24 h-8 border rounded-full md:w-20 md:mt-0 bg-red-800">
                                        <button
                                            class="flex items-center justify-center w-6 h-6 px-2 ml-1 text-white border rounded-full bg-dark-red cart_update"
                                            onclick="decreaseQuantity(this)">
                                            -
                                        </button>
                                        <span class="justify-center w-6 ml-1 text-center text-black"
                                            id="quantity">1</span>
                                        <button
                                            class="flex items-center justify-center w-6 h-6 px-2 ml-1 text-white border rounded-full bg-red-800 cart_update"
                                            onclick="increaseQuantity(this)">
                                            +
                                        </button>
                                    </div>
                                    </div>
                                </td>
                                <td class="py-2">$100</td>
                                <td class="py-2 hidden">useerid</td>
                                <td class="py-2 hidden">productid</td>

                                <td class="px-8 py-2">
                                    <div class="flex md:flex-row md:gap-4">

                                        <form method="POST" action="#" class="p-2">
                                            <!-- You may replace this with your frontend delete action -->
                                            <button type="submit"
                                                class="p-1 text-white bg-red-600 rounded">Delete</button>
                                        </form>
                                    </div>
                </div>
                </td>
                <!-- End sample data -->
                </tr>
                <!-- End foreach loop -->

                </tbody>
                </table>
            </div>
        </div>

        <div class="order-first  w-1/4 md:order-none ml-[1040px] -mt-[100px]">
            <div class="p-6 text-white bg-black rounded-lg shadow-md">
                <h2 class="mb-4 text-lg font-semibold text-center">Cart Total</h2>
                <div class="flex justify-between mb-2">
                    <span>Subtotal</span>
                    <span>$</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span>Discount</span>
                    <span>$0.00</span>
                </div>
                <hr class="my-2">
                <div class="flex justify-between mb-2">
                    <span class="font-semibold"> Grand Total</span>
                    <span class="font-semibold">$</span>
                </div>
                <form action="/session" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="w-full px-4 py-2 mt-4 text-white rounded-lg bg-red-900">Proceed To Checkout</button>
                </form>
            </div>
        </div>
        {{-- Pagination --}}
        <div class="flex flex-row md:gap-[300px]">
            <p class="text-gray-600 md:mt-10" id="paginationText">Showing 1 to 5 from 30 entries</p>
            <div class="pagination md:ml-16 lg:ml-72 ml-[20px] md:mt-8" id="pagination">
                <!-- Pagination links (Replace with your frontend logic) -->
                <a href="#" style="color: black; font-size: 30px" onclick="prevPage()">&larr;</a>
                <a href="#" class="visible" onclick="changePage(1)">1</a>
                <a href="#" class="visible" onclick="changePage(2)">2</a>
                <a href="#" class="visible" onclick="changePage(3)">3</a>
                <a href="#" style="color: black; font-size: 30px" onclick="nextPage()">&rarr;</a>
            </div>
        </div>
        {{-- End pagination --}}
    </div>
    <script>
        function increaseQuantity(button) {
            var quantityElement = button.parentNode.querySelector('#quantity');
            var currentQuantity = parseInt(quantityElement.innerText);
            quantityElement.innerText = currentQuantity + 1;
        }

        function decreaseQuantity(button) {
            var quantityElement = button.parentNode.querySelector('#quantity');
            var currentQuantity = parseInt(quantityElement.innerText);
            if (currentQuantity > 1) {
                quantityElement.innerText = currentQuantity - 1;
            }
        }
    </script>


    @include('components.footer')

</body>

</html>
