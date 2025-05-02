<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - Khdamly</title>
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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cream font-montserrat text-gray-800">
    @include('components.header')
    @include('components.error')

    <!-- Cover Section -->
    <section class="relative h-[300px] bg-luxury-green/5">
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
        </div>
    </section>

    <!-- Profile Section -->
    <section class="relative -mt-16 px-4 sm:px-6 md:px-8 lg:px-12">
        <div class="max-w-3xl mx-auto">
            <div class="flex flex-col items-center">
                <!-- Profile -->
                <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gold shadow-xl relative">
                    <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                        alt="Profile" class="w-full h-full object-cover">
                </div>

                <!-- Profile Info -->
                <div class="text-center mt-6 space-y-3">
                    <div class="flex items-center justify-center gap-2">
                        <h1 class="font-playfair text-3xl sm:text-4xl text-gray-800">Sarah Johnson</h1>
                    </div>
                    <p class="text-gold text-lg sm:text-xl font-cormorant">Art Enthusiast</p>
                    <div class="flex items-center justify-center gap-2 text-gray-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span class="text-sm">Marrakech, Morocco</span>
                    </div>
                    
                    <!-- Stats -->
                    <div class="flex items-center justify-center gap-6 mt-4 text-sm sm:text-base">
                        <div class="flex items-center gap-2">
                            <span class="font-medium">128</span>
                            <span class="text-gray-500">Following</span>
                        </div>
                        <div class="h-4 w-px bg-gray-300"></div>
                        <div class="flex items-center gap-2">
                            <span class="font-medium">256</span>
                            <span class="text-gray-500">Followers</span>
                        </div>
                        <div class="h-4 w-px bg-gray-300"></div>
                        <div class="text-gray-500">Joined April 2023</div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-3 sm:gap-4 mt-6">
                        <button class="w-full sm:w-auto px-8 py-3 bg-luxury-green text-white rounded-xl hover:bg-luxury-green/90 transition duration-300 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                            </svg>
                            Follow
                        </button>
                        <button class="w-full sm:w-auto px-8 py-3 border-2 border-gold text-gold rounded-xl hover:bg-gold/5 transition duration-300 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            Message
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
                <h2 class="font-playfair text-3xl sm:text-4xl text-luxury-green mb-8 text-center">About Me</h2>
                <div class="prose max-w-2xl mx-auto">
                    <p class="text-gray-600 leading-relaxed mb-8 text-lg sm:text-xl text-center">
                        Passionate about traditional Moroccan craftsmanship and art. I love discovering unique pieces and connecting with talented artisans across the country.
                    </p>
                    <p class="text-gray-600 leading-relaxed text-lg sm:text-xl text-center">
                        My collection includes various handcrafted items, from pottery to textiles, each telling a story of our rich cultural heritage.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Favorites -->
    <section class="py-20">
        <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-16">
                <h2 class="font-playfair text-4xl text-luxury-green">Favorite Artisans</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Favorite 1 -->
                <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-16 h-16 rounded-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                                alt="Artisan" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-playfair text-xl text-luxury-green">Ali Br</h3>
                            <p class="text-gray-500">Master Potter</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Specializes in traditional Moroccan pottery with modern influences.</p>
                    <a href="#" class="text-luxury-green hover:text-light-green font-medium">View Profile →</a>
                </div>

                <!-- Favorite 2 -->
                <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-16 h-16 rounded-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                                alt="Artisan" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-playfair text-xl text-luxury-green">Fatima Z</h3>
                            <p class="text-gray-500">Textile Artist</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Creates beautiful handwoven textiles using traditional techniques.</p>
                    <a href="#" class="text-luxury-green hover:text-light-green font-medium">View Profile →</a>
                </div>

                <!-- Favorite 3 -->
                <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-16 h-16 rounded-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                                alt="Artisan" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h3 class="font-playfair text-xl text-luxury-green">Mohammed A</h3>
                            <p class="text-gray-500">Woodworker</p>
                        </div>
                    </div>
                    <p class="text-gray-600 mb-4">Expert in crafting intricate wooden furniture and decor.</p>
                    <a href="#" class="text-luxury-green hover:text-light-green font-medium">View Profile →</a>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
</body>

</html>
