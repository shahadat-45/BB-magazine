<div x-data="galleryModal()" class="max-w-6xl mx-auto mt-20 px-7 lg:px-0">
    <div class="border-t border-gray-400 pt-8">
        {{-- @foreach ($gallerySections as $gallerySection) --}}
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-lg md:text-2xl lg:text-3xl font-semibold uppercase">{{ '$gallerySection->name' }}</h2>
                <a href=""{{ route("frontend.gallery") }}
                    class="text-sm text-gray-700 font-medium uppercase flex items-center">
                    ALL PICTURES
                    <svg class="w-4 h-4 ml-1 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
            <p class="text-gray-700 mb-6">{{ '$gallerySection->description' }}</p>
        {{-- @endforeach --}}
        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-12 gap-3">
            @foreach ($galleryImages as $index => $gallery)
                @php
                    $colSpan = in_array($index, [1, 3]) ? "md:col-span-2" : "md:col-span-5";
                @endphp
                <div class="col-span-1 {{ $colSpan }} overflow-hidden group cursor-pointer"
                    @click="openModal({{ $index }})">
                    <img src="{{ asset($gallery->gallary_image) }}" alt=""
                        class="w-full h-[300px] object-cover transition duration-700 ease-in-out group-hover:scale-110" />
                </div>
            @endforeach
        </div>

    </div>

    <!-- Modal -->
    <div x-show="isOpen" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50"
        x-transition.opacity @keydown.window.escape="closeModal()" @click.away="closeModal()" style="display: none">
        <div class="relative w-full max-w-4xl mx-auto">
            <!-- Close Button -->
            <button @click="closeModal()" class="absolute top-3 right-6 text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>

            <!-- Image Display -->
            <div class="flex items-center justify-center">
                <!-- ◀️ Previous Button -->
                <button @click="prevImage()"
                    class="absolute left-4 text-white p-2 bg-gray-800 bg-opacity-50 rounded-full hover:bg-opacity-75">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>

                <!-- Image -->
                <img :src="images[currentIndex]" alt="Gallery Image"
                    class="w-full max-h-[80vh] object-contain mx-auto rounded-lg">

                <!-- ▶️ Next Button -->
                <button @click="nextImage()"
                    class="absolute right-4 text-white p-2 bg-gray-800 bg-opacity-50 rounded-full hover:bg-opacity-75">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    function galleryModal() {
        return {
            isOpen: false,
            currentIndex: 0,
            images: @json($galleryImages->map(fn($img) => asset($img->gallary_image))),

            openModal(index) {
                this.currentIndex = index;
                this.isOpen = true;
                document.body.style.overflow = 'hidden';
            },

            closeModal() {
                this.isOpen = false;
                document.body.style.overflow = 'auto';
            },

            nextImage() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            },

            prevImage() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            }
        };
    }
</script>
