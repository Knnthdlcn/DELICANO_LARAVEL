<script setup lang="ts">
import { Head, Link, router } from '@inertiajs/vue3';
import { ref, watch, computed, onMounted, onUnmounted } from 'vue';
import MainLayout from '@/layouts/MainLayout.vue';
import CategorySelect from '@/components/CategorySelect.vue';

interface Product {
    id: number;
    name: string;
    description: string;
    price: number;
    image: string | null;
    category: string;
    is_service: boolean;
}

interface PaginatedProducts {
    data: Product[];
    current_page: number;
    last_page: number;
    per_page: number;
    total: number;
}

const props = defineProps<{
    products: PaginatedProducts;
    categories: string[];
    filters: {
        category?: string;
        search?: string;
    };
}>();

defineOptions({ layout: MainLayout });

const selectedCategory = ref(props.filters.category || '');
const searchQuery = ref(props.filters.search || '');
const searchError = ref('');
const isSearching = ref(false);
const showScrollToTop = ref(false);

// Scroll to top button handler
const handleScroll = () => {
    showScrollToTop.value = window.scrollY > 300;
};

const scrollToTop = () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};

onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});

// Validate search query
const validateSearch = () => {
    searchError.value = '';
    
    if (searchQuery.value.trim() && searchQuery.value.trim().length < 2) {
        searchError.value = 'Search query must be at least 2 characters';
        return false;
    }
    
    if (searchQuery.value.length > 100) {
        searchError.value = 'Search query is too long (max 100 characters)';
        return false;
    }
    
    return true;
};

// Check if search is valid
const isSearchValid = computed(() => {
    return !searchQuery.value || (searchQuery.value.trim().length >= 2 && searchQuery.value.length <= 100);
});

const filterProducts = () => {
    if (!validateSearch()) {
        return;
    }
    
    isSearching.value = true;
    
    router.get('/products', {
        category: selectedCategory.value || undefined,
        search: searchQuery.value.trim() || undefined,
    }, {
        preserveState: true,
        preserveScroll: true,
        onFinish: () => {
            isSearching.value = false;
        },
    });
};

// Clear search
const clearSearch = () => {
    searchQuery.value = '';
    searchError.value = '';
    filterProducts();
};

// Clear all filters
const clearFilters = () => {
    searchQuery.value = '';
    selectedCategory.value = '';
    searchError.value = '';
    filterProducts();
};

watch([selectedCategory], () => {
    filterProducts();
});

// Validate on input
watch(searchQuery, () => {
    if (searchQuery.value) {
        validateSearch();
    } else {
        searchError.value = '';
    }
});
</script>

