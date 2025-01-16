<footer class="flex flex-col bg-black text-white z-50">

  <div class="flex flex-wrap gap-10 animated-element opacity-0 transition duration-300 ease-in-out border-b border-zinc-800 border-t">
    <section class="w-full lg:w-1/3 border-r border-zinc-800">
      <div class="p-10 border-b border-zinc-800 md:border-none">
        <img loading="lazy" src="/images/logo.webp" alt="D'Land Property Logo" class="object-contain w-[66px] aspect-[0.85]" />
        <h2 class="mt-12 text-4xl leading-tight lg:max-w-[450px]">
          {{ __('landing.footer_title_1') }} <span class="italic font-medium font-century">{{ __('landing.footer_title_2') }}</span> {{ __('landing.footer_title_3') }} <span class="italic font-medium font-century">{{ __('landing.footer_title_4') }}</span>
        </h2>
        <div class="flex flex-wrap gap-5 mt-16 text-sm tracking-wide font-[405]">
          <div class="flex items-center gap-3">
            <img loading="lazy" src="/images/telephone.webp" alt="Phone icon" class="w-5 h-5" />
            <a href="tel:{{ $company->phone }} class="hover:underline">{{ $company->phone }}</a>
          </div>
          <div class="flex items-center gap-4">
            <img loading="lazy" src="/images/whatsapp.webp" alt="WhatsApp icon" class="w-6 h-6" />
            <span>WHATSAPP</span>
          </div>
        </div>
      </div>
    </section>
    <nav class="w-full lg:w-1/4 mt-10 lg:mt-0 lg:pt-36 px-10">
      <ul class="flex flex-col gap-5 list-none">
        <li><a href="{{ route('projects.page') }}" class="underline-animation uppercase">{{ __('landing.navbar_project') }}</a></li>
        <li><a href="{{ route('about.us.page') }}" class="underline-animation uppercase">{{ __('landing.navbar_about_us') }}</a></li>
        <li><a href="{{ route('management.page') }}" class="underline-animation uppercase">{{ __('landing.navbar_managements') }}</a></li>
        <li><a href="{{ route('about.bali.page') }}" class="underline-animation uppercase">{{ __('landing.navbar_about_bali') }}</a></li>
        <li><a href="{{ route('news.page') }}" class="underline-animation uppercase">{{ __('landing.navbar_news') }}</a></li>
        <li><button class="underline-animation openRequestCallModalBtn uppercase">{{ __('landing.navbar_request_call') }}</button></li>
      </ul>
    </nav>
    <div class="w-full lg:w-1/3 mt-10 lg:mt-0 border-l border-zinc-800">
      <section class="p-10 border-t md:border-none border-zinc-800">
        <h3 class="text-base tracking-wider font-[420] font-bold">{{ __('landing.contacts_text') }}</h3>
        <a href="mailto:info.dlandproperty@gmail.com" class="block mt-3.5 hover:underline">{{ $company->email }}</a>
        <a href="tel:{{ $company->phone }}" class="block mt-3.5 hover:underline">{{ $company->phone }}</a>
        <h3 class="mt-12 text-base tracking-wider font-[420] font-bold">{{ __('landing.head_office_text') }}</h3>
        <address class="mt-3.5 not-italic">
          {{ $company->address }}
        </address>
      </section>
      <section class="mt-9 border-t border-zinc-800">
        <div class="p-10">
          <h3 class="text-base tracking-wider font-[420] font-bold">{{ __('landing.social_footer_text') }}</h3>
        <ul class="list-none p-0 mt-16">
          <li class="flex items-center gap-5 mt-5">
            <img loading="lazy" src="/images/instagram.webp" alt="Instagram icon" class="w-6 h-6" />
            <a href="{{ $company->instagram }}" class="hover:underline">Instagram</a>
          </li>
          <li class="flex items-center gap-5 mt-5">
            <img loading="lazy" src="/images/youtube.webp" alt="YouTube icon" class="w-6 h-6" />
            <a href="{{ $company->youtube }}" class="hover:underline">Youtube</a>
          </li>
          <li class="flex items-center gap-5 mt-5">
            <img loading="lazy" src="/images/whatsapp.webp" alt="WhatsApp icon" class="w-6 h-6" />
            <a href="https://wa.me/{{ str_replace([' ', '-'], '', $company->phone) }}" class="hover:underline">Whatsapp</a>
          </li>
        </ul>
        </div>
      </section>
    </div>
  </div>
    <p class="text-sm tracking-wide font-[405] text-zinc-400 mt-12 mb-6 px-4 lg:px-8 text-center sm:text-start">
      {{ __('landing.footer_text') }}
    </p>
  </footer>