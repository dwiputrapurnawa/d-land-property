<section id="section_projects" class="flex flex-col">
    <h2 data-layername="ourProjects" class="self-center text-8xl font-[405] text-zinc-800 max-md:max-w-full max-md:text-4xl">
      {{ __('landing.our_project_title_1') }} <span class="italic font-medium">{{ __('landing.our_project_title_2') }}</span>
    </h2>

    <div class="grid grid-cols-2 px-10 mt-10 gap-3">

      @foreach ($projects as $project)
      <div class="flex flex-col px-4 md:px-8 lg:px-0 w-full max-w-[700px]">    
        <div class="relative w-full">
            <img loading="lazy" src="{{ asset('storage/' . $project->image) }}" class="object-contain w-full aspect-[1.63] animated-element opacity-0 transition duration-300 ease-in-out" alt="Project visual representation" />
            
            <!-- Button container positioned at the bottom-right for large screens and centered on mobile -->
            <div class="box absolute bottom-0 md:right-4 right-1/2 transform md:translate-x-0 translate-x-1/2 translate-y-1/2 bg-transparent backdrop-blur-lg px-4 md:px-5 pt-8 md:pt-10 pb-12 md:pb-20 ">
              <a href="/">
                  <span class="text-xs md:text-sm px-1.5 py-0.5 md:px-6 md:py-3 border border-white text-white rounded-full font-semibold bg-transparent backdrop-blur-md shadow-lg hover:bg-opacity-20 block text-sm">{{ __('landing.view_project') }}</span>
              </a>
          </div>
          
          
        </div>
    
        <h2 class="mt-6 text-base md:text-lg font-medium text-left w-full animated-element opacity-0 transition duration-300 ease-in-out">{{ $project->title }}</h2>
        <p class="mt-2 text-left w-full text-sm md:text-base animated-element opacity-0 transition duration-300 ease-in-out">{{ $project->subtitle }}</p>
        <p class="mt-2 text-left w-full text-xs md:text-sm text-zinc-400 animated-element opacity-0 transition duration-300 ease-in-out">ROI of {{ $project->roi }}%</p>
        
        <!-- Enforcing left alignment for article content -->
        <article class="mt-6 text-xs md:text-sm lg:text-base tracking-wide font-normal w-full text-left max-w-[456px] animated-element opacity-0 transition duration-300 ease-in-out">
            <p>{!! \Illuminate\Support\Str::limit($project->description, 300, '') !!}</p>
        </article>
    </div>
      @endforeach
      
      
    </div>
  </section>