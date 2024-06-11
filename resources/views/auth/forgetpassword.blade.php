{{-- forgetpassword section --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body>
    <div class="">


        <div class="flex flex-col md:flex-row w-full  ">

            <div class="md:w-1/2 h-screen bg-opacity-50 rounded-lg md:bg-white md:rounded-none z-10">
                <div class="md:text-start mx-10 mt-10 text-center">
                    <h1 class=" text-buttonorange font-anton md:text-5xl text-3xl font-bold">Forget Password
                    </h1>
                    <h1 class="text-black font-boogaloo text-2xl mt-5">Enter the email address associated with your
                        account</h1>
                </div>
                <div class="w-10/12 mx-10">
                    @if (Session::has('success'))
                        <div class="arelative block w-full p-4 mb-4 text-base leading-5 text-white bg-green-300 rounded-lg opacity-100 font-regular"
                            role="alert">
                            <div class="flex flex-row justify-between">
                                {{ Session::get('success') }}
                                <div class="">
                                    <a href="{{ route('login') }}" class="">Login</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    <form action="{{ route('forgetpasswordPost') }}"
                        class="md:bg-transparent md:px-0 md:py-0 bg-orange-50 bg-opacity-75 px-10 rounded-xl md:mt-24"
                        method="POST">
                        @csrf
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="mt-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2">Email Address</label>
                            <input name="email" value="{{old('email')}}"
                                class="bg-gray-200 text-gray-700 focus:outline-none focus:shadow-outline border border-gray-300 rounded py-2 px-4 block w-full appearance-none"
                                type="email" />
                        </div>

                            {{-- <label for="" class="font-boogaloo text-gray-400 text-xl  ">Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="w-full p-3 mt-2 text-black bg-white shadow-lg  rounded-2xl text-2xl font-boogaloo placeholder-gray-500"
                                placeholder="savorupoh@gmail.com"> --}}
                        <button type="submit"
                            class=" w-full px-20 py-3 justify-center text-black bg-primaryColor rounded-3xl mt-5 font-boogaloo md:text-sm font-bold bg-buttonorange hover:bg-orange-400">CONTINUE
                        </button>

                    </form>
                </div>

            </div>


            <div class="md:w-1/2 md:h-full">
                <img src="{{ asset('img/home2.jpeg') }}" alt="image"
                    class='w-full md:h-screen h-[940px] md:opacity-100 opacity-20 md:mt-0 -mt-[900px] ' />
                {{-- <div class="bg-[url('../images/Rectangle162.png')] bg-cover h-screen md:mt-0 '"> </div> --}}
            </div>

        </div>
</body>
