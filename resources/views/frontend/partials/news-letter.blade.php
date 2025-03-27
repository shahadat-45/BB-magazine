<div>
    <div class="bg-[#F1F1F1] flex justify-center items-center p-12">
        <div class="w-full max-w-3xl text-center">
            <h2 class="text-base lg:text-xl font-semibold text-gray-800">
                {{ description(4)->title }}
            </h2>
            <div class="text-gray-600 mt-2 w-full text-sm md:text-base max-w-lg mx-auto text-center">
               {{ description(4)->description }}
            </div>
            <div class="mt-6 flex justify-center">
                <div class="w-full max-w-lg">
                    <form id="newsletter-form">
                        <div class="flex justify-center space-x-4">
                            <input wire:model="email" placeholder="Email" id="newsletter-email" 
                                class="px-4 py-2.5 w-full text-sm border-transparent bg-white focus:ring-0 focus:border-transparent focus:outline-none" />
                            <button wire:click="subscribe" type="submit"
                                class="bg-[#D2AB67] text-white text-sm px-4 py-1 hover:bg-yellow-600 transition-colors duration-500">
                                SUBSCRIBE
                            </button>
                        </div>
                    </form>
                    @error("email")
                        <span class="text-red-500 text-sm mt-1 flex justify-start">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    $(document).ready(function () {
        $('#newsletter-form').on('submit', function (e) {
            e.preventDefault(); // Prevent default form submission
            
            let email = $('#newsletter-email').val();
            let token = "{{ csrf_token() }}"; // CSRF token for Laravel

            // Frontend Validation
            if (email === '') {
                toastr.error('Email is required!');
                return;
            }
            if (/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email) == false) {
                toastr.error('Please enter a valid email!');
                return;
            }

            // Send AJAX Request
            $.ajax({
                url: "{{ route('newsletter.store') }}", // Laravel route
                type: "POST",
                data: { 
                    newsletter_email: email, 
                    _token: token
                },
                beforeSend: function () {
                    toastr.info('Processing your request...');
                },
                success: function (response) {
                    toastr.success(response.message);
                    $('#newsletter-email').val(''); // Clear input after success
                },
                error: function (xhr) {
                    if (xhr.responseJSON && xhr.responseJSON.errors) {
                        toastr.error(xhr.responseJSON.errors.newsletter_email[0]);
                    } else {
                        toastr.error('Something went wrong. Try again!');
                    }
                }
            });
        });
    });
</script>
