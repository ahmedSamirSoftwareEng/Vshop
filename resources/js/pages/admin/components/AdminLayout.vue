<template>
    <div class="bg-gray-50 antialiased dark:bg-gray-900">
        <!-- Navbar start -->
        <Navbar />
        <!-- Navbar end-->

        <!-- Sidebar start -->
        <Sidebar />
        <!-- Sidebar end -->

        <slot />
    </div>
</template>

<script setup>
import { initFlowbite } from 'flowbite';
import { onMounted } from 'vue';
import Navbar from './Navbar.vue';
import Sidebar from './Sidebar.vue';

// initialize components based on data attribute selectors
onMounted(() => {
    initFlowbite();
});
</script>
