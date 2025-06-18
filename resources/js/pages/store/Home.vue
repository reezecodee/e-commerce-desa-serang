<script setup lang="ts">
import AppStoreLayout from '@/layouts/AppStoreLayout.vue';
import HeroSection from '@/pages/store/section/home/HeroSection.vue';
import ProductSection from '@/pages/store/section/home/ProductSection.vue';
import MoreProduct from '@/pages/store/section/home/MoreProduct.vue';
import TopProduct from '@/pages/store/section/home/TopProduct.vue';
import Contact from '@/pages/store/section/home/Contact.vue';
</script>

<template>
    <AppStoreLayout>
        <HeroSection />
        <ProductSection />
        <MoreProduct />
        <TopProduct />
        <Contact />
    </AppStoreLayout>
</template>

<style scoped></style>