<div id="sign-in-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="container mx-auto mt-10 px-10 max-w-md bg-white rounded-xl">
        <div class="my-12">
            <img src="{{ URL('assets/Logo.png') }}" alt="UGLancer" class="mx-auto px-12 pt-4">
        </div>
        <div class="font-bold text-lg">
            <span>Sign in to your account</span>
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
            <div class="mt-6">
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
                <div class="text-sm flex mt-4">
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value=""
                            class="w-4 h-4 accent-purple-800 text-purple-600 bg-gray-100 border-gray-300 rounded focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-400">Remember me</label>
                    </div>
                    <a href="#" class="ml-auto font-semibold text-purple-800 hover:text-purple-900">Forgot
                        password?</a>
                </div>
            </div>
            <div class="p-3 mt-4">
                <button type="submit"
                    class="flex w-2/4 justify-center m-auto rounded-md bg-purple-800 px-3 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-purple-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-purple-600">
                    Login</button>
            </div>
            <div class="px-3 text-sm text-center pb-10">
                <label for="sign-up">Don't have account?</label>
                <button id="sign-up" data-modal-target="sign-up-modal" data-modal-toggle="sign-up-modal"
                    data-modal-hide="sign-in-modal" class="text-purple-800 font-semibold">Sign
                    up</button>
            </div>
        </form>
    </div>
</div>
@include('layouts.sign-up')
