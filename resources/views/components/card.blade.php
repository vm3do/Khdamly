<div data-aos="fade-up"
    class="group flex flex-col h-full bg-white rounded-lg overflow-hidden shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] hover:shadow-xl transition-all duration-300">
    <div class="relative h-64 overflow-hidden">
        <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
            alt="Pottery Artisan"
            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
        <div class="absolute bottom-0 left-0 p-6">
            <p class="text-light-gold font-montserrat text-sm">{{$job}}</p>
        </div>
    </div>
    <div class="flex flex-col flex-grow p-6">
        <div class="flex items-center justify-between mb-4">
            <h3 class="font-playfair text-xl text-luxury-green">{{$name}}</h3>

            <div class="flex items-center">
                <div class="flex">
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $rating)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-luxury-green" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927C11.469 1.107 12.531 1.107 12.951 2.927L14.5 7h4.5c1.8 0 2.55 2.3 1.1 3.4l-3.6 2.6L17 18c0 .8-.7 1-1.2.6L12 16l-3.8 2.6C7.7 19 7 18.8 7 18l1-4.9L4.5 10c-1.5-1-1-3.4 1-3.4h4l1.5-4z" />
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11.049 2.927C11.469 1.107 12.531 1.107 12.951 2.927L14.5 7h4.5c1.8 0 2.55 2.3 1.1 3.4l-3.6 2.6L17 18c0 .8-.7 1-1.2.6L12 16l-3.8 2.6C7.7 19 7 18.8 7 18l1-4.9L4.5 10c-1.5-1-1-3.4 1-3.4h4l1.5-4z" />
                            </svg>
                        @endif
                    @endfor
                    
                </div>
                <span class="ml-1 text-light-gold text-xs">(48)</span>
            </div>
        </div>
        <p class="text-gray-600 text-sm mb-6 line-clamp-3">Crafting exquisite pottery with traditional
            {{$description}}.</p>
        <div class="mt-auto">
            <a href="{{$link}}"
                class="inline-flex items-center text-luxury-green hover:text-light-green font-medium text-sm transition-colors duration-300">
                View Profile
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</div>
