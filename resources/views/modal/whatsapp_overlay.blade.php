<!-- Modal Structure -->
<div id="whatsappModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-40">
    <div class="relative flex flex-col text-white w-[80%] md:w-[37%] mx-auto rounded-lg overflow-hidden bg-black md:bg-transparent">
        <button id="closeModalBtn" class="absolute top-4 right-4 text-white text-2xl focus:outline-none z-50">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.36 5.64C17.97 5.25 17.33 5.25 16.94 5.64L12 10.58L7.06 5.64C6.67 5.25 6.03 5.25 5.64 5.64C5.25 6.03 5.25 6.67 5.64 7.06L10.58 12L5.64 16.94C5.25 17.33 5.25 18.03 5.64 18.36C6.03 18.75 6.67 18.75 7.06 18.36L12 13.42L16.94 18.36C17.33 18.75 17.97 18.75 18.36 18.36C18.75 18.03 18.75 17.33 18.36 16.94L13.42 12L18.36 7.06C18.75 6.67 18.75 6.03 18.36 5.64Z" fill="white"/>
              </svg>
              
              
        </button>
        
        <header class="flex flex-col items-center px-6 sm:px-10 md:px-20 pt-8 sm:pt-10 md:pt-14 pb-6 sm:pb-8 w-full shadow-2xl bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg">
            <div class="flex flex-col max-w-full w-full sm:w-[300px]">
                <h2 class="text-3xl sm:text-4xl leading-9 text-center">
                    <span class="font-normal">{{ __('landing.wa_overlay_text') }}</span>
                    <br />
                    <span class="italic font-medium">Whatsapp</span>
                </h2>
                <div class="p-10">
                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(256)->backgroundColor(0, 0, 0, 0)->color(255, 255, 255)->generate('https://wa.me/' . $company->phone)) !!} " class="object-contain mt-8 sm:mt-12 md:mt-16 w-full max-w-[200px] sm:max-w-full mx-auto aspect-square">
                </div>
                <a href="https://wa.me/{{ $company->phone }}" aria-label="Send us a message on Whatsapp" class="flex items-center justify-center gap-3 sm:gap-5 px-5 sm:px-7 py-3 sm:py-3.5 mt-8 sm:mt-12 md:mt-16 text-sm sm:text-base tracking-wide border border-white border-solid font-medium rounded-full hover:bg-white hover:bg-opacity-10 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
                    <img loading="lazy" src="{{ asset('images/whatsapp.png') }}" alt="" class="object-contain shrink-0 w-5 sm:w-6 aspect-square" />
                    <span class="uppercase">{{ __('landing.wa_overlay_send_message') }}</span>
                </a>
            </div>
        </header>
    </div>
</div>