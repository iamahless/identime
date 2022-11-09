<div class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" x-description="Slide-over panel, show/hide based on slide-over state." x-show="openBvnWallet" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" x-show="openBvnWallet" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">
                <div class="pointer-events-auto w-screen max-w-md" x-show="openBvnWallet" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full">
                    <form class="flex h-full flex-col divide-y divide-gray-200 bg-white shadow-xl">
                        @csrf
                        <div class="h-0 flex-1 overflow-y-auto">
                            <div class="bg-indigo-700 py-6 px-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                    <h2 class="text-lg font-medium text-white" id="slide-over-title">Bank Verification Number Information</h2>
                                    <div class="ml-3 flex h-7 items-center">
                                        <button type="button" class="rounded-md bg-indigo-700 text-indigo-200 hover:text-white focus:outline-none focus:ring-2 focus:ring-white" @click="openBvnWallet = false;">
                                            <span class="sr-only">Close panel</span>
                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="mt-1">
                                    <p class="text-sm text-indigo-300">Kindly fill in the required information as it is.</p>
                                    <p class="text-sm text-indigo-100 font-extrabold pt-2">Due to the fact we are using sandbox mode the form prefilled</p>
                                </div>
                            </div>
                            <div class="flex flex-1 flex-col justify-between">
                                <div class="divide-y divide-gray-200 px-4 sm:px-6">
                                    <div class="space-y-8 pt-6 pb-5">
                                        <div>
                                            <label for="first_name" class="block text-sm font-medium text-gray-900">First name</label>
                                            <div class="mt-1">
                                                <input type="text" name="first_name" id="first_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly value="JOHN">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="last_name" class="block text-sm font-medium text-gray-900">Last name</label>
                                            <div class="mt-1">
                                                <input type="text" name="last_name" id="last_name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly value="DOE">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="bvn" class="block text-sm font-medium text-gray-900">BVN</label>
                                            <div class="mt-1">
                                                <input type="text" name="bvn" id="bvn" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly value="22222222223">
                                            </div>
                                        </div>
                                        <div>
                                            <label for="date_of_birth" class="block text-sm font-medium text-gray-900">Date of Birth</label>
                                            <div class="mt-1">
                                                <input type="text" name="date_of_birth" id="date_of_birth" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" readonly value="1988-05-11">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 justify-end px-4 py-4">
                            <button type="button" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" @click="openBvnWallet = false;">Cancel</button>
                            <button type="submit" class="ml-4 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>