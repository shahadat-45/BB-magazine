<div class="max-w-6xl mx-auto mt-20 px-7 lg:px-0">
    <div class="mb-12 border-t border-gray-400 pt-8">

        <div class="flex justify-between items-center mb-8">
                <h2 class="text-lg md:text-2xl lg:text-3xl font-semibold uppercase">{{ description(1)->title }}</h2>
                <a href="{{ route('all-categories') }}" class="text-sm text-gray-700 font-medium uppercase flex items-center">
                    ALL CATEGORIES
                    <svg class="w-4 h-4 ml-1 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>{{--  --}}
        </div>

        <p class="text-gray-700 mb-6">
            {{ description(1)->description }}
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3">
            @foreach ($articleCategories as $category)
                <div class="bg-white border border-gray-300 overflow-hidden p-3">
                    <a href="{{ route('frontend.category', $category->slug) }}">{{--  --}}
                        <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                            class="w-full h-48 object-cover" />
                    </a>
                    <div class="p-3 text-center">
                        <a href="{{ route('frontend.category', $category->slug) }}" title="{{ $category->name }}"{{--  --}}
                            class="text-base lg:text-lg font-semibold hover:text-[#D2AB67] transition duration-500 ease-in-out uppercase">
                            {{ $category->name }}
                        </a>
                        <p class="text-sm text-gray-600 mt-3">
                            {{ str()->limit($category->description, 74) }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
