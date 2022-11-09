@extends('layouts.main')

@section('content')
<main class="lg:relative">
    <div class="mx-auto w-full max-w-7xl pt-16 pb-20 text-center lg:py-48 lg:text-left">
        <div class="px-4 sm:px-8 lg:w-3/5 xl:pr-16">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl lg:text-5xl xl:text-5xl ">
                <span class="block xl:inline">Enjoy Swift Identity Verification and Maximum Security </span>
            </h1>
            <p class="mx-auto mt-3 max-w-md text-lg text-gray-500 sm:text-xl md:mt-5 md:max-w-3xl">Create an identity wallet that makes identity verification on other platform easier, verifies and protects your identity from cyber theft using your Unique Key.</p>
            <div class="mt-10 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                    <a href="{{route('get-login')}}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-purple-600 px-8 py-3 text-base font-medium text-white hover:bg-purple-700 md:py-4 md:px-10 md:text-lg">Get started</a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative h-64 w-full sm:h-72 md:h-96 lg:absolute lg:inset-y-0 lg:right-0 lg:h-full lg:w-2/5">
        <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2102&q=80" alt="">
    </div>
</main>

<div class="overflow-hidden bg-purple-50 py-16 lg:py-24">
    <div class="relative mx-auto max-w-xl px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <svg class="absolute right-full hidden translate-x-1/2 translate-y-12 transform lg:block" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
            <defs>
                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
        </svg>

        <div class="relative mt-12 sm:mt-16 lg:mt-24">
            <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:items-center lg:gap-8">
                <div class="lg:col-start-2">
                    <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Create your Digital Wallet using preferred means of ID</h3>
                    <p class="mt-3 text-lg text-gray-500">With IdentiME Identity Wallet, verification on other platform happens faster, with no fear of cyber theft. No one has access to iIdentity except you authorize it.</p>
                    <div class="mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="{{route('get-login')}}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-purple-600 px-4 py-3 text-base font-medium text-white hover:bg-purple-700 md:py-4 md:px-5 md:text-lg">Get started</a>
                        </div>
                    </div>
                </div>

                <div class="relative -mx-4 mt-10 lg:col-start-1 lg:mt-0">
                    <svg class="absolute left-1/2 -translate-x-1/2 translate-y-16 transform lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
                        <defs>
                            <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                            </pattern>
                        </defs>
                        <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)" />
                    </svg>
                    <img class="inset-0 h-full w-full" width="490" src="{{ asset('img/business.svg') }}" alt="">
                </div>
            </div>
        </div>

        <svg class="absolute left-full hidden -translate-x-1/2 -translate-y-1/4 transform lg:block" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
            <defs>
                <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                </pattern>
            </defs>
            <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)" />
        </svg>
        <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:items-center lg:gap-8">
            <div class="relative">
                <h3 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl pb-5">As Businesses, Speed Up the Identity Verification Process of your Customers</h3>
                <p class="mt-3 text-lg text-gray-500">Attract More customers by making identity verification process easier and more secured by integrating your platform to IdentiME Database.</p>
                <div class="mt-8 sm:flex sm:justify-center lg:justify-start">
                    <div class="rounded-md shadow">
                        <a href="{{route('get-login')}}" class="flex w-full items-center justify-center rounded-md border border-transparent bg-purple-600 px-4 py-3 text-base font-medium text-white hover:bg-purple-700 md:py-4 md:px-5 md:text-lg">Get started</a>
                    </div>
                </div>
            </div>

            <div class="relative -mx-4 mt-10 lg:mt-0" aria-hidden="true">
                <svg class="absolute left-1/2 -translate-x-1/2 translate-y-16 transform lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
                    <defs>
                        <pattern id="ca9667ae-9f92-4be7-abcb-9e3d727f2941" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect width="784" height="404" fill="url(#ca9667ae-9f92-4be7-abcb-9e3d727f2941)" />
                </svg>
                <img class="inset-0 h-full w-full" width="490" src="{{ asset('img/digital-wallet.svg') }}" alt="">
            </div>
        </div>

    </div>
</div>

<div class="bg-purple-800">
    <div class="mx-auto max-w-4xl px-4 py-16 sm:px-6 sm:pt-20 sm:pb-24 lg:max-w-7xl lg:px-8 lg:pt-24">
        <h2 class="text-3xl font-bold tracking-tight text-white">With your IdentiME you:</h2>
        <p class="mt-4 max-w-3xl text-lg text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis. Blandit aliquam sit nisl euismod mattis in.</p>
        <div class="mt-12 grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:mt-16 lg:grid-cols-4 lg:gap-x-8 lg:gap-y-16">
            <div>
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                        <!-- Heroicon name: outline/inbox -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-19.5.338V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H6.911a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">Enjoy quick Verification</h3>
                    <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                </div>
            </div>

            <div>
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                        <!-- Heroicon name: outline/users -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                        </svg>
                    </span>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">Retain More Customers</h3>
                    <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                </div>
            </div>

            <div>
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                        <!-- Heroicon name: outline/trash -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                    </span>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">Enjoy Identity Security</h3>
                    <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                </div>
            </div>

            <div>
                <div>
                    <span class="flex h-12 w-12 items-center justify-center rounded-md bg-white bg-opacity-10">
                        <!-- Heroicon name: outline/pencil-square -->
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                    </span>
                </div>
                <div class="mt-6">
                    <h3 class="text-lg font-medium text-white">Store your own ID data securely</h3>
                    <p class="mt-2 text-base text-purple-200">Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.</p>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection