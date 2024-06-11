@extends('layout.adminLayout')
@section('content')
@vite('resources/css/app.css')
@vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="container">
        <div class="mx-10 md:mt-40">
            <h1 class="text-[40px] font-anton text-primaryColor">Customer <span class="text-black">Add</span></h1>
            {{-- <p class="text-gray-600 font-boogaloo">Where our irresistible pizza offers are waiting to elevate your dining
                experience</p> --}}
            <form action="{{route('admin.postcategory')}}" method="post" class="flex flex-col  mx-auto md:mt-8 font-boogaloo text-[20px] mt-4">
                @method('post')
                @csrf
                <div class="flex flex-row gap-4 md:gap-8">
                    <div class="w-7/12">
                        <label for="">Category </label>
                        <input type="text" placeholder="category name" name="category_name"
                            class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                            @error('category_name')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>

                </div>
                <button type="submit"
                    class="items-center bg-red-800 mt-4 p-2 bg-primaryColor flex justify-start md:w-[15%] w-[150px] rounded-lg text-black md:mt-8 text-center">
                    <span class="mx-auto">Update</span>
                </button>
            </form>




@endsection
