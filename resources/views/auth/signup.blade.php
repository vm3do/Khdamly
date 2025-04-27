<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Khdamly</title>
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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cream font-montserrat text-gray-800">
    @include('components.header')
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <div class="text-center">
                <h2 class="font-playfair text-3xl text-luxury-green">Create Your Account</h2>
                <p class="mt-2 text-sm text-gray-600">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-medium text-gold hover:text-luxury-green">
                        Sign in
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

            <form class="mt-8 space-y-6" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="rounded-md shadow-sm space-y-4">
                    <!-- Selection -->
                    <div class="space-y-2">
                        <label class="block text-sm font-medium text-gray-700">I want to join as:</label>
                        <div class="flex items-center space-x-4">
                            <div class="flex items-center">
                                <input id="client" name="role" type="radio" value="client" checked
                                    class="h-4 w-4 text-luxury-green focus:ring-luxury-green border-gold">
                                <label for="client" class="ml-2 block text-sm text-gray-700">Client</label>
                            </div>
                            <div class="flex items-center">
                                <input id="artisan" name="role" type="radio" value="artisan"
                                    class="h-4 w-4 text-luxury-green focus:ring-luxury-green border-gold"
                                    {{ old('role') == 'artisan' ? 'checked' : '' }}>
                                <label for="artisan" class="ml-2 block text-sm text-gray-700">Artisan</label>
                            </div>
                        </div>
                    </div>

                    <!-- Information -->
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required
                            class="appearance-none rounded-xl relative block w-full px-3 py-2 border-2 border-gold/20 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-green focus:border-luxury-green focus:z-10 sm:text-sm">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required
                            class="appearance-none rounded-xl relative block w-full px-3 py-2 border-2 border-gold/20 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-green focus:border-luxury-green focus:z-10 sm:text-sm">
                    </div>

                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                        <select id="city" name="city" required
                            class="appearance-none rounded-xl relative block w-full px-3 py-2 border-2 border-gold/20 text-gray-900 focus:outline-none focus:ring-luxury-green focus:border-luxury-green focus:z-10 sm:text-sm">
                            <option value="">Select your city</option>
                            <option value="Casa" {{ old('city') == 'Casa' ? 'selected' : '' }}>Casa</option>
                            <option value="Rabat" {{ old('city') == 'Rabat' ? 'selected' : '' }}>Rabat</option>
                            <option value="Oujda" {{ old('city') == 'Oujda' ? 'selected' : '' }}>Oujda</option>
                        </select>
                    </div>

                    <div>
                        <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                        <textarea id="bio" name="bio" rows="3"
                            class="appearance-none rounded-xl relative block w-full px-3 py-2 border-2 border-gold/20 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-green focus:border-luxury-green focus:z-10 sm:text-sm">{{ old('bio') }}</textarea>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" name="password" type="password" required
                            class="appearance-none rounded-xl relative block w-full px-3 py-2 border-2 border-gold/20 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-green focus:border-luxury-green focus:z-10 sm:text-sm">
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                            Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                            class="appearance-none rounded-xl relative block w-full px-3 py-2 border-2 border-gold/20 placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-luxury-green focus:border-luxury-green focus:z-10 sm:text-sm">
                    </div>

                    <!-- Categories -->
                    <div id="artisan-fields" class="hidden space-y-4">
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700">Category</label>
                            <select id="category" name="category_id" value="{{ old('category_id') }}"
                                class="appearance-none rounded-xl relative block w-full px-3 py-2 border-2 border-gold/20 text-gray-900 focus:outline-none focus:ring-luxury-green focus:border-luxury-green focus:z-10 sm:text-sm">
                                <option value="">Select your category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700">Portfolio & Certifications</label>
                            <div
                                class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gold/20 border-dashed rounded-xl">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gold" stroke="currentColor" fill="none"
                                        viewBox="0 0 48 48">
                                        <path
                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="portfolio"
                                            class="relative cursor-pointer bg-white rounded-md font-medium text-luxury-green hover:text-light-green focus-within:outline-none">
                                            <span>Upload files</span>
                                            <input id="portfolio" name="portfolio[]" type="file" multiple
                                                accept="image/*" class="sr-only" min="3" max="5">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG up to 10MB (3-5 files required)
                                    </p>
                                </div>
                            </div>
                            <div id="file-list" class="mt-2 text-sm text-gray-500"></div>
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-xl text-white bg-luxury-green hover:bg-light-green focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-luxury-green">
                        Create Account
                    </button>
                </div>
            </form>
        </div>
    </div>
    @include('components.footer')
    <script>
        const userTypeRadios = document.querySelectorAll('input[name="role"]');
        const artisanFields = document.getElementById('artisan-fields');

        // userTypeRadios.forEach(radio => {
        //     radio.addEventListener('change', (e) => {
        //         if (e.target.value === 'artisan') {
        //             artisanFields.classList.remove('hidden');
        //         } else {
        //             artisanFields.classList.add('hidden');
        //         }
        //     });
        // });

        function toggleArtisan() {
            const artisanFields = document.getElementById('artisan-fields');
            const selected = document.querySelector('input[name="role"]:checked');
            artisanFields.classList.toggle('hidden', selected?.value !== 'artisan');
        }

        toggleArtisan();

        document.querySelectorAll('input[name="role"]').forEach(radio => {
            radio.addEventListener('change', toggleArtisan);
        });


        // Files handling
        const fileInput = document.getElementById('portfolio');
        const fileList = document.getElementById('file-list');

        fileInput.addEventListener('change', (e) => {
            const files = e.target.files;
            if (files.length < 3 || files.length > 5) {
                alert('Please select between 3 and 5 files');
                fileInput.value = '';
                fileList.innerHTML = '';
                return;
            }

            fileList.innerHTML = '';
            Array.from(files).forEach(file => {
                const div = document.createElement('div');
                div.textContent = `${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)`;
                fileList.appendChild(div);
            });
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        function highlight(e) {
            dropZone.classList.add('border-luxury-green');
        }

        function unhighlight(e) {
            dropZone.classList.remove('border-luxury-green');
        }
    </script>
</body>

</html>
