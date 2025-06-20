<script setup lang="ts">
import NavFooter from '@/components/NavFooter.vue';
import NavMain from '@/components/NavMain.vue';
import NavUser from '@/components/NavUser.vue';
import { Sidebar, SidebarContent, SidebarFooter, SidebarHeader, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavCategory } from '@/types';
import { Link } from '@inertiajs/vue3';
import { Folder, LayoutGrid, Users, Tag, PackageSearch, Flag, Star, ArrowLeftRight, Settings } from 'lucide-vue-next';
import AppLogo from './AppLogo.vue';

const categorizedNavItems: NavCategory[] = [
    {
        title: 'General',
        items: [
            {
                title: 'Dashboard',
                href: '/dashboard',
                icon: LayoutGrid,
            },
        ],
    },
    {
        title: 'Manajemen Data',
        items: [
            {
                title: 'Kelola Pengguna',
                href: '/users',
                icon: Users,
            },
            {
                title: 'Kelola Kategori',
                href: '/categories',
                icon: Tag,
            },
            {
                title: 'Kelola Produk',
                href: '/products',
                icon: PackageSearch,
            },
        ],
    },
    {
        title: 'Interaksi & Laporan',
        items: [
            {
                title: 'Laporan Masuk',
                href: '/helps',
                icon: Flag,
            },
            {
                title: 'Kelola Ulasan',
                href: '/reviews',
                icon: Star,
            },
        ],
    },
    {
        title: 'Keuangan & Transaksi',
        items: [
            {
                title: 'Kelola Transaksi',
                href: '/transactions',
                icon: ArrowLeftRight,
            },
        ],
    },
];

const footerNavItems: NavItem[] = [
    {
        title: 'Penyimpanan Server',
        href: '',
        icon: Folder,
    },
    {
        title: 'Pengaturan',
        href: 'https://laravel.com/docs/starter-kits#vue',
        icon: Settings,
    },
];
</script>

<template>
    <Sidebar collapsible="icon" variant="inset">
        <SidebarHeader>
            <SidebarMenu>
                <SidebarMenuItem>
                    <SidebarMenuButton size="lg" as-child>
                        <Link :href="route('dashboard')">
                        <AppLogo />
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </SidebarHeader>

        <SidebarContent>
            <NavMain :categorized-nav-items="categorizedNavItems" />
        </SidebarContent>

        <SidebarFooter>
            <NavFooter :items="footerNavItems" />
            <NavUser />
        </SidebarFooter>
    </Sidebar>
    <slot />
</template>
