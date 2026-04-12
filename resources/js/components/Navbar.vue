<script setup>
import { usePage } from '@inertiajs/vue3'

const page = usePage()
</script>

<template>
  <header class="h-20 bg-blue-900 text-white shadow flex items-center px-6 relative">
    
    <div class="flex items-center gap-3">
      
      <!-- LOGO -->
      <img src="/image/logodinsos.png" class="w-10 h-12" />

      <!-- TEXT -->
      <div>
        <p class="text-lg font-bold">Dinas Sosial Boyolali</p>
        <p class="text-sm opacity-80">Sistem Arsip Digital</p>
      </div>

    </div>

    <!-- TITLE TENGAH -->
    <div class="absolute left-1/2 transform -translate-x-1/2">
      <p class="text-xl font-semibold">
        {{ page.props.title }}
      </p>
    </div>

  </header>
</template>