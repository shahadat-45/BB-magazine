<div>
    <div>
        <!-- Search Icon (Opens Modal) -->
        <button class="text-gray-700 hover:text-yellow-500 search-toggle-btn">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
        </button>

        <!-- Search Modal with Dark Overlay -->
        <div class="fixed inset-0 bg-[#ffffff80] bg-opacity-50 flex items-start justify-center pt-24 px-5 lg:px-0 search-modal-container" style="display: none">

            <!-- Close Button (OUTSIDE MODAL) -->
            <button class="absolute top-5 right-5 text-black text-2xl hover:text-gray-300 search-modal-close">
                ✖
            </button>

            <!-- Search Bar (Modal) -->
            <div class="bg-[#262626] p-4 rounded-lg shadow-lg w-[700px] relative search-modal-content">
                <div class="relative">
                    <!-- Search Input -->
                    <input type="text" wire:model="query" placeholder="Type here your query..."
                        class="w-full pl-4 pr-12 py-3 text-lg text-white border-none bg-[#262626] focus:outline-none focus:ring-0">
                    <!-- Search Icon -->
                    <button wire:click="search"
                        class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-white">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
