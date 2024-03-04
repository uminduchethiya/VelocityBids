@extends('layout.adminLayout')
@section('content')
    <div class="container">
        <div class="grid justify-center md:mt-36">
            <h1 class="text-[40px] font-anton text-primaryColor md:mt-4">Category <span class="text-black">List</span></h1>
            {{-- <p class="text-gray-600 font-boogaloo">Where our irresistible pizza offers are waiting to elevate your dining
                experience</p> --}}
            <div class="mt-8 font-boogaloo md:mt-4">
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse px-10">
                        <thead class="text-white bg-black">
                            <th class="px-10 py-2 rounded-bl-3xl rounded-tl-3xl">Category Name</th>
                            <th class="px-20 py-2">Items</th>
                            <th class="px-20 py-2 rounded-br-3xl rounded-tr-3xl">Action</th>
                        </thead>

                        <tbody id="tableBody md:w-full">
                            @foreach ($category as $categoryData)
                                <tr class="text-center text-black border-b tableRow">
                                    <td class="py-2 px-20 text-wrap">{{$categoryData->category_name}}</td>
                                    <td class="px-20 text-black">{{ $categoryData->products->count() }}</td>
                                    <td class="flex px-48 py-2 md:gap-2">
                                        <div class="flex md:flex-row md:gap-4">
                                            <div class="mt-1">
                                                <a href="{{route('admin.category.viewupdate',['id'=>$categoryData->id])}}" class="p-2 text-white bg-green-600 rounded">Edit</a>
                                            </div>
                                            <div class="">
                                                <form action="{{route('admin.deletecategory',$categoryData['id'])}}" method="post">
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
                        <a href="#" class="page-link" onclick="changePage(1)">1</a>
                        <a href="#" class="page-link" onclick="changePage(2)">2</a>
                        <a href="#" class="page-link" onclick="changePage(3)">3</a>
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
        const totalRows = 30; // Update this with your actual total rows

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
            const endIndex = Math.min(startIndex + rowsPerPage, totalRows);
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
