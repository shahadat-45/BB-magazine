<header class="bg-white relative z-50">
    <div class="max-w-7xl mx-auto flex items-center justify-between py-4 px-6 border-b border-gray-500">

        <!-- Logo -->
        <a href="{{ route("home") }}" class="text-lg font-bold">
            <img src="{{ asset(settings()->logo) }}" alt="logo"
                class="h-14 object-cover" />
        </a>

        <!-- Side Menu -->
        <div class="fixed top-0 left-0 w-64 h-full bg-white shadow-md z-50 p-0 flex flex-col" style="display: none">

            <!-- Brand Logo -->
            <div class="flex justify-center mt-6 mb-3">
                <img src="{{ asset(settings()->logo) }}" alt="logo" class="h-10 object-cover">
            </div>

            <div class="w-full overflow-y-auto flex-grow">
                <div class="p-4">
                    <a href="{{ route("home") }}" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Home</a>
                    <a href="{{ route("under-construction") }}" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">About</a>
                    <a href="{{ route("under-construction") }}" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Hexagon</a>
                    <a href="{{ route("under-construction") }}" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Contact</a>

                    <!-- All Desks -->
                    <div class="relative">
                        <button class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700 rounded-md all-decks-toggle">
                            All Decks
                            <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <div class="pl-4 mt-2 all-decks-submenu" style="display: none">
                            <!-- Brand Of Month -->
                            <div class="relative">
                                <button class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700 brand-of-month-toggle">
                                    Brand Of Month
                                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="pl-4 mt-2 brand-of-month-submenu" style="display: none">
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                        Menu Item
                                    </a>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                        Menu Item
                                    </a>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                        Menu Item
                                    </a>
                                </div>
                            </div>

                            <!-- Bangladesh -->
                            <div class="relative">
                                <button class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700 bangladesh-toggle">
                                    Bangladesh
                                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="pl-4 mt-2 bangladesh-submenu" style="display: none">
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                        Menu Item
                                    </a>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                        Menu Item
                                    </a>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                        Menu Item
                                    </a>
                                </div>
                            </div>

                            <!-- Area64 -->
                            <div class="relative">
                                <button class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700 area64-toggle">
                                    Area64
                                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                                <div class="pl-4 mt-2 area64-submenu" style="display: none">
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                        Menu Item
                                    </a>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                        Menu Item
                                    </a>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                        Menu Item
                                    </a>
                                </div>
                            </div>
                            <!-- Remaining Items Without Submenus -->
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                Made in Bangladesh
                            </a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Tourism</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">People</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Export</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                Culture & Heritage
                            </a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                Immigration & Investment
                            </a>
                            <a href="#"
                                class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Entertainment</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Service
                                Industry</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Food</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Beverage</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">History</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Agronomy</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Craftsman</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Women</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Children</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                Lead Zone
                            </a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                Shop 64
                            </a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Language</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                Desk News
                            </a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Showcase</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                Fashine & lifestyle
                            </a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Branding</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Marketing</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">RMG</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                Lead Expert
                            </a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Innovation</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">
                                Brand 64
                            </a>
                            <!-- Remaining Items Without Submenus -->
                        </div>
                    </div>

                    <a href=""
                        class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Gallery</a>

                    <!-- TV Menu -->
                    <div class="relative">
                        <button class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700 rounded-md tv-menu-toggle">
                            TV
                            <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="pl-4 mt-2 tv-menu-submenu" style="display: none">
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Video</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Talk Show</a>
                        </div>
                    </div>

                    <!-- Lead Zone Menu -->
                    <div class="relative">
                        <button class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700 rounded-md lead-zone-menu-toggle">
                            Lead Zone
                            <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div class="pl-4 mt-2 lead-zone-menu-submenu" style="display: none">
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Lead Area</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Lead Article</a>
                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 text-gray-700">Meet The
                                Leader
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex space-x-6 font-medium text-gray-800">
            <a href="{{ route("home") }}" class="hover:text-[#D2AB67]">Home</a>
            <a href="{{ route("under-construction") }}" class="hover:text-[#D2AB67]">About</a>
            <a href="{{ route("under-construction") }}" class="hover:text-[#D2AB67]">Hexagon</a>
            <a href="{{ route("under-construction") }}" class="hover:text-[#D2AB67]">Contact</a>

            <!-- All Desks -->
            <div class="relative">
                <button class="hover:text-[#D2AB67] flex items-center menuButton all-desks-desktop-toggle">
                    All Desks
                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="submenuOne absolute top-full left-1/2 -translate-x-1/2 mt-3 w-[1050px] bg-[#E5CD8F] shadow-lg border border-[#E5CD8F] z-50" style="display: none">
                    <div class="w-1/3 hidden items-center justify-center border-r border-[#fae3a9]">
                        <div class="text-center">
                            <img src="{{ asset(settings()->logo) }}" alt="{{ settings()->logo }}"
                                class="mx-auto h-20">
                        </div>
                    </div>
                    <div class="grid grid-cols-5 gap-3 p-5">
                        <!-- Brand of the Month -->
                        <div class="relative">
                            <button class="flex items-center justify-center w-full py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out brand-desktop-toggle">
                                Brand Of Month
                                <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="absolute left-1/2 top-full mt-1 w-full text-center text-sm bg-[#C59553] shadow-md border border-[#C59553] transform -translate-x-1/2 brand-desktop-submenu" style="display: none">
                                <a href="#"
                                    class="block px-4 py-1.5 hover:text-red-600 border-b border-[#dfc37c] text-white">Menu
                                    Item</a>
                                <a href="#"
                                    class="block px-4 py-1.5 hover:text-red-600 border-b border-[#dfc37c] text-white">Menu
                                    Item</a>
                                <a href="#" class="block px-4 py-1.5 hover:text-red-600 text-white">Menu
                                    Item</a>
                            </div>
                        </div>
                        <!-- Bangladesh -->
                        <div class="relative">
                            <button class="flex items-center justify-center w-full py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out bangladesh-desktop-toggle">
                                Bangladesh
                                <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="absolute left-1/2 top-full mt-1 w-full text-center text-sm bg-[#C59553] shadow-md border border-[#C59553] transform -translate-x-1/2 bangladesh-desktop-submenu" style="display: none">
                                <a href="#"
                                    class="block px-4 py-1.5 hover:text-red-600 border-b border-[#dfc37c] text-white">Menu
                                    Item</a>
                                <a href="#"
                                    class="block px-4 py-1.5 hover:text-red-600 border-b border-[#dfc37c] text-white">Menu
                                    Item</a>
                                <a href="#" class="block px-4 py-1.5 hover:text-red-600 text-white">Menu
                                    Item</a>
                            </div>
                        </div>

                        <!-- Area64 -->
                        <div class="relative">
                            <button class="flex items-center justify-center w-full py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out area64-desktop-toggle">
                                Area64
                                <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div class="absolute left-1/2 top-full mt-1 w-full text-center text-sm bg-[#C59553] shadow-md border border-[#C59553] transform -translate-x-1/2 area64-desktop-submenu" style="display: none">
                                <a href="#"
                                    class="block px-4 py-1.5 hover:text-red-600 border-b border-[#dfc37c] text-white">Menu
                                    Item</a>
                                <a href="#"
                                    class="block px-4 py-1.5 hover:text-red-600 border-b border-[#dfc37c] text-white">Menu
                                    Item</a>
                                <a href="#" class="block px-4 py-1.5 hover:text-red-600 text-white">Menu
                                    Item</a>
                            </div>
                        </div>
                        <!-- Remaining Items Without Submenus -->
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">
                            Made in Bangladesh
                        </a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Tourism</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">People</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Export</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">
                            Culture & Heritage
                        </a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">
                            Immigration & Investment
                        </a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Entertainment</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Service
                            Industry</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Food</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Beverage</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">History</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Agronomy</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Craftsman</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Women</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Children</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">
                            Lead Zone
                        </a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">
                            Shop 64
                        </a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Language</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">
                            Desk News
                        </a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Showcase</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">
                            Fashine & lifestyle
                        </a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Branding</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Marketing</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">RMG</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">
                            Lead Expert
                        </a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">Innovation</a>
                        <a href="#"
                            class="flex items-center justify-center py-2 px-4 bg-[#D0B46A] border border-[#b69030] text-black text-sm hover:text-red-600 transition-colors duration-500 ease-in-out">
                            Brand 64
                        </a>
                        <!-- Remaining Items Without Submenus -->
                    </div>
                </div>
            </div>
            <!-- TV Zone -->
            <div class="relative">
                <button class="hover:text-[#D2AB67] flex items-center tv-zone-desktop-toggle">
                    TV Zone
                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute top-full left-1/2 -translate-x-1/2 mt-3 w-48 bg-white shadow-lg border border-gray-200 z-50 tv-zone-desktop-submenu" style="display: none">
                    <div>
                        <!-- Video -->
                        <a href="#"
                            class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700">
                            Video
                        </a>
                        <!-- Talk Show -->
                        <a href="#"
                            class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700">
                            Talk Show
                        </a>
                    </div>
                </div>
            </div>
            <!-- Gallery -->
            <a href="" class="hover:text-[#D2AB67]">Gallery</a>
            <!-- Lead Zone -->
            <div class="relative">
                <button class="hover:text-[#D2AB67] flex items-center lead-zone-desktop-toggle">
                    Lead Zone
                    <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute top-full left-1/2 -translate-x-1/2 mt-3 w-48 bg-white shadow-lg border border-gray-200 z-50 lead-zone-desktop-submenu" style="display: none">
                    <div>
                        <!-- Lead Area -->
                        <a href="#"
                            class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700">
                            Lead Area
                        </a>
                        <!-- Lead Article -->
                        <a href="#"
                            class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700">
                            Lead Article
                        </a>
                        <!-- Meet The Leader -->
                        <a href="#"
                            class="flex items-center justify-between w-full py-2 px-4 hover:bg-gray-100 text-gray-700">
                            Meet The Leader
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Icons -->
        <div class="flex items-center space-x-5">
            <!-- Translate Icon -->
            <a href="#" class="hidden text-gray-700 hover:text-yellow-500">
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M4 5h7" />
                    <path d="M9 3v2c0 4.418 -2.239 8 -5 8" />
                    <path d="M5 9c0 2.144 2.952 3.908 6.7 4" />
                    <path d="M12 20l4 -9l4 9" />
                    <path d="M19.1 18h-6.2" />
                </svg>
            </a>
            <!-- Search Icon -->
           @include('frontend.layouts.search')
            <!-- Menu Button for Mobile -->
            <div class="lg:hidden flex items-center">
                <button class="text-gray-700 hover:text-yellow-500 mobile-menu-toggle">
                    <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12h18M3 6h18M3 18h18" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>