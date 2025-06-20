<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import { onMounted, nextTick } from 'vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Kelola Mitra UMKM',
        href: '/kelola-mitra-umkm',
    },
];

onMounted(async () => {
  await nextTick();

  $('#datatable').DataTable({
    processing: true,
    serverSide: true,
    ajax: '/data-mitra-umkm',
    columns: [
      { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
      { data: 'mitra', name: 'mitra' },
      { data: 'toko', name: 'toko' },
      { data: 'alamat', name: 'alamat' },
      { data: 'produk', name: 'produk' },
      { data: 'action', name: 'action', orderable: false, searchable: false }
    ]
  });
});
</script>

<template>

    <Head title="Kelola Mitra UMKM" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div class="w-full overflow-x-auto">
                <table id="datatable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Mitra</th>
                            <th>Nama Toko UMKM</th>
                            <th>Alamat</th>
                            <th>Total Produk</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped></style>