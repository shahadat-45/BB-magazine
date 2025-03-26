<!-- Hero Section -->
<div class="flex items-center">
    <div class="w-full max-w-6xl mx-auto mt-11 flex flex-col items-start px-[30px]">
        <!-- Hero Title -->
        <div class="flex items-center">
            <div class="w-[2px] h-16 bg-gray-400 mr-3"></div>
            <h2 class="text-xl md:text-2xl lg:text-5xl italic font-[Philosopher] font-medium uppercase text-gray-800">
                EXPERIENCE THE EXCELLENCE
            </h2>
        </div>

        <!-- Slider Container -->
        <div class="container relative mb-14 mx-auto">
            <div class="ribbon relative -bottom-[420px] flex flex-col items-center justify-start">
                <div
                    class="absolute px-[50px] triangle -z-20 -left-[3%] top-[52px] md:-left-[4%] md:top-[55px] rotate-[43deg] md:rotate-[20.15deg]">
                </div>
                <div
                    class="absolute uppercase w-[110%] md:w-[110%] max-w-[1200px] text-lg md:text-3xl z-10 px-8 py-5 md:px-16 md:py-8 font-semibold text-[#373737] bg-[#dbb574] md:text-left">
                    @foreach ($heroSliders as $index => $slider)
                        <span class="ribbon-text {{ $index == 0 ? "" : "hidden" }}">
                            <a href="{{ route("news.view", $slider->slug) }}">{{--  --}}
                                <span class="hidden md:inline">{{ Str::limit($slider->title, 100) }}</span>
                                <span class="md:hidden">{{ Str::limit($slider->title, 20) }}</span>
                            </a>
                        </span>
                    @endforeach
                </div>
            </div>

            <div class="slider relative h-[700px]">
                <div class="list">
                    @foreach ($heroSliders as $slider)
                        <div class="item" data-content="{{ Str::limit($slider->short_description, 250) }}">
                            <a href="{{ route("news.view", $slider->slug) }}">{{--  --}}
                                <img src="{{ asset($slider->thumnail_image) }}" alt="{{ $slider->title }}">
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="buttons flex justify-between items-center">
                    <button class="flex items-center justify-end p-5 bold -left-[25px]" id="prev">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10L10 18L11.4 16.6L5.8 11H18V9H5.8L11.4 3.4L10 2L2 10Z" fill="white" />
                        </svg>
                    </button>
                    <button class="flex items-center justify-start p-5 bold left-[25px]" id="next">
                        <svg class="scale-x-[-1]" width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10L10 18L11.4 16.6L5.8 11H18V9H5.8L11.4 3.4L10 2L2 10Z" fill="white" />
                        </svg>
                    </button>
                </div>
            </div>
            <ul class="dots flex">
                @foreach ($heroSliders as $index => $slider)
                    <li class="{{ $index == 0 ? "active" : "" }}"></li>
                @endforeach
            </ul>
        </div>

        <!-- Paragraph Below Carousel -->
        <div id="shortContent" class="text-[#373737] text-[14.5px] mt-11">
            {{ Str::limit($heroSliders[0]->short_description, 250) }}
        </div>
    </div>
</div>
<style>
    @keyframes fadeIn {
        0% {
            opacity: 0.2;
        }

        100% {
            opacity: 1;
        }
    }

    .triangle {
        width: 130px;
        height: 70px;
        background-color: #ffe5b0;
    }

    .ribbon-text {
        animation: fadeIn 800ms ease-in;
    }

    .ribbon {
        width: calc(100% +45px);
    }

    .ribbon:before,
    .ribbon:after {
        content: "";
        position: absolute;
    }

    .ribbon:before {
        height: 0;
        width: 0;
        bottom: -20px;
        left: 0;
        border-top: 20px solid #D2AB67;
        border-left: 20px solid transparent;
    }

    .slider {
        width: 100%;
        max-width: 100vw;
        height: 560px;
        margin: auto;
        margin-top: 20px;
        position: relative;
        overflow: hidden;
    }

    .slider .list {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        display: flex;
        transition: transform 1s ease-in-out;
    }

    .slider .list .item {
        min-width: 100%;
        height: 100%;
        flex-shrink: 0;
    }

    .slider .list img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .slider .buttons {
        position: absolute;
        top: 45%;
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .slider .buttons button {
        position: relative;
        width: 75px;
        height: 75px;
        border-radius: 15px;
        background-color: rgba(0, 0, 0, 0.5);
        color: #fff;
        border: none;
        font-family: monospace;
        font-weight: bold;
    }

    .dots {
        position: absolute;
        bottom: -40px;
        left: 0;
        color: #373737;
        width: 100%;
        margin: 0;
        padding: 0;
        justify-content: center;
    }

    .dots li {
        list-style: none;
        width: 10px;
        height: 10px;
        background-color: #373737;
        margin: 10px;
        border-radius: 20px;
        transition: 0.5s;
    }

    .dots li.active {
        width: 30px;
    }
</style>
<script>
    let slider = document.querySelector(".slider .list");
    let items = document.querySelectorAll(".slider .list .item");
    let next = document.getElementById("next");
    let prev = document.getElementById("prev");
    let dots = document.querySelectorAll(".dots li");
    let text = document.querySelectorAll(".ribbon-text");
    let shortContent = document.getElementById("shortContent");

    let lengthItems = items.length;
    let active = 0;

    // Clone first slide and append it to the end
    let firstClone = items[0].cloneNode(true);
    slider.appendChild(firstClone);
    items = document.querySelectorAll(".slider .list .item");

    function reloadSlider() {
        // Update ribbon text
        text.forEach((item) => item.classList.add("hidden"));
        text[active % lengthItems].classList.remove("hidden");

        // Update slider position
        slider.style.transition = "transform 1s ease-in-out";
        slider.style.transform = `translateX(-${items[active].offsetLeft}px)`;

        // Update active dot
        let lastActiveDot = document.querySelector(".dots li.active");
        lastActiveDot.classList.remove("active");
        dots[active % lengthItems].classList.add("active");

        // Update short content
        let currentItem = items[active % lengthItems];
        shortContent.innerHTML = currentItem.getAttribute("data-content");
    }

    // Move to next slide
    next.onclick = function() {
        event.stopPropagation();
        active++;
        reloadSlider();

        if (active === lengthItems) {
            setTimeout(() => {
                slider.style.transition = "none";
                active = 0;
                slider.style.transform = `translateX(-${items[active].offsetLeft}px)`;
            }, 1000);
        }
    };

    // Move to previous slide
    prev.onclick = function() {
        event.stopPropagation();
        if (active === 0) {
            active = lengthItems;
            slider.style.transition = "none";
            slider.style.transform = `translateX(-${items[active].offsetLeft}px)`;
        }
        setTimeout(() => {
            active--;
            reloadSlider();
        }, 10);
    };

    // Auto-play every 5 seconds
    let refreshInterval = setInterval(() => {
        next.click();
    }, 5000);

    // Dots click event
    dots.forEach((li, key) => {
        li.addEventListener("click", () => {
            active = key;
            reloadSlider();
        });
    });

    window.onresize = function() {
        reloadSlider();
    };
</script>
