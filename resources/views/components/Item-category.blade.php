@props([
    'category' => null,
])
<div class="">
    <h1 class="text-[40px] font-anton text-primaryColor">
        @if ($category)
            EDIT
        @else
            ADD
        @endif
        <span class="text-black">Category </span>
    </h1>
    <p class="text-gray-600 font-boogaloo">Where our irresistible pizza offers are waiting to elevate your dining
        experience</p>
    @if (Session::has('success'))
        <div class="arelative block w-1/2 p-4 mt-4 mb-4 text-base leading-5 text-white bg-green-300 rounded-lg opacity-100 font-regular"
            role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <form method="post"
        action="@if ($category) {{ route('admin.category.updatecategory', $category->id) }}@else{{ route('admin.postcategory') }} @endif"
        class="flex flex-col mx-auto md:mt-8 font-boogaloo text-[20px] mt-4" enctype="multipart/form-data">

        @if ($category)
            @method('PATCH')
        @endif
        @csrf
        <div class="flex flex-col gap-4 md:gap-8">
            <div class="w-7/12">
                <label for="">Category Name</label>
                <input type="text" name="category_name" placeholder="Category Name"
                    value="{{ old('category', $category->category_name ?? null) }}"
                    class="w-full p-2 border border-gray-800 rounded-lg opacity-60">
                <x-input-error :messages="$errors->get('category_name')" class="mt-2" />
            </div>
        </div>
        <button type="submit"
            class="items-center mt-4 p-2 bg-primaryColor flex justify-start md:w-[15%] w-[150px] rounded-lg text-white md:mt-8 text-center">
            <span class="mx-auto">Save</span>
        </button>
    </form>
</div>
