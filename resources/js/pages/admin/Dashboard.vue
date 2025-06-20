<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { Shield, Store, User, PackageSearch, Tag, Flag } from 'lucide-vue-next';
import CardTotal from '@/components/admin/CardTotal.vue';
import Barchart from '@/components/admin/Barchart.vue';
import Linechart from '@/components/admin/Linechart.vue';
import Piechart from '@/components/admin/Piechart.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];
</script>

<template>

    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <CardTotal title="Total Admin" :total="10">
                    <Shield class="w-12 h-12 mb-3" />
                </CardTotal>
                <CardTotal title="Total Mitra" :total="10">
                    <Store class="w-12 h-12 mb-3" />
                </CardTotal>
                <CardTotal title="Total Pengguna" :total="10">
                    <User class="w-12 h-12 mb-3" />
                </CardTotal>
                <CardTotal title="Total Laporan Masuk" :total="10">
                    <Flag class="w-12 h-12 mb-3" />
                </CardTotal>
                <CardTotal title="Total Produk" :total="10">
                    <PackageSearch class="w-12 h-12 mb-3" />
                </CardTotal>
                <CardTotal title="Total Kategori Produk" :total="10">
                    <Tag class="w-12 h-12 mb-3" />
                </CardTotal>
            </div>
            <div
                class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
                <Barchart/>
            </div>
            <div
                class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
                <Linechart/>
            </div>
            <div
                class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
                <Piechart/>
            </div>
        </div>
    </AppLayout>
</template>
