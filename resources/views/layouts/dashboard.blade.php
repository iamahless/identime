<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - IdentiME</title>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css"/>
    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="h-full">
<div class="min-h-full">
    <div class="bg-gray-800 pb-32">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="border-b border-gray-700">
                    <div class="flex h-16 items-center justify-between px-4 sm:px-0">
                        <div class="flex items-center">
                            <div class="hidden md:block">
                                <div class="flex items-baseline space-x-4">
                                    <a href="{{ route('dashboard-business') }}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                                       aria-current="page">Dashboard</a>

                                    @if(auth()->user()->type === 'business')
                                    <a href="#"
                                       class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

                                    <a href="#"
                                       class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

                                    <a href="#"
                                       class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Reports</a>
                                    @else
                                        <a href="#"
                                           class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">ID Wallet</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block" x-data="{ dropdown: false }">
                            <div class="ml-4 flex items-center md:ml-6">
                                <!-- Profile dropdown -->
                                <div class="relative ml-3">
                                    <div>
                                        <button @click="dropdown = !dropdown"
                                                type="button"
                                                class="flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                            <span class="sr-only">Open user menu</span>
                                            <img class="h-8 w-8 rounded-full"
                                                 src="https://ui-avatars.com/api/?name={{urlencode(auth()->user()->name)}}"
                                                 alt="">
                                        </button>
                                    </div>

                                    <!--
                                      Dropdown menu, show/hide based on menu state.

                                      Entering: "transition ease-out duration-100"
                                        From: "transform opacity-0 scale-95"
                                        To: "transform opacity-100 scale-100"
                                      Leaving: "transition ease-in duration-75"
                                        From: "transform opacity-100 scale-100"
                                        To: "transform opacity-0 scale-95"
                                    -->
                                    <div x-show="dropdown"
                                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                        tabindex="-1">
                                        <a href="{{ route('get-logout') }}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                                           tabindex="-1" id="user-menu-item-2">Sign out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="-mr-2 flex md:hidden">
                            <!-- Mobile menu button -->
                            <button type="button"
                                    class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    aria-controls="mobile-menu" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!--
                                  Heroicon name: outline/bars-3

                                  Menu open: "hidden", Menu closed: "block"
                                -->
                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                                </svg>
                                <!--
                                  Heroicon name: outline/x-mark

                                  Menu open: "block", Menu closed: "hidden"
                                -->
                                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="border-b border-gray-700 md:hidden" id="mobile-menu">
                <div class="space-y-1 px-2 py-3 sm:px-3">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="{{ route('dashboard-business') }}" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium"
                       aria-current="page">Dashboard</a>

                    @if(auth()->user()->type === 'business')
                    <a href="#"
                       class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>

                    <a href="#"
                       class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>

                    <a href="#"
                       class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Reports</a>
                    @else
                        <a href="#"
                           class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">ID Wallet</a>
                    @endif
                </div>
                <div class="border-t border-gray-700 pt-4 pb-3">
                    <div class="flex items-center px-5">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                 src="https://ui-avatars.com/api/?name={{urlencode(auth()->user()->name)}}" alt="">
                        </div>
                        <div class="ml-3">
                            <div class="text-base font-medium leading-none text-white">{{ auth()->user()->name }}</div>
                            <div class="text-sm font-medium leading-none text-gray-400">{{ auth()->user()->email }}</div>
                        </div>
                    </div>
                    <div class="mt-3 space-y-1 px-2">
                        <a href="{{ route('get-logout') }}"
                           class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                            out</a>
                    </div>
                </div>
            </div>
        </nav>
        <header class="py-10">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-white">Dashboard</h1>
            </div>
        </header>
    </div>

    <main class="-mt-32">
        <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">
            <!-- Replace with your content -->
            <div class="rounded-lg bg-white px-5 py-6 shadow sm:px-6">
                <div class="rounded-lg border-4 border-dashed border-gray-200">
                        @yield('content')
                </div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</div>


</body>
</html>
