<!-- Messages -->
@if ($errors->any())
<div class="fixed top-4 right-4 z-50">
    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-lg shadow-lg max-w-md">
        <div class="flex items-center gap-3">
            <svg class="h-5 w-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div class="flex-1">
                <p class="text-sm text-red-700">{{ $errors->first() }}</p>
            </div>
            <button onclick="this.parentElement.parentElement.parentElement.remove()" class="text-red-500 hover:text-red-700">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</div>
@endif

@if (session('error'))
<div class="fixed top-4 right-4 z-50">
    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded-lg shadow-lg max-w-md">
        <div class="flex items-center gap-3">
            <svg class="h-5 w-5 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div class="flex-1">
                <p class="text-sm text-red-700">{{ session('error') }}</p>
            </div>
            <button onclick="this.parentElement.parentElement.parentElement.remove()" class="text-red-500 hover:text-red-700">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</div>
@endif

@if(session('success'))
<div class="fixed top-4 right-4 z-50">
    <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded-lg shadow-lg max-w-md">
        <div class="flex items-center gap-3">
            <svg class="h-5 w-5 text-green-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
            <div class="flex-1">
                <p class="text-sm text-green-800">{{ session('success') }}</p>
            </div>
            <button onclick="this.parentElement.parentElement.parentElement.remove()" class="text-green-500 hover:text-green-700">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
    </div>
</div>
@endif