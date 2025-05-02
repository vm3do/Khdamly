<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - Khdamly</title>
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
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
</head>

<body class="bg-cream font-montserrat text-gray-800">
    @include('components.header')
    @include('components.error')

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 py-12">
        <div class="flex flex-col lg:flex-row gap-8">
            <!-- Chat List -->
            <div class="w-full lg:w-1/3">
                <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                    <h2 class="font-playfair text-2xl text-luxury-green mb-6">Messages</h2>

                    <!-- Search -->
                    <div class="relative mb-6">
                        <input type="text" placeholder="Search conversations..."
                            class="w-full px-4 py-3 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                        <svg class="w-5 h-5 text-gold absolute right-4 top-1/2 -translate-y-1/2" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>

                    <!-- Chat List -->
                    @foreach($requests as $request)
                    <div class="space-y-4">
                        <!-- Chat 1 -->
                        <div
                            class="flex items-center gap-4 p-4 rounded-xl hover:bg-cream/50 cursor-pointer transition duration-300">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-gold">
                                <img src="{{auth()->user()->role == 'client' ? 
                                ( $request->artisan->profile_pic ? asset('storage/' . $request->artisan->profile_pic) : asset('images/profile.svg') )
                                 : ( $request->client->profile_pic ? asset('storage/'. $request->client->profile_pic) : asset('images/profile.svg') )}}"
                                    alt="Profile" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-medium text-gray-800">{{auth()->user()->role == 'client' ? $request->artisan->name : $request->client->name}}</h3>
                                    <span class="text-sm text-gray-500">2h ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">Thank you for your interest in my pottery
                                    work...</p>
                            </div>
                        </div>
                        @endforeach

                        <!-- Chat 2 -->
                        {{-- <div
                            class="flex items-center gap-4 p-4 rounded-xl hover:bg-cream/50 cursor-pointer transition duration-300">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-gold">
                                <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                    alt="Profile" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1 min-w-0">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-medium text-gray-800">Fatima Z</h3>
                                    <span class="text-sm text-gray-500">1d ago</span>
                                </div>
                                <p class="text-sm text-gray-600 truncate">I've completed the textile design you
                                    requested...</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>

            <!-- Chat Window -->
            <div class="w-full lg:w-2/3">
                <div
                    class="bg-white rounded-2xl border-2 border-gold/20 shadow-lg shadow-gold/5 h-[600px] flex flex-col">
                    <!-- Chat Header -->
                    <div class="p-6 border-b border-gold/20">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full overflow-hidden border-2 border-gold">
                                <img src="{{auth()->user()->role == 'client' ? 
                                ( $request->artisan->profile_pic ? asset('storage/' . $request->artisan->profile_pic) : asset('images/profile.svg') )
                                 : ( $request->client->profile_pic ? asset('storage/'. $request->client->profile_pic) : asset('images/profile.svg') )}}"
                                    alt="Profile" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h3 class="font-playfair text-xl text-luxury-green">{{auth()->user()->role == 'client' ? $request->artisan->name : $request->client->name}}</h3>
                                @if(auth()->user()->role == 'client')
                                <p class="text-sm text-gray-500">{{$request->artisan->name}}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Messages -->
                    <div class="flex-1 p-6 overflow-y-auto space-y-6">
                        <!-- Message -->
                        @foreach($request->messages as $message)
                        @if($message->sender_id == auth()->user()->id)
                        <!-- Message -->
                        <div class="flex items-start gap-4 justify-end">
                            <div class="flex-1 max-w-[70%]">
                                <div class="bg-luxury-green text-white rounded-2xl p-4">
                                    <p class="text-white">{{$message->message}}</p>
                                </div>
                                <span class="text-xs text-gray-500 mt-1 text-right">1h ago</span>
                            </div>
                        </div>
                        @else
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-gold">
                                <img src="{{auth()->user()->role == 'client' ? 
                                ( $request->artisan->profile_pic ? asset('storage/' . $request->artisan->profile_pic) : asset('images/profile.svg') )
                                 : ( $request->client->profile_pic ? asset('storage/'. $request->client->profile_pic) : asset('images/profile.svg') ) }}"
                                    alt="Profile" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <div class="bg-cream rounded-2xl p-4">
                                    <p class="text-gray-800">{{$message->message}}</p>
                                </div>
                                <span class="text-xs text-gray-500 mt-1">2h ago</span>
                            </div>
                        </div>
                        @endif 
                        @endforeach

                        <!-- Message -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 rounded-full overflow-hidden border-2 border-gold">
                                <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                    alt="Profile" class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <div class="bg-cream rounded-2xl p-4">
                                    <p class="text-gray-800">Here are some examples of my recent work. I specialize in
                                        traditional patterns with a modern twist...</p>
                                    <div class="mt-4 grid grid-cols-2 gap-2">
                                        <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                            alt="Pottery" class="w-full h-32 object-cover rounded-xl">
                                        <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                            alt="Pottery" class="w-full h-32 object-cover rounded-xl">
                                    </div>
                                </div>
                                <span class="text-xs text-gray-500 mt-1">30m ago</span>
                            </div>
                        </div>
                    </div>

                    <!-- Input -->
                    <div class="p-6 border-t border-gold/20">
                        <div class="flex items-center gap-4">
                            <div class="relative flex-1">
                                <input name="message" type="text" placeholder="Type your message..."
                                    class="w-full pl-12 pr-4 py-3 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                                <button 
                                    class="absolute left-3 top-1/2 -translate-y-1/2 p-2 text-gold hover:text-luxury-green transition duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </button>
                            </div>
                            <button class="p-2 text-gold hover:text-luxury-green transition duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
    <script>
        Pusher.logToConsole = true;

        const pusher = new Pusher('ab7edf357e81d712bd72', {
            cluster: 'mt1',
            encrypted: true,
            authEndpoint: '/broadcasting/auth'
        });
        Echo.private('user.' + userId)
            .listen('MessageSent', (e) => {
                console.log("Incoming message:", e.message);

                if (e.message.conversation_id === currentChatId) {
                    appendToMessages(e.message);
                } else {
                    updateChatListUI(e.message);
                }
            });
    </script>

</body>

</html>
