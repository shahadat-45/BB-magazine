@extends('frontend.master')

@push('meta')
    <meta property="og:title" content="{{ $news->title }}" />
    <meta property="og:url" content="{{ Request::fullUrl() }}" />
    <meta property="og:image" content="{{ URL::to(asset($news->thumnail_image)) }}" />
    <meta property="og:description" content="{{ $news->short_content }}" />
    <meta property="og:site_name" content="BB Magazine" />
@endpush

@section('content')
 <div>
    <!-- News Section -->
    <div class="max-w-6xl mx-auto mt-11 px-7 lg:px-0">
        <!-- Title -->
        <div class="flex items-center">
            <!-- Vertical border -->
            <div class="w-[2px] h-16 bg-gray-400 mr-3"></div>
            <!-- Title text -->
            <h2 class="text-xl md:text-3xl lg:text-4xl italic font-medium uppercase text-gray-800">
                {{ $news->title }}
            </h2>
        </div>
        <!-- Image -->
        <div class="mt-4">
            <img src="{{ asset($news->thumnail_image) }}" alt="{{ $news->title }}"
                class="w-[1152px] h-[560px] object-cover flex-shrink-0" />
        </div>

        <!-- Intro Text -->
        <p class="text-gray-600 mt-9">
            {{ $news->short_content }}
        </p>

        <!-- Author & Date -->
        <div class="mt-4 text-gray-500">
            <p class="font-bold text-gray-900">
                Written by
                <span class="ml-1 underline font-medium text-gray-500">{{ $news->author }}</span>
            </p>
        </div>
        <!-- Icon -->
        <div class="mt-2 mb-7 flex items-center justify-between">
            <p class="font-bold text-gray-900">
                Date
                <span class="ml-1 font-medium text-gray-500">{{ $news->date }}</span>
            </p>
            <!-- Icons -->
            <div class="flex items-center space-x-4">
                <!-- Share Icon -->
                <div>
                    <!-- Share Icon -->
                    {{-- <div class="sharethis-inline-share-buttons"></div> --}}

                    <button id="openModal" class="mt-1.5 text-gray-500 hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="5" r="3"></circle>
                            <circle cx="6" cy="12" r="3"></circle>
                            <circle cx="18" cy="19" r="3"></circle>
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                        </svg>
                    </button>
                
                    <!-- Modal -->
                    <div id="shareModal" class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50 hidden">
                        <div class="bg-white rounded-lg p-6 w-[600px] shadow-lg relative">
                            <!-- Close Button -->
                            <button id="closeModal" class="absolute top-3 right-3 text-gray-600 hover:text-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                
                            <h2 class="text-xl font-semibold mb-6">Share this article</h2>
                
                            <!-- Share Options -->
                            <div class="flex justify-around gap-4">
                                <div class="flex flex-col items-center">
                                    <!-- Email -->
                                    <a href="mailto:?subject=Check this out&body={{ urlencode(request()->fullUrl()) }}">
                                        <svg class="w-11 h-11 fill-current" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2z"></path>
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

                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
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
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm297.1 84L257.3 234.6 379.4 396H283.8L209 298.1 123.3 396H75.8l111-126.9L69.7 116h98l67.7 89.5L313.6 116h47.5zM323.3 367.6L153.4 142.9H125.1L296.9 367.6h26.3z">
                                            </path>
                                        </svg>
                                    </a>
                                    <span class="text-sm text-gray-600 mt-1">Twitter</span>
                                </div>

                                <div class="flex flex-col items-center">
                                    <!-- LinkedIn  -->
                                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ rawurlencode(request()->fullUrl()) }}"
                                        target="_blank" class="text-sky-600">
                                        <svg class="w-11 h-11 fill-current" viewBox="0 0 448 512"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">
                                            </path>
                                        </svg>
                                    </a>
                                    <span class="text-sm text-gray-600 mt-1">LinkedIn</span>
                                </div>

                                <div class="flex flex-col items-center">
                                    <!-- WhatsApp -->
                                    <a href="https://web.whatsapp.com/send?text={{ urlencode($news->title . " " . request()->fullUrl()) }}"
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
                                
                            {{-- </div> --}}
                
                            <!-- Copy Link -->
                            <div class="mt-5 flex items-center border p-1 rounded-lg">
                                <input type="text" id="shareLink" class="w-full text-gray-700 focus:ring-0 border-transparent focus:border-transparent focus:outline-none" value="{{ request()->fullUrl() }}" readonly>
                                <button id="copyButton" class="ml-2 bg-gray-800 text-white px-3 py-1 rounded">Copy</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Volume Icon -->
                <button id="volume-button" class="text-gray-500 hover:text-gray-700">
                    <!-- Play (Volume) Icon -->
                    <svg id="play-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                        <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                        <path d="M19.07 4.93a10 10 0 0 1 0 14.14"></path>
                    </svg>
                
                    <!-- Pause Icon (Initially Hidden) -->
                    <svg id="pause-icon" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="6" y="4" width="4" height="16"></rect>
                        <rect x="14" y="4" width="4" height="16"></rect>
                    </svg>
                </button>
                
            </div>
        </div>

        <!-- Main Content -->
        <div id="article-content" class="mb-11 text-gray-700 border-t border-gray-400 pt-11 space-y-4">
            {!! $news->content !!}
        </div>
        <!-- Related Articles-->
        <div class="mb-12 border-t border-gray-400 pt-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold uppercase">Related Articles</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
                @foreach ($relatedNews as $news)
                    <div class="relative overflow-hidden bg-white shadow group">
                        <a href="{{ route("news-detail", $news->slug) }}">
                            <img src="{{ asset($news->thumnail_image) }}" alt="{{ $news->title }}"
                                class="w-full h-48 object-cover transition duration-1000 ease-in-out group-hover:scale-125" />
                            <div class="bg-opacity-30 absolute inset-0 flex items-end bg-black p-4">
                                <h1
                                    class="text-base font-semibold text-white hover:text-[#D2AB67] transition duration-500 ease-in-out">
                                    {{ $news->title }}
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
{{-- <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=67e5540ba47a1e001adc64e9&product=inline-share-buttons&source=platform" async="async"></script> --}}
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
<script>
    function copyToClipboard() {
        let copyText = document.getElementById("shareLink");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");
        // alert("Copied: " + copyText.value);
    }
</script>

<script>
// Stop any ongoing speech synthesis when the page reloads or before starting new speech
window.addEventListener('beforeunload', function() {
    window.speechSynthesis.cancel();
});


// Get elements
const volumeButton = document.getElementById('volume-button');
const playIcon = document.getElementById('play-icon');
const pauseIcon = document.getElementById('pause-icon');

let utterance = null;

volumeButton.addEventListener('click', function () {
    if (window.speechSynthesis.speaking && !window.speechSynthesis.paused) {        
        window.speechSynthesis.pause();
        toggleIcons(false);
    } else if (window.speechSynthesis.paused) {        
        window.speechSynthesis.resume();
        toggleIcons(true);
    } else {        
        window.speechSynthesis.cancel(); 
        const articleText = document.getElementById('article-content').innerText;    
        if (articleText) {
            utterance = new SpeechSynthesisUtterance(articleText);
            utterance.onend = function () {
                toggleIcons(false); 
            };
            window.speechSynthesis.speak(utterance);
            toggleIcons(true);
        } else {
            alert('No content available to read.');
        }
    }
});

function toggleIcons(isPlaying) {
    if (isPlaying) {
        playIcon.classList.add('hidden');  
        pauseIcon.classList.remove('hidden');  
    } else {
        playIcon.classList.remove('hidden');  
        pauseIcon.classList.add('hidden');  
    }
}

</script>    
@endpush