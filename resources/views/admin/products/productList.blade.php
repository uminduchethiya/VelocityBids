@extends('layout.adminLayout')
@section('content')
<div class="container">
    <div class="mx-10 md:mt-36">
        <div class="flex ">
            <div class="md:w-1/2">
                <h1 class="text-[40px] font-anton text-primaryColor">Product <span class="text-black">List</span></h1>
                
            </div>
            {{-- <div class="md:w-1/2">
                <form id="searchForm" action="{{ route('search.product') }}" method="GET">
                    <div class="relative">
                        <input id="searchInput"
                            class="w-full h-10 md:w-[300px] pl-10 pr-5 py-1 md:ml-4 text-base hidden md:block border border-black rounded-full focus:shadow-outline"
                            type="search" placeholder="Search" name="search_product"
                            value="{{ request()->input('search_product') }}">
                        <button type="submit" id="searchButton"
                            class="absolute text-gray-400 top-3 left-6 fas fa-search"></button>
                    </div>
                </form>
            </div> --}}
            <script>
                // Check if the page is being refreshed
                if (performance.navigation.type === 1) {
                    // Redirect to the customer list page
                    window.location.href = "{{ route('admin.product.productlist') }}";
                }

                // Add event listener to the search button
                document.getElementById('searchButton').addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default form submission
                    const searchInputValue = document.getElementById('searchInput').value;
                    const searchForm = document.getElementById('searchForm');
                    searchForm.setAttribute('action', '/search/product?search=' + encodeURIComponent(searchInputValue));
                    searchForm.submit(); // Submit the form with the updated action
                });
            </script>
        </div>

        <div class="mt-8 font-boogaloo md:mt-4">
            <div class="overflow-x-auto">
                <table>
                    <thead class="text-white bg-black">
                        <th class="px-1 py-2 rounded-bl-3xl rounded-tl-3xl">Product Id</th>
                        <th class="px-1 py-2">Product Name</th>
                        <th class="px-4 py-2">Category</th>
                        <th class="px-1 py-2">Price</th>
                        <th class="px-10 py-2">Discount</th>
                        <th class="px-10 py-2">Selling Price</th>
                        <th class="px-8 py-2 rounded-br-3xl rounded-tr-3xl">Action</th>
                    </thead>

                    <tbody id="tableBody">
                        @foreach ($product as $productData)
                            <tr class="text-center text-black border-b tableRow">
                                <td class="px-10 py-2 text-primaryColor"><u>{{ $productData->id }}</u></td>
                                <td class="py-2">{{ $productData->product_name }}</td>
                                <td class="px-10 py-2">{{ optional($productData->category)->category_name }}</td>
                                <td class="py-2">{{ $productData->price }}</td>
                                <td class="py-2">
                                @php
                                    $discountPercentage = (($productData->price - $productData->selling_price) / $productData->price) * 100;
                                    $discountPercentage = number_format($discountPercentage, 2);
                                @endphp

                                    @if ($discountPercentage != 0.0)
                                        {{ $discountPercentage }} %
                                    @endif
                                </td>
                                <td class="py-2">{{ $productData->selling_price }}</td>
                                <td class="px-8 py-2">
                                    <div class="flex md:flex-row md:gap-4">
                                        <div class="mt-3">
                                            <a href="{{route('admin.product.productedit',['id'=>$productData->id])}}"
                                                class="p-2 text-white bg-green-600 rounded">Edit</a>
                                        </div>
                                        <form method="POST"
                                            action="{{route('admin.product.productdelete',$productData['id'])}}"
                                            class="p-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="p-1 text-white bg-red-600 rounded">Delete</button>
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
                    <a href="#" style="color: black; font-size: 30px" onclick="prevPage()">&larr;</a>
                    <a href="#" class="visible" onclick="changePage(1)">1</a>
                    <a href="#" class="visible" onclick="changePage(2)">2</a>
                    <a href="#" class="visible" onclick="changePage(3)">3</a>
                    <a href="#" style="color: black; font-size: 30px" onclick="nextPage()">&rarr;</a>
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
