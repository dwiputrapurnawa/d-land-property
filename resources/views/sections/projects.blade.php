<section id="section_projects" class="flex flex-col">
    
  <div class="flex flex-col items-center justify-center md:px-24 px-4 text-center">
    <h2 data-layername="ourProjects" class="self-center text-6xl font-[405] text-zinc-800 max-md:max-w-full max-md:text-4xl mb-10 mt-24 sm:mt-32">
      {{ __('landing.our_project_title_1') }} 
      <span class="italic font-medium font-century">{{ __('landing.our_project_title_2') }}</span>
    </h2>
  </div>
  

    
    {{-- <hr class="sm:hidden block border-gray-400"> --}}


      <div class="grid grid-cols-1 gap-3 md:grid-cols-2 md:px-24">

        @foreach ($projects as $project)
        <div class="flex flex-col px-4 md:px-8 lg:px-0 w-full max-w-[700px] mb-10 border-t border-gray-400 md:border-none py-12 md:py-auto @if($loop->last) border-b @endif">    
          <div class="relative w-full">
              <img loading="lazy" src="{{ asset('storage/' . $project->image) }}" class="object-contain w-full aspect-[1.63] animated-element opacity-0 transition duration-300 ease-in-out" alt="Project visual representation" />
              
              
              <!-- Button container positioned at the bottom-right for large screens and centered on mobile -->
              <div class="hidden md:block box absolute bottom-0 md:right-4 right-1/2 transform md:translate-x-0 translate-x-1/2 translate-y-1/2 bg-transparent backdrop-blur-lg px-4 md:px-5 pt-8 md:pt-10 pb-12 md:pb-20 ">
                <a href="/">
                    <span class="text-xs md:text-sm px-1.5 py-0.5 md:px-6 md:py-3 border border-white text-white rounded-full font-semibold bg-transparent backdrop-blur-md shadow-lg hover:bg-opacity-20 hover:bg-zinc-700 block text-sm">{{ __('landing.view_project') }}</span>
                </a>
            </div>
            
          </div>
      
          <h2 class="mt-6 text-3xl font-large font-bold text-left w-full animated-element opacity-0 transition duration-300 ease-in-out font-century">{{ $project->title }}</h2>
  
          <p class="mt-2 text-left w-full text-lg md:text-base animated-element opacity-0 transition duration-300 ease-in-out font-semibold">{{ $project->subtitle }}</p>
          <p class="mt-2 text-left w-full text-xs md:text-sm text-zinc-400 animated-element opacity-0 transition duration-300 ease-in-out">ROI of {{ $project->roi }}%</p>
          
          <!-- Enforcing left alignment for article content -->
          <article class="mt-6 mb-4 text-xs md:text-sm lg:text-base tracking-wide font-normal w-full text-left max-w-[456px] animated-element opacity-0 transition duration-300 ease-in-out">
              <p>{!! \Illuminate\Support\Str::limit($project->description, 300, '') !!}</p>
          </article>

          <div class="flex w-full flex-col text-sm tracking-wide text-center font-[410] text-zinc-800 animated-element opacity-0 transition duration-300 ease-in-out sm:hidden">
            <a
              href="#"
              class="px-16 py-3.5 w-full border border-solid border-zinc-800 rounded-[30px] hover:bg-zinc-100 focus:outline-none focus:ring-2 focus:ring-zinc-800 focus:ring-offset-2 transition-colors"
              role="button"
              aria-label="View Project"
            >
              {{ __('landing.view_project') }}
            </a>
          </div>
          
      </div>
        @endforeach
        
        
      </div>
  
      @if ($projects->isEmpty())
      <div class="flex items-center justify-center justify-items-center py-auto md:py-24">
        <div class="text-center">
          <h1 class="text-3xl font-semibold text-gray-700 mb-4">{{ __('landing.no_project_available_text_1') }}</h1>
          <p class="text-gray-500 mb-6">{{ __('landing.no_project_available_text_2') }}</p>
        </div>
      </div>
      @endif
   
  </section>