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
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
            <div class="flex justify-between items-center py-5">
                <!-- Logo -->
                <a href="#" class="flex items-center gap-2">
                    <img class="w-8" src="{{ asset('images/logo.svg') }}" alt="Khdamly">
                    <p class="font-playfair text-[#D09A45]">KHDAMLY</p>
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex space-x-8">
                    <a href="#" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#artisans" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                        Artisans
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#how-it-works" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                        How It Works
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                        Categories
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                </nav>
                
                <!-- CTA -->
                <div class="hidden lg:flex items-center space-x-6">
                    <a href="#"
                        class="text-luxury-green hover:text-light-green font-medium transition duration-300">Sign In</a>
                    <a href="#"
                        class="bg-luxury-green hover:bg-light-green text-white font-medium py-2 px-5 rounded-md transition duration-300">Join
                        Now</a>
                </div>
                
                <!-- Hamburger -->
                <button id="mobile-menu-button" class="lg:hidden text-luxury-green focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu"
                class="hidden lg:hidden absolute top-full left-0 right-0 bg-white shadow-lg transition-all duration-300 ease-in-out z-50 pb-5">
                <nav class="flex flex-col space-y-5 p-5">
                    <a href="#" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#artisans" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                        Artisans
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#how-it-works" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                        How It Works
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                        Categories
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="#" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <div class="flex flex-col space-y-3 pt-3 border-t border-gray-200">
                        <a href="#" class="relative text-luxury-green hover:text-light-green font-medium transition duration-300 group">
                            Sign In
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <a href="#" class="bg-luxury-green hover:bg-light-green text-white font-medium py-2 px-5 rounded-md transition duration-300 text-center">
                            Join Now
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

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
    <footer class="bg-stone-900 text-white py-16">
        <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left">
                <div>
                    <div class="flex items-center justify-center gap-2 mb-5">
                        <img class="w-12" src="{{ asset('images/logo.svg') }}" alt="Khdamly">
                    </div>
                    <p class="text-gray-400 text-center">Connecting artisans with art lovers, preserving craftsmanship for
                        generations to come.</p>
                </div>
                <div>
                    <h4 class="font-playfair text-xl text-gold mb-5">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-gold transition duration-300">Home</a>
                        </li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-gold transition duration-300">Artisans</a></li>
                        <li><a href="#"
                                class="text-gray-400 hover:text-gold transition duration-300">Categories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold transition duration-300">About
                                Us</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-playfair text-xl text-gold mb-5">Contact</h4>
                    <ul class="space-y-3">
                        <li class="text-gray-400">Email: info@khdamly.com</li>
                        <li class="text-gray-400">Phone: +212 777 59 18 81</li>
                        <li class="text-gray-400">Address: Oujda, Morocco</li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-playfair text-xl text-gold mb-5">Follow Us</h4>
                    <div class="flex space-x-5 justify-center md:justify-start">
                        <a href="#" class="text-gray-400 hover:text-gold transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gold transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gold transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-stone-800 mt-16 pt-10 text-center text-gray-400">
                <p>&copy; 2023 Khdamly. All rights reserved.</p>
            </div>
        </div>
    </footer>

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
