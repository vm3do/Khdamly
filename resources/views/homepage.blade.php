<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khdamly - Artisan Platform</title>
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
    <style>
        @keyframes expandLine {
            from {
                transform: scaleX(0);
            }

            to {
                transform: scaleX(1);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }
    </style>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-cream font-montserrat text-gray-800">
    <!-- Header -->
    @include('components.header')

    <!-- Hero Section -->
    <section class="overflow-hidden relative min-h-screen lg:max-h-full bg-black">
        <!-- Background Image -->
        <div
            class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1721508490084-1b1de5b230d4?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center opacity-50">
        </div>
        <div
            class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(197,165,114,0.2),rgba(0,0,0,0.8))] mix-blend-overlay">
        </div>

        <!-- Main -->
        <div class="relative z-20 max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto max-h-full">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 min-h-screen items-center mt-12 lg:mt-0">
                <!-- Left -->
                <div class="space-y-8">
                    <div class="space-y-4">
                        <p class="text-gold tracking-widest uppercase text-lg md:text-xl lg:text-2xl">Discover
                            Excellence</p>
                        <div class="w-36 h-0.5 bg-gold origin-left animate-[expandLine_1.5s_ease-out_forwards]"></div>
                        <h1
                            class="font-playfair text-gold text-4xl md:text-5xl lg:text-6xl leading-tight tracking-tight text-center lg:text-left">
                            Where Hands Shape Eternity</h1>
                        <p class="font-cormorant text-light-gold text-xl md:text-2xl mt-4">Where Artisan Excellence
                            Meets Timeless Elegance</p>
                    </div>

                    <div class="flex flex-col lg:flex-row gap-6 mt-12">
                        <a href="#join"
                            class="bg-gold text-stone-900 px-12 py-4 font-semibold uppercase border-2 border-gold hover:bg-light-gold hover:border-light-gold transition duration-300 rounded-md text-center">
                            Join The Community
                        </a>
                    </div>
                </div>

                <!-- Image Frame -->
                <div class="relative flex justify-center items-center">
                    <div
                        class="w-96 h-[500px] md:w-96 md:h-[500px] border-2 border-gold rounded-[200px] overflow-hidden relative animate-[float_6s_ease-in-out_infinite]">
                        <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt="Featured Artisan" class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute hidden lg:block -top-12 -right-12 w-24 h-24 border-2 border-gold rounded-full animate-[float_6s_ease-in-out_infinite]"
                        style="animation-delay: -2s"></div>
                    <div class="absolute -bottom-8 -left-8 w-16 h-16 border-2 border-gold rounded-full animate-[float_6s_ease-in-out_infinite]"
                        style="animation-delay: -4s"></div>
                    <div class="absolute top-1/2 -right-4 w-8 h-8 bg-gold rounded-full animate-[float_6s_ease-in-out_infinite]"
                        style="animation-delay: -1s"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Artisans -->
    <section id="artisans" class="overflow-hidden py-24 bg-white">
        <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
            <div class="text-center mb-20">
                <h2 class="font-playfair text-4xl text-luxury-green mb-5">Featured Artisans</h2>
                <div class="w-24 h-1 bg-gold mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card -->
                <div data-aos="fade-up"
                    class="group flex flex-col h-full bg-white rounded-lg overflow-hidden shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                            alt="Pottery Artisan"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <p class="text-light-gold font-montserrat text-sm">Master Potter</p>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-playfair text-xl text-luxury-green">Ali Br</h3>
                            <div class="flex items-center">
                                <div class="flex">
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <span class="ml-1 text-light-gold text-xs">(48)</span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-6 line-clamp-3">Crafting exquisite pottery with traditional
                            techniques passed down through generations. Each piece tells a story of heritage and
                            craftsmanship.</p>
                        <div class="mt-auto">
                            <a href="#"
                                class="inline-flex items-center text-luxury-green hover:text-light-green font-medium text-sm transition-colors duration-300">
                                View Profile
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div data-aos="fade-up"
                    class="group flex flex-col h-full bg-white rounded-lg overflow-hidden shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1684259499086-93cb3e555803?q=80&w=1924&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Textile Artisan"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <p class="text-light-gold font-montserrat text-sm">Textile Designer</p>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-playfair text-xl text-luxury-green">Fatima Zahrae</h3>
                            <div class="flex items-center">
                                <div class="flex">
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <span class="ml-1 text-light-gold text-xs">(36)</span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-6 line-clamp-3">Creating luxurious textiles with intricate patterns
                            inspired by cultural heritage. Each design is a masterpiece of color and tradition.</p>
                        <div class="mt-auto">
                            <a href="#"
                                class="inline-flex items-center text-luxury-green hover:text-light-green font-medium text-sm transition-colors duration-300">
                                View Profile
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div data-aos="fade-up"
                    class="group flex flex-col h-full bg-white rounded-lg overflow-hidden shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1626081063434-79a2169791b1?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Woodworker"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6">
                            <p class="text-light-gold font-montserrat text-sm">Master Woodworker</p>
                        </div>
                    </div>
                    <div class="flex flex-col flex-grow p-6">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="font-playfair text-xl text-luxury-green">Mohammed Ayadi</h3>
                            <div class="flex items-center">
                                <div class="flex">
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                </div>
                                <span class="ml-1 text-light-gold text-xs">(52)</span>
                            </div>
                        </div>
                        <p class="text-gray-600 text-sm mb-6 line-clamp-3">Crafting bespoke furniture and decorative pieces
                            from the finest woods. Each creation is a testament to timeless craftsmanship.</p>
                        <div class="mt-auto">
                            <a href="#"
                                class="inline-flex items-center text-luxury-green hover:text-light-green font-medium text-sm transition-colors duration-300">
                                View Profile
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 ml-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-16">
                <a href="#"
                    class="inline-block border-2 border-luxury-green text-luxury-green hover:bg-luxury-green hover:text-white font-semibold py-3 px-10 rounded-md transition duration-300">View
                    All Artisans</a>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="overflow-hidden py-24 bg-cream">
        <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
            <div class="text-center mb-20">
                <h2 class="font-playfair text-4xl text-luxury-green mb-5">How Khdamly Works</h2>
                <div class="w-24 h-1 bg-gold mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div data-aos="fade-right"
                  class="text-center p-8 border border-gold rounded-lg bg-white">
                    <div
                        class="w-20 h-20 bg-luxury-green text-gold rounded-full flex items-center justify-center mx-auto mb-8 text-2xl font-playfair">
                        1</div>
                    <h3 class="font-playfair text-xl text-luxury-green mb-5">Discover Artisans</h3>
                    <p class="text-gray-600">Browse our curated collection of master artisans specializing in various
                        crafts.</p>
                </div>
                
                <!-- Step 2 -->
                <div data-aos="fade-up" class="text-center p-8 border border-gold rounded-lg bg-white">
                    <div
                        class="w-20 h-20 bg-luxury-green text-gold rounded-full flex items-center justify-center mx-auto mb-8 text-2xl font-playfair">
                        2</div>
                    <h3 class="font-playfair text-xl text-luxury-green mb-5">Connect & Collaborate</h3>
                    <p class="text-gray-600">Connect with artisans to discuss your vision and commission custom pieces.
                    </p>
                </div>
                
                <!-- Step 3 -->
                <div data-aos="fade-left" class="text-center p-8 border border-gold rounded-lg bg-white">
                    <div
                        class="w-20 h-20 bg-luxury-green text-gold rounded-full flex items-center justify-center mx-auto mb-8 text-2xl font-playfair">
                        3</div>
                    <h3 class="font-playfair text-xl text-luxury-green mb-5">Receive Your Masterpiece</h3>
                    <p class="text-gray-600">Enjoy your handcrafted masterpiece, created with passion and expertise.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="overflow-hidden py-24 bg-white">
        <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
            <div class="text-center mb-20">
                <h2 class="font-playfair text-4xl text-luxury-green mb-5">Artisan Categories</h2>
                <div class="w-24 h-1 bg-gold mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Category 1 -->
                <div data-aos="fade-up"
                    class="group relative h-80 rounded-lg overflow-hidden shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] hover:shadow-2xl transition-all duration-500">
                    <div class="overflow-hidden h-full">
                        <img src="{{ asset('images/pottery.png') }}" alt="Pottery"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="font-playfair text-2xl text-white mb-2">Pottery</h3>
                        <p
                            class="text-light-gold font-montserrat text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Traditional & Contemporary Ceramics</p>
                    </div>
                </div>
                
                <!-- Category 2 -->
                <div data-aos="fade-up"
                    class="group relative h-80 rounded-lg overflow-hidden shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] hover:shadow-2xl transition-all duration-500">
                    <div class="overflow-hidden h-full">
                        <img src="{{ asset('images/textiles.png') }}" alt="Textiles"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="font-playfair text-2xl text-white mb-2">Textiles</h3>
                        <p
                            class="text-light-gold font-montserrat text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Luxurious Fabrics & Patterns</p>
                    </div>
                </div>
                
                <!-- Category 3 -->
                <div data-aos="fade-up"
                    class="group relative h-80 rounded-lg overflow-hidden shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] hover:shadow-2xl transition-all duration-500">
                    <div class="overflow-hidden h-full">
                        <img src="{{ asset('images/woodwork.png') }}" alt="Woodwork"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="font-playfair text-2xl text-white mb-2">Woodwork</h3>
                        <p
                            class="text-light-gold font-montserrat text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Fine Furniture & Decor</p>
                    </div>
                </div>
                
                <!-- Category 4 -->
                <div data-aos="fade-up"
                    class="group relative h-80 rounded-lg overflow-hidden shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] hover:shadow-2xl transition-all duration-500">
                    <div class="overflow-hidden h-full">
                        <img src="{{ asset('images/jewelry.png') }}" alt="Jewelry"
                            class="w-full h-full object-cover transition duration-700 group-hover:scale-110">
                    </div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent opacity-80 group-hover:opacity-90 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute bottom-0 left-0 p-8 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                        <h3 class="font-playfair text-2xl text-white mb-2">Jewelry</h3>
                        <p
                            class="text-light-gold font-montserrat text-sm opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            Exquisite Handcrafted Pieces</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <section class="py-24 bg-cream">
    <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
            <div class="text-center mb-20">
            <h2 class="font-playfair text-4xl text-luxury-green mb-5">Client Reviews</h2>
                <div class="w-24 h-1 bg-gold mx-auto"></div>
            </div>
            
        <div class="overflow-hidden grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Review 1 -->
            <div data-aos="fade-right"
                class="group bg-white p-8 rounded-lg border border-gold shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] hover:shadow-xl transition-all duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 rounded-full bg-light-gold flex items-center justify-center mr-5">
                            <span class="font-playfair text-2xl text-luxury-green">N</span>
                        </div>
                        <div>
                            <h4 class="font-playfair text-xl text-luxury-green">Nour El-Din</h4>
                            <p class="text-gray-500">Fes, Morocco</p>
                        <div class="flex items-center mt-2">
                            <div class="flex">
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <span class="ml-2 text-light-gold text-sm">5.0</span>
                        </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The pottery pieces I commissioned from Ahmed Hassan exceeded my expectations. The attention to detail and craftsmanship is truly remarkable. Khdamly made the entire process seamless."</p>
                </div>
                
            <!-- Review 2 -->
            <div data-aos="fade-left"
                class="group bg-white p-8 rounded-lg border border-gold shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] hover:shadow-xl transition-all duration-300">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 rounded-full bg-light-gold flex items-center justify-center mr-5">
                            <span class="font-playfair text-2xl text-luxury-green">L</span>
                        </div>
                        <div>
                            <h4 class="font-playfair text-xl text-luxury-green">Layla</h4>
                            <p class="text-gray-500">Rabat, Morocco</p>
                        <div class="flex items-center mt-2">
                            <div class="flex">
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <svg class="w-4 h-4 text-gold" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                            </div>
                            <span class="ml-2 text-light-gold text-sm">5.0</span>
                        </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Fatima's textile designs are simply breathtaking. The custom table runner she created for my home is now the centerpiece of my dining room. I couldn't be happier with the result."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-24 bg-luxury-green text-white">
        <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto text-center">
            <h2 class="font-playfair text-4xl mb-8">Ready to Discover Exceptional Artisans?</h2>
            <p class="text-light-gold text-xl mb-10 max-w-2xl mx-auto">Join our community of art lovers and connect
                with master artisans who bring your vision to life.</p>
            <div class="flex flex-col md:flex-row gap-6 justify-center">
                <a href="#"
                    class="bg-gold hover:bg-light-gold text-luxury-green font-semibold py-3 px-8 rounded-md transition duration-300">Join
                    as a Client</a>
                <a href="#"
                    class="border-2 border-gold text-gold hover:bg-gold hover:text-luxury-green font-semibold py-3 px-8 rounded-md transition duration-300">Join
                    as an Artisan</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            
            mobileMenuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>
