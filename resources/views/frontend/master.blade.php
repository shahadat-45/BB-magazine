<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ settings()->title }}</title>
        {{-- <meta property="og:title" content="{{ $news->title }}"> --}}
        {{-- <meta property="og:description" content="{{ $news->short_content }}">
        <meta property="og:image" content="{{ asset($news->thumbPhoto?->path) }}"> --}}
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        {{-- <meta property="og:url" content="{{ isset($news) ? url("news/" . $news->slug) : url()->current() }}"> --}}
        <link rel="website icon" type="png" href="{{ asset(settings()->favicon) }}">
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
        <!-- Swiper.js CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <!-- Toastr CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    </head>

    <body class="font-[Figtree] bg-white">
        <!-- Navbar -->
        @include('frontend.layouts.navbar')
        <!-- Latest Updates -->
        @yield("content")

        @include('frontend.layouts.footer')
        <!-- Include Toastr JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- Include SwiperJS Script -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <!-- Hero Script -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var swiper = new Swiper(".mySwiper", {
                    loop: true,
                    speed: 1500,
                    autoplay: {
                        delay: 5000,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: ".next",
                        prevEl: ".prev",
                    },
                    pagination: {
                        el: ".swiper-pagination",
                        clickable: true,
                    },
                    on: {
                        slideChangeTransitionEnd: function() {
                            let activeSlide = document.querySelector(".swiper-slide-active");
                            if (activeSlide) {
                                let newContent = activeSlide.getAttribute("data-content");
                                document.getElementById("short-content").textContent = newContent;
                            }
                        },
                    },
                });

                // Manually trigger update on first load
                let initialActiveSlide = document.querySelector(".swiper-slide-active");
                if (initialActiveSlide) {
                    document.getElementById("short-content").textContent = initialActiveSlide.getAttribute(
                        "data-content");
                }
            });
        </script>
        <!-- Latest Update -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const marquee = document.getElementById("marquee");

                // Duplicate the content for seamless looping
                marquee.innerHTML += marquee.innerHTML;

                let speed = 1; // Adjust speed for smooth scrolling
                let position = 0;
                let isPaused = false;

                function smoothScroll() {
                    if (!isPaused) {
                        position -= speed;
                        if (position < -marquee.scrollWidth / 2) {
                            position = 0; // Reset position for a continuous effect
                        }
                        marquee.style.transform = `translateX(${position}px)`;
                    }
                    requestAnimationFrame(smoothScroll);
                }

                // Start scrolling
                smoothScroll();

                // Pause scrolling on hover
                marquee.addEventListener("mouseenter", () => (isPaused = true));
                marquee.addEventListener("mouseleave", () => (isPaused = false));
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const toastrOptions = {
                    progressBar: true,
                    timeOut: 3000,
                    closeButton: true,
                    positionClass: 'toast-top-right',
                };

                function showToast(type, message) {
                    if (message) {
                        toastr[type](message, '', toastrOptions);
                    }
                }

                // Event listener for success messages
                window.addEventListener('toastr:success', event => {
                    showToast('success', event.detail);
                });

                // Event listener for error messages
                window.addEventListener('toastr:error', event => {
                    showToast('error', event.detail);
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    "timeOut": 3000,
                    "positionClass": "toast-top-right",
                };

                @if (session("success"))
                    toastr.success("{{ session("success") }}");
                @endif

                @if (session("error"))
                    toastr.error("{{ session("error") }}");
                @endif
            });
        </script>
        <script>
            function updateMetaTags(shareUrl, title, description, image) {
                document.querySelector('meta[property="og:title"]').setAttribute('content', title);
                document.querySelector('meta[property="og:description"]').setAttribute('content', description);
                document.querySelector('meta[property="og:image"]').setAttribute('content', image);
                document.querySelector('meta[property="og:url"]').setAttribute('content', shareUrl);
            }
        </script>
        <script>
            $(document).ready(function() {
                // Toggle search modal
                $('.search-toggle-btn').click(function(e) {
                    e.stopPropagation();
                    $('.search-modal-container').fadeIn();
                });
            
                // Close modal when clicking close button or escape key
                $('.search-modal-close').click(function() {
                    $('.search-modal-container').fadeOut();
                });
            
                // Close modal when clicking outside
                $(document).click(function(e) {
                    if (!$(e.target).closest('.search-modal-content').length && !$(e.target).hasClass('search-toggle-btn')) {
                        $('.search-modal-container').fadeOut();
                    }
                });
            
                // Close on escape key
                $(document).keydown(function(e) {
                    if (e.key === "Escape") {
                        $('.search-modal-container').fadeOut();
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                // Mobile menu toggle
                $('.mobile-menu-toggle').click(function(e) {
                    e.stopPropagation();
                    $('.fixed.top-0.left-0').toggle();
                });
            
                // Mobile submenu toggles
                $('.all-decks-toggle').click(function(e) {
                    e.stopPropagation();
                    $(this).siblings('.all-decks-submenu').toggle();
                });
                $('.brand-of-month-toggle').click(function(e) {
                    e.stopPropagation();
                    $(this).siblings('.brand-of-month-submenu').toggle();
                });
                $('.bangladesh-toggle').click(function(e) {
                    e.stopPropagation();
                    $(this).siblings('.bangladesh-submenu').toggle();
                });
                $('.area64-toggle').click(function(e) {
                    e.stopPropagation();
                    $(this).siblings('.area64-submenu').toggle();
                });
                $('.tv-menu-toggle').click(function(e) {
                    e.stopPropagation();
                    $(this).siblings('.tv-menu-submenu').toggle();
                });
                $('.lead-zone-menu-toggle').click(function(e) {
                    e.stopPropagation();
                    $(this).siblings('.lead-zone-menu-submenu').toggle();
                });
            
                // Desktop menu toggles
                $('.all-desks-desktop-toggle').click(function(e) {
                    e.stopPropagation();
                    $('.submenuOne').toggle();
                    $('.brand-desktop-submenu, .bangladesh-desktop-submenu, .area64-desktop-submenu').hide();
                });
                $('.brand-desktop-toggle').click(function(e) {
                    e.stopPropagation();
                    $(this).siblings('.brand-desktop-submenu').toggle();
                    $('.bangladesh-desktop-submenu, .area64-desktop-submenu').hide();
                });
                $('.bangladesh-desktop-toggle').click(function(e) {
                    e.stopPropagation();
                    $(this).siblings('.bangladesh-desktop-submenu').toggle();
                    $('.brand-desktop-submenu, .area64-desktop-submenu').hide();
                });
                $('.area64-desktop-toggle').click(function(e) {
                    e.stopPropagation();
                    $(this).siblings('.area64-desktop-submenu').toggle();
                    $('.brand-desktop-submenu, .bangladesh-desktop-submenu').hide();
                });
                $('.tv-zone-desktop-toggle').click(function(e) {
                    e.stopPropagation();
                    $('.tv-zone-desktop-submenu').toggle();
                    $('.lead-zone-desktop-submenu').hide();
                });
                $('.lead-zone-desktop-toggle').click(function(e) {
                    e.stopPropagation();
                    $('.lead-zone-desktop-submenu').toggle();
                    $('.tv-zone-desktop-submenu').hide();
                });
            
                // Close menus when clicking outside
                $(document).click(function() {
                    $('.fixed.top-0.left-0').hide();
                    $('.submenuOne, .brand-desktop-submenu, .bangladesh-desktop-submenu, .area64-desktop-submenu, .tv-zone-desktop-submenu, .lead-zone-desktop-submenu').hide();
                });
            
                // Prevent submenu from closing when clicking inside
                $('.fixed.top-0.left-0, .submenuOne, .brand-desktop-submenu, .bangladesh-desktop-submenu, .area64-desktop-submenu, .tv-zone-desktop-submenu, .lead-zone-desktop-submenu').click(function(e) {
                    e.stopPropagation();
                });
            });
        </script>
    </body>

</html>
