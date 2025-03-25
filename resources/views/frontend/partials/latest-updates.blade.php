<div>
    <div class="max-w-6xl mx-auto mt-20 px-7 lg:px-0">
        <div class="relative flex items-center bg-[#373737] px-4 py-2.5">
            <!-- Marquee Container -->
            <div class="w-full text-white overflow-hidden relative">
                <div id="newsTicker" class="news-ticker">
                    <div class="flex space-x-8 px-8 text-base text-[#D2AB67] font-semibold">
                        {{-- <span>🔥 Breaking: Stock Market Hits New High!</span>
                <span>🚀 Tech News: AI Breakthrough Announced!</span>
                <span>⚽ Sports: Big Match Tonight at 7 PM!</span>
                <span>🎬 Entertainment: New Movie Release This Weekend!</span>
                <span>🌍 World: Last UN Announces Climate Change Policies!</span> --}}
                        @foreach ($latestUpdates as $latest)
                            <a href="{{ route("news-detail", $latest->slug) }}"
                                class="text-[#D2AB67] text-sm font-medium uppercase">
                                {{ $latest->title }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="absolute left-0 top-0 bg-[#D2AB67] text-white text-xs font-bold px-3 py-3 uppercase z-10">
                Latest Update
            </div>
        </div>
    </div>
</div>
<style>
    .news-ticker {
        display: flex;
        white-space: nowrap;
        overflow: hidden;
        width: 100%;
    }
</style>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let ticker = document.querySelector("#newsTicker");
        let tickerWidth = ticker.scrollWidth;
        let clone = ticker.innerHTML;
        ticker.innerHTML += clone;

        let speed = 20;

        function scrollNews() {
            if (ticker.scrollLeft >= tickerWidth) {
                ticker.scrollLeft = 0;
            } else {
                ticker.scrollLeft += 1;
            }
        }

        let interval = setInterval(scrollNews, speed);
        ticker.addEventListener("mouseenter", () => clearInterval(interval));
        ticker.addEventListener("mouseleave", () => (interval = setInterval(scrollNews, speed)));
    });
</script>
