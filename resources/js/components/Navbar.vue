<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const mobileMenuOpen = ref(false);

const toggleMobileMenu = () => {
    mobileMenuOpen.value = !mobileMenuOpen.value;
};
</script>

<template>
    <nav class="bg-white border-b border-gray-200 transition-all duration-300 hover:shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-5">
                <!-- Logo -->
                <Link href="/" class="text-2xl font-black text-gray-800 tracking-tight transition-all duration-300 hover:text-yellow-500" style="font-family: 'Playfair Display', serif;">
                    <span class="text-yellow-500">LENS</span>CRAFT
                </Link>

                <!-- Desktop Navigation -->
                <div class="hidden items-center gap-8 md:flex">
                    <Link
                        href="/"
                        class="font-medium text-gray-600 transition-all duration-300 hover:text-yellow-500 relative group"
                        :class="{ 'text-yellow-500': $page.url === '/' }"
                    >
                        Home
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-300 group-hover:w-full" :class="{ 'w-full': $page.url === '/' }"></span>
                    </Link>
                    <Link
                        href="/products"
                        class="font-medium text-gray-600 transition-all duration-300 hover:text-yellow-500 relative group"
                        :class="{ 'text-yellow-500': $page.url.startsWith('/products') }"
                    >
                        Gallery
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-300 group-hover:w-full" :class="{ 'w-full': $page.url.startsWith('/products') }"></span>
                    </Link>
                    <Link
                        href="/about"
                        class="font-medium text-gray-600 transition-all duration-300 hover:text-yellow-500 relative group"
                        :class="{ 'text-yellow-500': $page.url === '/about' }"
                    >
                        About
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-300 group-hover:w-full" :class="{ 'w-full': $page.url === '/about' }"></span>
                    </Link>
                    <Link
                        href="/contact"
                        class="font-medium text-gray-600 transition-all duration-300 hover:text-yellow-500 relative group"
                        :class="{ 'text-yellow-500': $page.url === '/contact' }"
                    >
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-300 group-hover:w-full" :class="{ 'w-full': $page.url === '/contact' }"></span>
                    </Link>
                    <Link
                        href="/cart"
                        class="flex items-center gap-2 font-medium text-gray-600 transition-all duration-300 hover:text-yellow-500 relative group"
                    >
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        Cart
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-yellow-500 transition-all duration-300 group-hover:w-full"></span>
                    </Link>
                    <Link
                        v-if="$page.props.auth.user"
                        href="/dashboard"
                        class="rounded-md bg-gradient-to-r from-yellow-400 to-yellow-500 px-6 py-2.5 font-semibold text-gray-900 transition-all duration-300 hover:shadow-lg hover:scale-105"
                    >
                        Dashboard
                    </Link>
                    <template v-else>
                        <Link
                            href="/login"
                            class="font-medium text-gray-600 transition-all duration-300 hover:text-yellow-500"
                        >
                            Login
                        </Link>
                        <Link
                            href="/register"
                            class="rounded-md bg-gradient-to-r from-yellow-400 to-yellow-500 px-6 py-2.5 font-semibold text-gray-900 transition-all duration-300 hover:shadow-lg hover:scale-105"
                        >
                            Register
                        </Link>
                    </template>
                </div>

                <!-- Mobile Menu Button -->
                <button
                    @click="toggleMobileMenu"
                    class="md:hidden text-gray-700 focus:outline-none"
                >
                    <svg
                        v-if="!mobileMenuOpen"
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"
                        />
                    </svg>
                    <svg
                        v-else
                        class="h-6 w-6"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                        />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div v-if="mobileMenuOpen" class="border-t border-gray-200 py-4 md:hidden">
                <div class="flex flex-col gap-4">
                    <Link
                        href="/"
                        class="font-medium text-gray-700 transition hover:text-blue-600"
                        :class="{ 'text-blue-600': $page.url === '/' }"
                        @click="mobileMenuOpen = false"
                    >
                        Home
                    </Link>
                    <Link
                        href="/products"
                        class="font-medium text-gray-700 transition hover:text-blue-600"
                        :class="{ 'text-blue-600': $page.url.startsWith('/products') }"
                        @click="mobileMenuOpen = false"
                    >
                        Products & Services
                    </Link>
                    <Link
                        href="/about"
                        class="font-medium text-gray-700 transition hover:text-blue-600"
                        :class="{ 'text-blue-600': $page.url === '/about' }"
                        @click="mobileMenuOpen = false"
                    >
                        About Us
                    </Link>
                    <Link
                        href="/contact"
                        class="font-medium text-gray-700 transition hover:text-blue-600"
                        :class="{ 'text-blue-600': $page.url === '/contact' }"
                        @click="mobileMenuOpen = false"
                    >
                        Contact
                    </Link>
                    <Link
                        href="/cart"
                        class="flex items-center gap-2 font-medium text-gray-700 transition hover:text-yellow-600"
                        @click="mobileMenuOpen = false"
                    >
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                        </svg>
                        Cart
                    </Link>
                    <Link
                        v-if="$page.props.auth.user"
                        href="/dashboard"
                        class="rounded-lg bg-blue-600 px-6 py-2 text-center font-semibold text-white transition hover:bg-blue-700"
                        @click="mobileMenuOpen = false"
                    >
                        Dashboard
                    </Link>
                    <template v-else>
                        <Link
                            href="/login"
                            class="font-medium text-gray-700 transition hover:text-blue-600"
                            @click="mobileMenuOpen = false"
                        >
                            Login
                        </Link>
                        <Link
                            href="/register"
                            class="rounded-lg bg-blue-600 px-6 py-2 text-center font-semibold text-white transition hover:bg-blue-700"
                            @click="mobileMenuOpen = false"
                        >
                            Register
                        </Link>
                    </template>
                </div>
            </div>
        </div>
    </nav>
</template>
