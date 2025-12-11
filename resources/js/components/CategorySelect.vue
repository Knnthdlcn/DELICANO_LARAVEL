<template>
  <div class="relative">
    <button
      @click="isOpen = !isOpen"
      class="w-full px-4 py-2 bg-white border-2 border-gray-300 rounded-lg text-gray-900 font-medium flex items-center justify-between hover:border-yellow-500 focus:outline-none focus:border-yellow-500 focus:ring-2 focus:ring-yellow-500 transition"
    >
      <span>{{ selectedLabel }}</span>
      <svg
        class="w-5 h-5 text-gray-700 transition-transform"
        :class="{ 'rotate-180': isOpen }"
        fill="none"
        stroke="currentColor"
        viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
      </svg>
    </button>

    <div
      v-if="isOpen"
      class="absolute top-full left-0 right-0 mt-2 bg-white border-2 border-gray-300 rounded-lg shadow-lg z-10"
    >
      <button
        type="button"
        @click="selectCategory('')"
        class="w-full px-4 py-3 text-left text-gray-900 font-medium hover:bg-yellow-50 transition"
        :class="{ 'bg-yellow-100': selectedValue === '' }"
      >
        All Categories
      </button>

      <button
        type="button"
        v-for="category in categories"
        :key="category"
        @click="selectCategory(category)"
        class="w-full px-4 py-3 text-left text-gray-900 hover:bg-yellow-50 transition border-t border-gray-200"
        :class="{ 'bg-yellow-100': selectedValue === category }"
      >
        {{ category }}
      </button>
    </div>

    <!-- Click outside to close -->
    <div
      v-if="isOpen"
      @click="isOpen = false"
      class="fixed inset-0 z-0"
    />
  </div>
</template>

<script setup>
import { ref, computed } from 'vue'

const props = defineProps({
  modelValue: String,
  categories: Array,
  default: ''
})

const emit = defineEmits(['update:modelValue'])

const isOpen = ref(false)

const selectedValue = computed(() => props.modelValue || '')

const selectedLabel = computed(() => {
  if (!selectedValue.value) return 'All Categories'
  return selectedValue.value
})

const selectCategory = (category) => {
  emit('update:modelValue', category)
  isOpen.value = false
}
</script>
