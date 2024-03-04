<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cheackout</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Include Alpine.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

    <!-- Other head elements -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

</body>
@include('components.nav-bar')
<div class="">
    <div class="container">
        <div class="flex flex-col w-full md:flex-row md:gap-12">
            <div class="flex flex-col w-full md:w-1/2">
                <h1 class="text-[40px] font-anton text-primaryColor">Billing <span class="text-black">Details</span></h1>
                <form action="" class="font-boogaloo text-[22px] mt-10">
                    <div class="flex flex-row gap-4 mt-2 md:gap-8 md:mt-4">
                        <input type="text" placeholder="First Name" class="w-7/12 p-3 border rounded-lg shadow-2xl opacity-70">
                        <input type="text" placeholder="Last Name" class="w-7/12 p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <div class="mt-2 md:mt-4">
                        <input type="text" placeholder="Phone" class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <div class="mt-2 md:mt-4">
                        <input type="text" placeholder="City" class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <div class="mt-2 md:mt-4">
                        <input type="text" placeholder="Street Address" class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <div class="mt-2 md:mt-4">
                        <input type="text" placeholder="PostCode" class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <div class="mt-2 md:mt-4">
                        <input type="email" placeholder="Email Address" class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                </form>
                <div class="mt-2 text-gray-400 md:mt-4 font-boogaloo">
                    <input type="checkbox" id="shippingToDifferentAddress" name="shippingToDifferentAddress" class="p-2 text-white bg-red-500 border-red-500 rounded-md">
                    <label for="shippingToDifferentAddress">Shipping to different Address</label>
                </div>
                <h1 class="text-[40px] font-anton text-primaryColor">Shipping <span class="text-black">Details</span></h1>
                <form action="" class="font-boogaloo text-[22px]">
                    <div class="flex flex-row gap-4 mt-2 md:gap-8 md:mt-4">
                        <input type="text" placeholder="First Name" class="w-7/12 p-3 border rounded-lg shadow-2xl opacity-70">
                        <input type="text" placeholder="Last Name" class="w-7/12 p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <div class="mt-2 md:mt-4">
                        <input type="text" placeholder="Phone" class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <div class="mt-2 md:mt-4">
                        <input type="text" placeholder="City" class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <div class="mt-2 md:mt-4">
                        <input type="text" placeholder="Street Address" class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <div class="mt-2 md:mt-4">
                        <input type="text" placeholder="PostCode" class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <div class="mt-2 md:mt-4">
                        <input type="email" placeholder="Email Address" class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                    </div>
                    <button class="w-1/3 p-2 mt-4 text-center text-white rounded-lg md:w-1/6 bg-primaryColor md:mt-4">Save</button>
                </form>
            </div>
            <div class="w-full md:w-1/2 mt-20">
                <h1 class="text-[40px] font-anton text-primaryColor">Your <span class="text-black">Order</span></h1>
                <div class="bg-[#171717] text-white font-boogaloo rounded-lg p-10 flex flex-col md:mt-4">
                    <h1 class="flex items-center justify-center text-[25px]">Your order</h1>
                    <table class="border-t text-[25px] text-white">
                        <thead class="">
                            <th style="width: 50%;" class="text-left">PRODUCT</th>
                            <th style="width: 50%;" class="text-right">SUBTOTAL</th>
                        </thead>
                        <tbody class="">
                            <tr>
                                <td style="width: 50%;">Cheesy Tomato with green</td>
                                <td style="width: 50%;" class="text-right">Rs. 4665.00</td>
                            </tr>

                            <tr>
                                <td style="width: 50%;">Cheesy Tomato with green</td>
                                <td style="width: 50%;" class="text-right">Rs. 4665.00</td>
                            </tr>

                            <tr class="border-t ">
                                <td style="width: 50%;">Sub Total</td>
                                <td style="width: 50%;" class="text-right">Rs. 4665.00</td>
                            </tr>
                            <tr>
                                <td style="width: 50%;">Discount</td>
                                <td style="width: 50%;" class="text-right">Rs. 465.00</td>
                            </tr>

                            <tr>
                                <td style="width: 50%;" class="text-[28px]">Grand Total</td>
                                <td style="width: 50%;" class="text-right">Rs. 4189.00</td>
                            </tr>
                        </tbody>
                    </table>
                   <button class="p-3 rounded-lg bg-red-900 text-[25px] md:mt-4">Place Order</button>
            </div>
        </div>
    </div>
</div>
@include('components.footer')
</html>
