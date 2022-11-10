@extends('layouts.dashboard')

@section('content')
<form class="space-y-8 divide-y divide-gray-200 p-10">
    <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
        <div class="space-y-6 pt-8 sm:space-y-5 sm:pt-10">
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Use a permanent address where you can receive mail.</p>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Use this API Documentation to get verified IDs from a user digital wallet <a href="https://documenter.getpostman.com/view/5782500/2s8YekQuKn" target="_blank" rel="noopener">https://documenter.getpostman.com/view/5782500/2s8YekQuKn</a></p>

            </div>
            <div class="space-y-6 sm:space-y-5">
                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="public_key" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Public Key</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <input type="text" name="public_key" id="public_key" disabled value="{{ $keys->public_key }}" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm">
                    </div>
                </div>

                <div class="sm:grid sm:grid-cols-3 sm:items-start sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="private_key" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Private Key</label>
                    <div class="mt-1 sm:col-span-2 sm:mt-0">
                        <input type="text" name="private_key" id="private_key" disabled value="{{ $keys->private_key }}" class="block w-full max-w-lg rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500 sm:text-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
