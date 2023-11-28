<div id="sign-up-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class=" container mx-auto mt-10 px-10 max-w-md bg-white rounded-xl">
        <div class="my-12">
            <img src="{{ URL('assets/Logo.png') }}" alt="UGLancer" class="mx-auto px-12 pt-4">
        </div>
        <div class="font-bold text-lg">
            <span>Sign up to join with us</span>
        </div>
        <div class="items-center mt-6">
            <button
                class="w-full px-4 py-2 flex border border-slate-200 rounded-lg text-grey-700 hover:border-slate-400 hover:text-gray-900 hover:bg-gray-100 transition duration-150">
                <img class="w-6 h-6" src="https://www.svgrepo.com/show/475656/google-color.svg" loading="lazy"
                    alt="google logo">
                <span class="font-semibold mx-auto">Continue with Google</span>
            </button>
        </div>
        <form action="#" method="">
            <div class="flex mt-6">
                <div class="w-2/4 pr-2">
                    <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">First
                        name</label>
                    <div class="mt-2">
                        <input id="first-name" name="first name" type="text" autocomplete="first name"
                            placeholder="First name" required
                            class="mr-5 p-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-purple-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="w-2/4 pl-2">
                    <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900">Last
                        name</label>
                    <div class="mt-2">
                        <input id="last-name" name="last name" type="text" autocomplete="last name"
                            placeholder="Last name" required
                            class="p-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-purple-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                    address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" placeholder="Type your Email" required
                        class="p-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-purple-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center mt-2">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" placeholder="Type your Password"
                        autocomplete="off" required
                        class="p-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-purple-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div>
                <div class="flex items-center mt-2">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Re-type
                        Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" placeholder="Re-type your password" required
                        class="p-5 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-purple-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="p-3 mt-4">
                <button type="submit"
                    class="flex w-2/4 justify-center m-auto rounded-md bg-purple-800 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-purple-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">
                    Register</button>
            </div>
            <div class="px-3 text-sm text-center pb-10">
                <label for="sign-in">Already have account?</label>
                <button id="sign-in" type="menu" data-modal-target="sign-in-modal"
                    data-modal-toggle="sign-in-modal" data-modal-hide="sign-up-modal"
                    class="text-purple-800 font-semibold">Sign
                    in</button>
            </div>
        </form>
    </div>
</div>
