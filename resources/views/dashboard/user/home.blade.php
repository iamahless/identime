@extends('layouts.dashboard')

@section('content')
<div class="space-y-8 divide-y divide-gray-200 p-10" x-data="{ openNinWallet: false, openBvnWallet: false}">
  <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
    <div class="space-y-6 sm:space-y-5">
      <div>
        <h3 class="text-lg font-medium leading-6 text-gray-900">Hi {{ auth()->user()->name }},</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">Start by choosing what Identity Information you’re
          authenticating your wallet with.</p>
      </div>
    </div>
    <div class="h-10"></div>
    @include('partials.alert')
    <div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-gray-200 shadow sm:grid sm:grid-cols-2 sm:gap-px sm:divide-y-0">
      <div class="rounded-tl-lg rounded-tr-lg sm:rounded-tr-none relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
        <div>
          <span class="rounded-lg inline-flex p-3 bg-teal-50 text-teal-700 ring-4 ring-white">
            <!-- Heroicon name: outline/clock -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </span>
        </div>
        <div class="mt-8">
          <h3 class="text-lg font-medium">
              @if($wallets->firstWhere('type', 'nin'))
                  <p class="focus:outline-none">
                      <!-- Extend touch target to entire panel -->
                      <span class="absolute inset-0" aria-hidden="true"></span>
                      NIN
                  </p>
              @else
            <a href="#" class="focus:outline-none" @click="openNinWallet = true">
              <!-- Extend touch target to entire panel -->
              <span class="absolute inset-0" aria-hidden="true"></span>
              NIN
            </a>
              @endif
          </h3>
          <p class="mt-2 text-sm text-gray-500">Doloribus dolores nostrum quia qui natus officia quod et
            dolorem. Sit repellendus qui ut at blanditiis et quo et molestiae.</p>
        </div>
        <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
            @if($wallets->firstWhere('type', 'nin'))
            <svg class="h-6 w-6 text-green-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z" clip-rule="evenodd" />
            </svg>
            @else
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
          </svg>
            @endif
        </span>
      </div>

      <div class="sm:rounded-tr-lg relative group bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500">
        <div>
          <span class="rounded-lg inline-flex p-3 bg-purple-50 text-purple-700 ring-4 ring-white">
            <!-- Heroicon name: outline/check-badge -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
            </svg>
          </span>
        </div>
        <div class="mt-8">
          <h3 class="text-lg font-medium">
            <a href="#" class="focus:outline-none" @click="openBvnWallet = true">
              <!-- Extend touch target to entire panel -->
              <span class="absolute inset-0" aria-hidden="true"></span>
              BVN
            </a>
          </h3>
          <p class="mt-2 text-sm text-gray-500">Doloribus dolores nostrum quia qui natus officia quod et
            dolorem. Sit repellendus qui ut at blanditiis et quo et molestiae.</p>
        </div>
        <span class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400" aria-hidden="true">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" />
          </svg>
        </span>
      </div>
    </div>

  </div>

  @include('dashboard.user.partials.create-nin-wallet')
  @include('dashboard.user.partials.create-bvn-wallet')
</div>

@endsection
