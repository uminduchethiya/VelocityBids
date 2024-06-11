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
            <div class="w-3/4 mt-8 font-boogaloo md:mt-4">
                <div class="overflow-x-auto">
                    <table class=" mt-[200px]">
                        <thead class="text-white bg-black">
                            <th class="px-20 py-2 rounded-bl-3xl rounded-tl-3xl">Product Name</th>
                            {{-- <th class="py-2 ">Description</th> --}}
                            <th class="px-20 py-2">Price</th>
                            <th class="px-20 py-2">Quntity</th>
                            <th class="px-10 py-2">Total</th>
                            <th class="px-10 py-2 rounded-br-3xl rounded-tr-3xl">Action</th>
                        </thead>

                        <tbody id="tableBody">
                            @foreach ($Product as $index => $product)
                                <!-- Replace this part with your frontend logic or static data -->
                                <tr class="text-center text-black border-b tableRow">
                                    <td class="px-10 py-2 text-primaryColor"><u>{{ $product->product_name }}</u></td>
                                    <td class="py-2 price"hidden>{{ $product->price }}</td>
                                    <td class="py-2 selling_price" >{{ $product->selling_price }}</td>
                                    <td class="px-10 py-2">
                                        <div
                                            class="flex items-center justify-center w-24 h-8 bg-red-800 border rounded-full md:w-20 md:mt-0">
                                            <button
                                                class="flex items-center justify-center w-6 h-6 px-2 ml-1 text-white bg-red-800 border rounded-full cart_update"
                                                onclick="updateQuantity(this, 'decrease')">-</button>
                                            <span
                                                class="justify-center w-6 ml-1 text-center text-black quantity">{{ $count[$index] }}</span>
                                            <button
                                                class="flex items-center justify-center w-6 h-6 px-2 ml-1 text-white border rounded-full bg-dark-red cart_update"
                                                onclick="updateQuantity(this, 'increase')">+</button>
                                        </div>
                                    </td>
                                    <td class="py-2"hidden>
                                        <span class="total_price" >{{ $product->price }}</span>
                                    </td>
                                    <td class="py-2">
                                        <span class="total_selling_price">{{ $product->selling_price }}</span>
                                    </td>
                                    <td class="hidden py-2">{{ $product->user_id }}</td>
                                    <td class="hidden py-2">{{ $product->id }}</td>
                                    <td class="px-8 py-2">
                                        <div class="flex md:flex-row md:gap-4">
                                            <form method="POST" action="#" class="p-2">
                                                <!-- You may replace this with your frontend delete action -->
                                                <button type="submit"
                                                    class="p-1 text-white bg-red-600 rounded">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <!-- End foreach loop -->
                            @endforeach
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
                        <button class="w-full px-4 py-2 mt-4 text-white bg-red-900 rounded-lg">Proceed To
                            Checkout</button>
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
            function updateQuantity(button, action) {
                var quantityElement = button.parentNode.querySelector('.quantity');
                var currentQuantity = parseInt(quantityElement.innerText);

                if (action === 'increase') {
                    quantityElement.innerText = currentQuantity + 1;
                } else if (action === 'decrease' && currentQuantity > 0) {
                    quantityElement.innerText = currentQuantity - 1;
                }

                updateTotalPrice(button);
            }

            function updateTotalPrice(button) {
                var priceElement = button.closest('tr').querySelector('.price');
                var sellingPriceElement = button.closest('tr').querySelector('.selling_price');
                var quantityElement = button.parentNode.querySelector('.quantity');
                var totalElement = button.closest('tr').querySelector('.total_price');
                var totalSellingElement = button.closest('tr').querySelector('.total_selling_price');

                var price = parseFloat(priceElement.innerText);
                var sellingPrice = parseFloat(sellingPriceElement.innerText);
                var quantity = parseInt(quantityElement.innerText);
                var total = price * quantity;
                var totalSelling = sellingPrice * quantity;

                totalElement.innerText = total.toFixed(2);
                totalSellingElement.innerText = totalSelling.toFixed(2);
            }
        </script>




        @include('components.footer')

</body>

</html>
