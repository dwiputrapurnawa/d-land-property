<!-- Modal Structure -->
<div id="whatsappModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-40">
    <div class="relative flex flex-col text-white max-w-[600px] mx-auto rounded-lg overflow-hidden">
        <button id="closeModalBtn" class="absolute top-4 right-4 text-white text-2xl focus:outline-none">✖</button>
        
        <header class="flex flex-col items-center px-6 sm:px-10 md:px-20 pt-8 sm:pt-10 md:pt-14 pb-6 sm:pb-8 w-full shadow-2xl bg-white bg-opacity-10 backdrop-filter backdrop-blur-lg">
            <div class="flex flex-col max-w-full w-full sm:w-[272px]">
                <h2 class="text-3xl sm:text-4xl leading-9 text-center">
                    <span class="font-normal">{{ __('landing.wa_overlay_text') }}</span>
                    <br />
                    <span class="italic font-medium">Whatsapp</span>
                </h2>
                <div class="p-10">
                    <img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(256)->backgroundColor(0, 0, 0, 0)->color(255, 255, 255)->generate('https://wa.me/' . $company->phone)) !!} " class="object-contain mt-8 sm:mt-12 md:mt-16 w-full max-w-[200px] sm:max-w-full mx-auto aspect-square">
                </div>
                <a href="https://wa.me/{{ $company->phone }}" aria-label="Send us a message on Whatsapp" class="flex items-center justify-center gap-3 sm:gap-5 px-5 sm:px-7 py-3 sm:py-3.5 mt-8 sm:mt-12 md:mt-16 text-sm sm:text-base tracking-wide border border-white border-solid font-medium rounded-full hover:bg-white hover:bg-opacity-10 transition-colors duration-300 focus:outline-none focus:ring-2 focus:ring-white focus:ring-opacity-50">
                    <img loading="lazy" src="/images/whatsapp.png" alt="" class="object-contain shrink-0 w-5 sm:w-6 aspect-square" />
                    <span class="uppercase">{{ __('landing.wa_overlay_send_message') }}</span>
                </a>
            </div>
        </header>
    </div>
</div>