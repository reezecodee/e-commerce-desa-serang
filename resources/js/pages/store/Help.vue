<script setup lang="ts">
import AppStoreLayout from '@/layouts/AppStoreLayout.vue';
</script>

<template>
    <AppStoreLayout>
        <div class="container-fluid py-5 mt-5">
            <div class="container py-5">
                <h4 class="mb-3 text-dark">Pusat Bantuan</h4>
                <form action="" autocomplete="off">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="subject" class="form-label">Judul Laporan</label>
                                <input type="text" class="form-control border-1" placeholder="Masukkan judul laporan"
                                    id="subject">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="category" class="form-label">Kategori Laporan</label>
                                <select name="" id="category" class="form-select border-1">
                                    <option selected>-- Pilih Kategori --</option>
                                    <option value="Bug aplikasi">Bug aplikasi</option>
                                    <option value="Pembelian">Pembelian</option>
                                    <option value="Pengiriman">Pengiriman</option>
                                    <option value="Pembayaran">Pembayaran</option>
                                    <option value="Saran">Saran</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="message" class="form-label">Pesan Laporan</label>
                                <textarea rows="5" id="message"
                                    class="form-control border-1" placeholder="Masukkan pesan laporan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex mt-4 justify-content-end">
                        <button class="btn bg-primary text-light rounded-pill px-4 py-3">Kirim Laporan</button>
                    </div>
                </form>
            </div>
        </div>
    </AppStoreLayout>
</template>

<style scoped></style>