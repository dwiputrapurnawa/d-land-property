
@if(empty($headlineArticles))
    <div class="flex items-center justify-center justify-items-center py-auto md:py-28 animated-element opacity-0 transition duration-300 ease-in-out">
        <div class="text-center">
        <h1 class="text-3xl font-semibold text-gray-700 mb-4">{{ __('landing.no_news_available_text_1') }}</h1>
        <p class="text-gray-500 mb-6">{{ __('landing.no_news_available_text_2') }}</p>
        </div>
    </div>
@else
    <section class="px-8 py-12 mb-[10%]">
        <div class="flex flex-col md:flex-row gap-5">
            <div class="w-full md:w-[70%] animated-element opacity-0 transition duration-300 ease-in-out">
                <img loading="lazy" src="{{ $headlineArticles->image }}" alt="D'Land Villa Mumbul exterior view" class="object-cover w-full aspect-[1.78]">
            </div>
            <article class="w-full md:w-[30%] mt-6 md:mt-0 md:ml-5 px-4">
                <div class="flex flex-col items-start w-full text-base font-normal text-zinc-800 animated-element opacity-0 transition duration-300 ease-in-out">
                    <header class="flex flex-wrap justify-between w-[280px] md:w-[258px] gap-5">
                        <time datetime="2024-10-07">{{ \Carbon\Carbon::parse($headlineArticles->created_at)->format('F j, Y') }}
                        </time>
                        <span>{{ __('landing.press_release') }}</span>
                    </header>
                    <h1 class="mt-9 text-3xl md:text-4xl tracking-wider leading-tight">
                         {{ $headlineArticles->title }}
                    </h1>

                    <a href="{{ route('news.detail.page', ['news' => $headlineArticles->slug]) }}" class="flex items-center gap-1.5 mt-10 font-light hover:underline focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" aria-label="Read full article about D'Land Villa Mumbul">
                        <span>{{ __('landing.read_article') }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ml-2 w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                </div>
            </article>
        </div>
    </section>
@endif



