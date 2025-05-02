<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artisan Dashboard - Khdamly</title>
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/favicon/site.webmanifest" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cream font-montserrat text-gray-800">
    @include('components.header')
    @include('components.error')

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 py-12">
        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- Orders -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Total Orders</p>
                        <h3 class="font-playfair text-3xl text-luxury-green mt-2">24</h3>
                        <p class="text-sm text-gold mt-2">+5 this month</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-luxury-green/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-luxury-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Revenue -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Total Revenue</p>
                        <h3 class="font-playfair text-3xl text-luxury-green mt-2">$2,450</h3>
                        <p class="text-sm text-gold mt-2">+12% from last month</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-luxury-green/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-luxury-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Rating -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Average Rating</p>
                        <h3 class="font-playfair text-3xl text-luxury-green mt-2">4.8</h3>
                        <p class="text-sm text-gold mt-2">Based on 24 reviews</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-luxury-green/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-luxury-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Pending -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Pending Requests</p>
                        <h3 class="font-playfair text-3xl text-luxury-green mt-2">{{ $requestsCount }}</h3>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-luxury-green/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-luxury-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <!-- Revenue -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <h2 class="font-playfair text-2xl text-luxury-green mb-6">Revenue Overview</h2>
                <canvas id="revenueChart" height="200"></canvas>
            </div>

            <!-- Orders -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <h2 class="font-playfair text-2xl text-luxury-green mb-6">Orders Overview</h2>
                <canvas id="ordersChart" height="200"></canvas>
            </div>
        </div>

        <!-- Requests Management -->
        <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5 mb-12">
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-playfair text-2xl text-luxury-green">Requests Management</h2>
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <input type="text" placeholder="Search requests..."
                            class="pl-10 pr-4 py-2 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                        <svg class="w-5 h-5 text-gold absolute left-3 top-1/2 -translate-y-1/2" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full min-w-[800px]">
                    <thead>
                        <tr class="text-left text-gray-500 border-b border-gold/20">
                            <th class="pb-4">Client</th>
                            <th class="pb-4">Request</th>
                            <th class="pb-4">Date</th>
                            <th class="pb-4">Status</th>
                            <th class="pb-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gold/20">
                        @foreach ($requests as $request)
                            <tr class="text-sm">
                                <td class="py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full overflow-hidden">
                                            <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                                alt="Profile" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <span class="block">{{ $request->client->name }}</span>
                                            <span class="text-xs text-gray-500">{{ $request->client->email }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4">{{ $request->title }}</td>
                                <td class="py-4">{{ $request->created_at->format('M d, Y') }}</td>
                                <td class="py-4">
                                    <span
                                        class="px-3 py-1 rounded-full text-xs bg-luxury-green/10 text-luxury-green">{{ ucwords($request->status) }}</span>
                                </td>
                                <td class="py-4">
                                    <div class="flex items-center gap-2">
                                        <form action="{{ route('request.approve', $request->id) }}" method="POST"
                                            class="flex items-center">
                                            @method('PUT')
                                            @csrf
                                            <button class="text-luxury-green hover:text-light-green">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </button>
                                        </form>

                                        <form action="{{ route('request.refuse', $request->id) }}" method="POST"
                                            class="flex items-center">
                                            @method('PUT')
                                            @csrf
                                            <button class="text-red-500 hover:text-red-600">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Revenue
        const revenueCtx = document.getElementById('revenueChart').getContext('2d');
        new Chart(revenueCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Revenue',
                    data: [1200, 1900, 1500, 2500, 2200, 3000],
                    borderColor: '#2C5F2D',
                    backgroundColor: 'rgba(44, 95, 45, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Orders
        const ordersCtx = document.getElementById('ordersChart').getContext('2d');
        new Chart(ordersCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Orders',
                    data: [4, 6, 5, 8, 7, 10],
                    backgroundColor: '#2C5F2D',
                    borderRadius: 4
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        display: false
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false
                    }
                }
            }
        });
    </script>
</body>

</html>
