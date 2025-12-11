<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';

defineOptions({ layout: MainLayout });

interface CartItem {
    id: number;
    name: string;
    price: number;
    image: string | null;
    quantity: number;
    category: string;
}

const cartItems = defineModel<CartItem[]>('items', { default: () => [] });

const removeItem = (id: number) => {
    cartItems.value = cartItems.value.filter(item => item.id !== id);
};

const updateQuantity = (id: number, quantity: number) => {
    const item = cartItems.value.find(item => item.id === id);
    if (item && quantity > 0) {
        item.quantity = quantity;
    }
};

const subtotal = () => {
    return cartItems.value.reduce((sum, item) => sum + (item.price * item.quantity), 0);
};

const tax = () => {
    return subtotal() * 0.12; // 12% VAT
};

const total = () => {
    return subtotal() + tax();
};
</script>

<template>
    <Head title="Shopping Cart" />

    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
        <!-- Header -->
        <section class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 py-20 text-white">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmQ3MDAiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE0YzMuMzE0IDAgNiAyLjY4NiA2IDZzLTIuNjg2IDYtNiA2LTYtMi42ODYtNi02IDIuNjg2LTYgNi02ek0yNCAzOGMzLjMxNCAwIDYgMi42ODYgNiA2cy0yLjY4NiA2LTYgNi02LTIuNjg2LTYtNiAyLjY4Ni02IDYtNnoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30"></div>
            <div class="container relative mx-auto px-4 animate-fade-in-up">
                <h1 class="mb-4 text-5xl font-bold lg:text-6xl" style="font-family: 'Playfair Display', serif;">Shopping Cart</h1>
                <p class="text-xl text-gray-300">Review your selected items before checkout</p>
            </div>
        </section>

        <div class="container mx-auto px-4 py-12">
            <div class="grid gap-8 lg:grid-cols-3">
                <!-- Cart Items -->
                <div class="lg:col-span-2">
                    <!-- Empty Cart -->
                    <div v-if="cartItems.length === 0" class="rounded-2xl bg-white p-12 text-center shadow-lg animate-fade-in">
                        <svg class="mx-auto mb-6 h-24 w-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        <h2 class="mb-3 text-2xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">Your cart is empty</h2>
                        <p class="mb-8 text-gray-600">Start shopping to add items to your cart</p>
                        <Link
                            href="/products"
                            class="inline-block rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-500 px-8 py-3 font-bold text-gray-900 transition-all duration-300 hover:shadow-lg hover:scale-105"
                        >
                            Continue Shopping
                        </Link>
                    </div>

                    <!-- Cart Items List -->
                    <div v-else class="space-y-4">
                        <div
                            v-for="item in cartItems"
                            :key="item.id"
                            class="rounded-2xl bg-white p-6 shadow-md transition-all duration-300 hover:shadow-lg animate-fade-in"
                        >
                            <div class="flex gap-6">
                                <!-- Product Image -->
                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-lg bg-gray-100">
                                    <img
                                        v-if="item.image"
                                        :src="item.image"
                                        :alt="item.name"
                                        class="h-full w-full object-cover"
                                    />
                                    <div v-else class="flex h-full items-center justify-center">
                                        <svg class="h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>

                                <!-- Product Details -->
                                <div class="flex-grow">
                                    <div class="mb-2 flex items-start justify-between">
                                        <div>
                                            <p class="text-sm font-semibold tracking-wide text-yellow-600 uppercase">{{ item.category }}</p>
                                            <h3 class="text-lg font-bold text-gray-900">{{ item.name }}</h3>
                                        </div>
                                        <button
                                            @click="removeItem(item.id)"
                                            class="text-gray-400 hover:text-red-500 transition-colors"
                                            title="Remove item"
                                        >
                                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                            </svg>
                                        </button>
                                    </div>

                                    <div class="flex items-end justify-between">
                                        <!-- Quantity -->
                                        <div class="flex items-center gap-2">
                                            <label class="text-sm font-medium text-gray-700">Qty:</label>
                                            <div class="flex items-center border border-gray-300 rounded-lg">
                                                <button
                                                    @click="updateQuantity(item.id, item.quantity - 1)"
                                                    class="px-3 py-1 text-gray-600 hover:bg-gray-100"
                                                >
                                                    −
                                                </button>
                                                <input
                                                    :value="item.quantity"
                                                    @input="updateQuantity(item.id, parseInt($event.target.value) || 1)"
                                                    type="number"
                                                    min="1"
                                                    class="w-12 text-center text-gray-900 border-l border-r border-gray-300 focus:outline-none"
                                                />
                                                <button
                                                    @click="updateQuantity(item.id, item.quantity + 1)"
                                                    class="px-3 py-1 text-gray-600 hover:bg-gray-100"
                                                >
                                                    +
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Price -->
                                        <div class="text-right">
                                            <p class="text-sm text-gray-600">₱{{ Number(item.price).toLocaleString('en-PH', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }} × {{ item.quantity }}</p>
                                            <p class="text-lg font-bold text-gray-900">₱{{ Number(item.price * item.quantity).toLocaleString('en-PH', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cart Summary -->
                <div class="lg:col-span-1">
                    <div class="rounded-2xl bg-white p-8 shadow-lg sticky top-8 animate-fade-in-up">
                        <h2 class="mb-6 text-2xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">Order Summary</h2>

                        <div class="space-y-4 border-b border-gray-200 pb-6">
                            <div class="flex justify-between text-gray-700">
                                <span>Subtotal</span>
                                <span class="font-semibold">₱{{ Number(subtotal()).toLocaleString('en-PH', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}</span>
                            </div>
                            <div class="flex justify-between text-gray-700">
                                <span>Tax (12% VAT)</span>
                                <span class="font-semibold">₱{{ Number(tax()).toLocaleString('en-PH', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}</span>
                            </div>
                        </div>

                        <div class="mb-8 mt-6 flex justify-between text-xl">
                            <span class="font-bold text-gray-900">Total</span>
                            <span class="font-bold text-yellow-600">₱{{ Number(total()).toLocaleString('en-PH', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}</span>
                        </div>

                        <button
                            :disabled="cartItems.length === 0"
                            class="mb-4 w-full rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-500 px-6 py-3 font-bold text-gray-900 transition-all duration-300 hover:shadow-lg hover:scale-105 disabled:opacity-50 disabled:cursor-not-allowed"
                        >
                            Proceed to Checkout
                        </button>

                        <Link
                            href="/products"
                            class="block text-center rounded-lg border-2 border-yellow-400 px-6 py-3 font-semibold text-yellow-600 hover:bg-yellow-50 transition-colors duration-300"
                        >
                            Continue Shopping
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
