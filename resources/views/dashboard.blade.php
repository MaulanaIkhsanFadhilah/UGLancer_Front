<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>UGLancer</title>
</head>

<body>
    <!-- Main modal -->
    @include('layouts.nav-bar')
    @include('layouts.sign-up')
    @include('layouts.sign-in')

    <section
        class="pt-28 bg-gradient-to-r from-fuchsia-800 via-purple-900 to-blue-800 focus:ring-1 focus:outline-none focus:ring-purple-200 dark:focus:ring-purple-800">
        <div class="flex justify-between">
            <div class="my-auto mx-10">
                <h1 class="font-['roboto'] text-4xl text-white font-bold">Free to create, Free to work <br> Free to
                    succeed
                </h1>
                <div class="mt-8 w-full flex">
                    <input type="search" id="default-search"
                        class="h-10 w-[30rem] p-4 ext-sm text-gray-900 border-gray-300  bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Mockups, Logos..." required>
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                        class="px-12 py-2 h-10 text-white
                        bg-purple-800 hover:bg-purple-900 text-sm">
                        <img src="{{ URL('assets/chevron-down.png') }}" alt="chevron">
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownHover" aria-labelledby="dropdownHoverButton"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-60">
                        <ul class="py-2 text-sm text-gray-700">
                            <li class="border-b-[1px]">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                    <h1 class="font-bold">SERVICES</h1><br>Find the services you need
                                </a>
                            </li>
                            <li class="border-b-[1px]">
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100">
                                    <h1 class="font-bold">FREELANCER</h1>
                                    <br>look for professional freelancers
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <img src="{{ URL('assets/person.png') }}" alt="Person" class="flex">
        </div>
    </section>

    <div class="mt-20">
        <div class="flex justify-center">
            <h1 class="font-extrabold font-['georgia'] text-2xl text-gray-900">OUR SERVICES</h1>
        </div>
        <div class="flex justify-center mt-8">
            <div class="mx-2 hover:opacity-90">
                <a href="#">
                    <h4 class="absolute z-0 text-white p-4">
                        <small class="font-semibold">Build your brand</small><br>
                        <span class="font-bold text-2xl">Logo Design</span>
                    </h4>
                    <img src="{{ URL('assets/carousel-1.png') }}" alt="Logo Design" class="rounded-md">
                </a>
            </div>
            <div class="mx-2 hover:opacity-90">
                <a href="#">
                    <h4 class="absolute z-0 text-white p-4">
                        <small class="font-semibold">Build your brand</small><br>
                        <span class="font-bold text-2xl">Logo Design</span>
                    </h4>
                    <img src="{{ URL('assets/carousel-1.png') }}" alt="Logo Design" class="rounded-md">
                </a>
            </div>
            <div class="mx-2 hover:opacity-90">
                <a href="#">
                    <h4 class="absolute z-0 text-white p-4">
                        <small class="font-semibold">Build your brand</small><br>
                        <span class="font-bold text-2xl">Logo Design</span>
                    </h4>
                    <img src="{{ URL('assets/carousel-1.png') }}" alt="Logo Design" class="rounded-md">
                </a>
            </div>

        </div>
    </div>


    <script type="text/javascript" src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>


</html>
