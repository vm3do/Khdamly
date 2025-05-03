<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
        <div class="flex justify-between items-center py-5">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-2">
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
            
            <div class="hidden lg:flex items-center space-x-6">
                @auth
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('dashbaord') }}" class="text-gray-700 hover:text-luxury-green transition duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </a>
                    @elseif(auth()->user()->role === 'artisan')
                        <a href="{{ route('artisan.dashboard') }}" class="text-gray-700 hover:text-luxury-green transition duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </a>
                    @endif

                    <a href="{{ route('request.chats') }}" class="text-gray-700 hover:text-luxury-green transition duration-300 relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center"></span>
                    </a>

                    <a href="{{route('settings')}}" class="text-gray-700 hover:text-luxury-green transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </a>

                    <form action="{{ route('logout') }}" method="POST" class="flex items-center">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:text-luxury-green transition duration-300">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}"
                        class="text-luxury-green hover:text-light-green font-medium transition duration-300">Sign In</a>
                    <a href="{{ route('register') }}"
                        class="bg-luxury-green hover:bg-light-green text-white font-medium py-2 px-5 rounded-md transition duration-300">Join
                        Now</a>
                @endauth
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
                    @auth
                        @if(auth()->user()->role === 'admin')
                            <a href="{{ route('dashbaord') }}" class="flex items-center gap-2 text-gray-700 hover:text-luxury-green font-medium transition duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                Admin Dashboard
                            </a>
                        @elseif(auth()->user()->role === 'artisan')
                            <a href="{{ route('artisan.dashboard') }}" class="flex items-center gap-2 text-gray-700 hover:text-luxury-green font-medium transition duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                Artisan Dashboard
                            </a>
                        @endif

                        <a href="{{ route('request.chats') }}" class="flex items-center gap-2 text-gray-700 hover:text-luxury-green font-medium transition duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            Messages
                            <span class="bg-red-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center"></span>
                        </a>
                        <a href="{{route('settings')}}" class="flex items-center gap-2 text-gray-700 hover:text-luxury-green font-medium transition duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            Settings
                        </a>
                        <form action="{{route('logout')}}" method="POST" class="relative text-luxury-green hover:text-light-green font-medium transition duration-300 group">
                            @csrf
                            <button type="submit" class="w-full text-left flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                </svg>
                                Log Out
                                <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                            </button>
                        </form>
                    @else
                        <a href="{{route('login')}}" class="relative text-luxury-green hover:text-light-green font-medium transition duration-300 group">
                            Sign In
                            <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gold transition-all duration-300 group-hover:w-full"></span>
                        </a>
                        <a href="{{route('register')}}" class="bg-luxury-green hover:bg-light-green text-white font-medium py-2 px-5 rounded-md transition duration-300 text-center">
                            Join Now
                        </a>
                    @endauth
                </div>
            </nav>
        </div>
    </div>
</header>