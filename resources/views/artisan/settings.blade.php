<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - Khdamly</title>
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
    @include('components.header')
    @include('components.error')
    
    <!-- Cover -->
    <section class="relative h-[200px] bg-luxury-green/5">
        <div class="absolute inset-0">
            <img id="cover-preview" src="{{ auth()->user()->cover_image ?? '/images/default-cover.jpg' }}" 
                alt="Cover" class="w-full h-full object-cover opacity-90">
            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
        </div>
        <label for="cover-image" 
            class="absolute top-4 right-4 bg-luxury-green text-white p-2 rounded-full cursor-pointer hover:bg-light-green transition z-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
            </svg>
        </label>
        <input type="file" id="cover-image" name="cover_image" accept="image/*" class="hidden">
    </section>

    <section class="relative -mt-16 px-4 sm:px-6 md:px-8 lg:px-12">
        <div class="max-w-3xl mx-auto">
            <div class="flex flex-col items-center">
                <!-- Profile -->
                <div class="relative">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gold shadow-xl">
                        <img id="profile-preview" src="{{ auth()->user()->profile_pic ?? asset('images/profile.svg') }}" 
                            alt="Profile Picture" class="w-full h-full object-cover">
                    </div>
                    <label for="profile-picture" 
                        class="absolute -bottom-0 -right-0 bg-luxury-green text-white p-2 rounded-full cursor-pointer hover:bg-light-green transition z-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                        </svg>
                    </label>
                    <input type="file" id="profile-picture" name="profile_picture" accept="image/*" class="hidden">
                </div>
            </div>
        </div>
    </section>

    <!-- Settings -->
    <section class="py-12 px-4 sm:px-6 md:px-8 lg:px-12">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white rounded-2xl p-8 sm:p-12 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <h2 class="font-playfair text-3xl sm:text-4xl text-luxury-green mb-8 text-center">Profile Settings</h2>
                
                <form action="{{ route('user.update.info', auth()->user()->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" value="{{ auth()->user()->name }}"
                                class="w-full px-4 py-3 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" value="{{ auth()->user()->email }}"
                                class="w-full px-4 py-3 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                            <input type="tel" id="phone" name="phone" value="{{ auth()->user()->phone }}"
                                class="w-full px-4 py-3 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                        </div>

                        <div>
                            <label for="city" class="block text-sm font-medium text-gray-700 mb-2">City</label>
                            <select id="city" name="city"
                                class="w-full px-4 py-3 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                                <option value="Casa" {{ auth()->user()->city == 'Casa' ? 'selected' : '' }}>Casa</option>
                                <option value="Rabat" {{ auth()->user()->city == 'Rabat' ? 'selected' : '' }}>Rabat</option>
                                <option value="Oujda" {{ auth()->user()->city == 'Oujda' ? 'selected' : '' }}>Oujda</option>
                                <option value="Agadir" {{ auth()->user()->city == 'Agadir' ? 'selected' : '' }}>Agadir</option>
                                <option value="Tangier" {{ auth()->user()->city == 'Tangier' ? 'selected' : '' }}>Tangier</option>
                                <option value="Marrakech" {{ auth()->user()->city == 'Marrakech' ? 'selected' : '' }}>Marrakech</option>
                                <option value="Fes" {{ auth()->user()->city == 'Fes' ? 'selected' : '' }}>Fes</option>
                                <option value="Meknes" {{ auth()->user()->city == 'Meknes' ? 'selected' : '' }}>Meknes</option>
                                <option value="Kenitra" {{ auth()->user()->city == 'Kenitra' ? 'selected' : '' }}>Kenitra</option>
                                <option value="Tetouan" {{ auth()->user()->city == 'Tetouan' ? 'selected' : '' }}>Tetouan</option>
                                <option value="El Jadida" {{ auth()->user()->city == 'El Jadida' ? 'selected' : '' }}>El Jadida</option>
                                <option value="Nador" {{ auth()->user()->city == 'Nador' ? 'selected' : '' }}>Nador</option>
                                <option value="Settat" {{ auth()->user()->city == 'Settat' ? 'selected' : '' }}>Settat</option>
                                <option value="Khenifra" {{ auth()->user()->city == 'Khenifra' ? 'selected' : '' }}>Khenifra</option>
                                <option value="Safi" {{ auth()->user()->city == 'Safi' ? 'selected' : '' }}>Safi</option>
                                <option value="Larache" {{ auth()->user()->city == 'Larache' ? 'selected' : '' }}>Larache</option>
                                <option value="Berkane" {{ auth()->user()->city == 'Berkane' ? 'selected' : '' }}>Berkane</option>
                                <option value="Taza" {{ auth()->user()->city == 'Taza' ? 'selected' : '' }}>Taza</option>
                                <option value="Ksar el Kebir" {{ auth()->user()->city == 'Ksar el Kebir' ? 'selected' : '' }}>Ksar el Kebir</option>
                                <option value="Sidi Kacem" {{ auth()->user()->city == 'Sidi Kacem' ? 'selected' : '' }}>Sidi Kacem</option> 
                                <option value="Khouribga" {{ auth()->user()->city == 'Khouribga' ? 'selected' : '' }}>Khouribga</option>
                                <option value="Azilal" {{ auth()->user()->city == 'Azilal' ? 'selected' : '' }}>Azilal</option>
                                <option value="Ifrane" {{ auth()->user()->city == 'Ifrane' ? 'selected' : '' }}>Ifrane</option>
                                <option value="Tiznit" {{ auth()->user()->city == 'Tiznit' ? 'selected' : '' }}>Tiznit</option>
                                <option value="Essaouira" {{ auth()->user()->city == 'Essaouira' ? 'selected' : '' }}>Essaouira</option>
                                <option value="Taroudant" {{ auth()->user()->city == 'Taroudant' ? 'selected' : '' }}>Taroudant</option>
                                <option value="Dakhla" {{ auth()->user()->city == 'Dakhla' ? 'selected' : '' }}>Dakhla</option>
                                <option value="Laayoune" {{ auth()->user()->city == 'Laayoune' ? 'selected' : '' }}>Laayoune</option>
                                <option value="Guelmim" {{ auth()->user()->city == 'Guelmim' ? 'selected' : '' }}>Guelmim</option>
                                <option value="Tantan" {{ auth()->user()->city == 'Tantan' ? 'selected' : '' }}>Tantan</option>
                                <option value="Assa" {{ auth()->user()->city == 'Assa' ? 'selected' : '' }}>Assa</option>
                                <option value="Sidi Ifni" {{ auth()->user()->city == 'Sidi Ifni' ? 'selected' : '' }}>Sidi Ifni</option>
                                <option value="Bouskoura" {{ auth()->user()->city == 'Bouskoura' ? 'selected' : '' }}>Bouskoura</option>
                                <option value="Mohammedia" {{ auth()->user()->city == 'Mohammedia' ? 'selected' : '' }}>Mohammedia</option>
                                <option value="Salé" {{ auth()->user()->city == 'Salé' ? 'selected' : '' }}>Salé</option>
                                <option value="Moulay Yacoub" {{ auth()->user()->city == 'Moulay Yacoub' ? 'selected' : '' }}>Moulay Yacoub</option>
                                <option value="Tiflet" {{ auth()->user()->city == 'Tiflet' ? 'selected' : '' }}>Tiflet</option>
                                <option value="Khemisset" {{ auth()->user()->city == 'Khemisset' ? 'selected' : '' }}>Khemisset</option>
                                <option value="Sefrou" {{ auth()->user()->city == 'Sefrou' ? 'selected' : '' }}>Sefrou</option>
                                <option value="Beni Mellal" {{ auth()->user()->city == 'Beni Mellal' ? 'selected' : '' }}>Beni Mellal</option>
                                <option value="Ouarzazate" {{ auth()->user()->city == 'Ouarzazate' ? 'selected' : '' }}>Ouarzazate</option>                                
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="bio" class="block text-sm font-medium text-gray-700 mb-2">Bio</label>
                        <textarea id="bio" name="bio" rows="4"
                            class="w-full px-4 py-3 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">{{ auth()->user()->bio }}</textarea>
                    </div>

                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-6 py-3 bg-luxury-green text-white rounded-xl hover:bg-light-green transition duration-300">
                            Save Changes
                        </button>
                    </div>
                </form>

                <!-- Password -->
                <div class="mt-12 pt-8 border-t border-gold/20">
                    <h3 class="font-playfair text-2xl text-luxury-green mb-6">Change Password</h3>
                    <form action="{{ route('user.update.password', auth()->user()->id) }}" method="POST" class="space-y-6">
                        @csrf
                        @method('PUT')
                        
                        <div>
                            <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">Current Password</label>
                            <input type="password" id="current_password" name="current_password" required
                                class="w-full px-4 py-3 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-2">New Password</label>
                            <input type="password" id="password" name="password" required
                                class="w-full px-4 py-3 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirm New Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" required
                                class="w-full px-4 py-3 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                        </div>

                        <div class="flex justify-end">
                            <button type="submit"
                                class="px-6 py-3 bg-luxury-green text-white rounded-xl hover:bg-light-green transition duration-300">
                                Update Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    <script>
        // Profile
        document.getElementById('profile-picture').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('profile-preview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });

        // Cover
        document.getElementById('cover-image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('cover-preview').src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html> 