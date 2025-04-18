<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khdamly - Artisan Platform</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-green': '#1a472a',
                        'secondary-green': '#2d5a3f',
                        'light-green': '#e8f5e9',
                        'primary-gold': '#c5a572',
                        'secondary-gold': '#d4b78f',
                        'light-gold': '#f9f5e9',
                    },
                    fontFamily: {
                        'playfair': ['"Playfair Display"', 'serif'],
                        'cormorant': ['"Cormorant Garamond"', 'serif'],
                        'montserrat': ['Montserrat', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
            .btn {
                @apply px-5 py-2.5 rounded font-medium transition-all duration-300 cursor-pointer;
            }
            .btn-outline {
                @apply border-2 border-primary-green text-primary-green bg-transparent hover:bg-primary-green hover:text-white;
            }
            .btn-primary {
                @apply bg-primary-green text-white hover:bg-secondary-green;
            }
            .btn-gold {
                @apply bg-primary-gold text-white hover:bg-secondary-gold;
            }
            .tag {
                @apply bg-light-gold text-primary-gold px-2.5 py-1 rounded-full text-sm;
            }
            .step-number {
                @apply w-10 h-10 bg-primary-gold text-white rounded-full flex items-center justify-center font-semibold absolute -top-5 left-1/2 transform -translate-x-1/2;
            }
            .testimonial-text::before,
            .testimonial-text::after {
                content: '"';
                @apply text-5xl text-primary-gold opacity-30 absolute;
            }
            .testimonial-text::before {
                @apply -top-5 -left-5;
            }
            .testimonial-text::after {
                @apply -bottom-10 -right-5;
            }
        }
    </style>
</head>
<body class="font-montserrat text-gray-900 bg-gray-50 leading-relaxed">
    <!-- Header -->
    <header class="bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-5 py-5 flex flex-col md:flex-row justify-between items-center">
            <a href="#" class="text-3xl font-playfair font-bold text-primary-green no-underline mb-4 md:mb-0">Khdam<span class="text-primary-gold">ly</span></a>
            <nav class="mb-4 md:mb-0">
                <ul class="flex flex-col md:flex-row items-center gap-4 md:gap-8">
                    <li><a href="#" class="text-gray-900 font-medium no-underline hover:text-primary-gold transition-colors duration-300">Home</a></li>
                    <li><a href="#" class="text-gray-900 font-medium no-underline hover:text-primary-gold transition-colors duration-300">Artisans</a></li>
                    <li><a href="#" class="text-gray-900 font-medium no-underline hover:text-primary-gold transition-colors duration-300">Categories</a></li>
                    <li><a href="#" class="text-gray-900 font-medium no-underline hover:text-primary-gold transition-colors duration-300">How It Works</a></li>
                    <li><a href="#" class="text-gray-900 font-medium no-underline hover:text-primary-gold transition-colors duration-300">About Us</a></li>
                    <li><a href="#" class="text-gray-900 font-medium no-underline hover:text-primary-gold transition-colors duration-300">Contact</a></li>
                </ul>
            </nav>
            <div class="flex flex-col md:flex-row gap-4">
                <a href="#" class="btn btn-outline w-full md:w-auto text-center">Sign In</a>
                <a href="#" class="btn btn-primary w-full md:w-auto text-center">Join as Artisan</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="h-screen bg-cover bg-center flex items-center text-center text-white pt-20" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1581783898377-1c85bf937427?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80');">
        <div class="container mx-auto px-5">
            <div class="max-w-3xl mx-auto">
                <h1 class="font-playfair text-4xl md:text-5xl lg:text-6xl font-semibold mb-5 leading-tight">Discover Exceptional Artisans & Their Masterpieces</h1>
                <p class="text-lg md:text-xl mb-8 font-light">Connect with skilled artisans who bring your vision to life with their expertise and craftsmanship</p>
                <div class="flex flex-col md:flex-row justify-center gap-5">
                    <a href="#" class="btn btn-primary">Find an Artisan</a>
                    <a href="#" class="btn btn-gold">Showcase Your Work</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Artisans Section -->
    <section class="py-24">
        <div class="container mx-auto px-5">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-3xl md:text-4xl font-semibold text-primary-green mb-4">Featured Artisans</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Meet our talented artisans who create exceptional pieces with passion and precision</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Artisan Card 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-2.5">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="Artisan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-5">
                        <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-2">Ahmed Hassan</h3>
                        <p class="text-gray-600 mb-4">Master woodworker specializing in custom furniture and decorative pieces</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tag">Woodworking</span>
                            <span class="tag">Furniture</span>
                            <span class="tag">Custom</span>
                        </div>
                        <a href="#" class="btn btn-outline">View Profile</a>
                    </div>
                </div>
                
                <!-- Artisan Card 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-2.5">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1976&q=80" alt="Artisan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-5">
                        <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-2">Fatima Al-Sayed</h3>
                        <p class="text-gray-600 mb-4">Expert jeweler creating unique pieces that blend traditional and modern designs</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tag">Jewelry</span>
                            <span class="tag">Custom</span>
                            <span class="tag">Traditional</span>
                        </div>
                        <a href="#" class="btn btn-outline">View Profile</a>
                    </div>
                </div>
                
                <!-- Artisan Card 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-2.5">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="Artisan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-5">
                        <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-2">Karim Mahmoud</h3>
                        <p class="text-gray-600 mb-4">Skilled potter crafting beautiful ceramics with traditional techniques</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="tag">Pottery</span>
                            <span class="tag">Ceramics</span>
                            <span class="tag">Traditional</span>
                        </div>
                        <a href="#" class="btn btn-outline">View Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-24 bg-light-gold">
        <div class="container mx-auto px-5">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-3xl md:text-4xl font-semibold text-primary-green mb-4">Explore Categories</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Browse through our diverse range of artisan categories to find exactly what you're looking for</p>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Category 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md text-center p-8 transition-all duration-300 hover:-translate-y-2.5 hover:shadow-xl">
                    <div class="text-5xl text-primary-gold mb-5">
                        <i class="fas fa-chair"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-4">Furniture</h3>
                    <p class="text-gray-600 mb-6">Custom furniture pieces crafted with precision and care</p>
                    <a href="#" class="btn btn-outline">Explore</a>
                </div>
                
                <!-- Category 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md text-center p-8 transition-all duration-300 hover:-translate-y-2.5 hover:shadow-xl">
                    <div class="text-5xl text-primary-gold mb-5">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-4">Jewelry</h3>
                    <p class="text-gray-600 mb-6">Unique jewelry designs that tell your story</p>
                    <a href="#" class="btn btn-outline">Explore</a>
                </div>
                
                <!-- Category 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md text-center p-8 transition-all duration-300 hover:-translate-y-2.5 hover:shadow-xl">
                    <div class="text-5xl text-primary-gold mb-5">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-4">Art</h3>
                    <p class="text-gray-600 mb-6">Original artwork from talented painters and sculptors</p>
                    <a href="#" class="btn btn-outline">Explore</a>
                </div>
                
                <!-- Category 4 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md text-center p-8 transition-all duration-300 hover:-translate-y-2.5 hover:shadow-xl">
                    <div class="text-5xl text-primary-gold mb-5">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-4">Textiles</h3>
                    <p class="text-gray-600 mb-6">Handcrafted textiles and clothing with unique designs</p>
                    <a href="#" class="btn btn-outline">Explore</a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-5">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-3xl md:text-4xl font-semibold text-primary-green mb-4">How Khdamly Works</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our simple process makes it easy to connect with artisans and bring your ideas to life</p>
            </div>
            <div class="flex flex-col md:flex-row justify-between gap-8">
                <!-- Step 1 -->
                <div class="flex-1 min-w-[250px] text-center p-8 bg-light-gold rounded-lg relative">
                    <div class="step-number">1</div>
                    <div class="text-4xl text-primary-green my-5">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-4">Browse Artisans</h3>
                    <p class="text-gray-600">Explore our curated collection of skilled artisans across various categories</p>
                </div>
                
                <!-- Step 2 -->
                <div class="flex-1 min-w-[250px] text-center p-8 bg-light-gold rounded-lg relative">
                    <div class="step-number">2</div>
                    <div class="text-4xl text-primary-green my-5">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-4">Connect & Discuss</h3>
                    <p class="text-gray-600">Reach out to artisans, discuss your requirements, and get quotes</p>
                </div>
                
                <!-- Step 3 -->
                <div class="flex-1 min-w-[250px] text-center p-8 bg-light-gold rounded-lg relative">
                    <div class="step-number">3</div>
                    <div class="text-4xl text-primary-green my-5">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-4">Book & Reserve</h3>
                    <p class="text-gray-600">Reserve the artisan's services and schedule your project</p>
                </div>
                
                <!-- Step 4 -->
                <div class="flex-1 min-w-[250px] text-center p-8 bg-light-gold rounded-lg relative">
                    <div class="step-number">4</div>
                    <div class="text-4xl text-primary-green my-5">
                        <i class="fas fa-star"></i>
                    </div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-green mb-4">Receive & Review</h3>
                    <p class="text-gray-600">Get your custom piece and share your experience with others</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-light-gold">
        <div class="container mx-auto px-5">
            <div class="text-center mb-16">
                <h2 class="font-playfair text-3xl md:text-4xl font-semibold text-primary-green mb-4">What Our Clients Say</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Hear from our satisfied clients about their experiences with Khdamly artisans</p>
            </div>
            <div class="max-w-3xl mx-auto">
                <!-- Testimonial 1 -->
                <div class="text-center p-8">
                    <div class="text-xl italic text-gray-700 mb-5 relative testimonial-text">
                        Working with Khdamly was an absolute pleasure. The artisan I connected with was incredibly skilled and brought my vision to life perfectly. The quality of the work exceeded my expectations.
                    </div>
                    <div class="flex items-center justify-center gap-4">
                        <div class="w-16 h-16 rounded-full overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1974&q=80" alt="Client" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <h4 class="font-playfair text-xl font-semibold text-primary-green mb-1">Sarah Johnson</h4>
                            <p class="text-gray-600 text-sm">Custom Furniture Client</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 text-center text-white" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1581783898377-1c85bf937427?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'); background-size: cover; background-position: center; background-attachment: fixed;">
        <div class="container mx-auto px-5">
            <h2 class="font-playfair text-3xl md:text-4xl font-semibold mb-5">Ready to Find Your Perfect Artisan?</h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Join thousands of satisfied clients who have discovered exceptional artisans through Khdamly</p>
            <a href="#" class="btn btn-gold">Get Started Today</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary-green text-white pt-20 pb-8">
        <div class="container mx-auto px-5">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                <div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-gold mb-5">Khdamly</h3>
                    <p class="mb-5">Connecting exceptional artisans with clients who appreciate quality craftsmanship and unique designs.</p>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary-gold hover:-translate-y-1 transition-all duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary-gold hover:-translate-y-1 transition-all duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary-gold hover:-translate-y-1 transition-all duration-300">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center text-white hover:bg-primary-gold hover:-translate-y-1 transition-all duration-300">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-gold mb-5">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">Home</a></li>
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">Artisans</a></li>
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">Categories</a></li>
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">How It Works</a></li>
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">About Us</a></li>
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-gold mb-5">Categories</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">Furniture</a></li>
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">Jewelry</a></li>
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">Art</a></li>
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">Textiles</a></li>
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">Pottery</a></li>
                        <li><a href="#" class="text-white no-underline hover:text-primary-gold transition-colors duration-300">Leather Goods</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-playfair text-2xl font-semibold text-primary-gold mb-5">Contact Us</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2"><i class="fas fa-map-marker-alt"></i> 123 Artisan Street, Cairo, Egypt</li>
                        <li class="flex items-center gap-2"><i class="fas fa-phone"></i> +20 123 456 7890</li>
                        <li class="flex items-center gap-2"><i class="fas fa-envelope"></i> info@khdamly.com</li>
                    </ul>
                </div>
            </div>
            <div class="text-center pt-8 border-t border-white/10">
                <p>&copy; 2023 Khdamly. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>
