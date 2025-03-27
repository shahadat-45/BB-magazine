<section class="py-20">
    <div class="max-w-6xl mx-auto flex flex-col lg:flex-row space-y-9 lg:space-y-0 lg:space-x-9 px-7 lg:px-0">
        <!-- Left Section -->
        <div class="w-full lg:w-3/4 space-y-4">
            <!-- Row 1: First image 3 col-span, second image 2 col-span -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-3">
                @foreach ($latestNews->take(2) as $news)
                    <div
                        class="relative {{ $loop->index == 0 ? "col-span-3" : "col-span-2" }} overflow-hidden bg-white shadow group">
                        <a href="{{ route("news.view", $news->slug) }}">
                            <img src="{{ asset($news->thumnail_image) }}" alt="{{ $news->title }}"
                                class="h-[300px] w-full object-cover transition duration-1000 ease-in-out group-hover:scale-125" />
                            <div class="bg-opacity-30 absolute inset-0 flex items-end bg-black p-4">
                                <h2
                                    class="text-base md:text-lg font-semibold text-white hover:text-[#D2AB67] transition duration-500 ease-in-out">
                                    {{ $news->title }}
                                </h2>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Row 2: First image 2 col-span, second image 3 col-span -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-3">
                @foreach ($latestNews->slice(2, 2) as $news)
                    <div
                        class="relative {{ $loop->index == 0 ? "col-span-2" : "col-span-3" }} overflow-hidden bg-white shadow group">
                        <a href="{{ route("news.view", $news->slug) }}">
                            <img src="{{ asset($news->thumnail_image) }}" alt="{{ $news->title }}"
                                class="h-[300px] w-full object-cover transition duration-1000 ease-in-out group-hover:scale-125" />
                            <div class="bg-opacity-30 absolute inset-0 flex items-end bg-black p-4">
                                <h2
                                    class="text-base md:text-lg font-semibold text-white hover:text-[#D2AB67] transition duration-500 ease-in-out">
                                    {{ $news->title }}
                                </h2>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Row 3: First image 3 col-span, second image 2 col-span -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-3">
                @foreach ($latestNews->slice(4, 2) as $news)
                    <div
                        class="relative {{ $loop->index == 0 ? "col-span-3" : "col-span-2" }} overflow-hidden bg-white shadow group">
                        <a href="{{ route("news.view", $news->slug) }}">
                            <img src="{{ asset($news->thumnail_image) }}" alt="{{ $news->title }}"
                                class="h-[300px] w-full object-cover transition duration-1000 ease-in-out group-hover:scale-125" />
                            <div class="bg-opacity-30 absolute inset-0 flex items-end bg-black p-4">
                                <h2
                                    class="text-base md:text-lg font-semibold text-white hover:text-[#D2AB67] transition duration-500 ease-in-out">
                                    {{ $news->title }}
                                </h2>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- All Articles Link -->
            <div class="pt-5 flex items-center text-sm text-gray-600 font-medium cursor-pointer uppercase">
                <a href="{{ route("all-categories") }}" class="flex items-center">{{--  --}}
                    <span>All Articles</span>
                    <svg class="w-4 h-4 ml-2 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>

        <!-- Right Section -->
        <div class="w-full lg:w-1/4">
            <div class="mb-5 hidden lg:flex items-center justify-between">
                <button
                    class="magazine-next border border-gray-300 flex h-10 w-10 items-center justify-center rounded-full bg-white transition duration-500 ease-in-out focus:outline-none">
                    <svg class="h-4 w-4 text-gray-900" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="19" y1="12" x2="5" y2="12" />
                        <polyline points="12 19 5 12 12 5" />
                    </svg>
                </button>

                <h1 class="magazine-date text-2xl font-bold text-gray-800 text-center flex-grow">
                    {{ $dates[0] }}
                </h1>

                <button
                    class="magazine-prev border border-gray-300 flex h-10 w-10 items-center justify-center rounded-full bg-white transition duration-500 ease-in-out focus:outline-none">
                    <svg class="h-4 w-4 text-gray-900" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12" />
                        <polyline points="12 5 19 12 12 19" />
                    </svg>
                </button>
            </div>

            <!-- Swiper Carousel -->
            <div class="new-magazine overflow-hidden hidden lg:block">
                <div class="swiper-wrapper">
                    @foreach ($magazines as $magazine)
                        <div class="swiper-slide">
                            <div class="bg-white border shadow-lg overflow-hidden group">
                                <img src="{{ asset($magazine->thumnail_image) }}"
                                    class="w-full h-[400px] object-cover transition duration-700 ease-in-out group-hover:scale-110"
                                    alt="Magazine" />
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- Popular Posts -->
            <div class="mt-8">
                <h3 class="text-lg font-semibold text-[#373737]">Popular Posts</h3>
                <ul class="mt-6 space-y-4">
                    @foreach ($popularNews as $index => $news)
                        <li class="flex space-x-6 pb-5 {{ !$loop->last ? "border-b border-gray-400" : "" }}">
                            <span class="font-semibold text-[#D2AB67] text-lg">
                                {{ str_pad($index + 1, 2, "0", STR_PAD_LEFT) }}
                            </span>
                            <div class="flex flex-col space-y-3">
                                <a href="{{ route("news.view", $news->slug) }}"
                                    class="hover:text-[#D2AB67] transition duration-500 ease-in-out">
                                    <p class="font-semibold">
                                        {{ $news->title }}
                                    </p>
                                </a>
                                <div class="flex items-center space-x-2 text-sm">
                                    <span class="font-semibold text-[#373737]">Written by</span>
                                    <span class="underline font-normal text-gray-500">
                                        {{ $news->author }}
                                    </span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

        <!-- Magazine Script -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const dates = @json($dates);
                const dateElement = document.querySelector(".magazine-date");

                const swiper = new Swiper(".new-magazine", {
                    speed: 500,
                    slidesPerView: 1,
                    spaceBetween: 11,
                    loop: true,
                    navigation: {
                        nextEl: ".magazine-next",
                        prevEl: ".magazine-prev",
                    },
                    on: {
                        slideChange: function() {
                            const activeIndex = this.realIndex;
                            dateElement.textContent = dates[activeIndex] ?? 'No Data';
                        },
                    },
                });

                dateElement.textContent = dates[swiper.realIndex] ?? 'No Data';
            });
        </script>