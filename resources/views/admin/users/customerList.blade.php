@extends('layout.adminLayout')
@section('content')
    <div class="container">
        <div class="mx-10 md:mt-32">
            <div class=" flex">
                <div class="md:w-1/2">
                    <h1 class="text-[40px] font-anton text-primaryColor">Customer <span class="text-black">List</span></h1>
                    <p class="text-gray-600 font-boogaloo">Where our irresistible pizza offers are waiting to elevate your
                        dining
                        experience</p>
                </div>

                <div class="md:w-1/2 flex justify-end">
                    <form id="searchForm" action="/search" method="GET">
                        <div class="relative">
                            <input id="searchInput"
                                class="w-full h-10 md:w-[300px] pl-10 pr-5 py-1 md:ml-4 text-base hidden md:block border border-black rounded-full focus:shadow-outline"
                                type="search" placeholder="Search" name="search" value="{{ request()->input('search') }}">
                            <button type="button" id="searchButton"
                                class="absolute top-3 left-6 text-gray-400 fas fa-search"></button>
                        </div>
                    </form>

                </div>
                <script>
                    // Check if the page is being refreshed
                    if (performance.navigation.type === 1) {
                        // Redirect to the customer list page
                        window.location.href = "{{ route('admin.customerlist') }}";
                    }
                </script>

                <script>
                    document.getElementById('searchButton').addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent the default form submission
                        const searchInputValue = document.getElementById('searchInput').value;
                        const searchForm = document.getElementById('searchForm');
                        searchForm.setAttribute('action', '/search?search=' + encodeURIComponent(searchInputValue));
                        searchForm.submit(); // Submit the form with the updated action
                    });
                </script>

            </div>

            @if (Session::has('success'))
                <div class="arelative block w-full p-4 mb-4 text-base leading-5 text-white bg-green-300 rounded-lg opacity-100 font-regular"
                    role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <div class="mt-8 font-boogaloo md:mt-4">
                <div class="overflow-x-auto">
                    <table>
                        <thead class="text-white bg-black">
                            <th class="px-1 py-2 rounded-bl-3xl rounded-tl-3xl">Cus Id</th>
                            <th class="px-1 py-2"> First Name</th>
                            <th class="px-20 py-2">Last Name</th>
                            <th class="px-1 py-2">Email</th>
                            <th class="px-10 py-2">Contact</th>
                            <th class="px-10 py-2">DOB</th>
                            <th class="px-10 py-2">Gender</th>
                            <th class="px-8 py-2 rounded-br-3xl rounded-tr-3xl">Action</th>
                        </thead>

                        <tbody id="tableBody">
                            @foreach ($users as $userData)

                            <tr class="text-center text-black border-b tableRow">
                                <td class="px-5 py-2 text-primaryColor"><u>{{ $userData->id }}</u></td>
                                <td class="py-2 px-2">{{ $userData->f_name }}</td>
                                <td class="px-10   py-2">{{ $userData->l_name }}</td>
                                <td class="px-1 py-2"> {{ $userData->email }}</td>
                                <td class="px-1  py-2">{{ $userData->c_number }}</td>
                                <td class=" px-1  py-2">{{ $userData->dob }}</td>
                                <td class=" px-1  py-2">{{ $userData->gender }}</td>
                                <td class="px-2 py-2">
                                    <div class="flex md:flex-row md:gap-4">
                                        <div class="mt-1">
                                            <a href="{{route('admin.user.customerEdit',['id' => $userData->id])}}" class="p-2 text-white bg-green-600 rounded">Edit</a>
                                        </div>
                                        <div class="">
                                            <form action="{{route('users.destroy', $userData['id'])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-[#C81E1E] flex justify-center items-center text-white rounded-md p-1 md:w-full">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
                {{-- Pagination --}}
                <div class="flex flex-row md:gap-[300px]">
                    <p class="text-gray-600 md:mt-10" id="paginationText">Showing 1 to 5 from 30 entries</p>
                    <div class="pagination md:ml-16 lg:ml-72 ml-[20px] md:mt-8" id="pagination">
                        <a href="#" style="background-color: white; color: black; font-size: 30px"
                            onclick="prevPage()">&larr;</a>
                        <a href="#" class="visible" onclick="changePage(1)">1</a>
                        <a href="#" class="visible" onclick="changePage(2)">2</a>
                        <a href="#" class="visible" onclick="changePage(3)">3</a>
                        <a href="#" style="background-color: white; color: black; font-size: 30px"
                            onclick="nextPage()">&rarr;</a>
                    </div>
                </div>
                {{-- End pagination --}}
            </div>
        </div>
    </div>
    <script>
        let currentPage = 1;
        const rowsPerPage = 5;
        const totalRows = 50; // Update this with your actual total rows

        function showRows(startIndex, endIndex) {
            const rows = document.querySelectorAll('.tableRow');
            rows.forEach((row, index) => {
                if (index >= startIndex && index < endIndex) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        }

        function changePage(page) {
            currentPage = page;
            const startIndex = (currentPage - 1) * rowsPerPage;
            const endIndex = startIndex + rowsPerPage;
            showRows(startIndex, endIndex);

            // Update pagination text
            const paginationText = document.getElementById('paginationText');
            paginationText.innerText = `Showing ${startIndex + 1} to ${endIndex} from ${totalRows} entries`;
        }

        function prevPage() {
            if (currentPage > 1) {
                changePage(currentPage - 1);
            }
        }

        function nextPage() {
            const totalPages = Math.ceil(totalRows / rowsPerPage);
            if (currentPage < totalPages) {
                changePage(currentPage + 1);
            }
        }

        // Initial page load
        changePage(currentPage);
    </script>
@endsection
