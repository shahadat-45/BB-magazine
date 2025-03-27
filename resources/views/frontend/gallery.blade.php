@extends('frontend.master')
<style>
    @keyframes modalFadeIn {
        from {
            transform: scale(0.9);
            opacity: 0;
        }
        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    @keyframes modalFadeOut {
        from {
            transform: scale(1);
            opacity: 1;
        }
        to {
            transform: scale(0.9);
            opacity: 0;
        }
    }

    #galleryModal {
        display: none;
        opacity: 0;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    #galleryModal.modal-active {
        display: flex !important;
        opacity: 1;
        animation: modalFadeIn 0.3s ease-out forwards;
    }

    #galleryModal.modal-hidden {
        animation: modalFadeOut 0.3s ease-out forwards;
    }
</style>

@section('content')
    <div>
        <div class="max-w-6xl mx-auto px-7 lg:px-0">
            <div class="mt-11">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-xl md:text-2xl lg:text-3xl font-semibold uppercase">{{ description(3)->title }}</h2>
                    </div>
                    <p class="text-gray-700 mb-6">{{ description(3)->description }}</p>
                <!-- Gallery Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-12 gap-3">
                    @foreach ($galleryImages as $index => $gallery)
                        @php
                            $colSpan = in_array($index, [1, 3]) ? "md:col-span-2" : "md:col-span-5";
                        @endphp
                        <div class="col-span-1 {{ $colSpan }} overflow-hidden group cursor-pointer"
                            onclick="openModal({{ $index }})">
                            <img src="{{ asset($gallery->gallary_image) }}" alt="gallary_image"
                                class="w-full h-[300px] object-cover transition duration-700 ease-in-out group-hover:scale-110" />
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Modal -->
            <div id="galleryModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 z-50" onclick="closeModal()" style="display: none">
                <div class="relative w-full max-w-4xl mx-auto">
                    <!-- Close Button -->
                    <button onclick="closeModal()" class="absolute top-3 right-6 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>

                    <!-- Image Display -->
                    <div class="flex items-center justify-center">
                        <!-- Previous Button -->
                        <button onclick="prevImage(event)"
                            class="absolute left-4 text-white p-2 bg-gray-800 bg-opacity-50 rounded-full hover:bg-opacity-75">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </button>

                        <!-- Image -->
                        <img id="modalImage" src="" alt="Gallery Image"
                            class="w-full max-h-[80vh] object-contain mx-auto rounded-lg">

                        <!-- Next Button -->
                        <button onclick="nextImage(event)"
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

        <div class="my-20">
            @include('frontend.partials.news-letter')
        </div>
    </div>    
@endsection
@push('script')

<script>
    const galleryImages = @json($galleryImages->map(fn($img) => asset($img->gallary_image)));
    let currentIndex = 0;
    const modal = document.getElementById('galleryModal');
    const modalImage = document.getElementById('modalImage');
    let isAnimating = false;

    function openModal(index) {
        if (modal.style.display === 'flex' || isAnimating) return;

        currentIndex = index;
        modalImage.src = galleryImages[currentIndex];
        modal.style.display = 'flex';
        
        // Force reflow before adding active class
        void modal.offsetHeight;
        
        modal.classList.remove('modal-hidden');
        modal.classList.add('modal-active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        if (modal.style.display !== 'flex' || isAnimating) return;

        isAnimating = true;
        modal.classList.remove('modal-active');
        modal.classList.add('modal-hidden');
        
        setTimeout(() => {
            modal.style.display = 'none';
            modal.classList.remove('modal-hidden');
            document.body.style.overflow = 'auto';
            isAnimating = false;
        }, 300);
    }

    function nextImage(e) {
        if (e) e.stopPropagation();
        currentIndex = (currentIndex + 1) % galleryImages.length;
        updateImage();
    }

    function prevImage(e) {
        if (e) e.stopPropagation();
        currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
        updateImage();
    }

    function updateImage() {
        // Add fade effect for image change
        modalImage.style.opacity = '0';
        setTimeout(() => {
            modalImage.src = galleryImages[currentIndex];
            modalImage.style.opacity = '1';
        }, 150);
    }

    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (modal.style.display !== 'flex') return;
        
        if (e.key === 'Escape') {
            closeModal();
        } else if (e.key === 'ArrowRight') {
            nextImage(e);
        } else if (e.key === 'ArrowLeft') {
            prevImage(e);
        }
    });

    // Prevent modal content from closing when clicking inside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            closeModal();
        }
    });

    // Image transition setup
    modalImage.style.transition = 'opacity 0.2s ease';
</script>
@endpush