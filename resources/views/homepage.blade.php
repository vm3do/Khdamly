<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khdamly - Artisan Platform</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .gold-border {
            border: 1px solid #c5a572;
        }
        .gold-shadow {
            box-shadow: 0 4px 6px -1px rgba(197, 165, 114, 0.2), 0 2px 4px -1px rgba(197, 165, 114, 0.1);
        }
        .mobile-menu {
            transition: all 0.3s ease-in-out;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: white;
            z-index: 50;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
        }
        .logo-svg {
            width: 120px;
            height: auto;
        }
        
        /* Container Styles */
        .container {
            max-width: 1400px;
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }
        @media (min-width: 1024px) {
            .container {
                padding-left: 4rem;
                padding-right: 4rem;
            }
        }
        @media (min-width: 1280px) {
            .container {
                padding-left: 6rem;
                padding-right: 6rem;
            }
        }
        
        /* Hero Styles */
        .hero-oval-frame {
            width: 400px;
            height: 500px;
            border: 2px solid #c5a572;
            border-radius: 200px;
            overflow: hidden;
            position: relative;
        }
        
        .hero-title {
            font-size: clamp(3rem, 8vw, 6rem);
            line-height: 1.1;
            letter-spacing: -0.02em;
        }
        
        .hero-subtitle {
            font-size: clamp(1.2rem, 3vw, 1.8rem);
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }
        
        .decorative-line {
            width: 150px;
            height: 2px;
            background: #c5a572;
            transform-origin: left;
            animation: expandLine 1.5s ease-out forwards;
        }
        
        .floating-element {
            animation: float 6s ease-in-out infinite;
        }

        /* Button Styles */
        .cta-primary {
            background: #c5a572;
            color: #000;
            padding: 1rem 2.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid #c5a572;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .cta-primary:hover {
            background: #d4b285;
            border-color: #d4b285;
            transform: translateY(-2px);
        }
        
        .cta-secondary {
            background: transparent;
            color: #c5a572;
            padding: 1rem 2.5rem;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 2px solid #c5a572;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .cta-secondary:hover {
            background: rgba(197, 165, 114, 0.1);
            transform: translateY(-2px);
        }
        
        @keyframes expandLine {
            from { transform: scaleX(0); }
            to { transform: scaleX(1); }
        }
        
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0px); }
        }
        
        .hero-gradient {
            background: linear-gradient(to right, rgba(0,0,0,0.9), rgba(0,0,0,0.7));
        }
        
        .hero-image-overlay {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at center, rgba(197, 165, 114, 0.2), rgba(0,0,0,0.8));
            mix-blend-mode: overlay;
        }

        @media (max-width: 768px) {
            .hero-oval-frame {
                width: 280px;
                height: 350px;
            }
            .container {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            .cta-primary, .cta-secondary {
                width: 100%;
                text-align: center;
            }
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-cream font-montserrat text-gray-800">
    <!-- Header -->
    <header class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto">
            <div class="flex justify-between items-center py-5">
                <!-- Logo -->
                <a href="#" class="flex items-center gap-2">
                    <img class="h-12" src="{{ asset('images/logo.svg') }}" alt="Khdamly" class="logo-svg">
                    <p class="font-playfair text-[#D09A45]">KHDAMLY</p>
                </a>
                
                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex space-x-10">
                    <a href="#" class="text-gray-700 hover:text-luxury-green font-medium transition duration-300">Home</a>
                    <a href="#artisans" class="text-gray-700 hover:text-luxury-green font-medium transition duration-300">Artisans</a>
                    <a href="#how-it-works" class="text-gray-700 hover:text-luxury-green font-medium transition duration-300">How It Works</a>
                    <a href="#" class="text-gray-700 hover:text-luxury-green font-medium transition duration-300">Categories</a>
                    <a href="#" class="text-gray-700 hover:text-luxury-green font-medium transition duration-300">Contact</a>
                </nav>
                
                <!-- CTA Buttons -->
                <div class="hidden lg:flex items-center space-x-6">
                    <a href="#" class="text-luxury-green hover:text-light-green font-medium transition duration-300">Sign In</a>
                    <a href="#" class="bg-luxury-green hover:bg-light-green text-white font-medium py-2 px-5 rounded-md transition duration-300">Join Now</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="lg:hidden text-luxury-green focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="mobile-menu hidden lg:hidden pb-5">
                <nav class="flex flex-col space-y-5 p-5">
                    <a href="#" class="text-gray-700 hover:text-luxury-green font-medium transition duration-300">Home</a>
                    <a href="#artisans" class="text-gray-700 hover:text-luxury-green font-medium transition duration-300">Artisans</a>
                    <a href="#how-it-works" class="text-gray-700 hover:text-luxury-green font-medium transition duration-300">How It Works</a>
                    <a href="#" class="text-gray-700 hover:text-luxury-green font-medium transition duration-300">Categories</a>
                    <a href="#" class="text-gray-700 hover:text-luxury-green font-medium transition duration-300">Contact</a>
                    <div class="flex flex-col space-y-3 pt-3 border-t border-gray-200">
                        <a href="#" class="text-luxury-green hover:text-light-green font-medium transition duration-300">Sign In</a>
                        <a href="#" class="bg-luxury-green hover:bg-light-green text-white font-medium py-2 px-5 rounded-md transition duration-300 text-center">Join Now</a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="overflow-hidden relative min-h-screen bg-black">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1721508490084-1b1de5b230d4?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center opacity-50"></div>
        <div class="hero-image-overlay"></div>
        
        <!-- Main Content -->
        <div class="relative z-20 container mx-auto min-h-screen">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 min-h-screen items-center">
                <!-- Left Column - Text Content -->
                <div class="space-y-8">
                    <div class="space-y-4">
                        <p class="hero-subtitle text-gold tracking-widest">Discover Excellence</p>
                        <div class="decorative-line mb-6"></div>
                        <h1 class="hero-title font-playfair text-gold">The Light Within You</h1>
                        <p class="font-cormorant text-2xl text-light-gold mt-4">Where Artisan Excellence Meets Timeless Elegance</p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-6 mt-12">
                        <a href="#join" class="cta-primary rounded-md">
                            Become an Artisan
                        </a>
                        <a href="#discover" class="cta-secondary rounded-md">
                            Explore Collection
                        </a>
                    </div>
                </div>
                
                <!-- Image Frame -->
                <div class="relative flex justify-center items-center">
                    <div class="hero-oval-frame floating-element">
                        <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                             alt="Featured Artisan" 
                             class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -top-12 -right-12 w-24 h-24 border-2 border-gold rounded-full floating-element" style="animation-delay: -2s"></div>
                    <div class="absolute -bottom-8 -left-8 w-16 h-16 border-2 border-gold rounded-full floating-element" style="animation-delay: -4s"></div>
                    <div class="absolute top-1/2 -right-4 w-8 h-8 bg-gold rounded-full floating-element" style="animation-delay: -1s"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Artisans -->
    <section id="artisans" class="py-24 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-20">
                <h2 class="font-playfair text-4xl text-luxury-green mb-5">Featured Artisans</h2>
                <div class="w-24 h-1 bg-gold mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <!-- Card -->
                <div class="group gold-shadow rounded-lg overflow-hidden transition duration-300 hover:shadow-xl">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" alt="Pottery Artisan" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8">
                            <h3 class="font-playfair text-2xl text-white mb-2">Ali Br</h3>
                            <p class="text-light-gold font-montserrat">Master Potter</p>
                        </div>
                    </div>
                    <div class="p-8 bg-white">
                        <p class="text-gray-600 mb-5">Crafting exquisite pottery with traditional techniques passed down through generations.</p>
                        <a href="#" class="text-luxury-green hover:text-light-green font-semibold flex items-center">View Profile <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg></a>
                    </div>
                </div>
                
                <!-- Card 2 -->
                <div class="group gold-shadow rounded-lg overflow-hidden transition duration-300 hover:shadow-xl">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1684259499086-93cb3e555803?q=80&w=1924&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Textile Artisan" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8">
                            <h3 class="font-playfair text-2xl text-white mb-2">Fatima Zahrae</h3>
                            <p class="text-light-gold font-montserrat">Textile Designer</p>
                        </div>
                    </div>
                    <div class="p-8 bg-white">
                        <p class="text-gray-600 mb-5">Creating luxurious textiles with intricate patterns inspired by cultural heritage.</p>
                        <a href="#" class="text-luxury-green hover:text-light-green font-semibold flex items-center">View Profile <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg></a>
                    </div>
                </div>
                
                <!-- Card 3 -->
                <div class="group gold-shadow rounded-lg overflow-hidden transition duration-300 hover:shadow-xl">
                    <div class="relative h-80 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1626081063434-79a2169791b1?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Woodworker" class="w-full h-full object-cover transition duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-8">
                            <h3 class="font-playfair text-2xl text-white mb-2">Mohammed Ayadi</h3>
                            <p class="text-light-gold font-montserrat">Master Woodworker</p>
                        </div>
                    </div>
                    <div class="p-8 bg-white">
                        <p class="text-gray-600 mb-5">Crafting bespoke furniture and decorative pieces from the finest woods.</p>
                        <a href="#" class="text-luxury-green hover:text-light-green font-semibold flex items-center">View Profile <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-16">
                <a href="#" class="inline-block border-2 border-luxury-green text-luxury-green hover:bg-luxury-green hover:text-white font-semibold py-3 px-10 rounded-md transition duration-300">View All Artisans</a>
            </div>
        </div>
    </section>


    <section id="how-it-works" class="py-24 bg-cream">
        <div class="container mx-auto">
            <div class="text-center mb-20">
                <h2 class="font-playfair text-4xl text-luxury-green mb-5">How Khdamly Works</h2>
                <div class="w-24 h-1 bg-gold mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Step 1 -->
                <div class="text-center p-10 gold-border rounded-lg bg-white">
                    <div class="w-20 h-20 bg-luxury-green text-gold rounded-full flex items-center justify-center mx-auto mb-8 text-2xl font-playfair">1</div>
                    <h3 class="font-playfair text-xl text-luxury-green mb-5">Discover Artisans</h3>
                    <p class="text-gray-600">Browse our curated collection of master artisans specializing in various crafts.</p>
                </div>
                
                <!-- Step 2 -->
                <div class="text-center p-10 gold-border rounded-lg bg-white">
                    <div class="w-20 h-20 bg-luxury-green text-gold rounded-full flex items-center justify-center mx-auto mb-8 text-2xl font-playfair">2</div>
                    <h3 class="font-playfair text-xl text-luxury-green mb-5">Connect & Collaborate</h3>
                    <p class="text-gray-600">Connect with artisans to discuss your vision and commission custom pieces.</p>
                </div>
                
                <!-- Step 3 -->
                <div class="text-center p-10 gold-border rounded-lg bg-white">
                    <div class="w-20 h-20 bg-luxury-green text-gold rounded-full flex items-center justify-center mx-auto mb-8 text-2xl font-playfair">3</div>
                    <h3 class="font-playfair text-xl text-luxury-green mb-5">Receive Your Masterpiece</h3>
                    <p class="text-gray-600">Enjoy your handcrafted masterpiece, created with passion and expertise.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories -->
    <section class="py-24 bg-white">
        <div class="container mx-auto">
            <div class="text-center mb-20">
                <h2 class="font-playfair text-4xl text-luxury-green mb-5">Artisan Categories</h2>
                <div class="w-24 h-1 bg-gold mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <!-- Category 1 -->
                <div class="group relative h-64 rounded-lg overflow-hidden gold-shadow">
                    <div class="overflow-hidden h-full">
                        <img src="{{ asset('images/pottery.png') }}" alt="Pottery" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="font-playfair text-xl text-white">Pottery</h3>
                    </div>
                </div>
                
                <!-- Category 2 -->
                <div class="group relative h-64 rounded-lg overflow-hidden gold-shadow">
                    <div class="overflow-hidden h-full">
                        <img src="{{ asset('images/textiles.png') }}" alt="Textiles" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="font-playfair text-xl text-white">Textiles</h3>
                    </div>
                </div>
                
                <!-- Category 3 -->
                <div class="group relative h-64 rounded-lg overflow-hidden gold-shadow">
                    <div class="overflow-hidden h-full">
                        <img src="{{ asset('images/woodwork.png') }}" alt="Woodwork" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="font-playfair text-xl text-white">Woodwork</h3>
                    </div>
                </div>
                
                <!-- Category 4 -->
                <div class="group relative h-64 rounded-lg overflow-hidden gold-shadow">
                    <div class="overflow-hidden h-full">
                        <img src="{{ asset('images/jewelry.png') }}" alt="Jewelry" class="w-full h-full object-cover transition duration-500 group-hover:scale-110">
                    </div>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-6">
                        <h3 class="font-playfair text-xl text-white">Jewelry</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-cream">
        <div class="container mx-auto">
            <div class="text-center mb-20">
                <h2 class="font-playfair text-4xl text-luxury-green mb-5">Client Testimonials</h2>
                <div class="w-24 h-1 bg-gold mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- Testimonial 1 -->
                <div class="bg-white p-10 rounded-lg gold-border gold-shadow">
                    <div class="flex items-center mb-8">
                        <div class="w-20 h-20 rounded-full bg-light-gold flex items-center justify-center mr-5">
                            <span class="font-playfair text-2xl text-luxury-green">N</span>
                        </div>
                        <div>
                            <h4 class="font-playfair text-xl text-luxury-green">Nour El-Din</h4>
                            <p class="text-gray-500">Fes, Morocco</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"The pottery pieces I commissioned from Ahmed Hassan exceeded my expectations. The attention to detail and craftsmanship is truly remarkable. Khdamly made the entire process seamless."</p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white p-10 rounded-lg gold-border gold-shadow">
                    <div class="flex items-center mb-8">
                        <div class="w-20 h-20 rounded-full bg-light-gold flex items-center justify-center mr-5">
                            <span class="font-playfair text-2xl text-luxury-green">L</span>
                        </div>
                        <div>
                            <h4 class="font-playfair text-xl text-luxury-green">Layla</h4>
                            <p class="text-gray-500">Rabat, Morocco</p>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">"Fatima's textile designs are simply breathtaking. The custom table runner she created for my home is now the centerpiece of my dining room. I couldn't be happier with the result."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-24 bg-luxury-green text-white">
        <div class="container mx-auto text-center">
            <h2 class="font-playfair text-4xl mb-8">Ready to Discover Exceptional Artisans?</h2>
            <p class="text-light-gold text-xl mb-10 max-w-2xl mx-auto">Join our community of art lovers and connect with master artisans who bring your vision to life.</p>
            <div class="flex flex-col md:flex-row gap-6 justify-center">
                <a href="#" class="bg-gold hover:bg-light-gold text-luxury-green font-semibold py-3 px-8 rounded-md transition duration-300">Join as a Client</a>
                <a href="#" class="border-2 border-gold text-gold hover:bg-gold hover:text-luxury-green font-semibold py-3 px-8 rounded-md transition duration-300">Join as an Artisan</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10 text-center md:text-left">
                <div>
                    <h3 class="font-playfair text-2xl text-gold mb-5">Khdamly</h3>
                    <p class="text-gray-400">Connecting artisans with art lovers, preserving craftsmanship for generations to come.</p>
                </div>
                <div>
                    <h4 class="font-playfair text-xl text-gold mb-5">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-400 hover:text-gold transition duration-300">Home</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold transition duration-300">Artisans</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold transition duration-300">Categories</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-gold transition duration-300">About Us</a></li>
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
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-gold transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>

                        <a href="#" class="text-gray-400 hover:text-gold transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-16 pt-10 text-center text-gray-400">
                <p>&copy; 2023 Khdamly. All rights reserved.</p>
            </div>
        </div>
    </footer>

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