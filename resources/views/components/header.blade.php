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
                <a href="/" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{route('artisans')}}" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                    Artisans
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#how-it-works" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                    How It Works
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>
            
            <!-- CTA -->
            <div class="hidden lg:flex items-center space-x-6">
                <a href="{{ route('login') }}"
                    class="text-luxury-green hover:text-light-green font-medium transition duration-300">Sign In</a>
                <a href="{{ route('register') }}"
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
                <a href="/" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                    Home
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="{{route('artisans')}}" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                    Artisans
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#how-it-works" class="relative text-gray-700 hover:text-luxury-green font-medium transition duration-300 group">
                    How It Works
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                </a>
                <div class="flex flex-col space-y-3 pt-3 border-t border-gray-200">
                    <a href="{{route('login')}}" class="relative text-luxury-green hover:text-light-green font-medium transition duration-300 group">
                        Sign In
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </a>
                    <a href="{{route('register')}}" class="bg-luxury-green hover:bg-light-green text-white font-medium py-2 px-5 rounded-md transition duration-300 text-center">
                        Join Now
                    </a>
                    <form action="{{route('logout')}}" method="POST" class="relative text-luxury-green hover:text-light-green font-medium transition duration-300 group">
                        @csrf
                        <button type="submit" class="w-full text-left">
                            Log Out
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</header>