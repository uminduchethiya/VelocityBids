@extends('layout.adminLayout')
@section('content')
    <div class="container">
        <div class="grid justify-center flex-1">
            <div class="flex flex-wrap flex-1 md:mt-32">

                {{-- boxes --}}
                <div class="flex-1 w-full p-4">
                    <h1 class="text-[40px] font-anton text-primaryColor md:mt-4">Welcome <span
                            class="text-black">Umindu</span></h1>
                    <div class="">
                        <h3 class="text-lg text-gray-600 font-boogaloo">Where our irresistible pizza offers are waiting to
                            elevate your dining experience</h3>
                    </div>


                    <div
                        class="mt-8 grid grid-cols-2 grid-row-2 md:grid-cols-4 md:gap-4 gap-16 space-y-2 md:space-y-0 md:h-[350px] font-boogaloo">
                        <div
                            class="grid-2 bg-white p-4 shadow-lg rounded-2xl md:w-[195px] md:h-[100px] w-[160px] h-[100px] relative">
                            <h2 class="pb-1 text-sm font-semibold text-black">Total Users</h2>
                            <img src="{{ asset('img/customer 1.png') }}" alt="Arrow"
                                class="absolute md:left-40 top-4 left-32">
                            <h1 class="pb-1 mt-3 text-xl font-bold text-black">{{ $userCount }}</h1>
                        </div>

                        <div
                            class="grid-2 bg-white p-4 shadow-lg rounded-2xl md:w-[195px] md:h-[100px] w-[160px] h-[100px] relative">
                            <h2 class="pb-1 text-sm font-semibold text-black">Total Admin</h2>
                            <img src="{{ asset('img/customer 1.png') }}"alt="Arrow"
                                class="absolute md:left-40 top-4 left-32">
                            <h1 class="pb-1 mt-3 text-xl font-bold text-black"></h1>
                        </div>

                        <div
                            class="grid-2 bg-white p-4 shadow-lg rounded-2xl md:w-[195px] md:h-[100px] w-[160px] h-[100px] relative">
                            <h2 class="pb-1 text-sm font-semibold text-black">Total Bids</h2>
                            <img src="{{ URL('img/solar_bag-bold.png') }}" alt="Arrow"
                                class="absolute md:left-40 top-4 left-32">
                            <h1 class="pb-1 mt-3 text-xl font-bold text-black">{{ $vehicleCount }}</h1>
                        </div>
                        <div
                            class="grid-2 bg-white p-4 shadow-lg rounded-2xl md:w-[195px] md:h-[100px] w-[160px] h-[100px] relative">
                            <h2 class="pb-1 text-sm font-semibold text-black">Total Vehicle</h2>
                            <img src="{{ URL('img/solar_bag-bold.png') }}" alt="Arrow"
                                class="absolute md:left-40 top-4 left-32">
                            <h1 class="pb-1 mt-3 text-xl font-bold text-black">{{ $vehicleCount }}</h1>
                        </div>
                        <div
                            class="grid-2 bg-white p-4 shadow-lg rounded-2xl md:w-[195px] md:h-[100px] w-[160px] h-[100px] relative">
                            <h2 class="pb-1 text-sm font-semibold text-black">Total Parts</h2>
                            <img src="{{ URL('img/menu 1.png') }}" alt="Arrow" class="absolute md:left-40 top-4 left-32">
                            <h1 class="pb-1 mt-3 text-xl font-bold text-black"></h1>
                        </div>
                        <div
                            class="grid-2 bg-white p-4 shadow-lg rounded-2xl md:w-[195px] md:h-[100px] w-[160px] h-[100px] relative">
                            <h2 class="pb-1 text-sm font-semibold text-black">Total Sales</h2>
                            <img src="{{ URL('img/increase 1.png') }}" alt="Arrow"
                                class="absolute md:left-40 top-4 left-32">
                            <h1 class="pb-1 mt-3 text-xl font-bold text-black"></h1>
                        </div>
                    </div>

                    <!-- table -->
                    <table class="w-full text-sm table-auto font-boogaloo ">
                        <thead class="rounded-full">
                            <tr class="text-sm leading-normal text-white bg-black rounded-full ">

                                <th
                                    class="px-4 py-2 text-sm font-bold uppercase border-b rounded-l-full bg-grey-lightest text-grey-light border-grey-light">
                                    ID
                                </th>
                                <th
                                    class="px-4 py-2 text-sm font-bold uppercase border-b  bg-grey-lightest text-grey-light border-grey-light">
                                    VRegNumber
                                </th>
                                <th
                                    class="px-4 py-2 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-light border-grey-light">
                                    Vehcile Name
                                </th>
                                <th
                                    class="px-4 py-2 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-light border-grey-light">
                                    Model
                                </th>
                                <th
                                    class="hidden px-4 py-2 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-light border-grey-light md:table-cell">
                                    Make
                                </th>
                                <th
                                    class="hidden px-4 py-2 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-light border-grey-light md:table-cell">
                                    Mileage
                                </th>
                                <th
                                    class="hidden px-4 py-2 text-sm font-bold uppercase border-b bg-grey-lightest text-grey-light border-grey-light md:table-cell">
                                    Fuel Type
                                </th>
                                <th
                                    class="px-4 py-2 text-sm font-bold uppercase border-b rounded-r-full bg-grey-lightest text-grey-light border-grey-light">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-center ">
                            @foreach ($vehicle as $vehicleData)
                                <tr class="text-lg hover:bg-grey-lighter">
                                    <td class="px-4 py-2 border-b border-grey-light">{{$vehicleData->id}}</td>
                                    <td class="px-4 py-2 border-b border-grey-light">{{$vehicleData->regnumber}}</td>
                                    <td class="px-4 py-2 border-b border-grey-light">{{$vehicleData->vehicle_name}}</td>
                                    <td class="px-4 py-2 border-b border-grey-light">{{$vehicleData->Model}}</td>
                                    <td class="px-4 py-2 border-b border-grey-light">{{$vehicleData->Make}}</td>
                                    <td class="px-4 py-2 border-b border-grey-light">{{$vehicleData->mileage}}</td>
                                    <td class="px-4 py-2 border-b border-grey-light">{{$vehicleData->fuel_type}}</td>
                                    <td class="flex gap-2 pr-4 mt-2 px-14 ">
                                        <a href="{{route('bid.infoView',['id'=>$vehicleData->id])}}" class="flex items-center justify-center w-16 h-8 px-2 py-1 ml-1 text-sm text-white border rounded-lg md:block bg-green-700">
                                            View
                                        </a>

                                        {{-- <button
                                            class="flex items-center justify-center w-16 h-8 px-2 ml-1 text-sm text-white border rounded-lg md:block bg-buttonorange">
                                            Cancel
                                        </button> --}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>


            </div>
        </div>
    </div>

    </div>

    <!-- Script para las gráficas -->
    <script>
        // Gráfica de Usuarios
        var usersChart = new Chart(document.getElementById('usersChart'), {
            type: 'doughnut',
            data: {
                labels: ['Nuevos', 'Registrados'],
                datasets: [{
                    data: [30, 65],
                    backgroundColor: ['#00F0FF', '#8B8B8D'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom' // Ubicar la leyenda debajo del círculo
                }
            }
        });

        // Gráfica de Comercios
        var commercesChart = new Chart(document.getElementById('commercesChart'), {
            type: 'doughnut',
            data: {
                labels: ['Nuevos', 'Registrados'],
                datasets: [{
                    data: [60, 40],
                    backgroundColor: ['#FEC500', '#8B8B8D'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    position: 'bottom' // Ubicar la leyenda debajo del círculo
                }
            }
        });

        // Agregar lógica para mostrar/ocultar la navegación lateral al hacer clic en el ícono de menú
        const menuBtn = document.getElementById('menuBtn');
        const sideNav = document.getElementById('sideNav');

        menuBtn.addEventListener('click', () => {
            sideNav.classList.toggle(
                'hidden'); // Agrega o quita la clase 'hidden' para mostrar u ocultar la navegación lateral
        });
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
    </style>
    </div>
@endsection
