<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Pending - Khdamly</title>
    <link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <link rel="manifest" href="/favicon/site.webmanifest" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Cormorant+Garamond:wght@300;400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cream font-montserrat text-gray-800">

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 py-12">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-2xl p-8 sm:p-12 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="text-center">
                    <!-- Pending Icon -->
                    <div class="w-20 h-20 mx-auto mb-6 relative">
                        <div class="absolute inset-0 bg-gold/10 rounded-full animate-pulse"></div>
                        <svg class="w-20 h-20 text-gold relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>

                    <h1 class="font-playfair text-3xl sm:text-4xl text-luxury-green mb-4">Registration Under Review</h1>
                    <p class="text-gray-600 mb-8">Thank you for your interest in joining Khdamly as an artisan. Your registration is currently being reviewed by our team.</p>

                    <!-- Status Timeline -->
                    <div class="space-y-6 mb-8">
                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 rounded-full bg-gold/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-medium text-gray-800">Application Submitted</h3>
                                <p class="text-sm text-gray-500">Your application has been received</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 rounded-full bg-gold/20 flex items-center justify-center">
                                <svg class="w-5 h-5 text-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-medium text-gray-800">Under Review</h3>
                                <p class="text-sm text-gray-500">Our team is reviewing your application</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-medium text-gray-400">Approval</h3>
                                <p class="text-sm text-gray-400">You'll be notified once approved</p>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="bg-cream/50 rounded-xl p-6 mb-8">
                        <h3 class="font-medium text-gray-800 mb-3">What happens next?</h3>
                        <ul class="space-y-2 text-gray-600">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-gold mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>Our team will review your application within 24-48 hours</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-gold mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>You'll receive an email notification once your application is approved</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-gold mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>After approval, you'll have access to your artisan dashboard</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Support -->
                    <div class="text-center">
                        <p class="text-gray-600 mb-4">Have questions about your application?</p>
                        <div class="flex items-center gap-4 justify-center">
                            <a href="" class="inline-flex items-center gap-2 text-luxury-green hover:text-light-green transition duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Contact Support
                            </a>
                            <form action="{{ route('logout') }}" method="POST" class="inline-flex items-center gap-2 text-red-800 hover:text-red-500 transition duration-300">
                                @csrf
                                <button type="submit" class="flex items-center gap-2">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                </svg>
                                Logout
                            </button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>

</html> 