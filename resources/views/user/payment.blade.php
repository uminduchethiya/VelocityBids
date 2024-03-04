<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Include Alpine.js from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2"></script>

    <!-- Other head elements -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
    @include('components.nav-bar')
    <div class="">
        <div class="container">
            <div class="flex flex-col w-full md:flex-row md:gap-12">
                <div class="flex flex-col w-full md:w-3/4">
                    <h1 class="text-[40px] font-anton text-primaryColor pb-8">Payment <span class="text-black">Method</span>
                    </h1>
                    <form action="" class="font-boogaloo text-[22px] mt-20 pb-5">

                        {{-- custom-radio-buttons --}}
                        <div>
                            <div class="flex mb-5">
                                <div class="flex md:flex-row flex-col md:gap-[350px]">
                                    <label class="custom-radio-btn md:w-full">
                                        <input type="radio" name="sample">
                                        <span class="checkmark ms-[63px] space-x-4 mx-10">
                                            <span class="flex -mt-2 mx-10"></span>
                                        </span>
                                        <div class="flex md:w-full w-[100%]">
                                            <span class="text-gray-600 text-2xl max-h-20 whitespace-nowrap">Cash on
                                                delivery</span>
                                        </div>
                                    </label>
                                    <label class="custom-radio-btn md:w-full">
                                        <input type="radio" name="sample">
                                        <div class="checkmark ms-[205px] space-x-4 mx-10">
                                            <div class="flex -mt-2 mx-10"></div>
                                        </div>
                                        <div class="">
                                            <div class="text-gray-600 text-2xl whitespace-nowrap">Direct bank transfer</div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <label class="custom-radio-btn md:w-full">
                                    <input type="radio" name="sample">
                                    <span class="checkmark ms-[63px] space-x-4 mx-10">
                                        <span class="flex -mt-2 mx-10"></span>
                                    </span>
                                    <div class="flex md:w-full w-[100%]">
                                        <span class="text-gray-600 text-2xl whitespace-nowrap">Card payment</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                        {{-- end-custom-radio-buttons --}}

                        {{-- input boxes --}}
                        <div class="input-boxes">
                            <div class="mt-2 md:mt-4 pt-3">
                                <label for="" class="font-boogaloo text-gray-600 text-2xl pb-8">Cardholder
                                    name</label>
                                <input type="text" placeholder="Nimshi Silva"
                                    class="w-full mt-3 p-3 border rounded-lg shadow-2xl opacity-70">
                            </div>
                            <div class="mt-2 md:mt-4 pt-4">
                                <label for="" class="font-boogaloo text-gray-600 text-2xl pt-4">Card number</label>
                                <input type="text" placeholder="0000-1111-2222-3333"
                                    class="w-full mt-3 p-3 border rounded-lg shadow-2xl opacity-70">
                            </div>
                            <div class="flex flex-row gap-4 mt-2 md:gap-8 md:mt-4 pt-3">
                                <div class="w-6/12">
                                    <label for="" class="block font-boogaloo text-gray-600 text-2xl pb-4">Expiry
                                        date</label>
                                    <input type="text" placeholder="10/23"
                                        class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                                </div>
                                <div class="w-6/12">
                                    <label for=""
                                        class="block font-boogaloo text-gray-600 text-2xl pb-4">CSV</label>
                                    <input type="text" placeholder="000"
                                        class="w-full p-3 border rounded-lg shadow-2xl opacity-70">
                                </div>
                            </div>
                        </div>
                        {{-- end input boxes --}}

                    </form>

                    {{-- cutom checkbox --}}
                    <div class="  font-boogaloo text-2xl pb-6 flex ">
                        <div class="checkbox-wrapper flex">
                            <input type="checkbox" id="check" hidden >
                            <label for="check" class="checkmark-check flex mr-4 mt-2 border-solid"></label>
                            <span class="whitespace-nowrap text-gray-600 text-2xl">Save my payment details for future purchases</span>
                        </div>
                    </div>
                    <div class="mt-8 md:mt-4 font-boogaloo text-2xl pb-12">
                        <a href="" class="flex flex-row items-center ">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="border-none w-6 h-6 rotate-180 mr-3 fill-primaryColor">
                                <path fill-rule="evenodd"
                                    d="M4.5 5.653c0-1.426 1.529-2.33 2.779-1.643l11.54 6.348c1.295.712 1.295 2.573 0 3.285L7.28 19.991c-1.25.687-2.779-.217-2.779-1.643V5.653z"
                                    clip-rule="evenodd" />
                            </svg>
                            <label class="text-primaryColor text-2xl">Return to billing details</label>
                        </a>
                        <hr class="border-transparent bg-primaryColor h-1 w-60" >
                    </div>
                </div>
                <div class="w-full md:w-1/4 mt-40">
                    <h1 class="text-[40px] font-anton text-primaryColor">Order <span class="text-black">Summary</span>
                    </h1>
                    <div class="bg-[#171717] text-white font-boogaloo rounded-lg p-10 flex flex-col md:mt-4">
                        <h1 class="flex items-center justify-center text-[25px]">Order Summary</h1>
                        <table class="border-t text-[25px] text-white">
                            <tbody class="">
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
                        <button class="p-3 rounded-lg bg-primaryColor text-[25px] md:mt-4">CONFIRM YOUR ORDER</button>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
