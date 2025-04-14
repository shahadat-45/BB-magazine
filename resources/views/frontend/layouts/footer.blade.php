<footer class="bg-[#F9F8F6] mt-16 px-7 lg:px-0">
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 py-11 gap-6 text-[15px] text-gray-600">
        <!-- Useful Links -->
        <div>
            <h3 class="mb-3 text-lg font-semibold text-[#373737]">
                USEFUL LINKS
            </h3>
            <ul class="space-y-2">
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">About Us</a></li>
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">Topics</a></li>
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">Vision</a></li>
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">Advertisement</a></li>
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">Newsletter</a></li>
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">Privacy Policy</a></li>
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">Sitemap</a></li>
            </ul>
        </div>

        <!-- Contact Us -->
        <div>
            <h3 class="mb-3 text-lg font-semibold text-[#373737]">CONTACT US</h3>
            {{-- @foreach (settings()s as settings()) --}}
                <p>{{ settings()->address }}</p>
                <p class="mt-2">{{ settings()->email }}</p>
                <p class="mt-2">{{ settings()->phone }}</p>
            {{-- @endforeach --}}
        </div>
        <!-- Help & Support -->
        <div>
            <h3 class="mb-3 text-lg font-semibold text-[#373737]">
                HELP & SUPPORT
            </h3>
            <ul class="space-y-2">
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">Support</a></li>
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">FAQs</a></li>
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">Republishing</a></li>
                <li><a href="{{ route("under-construction") }}" class="hover:underline hover:text-yellow-600">Contact Us</a></li>
            </ul>
        </div>

        <!-- Newsletter Subscription -->
        <div>
            <h3 class="font-semibold text-gray-600 text-sm mb-3">
                Subscribe To Our Newsletter
            </h3>
            <p class="whitespace-nowrap [#373737] text-xl font-semibold">
                Every Article To Your Inbox
            </p>

            <!-- Input Field with Button Inside -->
            <form id="footer-newsletter-form">
                <div class="relative mt-3">
                    <input wire:model="email" placeholder="Email" id="footer-newsletter-email"
                        class="w-full border text-xs text-gray-500 border-gray-400 px-3 py-2 focus:ring-0 focus:border-gray-400 focus:outline-none" />
                    <button wire:click="subscribe" type="submit"
                        class="absolute right-1 top-1 bottom-1 font-medium bg-[#D2AB67] text-white px-2.5 text-xs hover:bg-yellow-600 transition-colors duration-500">
                        SUBSCRIBE
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Brand Logo -->
    <div class="mt-10 flex flex-col items-center">
        {{-- @foreach (settings()s as settings()) --}}
            <!-- Logo -->
            <a href="{{ route("home") }}">
                <img src="{{ asset(settings()->logo) }}" alt="{{ settings()->title }}"
                    class="w-[300px] h-auto object-cover" />
            </a>

            <div class="mt-6 flex space-x-3">
                <!-- Slack -->
                <a href="{{ settings()->slack }}" target="_blank"
                    class="w-9 h-9 flex items-center justify-center rounded bg-black group">
                    <svg class="w-5 h-5 text-white transition-colors group-hover:text-[#D2AB67] duration-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12v-6a2 2 0 0 1 4 0v6m0 -2a2 2 0 1 1 2 2h-6" />
                        <path d="M12 12h6a2 2 0 0 1 0 4h-6m2 0a2 2 0 1 1 -2 2v-6" />
                        <path d="M12 12v6a2 2 0 0 1 -4 0v-6m0 2a2 2 0 1 1 -2 -2h6" />
                        <path d="M12 12h-6a2 2 0 0 1 0 -4h6m-2 0a2 2 0 1 1 2 -2v6" />
                    </svg>
                </a>
                <!-- Facebook -->
                <a href="{{ settings()->facebook }}" target="_blank"
                    class="w-9 h-9 text-white flex items-center justify-center rounded bg-black group">
                    <svg class="w-5 h-5 fill-current transition-colors group-hover:text-[#D2AB67] duration-500" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                    </svg>
                </a>
                <!-- Twitter -->
                <a href="{{ settings()->twitter }}" target="_blank"
                    class="w-9 h-9 flex items-center justify-center rounded bg-black group">
                    <svg class="w-5 h-5 text-white transition-colors group-hover:text-[#D2AB67] duration-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M22.46 6c-.77.35-1.6.58-2.46.69a4.3 4.3 0 0 0 1.92-2.38 8.58 8.58 0 0 1-2.72 1.04 4.28 4.28 0 0 0-7.3 3.91A12.17 12.17 0 0 1 3.1 4.9a4.28 4.28 0 0 0 1.33 5.71A4.26 4.26 0 0 1 2.8 10v.05a4.28 4.28 0 0 0 3.43 4.2c-.43.12-.88.18-1.34.18a3.9 3.9 0 0 1-.81-.08 4.3 4.3 0 0 0 4 3A8.6 8.6 0 0 1 2 18.57a12.1 12.1 0 0 0 6.56 1.93c7.88 0 12.2-6.53 12.2-12.2v-.56c.84-.6 1.6-1.3 2.2-2.13z" />
                    </svg>
                </a>
                <!-- LinkedIn -->
                <a href="{{ settings()->linkedin }}" target="_blank"
                    class="w-9 h-9 flex items-center justify-center rounded bg-black group">
                    <svg class="w-5 h-5 text-white transition-colors group-hover:text-[#D2AB67] duration-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M20.45 2H3.55C2.7 2 2 2.7 2 3.55v16.9c0 .85.7 1.55 1.55 1.55h16.9c.85 0 1.55-.7 1.55-1.55V3.55c0-.85-.7-1.55-1.55-1.55zM7.94 18H5.1V9h2.84v9zM6.52 7.8c-.9 0-1.6-.72-1.6-1.6 0-.89.73-1.6 1.6-1.6.88 0 1.6.72 1.6 1.6 0 .88-.72 1.6-1.6 1.6zM18 18h-2.8v-4.6c0-1.1-.02-2.5-1.54-2.5-1.54 0-1.78 1.2-1.78 2.4V18H9v-9h2.6v1.2h.04c.36-.67 1.25-1.38 2.58-1.38 2.75 0 3.26 1.8 3.26 4.1V18z" />
                    </svg>
                </a>
                <!-- YouTube -->
                <a href="{{ settings()->youtube }}" target="_blank"
                    class="w-9 h-9 flex items-center justify-center rounded bg-black group">
                    <svg class="w-5 h-5 text-white transition-colors group-hover:text-[#D2AB67] duration-500" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M21.6 7.2c-.2-.8-.8-1.4-1.6-1.6C18.1 5 12 5 12 5s-6.1 0-8 .6c-.8.2-1.4.8-1.6 1.6C2 9.1 2 12 2 12s0 2.9.6 4.8c.2.8.8 1.4 1.6 1.6 1.9.6 8 .6 8 .6s6.1 0 8-.6c.8-.2 1.4-.8 1.6-1.6.6-1.9.6-4.8.6-4.8s0-2.9-.6-4.8zM9.5 15V9l5.5 3-5.5 3z" />
                    </svg>
                </a>
            </div>
        {{-- @endforeach --}}
    </div>

    <!-- Copyright Section -->
    <div class="mt-6 max-w-6xl mx-auto text-sm text-gray-500 py-4">
        <div class="flex flex-wrap lg:space-x-4 justify-center">
            <span class="w-full sm:w-auto text-center">© 2025 Brand Bangladesh Developed by <a href="https://qourin.com/" rel="nofollow" target="_blank">QOURIN</a></span>
            <div class="w-full sm:w-auto text-center space-y-2 sm:space-y-0 sm:ml-4 mt-2 sm:mt-0">
                <a href="{{ route("under-construction") }}"
                    class="hover:underline block sm:inline-block sm:mr-4">Privacy Policy</a>
                <a href="{{ route("under-construction") }}" class="hover:underline block sm:inline-block">Security
                    Policy</a>
            </div>
        </div>
    </div>


</footer>
