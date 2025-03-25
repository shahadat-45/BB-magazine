@extends('frontend.master')
@section('content')
    <div>    
        <!-- Main Section -->
        <div class="max-w-6xl mx-auto my-24">
            <div class="text-center">
                <!-- Logo Section -->
                <div class="mb-6">
                    <img src="{{ asset(settings()->logo) }}" alt="logo" class="mx-auto h-20">
                </div>
                <!-- Main Message -->
                <h2 class="text-6xl font-bold text-gray-900">We Are Creating</h2>
                <h2 class="text-6xl font-bold text-gray-900">Something Amazing</h2>
                <p class="text-gray-700 mt-4 text-2xl">We Will Launch This Page Soon!</p>

                <!-- Button -->
                <div class="mt-6">
                    <a href="{{ route("home") }}"
                        class="px-28 py-2 bg-[#D2AB67] text-white text-sm font-medium shadow-md hover:bg-yellow-600 transition-colors duration-500">
                        EXPLORE HOME
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
