<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import { computed, ref } from 'vue';
import MainLayout from '@/layouts/MainLayout.vue';

defineOptions({ layout: MainLayout });

const form = useForm({
    name: '',
    email: '',
    subject: '',
    message: '',
});

// Client-side validation
const nameError = ref('');
const emailError = ref('');
const subjectError = ref('');
const messageError = ref('');

const validateName = () => {
    nameError.value = '';
    const name = form.name.trim();
    
    if (!name) {
        nameError.value = 'Please enter your name';
        return false;
    }
    if (name.length < 2) {
        nameError.value = 'Name must be at least 2 characters';
        return false;
    }
    if (!/^[a-zA-Z\s]+$/.test(name)) {
        nameError.value = 'Name can only contain letters and spaces';
        return false;
    }
    return true;
};

const validateEmail = () => {
    emailError.value = '';
    const email = form.email.trim();
    
    if (!email) {
        emailError.value = 'Please enter your email address';
        return false;
    }
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        emailError.value = 'Please enter a valid email address';
        return false;
    }
    return true;
};

const validateSubject = () => {
    subjectError.value = '';
    const subject = form.subject.trim();
    
    if (!subject) {
        subjectError.value = 'Please enter a subject';
        return false;
    }
    if (subject.length < 5) {
        subjectError.value = 'Subject must be at least 5 characters';
        return false;
    }
    return true;
};

const validateMessage = () => {
    messageError.value = '';
    const message = form.message.trim();
    
    if (!message) {
        messageError.value = 'Please enter your message';
        return false;
    }
    if (message.length < 10) {
        messageError.value = 'Message must be at least 10 characters';
        return false;
    }
    if (message.length > 2000) {
        messageError.value = 'Message cannot exceed 2000 characters';
        return false;
    }
    return true;
};

const isFormValid = computed(() => {
    return form.name.trim().length >= 2 &&
           form.email.trim().length > 0 &&
           form.subject.trim().length >= 5 &&
           form.message.trim().length >= 10 &&
           !nameError.value &&
           !emailError.value &&
           !subjectError.value &&
           !messageError.value;
});

const submit = () => {
    // Clear previous errors
    nameError.value = '';
    emailError.value = '';
    subjectError.value = '';
    messageError.value = '';
    
    // Validate all fields
    const isValid = validateName() && validateEmail() && validateSubject() && validateMessage();
    
    if (!isValid) {
        return;
    }
    
    form.post('/contact', {
        onSuccess: () => {
            form.reset();
        },
    });
};

const hasErrors = computed(() => {
    return Object.keys(form.errors).length > 0;
});
</script>

