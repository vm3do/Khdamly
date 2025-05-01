<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Khdamly</title>
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

    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 md:px-8 lg:px-12 py-12">
        <!-- Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
            <!-- Users -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Total Users</p>
                        <h3 class="font-playfair text-3xl text-luxury-green mt-2">2,543</h3>
                        <p class="text-sm text-gold mt-2">+12% from last month</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-luxury-green/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-luxury-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Requests -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Pending Requests</p>
                        <h3 class="font-playfair text-3xl text-luxury-green mt-2">24</h3>
                        <p class="text-sm text-gold mt-2">+5 new today</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-luxury-green/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-luxury-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Reports -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Active Reports</p>
                        <h3 class="font-playfair text-3xl text-luxury-green mt-2">18</h3>
                        <p class="text-sm text-gold mt-2">+3 new today</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-luxury-green/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-luxury-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Revenue -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-gray-500">Total Revenue</p>
                        <h3 class="font-playfair text-3xl text-luxury-green mt-2">$12,450</h3>
                        <p class="text-sm text-gold mt-2">+8% from last month</p>
                    </div>
                    <div class="w-12 h-12 rounded-full bg-luxury-green/10 flex items-center justify-center">
                        <svg class="w-6 h-6 text-luxury-green" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-8">
            <!-- Requests -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="font-playfair text-2xl text-luxury-green">Artisan Requests</h2>
                    <button class="text-gold hover:text-luxury-green transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[800px]">
                        <thead>
                            <tr class="text-left text-gray-500 border-b border-gold/20">
                                <th class="pb-4">Name</th>
                                <th class="pb-4">Category</th>
                                <th class="pb-4">Portfolio</th>
                                <th class="pb-4">Date</th>
                                <th class="pb-4">Status</th>
                                <th class="pb-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gold/20">
                            @foreach ($pendings as $pending)
                                <tr class="text-sm">
                                    <td class="py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full overflow-hidden">
                                                <img src="{{ $pending->profile_pic ?? asset('images/profile.svg') }}"
                                                    alt="Profile" class="w-full h-full object-cover">
                                            </div>
                                            <span>{{ $pending->name }}</span>
                                        </div>
                                    </td>
                                    <td class="py-4">{{ $pending->subCategory->name }}</td>
                                    <td class="py-4">
                                        <button class="text-luxury-green hover:text-light-green portfolio-btn"
                                            data-artisan-id="{{ $pending->id }}"
                                            data-artisan-name="{{ $pending->name }}"
                                            data-subcategory="{{ $pending->subCategory->name }}"
                                            data-portfolio='@json(
                                                $pending->portfolio->map(function ($portfolio) {
                                                    return asset('storage/' . $portfolio->path);
                                                }))'>
                                            View Portfolio
                                        </button>
                                    </td>
                                    <td class="py-4">{{ $pending->created_at->format('M d, Y') }}</td>
                                    <td class="py-4">
                                        <span
                                            class="px-3 py-1 rounded-full text-xs bg-luxury-green/10 text-luxury-green">{{ $pending->status }}</span>
                                    </td>
                                    <td class="py-4">
                                        <div class="flex items-center gap-2">
                                            <form action="{{ route('artisan.approve', $pending->id) }}" method="POST"
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

                                            <form action="{{route('artisan.refuse', $pending->id)}}" method="POST" class="flex items-center">
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

            <!-- Reports -->
            <div class="bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="font-playfair text-2xl text-luxury-green">Reports</h2>
                    <button class="text-gold hover:text-luxury-green transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </button>
                </div>
                <div class="space-y-4">
                    <!-- Report Item -->
                    <div class="p-4 rounded-xl border border-gold/20">
                        <div class="flex items-start justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                        alt="Profile" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-medium">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-500">Reported inappropriate content</p>
                                </div>
                            </div>
                            <span class="text-xs text-gray-500">2h ago</span>
                        </div>
                        <p class="mt-3 text-sm text-gray-600">The artisan's profile contains inappropriate images and
                            descriptions that violate our community guidelines.</p>
                        <div class="flex items-center gap-2 mt-4">
                            <button
                                class="px-4 py-2 bg-luxury-green text-white rounded-lg hover:bg-light-green transition duration-300 text-sm review-btn"
                                data-report-id="1">
                                Review
                            </button>
                            <button
                                class="px-4 py-2 border border-gold text-gold rounded-lg hover:bg-gold/5 transition duration-300 text-sm">
                                Dismiss
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Categories Management -->
        <div class="mt-8 bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-playfair text-2xl text-luxury-green">Categories Management</h2>
                <button onclick="toggleCategoryModal()"
                    class="px-4 py-2 bg-luxury-green text-white rounded-lg hover:bg-light-green transition duration-300 flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    Add Category
                </button>
            </div>

            <!-- Categories List -->
            <div class="space-y-6">
                @foreach ($categories as $category)
                    <div class="bg-cream rounded-xl p-4 border border-gold/20">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-luxury-green/10 flex items-center justify-center">
                                    <svg class="w-6 h-6 text-luxury-green" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-medium text-gray-800">{{ $category->name }}</h3>
                                    <p class="text-sm text-gray-500">{{ $category->subcategories->count() }}
                                        sub-categories</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <button onclick="toggleSubcategoryModal('{{ $category->id }}')"
                                    class="px-3 py-1 text-sm bg-gold/10 text-gold rounded-lg hover:bg-gold/20 transition duration-300">
                                    Add Subcategory
                                </button>
                                <button onclick="editCategory('{{ $category->id }}', '{{ $category->name }}')"
                                    class="p-2 text-luxury-green hover:bg-luxury-green/10 rounded-lg transition duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                    </svg>
                                </button>
                                <button onclick="deleteCategory('{{ $category->id }}')"
                                    class="p-2 text-red-500 hover:bg-red-50 rounded-lg transition duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Subcategories List -->
                        <div class="ml-8 flex flex-wrap gap-2">
                            @foreach ($category->subcategories as $subcategory)
                                <div
                                    class="flex items-center gap-2 bg-cream border border-gold/20 rounded-full px-4 py-2">
                                    <span class="text-gray-600 text-sm">{{ $subcategory->name }}</span>
                                    <div class="flex items-center gap-2">
                                        <button
                                            onclick="editSubcategory('{{ $subcategory->id }}', '{{ $subcategory->name }}')"
                                            class="text-luxury-green hover:text-light-green transition duration-300">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </button>
                                        <button onclick="deleteSubcategory('{{ $subcategory->id }}')"
                                            class="text-red-500 hover:text-red-600 transition duration-300">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Category Modal -->
        <div id="categoryModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white rounded-2xl p-6 max-w-md w-full mx-4">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-playfair text-2xl text-luxury-green" id="categoryModalTitle">Add Category</h3>
                    <button onclick="toggleCategoryModal()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="{{ route('category.store') }}" method="POST" id="categoryForm" class="space-y-4">
                    @csrf
                    <input type="hidden" id="categoryId">
                    <div>
                        <label class="block text-gray-700 mb-2">Category Name</label>
                        <input type="text" id="categoryName" name="name"
                            class="w-full bg-cream border-2 border-gold/20 focus:border-gold rounded-lg py-3 px-4 text-gray-800 placeholder-gray-400 focus:outline-none transition duration-300"
                            placeholder="Enter category name">
                    </div>
                    <div class="flex justify-end gap-4">
                        <button type="button" onclick="toggleCategoryModal()"
                            class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-luxury-green text-white rounded-lg hover:bg-light-green transition duration-300">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Subcategory Modal -->
        <div id="subcategoryModal"
            class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white rounded-2xl p-6 max-w-md w-full mx-4">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-playfair text-2xl text-luxury-green" id="subcategoryModalTitle">Add Subcategory
                    </h3>
                    <button onclick="toggleSubcategoryModal()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="{{ route('subcategory.store') }}" method="post" id="subcategoryForm"
                    class="space-y-4">
                    @csrf
                    <input type="hidden" name="category_id" id="parentCategoryId">
                    <div>
                        <label class="block text-gray-700 mb-2">Subcategory Name</label>
                        <input type="text" name="name" id="subcategoryName"
                            class="w-full bg-cream border-2 border-gold/20 focus:border-gold rounded-lg py-3 px-4 text-gray-800 placeholder-gray-400 focus:outline-none transition duration-300"
                            placeholder="Enter subcategory name">
                    </div>
                    <div class="flex justify-end gap-4">
                        <button type="button" onclick="toggleSubcategoryModal()"
                            class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-luxury-green text-white rounded-lg hover:bg-light-green transition duration-300">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Delete Category Modal -->
        <div id="deleteCategoryModal"
            class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white rounded-2xl p-6 max-w-md w-full mx-4">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-playfair text-2xl text-luxury-green">Delete Category</h3>
                    <button onclick="toggleDeleteCat()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <p class="text-gray-600 mb-6">Are you sure you want to delete this category? This will also delete all
                    its subcategories.</p>
                <div class="flex justify-end gap-4">
                    <button onclick="toggleDeleteCat()"
                        class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                        Cancel
                    </button>
                    <form action="" method="POST" id="deleteCategoryForm">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Delete Subcategory Modal -->
        <div id="deleteSubModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white rounded-2xl p-6 max-w-md w-full mx-4">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-playfair text-2xl text-luxury-green">Delete Subcategory</h3>
                    <button onclick="toggleDeleteSub()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <p class="text-gray-600 mb-6">Are you sure you want to delete this subcategory?</p>
                <div class="flex justify-end gap-4">
                    <button onclick="toggleDeleteSub()"
                        class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                        Cancel
                    </button>
                    <form action="" method="POST" id="deleteSubcategoryForm">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition duration-300">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Category Modal -->
        <div id="editCatModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white rounded-2xl p-6 max-w-md w-full mx-4">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-playfair text-2xl text-luxury-green">Edit Category</h3>
                    <button onclick="toggleEditCat()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="" method="POST" id="editCategoryForm" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="block text-gray-700 mb-2">Category Name</label>
                        <input type="text" name="name" id="editCategoryName"
                            class="w-full bg-cream border-2 border-gold/20 focus:border-gold rounded-lg py-3 px-4 text-gray-800 placeholder-gray-400 focus:outline-none transition duration-300"
                            placeholder="Enter category name">
                    </div>
                    <div class="flex justify-end gap-4">
                        <button type="button" onclick="toggleEditCat()"
                            class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-luxury-green text-white rounded-lg hover:bg-light-green transition duration-300">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Edit Subcategory Modal -->
        <div id="editSubModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
            <div class="bg-white rounded-2xl p-6 max-w-md w-full mx-4">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-playfair text-2xl text-luxury-green">Edit Subcategory</h3>
                    <button onclick="toggleEditSub()" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <form action="" method="POST" id="editSubcategoryForm" class="space-y-4">
                    @csrf
                    @method('PUT')
                    <div>
                        <label class="block text-gray-700 mb-2">Subcategory Name</label>
                        <input type="text" name="name" id="editSubcategoryName"
                            class="w-full bg-cream border-2 border-gold/20 focus:border-gold rounded-lg py-3 px-4 text-gray-800 placeholder-gray-400 focus:outline-none transition duration-300"
                            placeholder="Enter subcategory name">
                    </div>
                    <div class="flex justify-end gap-4">
                        <button type="button" onclick="toggleEditSub()"
                            class="px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-4 py-2 bg-luxury-green text-white rounded-lg hover:bg-light-green transition duration-300">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Users Management -->
        <div class="mt-8 bg-white rounded-2xl p-6 border-2 border-gold/20 shadow-lg shadow-gold/5">
            <div class="flex items-center justify-between mb-6">
                <h2 class="font-playfair text-2xl text-luxury-green">Users Management</h2>
                <div class="flex items-center gap-4">
                    <div class="relative">
                        <input type="text" placeholder="Search users..."
                            class="pl-10 pr-4 py-2 rounded-xl border-2 border-gold/20 focus:border-gold focus:outline-none transition duration-300">
                        <svg class="w-5 h-5 text-gold absolute left-3 top-1/2 -translate-y-1/2" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <button class="text-gold hover:text-luxury-green transition duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full min-w-[800px]">
                    <thead>
                        <tr class="text-left text-gray-500 border-b border-gold/20">
                            <th class="pb-4">User</th>
                            <th class="pb-4">Role</th>
                            <th class="pb-4">Status</th>
                            <th class="pb-4">Joined</th>
                            <th class="pb-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gold/20">
                        @foreach ($users as $user)
                            <tr class="text-sm">
                                <td class="py-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-8 h-8 rounded-full overflow-hidden">
                                            <img src="https://images.unsplash.com/photo-1606722590583-6951b5ea92ad?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80"
                                                alt="Profile" class="w-full h-full object-cover">
                                        </div>
                                        <div>
                                            <span class="block">{{ $user->name }}</span>
                                            <span class="text-xs text-gray-500">{{ $user->email }}</span>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4">{{ $user->role }}</td>
                                <td class="py-4">
                                    <span
                                        class="px-3 py-1 rounded-full text-xs bg-luxury-green/10 text-luxury-green">{{ ucwords($user->status) }}</span>
                                </td>
                                <td class="py-4">{{ $user->created_at->format('M d, Y') }}</td>
                                <td class="py-4">
                                    <div class="flex items-center gap-2">
                                        <form action="{{route('user.manage', $user->id)}}" method="POST" class="flex items-center">
                                            @csrf
                                            @method('PUT')
                                        <button class="text-luxury-green hover:text-light-green">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </button>
                                        </form>

                                        <form action="{{route('user.destroy', $user->id)}}" method="POST" class="flex items-center">
                                            @csrf
                                        <button class="text-red-500 hover:text-red-600">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
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

    <!-- Portfolio Modal -->
    <div id="portfolioModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-2xl p-6 max-w-4xl w-full mx-4">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-playfair text-2xl text-luxury-green">Portfolio Review</h3>
                <button class="text-gray-500 hover:text-gray-700 close-modal">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="swiper portfolio-swiper">
                <div class="swiper-wrapper">

                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev text-luxury-green"></div>
                <div class="swiper-button-next text-luxury-green"></div>
            </div>
        </div>
    </div>

    <!-- Report Modal -->
    <div id="reportModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
        <div class="bg-white rounded-2xl p-6 max-w-2xl w-full mx-4">
            <div class="flex justify-between items-center mb-6">
                <h3 class="font-playfair text-2xl text-luxury-green">Report Review</h3>
                <button class="text-gray-500 hover:text-gray-700 close-modal">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="space-y-4">
                <div>
                    <h4 class="font-medium text-gray-700">Report Type</h4>
                    <p class="text-gray-600" id="reportType">Inappropriate Content</p>
                </div>
                <div>
                    <h4 class="font-medium text-gray-700">Reporter</h4>
                    <div class="flex items-center gap-3 mt-2">
                        <div class="w-10 h-10 rounded-full overflow-hidden">
                            <img src="" alt="Reporter" class="w-full h-full object-cover"
                                id="reporterImage">
                        </div>
                        <div>
                            <p class="font-medium" id="reporterName">Sarah Johnson</p>
                            <p class="text-sm text-gray-500" id="reporterEmail">sarah@example.com</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-medium text-gray-700">Reported User</h4>
                    <div class="flex items-center gap-3 mt-2">
                        <div class="w-10 h-10 rounded-full overflow-hidden">
                            <img src="" alt="Reported User" class="w-full h-full object-cover"
                                id="reportedUserImage">
                        </div>
                        <div>
                            <p class="font-medium" id="reportedUserName">John Doe</p>
                            <p class="text-sm text-gray-500" id="reportedUserEmail">john@example.com</p>
                        </div>
                    </div>
                </div>
                <div>
                    <h4 class="font-medium text-gray-700">Report Details</h4>
                    <p class="text-gray-600 mt-2" id="reportDetails">The artisan's profile contains inappropriate
                        images and descriptions that violate our community guidelines.</p>
                </div>
                <div class="flex justify-end gap-4 mt-6">
                    <button
                        class="px-4 py-2 border border-red-500 text-red-500 rounded-lg hover:bg-red-50 transition duration-300">
                        Ban User
                    </button>
                    <button
                        class="px-4 py-2 bg-luxury-green text-white rounded-lg hover:bg-light-green transition duration-300">
                        Dismiss Report
                    </button>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        // Swiper
        const portfolioSwiper = new Swiper('.portfolio-swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

        // Portfolio Modal
        const portfolioModal = document.getElementById('portfolioModal');
        const portfolioBtns = document.querySelectorAll('.portfolio-btn');
        const portfolioSwiperWrapper = document.querySelector('.portfolio-swiper .swiper-wrapper');

        portfolioBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const artisanName = btn.dataset.artisanName;
                const subcategory = btn.dataset.subcategory;
                const portfolios = JSON.parse(btn.dataset.portfolio);

                portfolioSwiperWrapper.innerHTML = '';

                portfolios.forEach(path => {
                    portfolioSwiperWrapper.innerHTML += `
                        <div class="swiper-slide">
                            <img src="${path}" alt="Portfolio Image" class="w-full h-[500px] object-cover rounded-xl">
                        </div>
                    `;
                });

                portfolioModal.classList.remove('hidden');
            });
        });

        // Report Modal
        const reportModal = document.getElementById('reportModal');
        const reviewBtns = document.querySelectorAll('.review-btn');

        document.querySelectorAll('.close-modal').forEach(btn => {
            btn.addEventListener('click', () => {
                portfolioModal.classList.add('hidden');
                reportModal.classList.add('hidden');
            });
        });

        window.addEventListener('click', (e) => {
            if (e.target === portfolioModal) {
                portfolioModal.classList.add('hidden');
            }
            if (e.target === reportModal) {
                reportModal.classList.add('hidden');
            }
        });

        // Category Management
        const categoryModal = document.getElementById('categoryModal');
        const subcategoryModal = document.getElementById('subcategoryModal');

        function toggleCategoryModal() {
            categoryModal.classList.toggle('hidden');
        }

        function toggleSubcategoryModal(categoryId = null) {
            if (categoryId) {
                document.getElementById('parentCategoryId').value = categoryId;
            }
            subcategoryModal.classList.toggle('hidden');
        }

        function editCategory(id, name) {
            toggleEditCat(id, name);
        }

        function editSubcategory(id, name) {
            toggleEditSub(id, name);
        }

        // Delete Modals
        const deleteCategoryModal = document.getElementById('deleteCategoryModal');
        const deleteSubModal = document.getElementById('deleteSubModal');

        function toggleDeleteCat(id = null) {
            if (id) {
                document.getElementById('deleteCategoryForm').action = `{{ route('category.destroy', '') }}/${id}`;
            }
            deleteCategoryModal.classList.toggle('hidden');
        }

        function toggleDeleteSub(id = null) {
            if (id) {
                document.getElementById('deleteSubcategoryForm').action = `{{ route('subcategory.destroy', '') }}/${id}`;
            }
            deleteSubModal.classList.toggle('hidden');
        }

        function deleteCategory(id) {
            toggleDeleteCat(id);
        }

        function deleteSubcategory(id) {
            toggleDeleteSub(id);
        }

        // Edit Modals
        const editCatModal = document.getElementById('editCatModal');
        const editSubModal = document.getElementById('editSubModal');

        function toggleEditCat(id = null, name = null) {
            if (id) {
                document.getElementById('editCategoryForm').action = `{{ route('category.update', '') }}/${id}`;
                document.getElementById('editCategoryName').value = name;
            }
            editCatModal.classList.toggle('hidden');
        }

        function toggleEditSub(id = null, name = null) {
            if (id) {
                document.getElementById('editSubcategoryForm').action = `{{ route('subcategory.update', '') }}/${id}`;
                document.getElementById('editSubcategoryName').value = name;
            }
            editSubModal.classList.toggle('hidden');
        }
    </script>
</body>

</html>
