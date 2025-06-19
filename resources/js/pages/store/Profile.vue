<script setup lang="ts">
import AppStoreLayout from '@/layouts/AppStoreLayout.vue';
</script>

<template>
    <AppStoreLayout>
        <div class="container-fluid py-5 mt-5">
            <div class="container py-5">
                <div class="mb-4">
                    <h4 class="mb-3 text-dark">Profile Saya</h4>
                    <form action="" autocomplete="off">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="name" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control border-1" placeholder="Masukkan nama lengkap"
                                        id="name">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="text" class="form-control border-1"
                                        placeholder="Masukkan nomor telepon" id="telepon">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control border-1" placeholder="Masukkan email"
                                        id="email">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label for="address" class="form-label">Alamat lengkap</label>
                                    <textarea rows="5" id="address" class="form-control border-1"
                                        placeholder="Masukkan alamat Anda"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mt-4 justify-content-end">
                            <button class="btn bg-primary text-light rounded-pill px-4 py-3">Perbarui Profile</button>
                        </div>
                    </form>
                </div>
                <div class="mb-4">
                    <h4 class="mb-3 text-dark">Ganti Password</h4>
                    <form action="" autocomplete="off">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="current-password" class="form-label">Password Saat Ini</label>
                                    <input type="text" class="form-control border-1" placeholder="Masukkan password saat ini"
                                        id="current-password">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="new-password" class="form-label">Password Baru</label>
                                    <input type="password" class="form-control border-1"
                                        placeholder="Masukkan password baru" id="new-password">
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="confirm-password" class="form-label">Konfirmasi Password Baru</label>
                                    <input type="password" class="form-control border-1"
                                        placeholder="Masukkan konfirmasi password baru" id="confirm-password">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mt-4 justify-content-end">
                            <button class="btn bg-primary text-light rounded-pill px-4 py-3">Ganti Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppStoreLayout>
</template>

<style scoped></style>