<template>
    <Head title="Contact Us" />

    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-white">
        <!-- Hero Section -->
        <section class="relative overflow-hidden bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900 py-20 text-white">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmQ3MDAiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE0YzMuMzE0IDAgNiAyLjY4NiA2IDZzLTIuNjg2IDYtNiA2LTYtMi42ODYtNi02IDIuNjg2LTYgNi02ek0yNCAzOGMzLjMxNCAwIDYgMi42ODYgNiA2cy0yLjY4NiA2LTYgNi02LTIuNjg2LTYtNiAyLjY4Ni02IDYtNnoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30"></div>
            <div class="container relative mx-auto px-4 animate-fade-in-up">
                <h1 class="mb-4 text-5xl font-bold lg:text-6xl" style="font-family: 'Playfair Display', serif;">Get In Touch</h1>
                <p class="text-xl text-gray-300">Let's discuss your photography equipment needs</p>
            </div>
        </section>

        <div class="container mx-auto px-4 py-12">
            <div class="grid gap-12 lg:grid-cols-2">
                <!-- Contact Information -->
                <div class="animate-fade-in-up">
                    <div class="mb-8">
                        <h2 class="mb-6 text-3xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">Visit Our Store</h2>
                        <p class="text-lg text-gray-600">
                            Stop by our showroom to see and test equipment, or reach out to our team for expert advice on your next purchase.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <!-- Address -->
                        <div class="flex items-start gap-4 animate-fade-in-up delay-100">
                            <div class="rounded-full bg-yellow-500/10 p-3">
                                <svg class="h-6 w-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-1 font-semibold text-gray-900">Store Location</h3>
                                <p class="text-gray-600">
                                    Makati City<br />
                                    Metro Manila<br />
                                    Philippines
                                </p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-4 animate-fade-in-up delay-200">
                            <div class="rounded-full bg-yellow-500/10 p-3">
                                <svg class="h-6 w-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-1 font-semibold text-gray-900">Phone</h3>
                                <p class="text-gray-600">
                                    +63 (917) 123-4567<br />
                                    Mon-Sat: 10:00 AM - 7:00 PM
                                </p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-4 animate-fade-in-up delay-300">
                            <div class="rounded-full bg-yellow-500/10 p-3">
                                <svg class="h-6 w-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-1 font-semibold text-gray-900">Email</h3>
                                <p class="text-gray-600">
                                    info@lenscraft.ph<br />
                                    support@lenscraft.ph
                                </p>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="flex items-start gap-4 animate-fade-in-up delay-400">
                            <div class="rounded-full bg-yellow-500/10 p-3">
                                <svg class="h-6 w-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="mb-1 font-semibold text-gray-900">Follow Us</h3>
                                <div class="flex gap-3">
                                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="text-yellow-600 hover:text-yellow-700 transition">Facebook</a>
                                    <span class="text-gray-300">|</span>
                                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="text-yellow-600 hover:text-yellow-700 transition">Instagram</a>
                                    <span class="text-gray-300">|</span>
                                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="text-yellow-600 hover:text-yellow-700 transition">YouTube</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map Placeholder -->
                    <div class="mt-8 rounded-2xl bg-gradient-to-br from-gray-900 to-gray-800 p-12 aspect-video animate-fade-in-up delay-500">
                        <div class="flex h-full items-center justify-center text-yellow-400">
                            <div class="text-center">
                                <svg class="mx-auto mb-2 h-16 w-16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path>
                                </svg>
                                <p class="text-sm">Visit Our Showroom</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="animate-fade-in-up delay-200">
                    <div class="rounded-2xl bg-white p-8 shadow-lg">
                        <h2 class="mb-6 text-2xl font-bold text-gray-900" style="font-family: 'Playfair Display', serif;">Send Us a Message</h2>

                        <!-- Success Message -->
                        <div
                            v-if="$page.props.flash?.success"
                            class="mb-6 rounded-lg bg-green-50 p-4 text-green-800"
                        >
                            <div class="flex items-center gap-2">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>{{ $page.props.flash.success }}</span>
                            </div>
                        </div>

                        <!-- Error Message -->
                        <div
                            v-if="hasErrors"
                            class="mb-6 rounded-lg bg-red-50 p-4 text-red-800"
                        >
                            <div class="flex items-center gap-2">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <span>Please correct the errors below.</span>
                            </div>
                        </div>

                        <form @submit.prevent="submit" class="space-y-6">
                            <!-- Name -->
                            <div>
                                <label for="name" class="mb-2 block text-sm font-medium text-gray-700">
                                    Your Name <span class="text-red-500">*</span>
                                </label>
                                <input
                                    id="name"
                                    v-model="form.name"
                                    @blur="validateName"
                                    type="text"
                                    maxlength="255"
                                    class="w-full rounded-lg border px-4 py-3 text-gray-900 focus:border-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                                    :class="{ 'border-red-500': form.errors.name || nameError, 'border-gray-300': !form.errors.name && !nameError }"
                                    placeholder="John Doe"
                                />
                                <p v-if="nameError || form.errors.name" class="mt-1 text-sm text-red-500">
                                    {{ nameError || form.errors.name }}
                                </p>
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="mb-2 block text-sm font-medium text-gray-700">
                                    Email Address <span class="text-red-500">*</span>
                                </label>
                                <input
                                    id="email"
                                    v-model="form.email"
                                    @blur="validateEmail"
                                    type="email"
                                    maxlength="255"
                                    class="w-full rounded-lg border px-4 py-3 text-gray-900 focus:border-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                                    :class="{ 'border-red-500': form.errors.email || emailError, 'border-gray-300': !form.errors.email && !emailError }"
                                    placeholder="john@example.com"
                                />
                                <p v-if="emailError || form.errors.email" class="mt-1 text-sm text-red-500">
                                    {{ emailError || form.errors.email }}
                                </p>
                            </div>

                            <!-- Subject -->
                            <div>
                                <label for="subject" class="mb-2 block text-sm font-medium text-gray-700">
                                    Subject <span class="text-red-500">*</span>
                                </label>
                                <input
                                    id="subject"
                                    v-model="form.subject"
                                    @blur="validateSubject"
                                    type="text"
                                    maxlength="200"
                                    class="w-full rounded-lg border px-4 py-3 text-gray-900 focus:border-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                                    :class="{ 'border-red-500': form.errors.subject || subjectError, 'border-gray-300': !form.errors.subject && !subjectError }"
                                    placeholder="How can we help?"
                                />
                                <p v-if="subjectError || form.errors.subject" class="mt-1 text-sm text-red-500">
                                    {{ subjectError || form.errors.subject }}
                                </p>
                            </div>

                            <!-- Message -->
                            <div>
                                <label for="message" class="mb-2 block text-sm font-medium text-gray-700">
                                    Message <span class="text-red-500">*</span>
                                </label>
                                <textarea
                                    id="message"
                                    v-model="form.message"
                                    @blur="validateMessage"
                                    rows="6"
                                    maxlength="2000"
                                    class="w-full rounded-lg border px-4 py-3 text-gray-900 focus:border-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-500"
                                    :class="{ 'border-red-500': form.errors.message || messageError, 'border-gray-300': !form.errors.message && !messageError }"
                                    placeholder="Tell us more about your inquiry..."
                                ></textarea>
                                <div class="mt-1 flex items-center justify-between">
                                    <p v-if="messageError || form.errors.message" class="text-sm text-red-500">
                                        {{ messageError || form.errors.message }}
                                    </p>
                                    <p v-else class="text-xs text-gray-500">
                                        {{ form.message.length }}/2000 characters
                                    </p>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button
                                type="submit"
                                :disabled="form.processing || !isFormValid"
                                class="w-full rounded-lg bg-gradient-to-r from-yellow-400 to-yellow-500 px-6 py-4 font-semibold text-gray-900 transition-all duration-300 hover:shadow-lg hover:scale-105 disabled:cursor-not-allowed disabled:opacity-50"
                            >
                                <span v-if="form.processing">Sending...</span>
                                <span v-else>Send Message</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
