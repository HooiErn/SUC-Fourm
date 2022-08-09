<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-5" style="display:flex; justify-content:space-around;">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg" >
            <a href="{{ route('home') }}">
            <h1 style="font-size:25px;!importance">01. Post</h1>
            </a>
            </div>
        </div>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <a href="#">
            <h1 style="font-size:25px;!importance">02. Feedback</h1>
            </a>
            </div>
        </div>

    </div>
   
</x-app-layout>