<template>
    <Head title="Products & Services" />

    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
        <!-- Scroll to Top Button -->
        <button
            v-if="showScrollToTop"
            @click="scrollToTop"
            class="fixed bottom-8 right-8 z-50 rounded-full bg-gradient-to-r from-yellow-400 to-yellow-500 p-3 text-gray-900 shadow-lg transition-all duration-300 hover:shadow-2xl hover:scale-110 animate-fade-in"
            title="Scroll to top"
        >
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
            </svg>
        </button>

        <!-- Header -->
        <section class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 py-20 text-white">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmQ3MDAiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE0YzMuMzE0IDAgNiAyLjY4NiA2IDZzLTIuNjg2IDYtNiA2LTYtMi42ODYtNi02IDIuNjg2LTYgNi02ek0yNCAzOGMzLjMxNCAwIDYgMi42ODYgNiA2cy0yLjY4NiA2LTYgNi02LTIuNjg2LTYtNiAyLjY4Ni02IDYtNnoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30"></div>
            <div class="container relative mx-auto px-4 animate-fade-in-up">
                <h1 class="mb-4 text-5xl font-black lg:text-6xl" style="font-family: 'Playfair Display', serif;">Our Gallery</h1>
                <p class="text-xl text-gray-300">Premium equipment for photography & videography professionals</p>
            </div>
        </section>

        <div class="container mx-auto px-4 py-12">
            <!-- Filters -->
            <div class="mb-8 rounded-2xl bg-white p-8 shadow-lg animate-fade-in-up">
                <div class="mb-6 flex items-center justify-between">
                    <h2 class="text-2xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">Filter Collection</h2>
                    <button
                        v-if="selectedCategory || searchQuery"
                        @click="clearFilters"
                        class="text-sm text-yellow-600 hover:text-yellow-700 font-semibold transition-colors"
                    >
                        Clear All Filters
                    </button>
                </div>
                
                <div class="grid gap-4 md:grid-cols-2">
                    <!-- Search -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Search Products
                        </label>
                        <div class="relative">
                            <input
                                v-model="searchQuery"
                                @keyup.enter="filterProducts"
                                type="text"
                                placeholder="Search products..."
                                maxlength="100"
                                class="w-full rounded-lg border px-4 py-3 pr-20 text-gray-900 placeholder-gray-500 focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                                :class="{
                                    'border-red-500': searchError,
                                    'border-gray-300': !searchError
                                }"
                            />
                            <div class="absolute right-3 top-1/2 -translate-y-1/2 flex gap-1">
                                <button
                                    v-if="searchQuery"
                                    @click="clearSearch"
                                    class="text-gray-400 hover:text-gray-600"
                                    title="Clear search"
                                >
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                </button>
                                <button
                                    @click="filterProducts"
                                    :disabled="!!searchError || isSearching"
                                    class="text-gray-400 hover:text-gray-600 disabled:opacity-50 disabled:cursor-not-allowed"
                                    title="Search"
                                >
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <p v-if="searchError" class="mt-1 text-sm text-red-500">
                            {{ searchError }}
                        </p>
                        <p v-else-if="searchQuery" class="mt-1 text-xs text-gray-500">
                            {{ searchQuery.length }}/100 characters
                        </p>
                    </div>

                    <!-- Category Filter -->
                    <div>
                        <label class="mb-2 block text-sm font-medium text-gray-700">
                            Category
                        </label>
                        <CategorySelect 
                            v-model="selectedCategory"
                            :categories="categories"
                            @update:modelValue="filterProducts()"
                        />
                    </div>
                </div>
                
                <!-- Active Filters Display -->
                <div v-if="selectedCategory || (searchQuery && !searchError)" class="mt-4 flex flex-wrap gap-2">
                    <span class="text-sm font-medium text-gray-700">Active Filters:</span>
                    <span v-if="selectedCategory" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-sm text-blue-800">
                        Category: {{ selectedCategory }}
                        <button @click="selectedCategory = ''; filterProducts()" class="hover:text-blue-900">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </span>
                    <span v-if="searchQuery && !searchError" class="inline-flex items-center gap-1 rounded-full bg-blue-100 px-3 py-1 text-sm text-blue-800">
                        Search: "{{ searchQuery }}"
                        <button @click="clearSearch" class="hover:text-blue-900">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </span>
                </div>
            </div>

            <!-- Loading State -->
            <div v-if="isSearching" class="mb-4 rounded-lg bg-blue-50 p-4 text-blue-800">
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                    </svg>
                    <span>Searching products...</span>
                </div>
            </div>

            <!-- Products Grid -->
            <div v-if="products.data.length > 0" class="mb-8">
                <div class="mb-6 text-sm font-medium text-gray-600">
                    Showing <span class="text-gray-900">{{ products.data.length }}</span> of <span class="text-gray-900">{{ products.total }}</span> products
                </div>
                <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div
                        v-for="product in products.data"
                        :key="product.id"
                        class="group flex flex-col overflow-hidden rounded-2xl bg-white shadow-md transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 animate-scale-in"
                    >
                        <div class="relative aspect-square overflow-hidden bg-gray-100">
                            <img
                                v-if="product.image"
                                :src="product.image"
                                :alt="product.name"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110"
                            />
                            <div v-else class="flex h-full items-center justify-center text-gray-400">
                                <svg class="h-20 w-20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span v-if="product.is_service" class="rounded-full bg-yellow-500 px-4 py-1.5 text-xs font-bold text-gray-900 shadow-lg">Service</span>
                            </div>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="mb-3">
                                <span class="text-sm font-semibold tracking-wide text-yellow-600 uppercase">{{ product.category }}</span>
                            </div>
                            <h3 class="mb-3 text-lg font-bold text-gray-900 group-hover:text-yellow-600 transition-colors duration-300">{{ product.name }}</h3>
                            <p class="mb-5 text-sm text-gray-600 leading-relaxed line-clamp-2 flex-grow">{{ product.description }}</p>
                            <div class="flex flex-col gap-3">
                                <div class="flex items-center justify-between">
                                    <span class="text-xl font-bold text-yellow-600">₱{{ Number(product.price).toLocaleString('en-PH', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}</span>
                                </div>
                                <div class="grid grid-cols-2 gap-3">
                                    <button class="rounded-lg px-4 py-2.5 text-xs font-bold text-gray-900 transition-all duration-300 border-2 border-yellow-400 hover:border-yellow-600 hover:bg-yellow-400 flex items-center justify-center gap-1.5">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                        </svg>
                                        <span class="hidden lg:inline">Add to Cart</span>
                                        <span class="lg:hidden">Add</span>
                                    </button>
                                    <button class="rounded-lg px-4 py-2.5 text-xs font-bold text-gray-900 transition-all duration-300 border-2 border-yellow-400 hover:border-yellow-600 hover:bg-yellow-400 flex items-center justify-center gap-1.5">
                                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                        </svg>
                                        <span>View</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Empty State -->
            <div v-else class="rounded-2xl bg-white p-16 text-center shadow-lg animate-fade-in">
                <svg class="mx-auto mb-6 h-20 w-20 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                </svg>
                <h3 class="mb-3 text-2xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">No products found</h3>
                <p class="text-gray-600">Try adjusting your filters or search terms</p>
            </div>

            <!-- Pagination -->
            <div v-if="products.last_page > 1" class="mt-8 flex justify-center gap-2">
                <Link
                    v-for="page in products.last_page"
                    :key="page"
                    :href="`/products?page=${page}`"
                    preserve-state
                    preserve-scroll
                    :class="[
                        'rounded-lg px-4 py-2 font-medium transition',
                        page === products.current_page
                            ? 'bg-blue-600 text-white'
                            : 'bg-white text-gray-700 hover:bg-gray-100'
                    ]"
                >
                    {{ page }}
                </Link>
            </div>
        </div>
    </div>
</template>
