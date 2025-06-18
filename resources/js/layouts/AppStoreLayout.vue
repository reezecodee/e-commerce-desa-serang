<script setup lang="ts">
import Navbar from '@/components/store/Navbar.vue';
import Footer from '@/components/store/Footer.vue';
</script>

<template>
    <Navbar />
    
    <slot></slot>

    <Footer />
</template>
