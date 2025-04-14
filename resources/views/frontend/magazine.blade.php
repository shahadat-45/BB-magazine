@extends('frontend.master')
@push('meta')
    <meta property="og:title" content="{{ $magazine->title }}" />
    <meta property="og:url" content="{{ Request::fullUrl() }}" />
    <meta property="og:image" content="{{ URL::to(asset($magazine->thumnail_image)) }}" />
    <meta property="og:description" content="{{ $magazine->short_description }}" />
    <meta property="og:site_name" content="BB Magazine" />
@endpush
@push('css')
    <style>
        .bg-opacity-30 {
            --tw-bg-opacity: .3;
        }
        .bg-black {
            background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1));
        }
    </style>
@endpush
@section('content')
<div>
    <!-- Magazine Section -->
    <div class="max-w-6xl mx-auto mt-11 px-7 lg:px-0">
        <!-- Title -->
        <div class="flex items-center">
            <!-- Vertical border -->
            <div class="w-[2px] h-16 bg-gray-400 mr-3"></div>
            <!-- Title text -->
            <h2 class="text-xl md:text-3xl lg:text-4xl italic font-medium uppercase text-gray-800">
                {{ $magazine->title }}
            </h2>
        </div>
        <!-- Image -->
        <div class="mt-4">
            <img src="{{ asset($magazine->thumnail_image) }}" alt="{{ $magazine->title }}"
                class="w-[1152px] h-[560px] object-cover flex-shrink-0" />
        </div>

        <!-- Intro Text -->
        <p class="text-gray-600 mt-9">
            {{ $magazine->short_description }}
        </p>

        <!-- Author & Date -->
        <div class="mt-4 text-gray-500">
            <p class="font-bold text-gray-900">
                Written by
                <span class="ml-1 underline font-medium text-gray-500">{{ $magazine->author }}</span>
            </p>
        </div>
        <!-- Icon -->
        <div class="mt-2 mb-7 flex items-center justify-between">
            <div>
                <p class="font-bold text-gray-900">
                    Date
                    <span class="ml-1 font-medium text-gray-500">{{ $magazine->date }}</span>
                </p>
                <p class="font-bold text-gray-900 mt-2">
                    Location
                    <span class="ml-1 font-medium text-gray-500">
                        {{ implode(', ', array_filter([$magazine->division->division_name ?? null, $magazine->district->district_name ?? null, $magazine->state->state_name ?? null])) }}
                    </span>                
                </p>
            </div>
        </div>

        <!-- Main Content -->
        <div id="article-content" class="mb-11 text-gray-700 border-t border-gray-400 pt-11 space-y-4">
            {!! $magazine->content !!}
        </div>
        <!-- Magazine Images -->
        <div class="mt-8">
            @foreach ($magazine->images as $image)
                <div class="relative overflow-hidden bg-white shadow group">
                    <img src="{{ asset($image->path) }}" alt="Magazine Image"
                        class="w-full mb-1 object-cover transition duration-500 ease-in-out group-hover:scale-105" />
                </div>
            @endforeach
        </div>
        <!-- Related Magazines -->
        <div class="mb-12 border-t border-gray-400 pt-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold uppercase">Related Magazines</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                @foreach ($relatedNews as $related)
                    <div class="relative overflow-hidden bg-white shadow group">
                        <a href="{{ route("magazine.view", $related->slug) }}">
                            <img src="{{ asset($related->thumnail_image) }}" alt="{{ $related->title }}"
                                class="w-full h-48 object-cover transition duration-1000 ease-in-out group-hover:scale-125" />
                            <div class="bg-opacity-30 absolute inset-0 flex items-end bg-black p-4">
                                <h1
                                    class="text-base font-semibold text-white hover:text-[#D2AB67] transition duration-500 ease-in-out">
                                    {{ $related->title }}
                                </h1>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>   
@endsection
@push('script')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const modal = document.getElementById("shareModal");
        const openModalBtn = document.getElementById("openModal");
        const closeModalBtn = document.getElementById("closeModal");
        const copyButton = document.getElementById("copyButton");
        const shareLink = document.getElementById("shareLink");

        openModalBtn.addEventListener("click", function() {
            modal.classList.remove("hidden");
        });

        closeModalBtn.addEventListener("click", function() {
            modal.classList.add("hidden");
        });

        copyButton.addEventListener("click", function() {
            shareLink.select();
            document.execCommand("copy");
            alert("Link copied to clipboard!");
        });
    });
</script>
@endpush