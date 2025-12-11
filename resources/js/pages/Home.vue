<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';

interface Product {
    id: number;
    name: string;
    description: string;
    price: number;
    image: string | null;
    category: string;
    is_service: boolean;
}

defineProps<{
    featuredProducts: Product[];
}>();

defineOptions({ layout: MainLayout });
</script>

<template>
    <Head title="Home - Your Business" />

    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
        <!-- Hero Section -->
        <section class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 text-white">
            <!-- Photography Equipment Pattern Background -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute inset-0" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;200&quot; height=&quot;200&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cg fill=&quot;%23facc15&quot; fill-opacity=&quot;1&quot;%3E%3C!-- Camera --%3E%3Crect x=&quot;20&quot; y=&quot;25&quot; width=&quot;35&quot; height=&quot;25&quot; rx=&quot;3&quot;/%3E%3Crect x=&quot;30&quot; y=&quot;22&quot; width=&quot;10&quot; height=&quot;3&quot;/%3E%3Ccircle cx=&quot;37.5&quot; cy=&quot;37.5&quot; r=&quot;8&quot;/%3E%3Ccircle cx=&quot;37.5&quot; cy=&quot;37.5&quot; r=&quot;5&quot; fill=&quot;%231f2937&quot;/%3E%3Crect x=&quot;50&quot; y=&quot;32&quot; width=&quot;3&quot; height=&quot;10&quot;/%3E%3C!-- Lens --%3E%3Ccircle cx=&quot;140&quot; cy=&quot;40&quot; r=&quot;15&quot;/%3E%3Ccircle cx=&quot;140&quot; cy=&quot;40&quot; r=&quot;10&quot; fill=&quot;%231f2937&quot;/%3E%3Ccircle cx=&quot;140&quot; cy=&quot;40&quot; r=&quot;6&quot;/%3E%3Crect x=&quot;138&quot; y=&quot;25&quot; width=&quot;4&quot; height=&quot;5&quot;/%3E%3C!-- Drone --%3E%3Crect x=&quot;85&quot; y=&quot;80&quot; width=&quot;30&quot; height=&quot;20&quot; rx=&quot;2&quot;/%3E%3Ccircle cx=&quot;85&quot; cy=&quot;75&quot; r=&quot;5&quot;/%3E%3Ccircle cx=&quot;115&quot; cy=&quot;75&quot; r=&quot;5&quot;/%3E%3Ccircle cx=&quot;85&quot; cy=&quot;105&quot; r=&quot;5&quot;/%3E%3Ccircle cx=&quot;115&quot; cy=&quot;105&quot; r=&quot;5&quot;/%3E%3Ccircle cx=&quot;100&quot; cy=&quot;90&quot; r=&quot;6&quot; fill=&quot;%231f2937&quot;/%3E%3C!-- Tripod --%3E%3Crect x=&quot;38&quot; y=&quot;120&quot; width=&quot;3&quot; height=&quot;35&quot;/%3E%3Cline x1=&quot;39.5&quot; y1=&quot;155&quot; x2=&quot;28&quot; y2=&quot;170&quot; stroke=&quot;%23facc15&quot; stroke-width=&quot;3&quot;/%3E%3Cline x1=&quot;39.5&quot; y1=&quot;155&quot; x2=&quot;51&quot; y2=&quot;170&quot; stroke=&quot;%23facc15&quot; stroke-width=&quot;3&quot;/%3E%3Crect x=&quot;33&quot; y=&quot;117&quot; width=&quot;13&quot; height=&quot;5&quot; rx=&quot;2&quot;/%3E%3C!-- Memory Card --%3E%3Crect x=&quot;150&quot; y=&quot;120&quot; width=&quot;25&quot; height=&quot;30&quot; rx=&quot;2&quot;/%3E%3Crect x=&quot;153&quot; y=&quot;123&quot; width=&quot;19&quot; height=&quot;4&quot;/%3E%3Crect x=&quot;153&quot; y=&quot;130&quot; width=&quot;19&quot; height=&quot;15&quot; fill=&quot;%231f2937&quot;/%3E%3C/g%3E%3C/svg%3E'); background-size: 200px 200px;"></div>
            </div>
            <div class="absolute inset-0 bg-gradient-to-br from-gray-900/95 via-gray-800/90 to-gray-900/95"></div>
            <div class="container relative mx-auto px-4 py-32 lg:py-40">
                <div class="max-w-4xl animate-fade-in-up">
                    <div class="mb-6 inline-block rounded-full bg-yellow-500/10 px-6 py-2 backdrop-blur-sm">
                        <span class="text-sm font-semibold tracking-wide text-yellow-400">PROFESSIONAL PHOTOGRAPHY & VIDEOGRAPHY</span>
                    </div>
                    <h1 class="mb-6 text-6xl font-bold leading-tight lg:text-7xl animate-fade-in-up delay-100" style="font-family: 'Playfair Display', serif;">
                        Capture Every
                        <span class="text-yellow-400">Moment</span>
                    </h1>
                    <p class="mb-10 text-xl text-gray-300 lg:text-2xl max-w-2xl animate-fade-in-up delay-200">
                        Premium cameras, drones, and accessories for photographers and videographers who demand excellence. Your vision, our equipment.
                    </p>
                    <div class="flex flex-wrap gap-4 animate-fade-in-up delay-300">
                        <Link
                            :href="'/products'"
                            class="group relative overflow-hidden rounded-lg bg-yellow-500 px-8 py-4 font-semibold text-gray-900 transition-all duration-300 hover:shadow-2xl hover:shadow-yellow-500/50 hover:scale-105"
                        >
                            <span class="relative z-10">Explore Gallery</span>
                            <div class="absolute inset-0 bg-gradient-to-r from-yellow-400 to-yellow-600 opacity-0 transition-opacity duration-300 group-hover:opacity-100"></div>
                        </Link>
                        <Link
                            :href="'/contact'"
                            class="group rounded-lg border-2 border-white/30 px-8 py-4 font-semibold text-white backdrop-blur-sm transition-all duration-300 hover:border-yellow-500 hover:bg-yellow-500/10"
                        >
                            Get In Touch
                        </Link>
                    </div>
                </div>
            </div>
            <!-- Decorative Elements -->
            <div class="absolute -bottom-1 left-0 right-0 h-48 bg-gradient-to-t from-gray-50 via-gray-100/60 via-gray-200/40 via-gray-300/30 to-transparent"></div>
        </section>

        <!-- Features Section -->
        <section class="py-24">
            <div class="container mx-auto px-4">
                <div class="mb-16 text-center animate-fade-in-up">
                    <h2 class="mb-4 text-5xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">Why Choose LensCraft</h2>
                    <p class="text-xl text-gray-600">Excellence in every frame</p>
                </div>
                <div class="grid gap-8 md:grid-cols-3">
                    <div class="group rounded-xl bg-white p-10 text-center shadow-md transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 animate-fade-in-up">
                        <div class="mb-6 flex justify-center">
                            <div class="rounded-full bg-yellow-500/10 p-6 transition-all duration-300 group-hover:bg-yellow-500 group-hover:scale-110">
                                <svg class="h-12 w-12 text-yellow-600 transition-colors duration-300 group-hover:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-4 text-2xl font-bold text-gray-900">Premium Quality</h3>
                        <p class="text-gray-600 leading-relaxed">Professional-grade equipment from the world's most trusted brands</p>
                    </div>
                    <div class="group rounded-xl bg-white p-10 text-center shadow-md transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 animate-fade-in-up delay-100">
                        <div class="mb-6 flex justify-center">
                            <div class="rounded-full bg-yellow-500/10 p-6 transition-all duration-300 group-hover:bg-yellow-500 group-hover:scale-110">
                                <svg class="h-12 w-12 text-yellow-600 transition-colors duration-300 group-hover:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-4 text-2xl font-bold text-gray-900">Expert Guidance</h3>
                        <p class="text-gray-600 leading-relaxed">Professional consultation and training to elevate your craft</p>
                    </div>
                    <div class="group rounded-xl bg-white p-10 text-center shadow-md transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 animate-fade-in-up delay-200">
                        <div class="mb-6 flex justify-center">
                            <div class="rounded-full bg-yellow-500/10 p-6 transition-all duration-300 group-hover:bg-yellow-500 group-hover:scale-110">
                                <svg class="h-12 w-12 text-yellow-600 transition-colors duration-300 group-hover:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-4 text-2xl font-bold text-gray-900">Fast Service</h3>
                        <p class="text-gray-600 leading-relaxed">Quick delivery and responsive support whenever you need us</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Products Section -->
        <section class="bg-gradient-to-b from-white to-gray-50 py-24" v-if="featuredProducts.length > 0">
            <div class="container mx-auto px-4">
                <div class="mb-16 text-center animate-fade-in-up">
                    <h2 class="mb-4 text-5xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">Featured Collection</h2>
                    <p class="text-xl text-gray-600">Handpicked premium gear for professionals</p>
                </div>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <div
                        v-for="(product, index) in featuredProducts"
                        :key="product.id"
                        class="group overflow-hidden rounded-2xl bg-white shadow-md transition-all duration-500 hover:shadow-2xl hover:-translate-y-2 animate-fade-in-up"
                        :class="[`delay-${(index % 3) * 100}`]"
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
                        <div class="p-6">
                            <div class="mb-3">
                                <span class="text-sm font-semibold tracking-wide text-yellow-600 uppercase">{{ product.category }}</span>
                            </div>
                            <h3 class="mb-3 text-xl font-bold text-gray-900 group-hover:text-yellow-600 transition-colors duration-300">{{ product.name }}</h3>
                            <p class="mb-5 text-gray-600 leading-relaxed line-clamp-2">{{ product.description }}</p>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-gray-900">₱{{ Number(product.price).toLocaleString('en-PH', { minimumFractionDigits: 2, maximumFractionDigits: 2 }) }}</span>
                                <button class="rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-500 px-6 py-2 font-semibold text-gray-900 transition-all duration-300 hover:shadow-lg hover:scale-105">
                                    View
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-16 text-center animate-fade-in-up delay-400">
                    <Link
                        :href="'/products'"
                        class="inline-block rounded-lg bg-gray-900 px-10 py-4 font-semibold text-white transition-all duration-300 hover:bg-gray-800 hover:shadow-xl hover:scale-105"
                    >
                        Explore Full Collection
                    </Link>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 py-24 text-white">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmQ3MDAiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE0YzMuMzE0IDAgNiAyLjY4NiA2IDZzLTIuNjg2IDYtNiA2LTYtMi42ODYtNi02IDIuNjg2LTYgNi02ek0yNCAzOGMzLjMxNCAwIDYgMi42ODYgNiA2cy0yLjY4NiA2LTYgNi02LTIuNjg2LTYtNiAyLjY4Ni02IDYtNnoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30"></div>
            <div class="container relative mx-auto px-4 text-center">
                <h2 class="mb-6 text-5xl font-bold animate-fade-in-up" style="font-family: 'Playfair Display', serif;">
                    Start Your Creative Journey
                </h2>
                <p class="mb-10 text-xl text-gray-300 max-w-2xl mx-auto animate-fade-in-up delay-100">
                    Get expert advice, premium equipment, and professional training to bring your vision to life
                </p>
                <Link
                    :href="'/contact'"
                    class="inline-block rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-500 px-10 py-4 font-bold text-gray-900 transition-all duration-300 hover:shadow-2xl hover:shadow-yellow-500/50 hover:scale-105 animate-fade-in-up delay-200"
                >
                    Contact Us Today
                </Link>
            </div>
        </section>
    </div>
</template>
