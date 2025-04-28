<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisans - Khdamly</title>
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

    <section class="py-16">
        <div class="max-w-screen-xl px-4 sm:px-6 md:px-8 lg:px-12 mx-auto">
            <div class="bg-white rounded-xl shadow-[0_4px_6px_-1px_rgba(197,165,114,0.2),0_2px_4px_-1px_rgba(197,165,114,0.1)] p-8">

                <div class="flex flex-col md:flex-row gap-6 items-start md:items-center mb-8">
                    <h1 class="font-playfair text-4xl text-luxury-green">Discover Artisans</h1>
                    <div class="flex-1 w-full md:w-auto">
                        <div class="relative">
                            <input type="text" placeholder="Search artisans..." 
                                class="w-full bg-cream border-2 border-gold/20 focus:border-gold rounded-lg py-3 px-4 pl-12 text-gray-800 placeholder-gray-400 focus:outline-none transition duration-300">
                            <svg class="absolute left-4 top-1/2 transform -translate-y-1/2 w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                    </div>
                    <button id="filterToggle" class="flex items-center gap-2 px-4 py-3 bg-cream border-2 border-gold/20 hover:border-gold rounded-lg text-gray-800 transition duration-300">
                        <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        <span class="font-medium">Filters</span>
                    </button>
                </div>

                <!-- Filters -->
                <div id="filtersSection" class="hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Category -->
                        <div class="space-y-2">
                            <label class="block text-gray-700 font-medium">Category</label>
                            <div class="relative">
                                <select id="categoryFilter" class="w-full bg-cream border-2 border-gold/20 focus:border-gold rounded-lg py-3 px-4 text-gray-800 focus:outline-none transition duration-300 appearance-none">
                                    <option value="">All Categories</option>
                                    <option value="pottery">Pottery</option>
                                    <option value="textiles">Textiles</option>
                                    <option value="woodwork">Woodwork</option>
                                    <option value="metalwork">Metalwork</option>
                                    <option value="jewelry">Jewelry</option>
                                </select>
                                <div class="absolute right-4 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                    <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="space-y-2">
                            <label class="block text-gray-700 font-medium">Location</label>
                            <div class="relative">
                                <select id="locationFilter" class="w-full bg-cream border-2 border-gold/20 focus:border-gold rounded-lg py-3 px-4 text-gray-800 focus:outline-none transition duration-300 appearance-none">
                                    <option value="">All Locations</option>
                                    <option value="closest">Closest</option>
                                    <option value="casablanca">Casablanca</option>
                                    <option value="marrakech">Marrakech</option>
                                    <option value="fes">Fes</option>
                                    <option value="rabat">Rabat</option>
                                    <option value="tangier">Tangier</option>
                                </select>
                                <div class="absolute right-4 top-1/2 transform -translate-y-1/2 pointer-events-none">
                                    <svg class="w-4 h-4 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Active Filters -->
                    <div id="activeFilters" class="flex flex-wrap gap-2 mt-6 pt-6 border-t border-gold/20">
                        <!-- Hna -->
                    </div>
                </div>
            </div>

            <!-- Count -->
            <div class="mt-8 mb-8">
                <p class="text-gray-600">Showing <span class="text-luxury-green font-medium">24</span> artisans</p>
            </div>

            <!-- Artisans -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach ($artisans as $artisan)
                    <x-card
                        job="{{ $artisan->category->name }}"
                        name="{{ $artisan->name }}"
                        description="{{ $artisan->bio }}"
                        image="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                        link="{{route('artisan.show', $artisan->id)}}"
                        rating="{{$artisan->rating}}"
                    />
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $artisans->links() }}
            </div>
        </div>
    </section>

    @include('components.footer')

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterToggle = document.getElementById('filterToggle');
        const filtersSection = document.getElementById('filtersSection');
        const categoryFilter = document.getElementById('categoryFilter');
        const locationFilter = document.getElementById('locationFilter');
        const activeFilters = document.getElementById('activeFilters');


        filterToggle.addEventListener('click', function() {
            filtersSection.classList.toggle('hidden');
            
            if (filtersSection.classList.contains('hidden')) {
                categoryFilter.value = '';
                locationFilter.value = '';
                activeFilters.innerHTML = '';
            }
        });

        // Update active filters
        function updateActiveFilters() {
            activeFilters.innerHTML = '';
            
            if (categoryFilter.value) {
                addActiveFilter('Category', categoryFilter.value, categoryFilter);
            }
            if (locationFilter.value) {
                addActiveFilter('Location', locationFilter.value, locationFilter);
            }
        }

        function addActiveFilter(label, value, selectElement) {
            const filterTag = document.createElement('div');
            filterTag.className = 'flex items-center gap-2 bg-cream border border-gold/20 rounded-full px-4 py-2';
            filterTag.innerHTML = `
                <span class="text-gray-600 text-sm">${value}</span>
                <button class="text-gold hover:text-luxury-green transition duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            `;
            
            const removeButton = filterTag.querySelector('button');
            removeButton.addEventListener('click', function() {
                selectElement.value = '';
                updateActiveFilters();
            });
            
            activeFilters.appendChild(filterTag);
        }

        categoryFilter.addEventListener('change', updateActiveFilters);
        locationFilter.addEventListener('change', updateActiveFilters);
    });
    </script>
</body>

</html> 
