<footer class="flex flex-col bg-neutral-900 text-white">
    <div class="flex flex-col pb-6 w-full max-w-[1686px] mx-auto px-4 lg:px-8">
      <div class="flex flex-wrap gap-10 mt-24 md:mt-10 animated-element opacity-0 transition duration-300 ease-in-out">
        <section class="w-full lg:w-1/3">
          <img loading="lazy" src="/images/logo.png" alt="D'Land Property Logo" class="object-contain w-[66px] aspect-[0.85]" />
          <h2 class="mt-12 text-4xl leading-tight">
            {{ __('landing.footer_title_1') }} <span class="italic font-medium">{{ __('landing.footer_title_2') }}</span> {{ __('landing.footer_title_3') }} <span class="italic font-medium">{{ __('landing.footer_title_4') }}</span>
          </h2>
          <div class="flex flex-wrap gap-5 mt-16 text-sm tracking-wide font-[405]">
            <div class="flex items-center gap-3">
              <img loading="lazy" src="/images/telephone.png" alt="Phone icon" class="w-5 h-5" />
              <a href="tel:+621234567890" class="hover:underline">+{{ $company->phone }}</a>
            </div>
            <div class="flex items-center gap-4">
              <img loading="lazy" src="/images/whatsapp.png" alt="WhatsApp icon" class="w-6 h-6" />
              <span>WHATSAPP</span>
            </div>
          </div>
        </section>
        <nav class="w-full lg:w-1/4 mt-10 lg:mt-0">
          <ul class="flex flex-col gap-5 list-none p-0">
            <li><a href="#section_projects" class="hover:underline">{{ __('landing.navbar_project') }}</a></li>
            <li><a href="#section_about_us" class="hover:underline">{{ __('landing.navbar_about_us') }}</a></li>
            <li><a href="#section_management" class="hover:underline">{{ __('landing.navbar_managements') }}</a></li>
            <li><a href="#section_about_bali" class="hover:underline">{{ __('landing.navbar_about_bali') }}</a></li>
            <li><a href="#section_news" class="hover:underline">{{ __('landing.navbar_news') }}</a></li>
            <li><a href="#section_request_call" class="hover:underline">{{ __('landing.navbar_request_call') }}</a></li>
          </ul>
        </nav>
        <div class="w-full lg:w-1/3 mt-10 lg:mt-0">
          <section>
            <h3 class="text-base tracking-wider font-[420]">{{ __('landing.contacts_text') }}</h3>
            <a href="mailto:info.dlandproperty@gmail.com" class="block mt-3.5 hover:underline">{{ $company->email }}</a>
            <a href="tel:+621234567890" class="block mt-3.5 hover:underline">+{{ $company->phone }}</a>
            <h3 class="mt-12 text-base tracking-wider font-[420]">{{ __('landing.head_office_text') }}</h3>
            <address class="mt-3.5 not-italic">
              {{ $company->address }}
            </address>
          </section>
          <div class="mt-20 border-t border-zinc-800"></div>
          <section class="mt-9">
            <h3 class="text-base tracking-wider font-[420]">{{ __('landing.social_footer_text') }}</h3>
            <ul class="list-none p-0 mt-16">
              <li class="flex items-center gap-5 mt-5">
                <img loading="lazy" src="/images/instagram.png" alt="Instagram icon" class="w-6 h-6" />
                <a href="{{ $company->instagram }}" class="hover:underline">Instagram</a>
              </li>
              <li class="flex items-center gap-5 mt-5">
                <img loading="lazy" src="/images/youtube.png" alt="YouTube icon" class="w-6 h-6" />
                <a href="{{ $company->youtube }}" class="hover:underline">Youtube</a>
              </li>
              <li class="flex items-center gap-5 mt-5">
                <img loading="lazy" src="/images/whatsapp.png" alt="WhatsApp icon" class="w-6 h-6" />
                <a href="https://wa.me/{{ $company->phone }}" class="hover:underline">Whatsapp</a>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </div>
    <div class="border-t border-zinc-800 mt-12"></div>
    <p class="text-sm tracking-wide font-[405] text-zinc-400 mt-12 mb-6 px-4 lg:px-8">
      {{ __('landing.footer_text') }}
    </p>
  </footer>