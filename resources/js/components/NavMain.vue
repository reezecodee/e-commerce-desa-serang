<script setup lang="ts">
import { SidebarGroup, SidebarGroupLabel, SidebarMenu, SidebarMenuButton, SidebarMenuItem } from '@/components/ui/sidebar';
import { type NavCategory } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';

defineProps<{
    categorizedNavItems: NavCategory[];
}>();

const page = usePage();
</script>

<template>
    <SidebarGroup class="px-2 py-0">
        <div v-for="categorizedNavItem in categorizedNavItems" :key="categorizedNavItem.title">
            <SidebarGroupLabel>{{ categorizedNavItem.title }}</SidebarGroupLabel>
            <SidebarMenu>
                <SidebarMenuItem v-for="item in categorizedNavItem.items" :key="item.title">
                    <SidebarMenuButton as-child :is-active="item.href === page.url" :tooltip="item.title">
                        <Link :href="item.href">
                        <component :is="item.icon" />
                        <span>{{ item.title }}</span>
                        </Link>
                    </SidebarMenuButton>
                </SidebarMenuItem>
            </SidebarMenu>
        </div>
    </SidebarGroup>
</template>
