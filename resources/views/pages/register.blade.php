@extends('layouts.main')

@section('content')
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            @include('partials.alert')

            <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign up your account</h2>
        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md" x-data="{ tab: 'user' }">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <div>
                    <div class="sm:hidden">
                        <label for="tabs" class="sr-only">Select a tab</label>
                        <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                        <select id="tabs" name="tabs" class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                            <option value="user" selected>As a User</option>
                            <option value="business">As a Business</option>
                        </select>
                    </div>
                    <div class="hidden sm:block">
                        <div class="border-b border-gray-200">
                            <nav class="-mb-px flex" aria-label="Tabs">
                                <a :class="{ 'border-indigo-500 text-indigo-600': tab === 'user' }" @click="tab = 'user'" href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/2 py-4 px-1 text-center border-b-2 font-medium text-sm" aria-current="page">As a User</a>

                                <a :class="{ 'border-indigo-500 text-indigo-600': tab === 'business' }" @click="tab = 'business'" href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 w-1/2 py-4 px-1 text-center border-b-2 font-medium text-sm">As a Business</a>
                            </nav>
                        </div>
                    </div>
                </div>


                <form class="space-y-6" action="{{ route('post-register') }}" method="POST">
                    @csrf
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <div class="mt-1">
                            <input id="first_name" name="first_name" type="text" autocomplete="first_name" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <div class="mt-1">
                            <input id="last_name" name="last_name" type="text" autocomplete="last_name" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <template x-if="tab === 'business'">
                        <div>
                            <label for="business_name" class="block text-sm font-medium text-gray-700">Business Name</label>
                            <div class="mt-1">
                                <input id="business_name" name="business_name" type="text" autocomplete="business_name" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>
                    </template>

                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <div class="mt-1">
                            <input id="phone" name="phone" type="text" autocomplete="phone" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>


                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <div class="mt-1">
                            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
