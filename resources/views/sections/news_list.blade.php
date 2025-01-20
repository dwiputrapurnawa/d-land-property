@if (!empty($articles->skip(1)))
<section class="w-full h-full flex">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    
    {{-- Left Column --}}
    @if (count($articles->skip(1)) > 2)
    <section class="text-base font-[405] text-zinc-800 sm:px-0 sm:max-w-none sm:w-full md:max-w-2xl lg:max-w-4xl xl:max-w-6xl">
      <div class="w-full h-full flex flex-col">

        @if (count($articles->skip(1)) == 3)
          @foreach ($articles->skip(1)->reverse()->take(1) as $item)
          <article class="w-full md:w-1/2 mb-16 md:mb-0 border-t md:border-none px-8 py-12 animated-element opacity-0 transition duration-300 ease-in-out">
            <header class="flex flex-wrap justify-between w-[280px] md:w-[258px] gap-5">
              <time datetime="2024-10-07">{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</time>
              <span>{{ __('landing.press_release') }}</span>
            </header>
              <h2 class="mt-4 sm:mt-9 text-2xl sm:text-3xl tracking-wider leading-8 sm:leading-9 mb-10 w-[60%] md:w-full">
                {{ $item->title }}
              </h2>
              <a href="{{ route('news.detail.page', ['news' => $item->slug]) }}" class="flex gap-1.5 items-center mt-4 sm:mt-7 font-[305] text-sm sm:text-base hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-500">
                <span>{{ __('landing.read_article') }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none" aria-hidden="true" class="mt-1">
                  <path d="M14.4375 5.5L9.5625 0.625M14.4375 5.5L9.5625 10.375M14.4375 5.5H0" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </a>
            </article>
          @endforeach
        @endif

        @if (count($articles->skip(1)) == 4)
          @foreach ($articles->skip(1)->reverse()->take(2) as $item)
            @if ($loop->last)
              <article class="w-full md:w-1/2 mb-16 md:mb-0 border-t border-b md:border-none px-8 py-12 animated-element opacity-0 transition duration-300 ease-in-out">
                <header class="flex flex-wrap justify-between w-[280px] md:w-[258px] gap-5">
                  <time datetime="2024-10-07">{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</time>
                  <span>{{ __('landing.press_release') }}</span>
                </header>
                  <h2 class="mt-4 sm:mt-9 text-2xl sm:text-3xl tracking-wider leading-8 sm:leading-9 mb-10 w-[60%] md:w-full">
                    {{ $item->title }}
                  </h2>
                  <a href="{{ route('news.detail.page', ['news' => $item->slug]) }}" class="flex gap-1.5 items-center mt-4 sm:mt-7 font-[305] text-sm sm:text-base hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-500">
                    <span>{{ __('landing.read_article') }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none" aria-hidden="true" class="mt-1">
                      <path d="M14.4375 5.5L9.5625 0.625M14.4375 5.5L9.5625 10.375M14.4375 5.5H0" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                </article>
            @else
              <article class="w-full md:w-1/2 mb-16 md:mb-0 border-t md:border-none px-8 py-12 animated-element opacity-0 transition duration-300 ease-in-out">
                <header class="flex flex-wrap justify-between w-[280px] md:w-[258px] gap-5">
                  <time datetime="2024-10-07">{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</time>
                  <span>{{ __('landing.press_release') }}</span>
                </header>
                  <h2 class="mt-4 sm:mt-9 text-2xl sm:text-3xl tracking-wider leading-8 sm:leading-9 mb-10 w-[60%] md:w-full">
                    {{ $item->title }}
                  </h2>
                  <a href="{{ route('news.detail.page', ['news' => $item->slug]) }}" class="flex gap-1.5 items-center mt-4 sm:mt-7 font-[305] text-sm sm:text-base hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-500">
                    <span>{{ __('landing.read_article') }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none" aria-hidden="true" class="mt-1">
                      <path d="M14.4375 5.5L9.5625 0.625M14.4375 5.5L9.5625 10.375M14.4375 5.5H0" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </a>
                </article>
            @endif
          @endforeach
        @endif


      </div>
    </section>
    @endif
    


        {{-- Right Column --}}
        @if (count($articles->skip(1)) > 0)
        <div class="w-full h-full flex gap-6 grid grid-cols-1 md:grid-cols-2 mb-32 md:mb-2 px-8">
          @foreach ($articles->skip(1)->take(2) as $item)
          <div class="flex flex-col text-base font-[405] max-w-[535px] text-zinc-800 mx-auto px-8 md:px-0 ml-auto mb-4 h-full animated-element opacity-0 transition duration-300 ease-in-out">
            <img
              loading="lazy"
              src="{{ asset("storage/" . $item->image) }}"
              class="object-cover w-[400px] aspect-[1.73] max-md:max-w-full h-[250px] lazy"
              alt="Hotel room or property image related to the article"
            />
            <header class="flex flex-wrap justify-between w-[280px] md:w-[258px] gap-5 mt-6">
              <time datetime="2024-10-07">{{ \Carbon\Carbon::parse($item->created_at)->format('F j, Y') }}</time>
              <span>{{ __('landing.press_release') }}</span>
            </header>
            <h2 class="mt-6 md:mt-9 text-2xl md:text-3xl tracking-wide md:tracking-wider leading-8 md:leading-9 max-md:max-w-full">
              {{ $item->title }}
            </h2>
            <a
              href="{{ route('news.detail.page', ['news' => $item->slug ]) }}"
              class="flex gap-1.5 self-start mt-5 md:mt-7 font-[305] items-center text-sm md:text-base hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-zinc-500"
              aria-label="Read full article about the importance of high quality photos for hotels"
            >
              <span>{{ __('landing.read_article') }}</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="11" viewBox="0 0 15 11" fill="none" aria-hidden="true" class="mt-1">
                <path d="M14.4375 5.5L9.5625 0.625M14.4375 5.5L9.5625 10.375M14.4375 5.5H0" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
        </div>
          @endforeach
      </div>
        @endif
    

  </div>


</section>
@endif