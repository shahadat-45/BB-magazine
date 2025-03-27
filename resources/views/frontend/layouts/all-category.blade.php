@extends('frontend.master')
@section('content')
<div>
    <div class="max-w-6xl mx-auto px-7 lg:px-0">
        <div class="mt-11">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold uppercase">{{ description(1)->title }}</h2>
            </div>
            <p class="text-gray-700 mb-8">
                {{ description(1)->description }}
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                @foreach ($articleCategories as $category)
                    <div class="bg-white border border-gray-300 overflow-hidden p-3">
                        <a href="{{ route("frontend.category", $category->slug) }}">
                            <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                                class="w-full h-48 object-cover" />
                        </a>
                        <div class="p-3 text-center">
                            <a href="{{ route("frontend.category", $category->slug) }}" title="{{ $category->name }}"
                                class="text-base lg:text-lg font-semibold hover:text-[#D2AB67] transition duration-500 ease-in-out uppercase">
                                {{ $category->name }}
                            </a>
                            <p class="text-sm text-gray-600 mt-3">
                                {{ str()->limit($category->description, 74) }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="my-20">
        @include('frontend.partials.news-letter')
    </div>
</div>
@endsection
