<script setup lang="ts">
defineProps<{
    title: string;
    total: number;
}>();
</script>

<template>
    <div
        class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
        <div
            class="rounded-xl border border-neutral-200 dark:border-neutral-700 bg-white dark:bg-neutral-900 shadow-sm p-6 h-full">
            <slot/>
            <h3 class="text-lg font-semibold text-neutral-800 dark:text-neutral-200">{{ title }}</h3>
            <p class="text-3xl font-bold text-primary-600 dark:text-primary-400">{{ total }}</p>
        </div>
    </div>
</template>
