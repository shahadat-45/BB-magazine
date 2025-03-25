<div>
    <div class="bg-[#F1F1F1] flex justify-center items-center p-12">
        <div class="w-full max-w-3xl text-center">
            <h2 class="text-base lg:text-xl font-semibold text-gray-800">
                SUBSCRIBE TO OUR NEWSLETTER
            </h2>
            <div class="text-gray-600 mt-2 w-full text-sm md:text-base max-w-lg mx-auto text-center">
                Join Our Subscribers List To Get The Latest News, Updates And Special
                Offers Delivered Directly In Your Inbox.
            </div>
            <div class="mt-6 flex justify-center">
                <div class="w-full max-w-lg">
                    <div class="flex justify-center space-x-4">
                        <input type="email" wire:model="email" placeholder="Email"
                            class="px-4 py-2.5 w-full text-sm border-transparent bg-white focus:ring-0 focus:border-transparent focus:outline-none" />
                        <button wire:click="subscribe" type="submit"
                            class="bg-[#D2AB67] text-white text-sm px-4 py-1 hover:bg-yellow-600 transition-colors duration-500">
                            SUBSCRIBE
                        </button>
                    </div>
                    @error("email")
                        <span class="text-red-500 text-sm mt-1 flex justify-start">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
