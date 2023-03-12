<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg flex justify-center">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center ">
                    <img class="object-top" src="{{asset('images/nothing-here.png')}}" alt="">
                    <p class="bg-gradient-to-r from-orange-500 via-red-500 to-red-600 bg-clip-text lg:text-2xl text-transparent">
                        <b>There's nothing here</b></p>
                    <p class="text-gray-400">You cannot work without having created an asset.</p><br/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
