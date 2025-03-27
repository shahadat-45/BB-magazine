{{-- <div>
    <div class="max-w-6xl mx-auto px-7 lg:px-0">
        <div class="mt-11">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold uppercase">{{ $categoryNews->name }}</h2>
            </div>
            <p class="text-gray-700 mb-8">
                {{ $categoryNews->description }}
            </p>
        </div>
        <!-- Blog Section -->
        <section class="space-y-9">
            @foreach (@$categoryNews->news as $news)
                <div
                    class="relative flex flex-col md:flex-row space-x-0 md:space-x-6 border-b border-gray-400 bg-white pb-8">
                    <!-- Image -->
                    <a href="{{ route("news-detail", $news->slug) }}" class="w-full md:w-56">
                        <img src="{{ asset(@$news->thumbPhoto?->path) }}" alt="{{ $news->title }}"
                            class="w-full md:h-36 object-cover">
                    </a>

                    <!-- News Content -->
                    <div class="flex flex-1 flex-col justify-between mt-5 md:mt-0">
                        <div class="flex justify-between items-center space-x-5 md:space-x-0">
                            <a href="{{ route("news-detail", $news->slug) }}"
                                class="hover:text-[#D2AB67] transition duration-500 ease-in-out">
                                <h2 class="text-base md:text-2xl font-semibold mt-2 sm:mt-0">{{ $news->title }}</h2>
                            </a>

                            <!-- Share Button and Modal Logic -->
                            <div x-data="{ showModal: false, shareUrl: '' }">
                                <!-- Share Icon -->
                                <button @click="showModal = true; shareUrl = '{{ url("news/" . $news->slug) }}'"
                                    class="mt-1.5 text-gray-500 hover:text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="18" cy="5" r="3"></circle>
                                        <circle cx="6" cy="12" r="3"></circle>
                                        <circle cx="18" cy="19" r="3"></circle>
                                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                        <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                    </svg>
                                </button>

                                <!-- Modal -->
                                <div x-show="showModal"
                                    class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50"
                                    style="display: none">
                                    <div class="bg-white rounded-lg p-6 w-[600px] shadow-lg relative">
                                        <!-- Close Button -->
                                        <button @click="showModal = false"
                                            class="absolute top-3 right-3 text-gray-600 hover:text-gray-900">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <line x1="18" y1="6" x2="6" y2="18">
                                                </line>
                                                <line x1="6" y1="6" x2="18" y2="18">
                                                </line>
                                            </svg>
                                        </button>

                                        <h2 class="text-xl font-semibold mb-6">Share this article</h2>

                                        <!-- Share Options -->
                                        <div class="flex justify-around gap-4">
                                            <div class="flex flex-col items-center">
                                                <!-- Email -->
                                                <a
                                                    href="mailto:?subject=Check this out&body={{ urlencode(request()->fullUrl()) }}">
                                                    <svg class="w-11 h-11 fill-current" viewBox="0 0 512 512"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <span class="text-sm text-gray-600 mt-1">Email</span>
                                            </div>

                                            <div class="flex flex-col items-center">
                                                <!-- Facebook -->
                                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                                    target="_blank" class="text-blue-600">
                                                    <svg class="w-11 h-11 fill-current" viewBox="0 0 512 512"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <span class="text-sm text-gray-600 mt-1">Facebook</span>
                                            </div>

                                            <div class="flex flex-col items-center">
                                                <!-- Twitter/X -->
                                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($news->title) }}"
                                                    target="_blank" class="text-black">
                                                    <svg class="w-11 h-11 fill-current" viewBox="0 0 448 512"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <span class="text-sm text-gray-600 mt-1">Twitter</span>
                                            </div>

                                            <div class="flex flex-col items-center">
                                                <!-- WhatsApp -->
                                                <a href="https://api.whatsapp.com/send?text={{ urlencode($news->title . " " . request()->fullUrl()) }}"
                                                    target="_blank" class="text-green-600">
                                                    <svg class="w-11 h-11 fill-current" viewBox="0 0 448 512"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <span class="text-sm text-gray-600 mt-1">WhatsApp</span>
                                            </div>
                                        </div>

                                        <!-- Copy Link -->
                                        <div class="mt-5 flex items-center border p-1 rounded-lg">
                                            <input type="text" id="shareLink"
                                                class="w-full text-gray-700 focus:ring-0 border-transparent focus:border-transparent focus:outline-none"
                                                :value="shareUrl" readonly>
                                            <button onclick="copyToClipboard()"
                                                class="ml-2 bg-gray-800 text-white px-3 py-1 rounded">
                                                Copy
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ Str::limit($news->short_content, 250) }}
                            @if (strlen($news->short_content) > 250)
                                <a href="{{ route("news-detail", $news->slug) }}"
                                    class="text-gray-900 font-semibold">Read More</a>
                            @endif
                        </p>

                        <div class="mt-2 text-xs md:text-sm text-gray-500">
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                                <span>
                                    <span class="font-semibold text-black">Written by</span>
                                    <span class="text-gray-600 ml-2 underline">{{ @$news->createdBy?->name }}</span>
                                </span>
                                <span>
                                    <span class="font-semibold mr-2 text-black">Date</span>
                                    <span class="text-gray-600">{{ $news->created_at->format("F d, Y") }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Category Badge -->
                    <a href="{{ route("frontend.category", $categoryNews->slug) }}"
                        class="absolute hidden md:block bottom-4 sm:bottom-7 right-4 sm:right-0 rounded-full border border-[#D2AB67] px-3 py-1 text-xs font-semibold text-gray-600 hover:text-[#D2AB67] transition-colors duration-300 uppercase">
                        {{ $categoryNews->name }}
                    </a>
                </div>
            @endforeach

        </section>
        <div class="flex flex-col md:flex-row justify-center items-center gap-y-3 gap-x-32 mt-11">
            <!-- Show Items Indicator -->
            <div class="text-sm text-gray-600 dark:text-white/70">
                Showing {{ $categoryNews->news->count() }} news out of {{ $categoryNews->news->total() }}
                items.
            </div>
            <!-- Pagination -->
            <nav class="flex items-center gap-x-1" aria-label="Pagination">
                <!-- Previous Button -->
                @if ($categoryNews->news->onFirstPage())
                    <button type="button"
                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-full text-gray-800 hover:text-white hover:bg-[#D2AB67] focus:outline-none focus:bg-[#D2AB67] focus:text-white disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Previous" disabled>
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                        <span>Previous</span>
                    </button>
                @else
                    <a href="{{ $categoryNews->news->previousPageUrl() }}"
                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-full text-gray-800 hover:text-white hover:bg-[#D2AB67] focus:outline-none focus:bg-[#D2AB67] focus:text-white"
                        aria-label="Previous">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                        <span>Previous</span>
                    </a>
                @endif

                <!-- Page Numbers -->
                <div class="flex items-center gap-x-1">
                    @foreach ($categoryNews->news->getUrlRange(1, $categoryNews->news->lastPage()) as $page => $url)
                        @if ($page == $categoryNews->news->currentPage())
                            <span
                                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-white bg-[#D2AB67] py-2 px-3 text-sm rounded-full">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}"
                                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:text-white hover:bg-[#D2AB67] py-2 px-3 text-sm rounded-full focus:outline-none focus:bg-[#D2AB67] focus:text-white">{{ $page }}</a>
                        @endif
                    @endforeach
                </div>

                <!-- Next Button -->
                @if ($categoryNews->news->hasMorePages())
                    <a href="{{ $categoryNews->news->nextPageUrl() }}"
                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-full text-gray-800 hover:text-white hover:bg-[#D2AB67] focus:outline-none focus:bg-[#D2AB67] focus:text-white"
                        aria-label="Next">
                        <span>Next</span>
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                @else
                    <button type="button"
                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                        aria-label="Next" disabled>
                        <span>Next</span>
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </button>
                @endif
            </nav>
        </div>
    </div>
    <div class="my-20">
        @livewire("frontend.subscriber.subscriber")
    </div>
</div>
<script>
    function copyToClipboard() {
        let copyText = document.getElementById("shareLink");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
    }
</script>
<script>
    function setMetaTags(title, image, url, description) {
    document.getElementById('og-title').setAttribute('content', title);
    document.getElementById('og-image').setAttribute('content', image);
    document.getElementById('og-url').setAttribute('content', url);
    document.getElementById('og-description').setAttribute('content', description);
}
</script> --}}

@extends('frontend.master')
@section('content')
<div x-data="{
    showModal: false,
    shareUrl: '',
    shareTitle: '',
    shareDescription: '',
    shareImage: '',
    openModal(url, title, description, image) {
        this.shareUrl = url;
        this.shareTitle = title;
        this.shareDescription = description;
        this.shareImage = image;
        updateMetaTags(url, title, description, image); // update OG tags
        this.showModal = true;
    }
    }">
    <div class="max-w-6xl mx-auto px-7 lg:px-0">
        <div class="mt-11">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold uppercase">{{ $category->name }}</h2>
            </div>
            <p class="text-gray-700 mb-8">
               
            </p>
        </div>
        <section class="space-y-9">
            @foreach ($categoryNews as $news)
                <div
                    class="relative flex flex-col md:flex-row space-x-0 md:space-x-6 border-b border-gray-400 bg-white pb-8">
                    <!-- Image -->
                    <a href="{{ route("news.view", $news->slug) }}" class="w-full md:w-56">
                        <img src="{{ asset($news->thumnail_image) }}" alt="{{ $news->title }}"
                            class="w-full md:h-36 object-cover">
                    </a>

                    <!-- News Content -->
                    <div class="flex flex-1 flex-col justify-between mt-5 md:mt-0">
                        <div class="flex justify-between items-center space-x-5 md:space-x-0">
                            <a href="{{ route("news.view", $news->slug) }}"
                                class="hover:text-[#D2AB67] transition duration-500 ease-in-out">
                                <h2 class="text-base md:text-2xl font-semibold mt-2 sm:mt-0">{{ $news->title }}</h2>
                            </a>

                            <!-- Share Button and Modal Logic -->
                            <button
                                @click='openModal(
                            @json(url("news/" . $news->slug)),
                            @json($news->title),
                            @json($news->short_content),
                            @json(asset($news->thumnail_image))
                        )'
                                class="mt-1.5 text-gray-500 hover:text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="18" cy="5" r="3"></circle>
                                    <circle cx="6" cy="12" r="3"></circle>
                                    <circle cx="18" cy="19" r="3"></circle>
                                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                </svg>
                            </button>
                        </div>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ Str::limit($news->short_description, 250) }}
                            @if (strlen($news->short_description) > 250)
                                <a href="{{ route("news.view", $news->slug) }}"
                                    class="text-gray-900 font-semibold">Read More</a>
                            @endif
                        </p>

                        <div class="mt-2 text-xs md:text-sm text-gray-500">
                            <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
                                <span>
                                    <span class="font-semibold text-black">Written by</span>
                                    <span class="text-gray-600 ml-2 underline">{{ $news->author }}</span>
                                </span>
                                <span>
                                    <span class="font-semibold mr-2 text-black">Date</span>
                                    <span class="text-gray-600">{{ $news->date }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Category Badge -->
                    <a href="{{ route("frontend.category", $category->slug) }}"
                        class="absolute hidden md:block bottom-4 sm:bottom-7 right-4 sm:right-0 rounded-full border border-[#D2AB67] px-3 py-1 text-xs font-semibold text-gray-600 hover:text-[#D2AB67] transition-colors duration-300 uppercase">
                        {{ $category->name }}
                    </a>
                </div>
            @endforeach

        </section>




        <!-- Single Modal Outside the Loop -->
        {{-- <div x-show="showModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50"
            x-transition.opacity style="display: none;">
            <div class="bg-white rounded-lg p-6 w-[600px] shadow-lg relative">
                <!-- Close Button -->
                <button @click="showModal = false" class="absolute top-3 right-3 text-gray-600 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>

                <h2 class="text-xl font-semibold mb-6">Share this article</h2>

                <!-- Share Options -->
                <div class="flex justify-around gap-4">
                    <div class="flex flex-col items-center">
                        <!-- Email -->
                        <a :href="'mailto:?subject=Check this out&body=' + encodeURIComponent(shareUrl)">
                        <svg class="w-11 h-11 fill-current" viewBox="0 0 512 512"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"></path>
                        </svg>
                    </a>
                    <span class="text-sm text-gray-600 mt-1">Email</span>
                </div>

                <div class="flex flex-col items-center">
                    <!-- Facebook -->
                    <a :href="'https://www.facebook.com/sharer/sharer.php?u=' +
                        encodeURIComponent(shareUrl)"
                            target="_blank" class="text-blue-600">
                            <svg class="w-11 h-11 fill-current" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z">
                                </path>
                            </svg>
                        </a>
                        <span class="text-sm text-gray-600 mt-1">Facebook</span>
                    </div>

                    <div class="flex flex-col items-center">
                        <!-- Twitter -->
                        <a :href="'https://twitter.com/intent/tweet?url=' + encodeURIComponent(shareUrl) +
                            '&text=' + encodeURIComponent(shareTitle)"
                       target="_blank" class="text-black">
                        <svg class="w-11 h-11 fill-current" viewBox="0 0 448 512"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z"></path>
                        </svg>
                    </a>
                    <span class="text-sm text-gray-600 mt-1">Twitter</span>
                </div>

                <div class="flex flex-col items-center">
                    <!-- WhatsApp -->
                    <a :href="'https:
                            //api.whatsapp.com/send?text=' + encodeURIComponent(shareTitle + ' ' + shareUrl)"
                            target="_blank" class="text-green-600">
                            <svg class="w-11 h-11 fill-current" viewBox="0 0 448 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M224 122.8c-72.7 0-131.8 59.1-131.9 131.8 0 24.9 7 49.2 20.2 70.1l3.1 5-13.3 48.6 49.9-13.1 4.8 2.9c20.2 12 43.4 18.4 67.1 18.4h.1c72.6 0 133.3-59.1 133.3-131.8 0-35.2-15.2-68.3-40.1-93.2-25-25-58-38.7-93.2-38.7zm77.5 188.4c-3.3 9.3-19.1 17.7-26.7 18.8-12.6 1.9-22.4.9-47.5-9.9-39.7-17.2-65.7-57.2-67.7-59.8-2-2.6-16.2-21.5-16.2-41s10.2-29.1 13.9-33.1c3.6-4 7.9-5 10.6-5 2.6 0 5.3 0 7.6.1 2.4.1 5.7-.9 8.9 6.8 3.3 7.9 11.2 27.4 12.2 29.4s1.7 4.3.3 6.9c-7.6 15.2-15.7 14.6-11.6 21.6 15.3 26.3 30.6 35.4 53.9 47.1 4 2 6.3 1.7 8.6-1 2.3-2.6 9.9-11.6 12.5-15.5 2.6-4 5.3-3.3 8.9-2 3.6 1.3 23.1 10.9 27.1 12.9s6.6 3 7.6 4.6c.9 1.9.9 9.9-2.4 19.1zM400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM223.9 413.2c-26.6 0-52.7-6.7-75.8-19.3L64 416l22.5-82.2c-13.9-24-21.2-51.3-21.2-79.3C65.4 167.1 136.5 96 223.9 96c42.4 0 82.2 16.5 112.2 46.5 29.9 30 47.9 69.8 47.9 112.2 0 87.4-72.7 158.5-160.1 158.5z">
                                </path>
                            </svg>
                        </a>
                        <span class="text-sm text-gray-600 mt-1">WhatsApp</span>
                    </div>
                </div>

                <!-- Copy Link -->
                <div class="mt-5 flex items-center border p-1 rounded-lg">
                    <input type="text" x-model="shareUrl"
                        class="w-full text-gray-700 focus:ring-0 border-transparent focus:border-transparent focus:outline-none"
                        readonly x-ref="shareInput">
                    <button
                        @click="
                    $refs.shareInput.select();
                    document.execCommand('copy');"
                        class="ml-2 bg-gray-800 text-white px-3 py-1 rounded">
                        Copy
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center gap-y-3 gap-x-32 mt-11">
            <!-- Show Items Indicator -->
            <div class="text-sm text-gray-600 dark:text-white/70">
                Showing {{ $categoryNews->news->count() }} news out of {{ $categoryNews->news->total() }}
                items.
            </div>
            <!-- Pagination -->
            <nav class="flex items-center gap-x-1" aria-label="Pagination">
                <!-- Previous Button -->
                @if ($categoryNews->news->onFirstPage())
                    <button type="button"
                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-full text-gray-800 hover:text-white hover:bg-[#D2AB67] focus:outline-none focus:bg-[#D2AB67] focus:text-white disabled:opacity-50 disabled:pointer-events-none"
                        aria-label="Previous" disabled>
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                        <span>Previous</span>
                    </button>
                @else
                    <a href="{{ $categoryNews->news->previousPageUrl() }}"
                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-full text-gray-800 hover:text-white hover:bg-[#D2AB67] focus:outline-none focus:bg-[#D2AB67] focus:text-white"
                        aria-label="Previous">
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m15 18-6-6 6-6"></path>
                        </svg>
                        <span>Previous</span>
                    </a>
                @endif

                <!-- Page Numbers -->
                <div class="flex items-center gap-x-1">
                    @foreach ($categoryNews->news->getUrlRange(1, $categoryNews->news->lastPage()) as $page => $url)
                        @if ($page == $categoryNews->news->currentPage())
                            <span
                                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-white bg-[#D2AB67] py-2 px-3 text-sm rounded-full">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}"
                                class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:text-white hover:bg-[#D2AB67] py-2 px-3 text-sm rounded-full focus:outline-none focus:bg-[#D2AB67] focus:text-white">{{ $page }}</a>
                        @endif
                    @endforeach
                </div>

                <!-- Next Button -->
                @if ($categoryNews->news->hasMorePages())
                    <a href="{{ $categoryNews->news->nextPageUrl() }}"
                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-full text-gray-800 hover:text-white hover:bg-[#D2AB67] focus:outline-none focus:bg-[#D2AB67] focus:text-white"
                        aria-label="Next">
                        <span>Next</span>
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </a>
                @else
                    <button type="button"
                        class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
                        aria-label="Next" disabled>
                        <span>Next</span>
                        <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="m9 18 6-6-6-6"></path>
                        </svg>
                    </button>
                @endif
            </nav>
        </div> --}}
    </div>
    <div class="my-20">
        @include('frontend.partials.news-letter')
    </div>    
</div>
@endsection
