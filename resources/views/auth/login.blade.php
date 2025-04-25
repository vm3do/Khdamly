<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Khdamly</title>
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
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <h2 class="font-playfair text-3xl text-luxury-green">Welcome Back</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-medium text-gold hover:text-luxury-green">
                        Sign up
                    </a>
                </p>
            </div>

            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded-md">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach 
                    </ul>
                </div>
            @endif

            <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="rounded-md shadow-sm space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input id="email" name="email" type="email" value="{{old('email')}}" required 
                            class="appearance-none rounded-xl relative block w-full px-3 py-2 border-2 border-gold/20 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-green focus:border-luxury-green focus:z-10 sm:text-sm">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required 
                            class="appearance-none rounded-xl relative block w-full px-3 py-2 border-2 border-gold/20 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-green focus:border-luxury-green focus:z-10 sm:text-sm">
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember" name="remember" type="checkbox" 
                                class="h-4 w-4 text-luxury-green focus:ring-luxury-green border-gold">
                            <label for="remember" class="ml-2 block text-sm text-gray-700">
                                Remember me
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="" class="font-medium text-gold hover:text-luxury-green">
                                Forgot your password?
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" 
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-xl text-white bg-luxury-green hover:bg-light-green focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-luxury-green">
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html> 