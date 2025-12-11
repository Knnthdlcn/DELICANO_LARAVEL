<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import MainLayout from '@/layouts/MainLayout.vue';

defineOptions({ layout: MainLayout });
</script>

<template>
    <Head title="About Us" />

    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
        <!-- Hero Section -->
        <section class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 py-20 text-white">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmQ3MDAiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE0YzMuMzE0IDAgNiAyLjY4NiA2IDZzLTIuNjg2IDYtNiA2LTYtMi42ODYtNi02IDIuNjg2LTYgNi02ek0yNCAzOGMzLjMxNCAwIDYgMi42ODYgNiA2cy0yLjY4NiA2LTYgNi02LTIuNjg2LTYtNiAyLjY4Ni02IDYtNnoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30"></div>
            <div class="container relative mx-auto px-4 animate-fade-in-up">
                <h1 class="mb-4 text-5xl font-bold lg:text-6xl" style="font-family: 'Playfair Display', serif;">About LENSCRAFT</h1>
                <p class="text-xl text-gray-300">Empowering creatives with premium photography equipment</p>
            </div>
        </section>

        <!-- Company Story -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
                    <div class="animate-fade-in-up">
                        <h2 class="mb-6 text-3xl font-bold text-gray-900 lg:text-4xl" style="font-family: 'Playfair Display', serif;">Our Story</h2>
                        <div class="space-y-4 text-lg text-gray-600">
                            <p>
                                Founded by passionate photographers and videographers, LENSCRAFT was born from a desire to provide creatives with the finest equipment available. We understand the craft because we live it every day.
                            </p>
                            <p>
                                What started as a small camera shop has evolved into the Philippines' premier destination for professional photography and videography equipment, trusted by content creators, filmmakers, and photography enthusiasts nationwide.
                            </p>
                            <p>
                                Today, we continue to curate the latest cameras, lenses, drones, and accessories from the world's leading brands, ensuring you have the tools to capture your vision perfectly.
                            </p>
                        </div>
                    </div>
                    <div class="rounded-2xl bg-gradient-to-br from-gray-900 to-gray-800 p-12 aspect-video animate-fade-in-up delay-200">
                        <div class="flex h-full items-center justify-center text-yellow-400">
                            <svg class="h-32 w-32" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission & Vision -->
        <section class="bg-gray-50 py-20">
            <div class="container mx-auto px-4">
                <div class="grid gap-8 md:grid-cols-2">
                    <div class="rounded-2xl bg-white p-8 shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 animate-fade-in-up">
                        <div class="mb-4 inline-block rounded-full bg-yellow-500/10 p-3">
                            <svg class="h-8 w-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-4 text-2xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">Our Mission</h3>
                        <p class="text-gray-600">
                            To empower photographers and videographers with premium equipment and expert guidance, helping them capture moments that matter and bring their creative visions to life with professional-grade tools.
                        </p>
                    </div>
                    <div class="rounded-2xl bg-white p-8 shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 animate-fade-in-up delay-200">
                        <div class="mb-4 inline-block rounded-full bg-yellow-500/10 p-3">
                            <svg class="h-8 w-8 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-4 text-2xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">Our Vision</h3>
                        <p class="text-gray-600">
                            To be the Philippines' most trusted destination for photography excellence, where every creative professional finds the perfect tools to elevate their craft and tell compelling visual stories.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Core Values -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="mb-12 text-center animate-fade-in-up">
                    <h2 class="mb-4 text-3xl font-bold text-gray-900 lg:text-4xl" style="font-family: 'Playfair Display', serif;">Our Core Values</h2>
                    <p class="text-xl text-gray-600">The principles that guide everything we do</p>
                </div>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                    <div class="text-center animate-fade-in-up delay-100">
                        <div class="mb-4 flex justify-center">
                            <div class="rounded-full bg-yellow-500/10 p-4 transition-all duration-300 hover:bg-yellow-500 hover:scale-110 group">
                                <svg class="h-8 w-8 text-yellow-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-gray-900">Quality</h3>
                        <p class="text-gray-600">Only the finest equipment from trusted brands</p>
                    </div>
                    <div class="text-center animate-fade-in-up delay-200">
                        <div class="mb-4 flex justify-center">
                            <div class="rounded-full bg-yellow-500/10 p-4 transition-all duration-300 hover:bg-yellow-500 hover:scale-110 group">
                                <svg class="h-8 w-8 text-yellow-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-gray-900">Expertise</h3>
                        <p class="text-gray-600">Professional guidance from experienced photographers</p>
                    </div>
                    <div class="text-center animate-fade-in-up delay-300">
                        <div class="mb-4 flex justify-center">
                            <div class="rounded-full bg-yellow-500/10 p-4 transition-all duration-300 hover:bg-yellow-500 hover:scale-110 group">
                                <svg class="h-8 w-8 text-yellow-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-gray-900">Community</h3>
                        <p class="text-gray-600">Supporting the creative community together</p>
                    </div>
                    <div class="text-center animate-fade-in-up delay-400">
                        <div class="mb-4 flex justify-center">
                            <div class="rounded-full bg-yellow-500/10 p-4 transition-all duration-300 hover:bg-yellow-500 hover:scale-110 group">
                                <svg class="h-8 w-8 text-yellow-500 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="mb-2 text-xl font-bold text-gray-900">Passion</h3>
                        <p class="text-gray-600">Driven by love for photography and visual arts</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="bg-gray-50 py-20">
            <div class="container mx-auto px-4">
                <div class="mb-12 text-center animate-fade-in-up">
                    <h2 class="mb-4 text-3xl font-bold text-gray-900 lg:text-4xl" style="font-family: 'Playfair Display', serif;">Meet Our Team</h2>
                    <p class="text-xl text-gray-600">Passionate photographers serving photographers</p>
                </div>
                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-2xl bg-white p-6 text-center shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 animate-scale-in">
                        <div class="mx-auto mb-4 flex h-24 w-24 items-center justify-center rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500">
                            <svg class="h-12 w-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-1 text-lg font-bold text-gray-900">Carlos Reyes</h3>
                        <p class="mb-3 text-sm text-yellow-600 font-semibold">Founder & Master Photographer</p>
                        <p class="text-sm text-gray-600">20+ years capturing moments</p>
                    </div>
                    <div class="rounded-2xl bg-white p-6 text-center shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 animate-scale-in delay-100">
                        <div class="mx-auto mb-4 flex h-24 w-24 items-center justify-center rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500">
                            <svg class="h-12 w-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-1 text-lg font-bold text-gray-900">Maria Santos</h3>
                        <p class="mb-3 text-sm text-yellow-600 font-semibold">Equipment Specialist</p>
                        <p class="text-sm text-gray-600">Expert in camera technology</p>
                    </div>
                    <div class="rounded-2xl bg-white p-6 text-center shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 animate-scale-in delay-200">
                        <div class="mx-auto mb-4 flex h-24 w-24 items-center justify-center rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500">
                            <svg class="h-12 w-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-1 text-lg font-bold text-gray-900">Rico Diaz</h3>
                        <p class="mb-3 text-sm text-yellow-600 font-semibold">Drone & Aerial Specialist</p>
                        <p class="text-sm text-gray-600">Certified drone pilot & trainer</p>
                    </div>
                    <div class="rounded-2xl bg-white p-6 text-center shadow-lg transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 animate-scale-in delay-300">
                        <div class="mx-auto mb-4 flex h-24 w-24 items-center justify-center rounded-full bg-gradient-to-br from-yellow-400 to-yellow-500">
                            <svg class="h-12 w-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-1 text-lg font-bold text-gray-900">Sophia Cruz</h3>
                        <p class="mb-3 text-sm text-yellow-600 font-semibold">Customer Experience Lead</p>
                        <p class="text-sm text-gray-600">Your success is our priority</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 py-20 text-white">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmQ3MDAiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE0YzMuMzE0IDAgNiAyLjY4NiA2IDZzLTIuNjg2IDYtNiA2LTYtMi42ODYtNi02IDIuNjg2LTYgNi02ek0yNCAzOGMzLjMxNCAwIDYgMi42ODYgNiA2cy0yLjY4NiA2LTYgNi02LTIuNjg2LTYtNiAyLjY4Ni02IDYtNnoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30"></div>
            <div class="container relative mx-auto px-4 text-center animate-fade-in-up">
                <h2 class="mb-4 text-3xl font-bold lg:text-4xl" style="font-family: 'Playfair Display', serif;">Ready to Elevate Your Craft?</h2>
                <p class="mb-8 text-xl text-gray-300">Visit our store or get in touch to find the perfect equipment</p>
                <a
                    href="/contact"
                    class="inline-block rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-500 px-8 py-4 font-semibold text-gray-900 transition-all duration-300 hover:shadow-2xl hover:shadow-yellow-500/50 hover:scale-105"
                >
                    Get In Touch
                </a>
            </div>
        </section>
    </div>
</template>
