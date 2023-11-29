<div>
    <nav class=" bg-transparent dark:bg-gray-900 fixed w-full shadow-md">
        <div class="flex flex-wrap items-center justify-between mx-auto px-[5%] py-4 w-full bg-white">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ URL('assets/Logo.png') }}" class="h-8" alt="UGLancer Logo">
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse pl-8 hover:text-gray-400">
                <button type="button" data-modal-target="sign-in-modal" data-modal-toggle="sign-in-modal"
                    class="mr-6 font-semibold">
                    Sign in</button>
                <button type="button" data-modal-target="sign-up-modal" data-modal-toggle="sign-up-modal"
                    class="text-white
                bg-purple-800 hover:bg-purple-900 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg
                text-sm px-4 py-2 text-center dark:bg-purple-600 dark:hover:bg-purple-800 dark:focus:ring-purple-900">
                    Join us</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-800 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-semibold text-lg border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-900 md:dark:bg-gray-900 dark:border-gray-800">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-purple-800 rounded md:bg-transparent md:text-purple-800 md:p-0 md:dark:text-purple-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-400 md:p-0 md:dark:hover:text-purple-500 dark:text-white dark:hover:bg-gray-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-800">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-400 md:p-0 md:dark:hover:text-purple-500 dark:text-white dark:hover:bg-gray-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-800">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-400 md:p-0 md:dark:hover:text-purple-500 dark:text-white dark:hover:bg-gray-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-800">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="items-center hidden justify-between w-full md:flex md:w-auto md:order-1 bg-opacity-[60%] bg-purple-800"
            id="navbar-sticky">
            <ul
                class="flex flex-col w-4/5 md:mx-auto font-normal text-sm rtl:space-x-reverse md:flex-row md:bg-transparent">
                <li class="mx-auto">
                    <a href="#"
                        class="block py-2 px-auto md:bg-transparent md:hover:font-semibold md:hover:text-gray-100 md:text-gray-300 md:text-center"
                        aria-current="page">Category 1</a>
                </li>
                <li class="mx-auto">
                    <a href="#"
                        class="block py-2 px-auto md:bg-transparent md:hover:font-semibold md:hover:text-gray-100 md:text-gray-300 md:text-center">Category
                        2</a>
                </li>
                <li class="mx-auto">
                    <a href="#"
                        class="block py-2 px-auto md:bg-transparent md:hover:font-semibold md:hover:text-gray-100 md:text-gray-300 md:text-center">Category
                        3</a>
                </li>
                <li class="mx-auto">
                    <a href="#"
                        class="block py-2 px-auto md:bg-transparent md:hover:font-semibold md:hover:text-gray-100 md:text-gray-300 md:text-center">Category
                        4</a>
                </li>
                <li class="mx-auto">
                    <a href="#"
                        class="block py-2 px-auto md:bg-transparent md:hover:font-semibold md:hover:text-gray-100 md:text-gray-300 md:text-center">Category
                        5</a>
                </li>
                <li class="mx-auto">
                    <a href="#"
                        class="block py-2 px-auto md:bg-transparent md:hover:font-semibold md:hover:text-gray-100 md:text-gray-300 md:text-center">Category
                        6</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
