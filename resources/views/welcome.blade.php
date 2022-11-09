@extends('layouts.main')

@section('content')
    <main class="lg:relative">
        <div class="mx-auto w-full max-w-7xl pt-16 pb-20 text-center lg:py-48 lg:text-left">
            <div class="px-4 sm:px-8 lg:w-3/5 xl:pr-16">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-5xl">
                    <span class="block xl:inline">Enjoy Identity Verification</span>
                    <span class="block text-indigo-600 xl:inline">Ease and Maximum Security </span>
                </h1>
                <p class="mx-auto mt-3 max-w-md text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">Create an identity wallet that makes identity verification on other platform easier, verifies and protects your identity from cyber theft using your Unique Key.</p>
                <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 md:py-4 md:px-10 md:text-lg">Get started</a>
                    </div>
                    <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                        <a href="#" class="flex w-full items-center justify-center rounded-md border border-transparent bg-white px-8 py-3 text-base font-medium text-indigo-600 hover:bg-gray-50 md:py-4 md:px-10 md:text-lg">Live demo</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative h-64 w-full sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:h-full lg:w-2/5">
            <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
        </div>
    </main>
@endsection
