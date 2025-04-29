<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Profile - Khdamly</title>
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/favicon/site.webmanifest" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cream font-montserrat text-gray-800">
    @include('components.header')

    <!-- Cover Section -->
    <section class="relative h-[200px] bg-luxury-green/5">
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                alt="Cover" class="w-full h-full object-cover opacity-90">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
        </div>
        <!-- Options Menu -->
        <div class="absolute top-4 right-4">
            <button class="p-2 rounded-full bg-black/10 backdrop-blur-sm hover:bg-white/20 transition-all duration-300 group">
                <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                </svg>
            </button>
            <!-- Dropdown Menu -->
            <div class="hidden group-hover:block absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg border border-gold/10 overflow-hidden">
                <button class="w-full px-4 py-3 text-left text-sm text-red-600 hover:bg-gray-50 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                    </svg>
                    Report Profile
                </button>
            </div>
        </div>
    </section>

    <!-- Profile Section -->
    <section class="relative -mt-16 px-4 sm:px-6 md:px-8 lg:px-12">
        <div class="max-w-3xl mx-auto">
            <div class="flex flex-col items-center">
                <!-- Profile Picture -->
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gold shadow-xl relative">
                    <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                        alt="Artisan" class="w-full h-full object-cover">
                </div>

                <!-- Profile Info -->
                <div class="text-center mt-6 space-y-3">
                    <div class="flex items-center justify-center gap-2">
                        <h1 class="font-playfair text-3xl sm:text-4xl text-gray-800">{{$artisan->name}}</h1>
                        <svg class="w-6 h-6 text-gold" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="text-gold text-lg sm:text-xl font-cormorant">{{$artisan->category->name}}</p>
                    <div class="flex items-center justify-center gap-2 text-gray-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-sm">{{$artisan->city}}, Morocco</span>
                    </div>
                    
                    <!-- Stats -->
                    <div class="flex items-center justify-center gap-6 mt-4 text-sm sm:text-base">
                        <div class="flex items-center gap-1">
                            <svg class="w-5 h-5 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <span class="font-medium">4.8</span>
                            <span class="text-gray-500">(48)</span>
                        </div>
                        <div class="h-4 w-px bg-gray-300"></div>
                        <div class="text-gray-500">Joined {{$artisan->created_at->format('F Y')}}</div>
                    </div>

                    <!-- Call to Action -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 mt-6">
                        <button class="w-full sm:w-auto px-8 py-3 bg-luxury-green text-white rounded-xl hover:bg-luxury-green/90 transition duration-300 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Send Request
                        </button>
                        <button class="w-full sm:w-auto px-8 py-3 border-2 border-gold text-gold rounded-xl hover:bg-gold/5 transition duration-300 flex items-center justify-center gap-2">
                            Commission Work
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="py-16 px-4 sm:px-6 md:px-8 lg:px-12">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl p-8 sm:p-12 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <h2 class="font-playfair text-3xl sm:text-4xl text-luxury-green mb-8 text-center">About the Artisan</h2>
                <div class="prose max-w-2xl mx-auto">
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg sm:text-xl text-center">
                        {{$artisan->bio}}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section class="py-20">
        <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-16">
                <h2 class="font-playfair text-4xl text-luxury-green">Portfolio</h2>
            </div>
            
            <!-- Carousel -->
            <div class="swiper portfolio-swiper">
                <div class="swiper-wrapper">
                    
                    @foreach ($artisan->portfolio as $portfolio)
                    <div class="swiper-slide">
                        <div class="group relative aspect-[16/9] rounded-3xl overflow-hidden">
                            <img src="{{asset('storage/' . $portfolio->path)}}" 
                                alt="Pottery Work" class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-0 group-hover:opacity-100 transition duration-700">
                                <div class="absolute bottom-0 left-0 right-0 p-10">
                                    <h3 class="text-white text-4xl font-playfair mb-3">Tea Set</h3>
                                    <p class="text-gold text-xl font-cormorant mb-6">Hand-painted with gold accents</p>
                                    <div class="flex items-center gap-3">
                                        <span class="text-white/80 text-lg">Starting from</span>
                                        <span class="text-gold font-medium text-2xl">$250</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Navigation -->
                <div class="swiper-button-next text-gold"></div>
                <div class="swiper-button-prev text-gold"></div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <section class="py-20 bg-white">
        <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-12">
                <h2 class="font-playfair text-3xl text-luxury-green">Client Reviews</h2>
                <button class="mt-4 md:mt-0 px-6 py-3 border-2 border-gold text-gold rounded-lg hover:bg-gold/5 transition duration-300">
                    Write a Review
                </button>
            </div>
            {{-- {{dd($artisan->toArray())}} --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Reviews -->
                @foreach ($reviews as $review)
                <div class="bg-cream rounded-2xl p-6 shadow-lg">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                                alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-medium text-gray-800">{{$review->client->name}}</h4>
                            <div class="flex items-center gap-1">
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                                <span class="text-sm text-gray-600">{{$review->rating}}.0</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic mb-4">"{{$review->comment}}"</p>
                    <p class="text-sm text-gray-500">Purchased: Traditional Vase</p>
                </div>
                @endforeach
            
            </div>
            <div class="mt-12">{{$reviews->links()}}</div>
        </div>
    </section>

    @include('components.footer')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        AOS.init();

        //  Swiper
        const swiper = new Swiper('.portfolio-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 1,
                },
                1024: {
                    slidesPerView: 1,
                },
            }
        });
    </script>
</body>

</html>